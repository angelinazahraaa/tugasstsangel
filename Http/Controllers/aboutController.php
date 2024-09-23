<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function tampil() {
        $data =[
        'judul' => 'About'
    ];
    return view('About,$data');

    }
}
