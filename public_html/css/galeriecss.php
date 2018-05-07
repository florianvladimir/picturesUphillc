/*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
/* 
    Created on : 04.01.2018, 10:12:35
    Author     : moserfl
*/




<?php
header('Content-type: text/css');?>


<?php /*

for ($i = 1; $i <= 10; $i++) {
    
    echo "#gal$i{";
    ?>
    background-image: url(../pictures/lake_small.jpg);}
    <?php 

}*/

?>


<?php 
    require_once ('../db/db.php');
    $q=loadPic("9gag");
            
            
    if ($q->num_rows > 0) {
        $i=1;
            
        while($row = $q->fetch_assoc()) {
            echo "#gal$i{";
            echo " background-image: url(../".$row["addresse"].");}";
        $i++;
        }
    }
