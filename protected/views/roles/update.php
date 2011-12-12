<?php
$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->rid=>array('view','id'=>$model->rid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roles', 'url'=>array('index')),
	array('label'=>'Create Roles', 'url'=>array('create')),
	array('label'=>'View Roles', 'url'=>array('view', 'id'=>$model->rid)),
	array('label'=>'Manage Roles', 'url'=>array('admin')),
);
?>

<h1>Update Roles <?php echo $model->rid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>