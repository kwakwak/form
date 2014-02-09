<?php 

	/*
	Template Name: Buy
	*/

	 global $avia_config, $more;
	 get_header();
	  if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title(); 
?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="/wp-includes/js/selectivizr.js"></script>
<![endif]--> 


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
<script src="/wp-content/themes/enfold/js/buy-local.js"></script>



<link rel="stylesheet" type="text/css" href="/wp-content/themes/enfold/css/buy.css" />
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/enfold/css/buy_ie.css" />
<![endif]-->

<div class='container_wrap main_color <?php avia_layout_class( 'main' ); ?>'>
	<div class='container'>	
		<div class='template-archives content <?php avia_layout_class( 'content' ); ?> units'>
			<div class="entry-content clearfix">	
				<div class="right_msg" style="display:none"><h1>Because every</h1><h1><span>beat</span> counts</h1><br/><img src="http://www.shl-telemedicine.com/wp-content/uploads/heartlogo.png"></div>
				<div class="outer-rounded-box-bold">
					<div class="simple-rounded-box">
						<div class="noLead" style="display:none">リードは存在しません。</div>
						<div class="done" style="display:none">正常に送信されました。</div>
						<div class="done_error" style="display:none"></div>
						<div class="error" style="display:none">There is a Problem with the connection, Please try  
						<a href="https://www.smartheart.co.jp/buy/?lead=<?php echo ($_GET["lead"]); ?>">Again</a>.</div>
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
		
	   <table id="tbl1" class="package shadow">
            <tr>
                <td class="device">
                    <div></div>
                </td>
                <td class="plus">
                    <div></div>
                </td>
                <td class="app">
                    <div></div>
                </td>
                <td class="plus empty">
                    <div></div>
                </td>
                <td class="service empty">
                    <div>
                        フィードバックサービスをご利用にならない場合、心電図の判断はかかりつけの医師等にご相談をお願いいたします。
                    </div>
                </td>
                <td class="equal">
                    <div></div>
                </td>
                <td class="price">
                    <div>
                        ￥100,000
                    </div>
                    <div prod_id="0" class="button open1">
                        購入する
                    </div>
                </td>
            </tr>
            <tr class="bottomRow">
                <td>
                    ￥100,000
                </td>
                <td>
                    
                </td>
                <td>
                    ￥0
                </td>
                <td>
                   
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>

                </td>
            </tr>
        </table>

        <br />

        <table class="package">
            <tr>
                <td class="device">
                    <div></div>
                </td>
                <td class="plus">
                    <div></div>
                </td>
                <td class="app">
                    <div></div>
                </td>
                <td class="plus">
                    <div></div>
                </td>
                <td class="service">
                    <div>
                        <div class="elipse">
                            1ヶ月
                        </div>
                    </div>
                </td>
                <td class="equal">
                    <div></div>
                </td>
                <td class="price">
                    <div>
                        ￥100,000
                        <br />
                        <span class="littlePlus">
                            +
                        </span>
                        <br />
                        ￥3,000
                    </div>
                    <div prod_id="1" class="button open1">
                        購入する
                    </div>
                </td>
            </tr>
            <tr class="bottomRow">
                <td>
                    ￥100,000
                </td>
                <td>
                    
                </td>
                <td>
                    ￥0
                </td>
                <td>
                   
                </td>
                <td>
                    ￥3,000
                </td>
                <td>
                    
                </td>
                <td>

                </td>
            </tr>
        </table>

        <br />

        <table class="package selected">
            <tr>
                <td class="device">
                    <div></div>
                </td>
                <td class="plus">
                    <div></div>
                </td>
                <td class="app">
                    <div></div>
                </td>
                <td class="plus">
                    <div></div>
                </td>
                <td class="service">
                    <div>
                        <div class="elipse">
                            1年
                        </div>
                    </div>
                </td>
                <td class="equal">
                    <div></div>
                </td>
                <td class="price">
                    <div class="cornerStar">
                        
                    </div>
                    <div>
                        ￥77,000
                        <br />
                        <span class="littlePlus">
                            +
                        </span>
                        <br />
                        ￥33,000
                    </div>
                    <div prod_id="2" class="button open1">
                        購入する
                    </div>
                </td>
            </tr>
            <tr class="bottomRow">
                <td>
                    <span style="text-decoration:line-through">
                        ￥100,000
                    </span>
                    <br />
                    ￥77,000
                </td>
                <td>
                    
                </td>
                <td>
                    ￥0
                </td>
                <td>
                   
                </td>
                <td>
                    <span style="text-decoration:line-through">
                        ￥36,000
                    </span>
                    <br />
                    ￥33,000
                </td>
                <td>
                    
                </td>
                <td>

                </td>
            </tr>
        </table>
		

										</fieldset>
									</div>
								</li>

								<!-- Page 2 -->
								<li id="sf2"><a href='#' class="ui-accordion-link"> </a>
									<div>
										<fieldset><legend> ステップ 1 </legend>
											

											<div class="left">
												<h3 class="stepHeader">個人情報</h3>

												<label for="title" class="input">件名</label>
												<select name="title" class="inputclass" id="title">
													<option value="1">Mr.</option>
													<option value="2">Ms.</option>
												</select>
				 
												<label for="first_name" class="input requiredv">名字</label> 
												<input  type="text" name="first_name" id="first_name" class="inputclass pageRequired" maxlength="254" 
												title="Email address is required"/>
										
												<label for="last_name" class="input requiredv">名前</label> 
												<input  type="text" name="last_name" id="last_name" class="inputclass pageRequired" maxlength="254" />
										
												<label for="phone" class="input requiredv">電話番号</label> 
												<input  type="text" name="phone" id="ph" class="inputclass pageRequired number" maxlength="254" />

											</div>

											<div class="right">
												<h3>住所</h3>
												<label for="street" class="input requiredv">番地</label> 
												<input  type="text" name="street" id="street" class="inputclass pageRequired" maxlength="254" />

												<label for="city" class="input requiredv">市町村</label> 
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
											<div class="buttonWrapper"><input  name="formBack0" type="button" class="open0 prevbutton btnsubmit" value="戻る" alt="Back" title="Back" /> 
												<input  name="formNext1" type="button" class="open2 nextbutton btnsubmit" value="次へ" alt="Next" title="Next" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 3 -->

								<li id="sf3"><a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> ステップ 2 </legend>
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

											<div class="buttonWrapper"><input  name="formBack0" type="button" class="open1 prevbutton btnsubmit" value="戻る" alt="Back" title="Back" /> 
												<input   name="formNext2" type="button" class="open3 nextbutton btnsubmit" value="次へ" alt="Next" title="Next" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 4 -->
								<li id="sf4">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> ステップ 3 </legend>
											<div class="terms">
												<?php		
													get_template_part( 'includes/loop', 'page' );
												?>
											</div>
											<p></p><br/>
											<div class="buttonWrapper"><input   name="formBack1" type="button" class="open2 prevbutton btnsubmit" value="戻る" alt="Back" title="Back" /> 
												<input   name="formNext3" type="button" class="open4 nextbutton btnsubmit" value="同意する" alt="Accept" title="Accept" /></div>
										</fieldset>
									</div>
								</li>
								<!-- Page 5 -->
								<li id="sf5">
									<a href='#' class="ui-accordion-link">
									</a>
									<div>
										<fieldset><legend> ステップ 4 </legend>
											<!-- <img src="/wp-content/themes/enfold/images/creditcards.png" class="right" style="position: relative; top: -24px;"> -->
											<h3 class="stepHeader">クレジットカードの詳細情報</h3> 
											
								<div class="left"> 
											<label for="card_holder" class="input requiredv">名義人名</label> 
											<input  type="text" name="card_holder" id="card_holder" class="inputclass pageRequired" maxlength="254"  />


											<label for="card_num" class="input requiredv">カード番号</label> 
											<input  type="text" name="card_num" id="card_num" class="inputclass pageRequired creditcard" maxlength="254"  />


								</div>
								<div class="right">

											<label for="sec_code" class="input requiredv">セキュリティコード
												<span id="sec_code_tip">[?]</span>	
											</label> 

											<input  type="text" name="sec_code" id="sec_code" class="inputclass pageRequired" maxlength="254"  />

											<label for="exp_date" class="input requiredv">有効期限</label> 
											<input  type="text" name="exp_date" id="exp_date" class="inputclass pageRequired"  maxlength="254"  readonly/>
											<input type="hidden" id="actualDate">
								</div>
								<hr/>

								<div class="right serv_payments">
											<label for="serv_interest" class="input requiredv">Service Interest</label> 
											<select name="serv_interest" class="inputclass pageRequired" id="serv_interest" >
												<option value="credit">Payments without interest</option>
												<option value="gmo">Payments with interest</option>
											</select>

											<label for="serv_payments" class="input requiredv">フィードバックサービス価格</label> 
											<select name="serv_payments" class="inputclass pageRequired" id="serv_payments" >
												<option value="1">1</option>
												<option value="3">3</option>
											</select>
								<p class="price">月額料金: <span class="serv_price_divide"></span> 円</p>
 
								</div>
								<div class="left">
											<label for="prod_interest" class="input requiredv">Product Interest</label> 
											<select name="prod_interest" class="inputclass pageRequired" id="prod_interest" >
												<option value="credit">Payments without interest</option>
												<option value="gmo">Payments with interest</option>
											</select>


											<label for="prod_payments" class="input requiredv">製品価格</label> 
											<select name="prod_payments" class="inputclass pageRequired" id="prod_payments" >
												<option value="1">1</option>
												<option value="3">3</option>
											</select>
								<p class="price">月額料金: <span class="prod_price_divide"></span> 円</p>
								</div>

										<p></p><br/>
											<p class="loading" style="display:none;"><img src="https://www.smartheart.co.jp/ajax-loader.gif">  お待ちください.</p> 
											<div class="buttonWrapper">

												<input   name="formBack1" type="button" class="open3 prevbutton btnsubmit" value="戻る" alt="Back" title="Back" /> 
												

												<input   name="submit" type="submit" id="submit" value="提出する" class="submitbutton" alt="Submit" title="Submit">

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