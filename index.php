<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="title" content="Agriweb">
	<meta name="Agriweb" content="Agriweb ID, Agriweb IPB, Komunitas Web Development, Ilmu Komputer IPB, Komunitas ilmu komputer">
	<meta name="description" content="Komunitas Web Development Ilmu Komputer IPB">
	<meta name="abstract" content="Komunitas Web Development Ilmu Komputer IPB">
	
	<meta name="author" content="ivan maulana">
	<meta name="publisher" content="agri.web.id">
	<meta name="copyright" content="agri.web.id">
	<link rel="shortcut icon" href="assets/img/favicon.png">
	
	<title>Aplikasi SMS KMNU</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>
  <nav>
    <div class="nav-wrapper teal lighten-2">
      <a href="#" class="brand-logo center">e-SMS KMNU</a>
    </div>
  </nav>

<br>
    <div class="row">
        <div class="col-xs-6 col-sm-offset-3">
            <form enctype="multipart/form-data" name="myForm" action="kirim.php" method="post" onsubmit="return validateUser()" >
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="validate" name="username" placeholder="Username">
            </div>
            <div class="form-group">
           	<label for="exampleInputEmail1">Password</label>
                <input id="last_name" type="password" class="validate" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pilih File CSV yang berisi No. Tujuan. Sesuaikan Deangan Format Berikut : <a href="contoh.csv">Contoh File</a></label>
                <input size="50" type="file" name="filename">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">isi SMS</label>
                <textarea class="form-control" rows="9" name="isi" placeholder="Isi SMS"></textarea>
            </div>
            <button type="submit" name="submit" class="btn waves-effect waves-light btn-block">Kirim</button>
            </form>
            <br>
            <div class="text-center">
            	<p> Jika ada pertanyaan atau kesulitan, silahkan hubungi : <br><a href="http://agri.web.id">ivan maulana</a> (KMNU IPB), +628988918895 (wa)</p> 
            </div>
        </div>
    </div>
  
</body>
</html>