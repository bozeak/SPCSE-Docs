<?php
$this->breadcrumbs=array(
	'Responsabils'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Responsabil', 'url'=>array('index')),
	array('label'=>'Create Responsabil', 'url'=>array('create')),
	array('label'=>'Update Responsabil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Responsabil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Responsabil', 'url'=>array('admin')),
);
?>

<h1>View Responsabil #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fullname',
		'grad',
		'subdiv',
		'contacts',
	),
)); ?>
