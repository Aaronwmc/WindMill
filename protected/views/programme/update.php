<?php
/* @var $this ProgrammeController */
/* @var $model Programme */

$this->breadcrumbs=array(
	'Programmes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programme', 'url'=>array('index')),
	array('label'=>'Create Programme', 'url'=>array('create')),
	array('label'=>'View Programme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Programme', 'url'=>array('admin')),
);
?>

<h1>Update Programme <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>