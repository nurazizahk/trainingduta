<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ action('namacontroller@update',$data->id) }}" method="POST">
    @csrf
  Id:<br>
  <input type="number" name="id_siswa" value="{{$data->id_siswa}}">
  <br>
  Nama:<br>
  <input type="text" name="nama_siswa" value="{{$data->nama_siswa}}">
  <br><br>
  <input type="hidden" name="_method" value="PUT">
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>