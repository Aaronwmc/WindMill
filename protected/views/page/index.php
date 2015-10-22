<?php /* $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'effectivepolicy-grid',
            'dataProvider'=>$dataProvider,
            'emptyText'=>'没有找到数据.',
            'nullDisplay'=>'-',
            'columns'=>array(
               
                array(
                    'name'=>'用户名',
                    'value'=>'$data["username"]',
                    'htmlOptions'=>array('style'=>'width:35px;')
                ),
                                array(
                    'name'=>'密码',
                    'value'=>'$data["password"]',
                    'htmlOptions'=>array('style'=>'width:55px;')
                ),
            ),
        ));
         */?>
<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	  )); 
?>