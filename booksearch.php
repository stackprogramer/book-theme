<?php
/*
Template Name: Book Form search Page
*/
?>
<?php
get_header(); ?>


<?php
                 

                   
					//Return id wp for book according id book_info
					function get_id_wp_book($id_book_req){
						$id_wp_book=0;
						$args = array(
						  'post_type' => 'books'
						);
						$total_number_query = new WP_Query( $args );
						$count_books_number=$total_number_query->found_posts;
						$the_query = new WP_Query( $args );
						$count_books_number=$the_query->found_posts;
						$id_current=get_the_ID();
						$flag_increment=true;
						
						$loop = new WP_Query( array( 'post_type' => 'books', 'posts_per_page' => 100 ) ); 
						$id_book=1;
						while ( $loop->have_posts() ) : $loop->the_post(); 
							if($flag_increment && $id_current!=get_the_ID()){
							if(($count_books_number-$id_book_req+1)==$id_book){
							 the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' );
							$flag_increment=false;	
							}	
							$id_book++;
							
							}
							else{
							$flag_increment=false;
							$id_wp_book=$id_current;
								}
						endwhile; 
						}

?>


<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
			
		<?php
    if (!empty($_POST)) {
				$isbn=$_POST['isbn'];
				global $wpdb;
				$table_name = $wpdb->prefix . 'book_info';
				$search_id = $wpdb->get_var("SELECT id FROM `$table_name` WHERE isbn= '$isbn'");
				get_id_wp_book($search_id);
				
    } else {
        ?>
        <form method="post">
            <input class="input"type="text" name="isbn">
			<br>
            <button class="btn"type="submit"><?php echo __( 'ISBN numbers','bookpost');?></button>
			<br><br>
        </form>
        <?php 
    }  
?>		  
				  


</body>
</html>
     
	 
	 
    </main>
  </div>
</div>
<?php get_footer();?>
