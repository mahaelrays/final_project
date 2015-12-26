<?php
get_header();
?>
  <body>
    <div class="container breadcrumb">
      <ol class="pagination">
       <li>Home</li>
       <li>»</li>
       <!-- the category name -->
       <li><?php single_cat_title(); ?></li>

       <!-- the term -->
       <li>»</li>
       <li><?php  get_the_terms( $post->ID, 'on-draught' ); ?></li>
       <li>»</li>
       <li><?php 
           if ( have_posts() ) {
              while ( have_posts() ) {
                 the_post();
                 the_title();?>
        </li>        
      </ol>
    </div>
    <div class="content">
    <div class="row ">
         <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            } 
            the_content(); ?>
        <h3>Related Products</h3>
        <hr>
        <div class="row" id="moredress">
          <div class ="col-md-3">
              <a target="_blank" href="#">
              <?php if ( has_post_thumbnail() ) {
                   the_post_thumbnail();
                    } ?></a>
<?php
get_footer();       