
$("#nav-course").css({'color':'#dc201e'});

(function ($) {
      $.sunowCarousel = function (obj) {
        $(obj).each(function(){
           var me = $(this);
           var box = me.find('ul');
           var list = box.find('li');
           var Siz = list.size();
           var listWid = list.width() + 20;
           var Wid = Siz * listWid;
           box.width(Wid);
           var left = me.siblings("i.Left");
           var right = me.siblings("i.Right");
           var move = 0;
           if(Siz <= 5){
            left.hide();
            right.hide();
           }
           if(me.width() < box.width()){
              left.click(function(){
                 move -= listWid;
                  if (move <= 0) { move = 0}
                  box.stop().animate({ marginLeft: -move });
              });
              
              right.click(function () {
                  
                  move += listWid;
                  
                  if (move >= box.width() - me.width()) {
                      move = (box.width() - me.width());
                  }
                  box.stop().animate({ marginLeft: -move });
              });
           }
     });         
    };
})(jQuery)

$(function(){
  //回到顶部
  (function(){
    var $win = $(window);
     $(".fix .la-li").css("visibility","hidden");
    var goTop = function(){
      if($win.scrollTop()<= 0){
        $(".fix .la-li").css("visibility","hidden")
      }else{
        $(".fix .la-li").css("visibility", "visible")
      }
    };
    $(".fix .la-li").click(function(){
       $("html,body").animate({scrollTop:0},500);
    });

    $win.scroll(function(){goTop()});
  })();

  //立即报名
  $('.checkForm').click(function(){
    var get = /^1[3-9]\d{9}$/;
    var bool = true;
    var name = $('.sky').eq(0);
    var phone = $('.sky').eq(1);
      if(name.val() == "" || name.val() == '请输入您的姓名'){
        $('.float-tips').remove();
        var $wen = '<span class="float-tips">请输入您的姓名<i></i></span>';
        name.before($wen);
        name.focus();
        timeout();
        bool = false;
        return bool;
      }    
      if(phone.val() == "" || phone.val() == '请输入您的联系方式'){
        $('.float-tips').remove();
        var $wen = '<span  class="float-tips">请输入您的联系方式<i></i></span>';
        phone.before($wen);
        phone.focus();
        timeout();
        bool = false;
        return bool;

      }else{

         if(!get.test($('.sky').eq(1).val())){
           $('.float-tips').remove();
            var $wen = '<span  class="float-tips">请输入正确的手机号<i></i></span>';
            phone.before($wen);
            phone.focus();
            timeout();
            bool = false;
            return bool;
            
         }     
      }    
    return bool;
  });

   //星星评分
  $('.xing2').each(function(){
        var data = $(this).data('wid');
        var wid = data / 5 * 100;
        $(this).css('width',wid + '%')
  });

  //清除筛选条件
  /* $('.tiaojian span').click(function(){
	location.reload();
	return false;
	
    $(this).siblings('em').remove();
     $('.main-a-to .list').each(function(){
       $(this).find('li').eq(0).find('a').addClass('new').parent('li').siblings().find('a').removeClass('new');
       if($(this).hasClass('xinglie')){
         $(this).find('li').eq(0).find('a').text('不限');
         $(this).find('li').eq(1).hide();
       }
     });
  }); */

  //排序
  /* $('.rank .List').click(function(){
    $(this).addClass('new').siblings('.List').removeClass('new');
  }); */

  /* $('.main-a-to .list').on('click', 'a', function(){
    var $this = $(this);

    //查询类型
    var id = $this.parent('li').parents('li').data('id');

    //查询信息
    var name = $this.html();

    //
    var $tag = $('.tiaojian em');

    //执行效果
    $this.addClass('new').parent('li').siblings().find('a').removeClass('new');

    var $par = $(this).parents('ol');
    if($par.hasClass('xinglie')){
      $par.find('li').eq(1).show();
      $par.find('li').eq(0).find('a').html(name).addClass('new').parent('li').siblings().find('a').removeClass('new');
    }

    var $html = '<em onclick="$.dele(this)" data-id="'+ id +'">'+ name +'<i class="fa fa-times-circle"></i></em>';

    $tag.each(function(){
      if($(this).data('id') == id){
        $(this).remove();
      }
    })

    $('.tiaojian span').before($html);
    
  }); */

  $.dele = function(obj){

    $('.main-a-to li').each(function(){
      var $this = $(this);      
      
      if($this.data('id') == $(obj).data('id')){
        var $a = $this.find('a').removeClass('new');
        $a.each(function(){
          if($(this).hasClass('fi-li')){
            $(this).addClass('new')
          }
          
        })
      } 
    });
    if($(obj).data('id')==0){	//课程分类
       $('.xinglie li').eq(0).show().find('a').html('不限');
       $('.xinglie li').eq(0).siblings('.none').hide();
	   catid = childid = 0;
	   _cateList();	//还原课程一级分类
    }else if($(obj).data('id')==1){	//区域
		areaid = 0;
	}else if($(obj).data('id')==2){	//上课时间
		timeid = 0;
	}else if($(obj).data('id')==3){	//上课方式
		fsid = 0;
	}else if($(obj).data('id')==4){	//课程级别
		lvid = 0;
	}
    $(obj).remove();
	_refreshList();	//刷新列表数据
  }

});

function timeout(){
  window.clearTimeout(time);
 var time = setTimeout(function(){
    $('.float-tips').remove();
  },5000);
}

//页数
(function(){
  var ages = $('.rank .la em');
  var text = ages.text();
  var span = ages.siblings('span').text();

  if(text > 1){
    $('.fa-chevron-left').addClass('red');
  }

  if(text == span){
    $('.fa-chevron-right').removeClass('red');
  }    
})();