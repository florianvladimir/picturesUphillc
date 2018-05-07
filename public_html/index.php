<!DOCTYPE html>
<html lang="de">

     <?php require_once ('./vorlagen/head.php');?>

    <body onload="mafunctiona()">
        <header>
            
            <?php include_once ('./vorlagen/navi.php')?>
        </header>


        <main id="c1">
           
            <div class="part">
                <article class="maiart content">
                    <div id="ver">
                        <h1>Fotos</h1>
                        <a href="galerie.php" class="strecken" id="str1">
                        <h2>Fotoshooting</h2>
                        <div class="hvMe">Ansehen</div>
                        </a>
                        
                    </div>
                </article>
            </div>
            
        </main>
        	<?php include_once ('./vorlagen/footer.php')?>
        <button onclick="topFunction()" id="scrlo" class="button" title="go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
    <script src="js/nav.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
    
</html>
