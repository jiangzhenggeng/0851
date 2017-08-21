

// 图片切换效果

var index = 0;
var li_length = $("#slide-banner li").length; // 获取图片数量
var li_width = $("#slide-banner").width(); // 获取单个图片宽度
var auto;
var ul_width = li_width * li_length; // 获取所有图片宽度
$("#slide-banner").css({'width':ul_width});
$("#slide-banner li").css({'width':li_width});

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

// 添加按钮的点击功能
$(".banner-bottom-nav a").on("click",function(){
    index = $(this).attr('data-number');
    clearInterval(auto);
    slide();
    play();
})

play();

function play(){
    auto = setInterval(function(){
        index++;
        if(index>=li_length){
            index = 0;
        }
        slide();
    },4000)
}
function slide(){
    $("#slide-banner ul").animate({'marginLeft':index * -li_width});
    $(".banner-bottom-nav a").attr('id','banner-btn').eq(index).attr('id','banner-active');
}



//根据滚动位置设置客服栏目的定位
var ele_left = $(".jigou-tit").offset().left; //获取元素相对于文档左侧的偏移量

var ele_top = $('#kefu-id').offset().top; //获取元素相对于文档顶端的偏移量

$(window).scroll(function(){

    var s_top = $(window).scrollTop(); //获取滚动条的滚动距离

    if(s_top >= ele_top){
        $('#kefu-id').css({'position':'fixed','top':'0','left':ele_left}).addClass('kefu-shadow');
    }else{
        $('#kefu-id').css({'position':'static'}).removeClass('kefu-shadow');
    }

})

//搜索框的切换功能
var pla = '请输入您要搜索的课程名称';
$(".search-tab p").mouseover(function(){
    $(".search-inp").blur();
    var name = $(this).attr('data-name');
    $(".search-tab p").attr('id','');
    $(this).attr('id','search-tab-active');
    pla = '请输入您要搜索的' + name;
    $(".search-inp").val(pla);
    var data = $(this).data('url');
    $('.search-outer').attr('action',data);

})

$(".search-inp").focus(function(){
    var sear_val = $(this).val();
    if(sear_val=='请输入您要搜索的课程名称' || sear_val=='请输入您要搜索的学校名称' || sear_val=='请输入您要搜索的老师姓名'){
        $(this).val('');
    }
})

$(".search-inp").blur(function(){
    var val = $(this).val();
    if(val==''){
        $(this).val(pla);
    }
})


//点击选项卡滚动页面到相应位置
$(".left-tab a").click(function() {
    $(".left-tab a").attr('id','');
    $(this).attr('id','left-tab-active');
})

$(".left-tab-1").click(function() {
    $("html,body").animate({scrollTop: $('#info').offset().top}, 1000);
})
$(".left-tab-2").click(function() {
    $("html,body").animate({scrollTop: $('#baoming').offset().top}, 1000);
})
$(".left-tab-3").click(function() {
    $("html,body").animate({scrollTop: $('.info-course').offset().top}, 1000);
})

//判断表单完整性
$(".checkForm1").click(function(){
    var bool = true;
    $('.Text').each(function(){
        var inp_p = $(this).attr('placeholder');
        if($(this).val() == ""){
            alert(inp_p);
            $(this).focus();
            bool = false;
            return bool;
        }
    })
    return bool;
})

$(".checkForm2").click(function(){
    var bool = true;
    $('.Text2').each(function(){
        var inp_p = $(this).attr('placeholder');
        if($(this).val() == ""){
            alert(inp_p);
            $(this).focus();
            bool = false;
            return bool;
        }
    })
    return bool;
})