<h2>每日一句</h2>
<div id="quote-of-the-day">
    <?php $this->renderPartial('_quote', array(
        'quote' => $quote,
    	'hehe'=>$hehe,
    ))?> 
</div>

        
<?php $quoteModel=new QuoteForm();?>
<?php $quoteForm=$this->beginWidget('CActiveForm', array(
		'id'=>'quote-form',
		)
	);?>
	<?php echo $quoteForm->textField($quoteModel,'hehe');?>
	<?php echo CHTML::ajaxSubmitButton('下一句', array('getQuote'),
        array('update' => '#quote-of-the-day'));?>
<?php $this->endWidget();?>

<?php
Yii::app()->clientScript->registerScript('scriptId', "
	var count = 0;
	var step  = 10;
	var speed = 500;
	function progress() {
		$('#amount').text(count+'%');
		$('#progress').progressbar('option', 'value', count);
		if(count < 100) {
			count = count+step;
			setTimeout(progress, speed);
		}
	}
	progress();
", CClientScript::POS_LOAD);
?>

<h2><?php echo 'Progressbar';?></h2>

<?php $this->widget('zii.widgets.jui.CJuiProgressBar', array(
	'id'=>'progress',
	'value'=>0,
	'htmlOptions'=>array(
				'style'=>'width:200px; height:20px; float:left;'
				),
			));
?>

<div id="amount" style="margin-left:210px; padding:3px;"></div>