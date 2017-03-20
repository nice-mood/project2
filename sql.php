<?php include "menu.php"; ?>

<h2>SQL-code for the database</h2>
<pre>
    CREATE DATABASE company;
    GRANT ALL ON company.* TO'webuser'@'localhost' IDENTIFIED BY 'webpass'
    USE company;

    CREATE TABLE customers(
        id_customers SMALLINT PRIMARY KEY auto_increment,
        firstname VARCHAR(30),
        lastname VARCHAR(30),
        streetadress VARCHAR(20)
    ) Engine=InnoDB;

    INSERT INTO customers(firstname,lastname,streetadress) VALUES('Ann', 'Smith','Central street 20');
    INSERT INTO customers(firstname,lastname,streetadress) VALUES('Tom', 'Jones','Garden street 10');

   CREATE TABLE cats(
       id_cats SMALLINT PRIMARY KEY auto_increment,
       name VARCHAR (30),
       color VARCHAR (20),
       id_customers SMALLINT,
       FOREIGN KEY (id_customers) REFERENCES customers(id_customers)
       ON DELETE RESTRICT ON UPDATE CASCADE) Engine=InnoDB ;

    INSERT INTO cats (name, color, id_customers)
    VALUES ('Garfield', 'orange', 3);
    INSERT INTO cats (name, color, id_customers)
    VALUES ('HelloKitty', 'pink', 4)   ;
   

</pre>




<?php include "footer.php";?>