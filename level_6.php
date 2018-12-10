<?php 
session_start();
session_set_cookie_params('PHPSESSID', '1'); ?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title>Level 6</title>
</head>
<body>
	<div class="container">
		<h1 style="padding-top: 10px">TUBES</h1>
		
		<div class="card">
			
				<div class="card-body">
					<form method="post">
						<h4 class="card-title">Teka-teki 6</h4>
						<p class="card-text">It is the process of recognizing a user's identity</p>
						<div class="form-group">
						  <input type="text" class="form-control" name="answer" placeholder="Masukkan jawabannya (format: esd{jawaban})" id="myText" value="esd{yakinini?}">
						</div>

						<button type="submit" class="btn btn-primary">Jawab</button>
					</form>
				</div>
				
		</div>

		<?php
			if(isset($_POST['answer'])) {
				if ($_POST['answer'] == 'esd{yakinini?}' && $_SERVER['QUERY_STRING'] == 'auth=1') {
					header('Location: level_7.php');
				} else {
					echo "Tebakan anda salah";
				}
				
				// level_5	
				
				// $headers = apache_request_headers();

				// if (isset($headers['Authorization'])) {
				// 	echo 'asd';
				// } else {

				// 	echo 'salah';
				// }
			}
		?>

	</div>
	
	

</body>
</html>