<?php
$this->breadcrumbs=array(
	'Responsabils',
);

$this->menu=array(
	array('label'=>'Create Responsabil', 'url'=>array('create')),
	array('label'=>'Manage Responsabil', 'url'=>array('admin')),
);
?>

<h1>Responsabils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
