<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="<?php echo Yii::app()->theme->baseUrl?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl?>/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl?>/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo Yii::app()->name?></a>
          <div class="nav-collapse collapse">
            <?php $this->widget('zii.widgets.CMenu',array(
              'htmlOptions'=>array("class"=>"nav"),
              'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
              ),
            )); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<?php if(!empty($this->breadcrumbs)):?>
  <div class="container-fluid" style="padding-top:0">
  <div class="row-fluid">
  <div class="span12">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'htmlOptions'=>array("style"=>"margin: 10px 0;"),
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
  </div>
  </div> 
  </div>
<?php endif?>
<?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container-fluid" style="padding-top:0">
    <div class="row-fluid">
      <div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
<?php endif;?>
<?php echo $content;?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/jquery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-button.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/js/bootstrap-typeahead.js"></script>

  </body>
</html>