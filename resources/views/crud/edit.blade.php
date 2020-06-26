<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ action('CrudController@update',$data->id) }}" method="POST">
    @csrf
  Nama:<br>
  <input type="text" name="nama" value="{{$data->nama}}">
  <br>
  Kelas:<br>
  <input type="text" name="kelas" value="{{$data->kelas}}">
  <br><br>
  <input type="hidden" name="_method" value="PUT">
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>