<?php
include_once 'dbh.php';

$user = $_POST["username"];
$matchUser = $_POST["matchUsername"];
$message;
$matNum = '';
$matNum2 = '';
$val= $matchUser;
$val2 = $user;
$kry = "SELECT * FROM matches where username='$user'";
$cute = $conn->query($kry);
while($row = $cute->fetch_array(MYSQLI_NUM))
{
  if(strcmp($row[1], $matchUser) == 0)
  {
    $matNum = 'Match1';
    $val = '';
  }
  else if(strcmp($row[2], $matchUser) == 0)
  {
    $matNum = 'Match2';
    $val = '';
  }
  else if(strcmp($row[3], $matchUser) == 0)
  {
    $matNum = 'Match3';
    $val = '';
  }
  else
  {
    if($row[1] == null)
      $matNum = 'Match1';
    else if($row[2] == null)
      $matNum = 'Match2';
    else if($row[3] == null)
      $matNum = 'Match3';
    else
      $matNum = "LIST IS FULL";
  }
}

$cry = "SELECT * FROM matches where username='$matchUser'";
$kute = $conn->query($cry);
while($row = $kute->fetch_array(MYSQLI_NUM))
{
  if(strcmp($row[1], $user) == 0)
  {
    $matNum2 = 'Match1';
    $val2 = '';
  }
  else if(strcmp($row[2], $user) == 0)
  {
    $matNum2 = 'Match2';
    $val2 = '';
  }
  else if(strcmp($row[3], $user) == 0)
  {
    $matNum2 = 'Match3';
    $val2 = '';
  }
  else
  {
    if($row[1] == null)
      $matNum2 = 'Match1';
    else if($row[2] == null)
      $matNum2 = 'Match2';
    else if($row[3] == null)
      $matNum2 = 'Match3';
    else
      $matNum = "LIST IS FULL";
  }
}

$qry = "UPDATE matches set ".$matNum."='".$val."' where username='$user'";
    if($rslt = $conn->query($qry)){
      $message = "Your information is updating...";
    }
    else
      $message = "You already have 3 matches, please remove one";

$qry = "UPDATE matches set ".$matNum2."='".$val2."' where username='$matchUser'";
    if($rslt = $conn->query($qry)){
      $message = "Your information is updating...";
    }
    else
      $message = "You already have 3 matches, please remove one";
//}
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
            <A class="nav-link" href="#">Change info
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

  <form name="myForm" id="myForm" action="findMatches.php" method="POST">
    <p>
        <input type="hidden" id="username" name="username" value="<?php echo $user ?>" />
        <input type="hidden" id="indexes" name="indexes" value="0" />
    </p>
	</form>

		<script type="text/javascript">
    	window.onload=function(){
        var auto = setTimeout(function(){ submitform(); }, 20);

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