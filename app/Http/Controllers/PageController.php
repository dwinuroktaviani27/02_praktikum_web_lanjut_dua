<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        $id = 1941720239;
        $nama = "Dwi Nur Oktaviani";
        echo "NIM : ".$id." NAMA : ".$nama;
    }

    public function articles($id)
    {
        echo "Halaman Artikel dengan Id ".$id;
    }
}
