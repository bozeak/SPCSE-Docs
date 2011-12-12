<?php
$this->breadcrumbs=array(
	'Subdivs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Subdiv', 'url'=>array('index')),
	array('label'=>'Create Subdiv', 'url'=>array('create')),
	array('label'=>'Update Subdiv', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subdiv', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subdiv', 'url'=>array('admin')),
);
?>

<h1>View Subdiv #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
