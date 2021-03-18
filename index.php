<!DOCTYPE html>
<meta charset="utf-8">
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<head>
	<title> Küpeli</title>
</head>
<body>

	<?php
	if ( 0 > 1 ) {

 	?>

 	 <div class="alert alert-primary" role="alert">
	 şifreni yanlış girdin.
  	 </div>

  	 <?php
		}
  	 ?>
<form method="POST" action="/bilgi-gonder.php">
<input type="text" name="adi" placeholder="adini gir keko"> <br> <br>
<label for="ilkokul_numarsi">İlkokul numaranızı giriniz:</label> <br>
<input type="number" name="ilkokul_numarsi" placeholder="numarani gir" value="4325"> <br> <br>
<input type="number" name="telefon_numarasi">

<button type="submit">GONDERİYORUM</button>

</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>