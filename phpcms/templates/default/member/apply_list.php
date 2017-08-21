{template 'member', 'header'}
<link href="{CSS_PATH}dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="{JS_PATH}dialog.js"></script>
<script language="javascript" type="text/javascript" src="{JS_PATH}content_addtop.js"></script>
<div id="memberArea">
	<?php print_r($datas);exit;?>
	{template 'member', 'left'}
	<div class="col-auto">
		<div class="col-1 ">
			<h5 class="title">报名用户</h5>

			<div class="content">

				<table width="100%" cellspacing="0"  class="table-list">
					<thead>
					<tr>
						<th>姓名</th>
						<th width="80">手机</th>
						<th width="80">课程</th>
						<th width="90">留言</th>
					</tr>
					</thead>
					<tbody>
					{loop $datas $info}
					<tr>

					</tr>
					{/loop}
					</tbody>
				</table>

				<div id="pages"> {$pages}</div>

			</div>
			<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
		</div>
	</div>
</div>
<div class="clear"></div>
{template 'member', 'footer'}