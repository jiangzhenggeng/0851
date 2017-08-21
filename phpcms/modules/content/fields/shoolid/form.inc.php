function shoolid($field, $value, $fieldinfo) {

$db = pc_base::load_model('content_model');
$db->table_name = $db->db_tablepre.'shool';
$r = $db->select();
$option = '';
foreach ($r as $k => $v){
$option .= '<option value="'.$v['id'].'" '.($v['id']==intval($value)?'selected':'').'>'.$v['title'].'</option>';
}
return '<select name="info['.$field.']" id="'.$field.'"><option value="0">---选择学校---</option>'.$option.'</select>';
}