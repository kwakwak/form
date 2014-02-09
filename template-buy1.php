<?php 

	/*
	Template Name: Buy
	*/

	 global $avia_config, $more;
	 get_header();
	  if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title(); 
?>
<link rel="stylesheet" type="text/css" href="/wp-includes/css/tooltipster.css">
<link rel="stylesheet" type="text/css" href="/wp-includes/css/tooltipster-light.css">
 
<link rel="stylesheet" type="text/css" href="/wp-content/themes/enfold/css/jquery-ui-1.9.2.custom.css">


<script src="/wp-includes/js/jquery.tooltipster.min.js"></script>
<script src="/wp-includes/js/jquery.validate.js"></script>

<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>



<script>
var lead="<?php echo ($_GET["lead"]); ?>";
</script>
<script src="/wp-content/themes/enfold/js/jquery.xdomainrequest.min.js"></script>
<script src="/wp-content/themes/enfold/js/buy.js"></script>



<link rel="stylesheet" type="text/css" href="/wp-content/themes/enfold/css/buy.css" />
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/enfold/css/buy_ie.css" />
<![endif]-->

<div class='container_wrap main_color <?php avia_layout_class( 'main' ); ?>'>
	<div class='container'>	
		<div class='template-archives content <?php avia_layout_class( 'content' ); ?> units'>
			<div class="entry-content clearfix">	
				<div class="outer-rounded-box-bold">
					<div class="simple-rounded-box">
						<div class="noLead" style="display:none">Lead isn't exist.</div>
						<div class="done" style="display:none">Your form has been sent correctly.</div>
						<img class= "loading" src="/ajax-loader.gif" style="display:block; margin:auto;">
						<form name="cmaForm" id="cmaForm" method="post" style="display:none">
	<!--						<input   type="hidden" name="recordRequestPrimaryServiceID" id="recordRequestPrimaryServiceID" value="100" />
							<input   type="hidden" name="recordClientServices" id="recordClientServices" value="1,4" />
	-->			
							<ul id="stepForm" class="ui-accordion-container">
								<!-- Page 1 -->

								<li id="sf1"><a href='#' class="ui-accordion-link"> </a>
									<div>
										<fieldset>

											<table class="price_table">
												<tr >
													<td class="row1">
														<p>機器と</p>
														<p>アプリケーションのセットのみ</p>
														<p>100,000円</p>
													</td>
													<td class="row1">
														<p>機器とアプリケーションのセット</p>
														<p>100,000円</p>
														<p> +</p>
														<p>フィードバックサービス（1カ月分のみ)</p>
														<p>3,000円</p>
													</td>
													<td class="row1">
														<p>機器とアプリケーションのセット</p>
														<p>77,000円</p>
														<p>+</p>
														<p>フィードバックサービス（1年分）</p>
														<p>33,000円</p>
													</td>
												</tr>

												<tr>
													<td class="row2">
														<p>機器と</p>
														<p>アプリケーションのセットのみ</p>
														<p>毎月8,334円×12か月</p>
														<p>(＋クレジットカード会社の金利ご負担)</p>
													</td>
													<td class="row2">
														<p>機器とアプリケーションのセット</p>
														<p>毎月8,334円×12か月</p>
														<p>(＋クレジットカード会社の金利ご負担)</p>
														<p>+</p>
														<p>フィードバックサービス（1カ月分のみ)</p>
														<p>3,000円　(初回お支払い）</p>
													</td>
													<td class="row2">
														<p>機器とアプリケーションのセット</p>
														<p>毎月6,417円×12か月</p>
														<p>(＋クレジットカード会社の金利ご負担) </p>
														<p>+</p>
														<p>フィードバックサービス（1年分）</p>
														<p>毎月2,750円×12か月 </p>
														<p>(＋クレジットカード会社の金利ご負担) </p>
													</td>
												</tr>

												<tr>
													<td class="row3">
														<p>機器と</p>
														<p>アプリケーションのセットのみ</p>
														<p>毎月33,334円×３カ月</p>
													</td>
													<td class="row3">
														<p>機器とアプリケーションのセット</p>
														<p>毎月33,334円×３カ月</p>
														<p>+</p>
														<p>フィードバックサービス（1カ月分のみ)</p>
														<p>3,000円　(初回お支払い）</p>
													</td>
													<td class="row3">
														<p>機器とアプリケーションのセット</p>
														<p>毎月25,667円×3カ月</p>
														<p>+</p>
														<p>フィードバックサービス（1年分）</p>
														<p>毎月2,750円×12カ月</p>
													</td>
												</tr>

												<tr >
													<td class="open1 pur" prod_id="0">
														<h1>購入</h1>
													</td>
													<td  class="open1 pur" prod_id="1">
														<h1>購入</h1>
													</td >
													<td class="open1 pur" prod_id="2">
														<h1>購入</h1>
													</td>
												</tr>

											</table>
			

										</fieldset>
									</div>
								</li>

								<!-- Page 2 -->
								<li id="sf2"><a href='#' class="ui-accordion-link"> </a>
									<div>
										<fieldset><legend> ステップ 1 の 4 </legend>
											

											<div class="left">
												<h3 class="stepHeader">個人情報</h3>

												<label for="title" class="input">称号</label> 
												<select name="title" class="inputclass" id="title">
													<option value="1">Mr.</option>
													<option value="2">Ms.</option>
												</select>
				 
												<label for="first_name" class="input requiredv">名</label> 
												<input  type="text" name="first_name" id="first_name" class="inputclass pageRequired" maxlength="254" 
												title="Email address is required"/>
										
												<label for="last_name" class="input requiredv">名字</label> 
												<input  type="text" name="last_name" id="last_name" class="inputclass pageRequired" maxlength="254" />
										
												<label for="phone" class="input requiredv">電話番号</label> 
												<input  type="text" name="phone" id="ph" class="inputclass pageRequired number" maxlength="254" />

											</div>

											<div class="right">
												<h3>アドレス</h3>
												<label for="street" class="input requiredv">ストリート</label> 
												<input  type="text" name="street" id="street" class="inputclass pageRequired" maxlength="254" />

												<label for="city" class="input requiredv">都市</label> 
												<input  type="text" name="city" id="city" class="inputclass pageRequired" maxlength="254" />

												<label for="zip" class="input requiredv">郵便番号</label> 
												<input  type="text" name="zip" id="zip" class="inputclass pageRequired" maxlength="254" />
											</div>
											<hr/>

												<label for="belt_size" class="input">ベルトサイズ</label> 
												<select name="belt_size" class="inputclass pageRequired" id="belt_size">
													<option ></option>
													<option value="xs">XS</option>
													<option value="s">S</option>
													<option value="m">M</option>
													<option value="l">L</option>
													<option value="xl">XL</option>
												</select>

											<p></p><br/>
											<div class="buttonWrapper"><input  name="formBack0" type="button" class="open0 prevbutton btnsubmit" value="バック" alt="Back" title="Back" /> 
												<input  name="formNext1" type="button" class="open2 nextbutton btnsubmit" value="次" alt="Next" title="Next" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 3 -->

								<li id="sf3"><a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> ステップ 2 の 4 </legend>
											<h3 class="stepHeader">ユーザー情報</h3>
								<div class="left">
											
  
											<label for="email" class="input">電子メールアドレス
												<!--<span class="tooltip"  title="あなたのEメールはシステムとアプリケーションにログインする際に使用されます。">[?]</span>	-->
											</label> 
												<!-- remote="http://54.199.71.210/HS-SF.ashx?action=leadexist" class="inputclass pageRequired email" -->
											<input  type="text" name="email" id="email"  maxlength="254" class="inputclass" readonly />

											<label for="pass" class="input requiredv">パスワード
												<span class="tooltip"  title="パスワードは、6文字以上で、必ず英文字と数字を組み合わせてください。">[?]</span>	
											</label> 
											<input  type="password" name="pass" id="pass" class="inputclass pageRequired pwcheck" minlength="6" maxlength="254"/>

											<label for="confPass" class="input requiredv">パスワードを確認</label> 
											<input  type="password" name="confPass" id="confPass" class="inputclass pageRequired" equalTo="#pass"  maxlength="254" /> 
											<br />
								</div> 
								<div class="right">

											<label for="securityQuestion" class="input requiredv">セキュリティの質問</label> 
											<select name="SecurityQuestion" class="inputclass pageRequired" id="securityQuestion" >
												<option></option>
											</select>

											<label for="securityAnss" class="input requiredv">セキュリティーに関する答え</label> 
											<input  type="text" name="securityAnss" id="securityAnss" class="inputclass pageRequired" maxlength="254"  />

								</div>
								<!--
								<hr>
								<h3 class="stepHeader">With ECG Findings</h3>
											<label for="egc" class="input requiredv">With ECG Findings </label> 
											<select name="egc" class="inputclass pageRequired" id="egc" >
												<option value="0">No.</option>
												<option value="1">Yes.</option>
											</select><br />

								-->

											<div class="buttonWrapper"><input  name="formBack0" type="button" class="open1 prevbutton btnsubmit" value="バック" alt="Back" title="Back" /> 
												<input   name="formNext2" type="button" class="open3 nextbutton btnsubmit" value="次" alt="Next" title="Next" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 4 -->
								<li id="sf4">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> ステップ 3 の 4 </legend>
											<div class="terms">
												<?php		
													get_template_part( 'includes/loop', 'page' );
												?>
											</div>
											<p></p><br/>
											<div class="buttonWrapper"><input   name="formBack1" type="button" class="open2 prevbutton btnsubmit" value="バック" alt="Back" title="Back" /> 
												<input   name="formNext3" type="button" class="open4 nextbutton btnsubmit" value="受け入れる" alt="Accept" title="Accept" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 5 -->
								<li id="sf5">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> ステップ 4 の 4 </legend>
											<!-- <img src="/wp-content/themes/enfold/images/creditcards.png" class="right" style="position: relative; top: -24px;"> -->
											<h3 class="stepHeader">クレジットカードの詳細情報</h3> 
											
								<div class="left"> 
											<label for="card_holder" class="input requiredv">カードホルダー名</label> 
											<input  type="text" name="card_holder" id="card_holder" class="inputclass pageRequired" maxlength="254"  />


											<label for="card_num" class="input requiredv">カード番号</label> 
											<input  type="text" name="card_num" id="card_num" class="inputclass pageRequired creditcard" maxlength="254"  />


								</div>
								<div class="right">

											<label for="sec_code" class="input requiredv">セキュリティコード</label> 
											<input  type="text" name="sec_code" id="sec_code" class="inputclass pageRequired" maxlength="254"  />

											<label for="exp_date" class="input requiredv">有効期限</label> 
											<input  type="text" name="exp_date" id="exp_date" class="inputclass pageRequired"  maxlength="254"  readonly/>
											<input type="hidden" id="actualDate">
								</div>
								<hr/>

								<div class="right serv_payments">
											<label for="serv_payments" class="input requiredv">返済</label> 
											<select name="serv_payments" class="inputclass pageRequired" id="serv_payments" >
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
								<p class="price">Service price per month: 円<span class="serv_price_divide"></span>

								</div>
								<div class="left">
											<label for="prod_payments" class="input requiredv">製品の支払い</label> 
											<select name="prod_payments" class="inputclass pageRequired" id="prod_payments" >
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
								<p class="price">Product price per month: 円<span class="prod_price_divide"></span>
								</div>

										<p></p><br/>

											<div class="buttonWrapper">

												<input   name="formBack1" type="button" class="open3 prevbutton btnsubmit" value="バック" alt="Back" title="Back" /> 
												

												<input   name="submit" type="submit" id="submit" value="提出する" class="submitbutton" alt="Submit" title="Submit">

											</div>
										</fieldset>
									</div>
								</li>
							</ul>
						</form>

						<p class="loading" style="display:none;">
						<img src="http://www.smartheart.co.jp/ajax-loader.gif">  お待ちください.
						</p> 


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