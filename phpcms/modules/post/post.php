<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class post {

    function __construct() {
        pc_base::load_app_func('global');
        $this->db = pc_base::load_model('content_model');
        $this->db->table_name = $this->db->db_tablepre.'category';
    }

    public function update() {
        $r = $this->db->select('1=1');
        foreach ($r as $k => $v ){
            $setting = json_decode($v['setting'],true);
            $setting['workflowid'] = 1;
            $this->db->update(array(
                'setting'=> json_encode($setting)
            ),'catid='.$v['catid']);
        }
    }

}
