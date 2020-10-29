<?php
    include_once 'dbh.php';

    $user = $_POST["username"];
    $qry = "SELECT * FROM matches WHERE Username='$user'";
    $rslt = $conn->query($qry);
    if($row = $rslt -> fetch_array(MYSQLI_NUM))
        $user = $user;
    else // adjust to a nonacceptaple input value
        $user = "USERNAME NOT FOUND!";
    

    $NoMatchesFlagForText = "No Matches Found";
    //Make these nonacceptable inputs that are of length 3
    $nfo = "";
    $match1 = "             ";
    $match2 = "             ";
    $match3 = "             ";
    unset($row[0]);
    if($row != null)
        $ids = join("','", $row);
    else
        $ids = " ";

         $nfo = "SELECT * FROM contacts WHERE username IN ('$ids')";
         $matchName = $conn->query($nfo);
         if($match1 = $matchName -> fetch_array(MYSQLI_NUM))
         {
            $NoMatchesFlagForText = "                 ";
         $match2 = $matchName -> fetch_array(MYSQLI_NUM);
         $match3 = $matchName -> fetch_array(MYSQLI_NUM);

         if($match1 == null)
         { $match1 = "                 ";
            
         }
         if($match2 == null) $match2 = "                 ";
         if($match3 == null) $match3 = "                 ";
        }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
          <li class="nav-item active">
            <A class="nav-link" href="#">Matches
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <A class="nav-link" type="disabled" href="./EditInfo.php?data=<?php echo $user ?>">Change info
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>

    <h1><?php echo $user ?></h1>
    <div class="container-fluid w-75">
        <p>Your Matches: <?php echo $NoMatchesFlagForText ?></p>
        <div id="card-container"></div>
    </div>
    <!-- Linking cards -->
    <div class="row justify-content-md-center">
            <div class="col-md-4 mb-6">
                <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Take the Questionnaire</h2>
                    <p class="card-text">Personalize your tutor recomendations by taking the questionnaire.</p>
                </div>
                <div class="card-footer">
                    <a href="./Questionnaire.php?data=<?php echo $user ?>" class="btn btn-primary btn-sm">Questionnaire</a>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-6">
                <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Look for mentors</h2>
                    <p class="card-text">Take the questionairre, so you can find relevent matches. If you don't want to take it, just jump in and look for a tutor!</p>
                </div>
                <div class="card-footer">
                <form action="findMatches.php" method="post">
                    <div class="col-sm justify-content-md-right">
                        <input type="hidden" id="username" name="username" value="<?php echo $user ?>">
                        <input type="hidden" id="indexes" name="indexes" value="0">
                        <button type="submit" class="btn btn-primary btn-sm">Search</button>
                    </div>
                
                </div>
              </form>
                </div>
                </div>
            </div>
<script>
    
    var tasks = [{
        "title": "<?php echo $match1[2].' '.$match1[3]?>",
        "color": "<?php echo $match1[4] ?>",
    },
    {
        "title": "<?php echo $match2[2].' '.$match2[3] ?>",
        "color": "<?php echo $match2[4] ?>",
    },
    {
        "title": "<?php echo $match3[2].' '.$match3[3] ?>",
        "color": "<?php echo $match3[4] ?>",
    }
];

let cardContainer;

let createTaskCard = (task) => {

    let card = document.createElement('div');
    card.className = 'card shadow cursor-pointer';

    let cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    let title = document.createElement('h5');
    title.innerText = task.title;
    title.className = 'card-title';

    let bRow = document.createElement('div')
    bRow.className = 'row justify-content-md-center';

    let color = document.createElement('div');
    color.innerText = task.color;
    color.className = 'card-color';


    cardBody.appendChild(title);
    cardBody.appendChild(bRow);
    bRow.appendChild(color);
    card.appendChild(cardBody);
    cardContainer.appendChild(card);

}

let initListOfTasks = () => {
    if (cardContainer) {
        document.getElementById('card-container').replaceWith(cardContainer);
        return;
    }

    cardContainer = document.getElementById('card-container');
    tasks.forEach((task) => {
        createTaskCard(task);
    });
};

initListOfTasks();
</script>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <div id="Bot"></div>
</body>

</html>