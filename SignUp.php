<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>

<div class="container-fluid w-75">
<!-- Username -->
<form action="NewMember.php" method="post">
  <div class="form-group">
    <div class="row justify-content-md-left">
      <div class="col col-lg-2">
      <label for="usename">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
      <small>Please use your Pitt Username</small>
      </div>

    </div>
  </div>

  <!-- Two inputs on same line -->
  <div class="form-group">
    <div class="row">

      <div class="col-sm">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname">
      </div>

      <div class="col-sm">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Name" name="lname">
      </div>

    </div>
  </div>

  <!-- Phone & Email -->
  <div class="form-group">
    <div class="row">

      <div class="col-sm">
      <label for="email">Email Address</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

      <div class="col-sm">
      <label for="phone">Phone Number</label>
      <input type="text" class="form-control" id="phone" placeholder="(xxx)xxx-xxxx" name="phone">
      </div>

    </div>
  </div>

  <!-- radio buttons -->
  <div class="form-check">
    <div class="row">

      <div class="col col-lg-2">
      <input class="form-check-input" name="role" type="radio" name="exampleRadios" id="exampleRadios1" value="Mentee" checked>
      <label class="form-check-label" for="exampleRadios1">
       I would like to find a mentor
      </label>
      </div>

      <div class="col col-lg-2">
      <input class="form-check-input" name="role" type="radio" name="exampleRadios" id="exampleRadios2" value="Mentor">
      <label class="form-check-label" for="exampleRadios2">
       I would like to mentor others
       </label>
     </div>

    </div>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>
</body>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>