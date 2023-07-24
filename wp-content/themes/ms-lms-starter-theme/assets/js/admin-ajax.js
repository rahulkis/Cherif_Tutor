jQuery("body").on("click", ".add_some_cus_popup", function(e) {
  jQuery('#openImagePop').css("visibility", "visible");   
});

jQuery("body").on("click", ".remove_pop_fot", function(e) {
  jQuery('#openImagePop').css("visibility", "");   
});

jQuery("body").on("click", ".choose_avatar", function(e) {
    var imgsrc = jQuery(this).attr("src");     
     jQuery('.show_img_add img').attr('src', imgsrc);
    jQuery('#show_img_add_img').val(imgsrc);
    jQuery('.show_img_add_img').val(imgsrc);
   // jQuery('.new_child_avatar').val(imgsrc);
	jQuery('.after_select_image_preview').attr('src', imgsrc);

    jQuery('#openImagePop').modal('hide');
    jQuery('#openImagePop').css("visibility", "");  
	jQuery(".close_child_avatar").removeClass
	jQuery("#select_child_avatar").removeClass("togglechildlearner");
	

}); 


jQuery(document).ready(function() {
    jQuery("#add_kids4").validate({
      rules: {
         first_name: {
            required: true,
            minlength: 2,
         },
         age: 'required',
         grade: 'required',
      },
      messages: {
       first_name: 'Please enter your kid’s name',
       age: 'Please enter your kid’s age',
       grade: 'Please enter your kid’s grade',
      },
      submitHandler: function(form) {  

            var first_name = jQuery("input[name='first_name']").val();  
            var current_user_id = jQuery("input[name='current_user_idd']").val();  
            
            var age = jQuery("select[name='age']").val();
            var grade = jQuery("select[name='grade']").val();  

            var kid_img = jQuery("input[name='show_img_add_img']").val();


         jQuery.ajax(
        {
            type: "POST",
            cache: false,
            url: ajaxurl,
            data: 'first_name=' + first_name + '&age=' + age  + '&kid_img=' + kid_img + '&grade=' + grade + '&action=addkid',
            success: function(msg){
                 
                console.log(msg);

                var kid_class = 'kid_'+msg;
                var dl_kid = 'deletekid('+current_user_id+','+msg+')';
                var edit_kid = 'editkid('+current_user_id+','+msg+')'; 

                jQuery("#dat_table tbody").prepend("<tr id="+kid_class+" class='show_data_table'><td> <img style='max-width: 100px;'' src="+kid_img+" alt=''></td><td class='tble_names'>"+first_name+"</td><td class='tble_ages'>"+age+"</td><td class='tble_grades'>"+grade+"</td><td><div class='action_div'> <span onclick="+dl_kid+" class='delTxt tble_delete'>Delete</span><span onclick="+edit_kid+" class='btn EditBtn tble_edit'>Edit</span> </div> </tr>"); 
 

                jQuery("#table_kidPrfl").css("display", "block");         
                jQuery(".add_kids4").remove();

            }
        });  
      }  

   });


    jQuery("body").on("click", ".add_kids4", function(e) {
       jQuery("#add_kids4").validate({
          rules: {
             first_name: {
                required: true,
                minlength: 2,
             },
             age: 'required',
             grade: 'required',
          },
          messages: {
           first_name: 'Please enter your kid’s name',
           age: 'Please enter your kid’s age',
           grade: 'Please enter your kid’s grade',
          },
          submitHandler: function(form) {  

                var first_name = jQuery("input[name='first_name']").val();  
                var current_user_id = jQuery("input[name='current_user_idd']").val();  
                
                var age = jQuery("select[name='age']").val();
                var grade = jQuery("select[name='grade']").val();  

                var kid_img = jQuery("input[name='show_img_add_img']").val();


             jQuery.ajax(
            {
                type: "POST",
                cache: false,
                url: ajaxurl,
                data: 'first_name=' + first_name + '&age=' + age  + '&kid_img=' + kid_img + '&grade=' + grade + '&action=addkid',
                success: function(msg){
                     
                    console.log(msg);

                    var kid_class = 'kid_'+msg;
                    var dl_kid = 'deletekid('+current_user_id+','+msg+')';
                    var edit_kid = 'editkid('+current_user_id+','+msg+')'; 

                    jQuery("#dat_table tbody").prepend("<tr id="+kid_class+" class='show_data_table'><td> <img style='max-width: 100px;'' src="+kid_img+" alt=''></td><td class='tble_names'>"+first_name+"</td><td class='tble_ages'>"+age+"</td><td class='tble_grades'>"+grade+"</td><td><div class='action_div'> <span onclick="+dl_kid+" class='delTxt tble_delete'>Delete</span><span onclick="+edit_kid+" class='btn EditBtn tble_edit'>Edit</span> </div> </tr>"); 
                    jQuery("#table_kidPrfl").css("display", "block");         
                    jQuery(".add_kids4").remove();

                }
            });  
          }  

       });
    });

    });


function deletekid(user_id, kid_id) {

    if (confirm("Are you sure?")) {
    
        jQuery.ajax(
        {
            type: "POST",
            cache: false,
            url: ajaxurl,
            data: 'user_id=' + user_id + '&kid_id=' + kid_id + '&action=delkid',
            success: function(msg){
                console.log(msg);

                jQuery("#kid_"+kid_id).remove();

                var numItems = jQuery("#dat_table > tbody > .show_data_table").length;

              
                if(numItems == "0") {

                    jQuery("#table_kidPrfl").css("display", "none");     

                    var show_form = "<form method='POST' action='' class='add_kids4' id='add_kids4'> <div class='kidsWrap'> <div class='tpRw dFlx'><div class='LftSide dFlx cmnSelect'> <div class='clw-70'>  <div class='rw0'> <input type='hidden' value='' name='current_user_id'>  <p><strong>First Name </strong></p>";   

                show_form += "<input type='text' name='first_name' id='first_name' value=''> </div>";

                show_form += "<div class='rw0'> <p><strong>Age </strong></p> <div class='select'> <select id='age' name='age'> <option value=''>Age</option>";

                for(var i=3;i<=18;i++) {
                  show_form += "<option value="+i+">"+i+"</option>";

                }

               show_form += "</select></div> </div>";

               show_form += "<div class='rw0'> <p><strong>Grade </strong></p>   <div class='select'>  <select id='grade' name='grade'>  <option value=''>Grade</option>   <option value='A GRADE'>A GRADE</option>  <option value='B GRADE''>B GRADE</option>  <option value='C GRADE'>C GRADE</option> <option value='D GRADE'>D GRADE</option>   <option value='E GRADE'>E GRADE</option>   <option value='F GRADE'>F GRADE</option>   </select>  </div> </div>  </div>";


                show_form += "<div class='clw-30'> <div class='profileImgWrp'> <div class='profileImg show_img_add'><img src='/wp-content/uploads/2023/01/pic01.png'> <input type='hidden' name='show_img_add_img' id='add_show_img_add_img' value='/wp-content/uploads/2023/01/pic01.png'></div> <div class='profileTxt'>  <button type='button' class='btn btn-info btn-lg add_some_cus_popup' data-toggle='modal' data-target='#openImagePop'>Edit</button> </div> </div> </div> </div>";

                show_form += "<div class='RghtSide'>  <div class='imgeWrp'> <img src='/wp-content/uploads/2023/02/studentImg.png' alt=''>  </div>  </div> </div>";

                show_form += "<div class='btmRw'>  <div class='clw100'> <div class='btnWrp dFlx'> <button class='btn saveLearner add_kids'>Save Learner</button>  </div>  </div> </div>  </div> </form> ";


                jQuery("#add_new_data").append(show_form);    
                        }
                    }
        });
    }    
}

 

jQuery("body").on("click", "#adddmore", function(e) {

        var show_form = "<form method='POST' action='' class='add_kids4' id='add_kids4'> <div class='kidsWrap'> <div class='tpRw dFlx'><div class='LftSide dFlx cmnSelect'> <div class='clw-70'>  <div class='rw0'> <input type='hidden' value='' name='current_user_id'>  <p><strong>First Name </strong></p>";   

        show_form += "<input type='text' name='first_name' id='first_name' value=''> </div>";

        show_form += "<div class='rw0'> <p><strong>Age </strong></p> <div class='select'> <select id='age' name='age'> <option value=''>Age</option>";

        for(var i=3;i<=18;i++) {
          show_form += "<option value="+i+">"+i+"</option>";

        }
 
       show_form += "</select></div> </div>";

       show_form += "<div class='rw0'> <p><strong>Grade </strong></p>   <div class='select'>  <select id='grade' name='grade'>  <option value=''>Grade</option>   <option value='A GRADE'>A GRADE</option>  <option value='B GRADE''>B GRADE</option>  <option value='C GRADE'>C GRADE</option> <option value='D GRADE'>D GRADE</option>   <option value='E GRADE'>E GRADE</option>   <option value='F GRADE'>F GRADE</option>   </select>  </div> </div>  </div>";


        show_form += "<div class='clw-30'> <div class='profileImgWrp'> <div class='profileImg show_img_add'><img src='/wp-content/uploads/2023/01/pic01.png'> <input type='hidden' name='show_img_add_img' id='add_show_img_add_img' value='/wp-content/uploads/2023/01/pic01.png'></div> <div class='profileTxt'>  <button type='button' class='btn btn-info btn-lg add_some_cus_popup' data-toggle='modal' data-target='#openImagePop'>Edit</button> </div> </div> </div> </div>";

        show_form += "<div class='RghtSide'>  <div class='imgeWrp'> <img src='/wp-content/uploads/2023/02/studentImg.png' alt=''>  </div>  </div> </div>";

        show_form += "<div class='btmRw'>  <div class='clw100'> <div class='btnWrp dFlx'> <button class='btn saveLearner add_kids'>Save Learner</button>  </div>  </div> </div>  </div> </form> ";


        jQuery("#add_new_data").append(show_form);

});  



function editkid(user_id, kid_id) {

    jQuery.ajax(
    {
        type: "POST",
        cache: false,
        url: ajaxurl,
        data: 'user_id=' + user_id + '&kid_id=' + kid_id + '&action=editkid',
        success: function(msg){

            jQuery("#kid_"+kid_id).css("display", "none"); 

            jQuery(".edit_kids4").css("display", "block"); 
            jQuery('select[name^="edit_age"] option:selected').attr("selected",null);
            jQuery('select[name^="edit_grade"] option:selected').attr("selected",null);
             
            var kiddata = jQuery.parseJSON(msg);
            
            var kid_class = 'kid_'+kiddata.kid_id;
            var dl_kid = 'deletekid('+kiddata.user_id+','+kiddata.kid_id+')';  


           jQuery("#edit_first_name").val(kiddata.first_name);

           jQuery('select[name^="edit_age"] option[value="'+kiddata.age+'"]').attr("selected","selected");

           jQuery('select[name^="edit_grade"] option[value="'+kiddata.grade+'"]').attr("selected","selected");
 
           jQuery("#current_kid_id").val(kiddata.kid_id);
 

           jQuery('.show_img_add img').attr('src', kiddata.kid_img);
            jQuery('#show_img_add_img').val(kiddata.kid_img);

        }
    });    

    }  

  



     




jQuery("body").on("click", ".edit_kids4", function(e) {

    jQuery("#edit_kids4").validate({
      rules: {
         edit_first_name: {
            required: true,
            minlength: 2,
         },
         edit_age: 'required',
         edit_grade: 'required',
      },
      messages: {
       edit_first_name: 'Please enter your kid’s name',
       edit_age: 'Please enter your kid’s age',
       edit_grade: 'Please enter your kid’s grade',
      },
      submitHandler: function(form) {  


        e.preventDefault();  
        var current_kid_id = jQuery("input[name='current_kid_id']").val();   
        var current_user_id = jQuery("input[name='current_user_id']").val();  
        
        var first_name = jQuery("input[name='edit_first_name']").val();
        var age = jQuery("select[name='edit_age']").val();
        var grade = jQuery("select[name='edit_grade']").val();  

        var kid_img = jQuery("input[name='show_img_add_img']").val();
 
        jQuery.ajax(
        {
            type: "POST",
            cache: false,
            url: ajaxurl,
            data: 'first_name=' + first_name + '&age=' + age + '&kid_img=' + kid_img + '&grade=' + grade + '&current_kid_id=' + current_kid_id + '&current_user_id=' + current_user_id + '&action=updatekid',
            success: function(msg){
                 
                console.log(msg);
 

                var kid_class = 'kid_'+current_kid_id;
                var dl_kid = 'deletekid('+current_user_id+','+current_kid_id+')';

                var edit_kid = 'editkid('+current_user_id+','+current_kid_id+')'; 

                

                jQuery("#"+kid_class).html("");



                //jQuery("#dat_table tbody").prepend("<tr id="+kid_class+" class='show_data_table'><td> <img style='max-width: 100px;'' src="+kid_img+" alt=''><input type='hidden' name='show_img_add_img' id='add_show_img_add_img' value='/wp-content/uploads/2023/01/pic01.png'></td><td class='tble_names'>"+first_name+"</td><td class='tble_ages'>"+age+"</td><td class='tble_grades'>"+grade+"</td><td onclick="+dl_kid+" class='delTxt tble_delete'>Delete</td><td class='btn EditBtn tble_edit'>Edit</td>  </tr>"); 
                jQuery("#"+kid_class).append("<td> <img style='max-width: 100px;'' src="+kid_img+" alt=''><input type='hidden' name='show_img_add_img' id='add_show_img_add_img' value='/wp-content/uploads/2023/01/pic01.png'></td><td class='tble_names'>"+first_name+"</td><td class='tble_ages'>"+age+"</td><td class='tble_grades'>"+grade+"</td><td><div class='action_div'> <span onclick="+dl_kid+" class='delTxt tble_delete'>Delete</span><span onclick="+edit_kid+" class='btn EditBtn tble_edit'>Edit</span> </div> </tr>"); 
                jQuery("#table_kidPrfl").css("display", "block");         
                jQuery("#"+kid_class).css("display", "table-row"); 
                jQuery(".add_kids4").remove();
                jQuery(".edit_kids4").css("display", "none"); 

            }
        });    



        }
    }); 
}); 
