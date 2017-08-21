<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<link href="<?php echo CSS_PATH;?>1/style/banner.css" rel="stylesheet" type="text/css">
<script language="javascript" src="<?php echo CSS_PATH;?>1/js/lrtk.js"></script>

<div class="studyems034">
    <div class="studyems035">
        <div class="studyems036">
            <div class="studyems036">

                <!-- 代码 开始 -->
                <div id="playBox" style="margin-top:0px;">
                    <div class="pre"></div>
                    <div class="next"></div>
                    <div class="smalltitle">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7c705469bc0f9c319026188694c33cc&action=position&posid=2&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'5',));}?>
                        <ul>
                            <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                            <li></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7c705469bc0f9c319026188694c33cc&action=position&posid=2&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'5',));}?>
                    <ul class="oUlplay">
                        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <li>
                            <a href="<?php echo $val['url'];?>" target="_blank">
                                <img src="<?php echo $val['thumb'];?>" width="692" height="278" border="0"/>
                            </a>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </div>
                <!-- 代码 结束 -->

            </div>
        </div>
    </div>
    <div class="studyems041">
        <div class="studyems042">
            <div class="studyems043">
                <div class="studyems044">
                    <div class="studyems045"><img src="<?php echo CSS_PATH;?>1/images/tu15.jpg"></div>
                    <div class="studyems046">
                        <span>尊敬的用户</span>
                        <p>您好,欢迎来到求学快递网</p>
                    </div>
                </div>
                <div class="studyems057">
                    <p><a href="http://www.studyems.com/login.html" target="_blank"><img
                            src="<?php echo CSS_PATH;?>1/images/tu12.jpg" border="0"></a></p>
                    <p><a href="http://www.studyems.com/login.html" target="_blank"><img
                            src="<?php echo CSS_PATH;?>1/images/tu14.jpg" border="0"></a></p>
                </div>
            </div>
            <div class="studyems047">
                <div class="studyems048">
                    <p class="stydyems049">学员满意度</p>
                    <p class="studyems050"><img src="<?php echo CSS_PATH;?>1/images/tu16.jpg"></p>
                </div>
                <div class="studyems051"><p>已注册学校：<font color="#fe8802">348698家</font></p>
                    <p>已登记课程：<font color="#fe8802">731228门</font></p>
                    <p>已成功报名：<font color="#fe8802">9015004人</font></p>
                </div>
            </div>
        </div>
    </div>
</div>