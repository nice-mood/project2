<?php include "menu.php" ; ?>

<h2>Edit customers</h2>

<form class="" action="update_all_customers.php" method="post">

<table border="0">
<tr>
<th>Firstname</th><th>Lastname</th><th>Streetaddress</th>
</tr>
<?php include "connect.php";

$myquery = "SELECT firstname, lastname, streetadress, id_customers FROM Customers";
$customers_data=$db -> query($myquery);

foreach ($customers_data as $row) {
echo '<tr><td><input type="text" name="fn[]" value="'.$row['firstname'].'"/></td>';
echo '<td><input type="text" name="ln[]" value="'.$row['lastname'].'" /></td>' ;
echo '<td><input type="text" name="ad[]" value="'.$row['streetadress'].'" /></td>';
echo '<input type="hidden" name="id[]" value="'.$row['id_customers'].'" />' ;
echo '</tr>';


}

?>

</table>
<input type="submit" name="btnUpDateAll" value="Update">
</form>
<?php include "footer.php" ; ?>