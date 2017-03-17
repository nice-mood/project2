<?php include "menu.php" ; ?>

<h2>Customers </h2>

<table border="1">
    <tr>
        <TH>First name </TH><TH>Last name </TH><TH>Street address</TH>
    </tr>


<?php
 include "connect.php" ;

 $myquery="SELECT firstname,lastname, streetadress FROM customers" ;
 $customers_data=$db->query($myquery);
 
 foreach($customers_data as $row)
 {
     echo '<tr><td>' .$row['firstname'].'</td><td> '.$row['lastname'].' </td><td>'.$row['streetadress']. '</td></tr>' ;
 }




  ?>
</table>


<?php include "footer.php" ;?>