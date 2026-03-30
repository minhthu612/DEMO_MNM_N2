<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Top 10 phim điểm cao nhất</title>
    <meta charset="utf-8">
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Top 10 phim có điểm đánh giá cao nhất</h2>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên phim</th>
                <th>Ngày phát hành</th>
                <th>Điểm đánh giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phim as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->movie_name }}</td>
                    <td>{{ $p->release_date }}</td>
                    <td>{{ $p->vote_average }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>


