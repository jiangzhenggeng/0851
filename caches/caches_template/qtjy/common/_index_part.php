<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<div class="main">
    <div class="studyems027">
        <div class="studyems059<?php echo $style;?>"><p><?php echo $CATEGORYS[$partid]['catname'];?></p></div>
        <div class="studyems060<?php echo $style;?>">
            <div class="studyems061<?php echo $style;?>">
                <div class="studyems062<?php echo $style;?>"><p></p></div>
                <div class="studyems063<?php echo $style;?>">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20111871e0bc23584772d91adb23df6a&action=category&catid=%24partid&num=14&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$partid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'14',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div class="studyems064">
                    <p>
                        <a href="?m=content&c=index&a=lists&catid=<?php echo $partid;?>" target="_blank" style="color:#FFFFFF;">更多课程</a>
                        <!--<img src="<?php echo CSS_PATH;?>1/images/tu27.jpg">-->
                    </p>
                </div>
            </div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=841215836e09719b8c73c4d16140a82d&action=lists&catid=%24partid&num=6&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$partid,'siteid'=>$siteid,'limit'=>'6',));}?>
            <div class="studyems065">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="studyems066">
                    <div class="studyems067">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
                            <img src="<?php echo $r['thumb'];?>" width="218" height="154" border="0">
                        </a>
                    </div>
                    <div class="studyems068">
                        <span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></span>
                        <p>来电咨询</p>
                    </div>
                    <div class="studyems069">
                        <strong><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],18*3);?></a></strong>
                    </div>
                    <div class="studyems070">
                        <span>综合分：<img src="<?php echo CSS_PATH;?>1/images/tu30.jpg"></span>
                        <p>
                            <a href="<?php echo $r['url'];?>" target="_blank">
                                <img src="<?php echo CSS_PATH;?>1/images/tu29.jpg" border="0">
                            </a>
                        </p>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="studyems071">
                <div class="studyems072<?php echo $style;?>"><p>推荐培训学校</p></div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=56814b8431e129a38fcacb7cd3d84fde&action=position&posid=%24posid&order=listorder+DESC&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>$posid,'order'=>'listorder DESC','limit'=>'9',));}?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <div class="studyems073">
                        <span><i><?php echo $n;?></i></span>
                        <p>
                            <a href="<?php echo $val['url'];?>" target="_blank"><?php echo $val['title'];?></a>
                        </p>
                    </div>
                    <div class="studyems074"></div>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>