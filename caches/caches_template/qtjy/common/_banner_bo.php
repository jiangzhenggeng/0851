<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="studyems058">
    <div id="demo"
         style="float:left;overflow:hidden;height:140px;width:918px; margin-left:10px; margin-top:15px;">
        <table align=left cellpadding=0 cellspace=0 border=0>
            <tr>
                <td id=demo1 valign=top>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=48d62d5a1db5670cc0f3c93783062b25&action=position&posid=1&where=thumb%21%3D%27%27&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','where'=>'thumb!=\'\'','order'=>'listorder DESC','limit'=>'6',));}?>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <a href="<?php echo $val['url'];?>" target="_blank">
                        <img src="<?php echo $val['thumb'];?>" width="144" height="131" border="0"/>
                    </a>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </td>
            </tr>
        </table>
    </div>
</div>