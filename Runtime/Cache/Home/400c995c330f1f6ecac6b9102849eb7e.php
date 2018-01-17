<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>个人博客</title>
<link href="/Public/css/base.css" rel="stylesheet">
<link href="/Public/css/index.css" rel="stylesheet">
    <script src="/Public/js/modernizr.js"></script>
    <link rel="stylesheet" href="/Public/css/lrtk.css" />
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/jquery.imgbox.js"></script>
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="index.html"><span>首页</span><span class="en">Protal</span></a><a href="about.html"><span>关于我</span><span class="en">About</span></a><a href="newlist.html"><span>日志</span><span class="en">Life</span></a><a href="moodlist.html"><span>说说</span><span class="en">Doing</span></a><a href="share.html"><span>技术分享</span><span class="en">Share</span></a><a href="knowledge.html"><span>学无止境</span><span class="en">Learn</span></a><a href="book.html"><span>留言版</span><span class="en">Gustbook</span></a></nav>
  </nav>
</header>
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>关山难越,谁悲失路之人。</p>
      <p>萍水相逢,尽是他乡之客。</p>
      <p>宇宙中心,关山大道。</p>
    </ul>
    <div class="avatar"><a href="#"><span>杨钰杰</span></a> </div>
  </section>
</div>
<div class="template">
  <div class="box">
    <h3>
        <a href="#"><p><span>个人相册</span></p></a>
    </h3>
    <ul class="photo">
      <li><a  title="宇宙中心，关山大道" href="/Public/images/guanshan.jpg"><img alt="" src="/Public/images/guanshan.jpg" /></a><span>宇宙中心，关山大道</span></li>
      <li><a  title="学校后面的海滩" href="/Public/images/xuexiao.jpg"><img alt="" src="/Public/images/xuexiao.jpg" /></a><span>学校后面的海滩</span></li>
      <li><a  title="环绕家乡的骑行" href="/Public/images/jiaxiang.jpg"><img alt="" src="/Public/images/jiaxiang.jpg" /></a><span>环绕家乡的骑行</span></li>
      <li><a  title="生命中很重要的她" href="/Public/images/she.jpg"><img alt="" src="/Public/images/she.jpg" /></a><span>生命中很重要的她</span></li>
      <li><a  title="生命中很重要的他们" href="/Public/images/they.jpg"><img alt="" src="/Public/images/they.jpg" /></a><span>生命中很重要的他们</span></li>
      <li><a  title="不会是离别" href="/Public/images/way.jpg"><img alt="" src="/Public/images/way.jpg" /></a><span>不会是离别</span></li>
    </ul>
  </div>
</div>
<article>
  <h2 class="title_tj">
    <p>楼市<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a  href="<?php echo ($vo); ?>" target="_blank"><h3><?php echo ($key); ?></h3></a><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <aside class="right">
    <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
    <div class="news">
    <h3>
      <p>天气<span>预报</span></p>
    </h3>
    <ul class="rank">
      <?php if(is_array($wea)): $i = 0; $__LIST__ = $wea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="https://www.tianqi.com/wuhan/" target="_blank"><?php echo ($key); ?>: <?php echo ($vo); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
        <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
    </ul>
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul> 
    </div>  
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
        <a class="bds_tsina"></a>
        <a class="bds_qzone"></a>
        <a class="bds_tqq"></a>
        <a class="bds_renren"></a>
        <span class="bds_more"></span>
        <a class="shareCount"></a>
    </div>
    <!-- Baidu Button END -->   
    <a href="/" class="weixin"> </a></aside>
</article>
<footer>
  <p>Design by Yujie <a href="http://www.miitbeian.gov.cn/" target="_blank">鄂B1</a> <a href="/">网站统计</a></p>
</footer>
<script src="/Public/js/silder.js"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script>
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
    $(document).ready(function(){
        $(".photo").find('a').imgbox();
    });
</script>
</body>
</html>