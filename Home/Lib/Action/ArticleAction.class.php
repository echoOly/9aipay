<?php

class ArticleAction extends CommonAction{
	public function index(){
		$obj = D('Article');
		$arcid = $_GET['arcid'];
		$where['arcid'] = $arcid;
		$article = $obj->relation(true)->where($where)->find();
		$article['arcurl'] =  U('Article/index',array('arcid'=>$arcid));
		$article['commentnum'] = $this->getCommentNum($article['arcid']);
		$article['colurl'] = U('Index/columns',array('colid'=>$article['colid']));

		//处理关键字
		$keyarray = explode(',',$article['keyword']);
		foreach ($keyarray as$k=>$v){
			$tagname = urlencode($v);//中文需要做编码处理
			$keyarray[$k] = "<a href='".U('Index/tag',array('key'=>$tagname))."'>".$v."</a>";
		}
		$article['keyurl'] = implode(',',$keyarray);

		//处理上一篇下一篇文章
		$article['prearc'] = $obj->getUpDownArc($article['createtime'],'up');
		$article['nextarc'] = $obj->getUpDownArc($article['createtime'],'down');

		//点击次数更新
		//$data['click'] = $article['click'] + 1;
		$obj->where(array('arcid'=>$arcid))->setInc('click',1);

		$this->assign('article',$article);
		$this->assign('colname', $this->getColumnsName($article['colid']).' - ');
		$this->display();
	}
}
?>