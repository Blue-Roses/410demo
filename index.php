<?php  
   require_once('includes/config.php');
  
   //query the database and store the results
   //in the $myData variable   
   $sql = 'SELECT * FROM site_content';
   $myData = $db->query($sql);   
   
   while($row = $myData->fetch_assoc())
   {
	   	
		if($row['view'] == 'n')
		{
			 continue;
		}
	   	if($row['section_name'] == 'intro')
		{
			 $intro = $row['content'];
		}
	   
     	if($row['section_name'] == 'blurb')
		{
			 $blurb = $row['content'];
		}
	
   }
     
   
?>

<?php $page = "home"; ?>

<?php require_once('includes/top.inc.php'); ?>

<body>
<div class="gridContainer clearfix">

  <?php require_once('includes/header.inc.php'); ?> 
  
  <section class="main">
  <h2>Welcome </h2>
  	<figure>
    	<img src="images.jpg" alt="yellow and red floral pic" /> 
     	<figcaption></figcaption>  
  	</figure>     
    <p> <?php echo @$intro; ?></p> 
    <p> <?php echo @$blurb; ?></p> 
    
  </section>   	    
    
    <?php require_once('includes/sidebar.inc.php'); ?>
	  
  
</div>
</body>
</html>
