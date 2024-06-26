<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class AdminController extends Controller
{
    public function kadaluarsa()
    {
        $kadaluarsa = Pinjam::join('penyewa', 'penyewa.user_ID', '=', 'pinjam.user_ID')
        ->where('tanggalAkhir', '<=', now())
        ->get();
        return view('admin.kadaluarsa', compact('kadaluarsa'));
    }

    public function ketentuan()
    {
        return view('admin.ketentuan');
    }

    public function peminjaman()
    {
        $peminjaman = Pinjam::join('penyewa', 'penyewa.user_ID', '=', 'pinjam.user_ID')->get();
        return view('admin.peminjaman', compact('peminjaman'));
    }

    public function daftarbuku()
    {
        $DataBuku = Buku::all();
        return view('admin.daftarbuku', compact('DataBuku'));
    }

    public function edit($ISBN)
    {
        try {
            $DataBuku = Buku::all();
            $buku = Buku::where('ISBN', $ISBN)->firstOrFail();
            return view('admin.daftarbuku', compact('buku', 'DataBuku'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function updateBuku(Request $request, $ISBN)
    {
        try {
            // Validate the request data
            $request->validate([
                'pengarang' => 'required',
                'penerbit' => 'required',
                'harga' => 'required',
                'keterangan' => 'required',
            ]);

            // Find the book by ISBN
            $book = Buku::where('ISBN', $ISBN)->first();

            if (!$book) {
                // Handle book not found
                return redirect()->back()->with('error', 'Book not found.');
            }

            // Update the book with the new data

            $book->gambar = $request->gambar;
            $book->nama_buku = $request->nama_buku;
            $book->pengarang = $request->pengarang;
            $book->pengarang = $request->pengarang;
            $book->pengarang = $request->pengarang;
            $book->penerbit = $request->penerbit;
            $book->harga = $request->harga;
            $book->keterangan = $request->keterangan;

            // Save the updated book
            $book->save();

            // Redirect back with success message
            return redirect()
                ->back()
                ->with('success', 'Book updated successfully.')
                ->with('alert', 'Buku berhasil diganti!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function destroy($ISBN)
    {
        $buku = Buku::where('ISBN', $ISBN)->firstOrFail();
        $buku->delete();
        return redirect()
        ->route('daftarbuku')
        ->with('success', 'Book deleted successfully')
        ->with('alert', 'Buku dihapus!');
    }
    public function tambahBuku(Request $request)
    {
        try {
            $request->validate([
                'gambar' => 'required|string|max:2000',
                'nama_buku' => 'required|string|max:255',
                'ISBN' => 'required|string|max:13|unique:buku',
                'pengarang' => 'required|string|max:255',
                'penerbit' => 'required|string|max:255',
                'harga' => 'required|numeric',
                'keterangan' => 'nullable|string',
                'agama' => 'required|string|max:255',
                'budaya' => 'required|string|max:255',
                'nonfiksi' => 'required|string|max:255',
                'fiksi' => 'required|string|max:255',
                'referensi' => 'nullable|string|max:255',
            ]);

            $kategori = Kategori::create([
                'kategori_ID' => $request->ISBN,
                'agama' => $request->agama,
                'budaya' => $request->budaya,
                'nonfiksi' => $request->nonfiksi,
                'fiksi' => $request->fiksi,
                'referensi' => $request->referensi ?? 'Tidak Ada',
            ]);

            Buku::create([
                'gambar' => $request->gambar,
                'nama_buku' => $request->nama_buku,
                'ISBN' => $request->ISBN,
                'kategori_ID' => $kategori->Kategori_ID,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,
            ]);

            return redirect()
            ->route('daftarbuku')
            ->with('success', 'Buku berhasil ditambahkan')
            ->with('alert', 'Buku berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
