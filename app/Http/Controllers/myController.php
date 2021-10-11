<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;

class myController extends Controller
{
    public function index()
    {
        $jari = $_REQUEST['jari'];
        $luas_lingkaran = 3.14*($jari*$jari);
        $realoutput = [
                 'Luas Lingkaran' => $luas_lingkaran
             ];
        echo json_encode($realoutput);
    }


}
