<?php
/* Template Name: signup */
get_header();
?>

<div class="fontWrp">

<section class="createFrmTmpWrp">
	<div id="loginFrom" class="loginFromWrp createFrm createFrmTmp">
	    <h2>Create Account</h2>
	    <div class="logInBtm">
	       <?php echo do_shortcode('[ultimatemember form_id="4615"]');?> 
	        
	        <!--<form>
	            <div class="frmRw">
	              <p>
	                <strong> Adult Full Name</strong>
	              </p>
	              <div class="frmfield">
	                <input type="text" name="" placeholder="Jane Doe">
	              </div>
	            </div>
	            <div class="frmRw">
	              <p>
	                <strong> Adult Email</strong>
	              </p>
	              <div class="frmfield">
	                <input type="email" name="" placeholder="superawesome@emailaddress.com">
	              </div>
	            </div>
	            <div class="frmRw">
	              <p>
	                <strong> Password</strong>
	              </p>
	              <div class="frmfield">
	                <input type="password" name="" placeholder="">
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="checkbox" id="html">
	              <label for="html"> Want to receive personalized recommendations and special offers? Opt out anytime.</label>
	            </div>
	            <div class="privacyRw">
	              <p>By joining, you agree to the <a target="_blank" href="">Terms of Service</a> and <a target="_blank" href="">Privacy Policy</a>. </p>
	            </div>
	            <div class="sbmtrw">
	              <input type="submit" value="Join Outschool" class="sbmtBtn">
	            </div>
	        </form>              -->
	    </div>
	</div>
</section>


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


<?php
get_footer();
?>