<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Category;

class Book_Controller2 extends Controller
{
  function laythongtintheloai()
  {
    $the_loai_sach = Category::all();
    return view("qlsach.the_loai",compact("the_loai_sach"));
  }

  function laythongtinsach()
  {
    $sach = Book::where("nha_xuat_ban","Văn Học")->get();
    return view("qlsach.thong_tin_sach",compact("sach"));
  }

  function themdulieu()
  {
    $data = [
      ["id"=>4,"ten_the_loai"=>"Trinh thám"],
      ["id"=>5,"ten_the_loai"=>"Văn học"],
    ];
    DB::table("dm_the_loai")->insert($data);
  }

  function xoadulieu()
  {
    $data = ["ten_the_loai"=>"Trinh thám"];
    DB::table("dm_the_loai")->where("id",4)
                            ->delete();
  }

  function suadulieu()
  {
    $data = ["ten_the_loai"=>"Học thuật"];
    DB::table("dm_the_loai")->where("id",5)
                            ->update($data);
  }
}

