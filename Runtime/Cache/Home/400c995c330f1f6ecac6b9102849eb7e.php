<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>���˲���</title>
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
  <nav class="topnav" id="topnav"><a href="index.html"><span>��ҳ</span><span class="en">Protal</span></a><a href="about.html"><span>������</span><span class="en">About</span></a><a href="newlist.html"><span>��־</span><span class="en">Life</span></a><a href="moodlist.html"><span>˵˵</span><span class="en">Doing</span></a><a href="share.html"><span>��������</span><span class="en">Share</span></a><a href="knowledge.html"><span>ѧ��ֹ��</span><span class="en">Learn</span></a><a href="book.html"><span>���԰�</span><span class="en">Gustbook</span></a></nav>
  </nav>
</header>
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>��ɽ��Խ,˭��ʧ·֮�ˡ�</p>
      <p>Ƽˮ���,��������֮�͡�</p>
      <p>��������,��ɽ�����</p>
    </ul>
    <div class="avatar"><a href="#"><span>���ڽ�</span></a> </div>
  </section>
</div>
<div class="template">
  <div class="box">
    <h3>
        <a href="#"><p><span>�������</span></p></a>
    </h3>
    <ul class="photo">
      <li><a  title="�������ģ���ɽ���" href="/Public/images/guanshan.jpg"><img alt="" src="/Public/images/guanshan.jpg" /></a><span>�������ģ���ɽ���</span></li>
      <li><a  title="ѧУ����ĺ�̲" href="/Public/images/xuexiao.jpg"><img alt="" src="/Public/images/xuexiao.jpg" /></a><span>ѧУ����ĺ�̲</span></li>
      <li><a  title="���Ƽ��������" href="/Public/images/jiaxiang.jpg"><img alt="" src="/Public/images/jiaxiang.jpg" /></a><span>���Ƽ��������</span></li>
      <li><a  title="�����к���Ҫ����" href="/Public/images/she.jpg"><img alt="" src="/Public/images/she.jpg" /></a><span>�����к���Ҫ����</span></li>
      <li><a  title="�����к���Ҫ������" href="/Public/images/they.jpg"><img alt="" src="/Public/images/they.jpg" /></a><span>�����к���Ҫ������</span></li>
      <li><a  title="���������" href="/Public/images/way.jpg"><img alt="" src="/Public/images/way.jpg" /></a><span>���������</span></li>
    </ul>
  </div>
</div>
<article>
  <h2 class="title_tj">
    <p>¥��<span>�Ƽ�</span></p>
  </h2>
  <div class="bloglist left">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a  href="<?php echo ($vo); ?>" target="_blank"><h3><?php echo ($key); ?></h3></a><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <aside class="right">
    <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
    <div class="news">
    <h3>
      <p>����<span>Ԥ��</span></p>
    </h3>
    <ul class="rank">
      <?php if(is_array($wea)): $i = 0; $__LIST__ = $wea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="https://www.tianqi.com/wuhan/" target="_blank"><?php echo ($key); ?>: <?php echo ($vo); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
        <h3 class="ph">
      <p>���<span>����</span></p>
    </h3>
    <ul class="paih">
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
      <li><a href="#" title="" target="_blank"></a></li>
    </ul>
    <h3 class="links">
      <p>����<span>����</span></p>
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
  <p>Design by Yujie <a href="http://www.miitbeian.gov.cn/" target="_blank">��B1</a> <a href="/">��վͳ��</a></p>
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