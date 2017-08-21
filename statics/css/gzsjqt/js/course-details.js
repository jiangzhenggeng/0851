
$("#nav-course").css({'color':'#dc201e'});




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



$(function(){
  //收藏功能
  /* var bb = true;
  $('.collect').click(function(){
     if(bb){
      $(this).find('i').toggleClass('fa-star-o').toggleClass('fa-star');
        bb = false;
     }else{
      $(this).find('i').toggleClass('fa-star-o').toggleClass('fa-star');
        bb = true;
     }
  }); */

    //星星评分
  $('.xing2,.xing4').each(function(){
        var data = $(this).data('wid');
        var wid = data / 5 * 100;
        $(this).css('width',wid + '%')
  });

  //评分
  $('.tiao2').each(function(){
        var shuliang = $('.shuliang').text();
        var zhan = $(this).parent().siblings('span').find('em').text();
        var wid = zhan / shuliang * 100;
        $(this).css('width',wid + '%')
  });

  //立即报名
  $('.checkForm').click(function(){
    var get = /^1[3-9]\d{9}$/;
    var bool = true;
    var name = $(this).parent('li').siblings('li').find('.sky4');
    var phone = $(this).parent('li').siblings('li').find('.sky3');
    var phoneVal = $.trim(phone.val());
      if($.trim(name.val()) == ""){
        var $wen = '<span class="float-tips">请输入您的姓名<i></i></span>';
        name.before($wen);
        name.focus();
        timeout();
        bool = false;
        return bool;
      }    
      if(!get.test(phoneVal)){
          var $wen = '<span  class="float-tips">请输入正确的手机号<i></i></span>';
          phone.before($wen);
          timeout();
          phone.focus();
          bool = false;
          return bool;
       }     
   
    return bool;
  });

  //在线报名
  $('.apply').click(function(){
      $(".mengban").fadeIn();
      $(".alert-bm").fadeIn();    
  }); 

});

function timeout(){
  window.clearTimeout(time);
 var time = setTimeout(function(){
    $('.float-tips').remove();
  },3000);
}

//顶部固定
(function(){
    var win = $(window);
    var $ul = $('.main-b-to');
    var $li = $('.main-b-1');
    var top = $ul.offset().top;
    win.scroll(function(){

      if(win.scrollTop() >= top){
         $ul.addClass('scr');
      }else{
         $ul.removeClass('scr');
      }

      if(win.scrollTop() >= $li.eq(0).offset().top && win.scrollTop() < $li.eq(1).offset().top){      
          $ul.find('li').eq(0).addClass('new').siblings().removeClass('new');

      }else if(win.scrollTop() >= $li.eq(0).offset().top && win.scrollTop() < $li.eq(2).offset().top){
         $ul.find('li').eq(1).addClass('new').siblings().removeClass('new');

      }else if(win.scrollTop() >= $li.eq(1).offset().top && win.scrollTop() < $li.eq(3).offset().top){
         $ul.find('li').eq(2).addClass('new').siblings().removeClass('new');

      }else if(win.scrollTop() >= $li.eq(2).offset().top && win.scrollTop() < $li.eq(4).offset().top){
         $ul.find('li').eq(3).addClass('new').siblings().removeClass('new');

      }else if(win.scrollTop() >= $li.eq(3).offset().top){
         $ul.find('li').eq(4).addClass('new').siblings().removeClass('new');

      }

    });

    $('.main-b-to .list').click(function(){
      var ind = $('.main-b-to .list');
      $("html,body").animate({scrollTop: $('.main-b-1').eq(ind.index(this)).offset().top + 15}, 800);        
   });

})();