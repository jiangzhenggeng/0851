<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="keywords" content="�ٶȵ�ͼ,�ٶȵ�ͼAPI���ٶȵ�ͼ�Զ��幤�ߣ��ٶȵ�ͼ���������ù���" />
    <meta name="description" content="�ٶȵ�ͼAPI�Զ����ͼ�������û��ڿ��ӻ����������ɰٶȵ�ͼ" />
    <title>�ٶȵ�ͼAPI�Զ����ͼ</title>
    <!--���ðٶȵ�ͼAPI-->
    <style type="text/css">
        html,body{margin:0;padding:0;width: 100%;height: 100%;position: absolute}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {fsont:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2&key=<?php echo $key?>&services=true"></script>

</head>

<body>
<!--�ٶȵ�ͼ����-->
<div style="width:100%;height:100%;" id="dituContent"></div>
</body>
<script type="text/javascript">
    var x = "<?php echo $_GET[x];?>" || 116.395645;
    var y = "<?php echo $_GET[y];?>" || 39.929986;
    var z = "<?php echo $_GET[z];?>" || 12;
    var address = "<?php echo $_GET[address];?>";
    var icon = "<?php echo $_GET[icon];?>";
    //�����ͳ�ʼ����ͼ������
    function initMap(){
        createMap();//������ͼ
        setMapEvent();//���õ�ͼ�¼�
        addMapControl();//���ͼ��ӿؼ�
    }

    //������ͼ������
    function createMap(){
        var myIcon = new BMap.Icon(icon, new BMap.Size(27, 45));
        var map = new BMap.Map("dituContent");//�ڰٶȵ�ͼ�����д���һ����ͼ
        var point = new BMap.Point(x,y);//����һ�����ĵ�����
        var marker = new BMap.Marker(point, {icon: myIcon});
        map.addOverlay(marker);
        map.centerAndZoom(point,z);//�趨��ͼ�����ĵ�����겢����ͼ��ʾ�ڵ�ͼ������
        window.map = map;//��map�����洢��ȫ��
    }

    //��ͼ�¼����ú�����
    function setMapEvent(){
        map.enableDragging();//���õ�ͼ��ק�¼���Ĭ������(�ɲ�д)
        map.enableScrollWheelZoom();//���õ�ͼ���ַŴ���С
        map.enableDoubleClickZoom();//�������˫���Ŵ�Ĭ������(�ɲ�д)
        map.enableKeyboard();//���ü����������Ҽ��ƶ���ͼ
    }

    //��ͼ�ؼ���Ӻ�����
    function addMapControl(){
        //���ͼ��������ſؼ�
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //���ͼ���������ͼ�ؼ�
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
        //���ͼ����ӱ����߿ؼ�
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }


    initMap();//�����ͳ�ʼ����ͼ
</script>

</html>