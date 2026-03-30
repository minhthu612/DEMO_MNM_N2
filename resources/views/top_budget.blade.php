<h1>Top 10 Movies by Budget</h1>


<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>STT</th>
        <th>Tên phim</th>
        <th>Ngân sách</th>
    </tr>

    @foreach($movies as $index => $m)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $m->movie_name }}</td>
            <td>{{ $m->budget }}</td>
        </tr>
    @endforeach
</table>

