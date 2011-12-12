<?php
$this->breadcrumbs=array(
	'Tdbs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TDb', 'url'=>array('index')),
	array('label'=>'Create TDb', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tdb-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tdbs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tdb-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'subdiv',
		'nr_reg',
		'date_reg',
		'date_doc',
		'elab',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
