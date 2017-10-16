<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<title>&copy; Terkadang Entahlah Ltd. Registration Page</title>
</head>
<body>
<div class="container">
    <h1 class="well">&copy; Terkadang Entahlah Ltd. Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action='http://<?php echo $_SERVER['HTTP_HOST'];?>/register/register.php' method="POST">
					<div class="col-sm-12"
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Nama Website</label>
								<input type="text" placeholder="Digunakan untuk semua domain dibawah" name="title" class="form-control" required>

                                                        	<label>Domain List</label>
                                                        	<textarea placeholder="Satu per baris, tanpa http://" rows="3" class="form-control" name="domain" required></textarea>
								<br>
								<input type="submit"   class="btn btn-lg btn-info"></input>
                                                        </div>
						</div>
					</div>
				</form>
	</div>
	</div>
</div>
</body>
</html>
