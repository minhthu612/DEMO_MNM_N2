<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Book_Controller extends Controller
{
    function laythongtintheloai()
    {
        $the_loai_sach = DB::table("dm_the_loai")->get();
        return view('qlsach.the_loai',compact('the_loai_sach'));
    }

    function laythongtinsach()
    {
        $sach = DB::table('sach')->select('tieu_de','tac_gia')
                                ->where('nha_xuat_ban','van_hoc')->get();
        return view('qlsach.thong_tin_sach',compact('sach'));
    }

   
}