// $(function(){
	var W = null;
	 function changeW(config){
         var  ele = config.ele;
              elePar = ele.parent('.dropdown'),
              eleW = config.eleW;
              ele.css({'width':eleW});
      };

	// 管理wiki中的下拉
	function Ocount(){
		var countIcon = $('.count-icon');
    $(document).on('click','.manage-wiki i',function(){
      var addEdit = $(this).siblings('.add-edit');
        if(!$(this).hasClass('on')){
          $(this).addClass('on');
          addEdit.show();
        }else{
          $(this).removeClass('on');
          addEdit.hide();
        }
    });
	}
	Ocount();
	// tab切换
	function tabMenu(conf){
		var	tabTit = conf.tabTit,
			iconChild = tabTit.children(),
			tabCon = conf.tabcon,
			activing = conf.activing;
			iconChild.click(function(){
				var _this = $(this).index();
					conChild = $(this).parent(tabTit).siblings(tabCon).children();
					$(this).addClass(activing).siblings(iconChild).removeClass(activing);
					conChild.eq(_this).addClass(activing).siblings(conChild).removeClass(activing);
          console.log($(this).parent(tabTit).siblings(tabCon))
			});
	}
  tabMenu({tabMain:$('.tab-box'),tabTit:$('.tab-tit'),tabCon:$('.tab-con'),activing:"on"});
// 个人中心首页 横向切换
if($('.prostraters-box').length>0){
  $.horizontalMove({
      parent: '.prostraters-box',
      sonUl: '.prostraters-ul',
      // 滑动的块
      curShowNum: 3,
      // 显示区内的个数；
      leftBtn: '.prostraters-left',
      rightBtn: '.prostraters-right',
      sonMargin: 8
  });
}
// 关注落脚页 首次 tab切换
  $('.first-ui-list').on('click',function(e){
    if(!$(this).hasClass('on')){
      $(this).addClass('on').siblings('.first-ui-list').removeClass('on');
    }
  })
// 我的积分
$('.jifen-btn').click(function(){
  var index = $(this).index();
  $(this).addClass('on').siblings().removeClass('on');
  $('.tab-change-li').eq(index).addClass('on').siblings().removeClass('on');
})





	// 登陆弹窗
	function loginBox(config){
		console.log(1)
        var oEle =$('.'+config),
            oEleBox=$('.'+config+'-box'),
            oMask =$(oEleBox.parents('.mask-login'));
            $('.mask-login').hide();
            oEleBox.show();
            oMask.show();
    }
  $('.close-icon').click(function(){
      $('.mask-login').hide();
      $('.login-bg').hide();
      $('body').animate({scrollTop:0},500);
    });

  $('.register-mask').click(function(){
      loginBox('register');
  });
  $('.login-mask').click(function(){
      loginBox('login');
  });
  $('.get-password').click(function(){
      loginBox('get-password');
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
	// $(".select-area select").click(function(){
	// 	var oI = $(this).parent(".select-area").find("i");
	// 	if($(this).hasClass('on')){
	// 		oI.removeClass('fa-angle-up').addClass('fa-angle-down');
	// 		$(this).removeClass('on');
	// 	}else{
	// 		$(this).addClass('on');
	// 		oI.removeClass('fa-angle-down').addClass('fa-angle-up');
	// 	}
	// });
 }
   selectMenu();
   // 上拉加载
  // var load_type = '',
  //     isLoading = false,
  //     loadTime = null;
  function IsPC(){
          var userAgentInfo = navigator.userAgent;
          var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
          var flag = true;
          for (var v = 0; v < Agents.length; v++) {
              if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
          }
          return flag;
      }
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
          // LoadMore.IsPC();
          $(window).resize(function(){
            LoadMore.initdata();
          });
       },
      
      initdata:function(){
        if(!IsPC()){
          console.log('aa');
          $('.paging').hide();
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
          console.log(1)
          // if(LoadMore.load_type == 'shu'){
             // console.log(1)
            var footerH = $('.footer').height();
            var sTop=$this.scrollTop();
            var sHeight=$('body').get(0).scrollHeight;
            var sMainHeight=$(this).height();
            var sNum=sHeight-sMainHeight;
            var loadTips='<div class="loading"><span style="display: block;line-height:22px;text-align: center;">正在加载...</span></div>';
              if(sTop>=sNum && !LoadMore.isLoading){
                LoadMore.isLoading=true;
              $('.'+className).append(loadTips);
              LoadMore.loadComment(className);
            };
          // }
        });
      },
     loadComment: function(className){
        /*var rsargs_val = rsargs.split(",");
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
        );*/
 $('.loading').remove();
        var txt = '';
        for (var i = 0; i < 5; i++) { //一次加载5条
            txt += "<li class='border-b'>" + i + "</li>";
        }
        $('.list-item ').append(txt);
        // clearTimeout(loadTime);
        /*新增-没有更多加载*/
        $('.moreNo').show().delay(3000);
        /*新增end*/
        LoadMore.isLoading = false;
      }
    }
   // function LoadMore(parentBox,className){
   //  var className=className,parentBox=parentBox;
   //  function loadComment(config) {
   //      $('.loading').remove();
   //      var txt = '';
   //      for (var i = 0; i < 5; i++) { //一次加载5条
   //          txt += "<li class='border-b'>" + i + "</li>";
   //      }
   //      $('.'+className).append(txt);
   //      clearTimeout(loadTime);
   //      /*新增-没有更多加载*/
   //      $('.moreNo').show().delay(3000);
   //      /*新增end*/
   //      isLoading = false;
   //  }
   //  $(window).on('scroll', function(ev) {
   //      ev.stopPropagation();
   //      ev.preventDefault();
   //      if (load_type == 'shu') {
   //          var footerH = $('.footer').height();
   //          var sTop =$(window).scrollTop();
   //          var sHeight = $('body').get(0).scrollHeight;
   //          var sMainHeight = $(window).height();
   //          var sNum = sHeight - sMainHeight;
   //          if (sTop >= sNum && !isLoading) {
   //              isLoading = true;
   //              var loadTips = '<div class="loading"><span>正在加载...</span></div>';
   //              $('.'+className).append(loadTips);
   //              loadTime = setTimeout(function() {
   //                  loadComment(className);
   //                  isLoading = false;
   //              }, 3000);
   //          };
   //      }
   //  });
   // }
   function resizeW(){
   	 W = $(window).width();
   	 	if(W<992){
   	 		W = W ;
   	 	}else{
   	 		W= 'auto';
        
   	 	}
   	 	changeW({ele:$('.notice-list'),eleW:W});
      changeW({ele:$('.setting-box ul'),eleW:W});
   }
  $(window).resize(function(){
		resizeW();
	});
   resizeW();
  
// });


// 不知道是啥东西，没印象了 线上的js中复制出来的

 $(document).on("touchstart",function(e){
    	e.stopPropagation();
    	var navIn = $('.navbar-collapse');
    	if(navIn.hasClass('in')){
    		navIn.removeClass('in');
    	}
    });
   	$('.navbar-toggle').on("touchstart",function(e){e.stopPropagation();});
   	$(".cancel-flo").click(function(e){
        e.stopPropagation();
    });