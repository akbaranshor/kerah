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
	<title>Level 4</title>
</head>
<body>
	<div class="container">
		<h1 style="padding-top: 10px">TUBES</h1>
		
		<div class="card">
			
				<div class="card-body" onmouseover="answer()">
					<form method="post">
						<h4 class="card-title">Teka-teki 4</h4>
						<p class="card-text">esd{skripjawa}</p>
						<div class="form-group">
						  <input type="text" class="form-control" name="answer" placeholder="Masukkan jawabannya (format: esd{jawaban})" id="myText">
						</div>

						<button type="submit" class="btn btn-primary">Jawab</button>
					</form>
				</div>
				
		</div>

		<?php
			if(isset($_POST['answer'])) {

				if ($_POST['answer'] != 'esd{skripjawa}') {
					echo 'Tebakan anda salah';
				} else {
					header("Location: level_5.php");
    				exit;
				}
			}
		?>

	</div>

	<script type="text/javascript">
		function answer() {
		    alert('Coba ilangin popup ini');
		    document.getElementById("myText").disabled = true;
		}
	</script>	

</body>
</html>