<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<?php include $this->admin_tpl('header', 'admin'); ?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a class="add fb" href="#"><em>报名学员</em></a>
    </div>
</div>

<div class="pad-lr-10">
    <form name="myform" action="?m=member&c=member&a=delete" method="post" onsubmit="checkuid();return false;">
        <div class="table-list">
            <table width="100%" cellspacing="0">
                <thead>
                <tr>
<!--                    <th align="left" width="20">-->
<!--                        <input type="checkbox" value="" id="check_box"-->
<!--                               onclick="selectall('userid[]');">-->
<!--                    </th>-->
                    <th align="left" width="10">姓名</th>
                    <th align="left" width="10">电话</th>
                    <th align="left" width="20">课程</th>
                    <th align="left" width="20">学校</th>
                    <th align="left" width="30">留言</th>
                    <th align="left" width="10">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (is_array($apply_list)) {
                    foreach ($apply_list as $k => $v) {
                        ?>
                        <tr>
<!--                            <td align="left"><input type="checkbox" value="--><?php //echo $v['userid'] ?><!--" name="userid[]">-->
                            </td>
                            <td align="left"><?php echo $v['name'] ?></td>
                            <td align="left"><?php echo $v['tel'] ?></td>
                            <td align="left"><a href="/index.php?m=content&c=index&a=show&catid=<?php echo $v['catid']?>&id=<?php echo $v['id']?>" target="_blank"><?php echo new_html_special_chars($v['kc_title']) ?></a></td>
                            <td align="left"><a href="/index.php?m=content&c=index&a=show&catid=<?php echo $v['shool_catid']?>&id=<?php echo $v['shoolid']?>" target="_blank"><?php echo new_html_special_chars($v['kc_title']) ?></a></td>
                            <td align="left"><?php echo new_html_special_chars($v['content']) ?></td>
                            <td align="left">
                                <a data-url="?m=member&c=member&a=apply_delete&dataid=<?php echo $v['dataid'];?>&pc_hash=<?php echo $_SESSION['pc_hash']?>" href="javascript:;" data-delete="ok">删除</a> |
                                <?php if( $v['flage']!=1 ){ ?>
                                    <a data-url="?m=member&c=member&a=apply_flage&dataid=<?php echo $v['dataid'];?>&pc_hash=<?php echo $_SESSION['pc_hash']?>" href="javascript:;" data-flage="ok">标记</a>
                                <?php }else{ ?>
                                    <a data-url="?m=member&c=member&a=apply_flage_unbind&dataid=<?php echo $v['dataid'];?>&pc_hash=<?php echo $_SESSION['pc_hash']?>" href="javascript:;" data-flage="ok">取消</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>

            <div id="pages"><?php echo $pages ?></div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $('[data-url]').click(function () {
      var url = $(this).attr('data-url');
      var _this = $(this);
      $.get(url,function (replayData) {
        if(replayData=='error'){
          alert('操作失败');
        }else{
           if(_this.attr('data-delete')){
             _this.closest('tr').fadeOut(function () {
               $(this).remove();
             });
           }else{
             window.location.reload();
           }
        }
      });
    });
</script>
</body>
</html>