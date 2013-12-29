<?php 
	/*
	Template Name: Buy
	*/

	 global $avia_config, $more;
	 get_header();
	 echo avia_title(); 
?>
<link rel="stylesheet" type="text/css" href="/wp-includes/css/tooltipster.css">
<link rel="stylesheet" type="text/css" href="/wp-includes/css/tooltipster-light.css">

<link rel="stylesheet" type="text/css" href="/wp-content/themes/enfold/css/jquery-ui-1.9.2.custom.css">

<script src="/wp-includes/js/jquery.tooltipster.min.js"></script>
<script src="/wp-includes/js/jquery.validate.js"></script>
<script src="/wp-includes/js/jquery.maskedinput.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>

<script src="/wp-content/themes/enfold/js/buy.js"></script>
<style>
li {
	list-style: none;
}
ul{
	margin-right: 15px;
	margin-left: 0px;
}
.outer-rounded-box-bold{
	width: 64.66666666666666%	
}
.buttonWrapper {
    bottom: 35px;
    position: absolute;
}

.right{
	float:right;

}

.left{
	float:left;

}

input[type="text"]#last_name , input[type="text"]#first_name{

}
 
.terms{
	width: 500px;
	height: 600px;
	overflow-y: scroll;
	overflow-x: hidden;

}
.terms p {
	font-family: Arial, Helvetica, Verdana, sans-serif;
	font-size: 13px;
	font-style: normal;
	font-variant: normal;
	font-weight: normal;
}

</style>

<div class='container_wrap main_color <?php avia_layout_class( 'main' ); ?>'>
	<div class='container'>	
		<div class='template-archives content <?php avia_layout_class( 'content' ); ?> units'>
			<div class="entry-content clearfix">	
				<div class="outer-rounded-box-bold">
					<div class="simple-rounded-box">

						<form name="cmaForm" id="cmaForm" method="post">
	<!--						<input   type="hidden" name="recordRequestPrimaryServiceID" id="recordRequestPrimaryServiceID" value="100" />
							<input   type="hidden" name="recordClientServices" id="recordClientServices" value="1,4" />
	-->			
							<ul id="stepForm" class="ui-accordion-container">

								<!-- Page 1 -->
								<li id="sf1"><a href='#' class="ui-accordion-link"> </a>
									<div>
										<fieldset><legend> Step 1 of 4 </legend>
											

											<div class="left">
												<h3 class="stepHeader">Personal Information</h3>

												<label for="title" class="input">Title</label> 
												<select name="title" class="inputclass" id="title">
													<option value="Mr.">Mr.</option>
													<option value="Ms.">Ms.</option>
												</select>
				 
												<label for="first_name" class="input requiredv">First Name</label> 
												<input  type="text" name="first_name" id="first_name" class="inputclass pageRequired" maxlength="254" 
												title="Email address is required"/>
										
										 
												<label for="last_name" class="input requiredv">Last Name</label> 
												<input  type="text" name="last_name" id="last_name" class="inputclass pageRequired" maxlength="254" />
							

											</div>

											<div class="right">
												<h3>Address</h3>
												<label for="street" class="input requiredv">Street</label> 
												<input  type="text" name="street" id="street" class="inputclass pageRequired" maxlength="254" />

												<label for="city" class="input requiredv">City</label> 
												<input  type="text" name="city" id="city" class="inputclass pageRequired" maxlength="254" />

												<label for="zip" class="input requiredv">Zip Code</label> 
												<input  type="text" name="zip" id="zip" class="inputclass pageRequired" maxlength="254" />
											</div>

											<br />
											<div class="buttonWrapper"><input  name="formNext1" type="button" class="open1 nextbutton btnsubmit" value="Next" alt="Next" title="Next" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 2 -->

								<li id="sf2">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> Step 2 of 4 </legend>
											<h3 class="stepHeader">User information</h3>
								<div class="left">
											

											<label for="email" class="input requiredv">Email Address</label> 
											<input  type="text" name="email" id="email" remote="/true" class="inputclass pageRequired email" maxlength="254"  />

											<label for="pass" class="input requiredv">Password</label> 
											<input  type="text" name="pass" id="pass" class="inputclass pageRequired"  maxlength="254" />

											<label for="confPass" class="input requiredv">Confirm password</label> 
											<input  type="text" name="confPass" id="confPass" class="inputclass pageRequired" equalTo="#pass"  maxlength="254" /> 
											<br />
								</div>
								<div class="right">

											<label for="securityQuestion" class="input requiredv">Security Question</label> 
											<select name="SecurityQuestion" class="inputclass pageRequired" id="securityQuestion" >
												<option value=""></option>
											</select>

											<label for="securityAnss" class="input requiredv">Security Answer</label> 
											<input  type="text" name="securityAnss" id="securityAnss" class="inputclass pageRequired" maxlength="254" title="Email address is required" />

								</div>
								<hr>
								<h3 class="stepHeader">With ECG Findings</h3>
											<label for="egc" class="input requiredv">With ECG Findings </label> 
											<select name="egc" class="inputclass pageRequired" id="egc" >
												<option value="0">No.</option>
												<option value="1">Yes.</option>
											</select><br />

											<div class="buttonWrapper"><input  name="formBack0" type="button" class="open0 prevbutton btnsubmit" value="Back" alt="Back" title="Back" /> 
												<input   name="formNext2" type="button" class="open2 nextbutton btnsubmit" value="Next" alt="Next" title="Next" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 3 -->
								<li id="sf3">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> Step 3 of 4 </legend>
											<div class="terms">
												<?php		
													get_template_part( 'includes/loop', 'page' );
												?>
											</div><br />
											<div class="buttonWrapper"><input   name="formBack1" type="button" class="open1 prevbutton btnsubmit" value="Back" alt="Back" title="Back" /> 
												<input   name="formNext3" type="button" class="open3 nextbutton btnsubmit" value="Accept" alt="Accept" title="Accept" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 4 -->
								<li id="sf4">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> Step 4 of 4 </legend>
											<img src="/wp-content/themes/enfold/images/creditcards.png" class="right" style="position: relative; top: -24px;">
											<h3 class="stepHeader">Your Card Details</h3> 
											
								<div class="left"> 
											

											<label for="card_num" class="input requiredv">Card Number</label> 
											<input  type="text" name="card_num" id="card_num" class="inputclass pageRequired creditcard" maxlength="254"  />

											<label for="exp_date" class="input requiredv">Expiration Date</label> 
											<input  type="text" name="exp_date" id="exp_date" class="inputclass pageRequired"  maxlength="254"  readonly/>


								</div>
								<div class="right">

											<label for="sec_code" class="input requiredv">Security Code</label> 
											<input  type="text" name="sec_code" id="sec_code" class="inputclass pageRequired" maxlength="254"  />

											<label for="payments" class="input requiredv">Payments</label> 
											<select name="payments" class="inputclass pageRequired" id="payments" >
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>

								</div>



											<div class="buttonWrapper">

												<input   name="formBack1" type="button" class="open2 prevbutton btnsubmit" value="Back" alt="Back" title="Back" /> 
												

												<input   name="submit" type="submit" id="submit" value="Submit" class="submitbutton" alt="Submit" title="Submit">

											</div>
										</fieldset>
									</div>
								</li>
							</ul>
						</form>




					</div>
				</div>
				<!--end content-->
			</div>

			<?php 
			wp_reset_query();
//get the sidebar
			$avia_config['currently_viewing'] = 'page';
			get_sidebar();
			?>

		</div><!--end container-->
		<?php get_footer(); ?>