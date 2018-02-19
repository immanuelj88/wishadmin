<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <title>Wishing you happy Valentines Day in advance</title>
    <meta name="google" value="notranslate">
    <meta property="og:type" content="Make your own wonderful Valentines Day wish"/>
    <meta property="og:title" content=" Wishing you happy Thai Poosam in advance"/>
    <meta property="og:url" content=""/>
    <meta property="og:description" content="CLICK HERE"/>
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content="https:">
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <!-- blueprint CSS framework -->
    <!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/screen.css" media="screen, projection">-->
    <!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/print.css" media="print">-->
    <!--	<!--[if lt IE 8]>-->
    <!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/ie.css" media="screen, projection">-->
    <!--	<![endif]--><!---->
    <!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/main.css">-->
    <!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/form.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
<!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->

    <style>
        @font-face {
            font-family: "myTamilFont";
            src: url(<?php echo Yii::app()->request->baseUrl; ?>/css/stylish-tamil.ttf);
        }
        h2,h3,h4,h5
        {
            font-family: "myTamilFont";
        }
    </style>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div id="header">
        <!--		<div id="logo">--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</div>-->
        <nav class="navbar navbar-webmaster">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i>Web Tools </span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Bootstrap</a></li>
                            <li><a href="#">Javascript</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="#">Sublime<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dynamic <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">SQL</a></li>
                            <li><a href="#">Jquery</a></li>
                            <li><a href="#">Angular JS</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right search-form" role="search">
                    <input type="text" class="form-control" placeholder="Search" />
                </form>
            </div>
        </nav>
    </div><!-- header -->



<!--    --><?php //if(isset($this->breadcrumbs)):?>
<!--        --><?php //$this->widget('zii.widgets.CBreadcrumbs', array(
//            'links'=>$this->breadcrumbs,
//        )); ?><!--<!-- breadcrumbs -->
<!--    --><?php //endif?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <!--	<div id="footer">-->
    <!--		Copyright &copy; --><?php //echo date('Y'); ?><!-- by My Company.<br/>-->
    <!--		All Rights Reserved.<br/>-->
    <!--		--><?php //echo Yii::powered(); ?>
    <!--	</div><!-- footer -->-->

</div><!-- page -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</body>
</html>
