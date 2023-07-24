<?php
/* Template Name: search-temp */
get_header();
?>

<div class="fontWrp">

<!--	<section class="searchHeadTp">
		<div class="container">
			<div class="inrWrp">
	           <div class="navi-wrp dFlx">
	                <div class="menu-wrp dFlx">
	                    <div class="mobile-menu-head">
	                       <div class="nav-close"><img src="images/close-menu.png" alt=""></div>
	                    </div>                     

	                  <ul class="main-menu dFlx">
	                        <li><a href="">Popular</a>
	                        	<ul class="submenu">
	                              <li><a href="">Homeschool</a></li> 
	                              <li><a href="">Neurodiverse</a></li>  
	                              <li><a href="">Social Clubs</a></li>  
	                              <li><a href="">Reading</a></li>                             
	                              <li><a href="">Drawing</a></li>                             
	                              <li><a href="">Writing</a></li>                             
	                              <li><a href="">Math</a></li>                             
	                              <li><a href="">Spanish</a></li>                             
	                              <li><a href="">Minecraft</a></li>                             
	                              <li><a href="">Roblox</a></li>                             
	                              <li><a href="">Science</a></li>                             
	                              <li><a href="">Art</a></li>                             
	                              <li><a href="">Chess</a></li>                             
	                              <li><a href="">French</a></li>                             
	                              <li><a href="">Coding</a></li>                             
	                              <li><a href="">Piano</a></li>                             
	                              <li><a href="">Dance</a></li>                             
	                              <li><a href="">Cooking</a></li>                             
	                              <li><a href="">Book Club</a></li>                             
	                              <li><a href="">Debate</a></li>                             
	                              <li><a href="">History</a></li>                             
	                              <li><a href="">Sign Language</a></li>                             
	                              <li><a href="">Singing</a></li>                             
	                              <li><a href="">Japanese</a></li>                             
	                              <li><a href="">Multiplication</a></li>                             
	                              <li><a href="">Procreate</a></li>                             
	                              <li><a href="">All Popular <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>                             
	                           </ul>
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>
	                        <li><a href="">Tutoring</a>
	                         
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li> 
	                        <li><a href="">English</a>
	                      
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>     
	                        <li><a href="">Math</a>
	                     
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li> 
	                        <li><a href="">Arts</a>
	                   
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li> 
	                        <li><a href="">Life Skills</a>
	                      
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>  
	                        <li><a href="">Coding & Tech</a>
	                       
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>   
	                        <li><a href="">Science</a>
	                         
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>   
	                         <li><a href="">Languages</a>
	                         
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>   
	                        <li><a href="">More</a>
	                        	<ul class="submenu">
	                              <li><a href="">Homeschool</a></li> 
	                              <li><a href="">Neurodiverse</a></li>  
	                              <li><a href="">Social Clubs</a></li>  
	                              <li><a href="">Reading</a></li>                             
	                              <li><a href="">Drawing</a></li>                             
	                              <li><a href="">Writing</a></li>                             
	                              <li><a href="">Math</a></li>                             
	                              <li><a href="">Spanish</a></li>                             
	                              <li><a href="">Minecraft</a></li>                             
	                              <li><a href="">Roblox</a></li>                             
	                              <li><a href="">Science</a></li>
	                          	</ul>                         
	                           <span class="dropdownIcon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>  
	                        </li>        
	                    </ul>                       
	                </div>             


		              <div class="mobile-menu">
		                    <span></span>
		                    <span></span>
		                    <span></span>
		              </div>
	                               
	               </div>




			</div>
		</div>
	</section>-->

	<section class="searchBnr">
		<div class="container">
		<!--	<div class="brdcrmbwrp">
				<ul class="dFlx brdcrmb">
					<li><a href="">Home </a></li>
					<li><a href="">2 saved classes </a></li>
				</ul>	
			</div>-->

			<h2>Find classes </h2>

			<div class="searchbr">
				<form role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
	            	<div class="frmRw">
	                	<input  type="text" placeholder="<?php esc_html_e( 'Search ...', 'text-domain' ); ?>" value="<?php echo esc_html( get_search_query() ); ?>" name="s" />
      <input type="hidden" name="post_type" value="product" />

	                    <div class="sbmt">
	                        <input type="submit" name="" value="send" >	
	                    </div>	
	                </div>							
				</form>
			</div>

		<!--	<div class="classfilter ">
				<ul class="dFlx">
					<li><span class=fltrTxt>Day or time </span> <span class="drpdwn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </li>
					<li><span class=fltrTxt>Date </span> <span class="drpdwn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </li>
					<li><span class=fltrTxt>Age  </span> <span class="drpdwn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </li>
					<li><span class=fltrTxt>Price </span> <span class="drpdwn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </li>
					<li><span class=fltrTxt>Subject </span> <span class="drpdwn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </li>
					<li><span class=fltrTxt>More </span> <span class="drpdwn"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </li>			
					<li><span class=fltrTxt>Reset </span></li>			
				</ul>
			</div>-->

		</div>
	</section>

	<!-- <section class="courseDtls">
		<div class="container">
			<div class="crseSliderWrp">
				<div class="owl-carousel testslider cmnSlider">    			
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Clubs</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Semester Courses</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Tutoring</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Test Prep</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Spanish</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Circle Time</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Creative Writing</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Drawing</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Gaming</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Dance</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Art</a>	
						</div>					
					</div>
					<div class="item">
						<div class="lnkwrp">
							<a href="" class="crsBtn">Dance</a>	
						</div>					
					</div>
				</div>		
			</div>
		</div>
	</section> -->

	<!--<section class="sortBySec pt-50">
		<div class="container">
			<div class="sortBy">
				<div class="SortByOpt dFlx">
					<p>Sort by:</p>

					<div class="selectCstm">
					  <select>
					    <option value="Relevance">Relevance</option>
					    <option value="New ">New classes</option>
					    <option value="upcoming">Starting soon</option>
					  </select>
					</div>
				</div>
			</div>
		</div>
	</section>-->

	<section class="crseDtlSec pb-50">
		<div class="container">
		    <?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
		'post__not_in' => array (7048),
       // 'product_cat'    => 'hoodies'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="crseDtl ">
				<a href="<?php echo get_permalink();?>" class="dFlx">
					<div class="leftImg">
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
					</div>
					<div class="rightCnt">
						<div class="lvl01 dFlx">
							<p>Age <?php echo get_field('age_range_class');?> </p>
							<div class="likeclk">
								<img src="/wp-content/uploads/2023/01/like.png">
							</div>
						</div>
						<h3><?php the_title();?></h3>
						<div class="descrp">
							<p><?php the_excerpt();?></p>
						</div>

						<div class="lvlbtm dFlx">
							<div class="lvlbtmLft">
								<p class="cDate"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_field('meet_time_per_week');?></p>
								<p>Thu, Jan 19, 10:00 – 10:30 PM , +10 more times </p>
							</div>
							<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
							<div class="priceWrp dFlx">
								<span class="prce"><?php echo wc_price( $price ); ?></span>
								<p>per class </p>
							</div>
						</div>

					</div>
				</a>
			</div>
		<?php  endwhile;

    wp_reset_query();
?>
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