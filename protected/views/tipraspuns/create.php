<?php
$this->breadcrumbs=array(
	'Tipraspuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipraspuns', 'url'=>array('index')),
	array('label'=>'Manage Tipraspuns', 'url'=>array('admin')),
);
?>

<h1>Create Tipraspuns</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>