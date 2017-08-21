function vip($field, $value, $fieldinfo) {

$db = pc_base::load_model('content_model');
$db->table_name = $db->db_tablepre.'member_group';
$r = $db->select();
$option = '';
foreach ($r as $k => $v){
$option .= '<option value="'.$v['groupid'].'" '.($v['groupid']==intval($value)?'selected':'').'>'.$v['name'].'</option>';
}
return '<select name="info['.$field.']" id="'.$field.'"><option value="0">---选择会员类型---</option>'.$option.'</select>';
}