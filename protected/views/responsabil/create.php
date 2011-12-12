<?php
$this->breadcrumbs=array(
	'Responsabils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Responsabil', 'url'=>array('index')),
	array('label'=>'Manage Responsabil', 'url'=>array('admin')),
);
?>

<h1>Create Responsabil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>