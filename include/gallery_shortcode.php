<?php 
function gallery_shortcode_code(){
	?>
<style type="text/css">
.column{
	float: left;
	width: 33.33%;
	padding: 5px;
	background-color: lightgrey;
	background-repeat: repeat;
	border: 1px solid black;

}
.row ::after{
		content: "";
		clear: both;
		display: table;
}

div#img_container {
		padding: 5px;
		
		height: inherit;
	}


	/* Media Query   */
	@media screen and (max-width: 500px){
		.column{
			width: 100%;
			background-color: lightgrey;
			background-repeat: repeat;
		}
	}

</style>
<div class="row" id = "img_container">
	<?php 
	$args = array(
   'post_type' => 'gallery-world', //  custom post type name 
   'posts_per_page' => -1, // no of post per page 
   'order_by' => 'date', // Some optional sorting
   'order' => 'ASC', 
   'post_status'=>'publish'
   );
 $data = get_posts($args);
              // print_r($data);
               // die;  

	 			$i=1;
               foreach ($data as $key => $value) {
               	// print_r($value);
                      
                   echo '<div class ="column"><img src="'.get_the_post_thumbnail_url($value->ID).'"style="width:100%"></div>';
                   
                 $i++;
               } 

               ?>
	</div>

<?php
}

add_shortcode('Gallery-world','gallery_shortcode_code');
?>
