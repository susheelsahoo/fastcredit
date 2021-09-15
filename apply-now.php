<?php include('layout/header.php');?>
<style>
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

.fc-background {
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 800px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}





</style>
<section class="services-details-area ptb-100 fc-background">
    <!-- multistep form -->
    <form id="msform" class="apply-form">
    
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Looking for a Loan?</h2>
        <h3 class="fs-subtitle">Let us help you find the most suitable offers.</h3>
        <label>Mobile Number</label>
        <input type="number" name="number" placeholder="Will check offer against your number"/>
        <!-- <input type="checkbox" name="agree"/><span>I have read and agreed to the Terms of Use and hereby appoint Paisabazaar as my authorised representative to receive my credit information from Cibil/ Equifax/ Experian/ Highmark (bureau).</span> -->
        <input type="button" name="next" class="next action-button" value="Proceed" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Compare and Apply for Personal Loans</h2>
        <h3 class="fs-subtitle">Let us help you find the most suitable offers.</h3>
        <div class="form-group">
            <input type="text" name="ammount" placeholder="Your desired loan amount" />
        </div>       
        <div class="form-group">
            <div class="select-box">
                <select name="employment_type_id" class="form-control">
                    <option value="">Please select</option>
                    <option value="Salaried">Salaried</option>
                    <option value="Self Employed - Business Owner">Self Employed - Business Owner</option>
                    <option value="Self Employed - Professional">Self Employed - Professional</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="monthly_income" placeholder="Your net monthly income" />
        </div>
        <div class="form-group">
            <input type="text" name="residence" placeholder="Your current city of residence" />
        </div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Best offer for you</h2>
        <h3 class="fs-subtitle">Find the personal loan best suited for you.</h3>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/Axis-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@10.30%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/Bajaj-Finserv.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@10.50%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/HDFC-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@09.50%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/ICICI-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@11.00%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/IDFC-First-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@11:25%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/IndusInd-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@11:50%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/Kotak-Mahindra-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@12.00%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/Tata-Capital.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@12.00%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> 
                <img width="200" height="80" src="assets/img/bank/Yes-Bank.jpg" class="vc_single_image-img attachment-medium" alt="" loading="lazy">
            </div>
            <div class="col-lg-4"> 
                <p>@11.00%</p>
            </div>
            <div class="col-lg-4"> 
                <input type="radio" name="fav_language" value="indusind bank">
            </div>
        </div>
       
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">We will never sell it</h3>
        <input type="text" name="name" placeholder="Full Name as per you pan card" />
        <input type="text" name="email" placeholder="Your Email Address" />
        <input type="text" name="phone" placeholder="your Mobile Number" />
        <textarea name="paddress" placeholder="Permanent Address"></textarea>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
    </form>
</sction>
<?php include('layout/footer.php');?>

<script>

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
    current_fs.hide();
    animating = false;
	next_fs.show(); 
	//hide the current fieldset with style
        // current_fs.animate({opacity: 0}, {
        // 	step: function(now, mx) {
        // 		//as the opacity of current_fs reduces to 0 - stored in "now"
        // 		//1. scale current_fs down to 80%
        // 		scale = 1 - (1 - now) * 0.2;
        // 		//2. bring next_fs from the right(50%)
        // 		left = (now * 50)+"%";
        // 		//3. increase opacity of next_fs to 1 as it moves in
        // 		opacity = 1 - now;
        // 		current_fs.css({
        //     'transform': 'scale('+scale+')',
        //     'position': 'absolute'
        //   });
        // 		next_fs.css({'left': left, 'opacity': opacity});
        // 	}, 
        // 	duration: 800, 
        // 	complete: function(){
        // 		current_fs.hide();
        // 		animating = false;
        // 	}, 
        // 	//this comes from the custom easing plugin
        // 	easing: 'easeInOutBack'
	// });
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
    current_fs.hide();
	animating = false;
	// //hide the current fieldset with style
        // current_fs.animate({opacity: 0}, {
        // 	step: function(now, mx) {
        // 		//as the opacity of current_fs reduces to 0 - stored in "now"
        // 		//1. scale previous_fs from 80% to 100%
        // 		scale = 0.8 + (1 - now) * 0.2;
        // 		//2. take current_fs to the right(50%) - from 0%
        // 		left = ((1-now) * 50)+"%";
        // 		//3. increase opacity of previous_fs to 1 as it moves in
        // 		opacity = 1 - now;
        // 		current_fs.css({'left': left});
        // 		previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        // 	}, 
        // 	duration: 800, 
        // 	complete: function(){
        // 		current_fs.hide();
        // 		animating = false;
        // 	}, 
        // 	//this comes from the custom easing plugin
        // 	easing: 'easeInOutBack'
	// });
});

$(".submit").click(function(){
	return false;
})


</script>