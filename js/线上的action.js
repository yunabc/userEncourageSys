 // 上拉加载
var LoadMore = {
	loadMorePage:2,
	isLoading:false,
   init: function(loadBox,action,rsargs){
	   	var W = $(window).width();
		if(W<992){
			LoadMore.scroll_load(window,loadBox,action,rsargs);
		}
   },
   scroll_load: function(parentBox,className,action,rsargs){
		var className=className,parentBox=parentBox;
	 	$(parentBox).scroll(function(ev){
	 	var $this = $(this);
		ev.stopPropagation();
		ev.preventDefault();
		var footerH = $('.footer').height();
		var sTop=$this.scrollTop();
		var sHeight=$('body').get(0).scrollHeight -footerH;
		var sMainHeight=$(this).height();
		var sNum=sHeight-sMainHeight;
		var loadTips='<div class="loading"><span style="display: block;line-height:22px;text-align: center;">正在加载...</span></div>';
	  	if(sTop>=sNum && !LoadMore.isLoading){
	  		LoadMore.isLoading=true;
			$('.'+className).append(loadTips);
			LoadMore.loadComment(className,action,rsargs);
		  };
	  }); 
	},
	loadComment: function(className,action,rsargs){
		var rsargs_val = rsargs.split(",");
		rsargs_val.splice(0, 0, LoadMore.loadMorePage); 
		jQuery.post(
	        mw.util.wikiScript(), {
	            action: 'ajax',
	            rs: action, 
	            rsargs: rsargs_val
	        },
	        function( data ) {
	            var res = jQuery.parseJSON(data);
	            if (res.rs == '1'){
	    			$('.'+className).append(res.data);
	    			LoadMore.isLoading = false;
	    			LoadMore.loadMorePage++;
	            }else{
	            	mw.hook( 'postEdit' ).fire( {
	            		message: res.data
	            	} );
	            }
	            $('.loading').remove();
		    }
		);
	}
};

$(function(){
	var W = null;
	function changeW(config){
         var  ele = config.ele;
              elePar = ele.parent('.dropdown'),
              eleW = config.eleW;
              ele.css({'width':eleW});
 	};
	// 管理wiki中的下拉
	function Ocount(){
		$(document).on('click','.count-icon',function(){
			var addEdit = $(this).siblings('.add-edit');
			if(!$(this).hasClass('on')){
				$(this).addClass('on');
				addEdit.show();
			}else{
				$(this).removeClass('on');
				addEdit.hide();
			}
		});
		$('#managewikimore').click(function(){
			$('.count-icon').removeClass('on');
			$('.add-edit').hide();
		});
	}
	Ocount();
	// tab切换
	function tabMenu(conf){
		var tabMain = conf.tabMain,
			tabTit = conf.tabTit,
			iconChild = tabTit.children(),
			tabCon = conf.tabcon,
			activing = conf.activing;
			iconChild.click(function(){
				var _this = $(this).index();
					conChild = $(this).parent(tabTit).siblings(tabCon).children();
					$(this).addClass(activing).siblings(iconChild).removeClass(activing);
					conChild.eq(_this).addClass(activing).siblings(conChild).removeClass(activing);
			});
	}
	tabMenu({tabMain:$('.tab-box'),tabTit:$('.tab-tit'),tabCon:$('.tab-con'),activing:"on"});

	// 登陆、注册调用的方法
	$('.register-mask').click(function(){
		 mw.loginbox.register();
  	});
  	$('.login-mask').click(function(){
		mw.loginbox.login();
  	});
  	$('.get-password').click(function(){
		mw.loginbox.getpassword();
  	});
	$('.close-icon').click(function(){
		mw.loginbox.closebox();
	});

	
    // select 下拉
   function selectMenu(){
	$(".select-area select").each(function(){
		var value = $(this).find("option:selected").text();
		$(this).parent(".select-area").find(".select-value").text(value);
	});
   	 $(".select-area select").change(function(){
		    var value = $(this).find("option:selected").text();
		    $(this).parent(".select-area").find(".select-value").text(value);
		});
   }
   selectMenu();


   // 1.1beta  实时监听窗口大小
    function resizeW(){
   	 W = $(window).width();
   	 	if(W<992){
   	 		W = W ;
   	 	}else{
   	 		W= 'auto'
   	 	}
   	 	changeW({ele:$('.notice-list'),eleW:W});
        changeW({ele:$('.setting-box ul'),eleW:W});
   }
   $(window).resize(function(){
		resizeW();
	});
   resizeW();
   // 以上为个人中心模块的js
   
   //ugcwiki
   //左侧菜单栏收缩展开效果
   $(".wiki-action b.menu1").click(function(){
       //$(this).siblings().toggle();
       $(this).toggleClass("zhank");
       $(this).parent().toggleClass("active");
   });
   $(".wiki-action b.menu2").click(function(){
       $(this).siblings('.sj').toggle();
       $(this).toggleClass("zhank");
   });
   $(".navbar-header2 .header-search").click(function () {
       $(".header-search-text").toggle();
   });
   
   //share
   $('.wechat-share .fx').click(function(){
	   $('.wechat-share .mengceng-share').show();
   });
   $('.mengceng-share .share-with-wrap .close-btn').click(function(){
	   $('.wechat-share .mengceng-share').hide();
   });
   //mulu 弹层
   var catalog=$('#toc');
   if(catalog.length){
	   $(".wechat-share .mulu").css('display','block');
   }

   $(".wechat-share .mulu").click(function(){
	   $('.toctoggle').html('');
	   $("#toc,#sidebar-menu-bg").show();
	   
	   $("#toctitle .toctoggle").click(function(){	
			console.log('dfdfd');
		  $("#toc,#sidebar-menu-bg").hide();
		});
	   
   });
	$("#toctitle .toctoggle").click(function(){	
	  $("#toc,#sidebar-menu-bg").hide();
	});
	$("#toc ul li a").click(function(){
		$("#toc,#sidebar-menu-bg").hide();
	});
	  
   $("#sidebar-menu").click(function () {
	   $("body").toggleClass("bodypos");
		var res = $('.col-md-3').hasClass('dh-change');
		$('#sidebar-menu-bg').toggle();
		if(res){
			$("body").removeClass("bodypos");
			$('.header-search').removeClass('on');
			$('.col-md-3').removeClass('dh-change');
			$("#sidebar-menu").removeClass("header-dh");
		}else{
			$("body").addClass("bodypos");
			$('.header-search').addClass('on');
			$('.col-md-3').addClass('dh-change');
			$("#sidebar-menu").addClass("header-dh");
		}
   });
	
	$("#sidebar-menu-bg").click(function(){
		$('#sidebar-menu-bg').toggle();
		$('.header-search').removeClass('on');
		$(".col-md-3").removeClass('dh-change');
		$("#sidebar-menu").removeClass("header-dh");
		$("body").removeClass("bodypos");
	});
   
   //sidebar - 展开
   
   $('.wiki-nav a[class*="visited"]').each(function(i,v){
	   if($(v).parent().parent().attr('class') == 'sj'){
		   $(v).parent().parent().show();
		   $(v).parent().parent().prev().addClass('zhank');
		   $(v).parent().parent().parent().parent().prev().addClass('zhank');
		   $(v).parent().parent().parent().parent().parent().addClass('active');
	   }else if($(v).parent().attr('class') == 'ej'){
		   $(v).parent().parent().prev().addClass('zhank');
		   $(v).parent().parent().parent().addClass('active');
	   }
   });
   
   
   //vote
   var voteinit = function(){
		var PageID = $('#page-vote-rs').attr('date-voteid');
		if(PageID != undefined){
			$.post(
				mw.util.wikiScript(), {
					action: 'ajax',
					rs: 'wfGetVoteStars',
					rsargs: [ PageID ]
				}, function( data ) {
					if(data == ''){
						$('#page-vote-rs').html('<span>评分:</span><span class="xj"><img alt="" src="'+mw.config.get( 'wgScriptPath')+'/extensions/VoteNY/images/star_off.gif"><img alt="" src="'+mw.config.get( 'wgScriptPath')+'/extensions/VoteNY/images/star_off.gif"><img alt="" src="'+mw.config.get( 'wgScriptPath')+'/extensions/VoteNY/images/star_off.gif"><img alt="" src="'+mw.config.get( 'wgScriptPath')+'/extensions/VoteNY/images/star_off.gif"><img alt="" src="'+mw.config.get( 'wgScriptPath')+'/extensions/VoteNY/images/star_off.gif"></span><span>(0.0)</span>');
					}else{
						$('#page-vote-rs').append( data );
					}
					
			},'html' );
		}
	};
	voteinit();

	//导航高度
	if($(window).width()>768){
		// 左右侧同高js
		
    $(function () {
        function IsPC(){
            var userAgentInfo = navigator.userAgent;
            var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
            }
            return flag;
        }

        if (IsPC){
            var left_obj = $('#innerbodycontent>div.col-md-3');
            var right_obj = $('#innerbodycontent>div.section-right');

            function set_height() {
                left_obj.css("min-height", 0);
                right_obj.css("min-height", 0);
                var left_height = left_obj.height();
                var right_height = right_obj.height();
                if (left_height > right_height) {
                    right_obj.css('min-height', left_height);
                }else{
                    left_obj.css('min-height', right_height);
                }
            }

            set_height();

            $(window).scroll(function () {
                set_height();
            });
        }
    });
	//左侧等于右侧高度js 结束
		$(document).scroll(function() {
			if($(document).scrollTop()>$(window).height()){
				$(".share-right .top-icon").css("display","block");
			}
			else{
				$(".share-right .top-icon").css("display","none");
			}
		});
	}else{
		var heightvalue=$(window).height()-40;
		$(".section-left2").css("height",heightvalue);
		$(document).scroll(function() {
			//超过一屏显示回到顶部but
			if($(document).scrollTop()>$(window).height()){
				$(".wechat-share .go-top").css("display","block");
			}
			else{
				$(".wechat-share .go-top").css("display","none");
			}
		});
	}
});
