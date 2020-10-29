<?php
    include_once 'dbh.php';

    $user = $_POST["username"];
    $indexNums = $_POST["indexes"];

    $usein = $user;
    $qry = "SELECT * FROM matches WHERE Username='$user'";
    $rslt = $conn->query($qry);
    if($row = $rslt -> fetch_array(MYSQLI_NUM))
        $user = $user;
    else // adjust to a nonacceptaple input value
        $user = "USERNAME NOT FOUND!";

    $seq = "SELECT * FROM contact_info where username='$user'";
    $rt = $conn->query($seq);
    $u_info = $rt -> fetch_array(MYSQLI_NUM);
    

    $NoMatchesFlagForText = "begin";

    //Make these nonacceptable inputs that are of length 3
    $nfo = "";
    $match1 = "             ";
    $match2 = "             ";
    $match3 = "             ";
    $first = "             ";
    $second = "             ";
    $third = "             ";
    $fourth = "             ";
    $fifth = "             ";
    $mat1 = "Add as match";
    $mat2 = "Add as match";
    $mat3 = "Add as match";


    unset($row[0]);
    if($row != null){
        $excludeAll = join("','", $row);
        $ids = join("','", $row);
    }
    else{
        $ids = " ";
        $excludeAll = " ";
    }
    $kry = "SELECT * FROM contacts";
    $ret = $conn->query($kry);
    $row_cnt = $ret->num_rows;
         

        $strongMatches = ARRAY();
        $weakMatches = ARRAY();
        //this should be sorted by relevance later
        $sql = "SELECT * FROM contacts where username NOT IN ('$ids', '$user')";
        $result = $conn->query($sql);
        while($match = $result -> fetch_array(MYSQLI_NUM))
        {
          $mInfo = "SELECT * FROM contact_info where username='$match[1]'";
          $ttl = $conn->query($mInfo);

          $consectiveM = 0;
          while($c_info = $ttl -> fetch_array(MYSQLI_NUM))
          {
            $i = 0;
            while($i < count($c_info))
            {
                  foreach(explode("','", $c_info[$i]) as $piece)
                    if(strcmp($piece, $u_info[$i]) == 0 && strcmp($piece, '') != 0 ||( $c_info[$i] != 0 &&  $c_info[$i] == $u_info[$i] && strcmp($piece, '') != 0)){
                      //now check for $u_info[schoolPref]
                      if(strcmp($u_info[1], $c_info[1]) == 0){
                        //I want them in my school and they are not in my school and want to be in a different school
                        if($u_info[2] != 2 && $c_info[2] != 2){ //great match, add a lot of points, match immediate
                          $usein = $usein.' '.$c_info[$i].' ('.$c_info[0].') ';
                          array_unshift($strongMatches, $c_info[0]);
                          //go ahead and push them into the array, sorting by the value of consecutiveM
                        }
                        //strong match, go ahead and set them as preferred
                      }
                      else{
                        if($u_info[2] != 1 && $c_info[2] != 1){
                          //Both dont mind crossing schools
                          $usein = $usein.' '.$c_info[$i].' ('.$c_info[0].') ';

                          //consecutive matches
                          $consectiveM =  $consectiveM + 1;
                          if($consectiveM >= 3){
                            array_unshift($strongMatches, $c_info[0]);
                            //go ahead and push them into the array, sorting by the value of consecutiveM
                          }else{
                            array_push($strongMatches, $c_info[0]);

                            //make them second choices, everybody else will get forced in later
                          }
                        }
                        
                      }
                      //assign to weaker match
                    }
              $strongMatches = array_unique($strongMatches);
              $i = $i + 1;
            }
          }

        }

          $nfo = "SELECT * FROM contacts WHERE username IN ('$ids')";
         $matchName = $conn->query($nfo);
         if($match1 = $matchName -> fetch_array(MYSQLI_NUM))
         {
         $match2 = $matchName -> fetch_array(MYSQLI_NUM);
         $match3 = $matchName -> fetch_array(MYSQLI_NUM);

         if($match3 == null) $match3 = "                 ";
         else
         {
          array_unshift($strongMatches, $match3[1]);
          if($indexNums < 3) $mat3 = "Unmatch";
         } 
         if($match2 == null) $match2 = "                 ";
         else{
          array_unshift($strongMatches, $match2[1]);
          if($indexNums < 2) $mat2 = "Unmatch";
         } 
         if($match1 == null){
          $match1 = "                 ";
          }
          else{
            array_unshift($strongMatches, $match1[1]);
            if($indexNums < 1) $mat1 = "Unmatch";
          }

         
         
        } //call unique here
        $strongMatches = array_unique($strongMatches);

        $rrr = "SELECT * FROM contacts where username NOT IN ('$user')";
        $rbr = $conn->query($rrr);

        while($con = $rbr -> fetch_array(MYSQLI_NUM))
        {
          if(!in_array($con[1], $strongMatches) && $con[1] != null)
          {
            array_push($strongMatches, $con[1]);
          }
        }

      if($indexNums < 0)
        $indexNums = 0;
      else if($indexNums + 4 > count($strongMatches))
      {
        $NoMatchesFlagForText = "End of list";
        $indexNums = count($strongMatches) - 5;
      }
      else
      {
        $NoMatchesFlagForText = "page".($indexNums/5 + 1);
      }
      $specialAdd = 0;

        //ARRAY BOUNDING IS DONE
      $qio = "SELECT * FROM contacts";
      $rere = $conn->query($qio);
      while($outputs = $rere->fetch_array(MYSQLI_NUM)){
      if ( ! isset($strongMatches[1]))
      {
        $strongMatches[1] = $strongMatches[1];
        array_unshift($strongMatches, array_shift($strongMatches));
      }

      if(strcmp($outputs[1], $strongMatches[$indexNums]) == 0)
          $first = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+1+$specialAdd]) == 0)
          $second = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+2+$specialAdd]) == 0)
          $third = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+3+$specialAdd]) == 0)
          $fourth = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+4+$specialAdd]) == 0)
          $fifth = $outputs;
      }

      $usein = "";
      if($second == null)
      {
        while($outputs = $rere->fetch_array(MYSQLI_NUM)){
      if(strcmp($outputs[1], $strongMatches[$indexNums]) == 0)
          $first = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+2]) == 0)
          $second = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+3]) == 0)
          $third = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+4]) == 0)
          $fourth = $outputs;

      if(strcmp($outputs[1], $strongMatches[$indexNums+5]) == 0)
          $fifth = $outputs;
      }
      $usein = "Nothing was on B";
      }

      
      $i = 0;
      foreach($strongMatches as $toSt)
      {
        $usein = $usein.' ['.$i.'] '.$toSt;
        $i = $i + 1;
      }


?>
<!doctype html>
<html lang="en">
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
            <form method="post" action="viewMatches.php">
            <input type="hidden" name="username" class="username" id="username" value="<?php echo $user; ?>">
            <button class="matchesBtn" type="submit" outline="none" id="sbmtbtn" sytle="" name="sbmtbtn"><A class="nav-link">Matches
              <span class="sr-only">(current)</span>
            </a></button>
            </form>
          </li>
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

    <div class="container-fluid w-75">
        <p>Your Matches: <?php echo $NoMatchesFlagForText ?></p>
        <div id="card-container"></div>
        <br>
          <div class="row" id="rowtwo">
            <div class="col large" align="left">
                <form action="findMatches.php" method="post">
                        <input type="hidden" id="username" name="username" value="<?php echo $user ?>">
                        <input type="hidden" id="indexes" name="indexes" value="<?php echo ($indexNums-5) ?>">
                        <button alighn="right" type="submit" class="btn btn-secondary btn-lg">Prev</button>
              </form>
            </div>
        <div class="col large" align="right">
              <form action="findMatches.php" method="post">
                    <div class="col-sm justify-content-md-right">
                        <input type="hidden" id="username" name="username" value="<?php echo $user ?>">
                        <input type="hidden" id="indexes" name="indexes" value="<?php echo ($indexNums+5) ?>">
                        <button alighn="right" type="submit" class="btn btn-secondary btn-lg">Next</button>
                    </div>
              </form>
            </div>
        </div>
    </div>

<script>
    
    var tasks = [{
        "title": "<?php echo $first[2].' '.$first[3] ?>",
        "color": "<?php echo implode($first) ?>",
        "value": "<?php echo $first[1] ?>",
        "isMatched": "<?php echo $mat1 ?>",
    },
    {
        "title": "<?php echo $second[2].' '.$second[3] ?>",
        "color": "<?php echo implode($second) ?>",
        "value": "<?php echo $second[1] ?>",
        "isMatched": "<?php echo $mat2 ?>",
    },
    {
        "title": "<?php echo $third[2].' '.$third[3] ?>",
        "color": "<?php echo implode($third) ?>",
        "value": "<?php echo $third[1] ?>",
        "isMatched": "<?php echo $mat3 ?>",
    },
    {
        "title": "<?php echo $fourth[2].' '.$fourth[3] ?>",
        "color": "<?php echo implode($fourth) ?>",
        "value": "<?php echo $fourth[1] ?>",
        "isMatched": "Add as match",
    },
    {
        "title": "<?php echo $fifth[2].' '.$fifth[3] ?>",
        "color": "<?php echo implode($fifth) ?>",
        "value": "<?php echo $fifth[1] ?>",
        "isMatched": "Add as match",
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

    // Create a form synamically
    var wrapper = document.createElement('div');
    wrapper.className = "wrapper";
    wrapper.setAttribute("align", "right");
    var form = document.createElement("form"); 
    form.setAttribute("method", "post"); 
    form.setAttribute("action", "assignMatches.php"); //THIS PHP FORM WILL ACCEPT TWO USERNAMES (U AND MATCH); it will insert it or remove it
  
    // Create an input element for Full Name 
    var FN = document.createElement("input"); 
    FN.setAttribute("type", "hidden"); 
    FN.setAttribute("name", "username");
    FN.setAttribute("id", "username"); 
    FN.setAttribute("value", "<?php echo $user ?>");

    var un = document.createElement("input"); 
    un.setAttribute("type", "hidden"); 
    un.setAttribute("name", "matchUsername");
    un.setAttribute("id", "matchUsername"); 
    un.setAttribute("value", task.value);
  
                // create a submit button 
                var s = document.createElement("button"); 
                s.setAttribute("type", "submit");
                s.innerText = task.isMatched;
                s.className = 'btn btn-primary';
                  
                // Append the full name input to the form 
                form.appendChild(FN);
                form.appendChild(un);
                  
                // Append the submit button to the form 
                form.appendChild(s);  

    cardBody.appendChild(title);
    cardBody.appendChild(bRow);
    wrapper.appendChild(form);
    cardBody.appendChild(wrapper);
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
</body>

</html>