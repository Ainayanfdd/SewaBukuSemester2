<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class MainpageController extends Controller
{
    public function library()
    {
        return view('library');
    }

    public function history()
    {
        return view('history');
    }

    public function kategori(Request $request)
    {
        $BukuFiksi = Buku::join('kategori', 'buku.Kategori_ID', '=', 'kategori.Kategori_ID')
            ->where('kategori.Fiksi', 'Ya')
            ->where('kategori.NonFiksi', 'Tidak')
            ->select('buku.*', 'kategori.*')
            ->get();
        $BukuNonFiksi = Buku::join('kategori', 'buku.Kategori_ID', '=', 'kategori.Kategori_ID')
            ->where('kategori.Fiksi', 'Tidak')
            ->where('kategori.NonFiksi', 'Ya')
            ->select('buku.*', 'kategori.*')
            ->get();
        $BukuAgama = Buku::join('kategori', 'buku.Kategori_ID', '=', 'kategori.Kategori_ID')
            ->where('kategori.Agama', 'Islam')
            ->select('buku.*', 'kategori.*')
            ->get();
        $BukuBudaya = Buku::join('kategori', 'buku.Kategori_ID', '=', 'kategori.Kategori_ID')
            ->where('kategori.Budaya', 'Indonesia')
            ->select('buku.*', 'kategori.*')
            ->get();
        $SemuaBuku = Buku::all();

        $category = $request->get('category', 'SemuaBuku');

        switch ($category) {
            case 'Fiksi':
                $books = $BukuFiksi;
                break;
            case 'Non Fiksi':
                $books = $BukuNonFiksi;
                break;
            case 'Agama':
                $books = $BukuAgama;
                break;
            case 'Budaya':
                $books = $BukuBudaya;
                break;
            default:
                $books = $SemuaBuku;
                break;
        }

        return view('kategori', compact('category', 'books'));
    }


    public function wishlist()
    {
        return view('wishlist');
    }

    public function notify()
    {
        return view('notify');
    }
}
