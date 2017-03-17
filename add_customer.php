<?php include "menu.php" ?>

<h2>Add Customers</h2>

<form class="" action="customers.php" method="post">
    <label for="fn">Firstname</label> <br />
    <input type="text" name="fn" id="fn" value="" required><br />

    <label for="ln">Lastname</label> <br />
    <input type="text" name="ln" id="ln" value="" required><br />

    <label for="ad">Street Adress</label> <br />
    <input type="text" name="ad" id="ad" value=""><br />

    <input type="submit" name="btnAdd"  value="Add"><br />

</form>



<?php include "footer.php" ?>
