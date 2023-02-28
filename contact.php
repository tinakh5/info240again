<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toxin-Free Lifestyle Guide: Contact Us</title>
  <meta name="description" content="Contact form to submit questions and comments to the Toxin-Free Lifestyle Guide developers.">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
  
<script>
window.onload = function(){
alert("Please allow 48 business-day hours for us to craft our responses! We appreciate your engagement and inquiries.");
}

</script>

</head>

<body>
<div class="container">

<header class="banner">
	<div class="site-title">
	<img class="img-logo-left" src="images/leaf-left.png" width="120" height="100" alt="tea leaf logo">
	<a class="nav-home" href="index.php"><h1>Toxin-Free Lifestyle Guide</h1></a>
	<img class="img-logo-right" src="images/leaf-right.png" width="120" height="100" alt="tea leaf logo">
</div>
	<nav class="nav-bar">
   	<ul>
      	<li><a href="index.php">Home</a></li>
      	<li><a href="about.php">About</a></li>
      	<li><a href="shopping.php">Shopping Resources</a></li>
      	<li><a href="ingredients.php">Ingredient Labels</a></li>
      	<li><a href="contact.php">Contact Us</a></li>
  	 </ul>
	</nav>
</header>



<main>
<h2>Contact Us!</h2>
<p>If you have any questions about The Toxin-Free Lifestyle Guide or want advice on how to choose your next products to purchase, please do not hesitate to reach out and ask us!</p>


<!--beginning of form-->

<?php print $formMessage;?>
<p class="form-default"></p>

<form class="contact-us" method="post">

<label for="name">Name</label>
<input type="text" id="name" name="name">

<label for="email">Email</label>
<input type="text" id="email" name="email">

<label for="ques-comm">Questions or Comments?</label>
<textarea name="ques-comm" id="ques-comm"></textarea>

<fieldset>
	<legend>How did you hear about us?</legend>
		<label>Search engine <input type="radio" name="source" value="search-engine"></label>
		<label>Social media <input type="radio" name="source" value="social-media"></label>
		<label>Word-of-mouth <input type="radio" name="source" value="word-of-mouth"></label>
		<label>Podcast <input type="radio" name="source" value="podcast"></label>
		<label>Blog <input type="radio" name="source" value="blog"></label>
		<label>Newsletter <input type="radio" name="source" value="newsletter"></label>
		<label>Other <input type="radio" name="source" value="other"></label>
</fieldset>

<fieldset>
	<legend>What else would you like to see addressed in the Toxin-Free Lifestyle Guide?</legend>
		<label>Clothing, bedding<input type="checkbox" name="topics[]" value="clothing-bedding"></label>
		<label>Furniture  <input type="checkbox" name="topics[]" value="furniture"></label>
		<label>Cosmetics <input type="checkbox" name="topics[]" value="cosmetics"></label>
		<label>Home appliances <input type="checkbox" name="topics[]" value="home-appliances"></label>
		<label>Pet products <input type="checkbox" name="topics[]" value="pet-products"></label>
		<label>Baby products <input type="checkbox" name="topics[]" value="baby-products"></label>
		<label>Garden supplies <input type="checkbox" name="topics[]" value="garden-supplies"></label>
		<label>Other <input type="checkbox" name="topics[]" value="other"></label>
</fieldset>


<label for="survey">Would you like to subscribe to our monthly email newsletters for latest updates?</label>
	<select name="survey" id="survey">
		<option value="no">No</option>
		<option value="yes">Yes</option>
	</select>
	


<input type="submit" value="Submit">

</form>
<!--end of form-->



</main>

<aside class="sidepanel">
<iframe class="iframe" src="https://giphy.com/embed/l0Ex8E17mqY09WNTG" width="300" height="300" allowFullScreen></iframe><p></p>
</aside>


<footer class="site-footer">
	<?php include('includes/footer.php');?>
</footer>

</div> <!-- end of container div -->

</body>






</html>
