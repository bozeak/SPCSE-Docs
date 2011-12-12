<?php
$this->breadcrumbs=array(
	'Grads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Grad', 'url'=>array('index')),
	array('label'=>'Create Grad', 'url'=>array('create')),
	array('label'=>'Update Grad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Grad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grad', 'url'=>array('admin')),
);
?>

<h1>View Grad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'md',
	),
)); ?>
