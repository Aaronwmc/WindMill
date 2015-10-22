<?php echo $quote[0]?>&rdquo;, <?php echo $quote[1]?>&rdquo;,<?php echo $hehe;?>
        <?php echo CHtml::ajaxLink('下一个', array('getQuote'),
        array('update' => '#quote-of-the-day'),array('hehe'=>'hhhh'))?>