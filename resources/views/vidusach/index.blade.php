<x-book-layout>
    <x-slot:title>
        Sách
    </x-slot:title>

<style>
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


    {{-- LOAD JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- AJAX --}}
    <script>
        $(document).ready(function(){

            $(".menu-the-loai").click(function(e){
                e.preventDefault();

                let the_loai = $(this).attr("the_loai");

                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "{{ route('bookview') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "the_loai": the_loai
                    },
                    success: function(data){
                        $("#book-view-div").html(data);
                    },
                    error: function(xhr, status, error){
                        console.log(error);
                    }
                });

            });

        });
    </script>

<div id='book-view-div'>
    <div class='list-book'>
        @foreach($data as $row)
        <div class='book'>
            <a href="{{url('sach/chitiet/'.$row->id)}}">
                <img src="{{asset('book_image/'.$row->file_anh_bia)}}" width='200px' height='200px'><br>
                <b>{{$row->tieu_de}}</b><br/>
                <i>{{number_format($row->gia_ban,0,",",".")}}đ</i><br>
            </a>
            <div class='btn-add-product'>
                <button class='btn btn-success btn-sm mb-1 add-product' book_id="{{$row->id}}">
                    Thêm vào giỏ hàng
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>

</x-book-layout>


