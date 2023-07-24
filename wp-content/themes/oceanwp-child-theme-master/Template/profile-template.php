<?php
/* Template Name: profile */
get_header();
$current_user = wp_get_current_user();
//print_r($current_user);
$user_id = get_current_user_id();
?>

<div class="fontWrp">
	
	<div class="parentWrp">

		<div class="container">

		<!-- 	<div class="WhiteRw">
				<div class="parentWrpHead text-center"><h2>Edit Profile</h2></div>
				<div class="parentWrpTop text-center">				
					<div class="clw-100">
						<h4>Complete your profile lorem ipsum dolor sit amet.</h4>
						<div class="imgWrp">
							<img src="/wp-content/uploads/2023/01/progress.png" alt="">
						</div>
						<ul>
							<li>Tell us when you can take classes </li>
						</ul>
					</div>
				</div>				
			</div>
 -->


			<?php //echo do_shortcode('[ultimatemember form_id="4617"]');?>

			<div class="prfileEdit">

				<div class="WhiteRw">

					<h3>Edit Profile</h3>
					
			<!--		<div class="rw dFlx">
						
						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Photo</h5>
							</div>
							<div class="lblInpt">
								<div class="mainImg ">
									<img src="/wp-content/uploads/2023/01/childpic1.png" alt="">
									<h4><a href="">Select photo... </a></h4>
								</div> 
							</div>	
						</div>

						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Public Profile</h5>
							</div>
							<div class="lblInpt"> 
								<h5><a href="">( preview ) </a></h5>
							</div>	
						</div>

						
					</div>-->

				

					<div class="rw dFlx">
						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>First name of parent</h5>
							</div>
							<div class="lblInpt">
								<input type="text" name="firstname" value="<?php echo esc_html( $current_user->user_firstname );?>">
							</div>	
						</div>
						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Last name of parent</h5>
							</div>
							<div class="lblInpt">
								<input type="text" name="lastname" value="<?php echo esc_html( $current_user->user_firstname );?>">
							</div>	
						</div>	
						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Email address of parent</h5>
							</div>
							<div class="lblInpt">
								<input type="email" name="email" value="<?php echo esc_html( $current_user->user_email );?>">
							</div>	
						</div>
					<!--	<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Name of student</h5>
							</div>
							<div class="lblInpt">
								<input type="text" name="">
							</div>	
						</div>	

						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Age of student</h5>
							</div>
							<div class="lblInpt">
								<div class="selectCstm">
								  <select>
								    <option value="">Select Age</option>
								    <option value="3">3</option>
								    <option value="4">4</option>
								  </select>
								</div>
							</div>
						</div>
-->
						<div class="clwHalf">
							<div class="lblTxt"> 
								<h5>Visibility</h5>				
							</div>
							<div class="lblInpt">
								<div class="form-group">
							      <input type="checkbox" id="parentsee">
							      <label for="parentsee">Classmates and their parents can see my name as "An parent"</label>
							    </div> 
							</div>	
						</div>

						<div class="clwFull">							
							<div class="lblTxt"> 
								<h5>About Me</h5>	
								<p>Introduce yourself to other parents and teachers. What is your family’s approach to learning? </p>			
							</div>
							<div class="lblInpt">
								<textarea name="">
									
								</textarea> 
							</div>
						</div>

					</div>
				</div>


 			<!--	<div class="WhiteRw">
 					<h3>Global Settings</h3>

 					<div class="rw dFlx">
 						<div class="clwHalf">
 							<div class="lblTxt"> 
								<h5>Language</h5>							
							</div>
							<div class="lblInpt">
								<div class="selectCstm language">
								  <select>
								    <option value="1">Select a language...</option>
								    <option value="2">English</option>
								    <option value="3">한국어</option>
								  </select>
								</div>
								<p>The default language used for emails. </p>
							</div>
 						</div>	

 						<div class="clwHalf">
 							<div class="lblTxt"> 
								<h5>Time Zone</h5>							
							</div>
							<div class="lblInpt">
								<div class="selectCstm timeZone">
								  <select>
								    <option value="1">(UTC-5) East-Indiana</option>
								    <option value="2">(UTC-5) Eastern</option>
								    <option value="3">(UTC-6) Central</option>
								  </select>
								</div>
							</div>
 						</div>

 						<div class="clwFull">
 							<div class="lblTxt"> 
								<h5>Location</h5>							
							</div>
							<div class="lblInpt">
								<input type="text" name="" placeholder="Zip code or City, State">
							</div>	
 						</div>
					</div>	

				</div>
-->
				<div class="WhiteRw">

					<h3>Learner Preferences</h3>
					<p>Please fill these out, to help us emphasize the best classes for you.</p>

					<div class="rw dFlx">
						<div class="clwFull"> 
							<h5>My Learners</h5>	
							<p>We'll show you classes that match your learner ages. Learner names are only shared with teachers and classmates after you enroll in a class.</p>						
						</div>

						<div class="clwFull">
						    <?php $args=array(
    'post_type' => 'learners',
    'posts_per_page' => -1,
    'author' => $user_id
);                       

$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); ?>
							<div class="myLearner dFlx">
								<div class="myLearnerInfo">
									<div class="RwLearn dFlx">
										<div class="ChldPic"><img src="/wp-content/uploads/2023/01/childpic-1.png" alt=""></div>
										<div class="ChldNme"><?php the_title();?></div>
										<div class="ChldAge">Age <?php echo get_field('age_learner');?> </div>
									</div>
									
								</div>
								<div class="myLearnerDelete ">
									<div class="myLearnerRw dFlx">
									<!--	<div class="edt">
											<img src="/wp-content/uploads/2023/01/edit-1.png" alt="">
										</div>
										<div class="dlt">
											<img src="/wp-content/uploads/2023/01/del.png" alt="">
										</div>-->
									</div>							
								</div>
							</div>
							
							<?php endwhile; ?>
							<div class="btnWrp">
								<a href="/learner/" class="newBtn01">+ Add learner...</a>
							</div>
						</div>	


					<!--	<div class="clwFull">
							<div class="lblTxt"> 
								<h5>Restrict access to your space</h5>					
							</div>
							<div class="lblInpt">
								<div class="form-group">
							      <input type="checkbox" id="Classmates">
							      <label for="Classmates">Classmates and their parents can see my name as "An parent"</label>
							    </div> 
							</div>								
						</div>-->

					<!--	<div class="clwFull">
							<div class="lblTxt"> 
								<h5>Preferred times</h5>					
							</div>
							<div class="lblInpt">
								<div class="form-group">
							      <input type="checkbox" id="Classmates1">
							      <label for="Classmates1">During school hours</label>
							    </div> 
							    <div class="form-group">
							      <input type="checkbox" id="Classmates2">
							      <label for="Classmates2">After school and evenings</label>
							    </div> 
							    <div class="form-group">
							      <input type="checkbox" id="Classmates3">
							      <label for="Classmates3">Weekends</label>
							    </div> 							  
							</div>										
						</div>-->					

					</div>
				</div>

		
				<div class="WhiteRw ">

					<h3>Private Settings</h3>

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>How did you hear about us?</h5>					
						</div>
						<div class="clw-70">
							<div class="selectCstm">
							  <select>
							    <option value="1">Online</option>
							    <option value="2">From a friend</option>
							    <option value="3">Others</option>
							  </select>
							</div>
						</div>	
					</div>

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Education Approach</h5>					
						</div>
						<div class="clw-70">
							<div class="selectCstm">
							  <select>
							    <option value="1">Local public/charter school</option>
							    <option value="2">Local private/parochial school</option>
							    <option value="3">Others</option>
							  </select>
							</div>
						</div>	
					</div>

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Phone</h5>				
							<p>For customer support. We won't share it with anyone else.</p>	
						</div>
						<div class="clw-70">
							<input type="text" name="">
						</div>	
					</div>				

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Primary Email</h5>				
							<p>You will receive all email notifications here.</p>	
						</div>
						<div class="clw-70">
							<input type="email" name="">
						</div>	
					</div>
					
					<!---<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Other Emails</h5>				
							<p>These emails may be used to sign in, but you will NOT receive notifications.</p>	
						</div>
						<div class="clw-70">
							<button class="addmailId">+ Add another email</button>
						</div>	
					</div>-->

				<!--	<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Email Settings</h5>		
						</div>
						<div class="clw-70">
							<a href="">Choose which emails you will receive</a>
						</div>	
					</div>

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Password</h5>		
						</div>
						<div class="clw-70">
							<a href="">Change your password</a>
						</div>	
					</div>-->

				<!--	<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Payment Methods</h5>
							<p>Add or remove a payment method from your account.</p>		
						</div>
						<div class="clw-70">
							<a href="">Manage payment methods</a>
						</div>	
					</div>

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Credits</h5>
							<p>Earn or redeem credits.</p>		
						</div>
						<div class="clw-70">
							<span class="yrp">$0</span>
							<a href="">See your purchases</a>
						</div>	
					</div>

					<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Referral Code</h5>
							<p>Add the email or code of the user that referred you.</p>		
						</div>
						<div class="clw-70">
							<p><strong> Referrer: None</strong></p>
							<div class="rfrw dFlx">
								<span class="inpRw">
									<input type="text" name="">	
								</span>
								<button class="rfrbtn">Update Referrer</button>
							</div>
						</div>	
					</div>-->

				<!--	<div class="rw dFlx">
						<div class="clw-30"> 						
						</div>
						<div class="clw-70">
							<p>Do you have multiple accounts? <a href="">Merge accounts</a></p>
						</div>	
					</div>-->

				<!--	<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Facebook</h5>											
						</div>
						<div class="clw-70">
							<p>Link your Facebook account to log in easily from any device.</p>
							<div class="fbbtnWrp">
								<a href="" class="btnCstm">
									<span class="icnWrp">						
										<img src="/wp-content/uploads/2023/01/fbcon-1.png" alt="">
									</span> 
									<span>Continue with Facebook  </span>
								</a>
							</div>
						</div>	
					</div>-->

				<!--	<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Google</h5>											
						</div>
						<div class="clw-70">
							<p>Your Google account is linked and you may use it to log in.</p>
						 <div class="GbtnWrp">
								<a href="/wp-login.php?loginSocial=google" class="btnCstm">
									<span class="icnWrp">
										<img src="/wp-content/uploads/2023/01/gcon.png" alt="">
			 						</span> 
			 						<span>Continue with Google  </span>
		 						</a>
							</div> 
						</div>	
					</div>-->

					<!--<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Apple</h5>											
						</div>
						<div class="clw-70">
							<p>Link your Apple account to log in easily from any device.</p>
							<div class="AbtnWrp">
								<a href="" class="btnCstm">
									<span class="icnWrp">							
										<img src="/wp-content/uploads/2023/01/aplcon-1-1.png" alt="">
									</span>
									<span>Continue with Apple </span>
								</a>
							</div>
						</div>	
					</div>
-->
				<!--	<div class="rw dFlx">
						<div class="clw-30"> 
							<h5>Personalized Ads</h5>											
						</div>
						<div class="clw-70">
							<p>We can share information to our third party partners about the classes that YOU express an interest in so that we may show you more relevant classes as ads on other web pages.</p>
							<div class="sharePreferance dFlx">
								<p>Share my preferences</p>
								<a href="">Edit</a>
							</div>
						</div>	
					</div>	-->

				</div>


			<!-- 	<div class="sepa">
					<div class="brd"></div>
				</div> -->				


				<div class="logoutRw">
					<a href="<?php echo wp_logout_url( home_url() ); ?>" class="newBtn01">Log out </a>
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


<?php
get_footer();
?>