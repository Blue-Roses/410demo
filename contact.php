<?php $page = "contact"; ?>

<?php require_once('includes/title.inc.php'); ?>
<?php require_once('includes/top.inc.php'); ?>

<body>
<div class="gridContainer clearfix">

  <?php require_once('includes/sidebar.inc.php'); ?> 
     
  <h2>Contact Us</h2>
  
     
<form action="" method=""> 
  <fieldset>
   <legend> <p> </p></legend>
   <ol>
    <li>
	<label for="name">Your Full Name:
    <?php if ($missing && in_array('name', $missing)) { ?>
    <spam c;ass="warning">Please enter your name</span>
    <?php } ?>
    </label>
     <input name="name" id="name" type="text" class="formbox" >
     <?php if ($missing || $errors) {
		 echo 'value"' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';
	 } ?>
     </li>
     <li>  
      <label for="email">Email:
      <?php if ($missing && in_array('email', $missing)) { ?>
      <span class="warning">Please enter your email address</span>
      <?php } ?>
      </label>
      <input name="email" id="email" type="text" class="formbox">
     </li>
     <li>
      <label for="comments">Comments:
      <?php if ($missing && in_array('comments', $missing)) { ?>
       <span class="warning">Please enter your comments</span> 
      <?php } ?>
      </label>
      <textarea name="comments" placeholder="share your thoughts" 
       cols="30" rows="8"></textarea>
     </li>
     <li><input type="submit" name="submitted" value="Send Now"></li>
    </ol>
   </fieldset>
  </form>
 
 
  
  
  <?php require_once('includes/footer.inc.php'); ?>
  
  
</div>

</body>
</html>

