<script type="text/javascript">
function callService()  
{  /* 
    //检查数据的完整性  
    if(0>getServiceInfo(addr,port,service))  
    {  
        return;  
    }   */
      
    var Addr = document.getElementById('addr').value;  
    var Port = document.getElementById('port').value;  
    var Service = document.getElementById('service').value;     
      
      
    var param = formatTableData(0,"dataset");  
      
   
      
        $.ajax({  
                url:"index.php/ajaxTest/Ajax",  
                type : 'POST',  
                data : {curAddr:Addr,  
                    curPort:Port,  
                    curService:Service,  
                    curParam:param},  
                dataType : 'text',  
                contentType : 'application/x-www-form-urlencoded',  
                async : false,  
                success : function(mydata) {  
                        alert("success");  
                        alert(mydata);  
                         var show_data = "<h1>result:" + mydata + "</h1>";  
                        $("#result").html(show_data);  
                },  
                error : function() {  
                        alert("calc failed");  
                }  
        });  
}  
</script>

<div>
	<input type="text" id="addr"/>
	<input type="text" id="port" />
	<input type="text" id="service" />
	<button id="submit" onClick="callService()">提交</button>
</div>