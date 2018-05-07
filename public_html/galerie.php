<!DOCTYPE html>
<html>
     <?php require_once ('./vorlagen/head.php');?>
	<link rel="stylesheet" href="css/galeriecss.php">
<link rel="stylesheet" href="css/galerie.css">
<body onload="mafunctiona()">
	<header>
		<div id="pichp"></div>
            <?php include_once ('./vorlagen/navi.php');?>
        </header>

	<main id="content1">

	<div class="gal">
            <?php 
             require_once ('./db/db.php');
            $q=loadPic("9gag");
            
            
            if ($q->num_rows > 0) {
                $i=1;
            
                while($row = $q->fetch_assoc()) {
                    if($i%2==1){
                        echo "<div class='bilder left' id="."gal$i".">";
                    }
                    else{
                        echo "<div class='bilder right' id="."gal$i".">";
                    }
                    echo "</div>";
                    $i++;
                }
            }
        ?>
            <?php /*
            for ($i = 1; $i <= 10; $i++) {
                if($i%2==0){
                    echo "<div class='bilder left' id="."gal$i".">";
                }
                else{
                    echo "<div class='bilder right' id="."gal$i".">";
                }
                echo "</div>";
            }*/
            
            ?>
            
            </div>

	</main>
        

       
			<?php include_once ('./vorlagen/navi.php');?>
        <button onclick="topFunction()" id="scrlo" class="button"
		title="go to top">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</button>
</body>
<script src="js/nav.js" type="text/javascript"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>
</html>
