<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'responsabil-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grad'); ?>
		<?php echo $form->textField($model,'grad'); ?>
		<?php echo $form->error($model,'grad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subdiv'); ?>
		<?php echo $form->textField($model,'subdiv'); ?>
		<?php echo $form->error($model,'subdiv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacts'); ?>
		<?php echo $form->textField($model,'contacts',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contacts'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->