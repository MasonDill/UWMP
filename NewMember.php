<?php
include_once 'dbh.php';

$user = $_POST["username"];
$first = $_POST["fname"];
$last = $_POST["lname"];
$email = $_POST["email"];
$role =  $_POST["role"];
$phone = $_POST["phone"];
$idd = 0;
$message;

$check = "SELECT * from contacts where username='$user'";
if($retult = $conn->query($check))
{
	if($row = $retult->fetch_array(MYSQLI_NUM))
		$idd = $row[0];
}

$sql =  "REPLACE INTO contacts (ID, username, first, last, email, Role, phone)
VALUES($idd, '$user', '$first', '$last', '$email', '$role', '$phone')";

$sql2 =  "INSERT INTO matches (Username, Match1, Match2, Match3)
VALUES('$user', '', '', '')";

$sql3 =  "INSERT INTO contact_info (username, school, schoolPref, takeAway, organizations, location, musicPref, personality, interest1, interest2, interest3, interest4, interest5)
VALUES('$user', '', '0', '', '', '', '', '', '0', '0', '0', '0', '0')";

if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3)) {
  $message = "Welcome to the UWMP";
} else {
  $message = "Error: " . $sql . "<br>" . $conn->error;
}
?>

<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
      .matchesBtn {
      background: none!important;
      border: none;
      text-align: center;

      /*optional*/
      /*input has OS specific font-family*/
      color: #ffff;
      cursor: pointer;
      padding: 0px 0px;
      }</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html" name="#Top">Pitt University-wide Mentorship Program</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form method="post" action="viewMatches.php">
            <input type="hidden" name="username" class="username" id="username" value="<?php  echo $user; ?>">
            <button class="matchesBtn" type="submit" outline="none" id="sbmtbtn" sytle="" name="sbmtbtn"><A class="nav-link">Matches
              <span class="sr-only">(current)</span>
            </a></button>
            </form>
          </li>
          <li class="nav-item active">
            <A class="nav-link" href="#">Sign Up
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>
  <div class="progress">
  		<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo rand(60, 99) ?>%"></div>
	</div>

  <form name="myForm" id="myForm" action="viewMatches.php" method="POST">
    <p>
        <input type="hidden" id="username" name="username" value="<?php echo $user ?>" />
    </p>
	</form>

		<script type="text/javascript">
    	window.onload=function(){
        var auto = setTimeout(function(){ submitform(); }, 600);

        function submitform(){
          document.forms["myForm"].submit();
        }
    }
</script>

<div><h1><?php print($message)?></h1></div>
<p>
<a href="dbTable.php">View current database</a> or <a href="index.html"> return to main page</a>
</p>
</body>
</html>