<?php
/* @var $this ProgrammeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Programmes',
);

$this->menu=array(
	array('label'=>'Create Programme', 'url'=>array('create')),
	array('label'=>'Manage Programme', 'url'=>array('admin')),
);
?>

<h1>Programmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
