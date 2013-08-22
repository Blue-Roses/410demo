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

  <?php require_once('includes/sidebar.inc.php'); ?> 
  
  <article class="content">
    <h1>Journey through the Garden</h1>
    <section>
   
      <p><img src="images/daylilly.jpg" alt="Day Lilly" width="725" height="150" /> </p>
    </section>
    <section>
<p>In the late 19th century an eminent Columbia University botanist named Nathaniel Lord Britton and his wife, Elizabeth, also a botanist, were so inspired by their visit to England's Royal Botanic Gardens, Kew, that they and other members of the Torrey Botanical Club determined New York should possess a great botanical garden as well. A magnificent site was selected in the northern section of the Bronx, part of which had belonged to the vast estate of tobacco merchant Pierre Lorillard. </p> 
   </section>
    <section>
        <h3>Botanic Gardens</h3>
        <figure>
    	<img src="images/flowers.jpg" alt="yellow and red floral pic" /> 
     	<figcaption>Daylily</figcaption>  
  	  </figure> 
          <p>At the height of summer, Daylily/Daffodil Walk is alight with the radiance of daylilies. In all shades of yellow and orange, from blazingly bright to palest pastel, as well as tones of pink and red.</p>
          <p> Three hundred and forty four different daylilies, showcase the diversity of this easy-to-grow perennial. </p>
      
    <p> <?php echo @$intro; ?></p> 
    <p> <?php echo @$blurb; ?></p> 
    
  </section> 
     <!-- end .content --></article>  	    
    
    <?php require_once('includes/sidebar.inc.php'); ?>
    <?php include_once('includes/footer.inc.php');?>
	  
  
</div>
</body>
</html>
