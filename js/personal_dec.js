$(function(){
    // 装饰Tab 切换
    $(".choose-con .tab li").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        var liIndex=$(this).index();
        $(".decorate-con .decorate1").eq(liIndex).addClass("on").siblings().removeClass("on");
    });
    //兑换宝箱弹出层 延迟2秒或者点击自动关闭
    $(".get-box .click a").click(function(){
        $(".get-box .box-pop").addClass("on");
        setTimeout(function(){
            $(".get-box .box-pop").removeClass("on");
        },2000);
    });
    $(".get-box .box-pop").click(function(){
        $(this).removeClass("on");
    });
    //可选装饰点击装饰后变成选中状态，不可选的则不
    $(".decorate-con .dec-list li .dec-con").click(function(){
        if($(this).hasClass("owner")){
           if(!$(this).hasClass("choose")){
                $(this).addClass('choose').parent().siblings().find(".dec-con").removeClass('choose');
           } 
        }
    });
});