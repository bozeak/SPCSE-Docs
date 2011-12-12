<?php
$this->breadcrumbs=array(
	'Subdivs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subdiv', 'url'=>array('index')),
	array('label'=>'Manage Subdiv', 'url'=>array('admin')),
);
?>

<h1>Create Subdiv</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>