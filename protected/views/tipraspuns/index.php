<?php
$this->breadcrumbs=array(
	'Tipraspuns',
);

$this->menu=array(
	array('label'=>'Create Tipraspuns', 'url'=>array('create')),
	array('label'=>'Manage Tipraspuns', 'url'=>array('admin')),
);
?>

<h1>Tipraspuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
