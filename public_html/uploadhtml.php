<!DOCTYPE html>
<html lang="de">

     <?php require_once ('./vorlagen/head.php');?>

    <body onload="mafunctiona()">
	<header>
            
            
        </header>


	<main id="c1">
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleFormControlSelect1"><p>Unger welem Album seue die Fotos ufeglade werde???</p></label>
    <select class="form-control" id="selectalbum" name="selectalbum">
      <option>Fotoshooting</option>
      <option disabled>...</option>
      <option disabled>...</option>
      <option disabled>...</option>
      <option disabled>...</option>
    </select>
  </div>
	<div class="input-group mb-3">
		<div class="custom-file">
			<input type="file" name="file[]" class="custom-file-input" id="inputGroupFile02" multiple="multiple">
			<label class="custom-file-label" for="inputGroupFile02">Choose file</label>
		</div>
		<div class="input-group-append">
			<input class="input-group-text" type="submit" value="Upload" name="submit">
		</div>
	</div>
	</form>

	</main>
        	<?php include_once ('./vorlagen/footer.php')?>
        <button onclick="topFunction()" id="scrlo" class="button"
		title="go to top">
		<i class="fa fa-arrow-up" aria-hidden="true"></i>
	</button>
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
</body>


</html>