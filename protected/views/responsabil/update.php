<?php
$this->breadcrumbs=array(
	'Responsabils'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Responsabil', 'url'=>array('index')),
	array('label'=>'Create Responsabil', 'url'=>array('create')),
	array('label'=>'View Responsabil', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Responsabil', 'url'=>array('admin')),
);
?>

<h1>Update Responsabil <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>