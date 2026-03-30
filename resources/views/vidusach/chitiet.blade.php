<x-book-layout>
    <x-slot:title>
        Chi tiết
    </x-slot:title>

<style>
.info
{
display:grid;
grid-template-columns:repeat(2,30% 70%);
}
.navbar {
    background-color: #ff5850;
    font-weight:bold;
}
.nav-item a {
    color: #fff!important;
}
.navbar-nav {
    margin:0 auto;
}
.list-book{
    display:grid;
    grid-template-columns:repeat(4,24%);
}
.book {
    margin:10px;
    text-align:center;
}
</style>
<h4>{{$data->tieu_de}}</h4>
<div class='info'>
<div>
<img src="{{asset('book_image/'.$data->file_anh_bia)}}" width="200px" height="200px">
</div>
<div>
Nhà cung cấp: <b>{{$data->nha_cung_cap}}</b><br>
Nhà xuất bản: <b>{{$data->nha_xuat_ban}}</b><br>
Tác giả: <b>{{$data->tac_gia}}</b><br>
Hình thức bìa: <b>{{$data->hinh_thuc_bia}}</b><br>
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<b>Mô tả:</b><br>
{{$data->mo_ta}} </div>
</div>
</x-book-layout>