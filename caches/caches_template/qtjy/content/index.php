<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","_header"); ?>
<div class="main">
    <div id="daohuang01con10" style="display:none;"></div>
    <div class="studyems027">
        <?php include template("common","_category"); ?>
        <?php include template("common","_banner"); ?>
        <?php include template("common","_banner_bo"); ?>
    </div>
</div>

<?php $partid=48;$posid=18;$style='';?>
<?php include template("common","_index_part"); ?>

<?php $partid=51;$posid=18;$style='a';?>
<?php include template("common","_index_part"); ?>

<?php $partid=52;$posid=18;$style='c';?>
<?php include template("common","_index_part"); ?>


<div class="main">
    <div class="studyems027">

        <div class="studyems075">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=24a27e319c4ce0527b1e0592099a11dd&action=category&catid=385&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'385','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
            <?php $i = 1;?>
            <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
            <!--001-->
            <div class="studyems075" id="studyems01con<?php echo $i;?>" <?php if($i>1) { ?>style="display: none;"<?php } ?>>
                <div class="studyems076">
                    <div class="studyems077"></div>
                    <div class="studyems078"><?php echo $r['catname'];?></div>
                    <div class="studyems079">
                        <ul>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r2) { ?>
                            <li <?php if($n==$i) { ?>id="ali"<?php } ?> onmouseover="setpx01s(<?php echo $n;?>);"><?php echo $r2['catname'];?></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
                <div class="studyems082">
                    <div class="studyems083">
                        <div class="studyems084"><strong>高考资讯</strong></div>
                        <div class="studyems085">
                            <div class="studyems086"><a href="http://www.studyems.com/gaokao/sep1023/" title="高考咨询"
                                                        target="_blank"><img src="<?php echo CSS_PATH;?>1/images/20160310084554_99159.jpg"
                                                                             width="240" height="140" border="0"/></a>
                            </div>
                            <div class="studyems086">
                                <ul>
                                    <li><a href="http://www.studyems.com/gaokao/sep1041/" target="_blank">广东高考</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1050/" target="_blank">福建高考</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1056/" target="_blank">宁夏高考</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1038/" target="_blank">更多高考咨询</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="studyems089">
                            <ul>
                                <li>·<a href="http://www.studyems.com/gaokao/20161117/ems286091.html" target="_blank">2017春季高考：上海春季高考网上咨询时间11月19日</a>
                                </li>
                                <span>11-17</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161117/ems286088.html" target="_blank">高考信息:4类学生可免除高中学杂费</a>
                                </li>
                                <span>11-17</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161116/ems285783.html" target="_blank">上海2017高考外语一年两考
                                    标准化考场已建225个</a></li>
                                <span>11-16</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161116/ems285723.html" target="_blank">教育部、广东省合力推进广东教育综合改革</a>
                                </li>
                                <span>11-16</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161109/ems284311.html" target="_blank">电竞专业首考4成不及格
                                    考试以游戏为主</a></li>
                                <span>11-09</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161107/ems283741.html" target="_blank">90所高校2017年可免试招收香港学生</a>
                                </li>
                                <span>11-07</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161107/ems283734.html" target="_blank">高中学业水平考什么？河南考试范围公布</a>
                                </li>
                                <span>11-07</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161107/ems283726.html" target="_blank">明年六月才考试
                                    高考报名为何那么早？</a></li>
                                <span>11-07</span></ul>
                        </div>
                    </div>
                    <div class="studyems083">
                        <div class="studyems084"><strong>高考政策</strong></div>
                        <div class="studyems085">
                            <div class="studyems086"><a href="http://www.studyems.com/gaokao/sep1285/" title="高考政策"
                                                        target="_blank"><img src="<?php echo CSS_PATH;?>1/images/20160310084642_99590.jpg"
                                                                             width="240" height="140" border="0"/></a>
                            </div>
                            <div class="studyems086">
                                <ul>
                                    <li><a href="http://www.studyems.com/gaokao/20160311/ems190858.html"
                                           target="_blank">北京高考政策</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/20160305/ems188036.html"
                                           target="_blank">广东高考政策</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/20160304/ems187514.html"
                                           target="_blank">河北高考改革</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1285/" target="_blank">更多高考政策咨询</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="studyems089">
                            <ul>
                                <li>·<a href="http://www.studyems.com/gaokao/20161109/ems284277.html" target="_blank">广西2017高中学业水平考试实施方案(试行)</a>
                                </li>
                                <span>11-09</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161107/ems283729.html" target="_blank">2017内蒙古高考政策：减少加分政策</a>
                                </li>
                                <span>11-07</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161107/ems283672.html" target="_blank">新高考政策：2021年江苏实施新高考方案</a>
                                </li>
                                <span>11-07</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161104/ems283353.html" target="_blank">内蒙古高考改革：深化考试招生制度改革实施方案</a>
                                </li>
                                <span>11-04</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161102/ems282763.html" target="_blank">2017广西异地高考政策公布</a>
                                </li>
                                <span>11-02</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161101/ems282487.html" target="_blank">黑龙江2017高考照顾政策覆盖十类人</a>
                                </li>
                                <span>11-01</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161101/ems282486.html" target="_blank">2017年山东省普通高考照顾政策(部分)</a>
                                </li>
                                <span>11-01</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161029/ems282153.html" target="_blank">2017年安徽高考加分政策</a>
                                </li>
                                <span>10-29</span></ul>
                        </div>
                    </div>
                    <div class="studyems093"></div>
                    <div class="studyems083">
                        <div class="studyems084"><strong>招生计划</strong></div>
                        <div class="studyems085">
                            <div class="studyems086"><a href="http://www.studyems.com/gaokao/sep1035/" title="招生计划"
                                                        target="_blank"><img src="<?php echo CSS_PATH;?>1/images/20160310084757_83468.jpg"
                                                                             width="240" height="140" border="0"/></a>
                            </div>
                            <div class="studyems086">
                                <ul>
                                    <li><a href="http://www.studyems.com/gaokao/20160305/ems188137.html"
                                           target="_blank">广西大学招生计划</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/20160311/ems190806.html"
                                           target="_blank">北京林业大学招生</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/20160311/ems190792.html"
                                           target="_blank">哈尔滨工业大学</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1035/" target="_blank">更多招生咨询</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="studyems089">
                            <ul>
                                <li>·<a href="http://www.studyems.com/gaokao/20161029/ems282132.html" target="_blank">北京大学历年招生计划</a>
                                </li>
                                <span>10-29</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161026/ems281561.html" target="_blank">香港大学2017内地招生计划</a>
                                </li>
                                <span>10-26</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161011/ems277736.html" target="_blank">2017年民航招飞：国航东航招生计划</a>
                                </li>
                                <span>10-11</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20160924/ems272306.html" target="_blank">东航四川分公司2017年在川招高中飞行学员计划</a>
                                </li>
                                <span>09-24</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20160924/ems272298.html" target="_blank">中国科学技术大学2017少年班“创新试点班”招生办法</a>
                                </li>
                                <span>09-24</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20160921/ems270273.html" target="_blank">2016山东高职专项第二轮春季高考院校专业招生计划</a>
                                </li>
                                <span>09-21</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20160921/ems270236.html" target="_blank">2017国航上海分公司在上海招收高中飞行学员</a>
                                </li>
                                <span>09-21</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20160919/ems269444.html" target="_blank">2016年中北大学各省招生计划</a>
                                </li>
                                <span>09-19</span></ul>
                        </div>
                    </div>
                    <div class="studyems083">
                        <div class="studyems084"><strong>录取查询</strong></div>
                        <div class="studyems085">
                            <div class="studyems086"><a href="http://www.studyems.com/gaokao/sep1031/" title="录取查询"
                                                        target="_blank"><img src="<?php echo CSS_PATH;?>1/images/20160310085016_60037.jpg"
                                                                             width="240" height="140" border="0"/></a>
                            </div>
                            <div class="studyems086">
                                <ul>
                                    <li><a href="http://www.studyems.com/gaokao/sep1031/" target="_blank">录取查询</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1030/" target="_blank">成绩查询</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/sep1033/" target="_blank">分数线查询</a></li>
                                    <li><a href="http://www.studyems.com/gaokao/" target="_blank">更多咨询</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="studyems089">
                            <ul>
                                <li>·<a href="http://www.studyems.com/gaokao/20161107/ems283748.html" target="_blank">高考录取：什么叫择优录取？</a>
                                </li>
                                <span>11-07</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161024/ems281404.html" target="_blank">高考录取：你到底是怎样被录取的</a>
                                </li>
                                <span>10-24</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161021/ems280607.html" target="_blank">2017年广西艺术统考合格分数线公布时间</a>
                                </li>
                                <span>10-21</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161021/ems280606.html" target="_blank">2017年广西艺术统考录取批次设置</a>
                                </li>
                                <span>10-21</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161021/ems280591.html" target="_blank">2016年中国农业大学录取2909名本科生</a>
                                </li>
                                <span>10-21</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161021/ems280590.html" target="_blank">2016年南方科技大学录取994名本科生</a>
                                </li>
                                <span>10-21</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161007/ems276271.html" target="_blank">甘肃2016高考招生录取率79.26%
                                    5个批次录取23万考生</a></li>
                                <span>10-07</span>
                                <li>·<a href="http://www.studyems.com/gaokao/20161007/ems276259.html" target="_blank">2016年湖北高考录取率比去年提高1.5%</a>
                                </li>
                                <span>10-07</span></ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

        <div class="studyems094">
            <div class="studyems095"><span><a href="http://www.studyems.com/gaokao/" title="高考" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070410_55153.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://www.studyems.com/gaokao/" target="_blank">高考</a></p></div>
            <div class="studyems095"><span><a href="http://www.studyems.com/zhongkaow/" title="中考" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070443_72457.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://www.studyems.com/zhongkaow/" target="_blank">中考</a></p></div>
            <div class="studyems095"><span><a href="http://www.studyems.com/zikao/" title="自考" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070556_42448.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://www.studyems.com/zikao/" target="_blank">自考</a></p></div>
            <div class="studyems095"><span><a href="http://www.studyems.com/chengkao/" title="成考" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070634_91205.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://www.studyems.com/chengkao/" target="_blank">成考</a></p></div>
            <div class="studyems095"><span><a href="http://zt.studyems.com/kaoyan/" title="考研" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070729_51091.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://zt.studyems.com/kaoyan/" target="_blank">考研</a></p></div>
            <div class="studyems095"><span><a href="http://www.studyems.com/kjcongye/" title="会计" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070804_81158.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://www.studyems.com/kjcongye/" target="_blank">会计</a></p></div>
            <div class="studyems095"><span><a href="http://www.studyems.com/jiaoshizheng/" title="教师资格证"
                                              target="_blank"><img src="<?php echo CSS_PATH;?>1/images/20160311070837_25993.jpg" width="108"
                                                                   height="89" border="0"></a></span>
                <p><a href="http://www.studyems.com/jiaoshizheng/" target="_blank">教师资格证</a></p></div>
            <div class="studyems095"><span><a href="http://zt.studyems.com/jisuanji/" title="计算机" target="_blank"><img
                    src="<?php echo CSS_PATH;?>1/images/20160311070907_30948.jpg" width="108" height="89" border="0"></a></span>
                <p><a href="http://zt.studyems.com/jisuanji/" target="_blank">计算机</a></p></div>
        </div>
    </div>
</div>

<?php include template("common","_footer"); ?>