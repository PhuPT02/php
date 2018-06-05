function stralias(nguon, dich)
{
	var str = ($('#'+nguon).val()).trim();
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
	str= str.replace(/đ/g,"d");
	str= str.replace(/!|@|\$|%|\^|\*|∣|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
	str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
	str= str.replace(/^\-+|\-+$/g,"");//cắt bỏ ký tự - ở đầu và cuối chuỗi
	var des = document.getElementById(dich);
	des.value = str;
}
function openfinder(id)
{
	CKFinder.popup('../../',null,null,function(url){
		setDataCK(url,id);
	});
}
function setDataCK(url,id)
{
	$('#'+id).val(url);
	$('#img_'+id).attr('src',url);
}
function openPopup2(id)
{
   // var win = window.open("http://localhost:81/admin_4_v4/hdfinder/hdfinder.php?id="+id,"_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=0, left=0, width=1000, height=600");
        var win = window.open("http://localhost/MCV_shop_v1/admin/Teamplate/hdfinder.php?id="+id,"_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=0, left=0, width=1000, height=600");
//co dc dau de t coi dun co dut
    win.focus();
}
function SetFileField2(id, fileUrl )
{
    $('#'+id).val(fileUrl);
    var list = fileUrl.split(',');
    $('#ls_v_img_'+id).html('');
    $.each(list,function(i,url){      
         $('#ls_v_img_'+id).append('<img style="margin-right:10px" width="100" src="'+url+'"/>');  
    })
}