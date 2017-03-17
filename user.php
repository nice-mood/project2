<?php include "menu.php"; ?>
<h2> User page </h2>
<?php 
session_start();
    if(isset($_SESSION['username'])) 
    {
        echo 'you are logged in as a ' .$_SESSION['username'] ;
    }
    else
    {
        echo 'You are not logged in.' ;
    }

?>

<?php include "footer.php" ;?>