<?php
$this->breadcrumbs=array(
	'Grads',
);

$this->menu=array(
	array('label'=>'Create Grad', 'url'=>array('create')),
	array('label'=>'Manage Grad', 'url'=>array('admin')),
);
?>

<h1>Grads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
