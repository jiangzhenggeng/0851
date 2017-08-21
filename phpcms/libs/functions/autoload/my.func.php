<?php

function getShoolInfo($shoolid){
    if( $GLOBALS['shool_'.$shoolid] ){
        return $GLOBALS['shool_'.$shoolid];
    }

    $shoolid = intval($shoolid);
    if($shoolid<=0) return array();
    $db = pc_base::load_model('content_model');

    $db->table_name = $db->db_tablepre.'shool';
    $GLOBALS['shool_'.$shoolid] = $r = $db->get_one(array('id'=>$shoolid));
    return $r;

}

function getRenQi($shoolid){
    $r = getShoolInfo($shoolid);
    return $r['renqi']>=0?$r['renqi']:0;
}


function getVipName($vip_type){
    switch ($vip_type){
        case 1:
            return '普通会员';
        case 2:
            return '青铜会员';
        case 3:
            return '白银会员';
        case 4:
            return '黄金会员';
        case 5:
            return '砖石会员';
    }
    return '普通会员';
}

function getShoolNmae($shoolid){
    $r = getShoolInfo($shoolid);
    return $r['title']>=0?$r['title']:'';

}



















