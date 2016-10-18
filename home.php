<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css\hstyle.css">
	<script src="http://localhost:8080/webdev/jquery-3.1.1.js"></script>
	<script src="transitions.js"></script>

	<head>
		<?php
			include 'dbh.php';
			$sql = "SELECT user,totalgames,cashwon FROM users ORDER BY cashwon DESC LIMIT 0, 25;";
			$result = mysqli_query($conn, $sql);
		?>
	</head>
		<body style="background-color: #fff;">

				<div class="header">
						<img class="logo" src="http://localhost:8080/webdev/assets/kappa.png"></div><h2>KappaCoins.com - This aint Gambling Momma!</h2>
				</div>
				<div class="leftbar">
					<div class="buttons">
						<div class="mainButtons">
							<div class="play_button"><div id="play" class="icons"></div><p align="center">Play</p></div>
							<div class="separator"></div>
							<div class="topplayers_button"><div id="topplayers" class="icons"></div><p align="center">Top players</p></div>
							<div class="separator"></div>
							<div class="history_button"><div id="history" class="icons"></div><p align="center">History</p></div>
							<div class="separator"></div>
						</div>
						<div class="miscButtons">
							<div id="faq"></div>
							<div id="rules"></div>
							<div id="support"></div>
						</div>
					</div>
			 </div>
			 <div class="panel">
						<table class="tphead" align="center">
							<div id="sideexit" class="icons" align="right" type="button"></div>
							<h1 class="topheader">Top Players</h1>
							<tr>
						    <th class="borderbottom">Rank</th>
						    <th class="borderbottom" align="left">Nickname</th>
						    <th class="borderbottom">Total games</th>
								<th class="borderbottom">Won($)</th>
						  </tr>
							<?php $i=1; while($row=mysqli_fetch_array($result)){ ?>
								<tr class = "top">
									<td class="hidden-xs" target="_blank" align="center"><?php echo $i; ?>
									<td class="hidden-xs" target="_blank"><?php echo $row['user']; ?>
									<td class="hidden-xs" target="_blank" align="center"> <?php echo $row['totalgames']; ?> </td>
									<td class="hidden-xs" target="_blank" align="center"> <?php echo $row['cashwon']; ?> </td>
								</tr>
						 <?php $i++;}?>

						</table>
 	 		 </div>
		</body>
</html>
