<html>
<head>
    <title>Danh sách thể loại phim</title>
</head>
<body>

<h1>Danh sách thể loại phim</h1>


<table border="1">
    <tr>
        <th>Tên thể loại</th>
        <th>Tên tiếng Việt</th>
    </tr>

    @foreach($genres as $row)
    <tr>
        <td>{{ $row->genre_name }}</td>
        <td>{{ $row->genre_name_vn }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>