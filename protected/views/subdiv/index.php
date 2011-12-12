<?php
$this->breadcrumbs=array(
	'Subdivs',
);

$this->menu=array(
	array('label'=>'Create Subdiv', 'url'=>array('create')),
	array('label'=>'Manage Subdiv', 'url'=>array('admin')),
);
?>

<h1>Subdivs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
