<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","_header"); ?>

<link href="<?php echo CSS_PATH;?>1/style/px.css" rel="stylesheet" type="text/css">

<div class="main">
    <div class="library001">
        <div class="library002">
            <p style="float:left;">您当前的位置：<a href="<?php echo siteurl($siteid);?>">网站首页</a><span> &gt; </span><?php echo catpos($catid);?>
        </div>
        <div class="library003">
            <div class="library004">
                <div class="library005">
                    <div class="library006"><?php echo $catname;?></div>
                    <div class="library007">
                        <?php
                        $_catid = $catid;
                        if(!$CATEGORYS[$catid][child]){
                            $_catid = $parentid;
                        }
                        ?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ab5c25b76360163465db8e0d2bd8030e&action=category&catid=%24_catid&num=100&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$_catid,'siteid'=>$siteid,'limit'=>'100',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div class="library008">
                                <p>
                                    <a href="<?php echo $r['url'];?>" <?php if($r[catid]==$catid) { ?>id="emsa01"<?php } ?>><?php echo $r['catname'];?></a>
                                </p>
                            </div>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <div class="library010">
                    <div class="library009"></div>
                    <div class="library011">
                        <div class="teacher004">
                            <div class="teacher005">
                                <div class="px001"><p><a href="/px-b1-111-124.html">按发布时间</a></p></div>
                                <div class="px002"><p><a href="/px-b2-111-124.html">按精品课程</a></p></div>
                                <div class="px002"><p><a href="/px-b3-111-124.html">按价格排行</a></p></div>
                                <div class="px002"><p><a href="/px-b4-111-124.html">按人气排行</a></p></div>
                            </div>
                            <div class="teacher007">

                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2fd8f3c34787f91d510ef6b39ba52d50&action=lists&catid=%24catid&num=2&siteid=%24siteid&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'siteid'=>$siteid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <div class="px003">
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <div class="px004">
                                        <div class="px006"><h1><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></h1></div>
                                        <div class="list024">
                                            <div class="list025">人气度</div>
                                            <div class="list026">2950</div>
                                        </div>
                                        <div class="px005">
                                            <div class="px011"><font color="#064683">课程简介：</font>个性化模式预约测试时间---专业老师免费测试---定制个性化课程---语言学习---课后辅导---学后效果跟踪优势：●英语口语●公共英语3级●商务英语●幼儿启蒙英语●学生辅导英语●…</div>
                                            <div class="px007">
                                                <p class="px007a">由：<a href="/s0031068520.html" target="_blank">苹果国际教育</a>&nbsp;发布</p>
                                                <p>课程费用：<font color="#FF0000">面议</font></p>
                                                <p>更新日期：<font color="#FF0000">2017/01/06</font></p>
                                            </div>
                                        </div>
                                        <div class="px012">
                                            <p class="px013"><a href="/course-8c0a1737b92c27ca.html" target="_blank"><img src="/emsimages/px003.jpg" width="87" height="23" border="0"></a></p>
                                            <p class="px014"><a href="/s0031068520-lxwm.html" target="_blank"><img src="/emsimages/px004.jpg" width="87" height="23" border="0"></a></p>
                                        </div>
                                    </div>
                                    <?php $n++;}unset($n); ?>
                                </div>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                <div class="teacher015">
                                    <div class="Green-Page" style="margin-top:12px;">
                                        <?php echo $pages;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="main">
    <div class="index004">
        <div class="index030">
            <p class="index030a">品牌机构推荐</p>
            <p class="index030b">查看更多机构&gt;&gt;</p>
        </div>
        <div class="index031">
            <div class="index032">
                <div class="index032a">
                    <div class="index035">
                        <ul>
                            <li><a href="http://www.studyems.com/s0031122133.html" target="_blank">北京市朝阳区大展培训中心</a></li>
                            <li><a href="http://www.studyems.com/s0031122163.html" target="_blank">华联工商进修学院职业教育</a></li>
                            <li><a href="http://www.studyems.com/s0031122159.html" target="_blank">上海言盛文化传播有限公司</a></li>
                            <li><a href="http://www.studyems.com/s0031122153.html" target="_blank">南宁市鼎铭教育函授站</a></li>
                            <li><a href="http://www.studyems.com/s0031122124.html" target="_blank">南宁市鼎铭教育咨询有限责任公司</a></li>
                            <li><a href="http://www.studyems.com/s0031122123.html" target="_blank">山外山拓展训练</a></li>
                            <li><a href="http://www.studyems.com/s0031122119.html" target="_blank">西安小小明星音乐培训基地</a></li>
                            <li><a href="http://www.studyems.com/s0031122107.html" target="_blank">北京外国语大学韩国留学预科班</a></li>
                            <li><a href="http://www.studyems.com/s0031122102.html" target="_blank">武汉时尚星创化妆培训学校</a></li>
                            <li><a href="http://www.studyems.com/s0031122035.html" target="_blank">江苏方舟自考教育咨询有限公司</a></li>
                            <li><a href="http://www.studyems.com/s0031122030.html" target="_blank">浙江省慈溪市吉梦潮舞蹈培训学校</a></li>
                            <li><a href="http://www.studyems.com/s0031122021.html" target="_blank">郑州新一代教育信息咨询有限公司</a></li>
                            <li><a href="http://www.studyems.com/s0031122012.html" target="_blank">奥鹏教育云南开放大学授权教育中心</a></li>
                            <li><a href="http://www.studyems.com/s0031122010.html" target="_blank">沈阳市志航教育信息咨询有限公司</a></li>
                            <li><a href="http://www.studyems.com/s0031122004.html" target="_blank">长春市大华教育培训学校</a></li>
                            <li><a href="http://www.studyems.com/s0031121959.html" target="_blank">深圳妮薇雅佳美容美发化妆培训中心</a></li>
                            <li><a href="http://www.studyems.com/s0031121952.html" target="_blank">北京网商摇篮电子商务有限公司</a></li>
                            <li><a href="http://www.studyems.com/s0031121944.html" target="_blank">德国IBZ德语培训上海分校</a></li>
                            <li><a href="http://www.studyems.com/s0031121732.html" target="_blank">南昌市圣川文化传媒有限公司</a></li>
                            <li><a href="http://www.studyems.com/s0031121695.html" target="_blank">天津大学风景园林专业工程硕士在职研究生</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template("common","_footer"); ?>