<?php if (!defined('THINK_PATH')) exit();?><table id="right"></table>
<!--工具栏 -->
    
<div id="tool_right">    
<table>
<tr>
<td>
	<a href="#" class="easyui-linkbutton"  onclick='show_right_add()' data-options="iconCls:'icon-standard-folder-page',plain:true">添加</a> 
    <a href="#" class="easyui-linkbutton"  onclick='dele_right()' data-options="iconCls:'icon-standard-page-white-delete',plain:true">删除</a> 	
    <a href="#" class="easyui-linkbutton"  onclick='show_right_edit()' data-options="iconCls:'icon-standard-application-edit',plain:true">编辑</a> 		
    
 </td>
 <td>
     <div class="datagrid-btn-separator"></div>
 </td>
				  

 <td>

	  <a href="#" class="easyui-linkbutton"  onclick="view()" data-options="iconCls:'icon-standard-arrow-refresh',plain:true">查看</a> 

   </td>
   	 <td>
     <div class="datagrid-btn-separator"></div>
 </td>
   <td>

	  <a href="#" class="easyui-linkbutton"  onclick="reload()" data-options="iconCls:'icon-standard-arrow-refresh',plain:true">刷新</a> 

   </td>
   		 <td>
     <div class="datagrid-btn-separator"></div>
 </td>
   <td>
     	<div style="float:right;">        
               <input  id='searchbox' class="easyui-searchbox" data-options="" style="width:400px;"></input>
			   </div>
			  
			      
			   <div id="mm" style="width:400px">
			    <div data-options="name:'miaoshu',iconCls:'icon-standard-table-edit',selected:true">问题描述</div>
	<div data-options="name:'creattime',iconCls:'icon-standard-date-magnify'" >日期</div>
	<div data-options="name:'cx',iconCls:'icon-standard-table-multiple'" >车型</div>
   
	<div data-options="name:'laiyuan',iconCls:'icon-standard-tag-blue'" >来源</div>
	<div data-options="name:'yuanyin',iconCls:'icon-standard-sum'">原因分析</div>
	<div data-options="name:'zhenggai',iconCls:'icon-standard-table-edit'">问题整改</div>

</div>
	   </td>
</tr>
</table>
</div>


<div id="view_right" class="easyui-dialog" style="width:306px;height:179px;padding:10px;overflow:hidden;"     
        title="&nbsp;&nbsp;查看记录"  data-options="iconCls:'icon-standard-folder-page',buttons:'#dlg_right_view',closed:true,resizable:true,modal:true,closable:true">  
            
    <form id="view_right_form"  method="post" >
    
    <table>
			<tr>
				<td>
					<label>功能：
						<input id="title" name="title" style="width: 200px;" disabled="disabled" />
					</label>
				</td>

			</tr>
			<tr>
				<td>
					<label>链接：
						<input id="name" name="name" style="width: 200px;" disabled="disabled"/>
					</label>
				</td>

			</tr>
			<tr>
				<td>
					<label>状态：
					<input id="status" name="status" style="width: 200px;" disabled="disabled"/>
					</label>
				</td>

			</tr>
</table>



	</form>  

</div> 
<div id="dlg_right_view">    
  
    <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-ok'" onclick="javascript:$('#view_right').dialog('close')">确认</a>    
</div>
<div id="edit_right" class="easyui-dialog" style="width:275px;height:167px;padding:10px;overflow:hidden;"     
        title="&nbsp;&nbsp;编辑记录"  data-options="iconCls:'icon-standard-folder-page',buttons:'#dlg_edit_right',closed:true,resizable:true,modal:true,closable:true">  
            

    <form id="edit_right_form"  method="post" >    
        <table  width="100%" cellspacing="0" >
    <tr>
				
				<td>
					<label>ID号：
						<input id="id" name="id" style="width: 200px;" />
					</label>
				</td>

			</tr>
			<tr>
				
				<td>
					<label>功能：
						<input id="title" name="title" style="width: 200px;" />
					</label>
				</td>

			</tr>
			<tr>
				<td>
					<label>链接：
						<input id="name" name="name" style="width: 200px;"/>
					</label>
				</td>

			</tr>
			<tr>
				<td>
					<label>状态：
					<select id="status" class="easyui-combobox" name="status"  data-options="editable:false,panelHeight:'auto'" style="width:80px;"> 
	
    <option value="1" select="true">开启</option> 	
    <option value="0">关闭</option>	
     

</select> 
					</label>
				</td>

			</tr>
        </table>   
    </form>  

</div> 
<div id="dlg_edit_right">    
    <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-ok'" onclick="edit_right()">确认</a>    
    <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-cancel'" onclick="javascript:$('#edit_right').dialog('close')">取消</a>    
</div>


<div id="add_right" class="easyui-dialog"
	style="width: 277px; height:225px; padding: 10px; overflow: hidden;"
	title="&nbsp;&nbsp;添加用户"
	data-options="iconCls:'icon-standard-folder-page',buttons:'#dlg_right_add',closed:true,resizable:true,modal:false,closable:true">


	<form id="add_right_form" method="post" >
		<table width="100%" cellspacing="0" >
		
<tr>
				
				<td>
					<label>功能：
						<input id="title" name="title" style="width: 200px;" />
					</label>
				</td>

			</tr>
			<tr>
				<td>
					<label>链接：
						<input id="name" name="name" style="width: 200px;"/>
					</label>
				</td>

			</tr>
			<tr>
				<td>
					<label>状态：
					<select id="status" class="easyui-combobox" name="status"  data-options="editable:false,panelHeight:'auto'" style="width:80px;"> 
	
    <option value="1" select="true">开启</option> 	
    <option value="0">关闭</option>	
     

</select> 

					</label>
					
						</td>

			</tr>
				<tr>
				<td>
					<label>规则：
						<input id="condition" name="condition" style="width: 200px;"/>
					</label>
				</td>

			</tr>
				<tr>
				<td>
					<label>类型：
						<input id="type" name="type" style="width: 200px;"/>
					</label>
				</td>

			</tr>
		</table>
	
	</form>
	

	
 

	


	<div class="result">
          <?php if(!empty($photos)): if(is_array($photos)): foreach($photos as $key=>$vo): echo ($key); ?>|<?php echo ($vo); endforeach; endif; endif; ?>
    </div>
	<br>


</div>

<div id="dlg_right_add">
	<a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-ok'"
		onclick="add_right()">确认</a>
	<a href="#" class="easyui-linkbutton"
		data-options="iconCls:'icon-cancel'"
		onclick="javascript:$('#add_right').dialog('close')">取消</a>
</div>
     <!--工具栏 -->
<script type="text/javascript"  charset="utf-8">
$('#right').datagrid({   
 url:'Admin/user/rightdata',
	toolbar:'#tool_right',
pagination:true,
	fit:true,
	width: function () { return document.body.clientWidth * 0.9 },
	nowrap: false,
collapsible: true,
fitColumns:true,
autoRowHeight:true,
striped:true,//交替行
singleSelect:true,//只允许选择一行
rownumbers: true,
border:false,
sortName:'id',
sortOrder: 'desc',//倒序排列
remoteSort: false,
pageSize: 50,
pageList: [10,15,20,40,50,100,200],
    columns:[[
	{ field: 'id', title:'ID号',width:50},  
	    {field:'name',title:'链接',width:120},    	
        {field:'title',title:'功能',width:100},
        {field:'status',title:'状态',width:50,align:'left'}
       
    ]]
}); 
$('#searchbox').searchbox({  
    searcher : function(value,name){
	 $('#dg').datagrid('load',{
         name:value		
    });
	
switch (name)
{
case 'cx':
 $('#dg').datagrid('load',{
         cx:value
    });
  break;
 case 'miaoshu': 
 $('#dg').datagrid('load',{
         miaoshu:value
    });
  break;
   case 'laiyuan': 
 $('#dg').datagrid('load',{
         laiyuan:value
    });
  break;
     case 'yuanyin': 
 $('#dg').datagrid('load',{
         yuanyin:value
    });
  break;
       case 'zhenggai': 
 $('#dg').datagrid('load',{
         zhenggai:value
    });
  break;


}
	},  
    menu:'#mm',  
    prompt:'请输入搜索内容'  
});	
//对Date的扩展，将 Date 转化为指定格式的String 
//月(M)、日(d)、小时(h)、分(m)、秒(s)、季度(q) 可以用 1-2 个占位符， 
//年(y)可以用 1-4 个占位符，毫秒(S)只能用 1 个占位符(是 1-3 位的数字) 
//例子： 
//(new Date()).Format("yyyy-MM-dd hh:mm:ss.S") ==> 2006-07-02 08:09:04.423 
//(new Date()).Format("yyyy-M-d h:m:s.S")      ==> 2006-7-2 8:9:4.18 
Date.prototype.Format = function(fmt) 
{ //author: meizz 
var o = { 
 "M+" : this.getMonth()+1,                 //月份 
 "d+" : this.getDate(),                    //日 
 "h+" : this.getHours(),                   //小时 
 "m+" : this.getMinutes(),                 //分 
 "s+" : this.getSeconds(),                 //秒 
 "q+" : Math.floor((this.getMonth()+3)/3), //季度 
 "S"  : this.getMilliseconds()             //毫秒 
}; 
if(/(y+)/.test(fmt)) 
 fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length)); 
for(var k in o) 
 if(new RegExp("("+ k +")").test(fmt)) 
fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length))); 
return fmt; 
}
//今天、昨天 白班 夜班
//打开添加窗口

function showupload(){
	$('#showupload').window('open');  // open a window 	
}

function show_right_add(){
/* 	var myDate = new Date();
	var date;
	date=new Date(new Date()).Format("yyyy-MM-dd"); */
	
	$('#add_right').window('open');  // open a window 
	$('#add_right_form').form('load',{
		name:'',
		title:'',
		type:'1',
		status:'1',
		condition:''
	});


}
function reload(){
$('#right').datagrid('reload');

}
function add_right(){

	$('#add_right_form').form('submit',{
		
		url:'/qis/index.php/Admin/User/auth',

		success:function(data){
			$("#dg").datagrid("reload");
			
			$.messager.alert('添加项目', data,'info');
			$('#add').dialog('close')
			
		}
	});
}
//删除		
function dele_right(){
 var row = $('#right').datagrid("getSelected");
   if (row) {
        $.messager.confirm('确认', '您确定要删除此权限吗?', function (r) {
            if (r) {
                $.post('/qis/index.php/Admin/User/deleteRule', { id: row.id}, function (data) {
                    if (data) {
                        $('#right').datagrid('reload');    // reload the user data  
                    } else {
                        $.messager.show();
                     
                    }
                }, 'text');
            }
        });
    }
	  else
	    {
	   	 $.messager.alert("请选择", "请选择要删除的项目！","info");
	        }
 
  }


function show_right_edit(){


 var row = $('#right').datagrid("getSelected");

 
	 
    if (row) {
	
        $("#edit_right").dialog("open").dialog('setTitle', '编辑权限');
	
        $("#edit_right_form").form("load", row);
        
    }
    else
    {
   	 $.messager.alert("请选择要编辑的行", "请选择要编辑的行！","info");
        }
	
   
  

	
	}
	//查看项目，范建鹏2015年1月19日
	function view(){


 var row = $('#right').datagrid("getSelected");

    if (row) {
	
        $("#view_right").dialog("open").dialog('setTitle', '查看权限');
	
        $("#view_right_form").form("load", row);
        
    }
    else
    {
   	 $.messager.alert("请选择要查看的记录", "请选择要查看的记录！","info");
        }
	
   
 

	
	}	
function edit_right(){
        
	
			$('#edit_right_form').form('submit',{
				
				url:'index.php?m=Admin&c=User&a=modifyRule',

				success:function(data){
					$("#right").datagrid("reload");
					$.messager.alert('编辑项目', data,'info');
					$('#edit_right').dialog('close')
					
				}
			});
		}
function page(){
return $('#dg').datagrid('options').pageNumber;
}
function pagesize(){
return $('#dg').datagrid('options').pagesize;
}

</script>