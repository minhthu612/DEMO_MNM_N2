<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Age_Controller extends Controller
{
    function formtinhtuoi()
    {
        return view('age');
    }

    function tinhtuoi(Request $request)
    {
        $namsinh = $request->input('namsinh');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        $tuoi = date('Y') - $namsinh;
        return 'Kết quả là: '.$tuoi;
    }
}