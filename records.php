
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
  		  <script src="jquery.table-sort.js"></script>


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
			        <li><a href="">Standings</a></li>
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
			        <li><a href="https://www.facebook.com/groups/733247416739393/">Facebook Group</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<table class="table table-bordered sort_table">
					    <thead>
					    	<!-- maybe rewrite in js. use php include function -->
					        <tr>
					            <th>Owner</th>
					            <th>Wins</th >
					            <th>Losses</th>
					            <th>Win %</th>
					            <th>Division Titles</th>
					            <th>Championships</th>
					            <th>Toilet Bowls</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<tr>
					    		<td>Aaron</td>
					    		<td>7</td>
					    		<td>6</td>
					    		<td>0.538</td>
					    		<td>1</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>	
					    	<tr>
					    		<td>Karan</td>
					    		<td>35</td>
					    		<td>17</td>
					    		<td>0.673</td>
					    		<td>2</td>
					    		<td>1</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Kendall</td>
					    		<td>25</td>
					    		<td>27</td>
					    		<td>0.481</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>1</td>
					    	</tr>
					    	<tr>
					    		<td>Shaun</td>
					    		<td>20</td>
					    		<td>32</td>
					    		<td>0.385</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Matt</td>
					    		<td>19</td>
					    		<td>33</td>
					    		<td>0.365</td>
					    		<td>1</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Tracy</td>
					    		<td>26</td>
					    		<td>13</td>
					    		<td>0.667</td>
					    		<td>1</td>
					    		<td>2</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Simon</td>
					    		<td>3</td>
					    		<td>10</td>
					    		<td>0.231</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>David</td>
					    		<td>31</td>
					    		<td>21</td>
					    		<td>0.596</td>
					    		<td>1</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Treyvin</td>
					    		<td>29</td>
					    		<td>23</td>
					    		<td>0.558</td>
					    		<td>1</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>AJ</td>
					    		<td>13</td>
					    		<td>13</td>
					    		<td>0.5</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Peter</td>
					    		<td>8</td>
					    		<td>5</td>
					    		<td>0.615</td>
					    		<td>1</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Anthony</td>
					    		<td>20</td>
					    		<td>19</td>
					    		<td>0.513</td>
					    		<td>1</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Rohan</td>
					    		<td>22</td>
					    		<td>30</td>
					    		<td>0.423</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>John</td>
					    		<td>29</td>
					    		<td>23</td>
					    		<td>0.558</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Nick</td>
					    		<td>7</td>
					    		<td>6</td>
					    		<td>0.538</td>
					    		<td>0</td>
					    		<td>0</td>
					    		<td>0</td>
					    	</tr>
					    	<tr>
					    		<td>Calvin</td>
					    		<td>6</td>
					    		<td>7</td>
					    		<td>0.462</td>
					    		<td>0</td>
					    		<td>0</td>
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
		<script>
$(function(){
    // jQuery methods go here...
    $("table.sort_table").sort_table({
        "action" : "init"
    });
});
</script>
	</body>
</html>