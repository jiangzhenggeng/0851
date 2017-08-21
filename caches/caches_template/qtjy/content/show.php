<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","_header"); ?>

<link href="<?php echo CSS_PATH;?>1/style/content.css" rel="stylesheet" type="text/css">
<script language="javascript" src="<?php echo CSS_PATH;?>1/js/content.js"></script>

<div class="content-outer">
	<div class="left">
		<form class="top-form" method="post" action="/emsadd2014/coursebaoming.php">
			<div id="slide-banner">
				<ul>
					<li>
						<a href="<?php echo $url;?>"><img src="<?php echo $thumb;?>" width="355" height="217" alt="<?php echo $title;?>"></a>
					</li>
				</ul>
				<div class="banner-bottom-nav"></div>
			</div>
			<input name="Actionsouyun" type="hidden" id="Actionsouyun" value="cousBaoMing">
			<input name="Ems_userid" type="hidden" id="Ems_userid" value="0031107336">
			<input name="kcid" type="hidden" id="kcid" value="3875298">
			<input name="baomingrenshu" type="hidden" id="baomingrenshu" value="1">
			<input name="XiangXiDiZhi" type="hidden" id="XiangXiDiZhi" value="">
			<input name="Ems_kctitle" type="hidden" id="Ems_kctitle" value="上海TCSL对外汉语教师培训">
			<div><span>您的姓名：</span><input name="XingMing" type="text" class="Text" placeholder="请输入您的姓名"></div>
			<div><span>您的电话：</span><input name="ShouJi" type="text" class="Text" placeholder="请输入您的电话"
										  onkeyup="value=value.replace(/[^0-9]+/g,'')" maxlength="11"></div>
			<div><span>我的留言：</span><input name="LiuYan" type="text" placeholder="请输入您想要咨询的问题" data-required="false">
			</div>
			<button type="submit" class="common-submit checkForm1">立即报名</button>
		</form>
		<div class="main-text">
			<div>
				<h2><?php echo $title;?></h2>
				<p>培训费用：<del><?php echo $training_cost;?></del>优惠价：<span><?php echo $preferential_price;?></span></p>
			</div>
			<p>开课日期：<span><?php echo $starttime;?></span></p>
			<p id="jiezhi">更新日期：<span><?php echo $updatetime;?></span></p>
			<p>授课方式：<span><?php echo $teaching_way;?></span></p>
			<p>授课学校：<span><a href="#" target="_blank"><?php echo $title;?></a></span>
			</p>
			<p>上课地点：<span><?php echo $venue;?></span></p>
			<p style="color:#b81125;font-size:16px;margin: 17px 0 27px;"><i class="fa fa-phone"></i> 免费报名电话：<?php echo $phone;?>
			<p class="main-text-btn">
				<a href="#baoming">在线报名</a>
				<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $qq;?>&amp;site=qq&amp;menu=yes" title="点击打开QQ咨询" target="_blank">在线咨询</a>
			</p>
		</div>
	</div>

	<div class="right jiogu">
		<p class="jigou-tit">机构信息</p>
		<a href="/s0031119221.html" target="_blank"><img src="http://www.studyems.com/emsimages/ad/logo.jpg" class="jigou-logo" onerror="this.src='http://www.studyems.com/emsimages/ad/logoweixin.jpg'" width="133" height="115" border="0" alt="宜兴会计培训学校"></a>
		<p class="jigou-name"><a href="/s0031119221.html" target="_blank"><font color="#335395">宜兴会计培训学校</font></a></p>
		<a class="vip-icon" href="http://www.studyems.com/help_41.html" target="_blank"><img src="/images/course2017/images/vip-3.jpg" border="0"></a>
		<p class="jigou-p">招生老师：<span>陈老师</span></p>
		<p class="jigou-p">注册时间：<span>2014/06/12</span></p>
		<p class="jigou-p">所在地区：<span>无锡</span></p>
		<a class="connect-btn" href="/s0031119221-lxwm.html" target="_blank"></a>
		<div class="jigou-link">
			<a href="/s0031119221.html" target="_blank"><i class="fa fa-home" style="font-size:26px" title="机构首页"></i></a>
			<a href="/s0031119221-news~1.html" target="_blank"><i class="fa fa-envelope" title="新闻动态"></i></a>
			<a href="/s0031119221-kcsz~1.html" target="_blank"><i class="fa fa-file-text-o" title="更多该机构招生信息"></i></a>
		</div>
		<div class="jigou-bottom">
			<a href="/s0031119221-szjs~1.html" target="_blank"><i class="fa fa-star"></i> 师资介绍</a>
			<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=&amp;site=qq&amp;menu=yes" target="_blank"><i class="fa fa-commenting-o"></i> 咨询客服</a>
		</div>
	</div>



	<div class="left left-info" id="info">
		<div class="left-tab">
			<a class="left-tab-1" id="">课程介绍</a>
			<a class="left-tab-2" id="">预约报名</a>
			<a class="left-tab-3" id="#left-tab-active">其它课程</a>
		</div>
		<div class="info-div">
			<?php echo $content;?>
		</div>
		<form class="info-form" method="post" action="/emsadd2014/coursebaoming.php">
			<input name="Actionsouyun" type="hidden" id="Actionsouyun" value="cousBaoMing">
			<input name="Ems_userid" type="hidden" id="Ems_userid" value="0031107336">
			<input name="kcid" type="hidden" id="kcid" value="3875298">
			<input name="Ems_kctitle" type="hidden" id="Ems_kctitle" value="上海TCSL对外汉语教师培训">
			<input name="baomingrenshu" type="hidden" id="baomingrenshu" value="1">
			<p id="baoming">网上预报名不用交任何费用！火爆招生中！招满即止！</p>
			<span style="color:#d71930">如果您对本课程感兴趣，请填写您的报名咨询信息，我们收到信息后24小时内与您联系！</span>
			<div style="margin-top:15px;">
				<span>真实姓名：</span>
				<input type="text" name="XingMing" class="Text2" placeholder="请输入真实姓名">
				<span style="margin-left:5px;color:#f00;">*</span>
			</div>
			<div>
				<span>  性别：</span>
				<label><input type="radio" name="Sex" checked=""> 男</label>
				<label><input type="radio" name="Sex"> 女</label>
			</div>

			<div>
				<span>手机号码：</span>
				<input type="text" name="ShouJi" class="Text2" placeholder="请输入手机号码" onkeyup="value=value.replace(/[^0-9]+/g,'')" maxlength="11">
				<span style="margin-left:5px;color:#f00;">*</span>
			</div>
			<div><span>&nbsp;QQ号码：</span><input type="text" name="QQ_MSN" placeholder="请输入QQ号码" onkeyup="value=value.replace(/[^0-9]+/g,'')" data-required="false"></div>
			<div><span>所在地区：</span><input type="text" name="XiangXiDiZhi" placeholder="请输入所在地区" data-required="false"></div>
			<div><span>学员留言：</span><textarea name="LiuYan" placeholder="请输入学员留言"></textarea></div>
			<button type="submit" class="common-submit checkForm2">预约报名</button>
			<br>
			<span style="color:#d71930">* 温馨提示：</span>以上信息为网民自行发布，本网站仅提供信息暂时储存空间，学生报名时请仔细核对信息的真实性以维护自身权益，如你发现内容不实可联系我们进行处理，求学快递网不参与对信息真实性的审核，详情请查阅求学快递网免责申明。
		</form><div class="info-course">
		<p class="info-course-icon"></p>
		<p class="info-course-head">
			<span>课程名称 </span><span>发布日期</span><span>授课方式</span><span style="width:10%;text-align:left;">价格</span></p>
		<ul class="info-course-ul">
			<li>
				<span><a href="http://www.studyems.com/course-1d2302cd883f6849.html" target="_blank">上海CAD机械制图培训</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-1d2302cd883f6849.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-13e164c33aaf4551.html" target="_blank">上海淘宝网店培训学校 快速掌握网店运营技巧</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-13e164c33aaf4551.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-9e17a4f21f3c24ba.html" target="_blank">上海思科CCNA网络工程师培训</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-9e17a4f21f3c24ba.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-fcb54d73fadb2537.html" target="_blank">上海工业手绘培训班 汽车外观手绘培训班</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-fcb54d73fadb2537.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-6be6ce91f77229e0.html" target="_blank">上海景观设计培训班</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-6be6ce91f77229e0.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-bf9cfdb111fd56f9.html" target="_blank">上海UI交互设计培训</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-bf9cfdb111fd56f9.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-da69eae291cc6b6e.html" target="_blank">上海网页制作培训</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-da69eae291cc6b6e.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-ea0a1e910e8a4446.html" target="_blank">上海SW培训班</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-ea0a1e910e8a4446.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-418eb0ce350c9928.html" target="_blank">上海淘宝商城培训</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-418eb0ce350c9928.html" class="check-btn" target="_blank">查看详情</a></li>
			<li>
				<span><a href="http://www.studyems.com/course-55ae457871000577.html" target="_blank">上海思科CCNP培训</a></span>
				<span>2017/01/08</span>
				<span>周末班</span>
				<p>￥面议</p>
				<a href="http://www.studyems.com/course-55ae457871000577.html" class="check-btn" target="_blank">查看详情</a></li>
		</ul>
	</div>

	</div>


	<div class="right">
		<p class="jigou-tit">相关课程</p>
		<ul class="right-ul">
			<li><a href="/s0031170362.html" target="_blank"><img src="/images/course2017/images/logo.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-693d50844877fba7.html" class="right-ul-t" target="_blank">沈阳出国英语培训 沈阳哪有出国英语培训班 沈阳出国英语培训哪家好</a><span>人气：13</span><i>￥面议</i></li>
			<li><a href="/s0031170362.html" target="_blank"><img src="/images/course2017/images/logo.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-c12b36cf4532f96e.html" class="right-ul-t" target="_blank">沈阳哪有职业英语培训 沈阳职业英语培训哪家好 沈阳职业英语培训班</a><span>人气：3</span><i>￥面议</i></li>
			<li><a href="/s0031095037.html" target="_blank"><img src="/kmpicalltotuser/image/20140824/20140824053424_39976.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-c746e260eef0f656.html" class="right-ul-t" target="_blank">上海英语培训班 从入门到精通</a><span>人气：19</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-212c343d5d4f680c.html" class="right-ul-t" target="_blank">上海TCSL对外汉语教师培训</a><span>人气：87</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-642673f567ed5f13.html" class="right-ul-t" target="_blank">上海TESOL国际英语教师培训</a><span>人气：77</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-5781e3d31df96192.html" class="right-ul-t" target="_blank">上海TCSL认证培训</a><span>人气：390</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-b5f171541b733d05.html" class="right-ul-t" target="_blank">上海对外汉语教师培训</a><span>人气：121</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-d7400cde3228fd9c.html" class="right-ul-t" target="_blank">上海TCSL培训</a><span>人气：663</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-4cf63bd763301409.html" class="right-ul-t" target="_blank">上海TESOL英语教师培训</a><span>人气：108</span><i>￥面议</i></li>
			<li><a href="/s0031107336.html" target="_blank"><img src="/kmpicalltotuser/image/20160218/20160218015732_49086.jpg" alt="" border="0" width="81" height="65"></a><a href="/course-37f13f16bd1643c2.html" class="right-ul-t" target="_blank">上海TESOL教师资格证培训</a><span>人气：81</span><i>￥面议</i></li>
		</ul>
	</div>

</div>

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("common","_footer"); ?>