<?php
$this->breadcrumbs=array(
	'Tdbs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TDb', 'url'=>array('index')),
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'View TDb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>Update TDb <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>