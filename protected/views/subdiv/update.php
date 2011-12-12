<?php
$this->breadcrumbs=array(
	'Subdivs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subdiv', 'url'=>array('index')),
	array('label'=>'Create Subdiv', 'url'=>array('create')),
	array('label'=>'View Subdiv', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subdiv', 'url'=>array('admin')),
);
?>

<h1>Update Subdiv <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>