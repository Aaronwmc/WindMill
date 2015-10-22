<script src="js/jquery.min.js"></script>

<li class="mb5">
    <label class="sectionLabel-A1">test*：
        <a href="javascript:void(0);" onclick="test()" style="color: #3B5999;font-weight: normal">添加视角</a>
    </label>
    <div id="addAngles">
        Hello this is angles part
    </div>
</li>

<script type="text/javascript">
function test()
{
	alert('hello');
	//$("#addAngles").text("yyuuii");
    $.ajax({
             type: "POST",
             url: "index.php?r=ajax1_1/addAngle",
             data:{} ,
             dataType: "html",    
             success: function(html){
                 $("#addAngles").append(html);
           }
     }) ; 
}
</script>   