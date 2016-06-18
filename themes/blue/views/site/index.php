<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div id="myCarousel" class="carousel slide tii-carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo Yii::app()->theme->baseUrl ?>/img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<section class="four-bg pd4">
<div class="container center">
    
  <div class="row-fluid">
    <div class="span4">
      <i class="icon-magic icon-4x"></i>
      <h2>Heading</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <i class="icon-camera-retro icon-4x"></i>
      <h2>Heading</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <i class="icon-shopping-cart icon-4x"></i>
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>


<section id="why" class="clearfix mg4">
<div class="container">
 <div class="row-fluid">
    <div class="span4">
      <h4><i class="icon-flag"></i> One font, 249 icons</h4>
      In a single collection, Font Awesome is a pictographic language of web-related actions.
    </div>
    <div class="span4">
      <h4><i class="icon-pencil"></i> CSS control</h4>
      Easily style icon color, size, shadow, and anything that's possible with CSS.
    </div>
    <div class="span4">
      <h4><i class="icon-fullscreen"></i> Infinite scalability</h4>
      Scalable vector graphics means every icon looks awesome at any size.
    </div>
  </div>
  <div class="row-fluid">
    <div class="span4">
      <h4><i class="icon-beer"></i> Free, as in Beer</h4>
      Font Awesome is completely free for commercial use. Check out the <a href="#license">license</a>.
    </div>
    <div class="span4">
      <h4><i class="icon-ok"></i> IE7 Support</h4>
      Font Awesome supports IE7. If you need it, you have my condolences.
    </div>
    <div class="span4">
      <h4><i class="icon-eye-open"></i> Perfect on Retina Displays</h4>
      Font Awesome icons are vectors, which mean they're gorgeous on high-resolution displays.
    </div>
  </div>
  <div class="row-fluid">
    <div class="span4">
      <h4><i class="icon-thumbs-up"></i> Made for Twitter Bootstrap</h4>
      Designed from scratch to be fully compatible with <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap 2.2.2</a>.
    </div>
    <div class="span4">
      <h4><i class="icon-tint"></i> Designer Friendly</h4>
      Install FontAwesome.otf and <a href="#" target="_blank">visit the copy &amp; paste page</a>. Happy designing.
    </div>
    <div class="span4">
      <h4><i class="icon-search"></i> Screen reader compatible</h4>
      Font Awesome won't trip up screen readers, unlike other icon fonts.
    </div>
  </div>
</div>
</section>
  <!-- START THE FEATURETTES -->
  <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel()
      })
    }(window.jQuery)
  </script>
 