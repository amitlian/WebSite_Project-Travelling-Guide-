<?php
$id = $_GET['client_id'];
$conn = new mysqli('localhost','root','','travel');
 $sql = "SELECT * FROM transport";
 $result = $conn->query($sql);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <br><br>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>

        <div class="col-md-5">
          <h1>Enter Your Desired Queries</h1>
          <hr>



<form action="budget_index.php?client_id=<?php echo $id= $_GET['client_id']; ?>" method="POST">
  <div class="form-group">
    <label for="district_name">District</label>
    <select class="form-control" id="district_name" name = "district_name">
        <option>Coxs Bazar</option>
        <option>Bandarban</option>
        <option>Saint Martin</option>
      </select>
  </div>
  <div class="form-group">
    <label for="place_name">Place</label>
    <select class="form-control" id="place_name" name = "place_name">
        <option>Inani</option>
        <option>Laboni Point</option>
        <option>Marin Drive</option>
      </select>
  </div>
  <div class="form-group">
    <label for="type">Transport</label>
    <select class="form-control" id="type" name = "type">
        <option>Bus Non-Ac</option>
        <option>Bus Ac</option>
        <option>Sleeper Coach</option>
        <option>Air</option>
      </select>
  </div>
  <div class="form-group">
    <label for="hotel category">Hotel Category</label>
    <select class="form-control" id="hotel category" name = "hotel category">
        <option>Normal</option>
        <option>3 Star</option>
        <option>5 Star</option>
      </select>
  </div>
  <div class="form-group">
    <label for="budget">Your Budget</label>
    <input type="text" class="form-control" name="budget" required="required" placeholder="Enter Your Budget">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


        </div>

      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
