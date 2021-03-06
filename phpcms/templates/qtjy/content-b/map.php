<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;">
    <title></title>
    <script type="text/javascript" src="http://1.ss.faisys.com/js/comm/jquery/jquery-core.min.js?v=201611071744"></script>
    <script type="text/javascript" src="http://1.ss.faisys.com/js/comm/fai.min.js?v=201610311810"></script>

    <script src="http://api.map.baidu.com/api?v=1.1&services=true" type="text/javascript"></script>

    <script type="text/javascript">
        $(function(){
            if (false) {
                Fai.ing("当前设置的坐标数据有问题，为保证百度API正常使用，现已重置为默认坐标。请您联系客服处理。", true);
            }
            if(1 == 1){
                if( typeof BMap == 'undefined' ){
                    var mapContainer = $('#mapContainer310');
                    mapContainer.css({ color: 'red', position: 'relative', textAlign: 'center' });
                    var msg = $('<div>').css({ position: 'absolute', top:'50%', width:'100%' }).text('加载地图失败，请刷新重试');
                    mapContainer.append( msg );
                }else{
                    var mMap = new BMap.Map( 'mapContainer310' );
                    var mPoint = new BMap.Point( 106.705911, 26.594335 );
                    var oPoint = new BMap.Point( 106.705911, 26.594335 );
                    var mInfoWindow = new BMap.InfoWindow( "<div style='font-size: 14px;line-height: 18px;'>公司地址：贵阳市云岩区北<br/>京路260号万科公园5号<br/>联系电话：0851-85918601<br/>88531170</div>", { width:'auto', height:'auto', title:'', enableAutoPan:false });
                    var mMarker = new BMap.Marker( oPoint );
                    mMarker.addEventListener('infowindowopen', function(e) {
                        setTimeout(function(){
                            var moduleWidth = 730;
                            var diff = 0;
                            if( moduleWidth < 255 ){
                                diff = 730 - 255;
                                if( diff < -100 ){ diff = -100; }
                            }
                            var pop = $('#mapContainer310').children('#platform').children('#mask').next().children('div:first').children('div.pop');
                            var divTop = pop.children('.top');
                            divTop.css({ width: (202+diff) + 'px' });// top-center source [202px]
                            divTop.next().css({ left: (227+diff) + 'px' });// top-right-radius source [227px]

                            //middle-center source [250px]
                            if( $.browser.msie ){
                                if( $.browser.version < 8 ){
                                    pop.children('.center').css({ width: (250+diff+2) + 'px' });
                                }else{
                                    pop.children('.center').css({ width: (250+diff) + 'px' });
                                }
                            } else {
                                pop.children('.center').css({ width: (250+diff) + 'px' });
                            }

                            var divBottom = pop.children('.bottom');
                            divBottom.css({ width: (202+diff) + 'px' });// bottom-center source [202px]
                            divBottom.next().css({ left: (227+diff) + 'px' });// bottom-right-radius source [227px]
                            pop.children('div:last').css({ width: (220+diff) + 'px' });// middle-center text source [220px]
                            pop.children('img:first').css({ left: (227+diff) + 'px' });// close img button source [227px]
                        }, 100);
                    })
                    mMarker.addEventListener('click', function(e) {
                        if( mInfoWindow.isOpen() ){
                            this.closeInfoWindow();
                        } else {
                            this.openInfoWindow(mInfoWindow);
                        }
                    });
                    mMap.centerAndZoom( mPoint, 17 );
                    mMap.disableDoubleClickZoom();
                    mMap.addControl( new BMap.NavigationControl() );
                    mMap.addOverlay( mMarker );
                    mMarker.openInfoWindow( mInfoWindow );
                }
            }
            if(1 == 2){
                if(typeof google.maps.Map == 'undefined'){
                    var googleMapContainer = $('#mapContainer310');
                    mapContainer.css({ color: 'red', position: 'relative', textAlign: 'center' });
                    var msg = $('<div>').css({ position: 'absolute', top:'50%', width:'100%' }).text('加载地图失败，请刷新重试');
                    mapContainer.append( msg );
                }else{
                    //获取承载谷歌地图的容器
                    var container = document.getElementById('mapContainer310');
                    var myLatLng = new google.maps.LatLng( 113.33254255767213,23.133158856784426);
                    var myOverLatLng = new google.maps.LatLng( 113.33254255767213,23.133158856784426);
                    //创建谷歌地图
                    var googleMap = new google.maps.Map(container,
                            {draggable : true,
                                scrollwheel : false,
                                zoom : 16,
                                streetViewControl: false,
                                center:myOverLatLng,
                                scaleControl: true,
                                mapTypeId : google.maps.MapTypeId.ROADMAP});
                    //创建标记
                    marker = new google.maps.Marker({map : googleMap,position:myLatLng,animation: google.maps.Animation.DROP,
                        draggable : true});
                    marker.setMap(googleMap);
                    var infoWin = new google.maps.InfoWindow({content:"公司地址：贵阳市云岩区北京路260号 万科公园5号<br/>联系电话：0851-85918601 &nbsp;88531170",width:"auto",height:"auto"});
                    infoWin.open(googleMap,marker);
                }
            }
        });
    </script>
</head>
<body style="margin:0px; padding:0px; font-size:12px;">
<div id="mapContainer310" style="width:780px;height:360px;"></div>
</body>
</html>