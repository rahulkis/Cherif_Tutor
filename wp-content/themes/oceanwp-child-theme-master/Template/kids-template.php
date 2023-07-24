<?php
/* Template Name: kids */
get_header();
?>

<style>
.profileTxt p {
    position: absolute;
    left: 16px;
}
.profileTxt input {
    opacity: 0;
    z-index: 999;
    cursor: pointer;
}

#table_kidPrfl {
    flex-wrap: unset;
}

</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="modal fade" id="openImagePop" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select avatar</h4>
        </div>
        <div class="modal-body">
          <div class="image-check">

            <img alt="" src="https://static.outschool.com/master/main/public/images/star.8a380f6c7e4f5c48f6052a2d118159a7.png" class="image_icon ">

            <img alt="" src="https://static.outschool.com/master/main/public/images/alien.1966536aad905a5434fdea46d5be6312.png" class="image_icon ">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="fontWrp">
  <div class="yourKids pt-100 pb-100">
    <div class="container">
      <h2 class="text-center">Tell us about your kids! </h2>
      <p class="text-center">
        <strong>We’ll recommend classes they’ll love.</strong>
      </p>

      <div class="cstm_Row">
        <div class="fullRwInfo">
          <div class="saveLearnerWrp dFlx">

  <?php $user_id = get_current_user_id(); ?> 

    <input type="hidden" value="<?php echo get_current_user_id(); ?>" name="current_user_idd" >


    <?php 

    global $wpdb;
    $meta_data = $wpdb->get_results("SELECT meta_value FROM `uDO_usermeta` WHERE (`meta_key` = 'is_child_id' AND `user_id` = '".$user_id."') ORDER BY meta_value DESC");




    //echo "<pre>"; print_r($meta_data); echo "</pre>"; die;

    if(empty($meta_data)) { ?>

      <form method="POST" action="" class="add_kids4" id="add_kids4">
            <div class="kidsWrap">
              <div class="tpRw dFlx">              

                <div class="LftSide dFlx cmnSelect">
                  <div class="clw-70">
                    <div class="rw0">

<input type="hidden" value="<?php echo get_current_user_id(); ?>" name="current_user_id" >

<div class="image-check">

            <img alt="" src="https://static.outschool.com/master/main/public/images/star.8a380f6c7e4f5c48f6052a2d118159a7.png" class="image_icon choose_avatar">

            <img alt="" src="https://static.outschool.com/master/main/public/images/alien.1966536aad905a5434fdea46d5be6312.png" class="image_icon choose_avatar">

          </div>
 

                      <p><strong>First Name </strong></p>
                      <input type="text" name="first_name" id="first_name">
                      
                    </div>
                      
                    <div class="rw0">
                      <p><strong>Age </strong></p>
                      <div class="select select_age">
                        <select id="age" name="age">
                          <option value="">Age</option>
                          <?php for($i=3;$i<=18;$i++) { ?> 
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php } ?>     
                        </select>
                      </div>
                    </div>

                    <div class="rw0">
                      <p><strong>Grade </strong></p>
                      <div class="select select_grade">
                        <select id="grade" name="grade">
                          <option value="">Grade</option>
                          <option value="A GRADE">A GRADE</option>
                          <option value="B GRADE">B GRADE</option>
                          <option value="C GRADE">C GRADE</option>
                          <option value="D GRADE">D GRADE</option>
                          <option value="E GRADE">E GRADE</option>
                          <option value="F GRADE">F GRADE</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="clw-30">
                    <div class="profileImgWrp">
                      <div class="profileImg show_img_add">
                        <img src="/wp-content/uploads/2023/01/pic01.png">

                        <input type="hidden" name="show_img_add_img" id="show_img_add_img" value="/wp-content/uploads/2023/01/pic01.png">
                      </div>
                      <div class="profileTxt">

                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#openImagePop">Edit</button>

                          
                      </div>
                    </div>
                  </div>
                </div>

              <div class="RghtSide">
                <div class="imgeWrp">
                    <img src="/wp-content/uploads/2023/02/studentImg.png" alt="">
                  </div>
                </div>
              </div>

              <div class="btmRw">
                <div class="clw100 ">
                  <div class="btnWrp dFlx">
                    <button class="btn saveLearner add_kids" >Save Learner</button>
                  </div>
                </div>
              </div>            
            </div>  
          </form> 


      <div class="kidPrfl" id="table_kidPrfl" style="display: none;">
      <div class="kidPrflRw dFlx">
        <div class="leftInfo dFlx">
          <div class="iconWrp"></div>
            <div class="namecl">
            <p><strong id="names"> </strong></p>
            </div>
            <div class="agecl"> <p id="ages"></p> </div>
            <div class="agecld">  <p id="grades"></p> </div> 
        <table id="dat_table">
          <thead> 
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
          </tr>
        </thead> 

          <tbody>
             
          </tbody>

        </table>
        
        </div>
      </div>       
    </div>

     <?php  }  
       elseif(!empty($meta_data)) {
        foreach ($meta_data as $key => $valval) {
          $kid_idd = $valval->meta_value;

          $kid_first_name = get_user_meta( $kid_idd, 'first_name', true );
          $kid_age = get_user_meta( $kid_idd, 'age', true );
          $kid_grade = get_user_meta( $kid_idd, 'grade', true );
          $kid_img = get_user_meta( $kid_idd, 'kid_img', true );
          //echo "<pre>"; print_r($kid_first_name); echo "</pre>";


          if($key == "0") {
      ?>



      <div class="kidPrfl" id="table_kidPrfl"  style="display: block;">
      <div class="kidPrflRw dFlx">
        <div class="leftInfo dFlx">
          <div class="iconWrp"></div>
            <div class="namecl">
            <p><strong id="names"> </strong></p>
            </div>
            <div class="agecl"> <p id="ages"></p> </div>
            <div class="agecld">  <p id="grades"></p> </div> 
        <table id="dat_table">
          <thead> 
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
          </tr>
        </thead> 
         <tbody>
      <?php } ?>

         

            <tr id="<?php echo "kid_".$kid_idd; ?>" class='show_data_table'>

              <td> 
               <?php if(empty($kid_img))
                { ?>
                  <img style='max-width: 100px;' src='/wp-content/uploads/2023/01/pic01.png' alt=''>
                  
                <?php } else { ?>
                <img style='max-width: 100px;' src='<?php echo $kid_img; ?>' alt=''>
              <?php } ?>

            
              </td>
              
              <td class='tble_names'><?php echo $kid_first_name; ?></td>
              <td class='tble_ages'><?php echo $kid_age; ?></td>
              <td class='tble_grades'><?php echo $kid_grade; ?></td>

              <td onclick="deletekid(<?php echo get_current_user_id().','.$kid_idd; ?>)" class='delTxt tble_delete'>Delete</td>
              <td onclick="editkid(<?php echo get_current_user_id().','.$kid_idd; ?>)" class='btn EditBtn tble_edit'>Edit</td>  
            </tr> 

         <?php  } ?>    
          </tbody>

        </table>
        
        </div>
      </div>       
    </div>



          
      <?php  }  
      else { ?>





      <div class="kidPrfl" id="table_kidPrfl">
      <div class="kidPrflRw dFlx">
        <div class="leftInfo dFlx">
          <div class="iconWrp"></div>
            <div class="namecl">
            <p><strong id="names"> </strong></p>
            </div>
            <div class="agecl"> <p id="ages"></p> </div>
            <div class="agecld">  <p id="grades"></p> </div> 
        <table id="dat_table">
          <thead> 
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
          </tr>
        </thead> 

          <tbody>
             
          </tbody>

        </table>
        
        </div>
      </div>       
    </div>

  <?php  } ?>


 
 



   <form method="POST" action="" class="edit_kids4" id="edit_kids4" style="display:none;">
            <div class="kidsWrap">
              <div class="tpRw dFlx">              

                <div class="LftSide dFlx cmnSelect">
                  <div class="clw-70">
                    <div class="rw0">

<input type="hidden" value="<?php echo get_current_user_id(); ?>" name="current_user_id" >

<input type="hidden" value="" name="current_kid_id" id="current_kid_id">


                      <p><strong>First Name </strong></p>
                      <input type="text" name="edit_first_name" id="edit_first_name" value="">
                    </div>
                      
                    <div class="rw0">
                      <p><strong>Age </strong></p>
                      <div class="select">
                        <select id="edit_age" name="edit_age">
                          <option value="">Age</option>
                          <?php for($i=3;$i<=18;$i++) { ?> 
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php } ?>     
                        </select>
                      </div>
                    </div>

                    <div class="rw0">
                      <p><strong>Grade </strong></p>
                      <div class="select">
                        <select id="edit_grade" name="edit_grade">
                          <option value="">Grade</option>
                          <option value="A GRADE">A GRADE</option>
                          <option value="B GRADE">B GRADE</option>
                          <option value="C GRADE">C GRADE</option>
                          <option value="D GRADE">D GRADE</option>
                          <option value="E GRADE">E GRADE</option>
                          <option value="F GRADE">F GRADE</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="clw-30">
                    <div class="profileImgWrp">
                      <div class="profileImg">
                        <img src="/wp-content/uploads/2023/01/pic01.png">
                      </div>
                      <div class="profileTxt">
                          <input type="file" name="main_image" id="edit_main_image">
                          <p>Edit</p>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="RghtSide">
                <div class="imgeWrp">
                    <img src="/wp-content/uploads/2023/02/studentImg.png" alt="">
                  </div>
                </div>
              </div>

              <div class="btmRw">
                <div class="clw100 ">
                  <div class="btnWrp dFlx">
                    <button class="btn saveLearner edit_kids" >Save Learner</button>
                  </div>
                </div>
              </div>            
            </div>  
          </form> 


          <div id="add_new_data"><div> 



              </div>

          </div>



          



          <div class="anotherKid">
            <div class="kidadd">
                <button id="adddmore">+ Another Kid</button>
             <!-- <a href="javascript:void(0)">+ Another Kid </a>-->
            </div>
            <div class="AllDn">
              <a href="" class="btn allDOne modal-toggle5" onclick="save_all()">All Done!</a>
            </div>
          </div>

      </div>

    </div>


  </div>

  <div class="footerTp">
      <div class="container">
        <div class="InrWrp">
          <div class="fLgo">
            <a href="/"><img src="/wp-content/uploads/2023/01/logo_small.png" alt=""></a>
          </div>
          <div class="cstmFmenu">
            <ul class="dFlx">
              <li><a href="/">Home</a></li>
              <li><a href="">About Us </a></li>
              <li><a href="">Programs </a></li>
              <li><a href="">Why Choose us </a></li>
              <li><a href="">FAQ </a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
          </div>
          <h3 class="text-center">Have questions? Call us now: +1 (647) 956-1104 </h3>
          <div class="socialWrp">
            <ul class="dFlx">
              <li><a href=""><i class="fab fa-facebook"></i> </a></li>
            </ul>
          </div>
        </div>
      </div>
  </div>

</div>



 
   
 
  
  
 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

 
 <script type="text/javascript">
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>


 <script src='/wp-content/themes/oceanwp-child-theme-master/assets/js/admin-ajax.js?ver=1.1'></script>
<?php
get_footer();
?>