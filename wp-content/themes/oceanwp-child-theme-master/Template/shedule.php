<?php
/* Template Name: shedule-temp */
get_header();
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
    );

    $loop = new WP_Query( $args );
$data ='';
$values=array();
$i=0;
    while ( $loop->have_posts() ) : $loop->the_post();
    $values[$i]['title'].=get_the_title();
     $values[$i]['start'].='2023-02-01';
     $values[$i]['url'].=get_the_permalink();
    
     
   $i++; endwhile;

    wp_reset_query();
//echo "<pre>";
$array = array_values($values);
//print_r($array);
?>
<script src='<?php echo get_stylesheet_directory_uri();?>/assets/js/index.global.js'></script>
<script>
var pausecontent = <?php echo json_encode($array); ?>;
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: '100%',
      expandRows: true,
      slotMinTime: '08:00',
      slotMaxTime: '20:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'dayGridMonth',
      initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events:pausecontent
    
    });

    calendar.render();
  });
</script>
<?php if(!empty(@$array)){?>
<div class="parrent-content">
  <div class="extra-text">
      <h4>For completed classes, see Your transcripts</h4>
      <h4>Nothing scheduled yet.<br>
      Enroll in classes to see them <a href="/search">here.</a></h4>
  </div>
</div>
<?php } ?>
<div class="fontWrp">
    <?php if(has_active_subscription()){?>
  <div class="parentWrp">
      <div id='calendar-container'>
        <div id='calendar'></div>
      </div>
      
  </div>
  
  
  <?php } ?>
  <div class="footerTp">
      <div class="container">
        <div class="InrWrp">
          <div class="fLgo">
            <a href="https://bonjourtutors.com"><img src="https://bonjourtutors.com/wp-content/uploads/2023/01/logo_small.png" alt=""></a>
          </div>
          <div class="cstmFmenu">
            <ul class="dFlx">
              <li><a href="https://bonjourtutors.com/">Home</a></li>
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