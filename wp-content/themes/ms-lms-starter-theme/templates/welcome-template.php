<?php
/* Template Name: welcome */
get_header();
?>

<div class="fontWrp">

	<div class="welcomeTopSec cmnBnr">
		<div class="container">
			<div class="inrwrp text-center dFlx">
				<div class="bnrLeft">
					<div class="imgWrp">
						<img src="/wp-content/uploads/2023/01/test.jpg" alt="">
					</div>
				</div>
				<?php global $current_user; wp_get_current_user(); ?>
				<div class="BrnRight">
					<h1 class="">Welcome, <?php echo $current_user->display_name;?>!</h1>
					<div class="btnWrp">
						<a href="" class="newBtn">Explore Classes </a>
					</div>
				</div>			
			</div>
		</div>	
	</div>

	<!--
	<div class="popularHobbiesWrp pt-70 pb-50">
		<div class="container">
			<h2 class="text-center">Popular topics</h2>
			<div class="inrWrp dFlx">
			     <?php  $args = array(
        'taxonomy' => 'topics',
        'orderby' => 'name',
        'field' => 'name',
        'order' => 'DESC',
        //'parent' =>$term->term_id,
        'hide_empty' => false
    );

    $all_cats = get_categories($args);

   foreach ($all_cats as $cat){?>
				<div class="clw25">
					<a href="" class="imgtxtLink ">
						<div class="icnWrp">
							<img src="<?php echo get_field('topic_image',$cat->taxonomy.'_'.$cat->term_id);?>" alt="" class="icnimg">
						</div>
						<span class="txtLink"><strong><?php echo $cat->name;?></strong></span>
					</a>
				</div>

   <?php } ?>
-->

<!-- 				<div class="clw25">
					<a href="" class="imgtxtLink ">
						<div class="icnWrp">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/icon4.png" alt="" class="icnimg">
						</div>
						<span class="txtLink"><strong>Travel</strong></span>
					</a>
				</div>
				<div class="clw25">
					<a href="" class="imgtxtLink ">
						<div class="icnWrp">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/icon5.png" alt="" class="icnimg">
						</div>
						<span class="txtLink"><strong>Animals</strong></span>
					</a>
				</div>
				<div class="clw25">
					<a href="" class="imgtxtLink ">
						<div class="icnWrp">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/icon6.png" alt="" class="icnimg">
						</div>
						<span class="txtLink"><strong>Chess</strong></span>
					</a>
				</div>
				<div class="clw25">
					<a href="" class="imgtxtLink ">
						<div class="icnWrp">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/icon7.png" alt="" class="icnimg">
						</div>
						<span class="txtLink"><strong>Cooking</strong></span>
					</a>
				</div>
				<div class="clw25">
					<a href="" class="imgtxtLink ">
						<div class="icnWrp">
							<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/icon8.png" alt="" class="icnimg">
						</div>
						<span class="txtLink"><strong>Coding</strong></span>
					</a>
				</div> -->

<!--			</div>
		</div>
	</div>
-->


		<div class="poppularClass pt-50">
			<div class="container">
				<h2 class="text-center"> 
					Introducing Bonjour Tutors Groups!
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course03 cmnSlider">

					<?php  $loop = new WP_Query( array(
    'post_type'      => 'stm-courses',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    /*'tax_query'      => array(
      'relation' => 'AND',

     array(
        'taxonomy' => 'product_cat', // The taxonomy name
        'field'    => 'term_id', // Type of field ('term_id', 'slug', 'name' or 'term_taxonomy_id')
        'terms'    => 80, // can be an integer, a string or an array
    )*/
    /* array(
       'taxonomy' => 'product_types',
       'field' => 'name',
       'terms' => $cat->name,
     )*/
    // ),
) );

    while ( $loop->have_posts() ) : $loop->the_post();?>
					    <div class="item">
						    <div class="slidItem">
								<a href="<?php echo get_the_permalink();?>" class="crseItem">
									<div class="topImg">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4><?php the_title();?></h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<!--<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>-->
										<!--	<span class="qlfy">Meg Billings, B.S.Ed.</span>-->
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong><?php echo get_field('from_age')."-".get_field('to_age');?></strong></div>


												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												
												<?php $duration_info = get_post_meta( get_the_ID(), 'duration_info', true ); 
												$durat["0"] = "";
												$durat["1"] = "";

										if(!empty($duration_info)) {
											$durat = explode(' ', $duration_info); 
										}
												?>
												<div class="topInfo"><strong><?php echo $durat["0"]; ?></strong></div>
												<div class="BtmInfo"><?php echo $durat["1"]; ?></div>
											</div>
											<div class="infoDtls">
											    	<?php $price = get_post_meta( get_the_ID(), 'price', true ); ?>
												<div class="topInfo"><strong><?php echo wc_price( $price ); ?></strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					   		<?php   endwhile;

    wp_reset_query();
?>
					    
					 </div>						
				</div>		

			</div>		
		</div>
	</div>



<!--
	<div class="allClasses">
		<div class="startIn24 ">
			<div class="container">
				<h2 class="text-center"> 
					Starting within 24 hours
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course01 cmnSlider">
					   <?php  

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'post__not_in' => array ('7048'),
       // 'product_cat'    => 'hoodies'
    );
//echo date("d/m/y");
    $loop = new WP_Query( $args );
$date1 = date("d/m/y");
    while ( $loop->have_posts() ) : $loop->the_post();
    
$date2 = get_field('shedule_time');

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); if($days==1){?>
					   <div class="item">
						    <div class="slidItem">
								<a href="<?php echo get_the_permalink();?>" class="crseItem">
									<div class="topImg">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4><?php the_title();?></h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<!--<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>-->
										<!--	<span class="qlfy">Meg Billings, B.S.Ed.</span>-->
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong><?php echo get_field('age_range_class');?></strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
											    	<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
												<div class="topInfo"><strong><?php echo wc_price( $price ); ?></strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					    
					    	<?php } endwhile;

    wp_reset_query();
?>
					 </div>						
				</div>	
			</div>		
		</div>
-->


		<div class="twentyBCrs pt-50">
			<div class="container">
				<h2 class="text-center"> 
					Classes under $20
				</h2>
				<div class="inrwrp course01Wrp">
					<div class="owl-carousel course03 cmnSlider">


					       <?php  
 

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'meta_query' => array(
	        array(
	            'key' => '_price',
	            'value' => '20',
	            'compare' => '>='
	        )
	    )
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
    if(20 >=get_post_meta( get_the_ID(), '_price', true )){?>
					    <div class="item">
						    <div class="slidItem">
								<a href="<?php echo get_the_permalink();?>" class="crseItem">
									<div class="topImg">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4><?php the_title();?></h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<!--<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>-->
										<!--	<span class="qlfy">Meg Billings, B.S.Ed.</span>-->
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong><?php echo get_field('age_range_class');?></strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
											    	<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
												<div class="topInfo"><strong><?php echo wc_price( $price ); ?></strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					   		<?php  } endwhile;

    wp_reset_query();
?>
					    
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
					<div class="owl-carousel course03 cmnSlider">
					<?php  $loop = new WP_Query( array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => array(
      'relation' => 'AND',

     array(
        'taxonomy' => 'product_cat', // The taxonomy name
        'field'    => 'term_id', // Type of field ('term_id', 'slug', 'name' or 'term_taxonomy_id')
        'terms'    => 80, // can be an integer, a string or an array
    )
    /* array(
       'taxonomy' => 'product_types',
       'field' => 'name',
       'terms' => $cat->name,
     )*/
     ),
) );

    while ( $loop->have_posts() ) : $loop->the_post();?>
					    <div class="item">
						    <div class="slidItem">
								<a href="<?php echo get_the_permalink();?>" class="crseItem">
									<div class="topImg">
										<img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
									</div>
									<div class="crseInfo">
										<div class="starInfo dFlx">
											<div class="strRatng dFlx">
												<div class="starWrp">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/star.png" alt="">
												</div>
											</div>
											<div class="strLike">
												<div class="like">
													<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/like.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtWrap">
											<h4><?php the_title();?></h4>	
										</div>								

										<div class="tutrInfo dFlx">
											<!--<div class="imgWrp">
												<img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/usr.png" alt="">
											</div>-->
										<!--	<span class="qlfy">Meg Billings, B.S.Ed.</span>-->
										</div>

										<div class="tutingInfo dFlx">
											<div class="infoDtls">
												<div class="topInfo"><strong><?php echo get_field('age_range_class');?></strong></div>
												<div class="BtmInfo">Ages</div>
											</div>
											<div class="infoDtls">
												<div class="topInfo"><strong>25</strong></div>
												<div class="BtmInfo">Mins</div>
											</div>
											<div class="infoDtls">
											    	<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
												<div class="topInfo"><strong><?php echo wc_price( $price ); ?></strong></div>
												<div class="BtmInfo">per class</div>
											</div>
										</div>
									</div>
								</a>	
							</div>
					    </div>
					   		<?php   endwhile;

    wp_reset_query();
?>
					    
					 </div>						
				</div>		

			</div>		
		</div>
	</div>

	<div class="fundSchool pt-70 pb-70">
		<div class="container">
			<div class="inrwrp text-center">

				<h2>Use your funds consectetur adipisicing</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
				
				<div class="btnWrp">
					<a href="" class="newBtn01">Learn How It Works</a>
				</div>
			</div>
		</div>
	</div>

	<!--<div class="BrowseClasses pt-50">
		<div class="container">
			<h2 class="text-center">Browse Classes</h2>
			<div class="inrwrp dFlx text-center">

				<div class="clw30">
					<div class="brwtpRw">
						<h3><a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/4Img-2.png" alt=""></span> Next Week </a></h3>
					</div>
					<div class="brwbtnRw dFlx">
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/1Img-2.png" alt=""></span> Morning</a>
						</div>
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/2Img-2.png" alt=""></span> Afternoon</a>
						</div>
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/3Img-2.png" alt=""></span> Evening</a>
						</div>
					</div>
				</div>

				<div class="clw30">
					<div class="brwtpRw">
						<h3><a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/5Img-2.png" alt=""></span> Next Month </a></h3>
					</div>
					<div class="brwbtnRw dFlx">
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/1Img-2.png" alt=""></span> Morning</a>
						</div>
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/2Img-2.png" alt=""></span> Afternoon</a>
						</div>
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/3Img-2.png" alt=""></span> Evening</a>
						</div>
					</div>
				</div>

				<div class="clw30">
					<div class="brwtpRw">
						<h3><a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/6Img-3.png" alt=""></span> Semester Courses </a></h3>
					</div>				
					<div class="brwbtnRw dFlx">
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/1Img-2.png" alt=""></span> Morning</a>
						</div>
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/2Img-2.png" alt=""></span> Afternoon</a>
						</div>
						<div class="clsTime">
							<a href=""><span class="icnWrp"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/3Img-2.png" alt=""></span> Evening</a>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>

	<div class="CoursesType pb-50">
		<div class="container">
			<div class="inrWrp dFlx">

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/art.png" alt=""> </span> Arts</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg1.png" alt=""> </span> English</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg2.png" alt=""> </span> Life Skills</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg3.png" alt=""> </span> Music</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg4.png" alt=""> </span> Social Studies</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg9.png" alt=""> </span> Coding & Tech</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg5.png" alt=""> </span> Health & Wellness</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg10-1.png" alt=""> </span> Math</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg6-1.png" alt=""> </span> Science & Nature</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg8.png" alt=""> </span> World Languages</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

				<div class="CoursesBx">
					<h2><span class="icnTxt"><img src="https://devassists.com/dev/bonjourtutors/wp-content/uploads/2023/01/simg7.png" alt=""> </span> Learner Favorites</h2>
					<ul class="dFlx">
						<li><a href="">Drawing </a></li>
						<li><a href="">Art </a></li>
						<li><a href="">Painting </a></li>
						<li><a href="">Beginner Drawing </a></li>
						<li><a href="">Anime </a></li>
						<li><a href="">Procreate </a></li>
						<li><a href="">Art Classes </a></li>
						<li><a href="">Watercolor </a></li>
						<li><a href="">Christmas </a></li>
						<li><a href="">Animation </a></li>
						<li><a href="">All Arts Classes </a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>-->
<!-- 
	<div class="recentView pb-50 pt-50">
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
	</div> -->

	<div class="interestParticular pt-50 pb-50">
		<div class="container">
			<div class="inrWrp text-center">
				<h2>Interested in something in particular?</h2>
				<div class="btnWrp">
					<a href="" class="newBtn01"> Request a Topic </a>
				</div>
			</div>
		</div>
	</div>

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