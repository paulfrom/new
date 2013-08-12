<?php if (!defined('THINK_PATH')) exit();?>    <html>
    <title>Ueditor文本编辑器</title>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    window.UEDITOR_HOME_URL = "__PUBLIC__/Ueditor/";    //UEDITOR_HOME_URL、config、all这三个顺序不能改变(绝对路径)
    </script>
    <script type="text/javascript" src="__PUBLIC__/Ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__PUBLIC__/Ueditor/ueditor.all.min.js"></script>   
    
    <script type="text/javascript">
				
    $(document).ready(function(){
    	  $("button").click(function(){
    		     if(editor.hasContents()){ //此处以非空为例
    			    
    		        editor.sync();       //同步内容
    		        $("form[name='"+formName+"']").submit()(function(){
    		        	alert("qqqqq");
    		        });   //提交表单判断，此方法是自己写的，不予给出，抱歉！只给提交方法！
    		    }
    	       
    	  });
    	});		
   				
</script>
    </head>    <body>
    <form name='MyForm' id='MyForm' method='POST' action="">
    <script type="text/plain" id="content" name="content"></script>
    <script type="text/javascript">
    $(function(){
        var editor;
            //具体参数配置在  editor_config.js  中
        var options = {
            initialFrameWidth:1000,        //初化宽度
            initialFrameHeight:300,        //初化高度
            focus:false,                        //初始化时，是否让编辑器获得焦点true或false
            maximumWords:1000,        //允许的最大字符数
        };
        editor = new UE.ui.Editor(options);
        editor.render("content");
        editor.ready(function(){
            editor.setContent('<?php echo ($vo["content"]); ?>');     //加载数据库Action.class.PHP传过来的值
        });
    });    
    </script> 
    <button>切换</button>
    </form>
    </body>
    </html>