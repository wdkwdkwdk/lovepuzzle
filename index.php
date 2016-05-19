
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Love puzzle</title>

    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
   <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .puzzly{
      padding: 20%
    }
    .red{
      color: red;
    }
    </style>
 

  </head>
<?php
$puzzle = $_GET['puzzle'];
$answer = $_GET['answer'];
if(!$puzzle)
{
  $words = "<span class=\"red\">很高兴遇到你</span><br>而遇到你<br>是最美好的事情<br>:)<br>";
  $tips = "书";
  $newpuzzle = '2';
}
elseif($puzzle=='2'&&$answer=='529')
{
  echo "<script>alert('很聪明！继续下一关')</script>";
  $words = "我们成为朋友，<br>一起喝酒，<br>在我们在一起后也是如此，<br>不同的是，<br>我们在家里，<br><span class=\"red\">冰爽的夏天，沙冰，酒与可乐</span><br>都在这里";
  $tips = "客厅某处";
  $newpuzzle = '3';
}
elseif($puzzle=='3'&&$answer=='0833')
{
  echo "<script>alert('很聪明！继续下一关')</script>";
  $words = "卫道士隐匿在喧嚣之中<br>生活已经寂静<br>间或发出一两声低吼<br>有的人不曾来过<br>好像他们从未离去那样<br>东边是斜阳<br>西边是日落";
  $tips = "这是一首某种格式的诗";
  $newpuzzle = '4';
}
elseif($puzzle=='4'&&$answer=='520')
{
  echo "<script>alert('很聪明！继续下一关')</script>";
  $words = "黑夜中看见你的脸，<br>看得我心猿意马，<br>你枕在这里，<br>我枕在这里，<br>这里有梦，有爱，有生命的大和谐";
  $tips = "这么简单就不用提示了吧，我知道你很聪明";
  $newpuzzle = '5';


}
elseif($puzzle=='5'&&$answer=='durex')
{
  echo "<script>alert('通关完成！我爱你')</script>";
  $words = "<div class=\"alert alert-success\" role=\"alert\">这是为你准备的一个域名,把它在地址栏打开：</div><br><br><h1>dk.love1m.xyz</h1>";
  $tips = "";
  $newpuzzle = '6';
}
else{
  echo "<script>alert('密码错误～再猜猜，宝贝')</script>";
  //echo "<script>window.location.href=index.php;</script>";
  echo "<script>history.go(-1);</script>";
}



?>
  <body>

    <div class="container">
    	  <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
   
          </ul>
        </nav>
        <h3 class="text-muted">Love Puzzle        <?php
 $number = $newpuzzle - 1;
    echo "<span class=\"label label-info\">第".$number."关</span><br>";
        ?></h3>你会猜到答案的，王一茗
      </div>
      <br>
    <div class="puzzle">
  <?php
  if($newpuzzle==6)
  {
    echo "<center>".$words."<br><br><br>如果网速不好那就很遗憾了～</center>";
  }
  else
  {
    echo $words;
  ?>
<br><br><br><br><hr>
<form action="index.php">
  请输入答案：
  <input name="answer" />
  <input name="puzzle" type="hidden" value="<?php echo $newpuzzle; ?>" />
<button class="btn btn-success" type="submit">验证答案</button>

</form>
</div>
<br><br>
通关提示：<br><br>
<div id="tips">
<a href="#" onclick="showtips()"><button class="btn btn-default" >点击查看</button></a>
</div>
<script type="text/javascript">
function showtips(){
  document.getElementById('tips').innerHTML = '<?php echo $tips; ?>';
}
</script>
<?php } ?>
<br><br>

      <footer class="footer">
        <p>&copy; DK</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
</html>


