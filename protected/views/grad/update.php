<?php
$this->breadcrumbs=array(
	'Grads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grad', 'url'=>array('index')),
	array('label'=>'Create Grad', 'url'=>array('create')),
	array('label'=>'View Grad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Grad', 'url'=>array('admin')),
);
?>

<h1>Update Grad <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>