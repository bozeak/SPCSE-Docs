<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subdiv'); ?>
		<?php echo $form->textField($model,'subdiv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nr_reg'); ?>
		<?php echo $form->textField($model,'nr_reg',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_reg'); ?>
		<?php echo $form->textField($model,'date_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_doc'); ?>
		<?php echo $form->textField($model,'date_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'elab'); ?>
		<?php echo $form->textField($model,'elab',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_elab'); ?>
		<?php echo $form->textField($model,'id_elab',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nr_cadastr'); ?>
		<?php echo $form->textField($model,'nr_cadastr',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsabil'); ?>
		<?php echo $form->textField($model,'responsabil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'get_exec'); ?>
		<?php echo $form->textField($model,'get_exec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nr_respons'); ?>
		<?php echo $form->textField($model,'nr_respons',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_respons'); ?>
		<?php echo $form->textField($model,'date_respons'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respons_type'); ?>
		<?php echo $form->textField($model,'respons_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dossier'); ?>
		<?php echo $form->textField($model,'dossier',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author'); ?>
		<?php echo $form->textField($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_add'); ?>
		<?php echo $form->textField($model,'date_add'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->