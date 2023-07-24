<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * 
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */



get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="fontWrp">
	<section class="prdDtails pt-50 pb-50 text-center">
			<div class="container">
					<div class="inrWrp ">
						<div class="tstlink">
							<a href=""><span class="langcl"><i class="fa fa-language" aria-hidden="true"></i></span> World Languages </a>
						</div>
						<h1><?php the_title();?></h1>
						<!-- <div class="prdDtailsCrs"> <p>Ongoing Course <i class="fa fa-question-circle-o" aria-hidden="true"></i></p> </div> -->
					</div>
			</div>	
	</section>


	<section class="ClassTopSec pt-50">
		<div class="container">
			

			<div class="inrWrp dFlx">		
				<div class="classtpRght">
					<div id="light" class="videoWrapPop">
					    <a class="boxclose" id="boxclose" onclick="lightbox_close();"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/close-menu.png" alt=""></a>
					    <div class="videobxWrap">
					    	<h2>About Conversational Spanish Club (Zero Experience with Spanish) (A0 Level)</h2>
					    	 <video id="VisaChipCardVideo" width="100%" height="100%" controls >
						        <source src="<?php echo get_field('video_url');?>" type="video/mp4">
						        <!--Browser does not support <video> tag -->
						    </video>
					    </div>				  
					</div>
					<div id="fade" onClick="lightbox_close();">x</div>
					<div class="icons">
					   <a href="#" class="" onclick="lightbox_open();"> 
					   		<div class="clkImg">
								<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/stud.jpg" alt="">				   			
					   		</div>
					   </a>
					</div>
				</div>

				<div class="classtpLft">
				<?php the_content();?>
				<!-- 	<div class="othrCls dFlx">
						<a href="" class="dFlx">
							<div class="icnWrp">
								<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/schl.png" alt="">
							</div>
							<p>TruFluency Kids! Spanish Immersion Online</p>	
						</a>					
					</div>
					<div class="strw1 dFlx">
						<div class="strw1star ">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/starR.png" alt="">
						</div>
						<p><strong>262 total reviews for this teacher</strong></p>
					</div> -->
					<!-- <div class="strw1 dFlx">
						<div class="strw1star ">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/starR.png" alt="">
						</div>
						<p><strong>Completed by 112 learners</strong></p>
					</div> -->
					<!-- <div class="crscomplt">
						<p><strong>Completed by 112 learners</strong></p>
					</div> -->

					<div class="classSchdl dFlx">
						<div class="btnclw">
							<a href="" class="newBtn01">See Class Schedule <i class="fa fa-angle-right"></i></a>
						</div>
						<!-- <div class="saveBtn"><i class="fa fa-heart-o" aria-hidden="true"></i> <strong>Save</strong></div> -->
						<div class="ShareBtn"><i class="fa fa-share" aria-hidden="true"></i> <strong>Share </strong></div>
					</div>
				</div>

			</div>

	        <div class="ongoingCrs dFlx">

	        	<div class="ongoingCrsRght text-center">
	        		<div class="eachLear">
	        			<h2><?php echo get_post_meta( get_the_ID(), '_price', true ); ?> <span> INR</span> </h2>
	        			<p><?php echo get_post_meta( get_the_ID(), '_price', true ); ?>/class for each learner </p>
	        		</div>
	        	</div> 

	        	<div class="ongoingCrsLft dFlx">
	        		<div class="ongoingCrsWrp dFlx">
	        			<div class="iconWrp">
	        				<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/1-1-1.png" alt="">
	        			</div>
	        			<div class="ongoingInfo dFlx">
	        				<h3>Ongoing Course </h3>		
	        			</div>        		
	        		</div>
	        		<div class="ongoingCrsWrp dFlx">
	        			<div class="iconWrp">
	        				<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/4-1-1.png" alt="">
	        			</div>
	        			<div class="ongoingInfo dFlx">
	    	    			<h3><?php echo get_field('time_per_class');?> </h3> <p>per class</p>
		        		</div>
	        		</div>
	        		<div class="ongoingCrsWrp dFlx">
	        			<div class="iconWrp">
	        				<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/2-1-1.png" alt="">
	        			</div>
	        			<div class="ongoingInfo dFlx">
	        				<h3><?php echo get_field('meet_time_per_week');?> </h3> <p>every week</p>
	        			</div>
	        		</div>
	        		<div class="ongoingCrsWrp dFlx">
	        			<div class="iconWrp">
	        				<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/5-1-1.png" alt="">
	        			</div>
	        			<div class="ongoingInfo dFlx">
	    	    			<h3><?php echo get_field('age_range_class');?> </h3> <p>year old learners</p>
		        		</div>
	        		</div>
	        		<div class="ongoingCrsWrp dFlx">
	        			<div class="iconWrp">
	        				<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/3-1-1.png" alt="">
	        			</div>
	        			<div class="ongoingInfo dFlx">
	    	    			<h3><?php echo get_field('how_many_learner_per_class');?> </h3> <p>learners per class</p>
		        		</div>
	        		</div>        	
	        	
	        	</div>
	        	       	
	        </div>

		</div>	
	</section>


	<section class="availablTime">
		<div class="container">
			<h2 class="text-center">Available Times </h2>
		<!-- 	<ul class="tZone dFlx">
				<li><i class="fa fa-globe" aria-hidden="true"></i> Malaysia Time</li>
				<li><i class="fa fa-globe" aria-hidden="true"></i>  This teacher may live in a different time zone.</li>
			</ul> -->

			<div class="abailablTimeSldrWrp">
				<div class="abailablSldr owl-carousel">
					<div class="item">
						<div class="ItmWrp"> 
							<h3>Weekly Subscription</h3>
							<ul class="clsTime">
								<li><i aria-hidden="true" class="fas fa-check"></i> Meets Once per week</li>
								<li><i aria-hidden="true" class="fas fa-check"></i> Fridays</li>
								<li><i aria-hidden="true" class="fas fa-check"></i> 10:00 – 10:50 PM </li>								
							</ul>
							<div class="lTime">Outside 6 AM – 10 PM  in your local time. </div>
							<div class="shwMt">
								<!--<p><strong>Show All Meetings <i class="fa fa-angle-down" aria-hidden="true"></i> </strong></p>-->
							</div>
							<div class="sbscrb">
								<span class="sbscrbBtn"><a href="/?add-to-cart=7048">Subscribe</a></span>
							</div>
						</div>					
					</div>
			

				</div>
			</div>

		<!-- 	<div class="ranthr text-center">
				<h3>Don't see what you're looking for? </h3>

				<div class="btnWrp dFlx">
					<a href="" class="RbTn">Request Another Time </a>
					<a href="" class="RbTn">Request a Private Class </a>
				</div>			
			</div> -->

		</div>
	</section>

	<section class="descrptionWrp pt-60 pb-50">
		<div class="container">
			<h2 class="text-center">Description </h2>

			<div class="expandP">
			    <h3>Class Experience</h3>
		      	<div class="readmore">
			      <h6>WHO SHOULD BE IN THIS CLASS?</h6>
			      <p>- a student who has never taken any Spanish or less than 1 semester. </p>
				  <p>- a student who has taken less than 30 hours of Spanish class</p>
				  <p>- a student who has taken less than 1 semester of Spanish over 6 months ago and wants to start from the beginning</p>
				  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore magnam, nobis consequuntur nemo cupiditate vel sit ducimus quisquam quaerat sint officia ad voluptas beatae eveniet. Aliquam aspernatur nulla cupiditate reiciendis ut? Illum odio id odit? Tempore, ea itaque illum laborum quasi, explicabo amet veritatis corporis dolorem minus commodi? Esse repudiandae nam eligendi fugit, architecto quam! Nostrum dolores nisi nulla repudiandae sed tempora impedit quaerat voluptatem itaque suscipit. Placeat adipisci, eius maiores blanditiis possimus culpa? Laudantium officia, nulla repellat rerum tenetur esse quos perferendis. Omnis corporis sequi, recusandae culpa quibusdam doloremque fugiat consectetur beatae quis illo accusamus vero odit, architecto et.</p>
			      <span class="readmore-link"></span>   
			    </div> 
			</div>


			<div class="acc-container">  
			  <div class="acc">
				    <div class="acc-head">
				      <p>Learning Goals</p>
				    </div>
				  <div class="acc-content">
				    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore magnam, nobis consequuntur nemo cupiditate vel sit ducimus quisquam quaerat sint officia ad voluptas consectetur beatae quis illo accusamus vero odit, architecto et.</p>
				  </div>
				</div>

			  <div class="acc">
			    <div class="acc-head">
			      <p>External Resources</p>
			    </div>
			    <div class="acc-content">
			      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore magnam, nobis consequuntur nemo cupiditate vel sit ducimus quisquam quaerat sint officia ad voluptas beatae eveniet. Aliquam aspernatur nulla cupiditate reiciendis ut? Illum odio id odit? Tempore, ea itaque illum laborum quasi, explicabo amet veritatis corporis dolorem minus commodi? Esse repudiandae nam eligendi fugit, architecto quam! Nostrum dolores nisi nulla repudiandae sed tempora impedit quaerat voluptatem itaque suscipit. Placeat adipisci, eius maiores blanditiis possimus culpa? Laudantium officia, nulla repellat rerum tenetur esse quos perferendis. Omnis corporis sequi, recusandae culpa quibusdam doloremque fugiat consectetur beatae quis illo accusamus vero odit, architecto et.</p>
			    </div>
			  </div>

			  <div class="acc">
			    <div class="acc-head">
			      <p>Progress</p>
			    </div>
			    <div class="acc-content">
			      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. doloremque fugiat consectetur beatae quis illo accusamus vero odit, architecto et.</p>
			    </div>
			  </div>

			  <div class="acc">
			    <div class="acc-head">
			      <p>Time Commitment</p>
			    </div>
			    <div class="acc-content">
			        <p>Lorem ipsum, dolor sit amet consectetur am, nobis consequuntur nemo cupiditate vel sit ducimus quisquam quaerat sint officia ad voluptas beatae eveniet. Aliquam aspernatur nulla cupiditate reiciendis ut? Illum odio id odit? Tempore, ea itaque illum laborum quasi, explicabo amet veritatis corporis dolorem minus commodi? Esse repudiandae nam eligendi fugit, architecto quam! Nostrum dolores nisi nulla repudiandae sed tempora impedit quaerat voluptatem itaque suscipit. Placeat adipisci, eius maiores blanditiis possimus culpa? Laudantium officia, nulla repellat rerum tenetur esse quos perferendis. Omnis corporis sequi, recusandae culpa quibusdam doloremque fugiat consectetur beatae quis illo accusamus vero odit, architecto et.</p>
			    </div>
			  </div>
			</div>			
		</div>
	</section>


	<section class="rViewWrp pt-60 pb-60">
		<div class="container">
			<h2 class="text-center">Reviews </h2>
			<ul class="all-post">

			  <li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

				<li class="post-list">
					<div class="testimonial-head">
		          <h6>Steve Mc Donald</h6>		                           
		       </div>
		       <div class="testimonial-content">
		          <p>Ms. Meg is the BEST!  Fun, patient, informative, kid-focused.  A true educator!  Thank you for everything you do, Ms. Meg!</p>
		       </div>
				</li>

			</ul>

			<div class="text-center">
			  <a href="javascript:void(0)" id="loadMore" class="load-more">View more</a>
			</div>
		</div>
	</section>

<!--	<section class="popTopics pt-60">
		<div class="container text-center">
			<h2>Popular Topics</h2>
			<div class="inrWrp">
				<ul class="dFlx popTpcWrp">
					<li><a href="">Drawing </a></li>
					<li><a href="">Gaming </a></li>
					<li><a href="">Dance </a></li>
					<li><a href="">Art </a></li>
					<li><a href="">Escape Rooms </a></li>
					<li><a href="">Singing </a></li>
				</ul>
			</div>
		</div>
	</section>-->

	<section class="allClasses">
		<div class="startIn24 ">
			<div class="container">
				<h2 class="text-center"> 
					Starting within 24 hours
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course01 cmnSlider">
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image01.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image02.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image03.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image04.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image05.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					 </div>						
				</div>	
			</div>		
		</div>
		<div class="socialTime pt-50">
			<div class="container">
				<h2 class="text-center"> 
					Weekly Clubs and Social Time
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course02 cmnSlider">
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image01.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image02.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image03.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image04.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image05.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					 </div>						
				</div>	

				<div class="btnWrp">
					<a href="" class="newBtn"> Browse Weekly Clubs</a>
				</div>
			</div>		
		</div>	
		<div class="twentyBCrs pt-50">
			<div class="container">
				<h2 class="text-center"> 
					Classes under $20
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course03 cmnSlider">
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image01.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image02.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image03.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image04.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image05.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					 </div>						
				</div>	

			</div>		
		</div>
		<div class="poppularClass pt-50">
			<div class="container">
				<h2 class="text-center"> 
					Popular Classes
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course04 cmnSlider">
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image01.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image02.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image03.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image04.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    <div class="item">
						    <div class="slidItem">
								<a href="" class="crseItem">
									<div class="topImg">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image05.jpg" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
												<div class="rateInfo">
													<span class="points"><strong>4.56 </strong></span>
													<span class="Nmbrs"><strong>(25) </strong></span>
												</div>											
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
										</div>

										<div class="tutrInfo dFlx">
											<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>
											<span class="qlfy">Meg Billings, B.S.Ed.</span>
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong>4-6</strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>₹814</strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					 </div>						
				</div>	

			</div>		
		</div>
	</section>

<!-- 	<section class="recentView pb-50 pt-50">
		<div class="container">
			<h2 class="text-center"> You recently viewed</h2>
			<div class="inrwrp dFlx">
				<div class="viewItem">
					<div class="slidItem">
						<a href="" class="crseItem">
							<div class="topImg">
								<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/image01.jpg" alt="">
							</div>
							<div class="crseInfo">
								<div class="starInfo dFlx">
									<div class="strRatng dFlx">
										<div class="starWrp">
											<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
										</div>
										<div class="rateInfo">
											<span class="points"><strong>4.56 </strong></span>
											<span class="Nmbrs"><strong>(25) </strong></span>
										</div>											
									</div>
									<div class="strLike">
										<div class="like">
											<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
										</div>
									</div>
								</div>
								<div class="txtWrap">
									<h4>Hello Friends!- An Ongoing Preschool / Kindergarten Class (2x a Week)</h4>	
								</div>								

								<div class="tutrInfo dFlx">
									<div class="imgWrp">
										<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
									</div>
									<span class="qlfy">Meg Billings, B.S.Ed.</span>
								</div>

								<div class="tutingInfo dFlx">
									<div class="infoDtls">
										<div class="topInfo"><strong>4-6</strong></div>
										<div class="BtmInfo">Ages</div>
									</div>
									<div class="infoDtls">
										<div class="topInfo"><strong>25</strong></div>
										<div class="BtmInfo">Mins</div>
									</div>
									<div class="infoDtls">
										<div class="topInfo"><strong>₹814</strong></div>
										<div class="BtmInfo">per class</div>
									</div>
								</div>
							</div>
						</a>	
					</div>
				</div>						
			</div>
		</div>
	</section>
 -->

<?php endwhile; else : ?>
<?php endif; ?>

	<div class="footerTp">
	    <div class="container">
	      <div class="InrWrp">
	        <div class="fLgo">
	          <a href="https://devassists.com/dev/bonjourtutors/"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/logo_small.png" alt=""></a>
	        </div>
	        <div class="cstmFmenu">
	          <ul class="dFlx">
	            <li><a href="https://devassists.com/dev/bonjourtutors/">Home</a></li>
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

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
