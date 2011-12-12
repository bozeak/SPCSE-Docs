<?php
$this->breadcrumbs=array(
	'Tdbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TDb', 'url'=>array('index')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>Create TDb</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>