<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="studyems028">
    <div class="studyems029">
        <div class="studyems030">全部课程分类</div>
        <div class="studyems031">
            <div class="studyems032">
                <?php $_t=1?>
                <?php $n=1; if(is_array($CATEGORYS)) foreach($CATEGORYS AS $k => $v) { ?>
                <?php if($v[catid]==12) { ?>
                <?php $n=1; if(is_array($CATEGORYS)) foreach($CATEGORYS AS $k2 => $v2) { ?>
                <?php if($v2[parentid]==$v[catid] && $_t<=6) { ?>
                <?php $_t++?>
                <div class="studyems033" data-onmouseover>
                    <span><a href="<?php echo $v2['url'];?>" target="_blank"><?php echo $v2['catname'];?></a></span>
                    <div class="shangxue3" style="display:none;margin-top:-13px;">
                        <ul>
                            <?php $n=1; if(is_array($CATEGORYS)) foreach($CATEGORYS AS $k3 => $v3) { ?>
                            <?php if($v3[parentid]==$v2[catid]) { ?>
                            <li><a href="<?php echo $v3['url'];?>" target="_blank"><?php echo $v3['catname'];?></a></li>
                            <?php } ?>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <p><?php $_n=1?>
                        <?php $n=1; if(is_array($CATEGORYS)) foreach($CATEGORYS AS $k3 => $v3) { ?>
                        <?php if($v3[parentid]==$v2[catid] && $_n<=3) { ?>
                        <a href="<?php echo $v3['url'];?>" target="_blank"><?php echo $v3['catname'];?></a>
                        <?php $_n++?>
                        <?php } ?>
                        <?php $n++;}unset($n); ?>
                    </p>
                    <dd></dd>
                </div>
                <?php } ?>
                <?php $n++;}unset($n); ?>
                <?php } ?>
                <?php $n++;}unset($n); ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-onmouseover]').hover(function () {
            var o = $(this).find('.shangxue3');
            o.show();
        },function () {
            $(this).find('.shangxue3').hide();
        });
    });
</script>