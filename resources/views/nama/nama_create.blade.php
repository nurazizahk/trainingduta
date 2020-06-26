<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ action('namacontroller@store') }}" method="POST">
    @csrf
  Id:<br>
  <input type="integer" name="id_siswa" value="">
  <br>
  Nama:<br>
  <input type="text" name="nama_siswa" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>