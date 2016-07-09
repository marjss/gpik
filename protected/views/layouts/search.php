<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Gympik- An end-to-end free online platform to help improving lifestyle choices.</title>
<?php Yii::app()->bootstrap->registerAllScripts(); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/gympik.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap-responsive.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/overwrite.css'); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-46152389-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body><div id="overlays"></div>
    <?php 
   
    $this->widget('bootstrap.widgets.TbModal', array(
'id' => 'myModal8',
'header' => '<h4 id="myModalLabel">Search Fitness Professionals</h4>',
'content'=> $this->renderPartial('//site/searchtrainer','',true),
'show'=>false,
'footer'=>false,
/*'footer' => array(
TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
TbHtml::button('Close', array('data-dismiss' => 'modal')),
),*/
)); ?>
    <?php 
    $model = new LoginForm;
    $this->widget('bootstrap.widgets.TbModal', array(
'id' => 'myModal',
'header' => '<h3 id="myModalLabel">Sign In</h3>',
'content'=> $this->renderPartial('//site/userlogin',array('model'=>$model),true),
//'remote' => $this->createUrl('site/userlogin'),
//'options' =>array('remote' => 'site/userlogin'),
 //'show'=>Yii::app()->user->isGuest ? true:false,
 'footer'=>false,
//        'closeText'=>false,
        //'onHidden'=>'function(){ 
                      // window.location = "'.CController::createUrl("site/index").'";
                      //  }',
    'backdrop'=>false,
    'keyboard'=>false,
/*'footer' => array(
TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
TbHtml::button('Close', array('data-dismiss' => 'modal')),
),*/
)); ?>
    
<?php $forgot = new Forgotpass;
$this->widget('bootstrap.widgets.TbModal', array(
'id' => 'forgot-pass',
'header' => '<h3>Forgot password</h3>',
'content'=> $this->renderPartial('/site/_forgotpass',array('model'=>$forgot),true),//'adasdasdasd',//
//'remote' => $this->renderPartial('_form',array('model'=>$model),true),
//'options' =>array('remote' => 'site/userlogin'),
 'show'=>false,
     'onShow'=>'function(){
    $("#forgotpass-form")[0].reset();
    }',
 'footer'=>'',
    'onHidden'=>'function(){ 
//                       window.location = "'.CController::createUrl("site/index").'";
                        }',
     'htmlOptions'=>array('class'=>'forgot'),
'footer' => array(

//TbHtml::button('cancel', array('data-dismiss' => 'modal')),
//TbHtml::submitButton('Submit', array('id'=>'profilesubmit', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
),
)); ?>
<?php 
    $model2 = new Users;
    $this->widget('bootstrap.widgets.TbModal', array(
'id' => 'myModal1',
'header' => '<h3 id="myModalLabel">New User Registration</h3>',
'content'=> $this->renderPartial('create',array('model'=>$model2),true),
'remote' => $this->createUrl('users/create'),
//'options' =>array('remote' => 'site/userlogin'),
 'show'=>false,
        'onShow'=>'function(){
    $("#type_id").css("display","none");
    $("#users-form")[0].reset();
    }',
        'onHidden'=>'function(){ 
                       window.location = "'.CController::createUrl("site/index").'";
                        }',
        'footer'=>FALSE,
/*'footer' => array(
TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
TbHtml::button('Close', array('data-dismiss' => 'modal')),
),*/
)); ?>
<div id="header">
     <?php $this->widget('bootstrap.widgets.TbAlert', array(
                'fade'=>true,
                'closeText'=>'×', //'<button type="button" class="close">×</button>',
               'htmlOptions'=> array('class'=>'tbmain-alert comman-popUp')
                )); ?>
     <?php $this->widget('Header');?>
</div>

<div id="content-area">
  <div class="container inner">
    <div class="row-fluid">
      <div class="span12">
          <h1>Find Your Trainers <?php if(Yii::app()->user->isGuest){}else{ echo TbHtml::link('Dashboard',array('users/userdashboard'));} ?>
            <!--<a href="#">Dashboard</a>-->
        </h1>
      </div>
  </div>
  <div class="fix-content">
  <?php echo $content; ?>
  </div>
</div>
   
<div class="stature-panel">
	<?php $this->widget('Stature');?>
</div>
     </div>
<div id="footer">
     <?php $this->widget('Footer');?>
</div>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/underscore.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/backbone.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/about.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/citycombo.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.session.js"></script>
<div class="copyr">Copyright © 2013 - 2014. All Rights Reserved. </div>
<?php Yii::app()->bootstrap->registerAllScripts(); ?>
    </body>
    <script>
   $(document).ready(function(){ 
       //Show forced login popup added blurr effect on background
       var logged = '<?php echo Yii::app()->user->isGuest;?>';
       if(logged){
//           $('#content-area').addClass('blury');
//           $('#myModal').css('z-index','999999');
//          $('#myModal1').css('z-index','999999');
//          $('#forgot-pass').css('z-index','999999'); 
//          $('#overlays').fadeIn(300);
          // $('.blury').css('z-index','9999');
       }
   if ($('#header:has(.tbmain-alert)').length >0) {
            $(this).css('z-index','999999');
    $('#overlays').fadeIn(300);
   }else{
       
   }
   $(document).on('click','.alert .close',function(){
       $('#overlays').fadeOut(300, function(){
        $('.expose').css('z-index','1');
    });
   })
   $(document).on('click','.cp-f',function(){
       $('#overlays').fadeOut(300, function(){
        $('.expose').css('z-index','1');
    });
   })
});

</script>
</html>

