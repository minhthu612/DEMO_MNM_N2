<center><h2>Danh sách phim thể loại Action</h2></center>

<table border="1">
<tr>
    <th>Tên phim</th>
    <th>Ngày phát hành</th>
    <th>Mô tả</th>
    <th>Ảnh</th>
</tr>

@foreach($movies as $m)
<tr>
    <td>{{ $m->movie_name }}</td>
    <td>{{ $m->release_date }}</td>
    <td>{{ $m->overview }}</td>
    <td>
        <img src="{{ $m->image_link }}" width="100">
    </td>
</tr>
@endforeach

</table>