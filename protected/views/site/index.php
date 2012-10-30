<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php echo CHtml::link('load page without theme', array('/site/widget')); ?><br>
<?php echo CHtml::link('load page with theme', array('/site/widget', 'theme' => 'classic')); ?> (Exception)<br>