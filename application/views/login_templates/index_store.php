
    <!-- ***** Preloader Start ***** -->
    

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Book</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
      <?php $new= ""; ?>
      <div class="carousel-inner">
      <?php foreach($noteone as $row){
        if($new == ""){ 
            $new=1; 
            ?>
          <div class="item active">
            <div class="col-xs-4">      
              <a href="<?php echo site_url('store/detail_page/'.$row['id']);?>"><img src="<?php echo base_url('assets/uploads/');?><?php echo $row['image']; ?>" class="img-responsive"></a>
            </div>
          </div>
          <?php }else{?>
            <div class="item">       
            <div class="col-xs-4">      
              <a href="<?php echo site_url('store/detail_page/'.$row['id']);?>"><img src="<?php echo base_url('assets/uploads/');?><?php echo $row['image']; ?>" class="img-responsive"></a>
            </div>
          </div>
            <?php }
            } ?>
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>  
</div>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Cloths</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="thCarousel">
      <?php $new= ""; ?>
      <div class="carousel-inner">
      <?php foreach($notetwo as $row){
        if($new == ""){ 
            $new=1; 
            ?>
          <div class="item active">
            <div class="col-xs-4">      
              <a href="<?php echo site_url('store/detail_page/'.$row['id']);?>"><img src="<?php echo base_url('assets/uploads/');?><?php echo $row['image']; ?>" class="img-responsive"></a>
            </div>
          </div>
          <?php }else{?>
            <div class="item">       
            <div class="col-xs-4">      
              <a href="<?php echo site_url('store/detail_page/'.$row['id']);?>"><img src="<?php echo base_url('assets/uploads/');?><?php echo $row['image']; ?>" class="img-responsive"></a>
            </div>
          </div>
            <?php }
            } ?>
        </div>
        <a class="left carousel-control" href="#thCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#thCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>  
</div>
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Smartphone</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="tCarousel">
      <?php $new= ""; ?>
      <div class="carousel-inner">
      <?php foreach($notethree as $row){
        if($new == ""){ 
            $new=1; 
            ?>
          <div class="item active">
            <div class="col-xs-4">      
              <a href="<?php echo site_url('store/detail_page/'.$row['id']);?>"><img src="<?php echo base_url('assets/uploads/');?><?php echo $row['image']; ?>" class="img-responsive"></a>
            </div>
          </div>
          <?php }else{?>
            <div class="item">       
            <div class="col-xs-4">      
              <a href="<?php echo site_url('store/detail_page/'.$row['id']);?>"><img src="<?php echo base_url('assets/uploads/');?><?php echo $row['image']; ?>" class="img-responsive"></a>
            </div>
          </div>
            <?php }
            } ?>
        </div>
        <a class="left carousel-control" href="#tCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#tCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>  
</div>
        

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?php echo base_url('assets/images/feature-image.jpg');?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
   

