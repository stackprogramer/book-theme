<?php
/*
Template Name: Book Form search Page
*/
?>
<?php
get_header(); ?>
<?php

                    function get_isbn_book_number($id_book){
						global $wpdb;
						$table_name = $wpdb->prefix . 'book_info';
						$books= $wpdb->get_results("SELECT * FROM `$table_name` WHERE id = ' $id_book'");
						// foreach($books as $row){ 
						// $book=$row; 
						echo 'isbn'.$book->id.'='.$book->isbn.'<br>';
						// break;
						// }
						return $books[0]->isbn;
					}

?>


<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
  
				  <?php 
				    $table_name = $wpdb->prefix . 'book_info';
				    $books= $wpdb->get_results("SELECT * FROM `$table_name`");
				   
		            foreach($books as $row){ 
					$book=$row; 
					echo $book->id.'----'.$book->isbn.'<br>';
					}
				  ?>
     
    </main>
  </div>
</div>
<?php get_footer();?>
