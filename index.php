<?php
get_header();
?>
<body>
<!--2 inner slider -->
 <div class="row">
<div class="col-lg-6">
<div id="soka-gallery1" class="carousel slide  clear-affix   carousel-1" data-ride="carousel">
  <div class="carousel-inner  carusalslide" role="listbox">
    <div class="item imggallery active">
      <img class="img" src="<?php echo get_template_directory_uri(); ?>/images/panner.jpg" alt="...">      
    </div>
    <div class="item  imggallery">
      <img class="img" src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg" alt="...">
    </div>
  </div> 
  </div>
</div>

<div class="col-lg-5">
 <div id="soka-gallery2" class="carousel slide  clear-affix  carousel-2" data-ride="carousel">
  <!-- Indicators -->
  <!-- Wrapper for slides -->
  <div class="carousel-inner  carusal-slide" role="listbox">
    <div class="item img-gallery active">
    <div class="alter-image" >
  <h3>While not always necessary, sometimes you need .</h3></br><h3> For those situations, try the panel component.</h3></div>
    </div>
    <div class="item  img-gallery">
   <div class="alter-image" >
  <h3>While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.</h3></div>
    </div>
  </div> 
    <a href="" class="cart"><img class="btn btn-succes"  src="<?php echo get_template_directory_uri(); ?>/images/cart.png" alt="..."></a>
  <div class="subject"><h4>SWEET COCKTAIL DRESSES</h4></div> 
  <div class="price-offer"><h3 >Price</h3></div> 
  <div class="arrows">
   <a class="lefting" href=".carousel"  role="button" data-slide="prev">
       <img  class="img img-circle" src="<?php echo get_template_directory_uri(); ?>/images/arrow_left.jpg" alt="" />
    <span class="sr-only">Previous</span>
  </a>
   <a class="righting" href=".carousel"   role="button" data-slide="next">
    <img  class="img img-circle"src="<?php echo get_template_directory_uri(); ?>/images/arrow_right.jpg" alt="" />
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div> 
</div>
 </div>

<div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-3 thumb">
              <a class="thumbnail" href="#">
<!-- the loop -->
<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            } 
            the_title();
            the_content(); ?>
        <p>
        <button href="#" class="btn btn-lg shop" > <span class="glyphicon glyphicon-shopping-cart" >Shop</span></button> 
        <button type="button" class="btn btn-default heart-comment"  > <span class="glyphicon glyphicon-heart"></span></button>  
        <button type="button" class="btn btn-default heart-comment"> <span class="glyphicon glyphicon-comment"></span></button>
        </p>
        </a>
        </div>
  }  end while
}  end if




get_footer();
?>