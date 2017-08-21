//课程报名
$(function(){
	//课程报名表单提交事件
	var options = {  
        success:_responseBaoming,  //处理完成 
        dataType:'json'  
    };  
    $('#baomingForm,#baomingForm2,#baomingFormZoom').submit(function() {
        $('button[type=submit]', this).attr('disabled', true);
        $(this).ajaxSubmit(options);
        return false;	// !!! Important !!! 
    });
});
function _responseBaoming(data, statusText){
	if(data.status == 1){	//提交成功
		alert('您好，报名信息提交成功，请等待咨询老师的回复!');
		$('#baomingFormZoom .close-alert').click();	//关闭报名弹出窗（如果有）
	}else{
		$('button[type=submit]').attr('disabled', false);
		alert(data.info);
	}
}