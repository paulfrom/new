<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    window.UEDITOR_HOME_URL = "__PUBLIC__/Ueditor/";    //UEDITOR_HOME_URL、config、all这三个顺序不能改变(绝对路径)
    </script>
    <script type="text/javascript" src="__PUBLIC__/Ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Ueditor/ueditor.all.min.js"></script> 
    <script type="text/javascript">
         var editor;
       function BeForeForm(formName){
    	   
    	   if(editor.hasContents()){ 
    		   editor.sync(); 
    		   alert("aa");
    		   $("form").submit(function(){
    			   alert("aa");
    			 });
    	   }
    	  
       }
</script>
</head>
<body>
 <form action="show.php" method="post" target="_blank" id="form">
        <textarea name="content" id="myEditor">这里写你的初始化内容</textarea>
         <script type="text/javascript">
         var options = {
                 initialFrameWidth:1000,        //初化宽度
                 initialFrameHeight:300,        //初化高度
                 focus:false,                        //初始化时，是否让编辑器获得焦点true或false
                 maximumWords:1000,        //允许的最大字符数
             };
            var editor = new UE.ui.Editor(options);
             editor.render("myEditor");
    </script>
        <input type="button" value="保存"  onclick="BeForeForm('MyForm');"> 
    </form>
   
</body>
</html>