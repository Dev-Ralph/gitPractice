<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My HTML Page</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar">
    <a href="index.php" class="stretched-link mr-5">Go Back</a>
  </nav>
  <?php
  require '../resources/php/update.php';
   ?>
  <div class="container">
   <div class="row justify-content-center">
    <div class="col-md-8">
   <div class="card">
    <div class="card-body">
  <form method="POST" class="form-inline pb-3 pt-1">
    <input class="form-control" id="companyInput" placeholder="Company Name" name="customerName1" required autocomplete="customerName" value="<?php if(isset($customerName)){
      echo "$customerName";
    }?>">

    <input class="form-control col" id="contactLast" placeholder="Last Name" name="contactLastName1" required autocomplete="contactLastName">

    <input class="form-control col" id="contactFirst" placeholder="First Name" name="contactFirstName1" required autocomplete="contactFirstName">

    <input class="form-control col" id="phone" placeholder="Phone" name="phone1" required autocomplete="phone">

    <input class="form-control col" id="country" placeholder="Country" name="country1" required autocomplete="country">

    <button type="submit" class="btn btn-primary col" name="updateUser">Update</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../vendor/js/bootstrap.min.js"></script>
</html>
