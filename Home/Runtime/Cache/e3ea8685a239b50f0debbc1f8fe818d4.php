<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
	<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script>
	<script type="text/javascript">
		uaredirect("http://siteapp.baidu.com/webapp/www.9aipay.com","http://www.9aipay.com");
	</script>
	<meta property="qc:admins" content="140253276661110116375" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="__CSS__/style.css" type="text/css" media="screen" />
	<script type='text/javascript' src='__JS__/jquery-1.4.2.js'></script>
	<script type='text/javascript' src='__JS__/jquery-ui-1.8.5.custom.min.js'></script>
	<script type='text/javascript' src='__JS__/jquery.common.js'></script>
	<script type='text/javascript' src='__JS__/jquery.scrolltop.js'></script>
	<!--<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>-->
	<link id="favicon" href="/favicon.ico" rel="icon" type="image/x-icon" />
	<script type='text/javascript'>
		var _THEMES_ = "__THEMES__";
	</script>    
    <!-- Title -->
	<title><?php echo ($colname); echo (C("CFG_WEBNAME")); ?></title>
    <meta name="description" content="<?php echo (C("CFG_DESCRIPTION")); ?>" />
	<meta name="keywords" content="<?php echo (C("CFG_KEYWORDS")); ?>" />
    <link rel="canonical" href="/" />
<!-- END head -->
</head>

<body>
<div class="header">
<div class="topTB">
    <div class="topTBInner">
        <div class="l"><?php echo (C("CFG_SUBTITLE")); ?></div>
        <div class="r J_move_menu">
        	<ul>
	        	<li><a href="<?php echo U('home/Index/index');?>">首页</a></li>
	        	<?php if(is_array($collist)): $i = 0; $__LIST__ = $collist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($data["url"]); ?>"><?php echo ($data["colname"]); ?></a><?php echo ($data["submenu"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
				<li>
					<a href="javascript:void(0);">探索</a>
					<ul class='bbsNav' >
						<div class="bbsLinks J_sub_menu">
							<li><a href="http://www.baidu.com/" target="_blank">百度</a></li>
							<li><a href="http://www.google.com/" target="_blank">谷歌</a></li>
						</div>
					</ul>
				</li>
				<li><a href="<?php echo U('home/Feedback/index');?>">给我留言</a></li>
	            <li><a href="javascript:alert('请按Ctrl+D键添加到收藏夹');">收藏本站</a></li>
	        </ul>
        </div>
    </div>
</div>
<div class="headerInner" style="margin-top:35px;*padding-top:35px;_margin-top:0px">
    <div class="logo" id="logo">
        <a class="logo_img" href="<?php echo U('home/Index/index');?>"></a>
        <a class="logo_text" href="<?php echo U('home/Index/index');?>">所有人的成功都不是偶然的。</a>
        <div id="J_signIn" style="width: 185px;float: right;position: absolute;top: 40px;right: -10px">
        </div>
    </div>

    <ul class="nav">
        <li>
            <a href="<?php echo U('home/Index/index');?>">首页</a>
        </li>
        <?php if(is_array($collist)): $i = 0; $__LIST__ = array_slice($collist,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($data["url"]); ?>" ><?php echo ($data["colname"]); ?></a><?php echo ($data["submenu"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        <li>
            <a href="#">更多</a>
            <div class="bbsNav">
                <div class="bbsLinks">
                    <a href="#" target="_blank">新的模块</a> 
                    <a href="#" target="_blank">最新发布</a>
                </div>
            </div>
        </li>
        <div class="search" id="indexSearch">
        	<form method="post" id="searchform" action="<?php echo U('home/Index/search');?>">
				<input id="indexTxtSearch" name="searchkey" placeholder="请输入搜索内容" type="text">
            	<button type="submit">搜索</button>
			</form>
        </div>
    </ul>
</div>
</div>
<script type="text/javascript" id="bd_soc_login_boot"></script>
<script type="text/javascript">
/*(function(){
    var _URL_ = "http://"+"<?php echo ($_SERVER['SERVER_NAME']); ?>"+"<?php echo U('home/Index/otherAuthLogin');?>";
    var t = new Date().getTime(),
    script = document.getElementById("bd_soc_login_boot"),
    redirect_uri = encodeURIComponent(_URL_),
    domid = "J_signIn",
    src = "http://openapi.baidu.com/social/oauth/2.0/connect/login?redirect_uri=" + redirect_uri + "&domid=" + domid + "&client_type=web&response_type=token&media_types=sinaweibo%2Cqqdenglu%2Cqqweibo%2Crenren%2Cbaidu%2Ckaixin&size=-1&button_type=4&client_id=FVnW3e8pPFTp5q8yTfWaYCSs&view=embedded&t=" + t;
    script.src = src;
})();*/
</script>

<div class="main">
	<div class="content">
		<div class="right">
	<iframe name="alimamaifrm" class="otherLogin" frameborder="0" marginheight="0" marginwidth="0" border="0" scrolling="no" width="300" height="170" src="http://www.taobao.com/go/app/tbk_app/chongzhi_300_170.php?pid=mm_50116018_4414481_14732067&page=chongzhi_300_170.php&size_w=300&size_h=170&stru_phone=1&stru_game=1&stru_travel=1" ></iframe>
	<div style="height:12px">&nbsp;
	</div>
	<div class="recommend box">
		<h4><strong>热点推荐</strong></h4>
		<ul>
			<li>
				<a href="http://s.click.taobao.com/t?e=m%3D2%26s%3DpAhpCy4hmDkcQipKwQzePOeEDrYVVa64K7Vc7tFgwiFRAdhuF14FMa5LaBwvFEicxq3IhSJN6GQVZfx3stPFvBXLW8jB08OOQ7ztMy%2BQ84XGQCv%2FqmUeUYwI4KMrSffqomfkDJRs%2BhU%3D" target="_blank">
					<img src="http://gi2.md.alicdn.com/imgextra/i2/10768041267076417/T1qLO9FhVgXXXXXXXX_!!0-item_pic.jpg_360x360.jpg" style="width: 260px;">
					【送手机壳+贴膜】MIUI/小米 红米手机 移动3G版/联通3G版 正品
				</a>
			</li>	
		</ul>
	</div>
	<div class="editorChoice box tz_tab_widget" id="J_tabs">
		<h4>
			<ul id="tab-items" style="margin-left:20px">
				<li><a href="#J_tabs-1"><span>热门</span></a></li>
				<li><a href="#J_tabs-2"><span>最新</span></a></li>
				<li><a href="#J_tabs-3"><span>评论</span></a></li>
				<li><a href="#J_tabs-4"><span>标签</span></a></li>
			</ul>
		</h4>
		<div class="tabs-inner">
			<div id="J_tabs-1" class="tab-content J_entry_title">
				<ul>
					<?php if(is_array($hotreclist)): $k = 0; $__LIST__ = $hotreclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><li <?php if($k < 4): ?>class="topRank"<?php endif; ?>>
							<em><?php echo ($k); ?></em>
							<a href="<?php echo ($data["arcurl"]); ?>">
								<?php echo (getshort($data["title"],16,'...')); ?>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<li class="more" style="text-align: center;">
						<a href="<?php echo U('home/Index/index');?>">查看全部&gt;&gt;</a>
					</li>
				</ul>
			</div>
			<!-- #J_tabs-1 -->
			<div id="J_tabs-2" class="tab-content J_entry_title">
				<ul>
				<?php if(is_array($lastlist)): $k = 0; $__LIST__ = $lastlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><li <?php if($k < 4): ?>class="topRank"<?php endif; ?>>
						<em><?php echo ($k); ?></em>
						<a href="<?php echo ($data["arcurl"]); ?>" title="<?php echo ($data["title"]); ?>">
							<?php echo (getshort($data["title"],16,'...')); ?>
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-- #J_tabs-2 -->
			<div id="J_tabs-3" class="tab-content star J_entry_title">
				<ul>
				<?php if(is_array($commentlist)): $i = 0; $__LIST__ = $commentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
						<img src="__IMG__/logo_03.jpg" alt="钛备份" width="50" height="50">
			            <a href="<?php echo ($data["url"]); ?>" title="评论文章《<?php echo ($data["title"]); ?>》">
			            	<?php echo ($data["content"]); ?>
			            </a>
			            <p><?php echo ($data["writer"]); ?></p>
			        </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-- #J_tabs-3 -->
			<div id="J_tabs-4" class="J_tab_tags tab-content tab-tags J_fixedBox">
				<ul style="margin-left:0px">
				<?php if(is_array($taglist)): $i = 0; $__LIST__ = $taglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href='<?php echo ($data["tagurl"]); ?>' title='<?php echo ($data["num"]); ?>篇文章' style='font-size: 12px;'>
						<?php echo ($data["tagname"]); ?>
					</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-- #J_tabs-4 -->
		</div>
	</div>

	<div class="recommend box article J_entry_title">
		<h4><strong>文章分类</strong></h4>
		<ul>
			<?php if(is_array($categorylist)): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
					<a href='<?php echo ($data["url"]); ?>' title='<?php echo ($data["count"]); ?>篇文章'>
						<?php echo ($data["colname"]); ?>
					</a>
					&nbsp;(<?php echo ($data["count"]); ?>)
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div class="recommend box article J_entry_title">
		<h4><strong>文章归档</strong></h4>
		<ul>
			<?php if(is_array($datelist)): $i = 0; $__LIST__ = $datelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
					<a href='<?php echo ($data["url"]); ?>' title='<?php echo ($data["count"]); ?>篇文章'>
						<?php echo ($data["time"]); ?>
					</a>
					&nbsp;(<?php echo ($data["count"]); ?>)
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

	<div class="editorChoice box J_fixedBox_t">
		<h4>
        	<strong>随机文章</strong>                    
        	<a class="r" href="#">更多&gt;</a>   
        </h4>
		<div class="tabs-inner rand-article">
			<div class="tab-content J_entry_title">
				<ul>
					<?php if(is_array($randlist)): $k = 0; $__LIST__ = $randlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><li <?php if($k < 4): ?>class="topRank"<?php endif; ?>>
							<em><?php echo ($k); ?></em>
							<a href="<?php echo ($data["arcurl"]); ?>" title="<?php echo ($data["title"]); ?>" target="_blank">
								<?php echo (getshort($data["title"],16,'...')); ?>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>					
				</ul>
			</div>
		</div>
	</div>
</div>

		<div class="left box">
			<div class="position">
				<img src="__IMG__/home.png" width='18' height='16' alt='<?php echo (C("CFG_POWERBY")); ?>' />
				&nbsp;<?php echo ($position); ?>
			</div>
			<div id="J_article_box">
				<?php if(is_array($arclist)): $i = 0; $__LIST__ = $arclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><ul class="news">  
	<li>
		<h2 class="article-title J_entry_title">
			<a href="<?php echo ($data["arcurl"]); ?>" title="<?php echo ($data["title"]); ?>"><?php echo ($data["title"]); ?></a>
		</h2>
		<span>
			<em class="views"><?php echo ($data["click"]); ?>次点击</em> 
			<a href="<?php echo ($data["arcurl"]); ?>" class="replies">
				<?php echo ($data["commentnum"]); ?>条评论
			</a>
			<a href="#" title="分享到新浪微博" class="share">分享</a>
		</span>
		<a href="<?php echo ($data["colurl"]); ?>" title="查看 <?php echo ($data["colname"]); ?> 中的全部文章"><?php echo ($data["colname"]); ?></a>  
		|  <?php echo ($data["createtime"]); ?>
		<p class="news-lead J_fancybox">
    		<?php if($data["pic"] != ''): ?><a title="<?php echo ($data["title"]); ?>" href="<?php echo ($data["arcurl"]); ?>">
					<img width="590" src="<?php echo ($data["pic"]); ?>" alt="<?php echo ($data["title"]); ?>" />
				</a><?php endif; ?>
		</p>
		<p><?php echo ($data["description"]); ?>...</p>
		<p class="J_entry_title" style="margin-top:0px">
			<a href="<?php echo ($data["arcurl"]); ?>">阅读全文》</a>
		</p>
	</li>
</ul><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>

			<div id="J_article_con"></div>
		</div>
	</div>
</div>
<script language="JavaScript">
$(document).ready(function(){
	var i = 0;
	$(window).scroll(function(){
		if ($(document).height()-$(document).scrollTop()-$(window).height()<150){
			if($('#J_article_con').text() == ''){
				loadArticle('__URL__/getArticle','<?php echo ($flag); ?>',++i);
			}
		}
	});
});

</script>
<!-- BEGIN #footer -->
<div class="footer">
    <div class="footerInner">
        <div class="links">
            <h5>友情链接</h5>            
            <a href="<?php echo U('home/Index/index');?>" target="_blank">首页</a> 
            <?php if(is_array($linklist)): $i = 0; $__LIST__ = $linklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><b>|</b> <a href="<?php echo ($data["url"]); ?>" target="_blank"> <?php echo ($data["linkname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="icp">Copyright 2013  
        <a href="<?php echo U('home/Index/index');?>"><?php echo (C("CFG_POWERBY")); ?></a> All rights reserved.&nbsp;
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000186154'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000186154%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=5&amp;mini=1&amp;pos=right&amp;uid=6512786" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":125};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->

<!--cnzz tui-->
<script  type="text/javascript" c=fc charset="utf-8"  src="http://tui.cnzz.net/cs.php?id=1000065803"></script>
<!--cnzz tui-->



</body>
</html>