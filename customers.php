<?php
include "connect.php";
if (isset($_POST['btnAdd'])){
  $add=$db->prepare("INSERT INTO customers (firstname,lastname,streetadress) VALUES(:fn,:ln,:ad)");
  $add->bindParam(':fn',$fn);
  $add->bindParam(':ln',$ln);
  $add->bindParam(':ad',$ad);
  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $ad=$_POST['ad'];
  $add->execute();
}
if (isset($_POST['btnEdit'])){
  $add=$db->prepare("UPDATE customers SET firstname=:fn,lastname=:ln,streetadress=:ad WHERE id_customers=:id");
  $add->bindParam(':fn',$fn);
  $add->bindParam(':ln',$ln);
  $add->bindParam(':ad',$ad);
  $add->bindParam(':id',$id);
  $fn=$_POST['fn'];
  $ln=$_POST['ln'];
  $ad=$_POST['ad'];
  $id=$_POST['id'];
  $add->execute();
}
if (isset($_POST['btnDelete'])){
$deleteSQL="DELETE FROM customers WHERE id_customers=".$_POST['id'];
$db ->query($deleteSQL);
}
 ?>
<?php include "menu.php"; ?>


<h2>Customers</h2>

<table border="1">
<tr>
<th>Firstname</th><th>Lastname</th><th>Streetaddress</th><th>Edit</th><th>Delete</th>
</tr>
<?php include "connect.php";

$myquery = "SELECT firstname, lastname, streetadress, id_customers FROM Customers";
$customers_data=$db -> query($myquery);

foreach ($customers_data as $row) {
echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['streetadress'].'</td>';
echo '<td><a href="update_costomer.php?id='.$row['id_customers'].'"><button>Update</button></a></td>';
echo '<td><a href="delete_customer.php?id='.$row['id_customers'].'"><button>Delete</button></a></td>';
echo '</tr>';


}

?>

</table>
<?php include "footer.php"; ?>
