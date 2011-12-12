<?php
$this->breadcrumbs=array(
	'Grads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grad', 'url'=>array('index')),
	array('label'=>'Manage Grad', 'url'=>array('admin')),
);
?>

<h1>Create Grad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>