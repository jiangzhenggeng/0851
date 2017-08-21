<?php

defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('foreground');
pc_base::load_app_func('global');

class post extends foreground {

    function __construct() {
        foreground::$__login__ = false;
        parent::__construct();
        $this->db = pc_base::load_model('content_model');
        $this->db->table_name = $this->db->db_tablepre.'apply';
    }

    public function apply() {

        $apply = $_POST['apply'];
        if(!$apply['name'] || !$apply['tel'] || !$apply['content']){
            showmessage('请填写姓名、电话、留言内容',HTTP_REFERER);
        }
        $memberinfo = $this->memberinfo;
        $insertData = array(
            'name'=>$apply['name'],
            'tel'=>$apply['tel'],
            'content'=>$apply['content'],
            'userid'=>$memberinfo['userid'],
            'username'=>$memberinfo['username'],
            'addtime'=>time(),
            'ip'=> ip()
        );
        if( intval($apply['kcid']) ){
            $this->db->table_name = $this->db->db_tablepre.'news';
            $r = $this->db->get_one('id='.intval($apply['kcid']));
            $insertData['shoolid'] = $r['shoolid'];
            $insertData['kcid'] = $r['id'];
            $insertData['kc_title'] = $r['title'];
            $insertData['shool_username'] = $r['username'];

            $insertData['catid'] = $r['catid'];
            $insertData['id'] = $r['id'];
        }
        $this->db->table_name = $this->db->db_tablepre.'apply';
        $result = $this->db->insert($insertData);
        if($result){
            showmessage('报名成功',HTTP_REFERER);
        }else{
            showmessage('请稍后试试',HTTP_REFERER);
        }
    }

    public function lists(){

//        ini_set('display_errors',1);
//        error_reporting(E_ALL);

        $this->db->table_name = $this->db->db_tablepre.'apply';
        $memberinfo = $this->memberinfo;
        $datas = $this->db->listinfo(array('shool_username'=>$memberinfo['username'],'status'=>0),'addtime DESC');
        include template('member', 'apply_list');
    }

}
