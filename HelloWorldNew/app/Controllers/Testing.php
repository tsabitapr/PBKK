<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Testing extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hello! Welcome to My CodeIgniter Project',
            'content' => 'Selamat datang di halaman ini. Ini adalah halaman contoh untuk proyek CodeIgniter pertama saya.
                        Saya membuat proyek ini dengan CodeIgniter, yang adalah kerangka kerja PHP yang kuat dan cepat.
                        Anda bisa buat aplikasi web yang dinamis dengan mudah menggunakan CodeIgniter.
                        Semoga proyek ini bisa bantu Anda belajar dasar-dasar membuat website dengan CodeIgniter.'
        ];

        return view('templates/header', $data) .
               view('test_view', $data) .
               view('templates/footer', $data);
    }
}