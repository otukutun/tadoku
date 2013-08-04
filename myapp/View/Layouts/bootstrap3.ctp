<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>
		多読 -
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
    <link href="//slywalker.github.io/cakephp-plugin-boost_cake/bootstrap3/css/bootstrap.css" rel="stylesheet">
    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('style.css'); ?>
	<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	.affix {
		position: fixed;
		top: 60px;
		width: 220px;
	}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<?php echo $this->Html->link('Tadoku', array(
				//'plugin' => 'boost_cake',
				'controller' => 'users',
				'action' => 'mypage'
            ), array('class' => 'navbar-brand')); ?>
            <ul class="nav navbar-nav pull-right">
                <?php if ($this->Session->check('user_id')): ?>
                <li><?php echo $this->Html->link('ログアウト', array(
                    'controller' => 'users',
                    'action' => 'logout'
                )); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="container">

        <?php echo $this->fetch('content'); ?>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
    <?php echo $this->Html->script('tab.js'); ?>
    <!--<script src="//slywalker.github.io/cakephp-plugin-boost_cake/bootstrap3/js/bootstrap.min.js"></script>-->
    <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <?php echo $this->fetch('script'); ?>

</body>
</html>
