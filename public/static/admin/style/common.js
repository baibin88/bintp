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
                var cateimgsrc = "<img height='100' src='"+cateimgurl+"'>";
                $("#imgcat").val(img);
                $("#cateimg").html(cateimgsrc);
                $('#cateimgdiv').show();
            }else if(data.msg =='201'){
              alert(data.data.img);
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
    var content = $('#summernote').code()
    postDate = {};
    $(data).each(function(i){
      postDate[this.name] = this.value;
      postDate['content'] = content;
    })
    console.log(postDate)
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