//顶部栏弹出菜单
$(".top-toggle").hover(function(){
    $(this).children('.top-toggle-con').show();
},function(){
    $(this).children('.top-toggle-con').hide();
})
//搜索框表单判断
$(".search-outer button").click(function(){
    var val = $(this).prev().val();
    if(val == '请输入您要搜索的课程名称' || val=='请输入您要搜索的学校名称' || val=='请输入您要搜索的老师姓名'){
        alert('请输入搜索内容');
        $(this).prev().focus();
        return false;
    }
})
//搜索框的切换功能
var pla = '请输入您要搜索的课程名称';
$(".search-tab p").mouseover(function(){
    $(".search-inp").blur();
    var name = $(this).attr('data-name');
    var url = $(this).attr('data-url');
    var typeid = $(this).attr('data-typeid');
    $(".search-tab p").attr('id','');
    $(this).attr('id','search-tab-active');
    pla = '请输入您要搜索的' + name;
    $(".search-inp").val(pla);
    $("#typeid").val(typeid);
    $(".search-outer").attr('action',url);
	//切换搜索热词
	var i = $(this).index();
	$('.search-hot ul').eq(i).show().siblings().hide();
})
$(".search-inp").focus(function(){
    var sear_val = $(this).val();
    if(sear_val=='请输入您要搜索的课程名称' || sear_val=='请输入您要搜索的学校名称' || sear_val=='请输入您要搜索的老师姓名'){
        $(this).val('');
        $(this).css({'color':'#000'});
    }
})
$(".search-inp").blur(function(){
    var val = $(this).val();
    if(val==''){
        $(this).val(pla);
        $(this).css({'color':''}); 
    }
})
//课程分类菜单
$(".left-menu li").hover(
    function() {
        $(this).children().last().show();
    },
    function(){
        $(this).children().last().hide();
    }
)
var touch = false;
$(".all-type").hover(
    function() {
        $(".left-menu").show();
    }
)
$(".common-head-outer").mouseover(function(){
    $(".left-menu").hide();
})
$(".menu-outer").mouseleave(function(){
    $("#jq_left_menu").hide();
})
//课程分类图标
var fa_icon = ['graduation-cap','globe', 'institution', 'desktop', 'cog', 'wrench', 'music', 'child', 'book', 'plane']; //样式名，省略前缀'fa-'
$('#jq_left_menu li i.fa-fw').each(function(i, e){
    var classname = 'fa-'+fa_icon[i];
    $(e).addClass(classname);
})
//显示星星图标评分
function star_level(){
  $('.xing2,.xing4').each(function(){
        var data = $(this).data('wid');
        var wid = data / 5 * 100;
        $(this).css('width',wid + '%')
  });
}
//显示/隐藏咨询电话
$(".phone-btn").hover(
    function() {
        $(".float-phone").show();
    },
    function(){
        $(".float-phone").hide();
    }
)
//显示/隐藏微信二维码
$(".weixin-btn").hover(
    function() {
        $(".float-weixin").show();
    },
    function(){
        $(".float-weixin").hide();
    }
)
var $win = $(window);
$(".fix .la-li").css("visibility","hidden");
var goTop = function(){
    if($win.scrollTop()<= 200){
        $(".fix .la-li").css("visibility","hidden")
    }else{
        $(".fix .la-li").css("visibility", "visible")
    }
}
//回到顶部
$(".fix .la-li").click(function(){
    $("html,body").animate({scrollTop:0},500);
})
$win.scroll(function(){goTop()});
//打开意见反馈弹框
$(".fankui-btn").click(function(){
    $(".fk-table").fadeIn();
})
//判断意见反馈表单
$(".fk-submit").click(function(){
    var question = $(".fk-question textarea").val();
    var phd = $(".fk-question textarea").attr('placeholder');
    if($.trim(question) == '' || question == phd){
        alert(phd);
        $(".fk-question textarea").focus();
        return false;
    }
    var connect = $(".fk-connect input").val();
    var phd = $(".fk-connect input").attr('placeholder');
    if($.trim(connect) == '' || connect == phd){
        alert(phd);
        $(".fk-connect input").focus();
        return false;
    }
})
//关闭意见反馈弹框
$(".fk-close").click(function(){
    $(".fk-table").fadeOut();
})
//关闭意见反馈提交成功弹框
$(".fankui p").click(function(){
    $(".fankui").fadeOut();
})
$(function(){
    //建议反馈表单提交事件
    var options = {  
        beforeSubmit:  _checkAdd,  //提交前处理 
        success:       _responseAdd,  //处理完成 
        dataType:  'json'  
    };  
    $('#fbForm').submit(function() {
        $('button[type=submit]', this).attr('disabled', true);
        $(this).ajaxSubmit(options);
        return false;   // !!! Important !!! 
    });
});
function _checkAdd(formData, jqForm, options){
    //表单验证
    //some code
}
function _responseAdd(data, statusText){
    if(data.status == 1){   //提交成功
        $(".fk-table").fadeOut();
        $(".fankui").fadeIn();
    }else{
        $('button[type=submit]').attr('disabled', false);
        alert(data.info);
    }
}
//解决placeholder属性兼容性与样式不一致问题
var navigatorName = "Microsoft Internet Explorer"; 
if( navigator.appName == navigatorName ){ 
    var Place;
    $("input,textarea").each(function(){
        var load_val = $(this).val();
        var load_type = $(this).attr('type');
        var Place = $(this).attr('placeholder');
        if(load_val=='' && Place!=undefined){
            if(load_type=='password'){
                $(this).attr('type','text');
                $(this).attr('data-type','password');
            }
            $(this).val(Place).css({'color':'#999'});
            $(this).attr('data-placeholder','yes');
        }
    })
    $("input,textarea").focus(function(){
        in_type = $(this).attr('data-type');
        in_data = $(this).attr('data-placeholder');
        if(in_data=='yes'){
            if(in_type=='password'){
                $(this).attr('type','password');
            }
            $(this).val('').css({'color':'#333'});
        }
    })
    $("input,textarea").blur(function(){
        var in_val = $(this).val();
        in_type = $(this).attr('data-type');
        var Place = $(this).attr('placeholder');
        if(in_val==''){
            if(in_type=='password'){
                $(this).attr('type','text');
            }
            $(this).val(Place).css({'color':'#999'});
            $(this).attr('data-placeholder','yes');
        }else{
            $(this).attr('data-placeholder','no');
        }
    })
}else{ 
    var Place;
    $("input,textarea").focus(function(){
        Place = $(this).attr('placeholder');
        $(this).attr('placeholder','');
    })
    $("input,textarea").blur(function(){
        $(this).attr('placeholder',Place);
    })
}

//自动推送代码，勿删
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();