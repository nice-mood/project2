<?php include "menu.php"; ?>

<h2>Edit customer</h2>

<?php
include "connect.php";
$sql="SELECT * FROM customers WHERE id_customers=".$_GET['id'];
$result=$db->query($sql);
$theArray=$result->fetch(PDO::FETCH_ASSOC);
$fn=$theArray['firstname'];
$ln=$theArray['lastname'];
$st=$theArray['streetadress'];

?>

<form action="customers.php" method="post">
<label for="fn">Firstname</label><br>
<input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" required=""><br>

<label for="ln">Lastname</label><br>
<input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" required=""><br>

<label for="ad">Street Address</label><br>
<input type="text" name="ad" id="ad" value="<?php echo $st; ?>"><br>

<input type="hidden" name="id" value="<?php echo $_GET['id'] ; ?>">
<input type="submit" name="btnEdit" value="Update">

</form>

<?php include "footer.php"; ?>
