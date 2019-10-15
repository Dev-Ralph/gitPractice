<?php
if(isset($_GET['search']) && isset($_GET['down'])){
require '../resources/config/connect.php';
$search = $_GET['search'];
$down = $_GET['down'];
$s = $pdo->prepare("SELECT * FROM `customers` where `$down` LIKE ?");
            $s->execute(["%$search%"]);
            $allResp = $s->fetchAll(PDO::FETCH_ASSOC);

            $limit = 10;
            $total_results = $s->rowCount();
            $total_pages = ceil($total_results/$limit);

            if (!isset($_GET['page'])) {
                $page = 1;
            } else{
                  $page = $_GET['page'];
            }
            $start = ($page-1)*$limit;

            $sql = "SELECT * FROM `customers` where `$down` LIKE ?  LIMIT $start, $limit";
            $data =$pdo->prepare($sql);
            $data->execute(["%$search%"]);
            $results = $data->fetchAll();

echo '<table style="width:100%" class="table table-hover">';
echo '<tr>';
echo '<th>Company Name</th> <th>Last Name</th> <th>First Name</th> <th>Phone</th> <th>Country</th> <th>Action</th>';
echo '</tr>';
foreach ($results as $result) {
  echo '<tr>';
  echo '<td>'.$result->customerName.'</td>';
  echo '<td>'.$result->contactLastName.'</td>';
  echo '<td>'.$result->contactFirstName.'</td>';
  echo '<td>'.$result->phone.'</td>';
  echo '<td>'.$result->country.'<br />'.'</td>';
  ?>
  <form method="POST">
  <?php
  echo  '<td> <button type="button" class="btn btn-primary" name="update" data-toggle="modal" data-target="#myModal1">Update</button> <button type="button" class="btn btn-danger ml-3" name="delete">Delete</button></td>';
  ?>
  </form>
  <?php
  echo '</tr>';
}
echo '</table>';

echo '<ul>';
for ($p=1; $p <= $total_pages; $p++) {
    echo '<li class="page-item" style="display: inline-block;margin-left:4px;">';
    // echo  '<a class="page-link" href="?page='.$p.'">'.$p;
    echo  '<a class="page-link" href="?search='.$search.'&down='.$down.'&submit=Search&page='.$p.'">'.$p;
    echo  '</a>';
    echo '</li>';
}
echo '</ul>';
}
?>
