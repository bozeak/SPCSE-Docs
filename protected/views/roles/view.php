<?php
$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->rid,
);

$this->menu=array(
	array('label'=>'List Roles', 'url'=>array('index')),
	array('label'=>'Create Roles', 'url'=>array('create')),
	array('label'=>'Update Roles', 'url'=>array('update', 'id'=>$model->rid)),
	array('label'=>'Delete Roles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roles', 'url'=>array('admin')),
);
?>

<h1>View Roles #<?php echo $model->rid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rid',
		'rid_name',
	),
)); ?>
