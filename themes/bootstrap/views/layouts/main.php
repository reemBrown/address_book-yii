<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <?php
    $cs = Yii::app()->clientScript;
    $themePath = Yii::app()->theme->baseUrl;

    /**
     * StyleSHeets
     */
    $cs
        ->registerCssFile($themePath.'/assets/css/bootstrap.css')
        ->registerCssFile($themePath.'/assets/css/bootstrap-theme.css');

    /**
     * JavaScripts
     */
    $cs
        ->registerCoreScript('jquery',CClientScript::POS_END)
        ->registerCoreScript('jquery.ui',CClientScript::POS_END)
        ->registerScriptFile($themePath.'/assets/js/bootstrap.min.js',CClientScript::POS_END)

        ->registerScript('tooltip',
            "$('[data-toggle=\"tooltip\"]').tooltip();
            $('[data-toggle=\"popover\"]').tooltip()"
            ,CClientScript::POS_READY);

    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/respond.min.js"></script>
    <![endif]--> 



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>


<div class="container" id="page">


	<?php echo $content; ?>

	<div class="clear"></div>

	<!-- <div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>
 
</div><!-- page -->

</body>
</html>
