/*加载评论或留言*/
;function loadContent(url,id,num){
    $.ajax({
        type:'post',
        url:url,
        data:{arcid:id,offset:num},
        dataType:'json',
        success:function(data){
            if(data == ''){
                $('#J_article_com').text("暂无更多内容").fadeIn();
                setTimeout(function(){$('#J_article_com').slideUp(800);},3000);
            }
            else{
                $.each(data,function(k,v){

                    /*$item = $("<li class='ds-post'><ul class='ds-children' id='rui-reply'>"
                        +replyContent(v.reply)+"</ul></li>").hide();*/
                    $item = $('<li class="ds-post"><div class="ds-post-self"><div class="ds-avatar">'
                            +'<img src="./Home/Tpl/'+_THEMES_+'/Public/images/logo_03.jpg"></div>'
                            +'<div class="ds-comts-body"><div class="ds-comts-header">'
                            +'<span class="ds-user-name"><a herf="javascript:void(0)">'+v.writer
                            +'</a></span><span class="ds-time">发表于&nbsp;&nbsp;'+v.time
                            +'</span><a href="#comments" target="_self" class="ds-time">'
                            +'<span class="ds-ui-icon"></span>我也来说</a></div>'
                            +'<div class="rui-comts-body">'+v.content+'</div></div></div></li>').hide();
                    $('#J_art_comments').append($item);
                    $item.fadeIn();
                });
            }
        }
    });
};
function replyContent(data){
    var str = '';
    if(data != ''){
        $.each(data,function(k,v){
            str += "<li class='ds-post'><div class='ds-post-self'><div class='ds-avatar'><img src='/Home/Tpl/default/Public/images/reply.png'></div><div class='ds-comment-body'><div class='ds-comment-header'><span class='ds-user-name' style='color:red'>"
            +v.writer+"</span></div><div class='rui-conmment-body'>"
            +v.content+"</div><div class='ds-comment-footer ds-comment-actions'><span class='ds-time'>"
            +v.time+"</span><a href='#comments' target='_self' class='ds-post-reply'><span class='ds-ui-icon'></span>我也来说</a></div></div></div></li>";
        });
    }
    return str;
}
;(function($){
    /* 菜单 滑入滑出显示 */
    $.fn.initBbsNav = function (options) {
        this.opt = $.extend({bdObj:'a',ckObj:'.bbsNav', adCls:'bbsNav_show'}, options);
        
        $(this).each(function() {
            var bbsNav = $(this);
            var showFlag = 0;
            var bbsToggle = bbsNav.prev("a");

            var bbsNavHide = function() {
                if (showFlag == 0) {
                    bbsNav.removeClass("bbsNav_show");
                }
            }

            bbsToggle
                .mouseover(function () {
                    $(this).next(".bbsNav").addClass("bbsNav_show");
                    showFlag = 1;
                })
                .mouseleave(function () {
                    showFlag = 0;
                    setTimeout(bbsNavHide, 100);
                })

            bbsNav
                .mouseover(function () {
                    showFlag = 1;
                })
                .mouseleave(function () {
                    showFlag = 0;
                    bbsNavHide();
                })
        })
    };
    
    $.fn.smartFloat = function() {
        var position = function(element) {
            var top = element.position().top, pos = element.css("position");

            $(window).scroll(function() {
                var scrolls = $(this).scrollTop();
                if (scrolls > top) {
                    if (window.XMLHttpRequest) {
                        element.css({
                            position: "fixed",
                            top: '36px'
                        });    
                    } else {
                        element.css({
                            top: scrolls
                        });    
                    }
                }else {
                    element.css({
                        position: "relative",
                        top: 0
                    });    
                }
            });
        };
        return $(this).each(function() {
            position($(this));                         
        });
    };
})(jQuery);

$(document).ready(function () {
    $(".bbsNav").initBbsNav();

    $("#J_tabs").tabs({ fx: { opacity: 'show' } });

    $(".J_fixedBox_t").smartFloat();

    /* 菜单a链接效果 */
    $('.J_move_menu a, .J_move_elems').hover(function() { 
        $(this).stop().animate({'margin-top': '2px'}, 150); 
    }, function() { 
        $(this).stop().animate({'margin-top': '0px'}, 300); 
    });

    /* 链接效果*/
    $('.J_entry_title a,.J_sub_menu a,.J_more_link').hover(function() { 
        $(this).stop().animate({'marginLeft': '10px'}, 200); 
    }, function() { 
        $(this).stop().animate({'marginLeft': '0px'}, 400); 
    }); 

    /* tags */
    jQuery(".J_tab_tags a").css({
        backgroundColor: "#555",
        color: "#E2E2E1"
    });
    
    jQuery(".J_tab_tags a").hover(function() {
        jQuery(this).stop().animate({
            backgroundColor: "#ff6f3d",
            color: "#ffffff"
        }, 200);
    },function() {
        jQuery(this).stop().animate({
            backgroundColor: "#555",
            color: "#E2E2E1"
        }, 500);
    });

    /* 图片 阴影*/
    jQuery(".J_fancybox img").css({
        backgroundColor: "#FCFCFC"
    });

    $('.main').delegate('.J_fancybox img', 'mouseenter', function() {
        $(this).stop().animate({
            backgroundColor: "#9cd1e1",
            borderColor: "#38a1e5"
        }, 500);
    });

    $('.main').delegate('.J_fancybox img', 'mouseleave',function() {
        $(this).stop().animate({
            backgroundColor: "#FCFCFC"
        }, 500);
    });

    /* loading*/
    $('body').delegate('.J_entry_title a,.J_sub_menu a', 'click', function(e) {
        e.preventDefault();
        var htm = 'Loading',
        i = 4,
        t = $(this).html(htm).unbind('click'); (function ct() {
            i < 0 ? (i = 4, t.html(htm), ct()) : (t[0].innerHTML += '.', i--, setTimeout(ct, 120))
        })();
        window.location = this.href
    });

    /*留言和评论验证*/
    $('form[name=myform]').submit(function(){
        if($('#writer').val() == ''){
            alert('昵称不能为空！');
            $('#writer').focus();
            return false;
        }
        if($('#email').val() == ''){
            alert('邮箱不能为空！');
            $('#email').focus();
            return false;
        }
        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
        var result = reg.test($('#email').val());
        if(result !== true){
            alert('邮件格式不正确！');
            $('#email').focus();
            return false;
        }
        if($('#msg').val() == ''){
            alert('内容不能为空！');
            $('#msg').focus();
            return false;
        }
        if($('#verify').val() == ''){
            alert('验证码不能为空！');
            $('#verify').focus();
            return false;
        }
    });
});
/* 结束 */

/*-----------------------------------------------------------------------------------*/
/*	LOGO
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function(){
	jQuery('.logo-link').wrapInner('<span class="hover"></span>').css('textIndent','0').each(function () {
		jQuery('span.hover').css('opacity', 0).hover(function () {
			jQuery(this).stop().fadeTo(600, 1);
		}, function () {
			jQuery(this).stop().fadeTo(600, 0);
		});
	});
});

/*加载更多文章*/
function loadArticle(url,flag,num){
	$.ajax({
		type:'post',
		url:url,
		data:{flag:flag,offset:num},
		dataType:'html',
		success:function(data){
			if(data == ''){
				$('#J_article_con').text("暂无更多内容").fadeIn();
                setTimeout(function(){
                    $('#J_article_con').slideUp(800);
                },5000);
			}
			else{
				$('#J_article_box').append(data);
				//重新绑定事件
				/* 链接效果*/
                $('.J_entry_title a,.J_sub_menu a,.J_more_link').hover(function() { 
                    $(this).stop().animate({'marginLeft': '10px'}, 200); 
                }, function() { 
                    $(this).stop().animate({'marginLeft': '0px'}, 400); 
                }); 
			}
		}
	});
}
