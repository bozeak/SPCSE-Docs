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
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grad'); ?>
		<?php echo $form->textField($model,'grad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subdiv'); ?>
		<?php echo $form->textField($model,'subdiv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contacts'); ?>
		<?php echo $form->textField($model,'contacts',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->