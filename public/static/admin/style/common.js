    //栏目上传图片方法
    function upload(){
        var url = SCOPE.upimg_url;
        var cateurl = SCOPE.cateurl;
        $("#imgFile").click();
        $("#imgFile").unbind().change(function(){
        var formData = new FormData();
        formData.append('file',this.files[0]);
        $.ajax({
          url:url,
          type:'POST',
          cache:false,
          data:formData,
          processData:false,
          contentType:false,
          success:function(data){
            if(data.msg=='200'){
                var cateimgurl = cateurl+"/uploads/cateimg/"+data.img;
                var img = data.img;
                var cateimgsrc = "<img height='100' src='"+cateimgurl+"' id='catimga'/>";
                $("#imgcat").val(img);
                $("#cateimg").html(cateimgsrc);
                $('#cateimgdiv').show();
            }else if(data.msg =='201'){
                dialog.error(data.img);
            }
          },
          error:function(data){
          }
        })
    })
  }
  //提交数据
  function cate_save_button(){
    var data = $('#cat_add').serializeArray();
    // var content = $('#summernote').code()
    postDate = {};
    $(data).each(function(i){
      postDate[this.name] = this.value;
      // postDate['content'] = content;
    })
    // console.log(postDate)
    var url = SCOPE.cate_addurl;
    var lsturl = SCOPE.cate_lsturl;
    $.post(url,postDate,function(data){
      if(data.msg=='200'){
        dialog.success(data.text,lsturl);
      }else if(data.msg =='201'){
        dialog.error(data.text);
      }else if(data.msg =='202'){
        dialog.error(data.text);
      }
    })

  }
  //栏目显示和隐藏
  function cate_ststus(obj,id){
    var url  = SCOPE.status_url;
    var data = {cateid:id};
    $.post(url,data,function(data){
      if(data.msg ==200){
        $(obj).attr("class","btn btn-danger btn-sm shiny");
        $(obj).text('隐藏');
      }else if(data.msg==201){
        $(obj).attr("class","btn btn-primary btn-sm shiny");
        $(obj).text('显示');
      }
    })
  }
  //排序
 //  $(document).on('blur','#catesort',function(){
 //    var sort = $(this).val();
 //    var id = $(this).attr('data_id');
 //
 //    $.post(url,data,function(data){
 //      if(data.msg == 200){
 //        dialog.toconfirm(data.text);
 //      }else if(data.msg == 201){
 //        dialog.error(data.text);
 //      }else if(data.msg == 202){
 //        dialog.error(data.text);
 //      }
 //    })
 //
 // })
  //栏目全选处理
$(document).on('click','#checkall',function(){
    if($('#checkall').attr('checked')){
      // $('.colred-blue').removeAttr('checked');
      $('.colred-blue').attr('checked',false);
    }else{
      $('.colred-blue').attr('checked',true);
    }
})
//栏目删除
function cateDel(id){
    var url = SCOPE.catedel_url;
    var cateurl = SCOPE.index_url;
    var data = {cateid:id};
    $.post(url,data,function(data){
       if(data.msg ==200){
          dialog.success(data.text,cateurl);
       }else{
        dialog.error(data.text);
       }
    });
}
//批量删除
function button_del(){
  var data = new Array();
  var srt = new Array();
  $('input[name="itm[]"]').each(function(i){
    data[i]= $(this).val();
    srt = JSON.stringify(data)
  })
  if($('#checkall').attr('checked')){
      var url = SCOPE.catedel_url;
      var cateurl = SCOPE.index_url;
      var obj = {srt:srt};
      $.post(url,obj,function(data){
        if(data.msg ==200){
          dialog.success(data.text,cateurl);
        }else{
          dialog.error(data.text);
        }
      })
    }

}
//栏目的图片
    function delload() {
        var imgurl = $('#imgcat').val();
        var id = $('#imgcat').attr('data-id');
        if(!imgurl){
            dialog.error('请上传图片'); return;
        }
        var url = SCOPE.cate_delimg;
        var data = {imgurl:imgurl,id:id};
        $.post(url,data,function (data) {
            if(data.msg =='200'){
                $('#imgcat').val('');
                $('#catimga').attr('src','');
                dialog.toconfirm('撤销成功');
            }else{
                dialog.error('撤销失败');
            }
        });
    }
