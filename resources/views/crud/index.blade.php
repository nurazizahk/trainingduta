<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Tabel Nama Siswa dan Kelas</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Edit</th>
            <th>Hapus</th>
            
        </tr>
    </thead>
    <tbody>
        @if(count($data)>0)
            @foreach($data as $row)
                <tr>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->kelas}}</td>
                    <td><a class="btn" href="/crud/{{$row->id}}/edit">Edit</a></td>
                    <td>
                        <form method="POST" action="/crud/{{$row->id}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit">Hapus</button>
                        </form>    
                    </td>
                    
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


</body>
</html>