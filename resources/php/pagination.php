<?php
require '../resources/config/connect.php';
$limit = 10;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$s = $pdo->prepare("SELECT * FROM `customers`");
$s->execute();
$all = $s->fetchAll(PDO::FETCH_ASSOC);
$total_results = $s->rowCount();
$total_pages = ceil($total_results/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}


$start = ($page-1)*$limit;

$sql = "SELECT * FROM `customers` LIMIT $start, $limit";
$data = $pdo->prepare($sql);
$data->execute();
$results = $data->fetchAll(PDO::FETCH_OBJ);

echo '<table style="width:100%" class="table table-hover">';
echo '<tr>';
echo '<th>Company Name</th> <th>Last Name</th> <th>First Name</th> <th>Phone</th> <th>Country</th>';
echo '</tr>';
foreach ($results as $result) {
  echo '<tr>';
  echo '<td>'.$result->customerName.'</td>';
  echo '<td>'.$result->contactLastName.'</td>';
  echo '<td>'.$result->contactFirstName.'</td>';
  echo '<td>'.$result->phone.'</td>';
  echo '<td>'.$result->country.'<br />'.'</td>';
  echo '</tr>';
}
echo '</table>';

echo '<ul>';
for ($p=1; $p <$total_pages; $p++) {
    echo '<li style="display: inline-block;margin-left:4px;">';
    echo  '<a href="?page='.$p.'">'.$p;
    echo  '</a>';
    echo '</li>';
}
echo '</ul>';
?>
