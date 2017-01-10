<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($title); ?></title>

    <link href="/app/Public/Dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="/app/Public/Js/jquery-2.1.4.min.js"></script>
    <script src="/app/Public/Dist/Js/bootstrap.min.js"></script>
    <script>
      $(function(){
        $('a:contains("删除")').click(function(){
          var $_this = $(this);
          $.get($_this.attr('href'),function(data){
            if(data){
              $_this.parent().parent().remove();
            }else{
              alert('删除失败');
            }
          })
          return false;
        })
       $('li:eq(1)').click(function(){
          $(this).attr('class','active');
          $('li:first').attr({'class':''});
          $('#row1').attr({'display':'none'});
       })
       $('li:eq(0)').click(function(){
          $(this).attr('class','active');
          $('li:eq(1)').attr('class','');
       })
      })
      
    </script>
  </head>
  <body>
    <div class = 'container'>
        <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo ($title); ?></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">数据</a></li>
          <li ><a href="#">添加用户</a></li>
        </ul>
      </div>
  </nav>
      <div class=row id="row1">
        <div class="col-sm-3">
          <p>想对你说的话真的还有很多</p>
          <p>但是我什么话都说不出来</p>
        </div>
        <div class="col-sm-9">
          <table class="table table-condensed">
            <tr>
              <th>编号</th>
              <th>姓名</th>
              <th>年龄</th>
              <th>性别</th>
              <th>班期</th>
              <th>操作</th>
            </tr>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["age"]); ?></td>
            <td><?php if( $vo["sex"] != 1 ): ?>男<?php else: ?> 女<?php endif; ?></td>
            <td><?php echo ($vo["grade"]); ?></td>
            <td><a href = "<?php echo U('del',array(id=>$vo['id']));?>">删除</a>||<a href = "<?php echo U('edit',array(id=>$vo['id']));?>">修改</a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <tr><td colspan=6><?php echo ($page); ?></td></tr>
          </table>
        </div>
      </div>
      <center>
       <div class="row" id="row2" style="display:none;">
        <div class="col-md-12">
        <form action="<?php echo U('add');?>" method = "post">
           <table class="table-striped">
            <tr>
              <td>姓名：</td>
              <td><input type="text" name="name"></td>
            </tr>
             <tr>
              <td>年龄：</td>
              <td><input type="text" name="age"></td>
            </tr>
             <tr>
              <td>性别：</td>
              <td><input type="radio" name="sex" value=1 checked>男<input type="radio" name="sex" value=0>女</td>
            </tr>
             <tr>
              <td>班期：</td>
              <td><input type="text" name="grade"></td>
            </tr>
            <tr><td><input type="submit" value="添加"></td></tr>
          </table>
        </form>
         
        </div>
      </div>
      </center>
     
    </div>
    <script>
      var list = document.getElementsByTagName('li');
      var row1 = document.getElementById('row1');
      var row2 = document.getElementById('row2');
      
      list[1].onclick = function(){
        row1.style.display = 'none';
        row2.style.display = 'block';
      }
      list[0].onclick = function(){
        row1.style.display = 'block';
        row2.style.display = 'none';
      }
    </script>

    
  </body>
</html>