<?php if (!defined('THINK_PATH')) exit(); if(is_array($arclist)): $i = 0; $__LIST__ = $arclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><ul class="news">  
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