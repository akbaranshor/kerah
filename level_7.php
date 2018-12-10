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
	<title>Level 7</title>
</head>
<body>
	<div class="container">
		<h1 style="padding-top: 10px">TUBES</h1>
		
		<div class="card">
			
				<div class="card-body">
					<form method="post">
						<h4 class="card-title">Teka-teki 7</h4>
						<p class="card-text">Saya mencoba untuk melampaui batas</p>
						<div class="form-group">
						  <input type="text" class="form-control" name="answer" placeholder="Masukkan jawabannya (format: esd{jawaban})" id="myText" maxlength="5">
						</div>

						<button type="submit" class="btn btn-primary" onmouseover="test()" id="submit">Jawab</button>
					</form>
				</div>
				
		</div>

		<?php
			if(isset($_POST['answer'])) {
				// level_5	
				if ($_POST['answer'] == 'esd{sikatboscu}') {
					header('Location: level_8.php');
				} else {
					echo "Tebakan anda salah";
				}
				// $headers = apache_request_headers();

				// if (isset($headers['Authorization'])) {
				// 	echo 'asd';
				// } else {

				// 	echo 'salah';
				// }
			}
		?>

	</div>
	
	<script type="text/javascript">
		var i=document.getElementById("submit");function test(){if($("#submit").remove(),"none"!=i.style.display)alert("waduh!!!");else{alert("esd{sikatboscu}")}}

		// var i=document.getElementById("submit");function test(){i.style.display="none","none"!=i.style.display?alert("jago"):alert("munculin coba")}




		 
	</script>	
	

</body>
</html>