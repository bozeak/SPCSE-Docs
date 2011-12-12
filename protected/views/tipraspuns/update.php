<?php
$this->breadcrumbs=array(
	'Tipraspuns'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipraspuns', 'url'=>array('index')),
	array('label'=>'Create Tipraspuns', 'url'=>array('create')),
	array('label'=>'View Tipraspuns', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tipraspuns', 'url'=>array('admin')),
);
?>

<h1>Update Tipraspuns <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>