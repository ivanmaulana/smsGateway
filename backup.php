<!DOCTYPE html>
<html lang="en">

<head>
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

    <title>Aplikasi SMS KMNU IPB</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">

	<script>
	function validateUser() {
	    var x = document.forms["myForm"]["username"].value;
	    var y = document.forms["myForm"]["password"].value;
	    if (x != "kmnu" || y != "ipb") {
	        alert("username atau password salah");
	        return false;
	    }
	}
	</script>

</head>

<body>
    
    <br><br><br><br><br>
        
        
    <div class="row">
        <div class="col-xs-6 col-sm-offset-3">
            <form name="myForm" action="kirim.php" method="post" onsubmit="return validateUser()" >
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No. Tujuan (Pisahkan dengan spasi). Misalkan : 628988918895 628988958891</label>
                <textarea class="form-control" rows="3" id="tujuan" placeholder="No. Tujuan"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">isi SMS</label>
                <textarea class="form-control" rows="3" id="isi" placeholder="Isi SMS"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Kirim</button>
            </form>
        </div>
    </div>

</body>

</html>