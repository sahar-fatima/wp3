<form method="post" action="">
  <?php if( function_exists( 'wp_nonce_field' )) wp_nonce_field( 'piereg_wp_invitation_code_nonce','piereg_invitation_code_nonce'); ?>
  <ul class="bg-white clearfix invite-form">
      <li class="clearfix">
        <div class="fields">
          <div  class="cols-2">
            <h3>
              <?php _e("Insert Codes","pie-register");?>
            </h3>
          </div><!-- cols-3 -->
          <div class="cols-3">
            <textarea id="piereg_codepass" name="piereg_codepass"><?php echo (isset($this->pie_post_array['piereg_codepass'])?$this->pie_post_array['piereg_codepass']:''); ?></textarea>
             <span style="text-align:left;" class="note pie_usage_note">
            <?php _e("Each Code will be on a Separate Line. Special Characters are not allowed.","pie-register");?>
            </span>
          </div><!-- cols-3 -->
        </div>
      </li>
      <li class="clearfix code_usageItem">
        <div class="fields">
          <div class="cols-2">
            <h3>
              <?php _e("Usage","pie-register");?>
            </h3>
          </div><!-- cols-3 -->
          <div class="cols-3">
            <input style="float:left;" value="<?php echo (isset($this->pie_post_array['invitation_code_usage'])?$this->pie_post_array['invitation_code_usage']:''); ?>" type="text" id="invitation_code_usage" name="invitation_code_usage" class="input_fields2" />
            <span style="text-align:left;" class="note pie_usage_note">
            <?php _e("Number of times a single code can be used to register.","pie-register");?>
            </span>
          </div><!-- cols-3 -->
           </div>
      </li>
      <li class="clearfix code_expiryDate">
        <div class="fields">
          <div class="cols-2">
            <h3>
              <?php _e("Expiry Date","pie-register");?>
            </h3>
          </div><!-- cols-3 -->
          <div class="cols-3">
            <?php if($this->piereg_pro_is_activate ){ ?>
              <?php 
                if(isset($this->pie_post_array['invitation_expiry_date'])){
                    $expiry = strtotime($this->pie_post_array['invitation_expiry_date']);
                    $dateNow = strtotime('now');
                    if($expiry < $dateNow){
                      $expiry = 'YYYY-MM-DD';  
                    } else {
                      $expiry = $this->pie_post_array['invitation_expiry_date'];  
                    }
                } else {
                    $expiry = 'YYYY-MM-DD';
                }

               ?>
              <input style="float:left;" autocomplete="off" value="<?php echo $expiry; ?>" type="text" name="invitation_expiry_date" class="input_fields2 expiry_datepicker date_start">
              <span style="text-align:left;" class="note pie_usage_note" style="color:red;">
                    <?php _e("Define invitation code expiry date here. Leaving it empty means that the invitation code will never expire.","pie-register");?>
                </span>
            <?php } else { ?>
                <input style="float:left;" autocomplete="off" value="YYYY-MM-DD" type="text" id="invitation_expiry_date" class="input_fields2" disabled="">
                <span style="text-align:left;" class="note pie_usage_note" style="color:red;">
                    <?php _e("Define invitation code expiry date here. Leaving it empty means that the invitation code will never expire. (Available in PRO version.)","pie-register");?>
                </span>
            <?php } ?>
          </div><!-- cols-3 -->
           </div>
      </li>
    
    <li class="clearfix">
      <div class="fields fields_submitbtn">
        <div class="cols-2">&nbsp;</div><!-- cols-3 -->
        <div class="cols-3 text-right">
          <input name="add_code" class="submit_btn" value="<?php _e('Add Code','pie-register');?>" type="submit" />
        </div><!-- cols-3 -->
      </div>
    </li>

  </ul>
</form>