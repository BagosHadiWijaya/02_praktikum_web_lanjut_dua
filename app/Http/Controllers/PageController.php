<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nama : Bagos Hadi Wijaya <br>";
        echo "NIM : 2031710100";
    }

    public function article($id = 1){
        echo "Halaman artikel dengan id ".$id;
    }
    
}
