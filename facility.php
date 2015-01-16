<?php

$title = "Our Facility";
$description = "Central Illinois sober living house in a serene natural environment, just 20 miles from Peoria, our facility is designed to let you focus on recovery.";

?>
<script>var makeActive = '#facility';</script>
<?php include 'header.php'; ?>

    <div class="jumbotron">

    </div>



    <div class="container">
      
    	<div class="row">
        	<div class="col-md-8">
				<h1><?php echo $title; ?></h1>
				<p>Invictus Woods is nestled on 35 acres of serenely wooded property 20 miles away from Peoria, Illinois, which has extensive retail, restaurants, support and recovery groups. Invictus Woods has 5 bedrooms and 4 bathrooms, hardwood oak flooring in the dining room, kitchen and living room. The upstairs living room has a large TV, a telescope, and internet. The kitchen has a gas stove, commercial refrigerator, oven and microwave.</p>
				<p>There are decks in the front and back of the home for relaxation and reflection, as well as central air conditioning throughout the house. On the lower level there is large group meeting room, two bedrooms, a bathroom, and a kitchen. The lower level walks out to a patio with a grill and scenic views of the woods. The local wildlife consists of birds, deer, fox, and turkey.</p>
       		</div>
			<div class="thumbs col-md-4">
				<a class="fancybox thumbnail" href="images/invictus_woods_fire_pit.jpg" data-fancybox-group="gallery" title=""><img src="images/fire_pit_thumb.jpg" alt="" /></a>
				<a class="fancybox thumbnail" href="images/invictus_woods_garden.jpg" data-fancybox-group="gallery" title=""><img src="images/garden_thumb.jpg" alt="" /></a> 
			</div>

      	</div>
	 </div>

<?php include 'footer.php'; ?>

<script>$('body').addClass('page facility');</script>