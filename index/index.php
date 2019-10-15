hotdog<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My HTML Page</title>
  <link href="../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar">
  <form method="GET" class="form-inline pb-3 pt-1">
    <a href="index.php" class="stretched-link mr-5">Go Back</a>
    <input name="search" class="form-control mr-4" placeholder="Search"/>
    <select name="down" class="form-control browser-default custom-select mr-4">
      <option value="customerName">Company Name</option>
      <option value="contactLastName">Last Name</option>
      <option value="contactFirstname">First Name</option>
      <option value="phone">Phone</option>
      <option value="country">Country</option>
    </select>
    <input type="submit" name="submit" value="Search" class="btn btn-primary"/>
  </form>
  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#myModal">
  Register
</button>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Register</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST">
  <div class="form-group">
    <label for="companyInput">Company Name</label>
    <input class="form-control" id="companyInput" placeholder="Company Name" name="customerName" required autocomplete="customerName">
  </div>
  <div class="form-row">
  <div class="form-group col">
    <label for="contactLast">Last Name</label>
    <input class="form-control" id="contactLast" placeholder="Last Name" name="contactLastName" required autocomplete="contactLastName">
  </div>
  <div class="form-group col">
    <label for="contactFirst">First Name</label>
    <input class="form-control" id="contactFirst" placeholder="First Name" name="contactFirstName" required autocomplete="contactFirstName">
  </div>
</div>
<div class="form-row">
  <div class="form-group col">
    <label for="phone">Phone</label>
    <input class="form-control" id="phone" placeholder="Phone" name="phone" required autocomplete="phone">
  </div>
    <div class="form-group col">
      <label for="country">Country</label>
      <input class="form-control" id="country" placeholder="Country" name="country" required autocomplete="country">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="register">Add</button>
      </div>
</form>
    </div>
  </div>
</div>
</nav>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../vendor/js/bootstrap.min.js"></script>
</html>
