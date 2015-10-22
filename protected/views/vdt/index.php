
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
								<?php echo $form->textField($model,'vdtName',array('placeholder'=>"新文件夹名"));?>
								<?php echo $form->error($model,'vdtName');?>
								<span class="input-group-btn"><?php echo CHtml::submitButton('新建');?></span>
							</div>
							<?php $this->endWidget();?>
						</div>