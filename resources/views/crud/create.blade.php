<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ action('CrudController@store') }}" method="POST">
    @csrf
  Nama:<br>
  <input type="text" name="nama" value="">
  <br>
  Kelas:<br>
  <input type="text" name="kelas" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>