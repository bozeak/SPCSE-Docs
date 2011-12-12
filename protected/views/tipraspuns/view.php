<?php
$this->breadcrumbs=array(
	'Tipraspuns'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tipraspuns', 'url'=>array('index')),
	array('label'=>'Create Tipraspuns', 'url'=>array('create')),
	array('label'=>'Update Tipraspuns', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tipraspuns', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipraspuns', 'url'=>array('admin')),
);
?>

<h1>View Tipraspuns #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
