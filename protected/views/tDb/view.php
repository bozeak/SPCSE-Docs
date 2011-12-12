<?php
$this->breadcrumbs=array(
	'Tdbs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TDb', 'url'=>array('index')),
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'Update TDb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TDb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>View TDb #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'subdiv',
		'nr_reg',
		'date_reg',
		'date_doc',
		'elab',
		'id_elab',
		'address',
		'nr_cadastr',
		'tel',
		'content',
		'responsabil',
		'get_exec',
		'nr_respons',
		'date_respons',
		'respons_type',
		'note',
		'dossier',
		'author',
		'date_add',
	),
)); ?>
