<?php
$this->breadcrumbs=array(
	'Tdbs',
);

$this->menu=array(
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>Tdbs</h1>

<?php
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
?>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		'id',
		'subdiv',
		'date_reg',	
),
));
?>
