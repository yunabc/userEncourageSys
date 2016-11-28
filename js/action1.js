 // 上拉加载
var LoadMore = {
	loadMorePage:2,
      isLoading:false,
      load_type:'',
      loadTime :null,
      loadBox:null,
      actions:null,
      rsargs:null,
   	init: function(loadBox,actions,rsargs){
        LoadMore.loadBox=loadBox;
        LoadMore.actions=actions;
        LoadMore.rsargs=rsargs;
          LoadMore.initdata();
          $(window).resize(function(){
            LoadMore.initdata();
          });
   },
  	initdata:function(){
        var W = $(window).width();
        if(W<992){
          LoadMore.load_type = 'shu';
          LoadMore.scroll_load(window,LoadMore.loadBox,LoadMore.actions,LoadMore.rsargs);
        }else{
          LoadMore.load_type = 'heng';
        }
   },
   scroll_load: function(parentBox,className,action,rsargs){
        var className=className,parentBox=parentBox;
        $(parentBox).scroll(function(ev){
          var $this = $(this);
          ev.stopPropagation();
          ev.preventDefault();
          if(LoadMore.load_type == 'shu'){
            var footerH = $('.footer').height();
            var sTop=$this.scrollTop();
            var sHeight=$('body').get(0).scrollHeight;
            var sMainHeight=$(this).height();
            var sNum=sHeight-sMainHeight;
            var loadTips='<div class="loading"><span style="display: block;line-height:22px;text-align: center;">正在加载...</span></div>';
              if(sTop>=sNum && !LoadMore.isLoading){
                console.log(11)
                LoadMore.isLoading=true;
              $('.'+className).append(loadTips);
              LoadMore.loadComment(className,action,rsargs);
            };
          }
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

if($(document).scrollTop()>100){
	var left_Height=$(window).height()-210;
	$(".section-left").css("height",left_Height+"px");
}

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
   // 上拉加载
   // if(W<992){
   //      changeW({ele:$('.notice-list')});
   //      changeW({ele:$('.setting-box ul')});
   //  }


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
		var res = $('.col-md-3').hasClass('dh-change');
		$('#sidebar-menu-bg').toggle();
		$("body").toggleClass("bodypos");
		$(".navbar-header2").toggleClass("navbar-header2-fixed");
		if(res){
			$(".navbar-header2").removeClass("navbar-header2-fixed");
			$("body").removeClass("bodypos");
			$('.header-search').removeClass('on');
			$('.col-md-3').removeClass('dh-change');
			$("#sidebar-menu").removeClass("header-dh");
		}else{
			$("body").addClass("bodypos");
			$('.header-search').addClass('on');
			$('.col-md-3').addClass('dh-change');
			$("#sidebar-menu").addClass("header-dh");
			$(".navbar-header2").addClass("navbar-header2-fixed");
		}
   });
	
	$("#sidebar-menu-bg").click(function(){
		$('#sidebar-menu-bg').toggle();
		$('.header-search').removeClass('on');
		$(".col-md-3").removeClass('dh-change');
		$("#sidebar-menu").removeClass("header-dh");
		$("body").removeClass("bodypos");
		$(".navbar-header2").removeClass("navbar-header2-fixed");
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
//导航宽度
	if($(window).width()>991){
	//左侧导航滚动条	
		nav_pc();
	}else{		
		//M端左侧导航吸顶。滑动的时候改变样式
		if($(document).scrollTop()>40){
				$(".navbar-header2").addClass("navbar-header2-fixed");
			}
          else{$(".navbar-header2").removeClass("navbar-header2-fixed");}
		$(document).scroll(function() {
			if($(document).scrollTop()>40){
				$(".navbar-header2").addClass("navbar-header2-fixed");
			}
          else{$(".navbar-header2").removeClass("navbar-header2-fixed");}		
		});		
		//左侧菜单栏收缩展开效果
      //左侧菜单栏收缩展开效果
	  
		   $(".wiki-action .ej").click(function(){ 
				if( $(this).children('.sj').length > 0){
					$(".wiki-person").toggleClass("wiki-hide");
			   $(".wiki-action li.ej").toggleClass("ejtz");
			   $(".wiki-action .wiki-ul-ej").toggleClass("ul-ej-ys");
			   $(".wiki-action").toggleClass("m-wiki-action");
			   $(this).parents(".wiki-action").children(".fl").toggleClass("wiki-hide");
			   $(this).siblings(".ej").toggleClass("wiki-hide");
			   $(this).children('.sj').toggleClass("wiki-show");
			   $(this).children(".menu2").toggleClass("zhank1");
			   $(this).parents(".wiki-action").siblings(".wiki-action").toggleClass("wiki-hide");
				}else{
					
				}
				
		       
		   });
		var heightvalue=$(window).height()-40;
		$(".section-left-wrap").css("height",heightvalue);
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
	
	function nav_pc(){
	$(".section-left2").perfectScrollbar();
	$(document).scroll(function() {
		//左侧导航滚动条结束
		
		//左侧导航条滚动样式判断
		var login_bottom =  0;
		if($('.gl-tool')){
			login_bottom = $('.gl-tool').height();
		}
			 if($(document).scrollTop()>70){
            $(".section-left-wrap").addClass("section-left-fixed");
			var left_Height=$(window).height()-216-login_bottom;
	$(".section-left2").css("height",left_Height+"px");
             }
			 
        else{
			$(".section-left2").css("height","500px");
            $(".section-left-wrap").removeClass("section-left-fixed");
        }
    });
	$(document).scroll(function() {
		var aaa = $(".section-right2").height()-$(document).scrollTop();
		if(aaa<670&&aaa>315){
            $(".section-left-wrap").addClass("section-left-bottom");
			$(".section-left-wrap").stop(true).animate({
				'bottom': 706-aaa
			},0);
        }
		
		else if(aaa<=315){
			$(".section-left-wrap").addClass("section-left-bottom");
			$(".section-left-wrap").stop(true).animate({
				'bottom': 393
			},0);
		}
		
        else{
			$(".section-left-wrap").removeClass("section-left-bottom");
		}
			
		});
		$(".wiki-action .ej").click(function(){
			if( $(this).children('.sj').length > 0){
			$(this).children('.sj').toggle();
       $(this).children(".menu2").toggleClass("zhank");
					}
					else{}
   });
   
	}	
	
});
	