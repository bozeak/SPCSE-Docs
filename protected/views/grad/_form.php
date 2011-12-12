<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'md'); ?>
		<?php echo $form->textField($model,'md',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'md'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->