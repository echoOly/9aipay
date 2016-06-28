<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>RUIBlog</title>
</head>
<body style="background:#def;">
	<div style="margin:200px auto;height:200px;width:500px;background:#fff;border-radius:5px;box-shadow:0 0 6px #333;">
		<h1 style="font-size:1.5em;line-height:2em;text-indent:2em;border-bottom:2px dashed #999">系统提示</h1>
		<?php if(isset($message)): ?><p style="font-size:1.2em;padding:5px 25px;text-align:center">
				<?php echo($message); ?></p>
			<?php else: ?>
			<p style="font-size:1.2em;padding:5px 25px;text-align:center">
				<?php echo($error); ?></p><?php endif; ?>
		<p style="font-size:1.2em;padding:5px 25px;text-align:center">
			页面自动
			<a id="href" href="<?php echo($jumpUrl); ?>">跳转</a>
			等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
		</p>
	</div>
	<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script></body>
</html>