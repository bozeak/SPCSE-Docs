<?php
$this->breadcrumbs=array(
	'Tdbs',
);

/*$this->menu=array(
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);*/
?>

<h1>Tdbs</h1>

<?php
function textLimit($string, $length, $replacer = '...')
{
    if(strlen($string) > $length)
        return (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;

    return $string;
}

$this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
    'nullDisplay'=>'Not set',
	'columns'=>array(
		'id',
        array(
            'header'=>'Nr. de înregistrare <br />Data înregistrării',
            'value'=>'$data->nr_reg."<br/>".nl2br($data->date_reg)',
            'type'=>'raw',
        ),
        'elab',
        array(
            'name'=>'address',
            'value'=>'$data->address',
            'visible'=>!Yii::app()->user->isGuest,
        ),
        array(
            'name'=>'content',
            'value'=>'utf8_encode(textLimit($data->content,30))',
            'visible'=>!Yii::app()->user->isGuest,
        ),

        array(
            'name'=>'responsabil',
            'value'=>'($data->resp2)?nl2br($data->resp2->grad0->md)." ".nl2br($data->resp2->fullname)."<br />".nl2br($data->resp2->contacts):""',
            'type'=>'raw',
        ),

        array(
            'header'=>'Nr. act/Data răspunsului<br />Tipul răspunsului',
            'value'=>'($data->tiprasp)?$data->tiprasp->name:" "',
            'type'=>'raw',
            'visible'=>!Yii::app()->user->isGuest,
        ),
        array(
            'name'=>'dossier',
            'value'=>'$data->dossier',
            'visible'=>!Yii::app()->user->isGuest,
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}',
            'visible'=>!Yii::app()->user->isGuest,
        ),
),
));
?>
