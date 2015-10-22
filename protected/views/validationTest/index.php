
<div class="form">
<?php 
	$model=new ValidationTestForm();
	$vdtModel=new VdtForm();
?>
<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'valid-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
			'validateOnSubmit'=>true,
			),
			'action'=>$this->createUrl('validationTest/ss'),
		)); ?>
<div class="row">
            <?php echo $form->textField($model,'vdName'); ?>
            <?php echo $form->error($model,'vdName');?>
</div>
<div class="row">
	<?php echo CHTML::submitButton('提交');?>
</div>
<?php $this->endWidget();?>
</div>
fjskjkjsdfjsdfsk
<div class="form">
					        <?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'create-folder-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
								'validateOnSubmit'=>true,
								),
							)); ?>
							<!-- 这里少了一个div -->
							<div class="input-group margin">
								<?php echo $form->textField($vdtModel,'newFolderName',array('placeholder'=>"新文件夹名"));?>
								<?php echo $form->error($vdtModel,'newFolderName');?>
								<span class="input-group-btn"><?php echo CHtml::submitButton('新建');?></span>
							</div>
							<?php $this->endWidget();?>
						</div>