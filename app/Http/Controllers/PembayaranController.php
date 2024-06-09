<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Buku;
use App\Models\Pinjam;

class PembayaranController extends Controller
{
    public function borrow()
    {
        $buku = Buku::all();
        return view('pembayaran');
    }
    public function paymentgateway($ISBN)
    {
        if (Auth::check()) {
            $BeliBuku = Buku::where('ISBN', $ISBN)->firstOrFail();

            \Midtrans\Config::$serverKey = 'SB-Mid-server-Y0JuHh4WO3QyYhUo7V-jfUoY';
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $BeliBuku->harga,
                ),
                'customer_details' => array(
                    'first_name' => Auth::user()->namaDepan,
                    'last_name' => Auth::user()->namaBelakang,
                    'email' => Auth::user()->email,
                    // 'phone' => '08111222333',    
                ),
                'shipping_address' => array(
                    'first_name' => Auth::user()->namaDepan,
                    'last_name' => Auth::user()->namaBelakang,
                    'address' => Auth::user()->alamat,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            $ajukanPinjam = Pinjam::create([
                'user_ID' => Auth::user()->user_ID,
                'ISBN' => $BeliBuku->ISBN,
                'judulBuku' => $BeliBuku->nama_buku,
                'status' => 'Diproses',
                'tanggalPinjam' => today()->format('Y-m-d'),
                'tanggalAkhir' => today()->addMonth()->format('Y-m-d'),
                'biayaPinjam' => $BeliBuku->harga,
                'snapToken' => $snapToken,
            ]);

            return view('Pembayaran', compact('ajukanPinjam', 'BeliBuku'));
        } else {
            return redirect()->route('login');
        }
    }

    public function paySuccess($Pinjam_ID)
    {  
        $dataSukses = Pinjam::where('Pinjam_ID', $Pinjam_ID)
        ->where('user_ID', Auth::user()->user_ID)
        ->where('status', 'Diproses')
        ->firstOrFail();   

        $dataSukses->status = 'Dipinjam';
        $dataSukses->save();

        return redirect()->route('kategori');
    }
}
