<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        
        $books = [
            ['id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005, 'kategori' => 'Novel', 'stok' => 15],
            ['id' => 2, 'judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980, 'kategori' => 'Novel Sejarah', 'stok' => 10],
            ['id' => 3, 'judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun' => 2019, 'kategori' => 'Self Improvement', 'stok' => 20],
            ['id' => 4, 'judul' => 'Atomic Habits', 'penulis' => 'James Clear', 'tahun' => 2018, 'kategori' => 'Self Improvement', 'stok' => 25],
            ['id' => 5, 'judul' => 'Sapiens', 'penulis' => 'Yuval Noah Harari', 'tahun' => 2011, 'kategori' => 'Sejarah', 'stok' => 12],
            ['id' => 6, 'judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009, 'kategori' => 'Novel', 'stok' => 18],
            ['id' => 7, 'judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016, 'kategori' => 'Novel', 'stok' => 22],
            ['id'=>8, 'judul'=>'Cantik Itu Luka', 'penulis'=>'Eka Kurniawan', 'tahun'=>2002, 'kategori'=>'Novel', 'stok'=>8]
        ];

        return view('pengelolaan', compact('books', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}