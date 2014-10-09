$(document).ready(function(){
    
    $('.button_delete').click(function() {
        var act = ($(this).attr('act'));
        var title = ($(this).attr('title'));
        bootbox.dialog(title, [{
        "label"     : "Ya",
        "class"     : "btn-danger",
        "icon"      : "icon-trash icon-white",
        "callback"  : function() {
            window.location.replace(act);
        }
    }, {
        "label"     : "Tidak",
        "class"     : "btn-success",
        "icon"      : "icon-repeat icon-white",
    }],{
        backdrop    : false,
        show        : true
    });
});

$('.button_reset').click(function() {
        var act = ($(this).attr('act'));
        var title = ($(this).attr('title'));
        bootbox.dialog(title, [{
        "label"     : "Ya",
        "class"     : "btn-danger",
        "icon"      : "icon-trash icon-white",
        "callback"  : function() {
            window.location.replace(act);
        }
    }, {
        "label"     : "Tidak",
        "class"     : "btn-success",
        "icon"      : "icon-repeat icon-white",
    }],{
        backdrop    : false,
        show        : true,
        className   : "myModal"
    });
});


$('.viewpop').click(function() {
        var rel = ($(this).attr('rel'));
        var jns = ($(this).attr('jns'));
        if(jns=='.jpg'||jns=='.png'||jns=='.jpeg'||jns=='.bmp'||jns=='.gif'||jns=='.tiff'){
            src = '<img src='+rel+'>';
        }else if(jns=='.xls'||jns=='.xlsx'){
            baseurl=$('#baseurl').html();
            src = '<img src="'+baseurl+'/uploads/excel.jpg">';   
        }else if(jns=='.doc'||jns=='.docx'){
            baseurl=$('#baseurl').html();
            src = '<img src="'+baseurl+'/uploads/word.jpg">';    
        }else{
            src = '<iframe src='+rel+' width="100%" height="400" frameborder=0></frame>';
        }
        
        bootbox.dialog(src, [{
        "label"     : "Print",
        "class"     : "btn-success",
        "icon"      : "icon-print icon-white",
        "callback"  : function() {
            window.open(rel);
        }
    }, {
        "label"     : "Close",
        "class"     : "btn-danger",
        "icon"      : "icon-remove-sign icon-white", 
    }],{
        backdrop    : true,
        show        : true,
        className   : "myModal"
    });
});

$('.viewpopadmin').click(function() {
        var rel = ($(this).attr('rel'));
        var jns = ($(this).attr('jns'));
        if(jns=='.jpg'||jns=='.png'||jns=='.jpeg'){
            src = '<img src='+rel+'>';
        }else if(jns=='.xls'||jns=='.xlsx'){
            baseurl=$('#baseurl').html();
            src = '<img src="'+baseurl+'/uploads/excel.jpg">';    
        }else{
            src = '<iframe src='+rel+' width="100%" height="400" frameborder=0></frame>';
        }
        bootbox.dialog(src, [{
        "label"     : "Print",
        "class"     : "btn-success",
        "icon"      : "icon-print icon-white",
        "callback"  : function() {
            window.open(rel);
        }
    }, {
        "label"     : "Close",
        "class"     : "btn-warning",
        "icon"      : "icon-remove-sign icon-white", 
    },{
        "label"     : "Delete",
        "class"     : "btn-danger",
        "icon"      : "icon-print icon-white",
        "callback"  : function() {
            bootbox.dialog('<strong>PERHATIAN : </strong> Anda yakin untuk menghapus file <u>'+rel +'</u> ?', [{
                "label"     : "Ya",
                "class"     : "btn-danger",
                "icon"      : "icon-trash icon-white",
                "callback"  : function() {
                    var a = rel.split('uploads');
                    //alert(a[1]);
                    //return;
                    window.location.replace(a[0]+'index.php/pegawai_c/delete_file/?f='+a[1]);
                    }
                }, {
                "label"     : "Tidak",
                "class"     : "btn-success",
                "icon"      : "icon-repeat icon-white",
                }],{
                backdrop    : true,
                show        : true
            });
        }
    }],{
        backdrop    : false,
        show        : true,
        className   : "myModal",
        title       : "Judulnya"
    });
});

    $('#cbskpd').select2();
    $("#tagama,#tstatus,#tgol,#tstatpeg,#tpendidikan,#tjurusan,#tjeniskel,#tskpd").select2();

    $("#cbskpd").change(function(){
        var id_skpd = $("#cbskpd").val();
        var act = ($(this).attr('act'))+"/"+id_skpd;
        window.location.replace(act);
    })

}); 