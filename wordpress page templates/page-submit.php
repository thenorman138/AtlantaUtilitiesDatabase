<!--
-
-
-Template Name: Submit
-
-
-->

<?php get_header(); ?>

	<div id="subhead_container">
		
		<div class="row">

		<div class="twelve columns">
		
		<h1><?php the_title(); ?></h1>
			
			</div>	
			
	</div></div>
	
		<!--content-->
		<div class="row" id="content_container">
			
			<!--left col--><div class="eight columns">
		
				<div id="left-col">
		  
            

                 <form method="post" action="confirm.php" enctype="multipart/form-data">
	 <label>Upload File</label>
	 <input type="file" name="file">
	 <input type="submit" name="preview" value="Preview" formtarget="_blank">
	 <input type="submit" name="submit" value="Confirm" >
</form>
				
	</div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>