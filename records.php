
<!DOCTYPE html>
<html>
	<!--
	    Aaron Ohashi
   		6/23/15
   		Fantasy Football Website
	-->
	
	<head>
		<title>Shaun Alexander's Retirement Fund</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  		<link rel="stylesheet" href="fantasyfootball.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  		 <script src=""></script>

	</head>

	<body>
		<div class="container-fluid">
			<div>
				<img src="football_banner.jpg" alt="banner" />
			</div>
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div>
			      <ul class="nav navbar-nav">
			        <li><a href="fantasyfootball.php">Home</a></li>
			        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teams<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Team1</a></li>
			            <li><a href="#">Team 2</a></li>
			            <li><a href="#">Team 3</a></li>
			          </ul>
			        </li>
			        <li><a href="standings.html">Standings</a></li>
			        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Owner Bios<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">name 1</a></li>
			            <li><a href="#">name 2</a></li>
			            <li><a href="#">name 3</a></li>
			          </ul>
			        </li>
			        <li class="active"><a href="records.php">Record Book</a></li>
			        <li><a href="#">Rules</a></li>
			        <li><a href="#">Scoreboard</a></li>
			        <li><a href="#">Facebook Group</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<table data-toggle="table">
					    <thead>
					        <tr>
					            <th data-sortable="true">Name</th>
					            <th data-sortable="true">Record</th >
					            <th data-sortable="true">League Titles</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<tr>
					    		<td>Aaron</td>
					    		<td>10-3</td>
					    		<td>0</td>
					    	</tr>	
					    	<tr>
					    		<td>Rohan</td>
					    		<td>0-47</td>
					    		<td>0</td>
					    	</tr>
					    </tbody>
					</table>
				</div>
				<div class="col-md-2"></div>
			</div>

			<div id="footer">
				<p id="foottext">Yung fashion god aaron's website. trademark</p>
			</div>
		</div>
	</body>
</html>