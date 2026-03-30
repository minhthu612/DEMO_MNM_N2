<form action="{{ url('tinhtuoi') }}" method="post">
    Năm sinh: <input type="text" name="namsinh"><br>
    
    <input type="submit" value="Kết quả">
    {{ csrf_field() }}
</form>

