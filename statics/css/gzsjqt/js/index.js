$("#nav-home").css({'color':'#dc201e'});
$('.get-val-wrap').click(function (){
    $(".fixed-se-ul").slideToggle();
    var cla1 = $(".get-val-wrap i").attr('class');
    var cla2 = $(".get-val-wrap i").attr('data-type');
    $(".get-val-wrap i").attr('class',cla2);
    $(".get-val-wrap i").attr('data-type',cla1);
})
$(".fixed-se-ul li").click(function (){
    $(".fixed-se-ul li").show();
    $(this).hide();
    $('.fixed-se-ul').slideUp();
    $(".get-val-wrap i").attr('class','fa fa-angle-down');
    $(".get-val-wrap i").attr('data-type','fa fa-angle-up');
    var val = $(this).text();
    $(".get-val").text(val);
    var phd = '请输入您想搜索的'+val;
    $(".fixed-search-inp").attr('placeholder',phd);
	var url = $(this).data('url');
	$(this).parents('form').attr('action', url);
})
//导航栏悬浮效果
$(window).scroll(function(){
    var top = $(window).scrollTop();
    if(top >= 150){
        $('.fixed-header').slideDown();
    }else{
        $('.fixed-header').slideUp();
    }
})
$(".common-head-outer").off();
$(".nav-outer").off();
$(".left-menu").off('mouseleave');

// banner切换效果
var index = 0;
var li_length = $(".index-banner-li").length; // 获取图片数量
var li_width = $(".slide-banner").width(); // 获取单个图片宽度
var ul_width = li_width * li_length; // 获取所有图片宽度
$(".index-banner-ul").css({'width':ul_width});
$(".index-banner-li").css({'width':li_width});
// 添加按钮
var btn = '';
var j;
for(var i=1; i <= li_length; i++) {
    j = i-1;
    if(j==0){
        btn += '<a class="banner-nav-a" id="banner-active" data-number="'+j+'"></a>';
    }else{
        btn += '<a class="banner-nav-a" data-number="'+j+'"></a>';
    }
}
$(".banner-bottom-nav").append(btn);

// 添加按钮的功能
$(".banner-bottom-nav a").on("mouseover",function(){
  index = $(this).attr('data-number');
  slide();
  clearInterval(ds);
})
$(".index-banner-li").on("mouseover",function(){
    clearInterval(ds);
})
$(".index-banner-li").on("mouseout",function(){
    auto_ad();
})
function auto_ad(){
    ds = setInterval(function(){
        index++;
        if(index>=li_length){
            index = 0;
        }
        slide();
    },4000)
}
function slide(){
    $(".index-banner-ul").animate({'marginLeft':index * -li_width});
    $(".banner-bottom-nav a").attr('id','banner-btn').eq(index).attr('id','banner-active');
}
auto_ad();

$(".fixed-menu div").hover(
    function(){
        $(this).children('p').attr('id','trans-p');
        $(this).children('p').css({'transform-origin':'50% 50%'});
    },
    function(){
        $(this).children('p').attr('id','');
        $(this).children('p').css({'transform-origin':'-100% 50%'},3000);
    }
)

$(".back-top").click(function(){
    $(window).scrollTop(0);
})

$(".news-content>div:even").css({'margin-right':'0.8%'});
$(".news-bottom li:even").css({'float':'left'});
$(".news-bottom li:odd").css({'float':'right'});


//公用选项卡功能
$(".tab-head-title a").mouseover(function(){
    var index = $(this).index();
    $(this).parent().children().css({'color':'#333'});
    $(this).css({'color':'#dc201e'});
    $(this).parent().children('a').children('span').css({'opacity':'0'});
    $(this).children('span').css({'opacity':'1'});
    $(this).parent().parent().next().children().hide();
    $(this).parent().parent().next().children().eq(index).show();
    var id = $(this).parent().parent().next().children().eq(index).attr('id');
    $("#" + id + " .nolazy").each(function(){
        var src = $(this).attr('src');
        var ori = $(this).attr('data-original');
        if(src !== ori){
           $(this).attr('src',ori);
        }
    })
})


//新闻资讯选项卡功能
$(".news-head-title a").mouseover(function(){
    var index = $(this).index();
    $(this).parent().children().css({'color':'#333','background':'#fff'});
    $(this).css({'color':'#dc201e','background':'#f9f9fa'});
    $(this).parent().parent().next().children().hide();
    $(this).parent().parent().next().children().eq(index).show();
})