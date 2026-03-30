<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Book_Controller1 extends Controller
{

  function thongtinsachkinhdien()
  {
    $sach = DB::table("sach as s")
                ->join("dm_the_loai as t","s.the_loai","=","t.id")
                ->select("s.id","s.tieu_de","s.nha_xuat_ban","s.tac_gia","s.gia_ban","s.link_anh_bia")
                ->where("t.id","3")-> get();
    
     return view("tac_pham_kinh_dien",compact("sach"));        
  }
}

