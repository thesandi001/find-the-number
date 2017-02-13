<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Find The Number Game</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<?php $level = isset($_GET['level']) ? $_GET['level'] : 1; ?>
		<?php for($i=0; $i<=$level; $i++): ?>
			<div class="row">
			<?php for($j=0; $j<=$level; $j++): ?>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding:10px 0; background: #<?php echo rand(100000,999999); ?>">
					<a href="#">
						<center><div style="color:#fff;"><?php $numbers[$i][$j] = rand(1,999); echo $numbers[$i][$j]; ?></div></center>
					</a>
				</div>
			<?php endfor; ?>
			</div>
		<?php endfor; ?>
		<h1>Find <?php echo $numbers[rand(0,$level)][rand(0,$level)]; ?></h1>		
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>