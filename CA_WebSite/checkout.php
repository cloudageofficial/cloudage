<?php include('header-2.php');?>
      <div class="intro-full ms-hero-img-city2 ms-hero-bg-primary color-white checkout" id="home">
        <div id="intro-video" class="plyr__video-embed">
           <video autoplay muted loop id="myVideo">
              <source src="assets/media/3-vp9.webm" type="video/webm">
             </video>
        </div>
        <div class="intro-full-content index-1">

                <div class="container">
                  <h1><i class="zmdi zmdi-lock"></i> SECURE CHECKOUT</h1>
                    <!-- open according -->
                    <div class="col-lg-12">
                        <div class="ms-collapse" id="accordion2" role="tablist" aria-multiselectable="true">
                          <!-- Login -->
                          <div class="mb-0 card card-info" style="visibility: visible; ">
                            <div class="card-header" role="tab" id="headingOne2">
                              <h4 class="card-title">
                                <a class="withripple" role="button" data-toggle="collapse" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                      STEP 1: LOGIN<div class="ripple-container"></div></a>
                              </h4>
                            </div>
                            <div id="collapseOne2" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingOne2" data-parent="#accordion2" style="">
                              <div class="card-body color-dark">
                                <div class="container row">
                                  <div class="col-lg-6 left-box">
                                    <div class="card-body">
                                      <!-- login form -->
                                      <form class="checkout">
                                        <fieldset>
                                          <div class="form-group label-floating is-empty">
                                            <h5>Your E-mail address:</h5>
                                            <p>Your email address will be used for order notification</p>
                                            <div class="input-group">

                                              <span class="input-group-addon">
                                                <i class="zmdi zmdi-email"></i>
                                              </span>
                                              <!-- <label class="control-label" for="ms-form-user">Username</label> -->
                                              <input type="text" id="form-mail" class="form-control" placeholder="name@gmail.com" > </div>
                                          </div>
                                          <div class="form-group label-floating is-empty">
                                            <div class="radio radio-primary">
                                                      <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="circle"></span><span class="check"></span>Continue without password</label>
                                                        <p class="check-span">You do not need a password</p>
                                                    </div>
                                                    <div class="radio radio-primary">
                                                      <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ><span class="circle"></span><span class="check"></span>I have a Firstcry account and password</label>
                                                        <p class="check-span">Sign in to your account to use your address details</p>
                                                    </div>
                                          </div>
                                          
                                          <div class="row ">
                                            <div class="col-md-6 ">
                                              <!-- <button class="btn btn-raised btn-info btn-block">CONTINUE</button> -->
                                              <a class="btn btn-raised btn-info btn-block" role="button" data-toggle="collapse" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">CONTINUE</a>
                                            </div>
                                            
                                          </div>
                                        </fieldset>
                                      </form>
                                      <!-- end login form -->
                                    </div>
                                  </div>
                                  <div class="col-lg-6 right-box">
                                      <div class="card-body">
                                        <div class="social-box">
                                            <p class="sec_l">Use social Accounts to login:</p>
                                            <p class="sec_r">We will use your email ID for order notification. We promise that we won't post anything. </p>
                                            <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                                            <i class="zmdi zmdi-facebook"></i> Facebook<div class="ripple-container"></div></a><br>
                                            <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                                            <i class="zmdi zmdi-twitter"></i> Twitter</a>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End login -->

                          <!-- DELIVERY-->
                          <div class="mb-0 card card-info  " >
                            <div class="card-header" role="tab" id="headingTwo2">
                              <h4 class="card-title">
                                <a class="withripple collapsed" role="button" data-toggle="collapse" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                  STEP 2: Customer Details <div class="ripple-container"></div></a>
                              </h4>
                            </div>
                            <div id="collapseTwo2" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordion2" style="">
                              <div class="card-body color-dark">
                                <div class="container row">
                                  <!-- Form -->
                                  <div class="col-lg-6 dilv-left-box">
                                    <form class="form-horizontal delivery" autocomplete="off">
                                      <fieldset>
                                        <div class="form-group row is-empty">
                                          <label for="inputName" autocomplete="false" class="col-lg-3 control-label">Name</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputName"  placeholder="Full Name"> </div>
                                        </div>
                                        <div class="form-group row is-empty">
                                          <label for="inputFlat" autocomplete="false" class="col-lg-3 control-label">Flat/House No./Building:</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputFlat" placeholder="Flat/House No./Building"> 
                                          </div>
                                        </div>
                                        <div class="form-group row is-empty">
                                          <label for="inputAdd" autocomplete="false" class="col-lg-3 control-label">Street Address/Colony:</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputAdd" placeholder="Street Address/Colony">
                                          </div>
                                        </div>
                                        <div class="form-group row is-empty">
                                                                <label for="inputAdd" autocomplete="false" class="col-lg-3 control-label">Landmark (optional):</label>
                                                                <div class="col-lg-9">
                                                                  <input type="text" class="form-control" id="inputAdd" placeholder="Landmark">
                                                                </div>
                                        </div>

                                        <div class="form-group row is-empty">
                                          <label for="inputPin" autocomplete="false" class="col-lg-3 control-label">Pincode:</label>
                                          <div class="col-lg-9">
                                            <input type="tel" class="form-control" id="inputPin" placeholder="Pincode">
                                          </div>
                                        </div>

                                        <div class="form-group row is-empty">
                                          <label for="inputCity" autocomplete="false" class="col-lg-3 control-label">City:</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputCity" placeholder="City">
                                          </div>
                                        </div>

                                        <div class="form-group row is-empty">
                                          <label for="inputState" autocomplete="false" class="col-lg-3 control-label">State:</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputState" placeholder="State">
                                          </div>
                                        </div>
                                        
                                        <div class="form-group row is-empty">
                                          <label for="inputMobile" autocomplete="false" class="col-lg-3 control-label">Mobile No:</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputMobile" placeholder="Mobile Number">
                                          </div>
                                        </div>
                                        <div class="form-group row is-empty">
                                          <label for="inputLandline" autocomplete="false" class="col-lg-3 control-label">Landline No. (optional)</label>
                                          <div class="col-lg-9">
                                            <input type="text" class="form-control" id="inputLandline" placeholder="Landline Number">
                                          </div>
                                        </div>
                                        <div class="form-group row justify-content-end">
                                          <label class="col-lg-3 control-label">Address Type:</label>
                                          <div class="col-lg-9">
                                            <div class="radio radio-primary">
                                              <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked=""><span class="circle"></span><span class="check"></span> Option two can be something else </label>
                                              <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"><span class="circle"></span><span class="check"></span> Option one is this </label>
                                            </div>
                                          </div>
                                        </div>
                                         <div class="form-group row justify-content-end use-add">
                                          <div class="col-lg-12">
                                            <!-- <button type="submit" class="btn btn-raised btn-info ">USE THIS ADDRESS</button> -->
                                            <a  class="btn btn-raised btn-info " role="button" data-toggle="collapse" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">USE THIS ADDRESS</a>
                                            <button type="button" class="btn btn-info">Clear Fields<div class="ripple-container"></div></button>
                                          </div>
                                        </div>
                                      </fieldset>
                                    </form>
                                  </div>
                                  <!-- end form -->
                                  <!-- Text -->
                                  <div class="col-lg-6 dilv-right-box">
                                    <div class="dilv-right-box-text">
                                      <div class="Dv1">
                                    <p><b>Why Accurate address is important?</b> </p>
                                    <p class="cnt_Dv1">
                                        Make sure you get your products on time. If the address is not entered correctly,
                                        your package may be returned undelivered. You will then have to place new
                                        order. Save time and avoid frustration by entering the address information in appropriate
                                        boxes and double checking for typos and other errors.
                                    </p>
                                </div>
                                    </div>
                                  </div>
                                  <!-- end text -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End DELIVERY-->

                          <!-- ORDER SUMMARY -->
                          <div class="mb-0 card card-info summary " style="visibility: visible;">
                            <div class="card-header" role="tab" id="headingThree3">
                              <h4 class="card-title">
                                <a class="withripple collapsed" role="button" data-toggle="collapse" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                  STEP 3: ORDER SUMMARY<div class="ripple-container"></div>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree2" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingThree2" data-parent="#accordion2" style="">
                              <div class="card-body color-dark">
                                <div class="container row">
                                  <!-- product list -->
                                  <div class="top5">
                                    <div class="tpc">
                                      <div class="tp tp1 ztha">
                                          Product
                                      </div>
                                      <div class="tp tp2 zthb">
                                          Shipping &amp; Availability
                                      </div>
                                      <div class="tp tp3 zthc">
                                          Price
                                      </div>
                                      <div class="tp tp4 zthd">
                                          Discount
                                      </div>
                                      <div class="tp tp5 zthe">
                                          Quantity
                                      </div>
                                      <div class="tp tp6 zthf">
                                          Total
                                      </div>
                                      <div class="tp tp7 zthg" style="border-right: none;">
                                          &nbsp;
                                      </div>
                                      <div class="clear"></div>
                                    </div>
                           
                                    <div id="productlist" style="min-height: 175px; visibility: visible;">
                                      <div class="col2433197 cl_1">
                                        <div class="cl1 ztha">
                                          <div class="clcnt">
                                            <div class="cl1lt">
                                                    <div class="try fc_ckot_sp" style="display:none;">
                                                    </div>
                                                    <img src="assets/img/product/product.png">
                                                     <img src="https://d38qkvaxh36w5.cloudfront.net/brainbees/images/ng/m/pre-order-tag.png" style="position:absolute;left:0px;bottom: 10px;">
                                                </div>
                                   
                                                <div class="cl1rt">
                                                    <div class="p1">
                                                     <pro2433197>How Do We Guarantee Success?</pro2433197><br>
                                                        <span>Product description</span><br>
                                                         
                                                    </div>
                                                    <div class="dotted" onclick="$('#Offers_2433197').toggle()" onmouseover="$('#Offers_2433197').show()" onmouseout="$('#Offers_2433197').hide()" style="display:none;">
                                                        <div class="dotted1">+</div>                                                  
                                                        <div class="dotted2"> Offers Applied</div>                                                         
                                                    </div>  
                                                     <div id="Offers_2433197" class="offers_box" style="display:none;">
                                                        <ul>
                                                            
                                                        </ul>
                                                       </div>    
                                                 <div class="giftNotAval" style="display:block;"><br><span class="sgiftlogo fc_ckot_sp"><i class="fa fa-gift" aria-hidden="true"></i></span><span style="color: black;font-size: 11px;">Gift wrap is not available for this product.</span></div>
                                                </div>
                                              </div>
                                       </div>
                                        <div class="cl2 zthb">

                                            <div class="clcnt">
                                                <p>In stock</p>
                                               <!--  <div class="tp1">
                                                    <div class="tp_L" style="display:none">
                                                        <input type="radio" name="radDelivery2433197" value="" checked="checked">
                                                    </div>
                                                    <div class="tp_R" style="display:block;">
                                                        <span style="display:none">Standard Delivery<br>
                                                        </span>
                                                        <span style="display:block;">Tentative Delivery: <br><span class="limbu"> 18 to 19 Business Days</span></span>
                                                            
                                                    </div>
                                                    <div class="clear"></div>
                                                </div> -->
                                                
                                                <div class="tp1">
                                                    <div class="tp_L" style="display:none">
                                                       
                                                      <input type="radio" name="radDelivery2433197" value="">
                                                    </div>
                                                    <div class="tp_R">
                                                        <div class="nd">
                                                            
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                               
                                            </div>

                                        </div>
                                        
                                        <div class="cl3 zthc">

                                            <div class="clcnt">
                                              <!-- <span class="rs_sym rs4 "><i class="fa fa-inr" aria-hidden="true"></i></span><div class="op">739.00</div><div class="clear"></div> -->
                                               <span class="rs_sym rs1"><i class="fa fa-inr" aria-hidden="true"></i></span> <div class="np">500</div>
                                                  <!-- <div class="ys"><span class="y_sve"> Discount</span><br> <span class="rs_sym rs5"><i class="fa fa-inr" aria-hidden="true"></i></span>221.70</div><div class="clear"></div> -->
                                                 <div class="mrps clear">MRP incl. all taxes</div>
                                            </div>
                                        
                                        </div>
                                      
                                        <div class="cl4 zthd">

                                            <div class="clcnt">
                                                <div class="ds">
                                                    <!-- 30% OFF -->
                                                </div>
                                            </div>
                                       
                                        </div>
                             
                                        <div class="cl5 zthe">

                                            <div class="clcnt">
                                                <div class="promrp">
                                                    <p id="gadel_2433197" style="cursor: pointer;" onclick="return RemoveFromCart('2433197','NO','0',false)">-</p>
                                                    <p class="proqty">1</p>
                                                    <p id="gaadd_2433197" style="cursor: pointer;" onclick="AddToCart('2433197','1','NO','0',false,this,10,1,0)">+</p>
                                                    
                                                </div>
                                      <div class="crs_moq"></div>
                                            </div>
                                         
                                        </div>
                                      
                                        <div class="cl6 zthf">

                                            <div class="clcnt">
                                              <span class="rs_sym rs1"><i class="fa fa-inr" aria-hidden="true"></i></span>  <div class="np">500</div>
                                            </div>
                                    
                                        </div>
                                       
                                        <div class="cl7 zthg">

                                            <div class="clcnt" style="border-right: none;">
                                                <div class="edtcn">
                                                     <div class="edt fc_ckot_sp" onmouseover="$('#editpopup2433197').show()" onmouseout="$('#editpopup2433197').hide()" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>

                                                     <div class="tool_tip fc_ckot_sp" onmouseover="$(this).show()" onmouseout="$(this).hide()" id="editpopup2433197">
                                                        <div id="gasho_2433197" class="like fc_ckot_sp" onclick="ShortList('2433197',this)" title="Shortlist"></div>
                                                       <div id="garem_2433197" class="del fc_ckot_sp" onclick="return RemoveFromCart('2433197','NO','0',true)" title="Delete"></div>
                                                    </div>

                                                </div>
                                            </div>
                                    
                                        </div>
                            
                                        <div class="clear"></div>
                                      </div>
                             </div>
                               

                                <div class="btncon">

                                    <div class="btn hiddiv" id="divCoupon">
                                  
                                        <div class="pop_con" id="popupCoupon" style="display: none;">
                                            <div class="cop_code">
                                            <input maxlength="60" class="ip_cp" id="CouponCode" name="CouponCode" placeholder="ENTER COUPON CODE" type="text" value="" style="border: 1px solid rgb(206, 206, 206);">
                                               <span data-valmsg-for="CouponCode" class="field-validation-valid"></span>
                                            </div>
                                            <div class="tw_btn">
                                                <input type="button" class="ip_cp1" value="APPLY" onclick="validateCoupon();">
                                                <input type="button" class="ip_cp2" value="CANCEL" onclick="$('#popupCoupon').hide('fast',hideErrorMsgFor('CouponCode'));">
                                            </div>
                                             <div class="btn_comm" onclick="$('#popupCoupon').hide('fast',hideErrorMsgFor('CouponCode'));">
                                            <div class="btn">
                                                <div class="btnl">
                                                    <div class="fc_ckot_sp btnla btnl_a"></div>
                                                </div>

                                                <div class="clear"></div>
                                            </div>
                                       
                                            <div class="btnr Cnl">
                                                APPLY COUPON CODE
                                            </div>
                                        </div>
                                        </div>
                                    
                                   <div class="btn_comm" onclick="if($('#Tab31').css('display') != 'none') changetab(2);hideall();$('#popupCoupon').show();">
                                        <div class="btnl">
                                            <div class="fc_ckot_sp btnla btnl_a"></div>
                                        </div>
                                        <div class="btnr">apply coupon code</div>
                                       </div>
                                       <div class="clear"></div>
                                        <div class="offer_btm_btn" id="btnCouponDetailDiv" style="display: none;"></div>
                                        <div class="cashbackdiv" style="display: none;"><span> CashBack Earned</span> <span class="cashbackrup"></span> <span> : </span><span class="rs_sym rs6" style="margin-top: 6px;height:12px;"><i class="fa fa-inr" aria-hidden="true"></i></span><span id="CashbackAmt"></span> <span onmouseover="$('.cashbacktooltip').fadeIn(300)" onmouseout="$('.cashbacktooltip').fadeOut(300)" onclick="$('.cashbacktooltip').toggle()" style="cursor:pointer;">&nbsp;[?]</span></div>
                                    <div class="cashbacktooltip" style="margin: 20px;">Cashback coupon and redemption details will be mailed to you after succesfull delivery of your order</div>
                                    </div>

                                    <div class="btn" id="divLoyalty" style="display: none;">
                              
                                        <div class="pop_con" id="popupRedeemLoyalty" style="display: none;">
                                            <div id="PopLoyatyWrap">
                                               <div class="cop_code">
                                            <input maxlength="60" autocomplete="false" class="input-validation-error ip_cp" id="RedeemLoyaltyAmount" name="RedeemLoyaltyAmount" placeholder="ENTER AMOUNT" type="text" value="" style="border: 1px solid rgb(206, 206, 206);">
                                            <span data-valmsg-for="RedeemLoyaltyAmount" class="field-validation-valid"></span>
                                            </div>
                                            <div style="display: none;" id="availlay"><span class="rs_sym rs4"><i class="fa fa-inr" aria-hidden="true"></i></span><span class="loyal"></span></div>
                                            <div class="tw_btn">
                                                <input type="button" class="ip_cp1" value="APPLY" onclick="ApplyLoyaltyCash()">
                                                <input type="button" class="ip_cp2" value="CANCEL" onclick="$('#popupRedeemLoyalty').hide('fast',hideErrorMsgFor('RedeemLoyaltyAmount'));">
                                            </div>
                                                </div>
                                            <div class="LMsg"><span>*</span> You have to earn and collect minimum Rs 50 Loyalty Cash before you can redeem it in your future purchases.</div>
                                              <div class="btn_comm" onclick="$('#popupRedeemLoyalty').hide('fast',hideErrorMsgFor('RedeemLoyaltyAmount'));hideall();">
                                            <div class="btn">
                                                <div class="btnl">
                                                    <div class="fc_ckot_sp btnla  btnlb"></div>
                                                </div>

                                                <div class="clear"></div>
                                            </div>                                       
                                            <div class="btnr Cnl">
                                                redeem loyalty cash 
                                            </div>
                                        </div>
                                        </div>

                                     <div class="btn_comm" onclick="LoyaltyDivClick();">
                                        <div class="btnl">
                                            <div class="fc_ckot_sp btnlb btnla"></div>
                                        </div>
                                        <div class="btnr">redeem loyalty cash </div>
                                       </div>
                                        <div class="clear"></div>
                                        
                                        <div class="offer_btm_btn" id="btnLoyaltyDetailDiv" style="display: none;">
                            <div>
                              <span class="rs_sym rs4">
                                <i class="fa fa-inr" aria-hidden="true"></i>
                              </span>
                              <span id="lcAppliedSpan">0</span> of <span class="rs_sym rs4">
                                <i class="fa fa-inr" aria-hidden="true"></i>
                              </span><span id="loyal"></span>
                            </div>
                            <span class="dtl_colr">
                              <span onclick="showLoyaltyDetails()">Details</span>
                            </span>
                                                </div>
                                                </div>
<a style="float: right;" class="btn btn-raised btn-info collapsed" role="button" data-toggle="collapse" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">GO TO FINAL PAYMENT</a>
                                        
                                                <div class="btn hiddiv" id="divPayback" style="display:none;">                                      
                                                    <div class="pop_con" id="popupEarnPayback" style="">
                                                        <div id="PopPaybackWrap">
                                                        <div class="cop_code">
                                                        <input maxlength="16" autocomplete="off" class="ip_cp" id="EarnPayBackCard" name="EarnPayBackCard" placeholder="USE PAYBACK CARD / MOBILE NO" type="tel" value="" style="border: 1px solid rgb(206, 206, 206);">
                                                        <span data-valmsg-for="EarnPayBackCard" class="field-validation-valid"></span> 
                                                            </div>
                                                        <div class="tw_btn">
                                                            <input type="button" class="ip_cp1" value="APPLY" onclick="ValidateEarnPayback();">
                                                            <input type="button" class="ip_cp2" value="CANCEL" onclick="$('#popupEarnPayback').hide('fast',hideErrorMsgFor('EarnPayBackCard'));">
                                                        </div>
                                                            </div>
                                                        <div class="PMsg hiddiv"><span>*</span> Not applicable on purchasing/using  Guaranteed Savings Offer or Gift Certificate.</div>
                                                          <div class="btn_comm" onclick="$('#popupEarnPayback').hide('fast',hideErrorMsgFor('EarnPayBackCard'));hideall();">
                                                        <div class="btn">
                                                            <div class="btnl">
                                                                <div class="fc_ckot_sp btnla btnlc"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>                                    
                                                        <div class="btnr Cnl">
                                                            earn payback points 
                                                        </div>
                                                    </div>
                                                    </div>

                                                <div class="btn_comm" onclick="PaybackDivClick();">
                                                    <div class="btnl">
                                                        <div class="fc_ckot_sp btnlc btnla"></div>
                                                    </div>
                                                    <div class="btnr">earn payback points </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="offer_btm_btn" id="btnPaybackDetailDiv" style="display: none;"><span id="payb">60 points earned</span> <span class="dtl_colr">
                                                             <span onclick="showPaybackDetails()">Details</span></span></div>
                                                </div>

                                                <div class="btn hiddiv" id="divGiftWrap" style="display: none;">
                                                    <div class="pcontainer">
                                                        <div class="bpopupc" style="">
                                                            <div class="bpopup">
                                                                <div class="p1">
                                                                    <p>To:</p>                                                 
                                                                    <input type="text" value="" id="GiftTo" maxlength="40" style="border: 1px solid rgb(206, 206, 206);">
                                                                     <span data-valmsg-for="GiftTo" class="field-validation-valid"></span>  
                                                                </div>
                                                         
                                                                <div class="p2">
                                                                    <p>From:</p>                                                 
                                                                     <input type="text" value="" id="GiftFrom" maxlength="40" style="border: 1px solid rgb(206, 206, 206);">
                                                                     <span data-valmsg-for="GiftFrom" class="field-validation-valid"></span>                                                
                                                                </div>
                                                              
                                                                <div class="p3">
                                                                    <p>Message (140 Characters):</p>                                                      
                                                                     <textarea type="text" value="" maxlength="140" id="GiftMsg" placeholder="Here's to your little riser! From Shekhar" class="textn" style="border: 1px solid rgb(206, 206, 206);"></textarea>                                           
                                                                     <span data-valmsg-for="GiftMsg" class="field-validation-valid"></span>  
                                                                </div>
                                                        
                                                                <div class="p4">
                                                                    <input class="save" type="button" value="SAVE" onclick="SaveGiftMsg();">
                                                                    <input type="button" class="cancel" value="CANCEL" onclick="$('.bpopupc').hide('fast',hidegiftwraperr());">
                                                                    <div class="clera"></div>
                                                                </div>
                             
                                                                <div class="btn_comm" onclick="$('.bpopupc').hide('fast',hidegiftwraperr());">
                                                                 <div class="btn">
                                                    <div class="btnl">
                                                        <div class="fc_ckot_sp btnla btnld"></div>
                                                    </div>
                                                    <div class="btnr Cnl">add gift wrap @&nbsp;<span class="rs_sym rs4"><i class="fa fa-inr" aria-hidden="true"></i></span>30 </div>
                                                        </div>
                                                                    </div>
                                                                
                                                            </div>
                                                </div>
                                                 
                                                    </div>
                                                        <div class="btn_comm" onclick="GiftWrapClick()">
                                                    <div class="btnl">
                                                        <div class="fc_ckot_sp btnla btnld"></div>
                                                    </div>
                                                    <div class="btnr">add gift wrap @&nbsp;<span class="rs_sym rs4"><i class="fa fa-inr" aria-hidden="true"></i></span>30 </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="offer_btm_btn" id="btnGiftDetailDiv" style="display: none;"><span>Gift wrap Added</span> <span class="dtl_colr"><span onclick="GiftWrapClick()">Edit</span></span></div>
                                                </div>
                                              </div>                        
                                    </div>
                                  <!-- end product list -->
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- payment -->
                          <div class="mb-0 card card-info payment" style="visibility: visible; ">
                            <div class="card-header" role="tab" id="headingFour4">
                              <h4 class="card-title">
                                <a class="withripple collapsed" role="button" data-toggle="collapse" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                   STEP 4: PAYMENT </a>
                              </h4>
                            </div>
                            <div id="collapseFour2" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingFour2" data-parent="#accordion2" style="">
                              <div class="card-body color-dark">
                                <div class=" row">
                                  <div class="col-lg-9">
                                      <div class="card nav-tabs-ver-container">
                                        <div class="row">
                                          <div class="col-lg-3">
                                            <ul class="nav nav-tabs-ver nav-tabs-ver-info" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" href="#tez" aria-controls="tez" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> Tez</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" href="#payumoney" aria-controls="payumoney" role="tab" data-toggle="tab">
                                                    <i class="fa fa-inr" aria-hidden="true"></i> Payumoney</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" href="#phonepay" aria-controls="phonepay" role="tab" data-toggle="tab">
                                                    <i class="fa fa-desktop" aria-hidden="true"></i> Phone Pay</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" href="#paypal" aria-controls="paypal" role="tab" data-toggle="tab">
                                                    <i class="zmdi zmdi-card"></i> Pay Pal</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link " href="#paytm" aria-controls="paytm" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> Paytm</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link " href="#upi" aria-controls="upi" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> UPI</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link " href="#cashoffice" aria-controls="cashoffice" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> Cash In Office</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link " href="#creditcard" aria-controls="creditcard" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> Credit/Debit Card</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link " href="#netbanking" aria-controls="netbanking" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> Net Banking</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link " href="#payzapp" aria-controls="payzapp" role="tab" data-toggle="tab">
                                                  <i class="fa fa-credit-card" aria-hidden="true"></i> Payzapp</a>
                                                </li>
                                            </ul>
                                          </div>
                                          <div class="col-lg-9 nav-tabs-ver-container-content">
                                            <div class="card-body">
                                              <div class="tab-content">
<!-- tez-->
                                                <div role="tabpanel" class="tab-pane active" id="tez">
                                                  <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                  </div>
                                            </div>

<!-- pauomoney -->
                                            <div role="tabpanel" class="tab-pane" id="payumoney">
                                                  <div class="col-lg-10">
                                                    <form name="postForm" action="form_process.php" method="POST" >
                                                        <tr><!-- <td>txnid</td> --><td><input type="hidden" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
                                                        <tr><!-- <td>amount</td> --><td><input type="hidden" name="amount" value="500" /></td></tr>
                                                        <tr><!-- td>firstname</td> --><td><input type="hidden" name="firstname" value="Ashwini" /></td></tr>
                                                        <tr><!-- <td>email</td> --><td><input type="hidden" name="email" value="ashwinikale2231@gmail.com" /></td></tr>
                                                        <tr><!-- <td>phone</td> --><td><input type="hidden" name="phone" value="8177948347" /></td></tr>
                                                        <tr><!-- <td>productinfo</td> --><td><input type="hidden" name="productinfo" value="How Do We Guarantee Success?" /></td></tr>
                                                        <tr><!-- <td>success url</td> --><td><input type="hidden" name="surl" value="http://localhost/cloudage/CA_WebSite/success.php" size="64" /></td></tr>
                                                        <tr><!-- <td>failure url</td> --><td><input type="hidden" name="furl" value="http://localhost/cloudage/CA_WebSite/fail.php" size="64" /></td></tr>
                                                        <tr><td><input class="btn btn-raised btn-primary" type="submit" value="PAY NOW"/></td>

                                                          <!-- <td><input type="reset" /></td> --></tr>
                                                    </form>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                   <!--  <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button> -->
                                                  </div>
                                            </div>
<!-- phonepay -->
                                            <div role="tabpanel" class="tab-pane" id="phonepay">
                                                  <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                  </div>
                                            </div>
<!-- paypal-->
                                            <div role="tabpanel" class="tab-pane" id="paypal">
                                                  <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                  </div>
                                            </div>
<!-- paytm-->
                                            <div role="tabpanel" class="tab-pane" id="paytm">
                                                  <div class="col-lg-10">
                                                    <form method="post" action="pgRedirect.php">
<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo "ORDS" . rand(10000,99999999)?>">
<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
<input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
<input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="1">
<input value="PAY NOW" type="submit">
</form>
                                                    <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                  </div>
                                            </div>
<!-- upi-->
                                            <div role="tabpanel" class="tab-pane" id="upi">
                                                  <div class="col-lg-10">
                <p>Please provide valid UPI handle i.e (Virtual Payment Address)</p>
<input id="txtVpa" autocomplete="off" type="text" name="txtVpa" value="" class="" placeholder="" maxlength="200" style="border: 1px solid rgb(206, 206, 206);">
                                                    <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                  </div>
                                            </div>
<!-- office -->
                                             <div role="tabpanel" class="tab-pane" id="cashoffice">
                                                   <div class="sub_con" id="divCodMsgs"><b>Office Address :</b>
                                                      <p>C2-18, 2nd Floor, Bramha,<br>
                                                        Commercial Plaza,<br>
                                                        Kondhwa Khurd, Pune,<br>Maharashtra 411048.</p>
                                                  </div>
                                            </div>

<!-- creditcard -->
                                            <div role="tabpanel" class="tab-pane " id="creditcard">
                                                  <form class="form-horizontal credit" autocomplete="off">
                                                    <fieldset>
                                                          <div class="form-group row is-empty">
                                                            <label for="inputCard" autocomplete="false" class="col-lg-2 control-label">CARD NUMBER</label>
                                                              <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="inputCard"> 
                                                              </div>
                                                          </div>
                                                          <div class="form-group row is-empty">
                                                            <label for="inputNameoncard" autocomplete="new-password" class="col-lg-2 control-label">NAME ON CARD</label>
                                                            <div class="col-lg-10">
                                                            <input type="text" class="form-control" id="inputNameoncard"> </div>
                                                          </div>
                                                          <div class="form-group row is-empty">
                                                            <label for="inputExpiry" autocomplete="new-password" class="col-lg-2 control-label">EXPIRY DATE</label>
                                                              <div class="col-lg-4">
                                                                <div class="btn-group">
                                                                  <button type="button" class="btn ">Month</button>
                                                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="zmdi zmdi-chevron-down right only"></i>
                                                                    <div class="ripple-container"></div>
                                                                  </button>
                                                                  <ul class="dropdown-menu dropdown-menu-right dropdown-menu-primary" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(40px, -526px, 0px);">
                                                                    <li class="dropdown-header">Month</li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">01</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">02</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">03</a>
                                                                    </li>
                                                                    
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">04</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">05</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">06</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">07</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">08</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">09</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">10</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">11</a>
                                                                    </li>
                                                                    <li>
                                                                      <a class="dropdown-item" href="javascript:void(0)">12</a>
                                                                    </li>
                                                                  </ul>
                                                                </div>
                                                              </div>
                                                              <div class="col-lg-3">
                                                                <div class="btn-group year">
                                                                  <button type="button" class="btn ">Year</button>
                                                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="zmdi zmdi-chevron-down right only"></i>
                                                                    <div class="ripple-container"></div>
                                                                  </button>
                                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-primary" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(24px, -526px, 0px);">
                                                                      <li class="dropdown-header">Year</li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">19</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">20</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">21</a>
                                                                      </li>
                                                                      
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">22</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">23</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">24</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">25</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">26</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">27</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">28</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">29</a>
                                                                      </li>
                                                                      <li>
                                                                        <a class="dropdown-item" href="javascript:void(0)">30</a>
                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                              </div>
                                                          </div>
                                                          <div class="form-group row is-empty">
                                                            <label for="inputCvv" autocomplete="new-password" class="col-lg-2 control-label">CVV</label>
                                                            <div class="col-lg-10">
                                                              <input type="text" class="form-control" id="inputCvv"> </div>
                                                          </div>
                                                          <div class="form-group row justify-content-end">
                                                            <div class="col-lg-10">
                                                              <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
                                                            </div>
                                                          </div>
                                                    </fieldset>
                                                  </form>
                                            </div>
                                               
<!-- networking --> 
                                                <div role="tabpanel" class="tab-pane" id="netbanking">
                                                  <div class="btn-group">
                                                      <button type="button" class="btn btn-raised">-- Select Bank --</button>
                                                      <button type="button" class="btn btn-primary btn-raised dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="zmdi zmdi-chevron-down right only"></i>
                                                        <div class="ripple-container"></div>
                                                      </button>
                                                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-primary" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-60px, -553px, 0px);">
                                                          <li class="dropdown-header">Andhra Bank</li>
                                                          <li>
                                                            <a class="dropdown-item" href="javascript:void(0)">Axis Bank</a>
                                                          </li>
                                                          <li>
                                                            <a class="dropdown-item" href="javascript:void(0)">Bank of Bahrain &amp; Kuwait</a>
                                                          </li>
                                                          <li>
                                                            <a class="dropdown-item" href="javascript:void(0)">Bank of Baroda Corporate     Accounts</a>
                                                          </li>
                                                          <li>
                                                            <a class="dropdown-item" href="javascript:void(0)">Bank of Baroda Retail Accounts</a>
                                                          </li>
                                                            <li>
                                                            <a class="dropdown-item" href="javascript:void(0)">Bank of India</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Bank of Maharashtra</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Canara Bank</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Catholic Syrian Bank</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Central Bank Of India</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Citi Bank</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">City Union Bank</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">DBS Bank Ltd</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">DCB BANK Personal</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Deutsche Bank</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Development Credit Bank</a>
                                                          </li>
                                                          <li>
                                                          <a class="dropdown-item" href="javascript:void(0)">Dhanlaxmi Bank</a>
                                                          </li>
                                                        </ul>
                                                  </div>
                                                  <div class="sub_con" id="divCodMsgs"><p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p></div>
                                                  <a href="javascript:void(0)" class="btn btn-raised btn-info">PAY NOW<div class="ripple-container"></div></a>
                                                </div>

<!-- payzapp -->
                                                <div role="tabpanel" class="tab-pane" id="payzapp">
                                                  <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-raised btn-primary">PAY NOW</button>
<p>Note: After clicking on the "PAY NOW" button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to Firstcry.com to view details of your order.</p>
                                                  </div>
                                                </div>
<!-- end payzapp -->
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3">
                                    <div class="rgt_part_payment rgt">
                                      <div class="pay_box">
                                          <div class="boxSubTotal val lft s1">
                                              <span class="normal lft">Value of Products:</span>
                                             <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span>  <span class="bold lft" id="boxSubTotal">500.00</span>
                                          </div>
                                          <div class="boxShippingCharges val lft s1" style="display: none;">
                                              <span class="normal lft">Shipping Charge(+):</span>
                                              <span class="rs_sym rs3 bshipc"></span> <span class="bold lft" id="boxShippingCharges">0</span>
                                          </div>
                                           <div class="boxVatCharges val lft s1">
                                              <span class="normal lft">Estimated GST(+):</span>
                                              <span class="rs_sym rs3 bshipc"></span> <span class="bold lft" id="boxVatCharges">70</span>
                                          </div>
                                          <div class="boxCodCharge val lft" style="display: none;">
                                              <span class="normal lft">COD Charge(+):</span>
                                              <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span> <span class="bold lft" id="boxCodCharge"></span>
                                          </div>
                                           <!-- <div class="boxEMICharge val lft">
                                              <span class="normal lft">Discount(-):</span>
                                             <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span>  <span class="bold lft" id="boxEMICharge"></span>
                                          </div> -->
                                          <!-- <div class="boxYouSave val lft s1" style="display: block;">
                                              <span class=" normal lft">Discount(-):</span>
                                              <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span> <span class="bold lft" id="boxYouSave">641.40</span>
                                          </div> -->
                                          <!-- <div class="boxGiftSaving val lft s1" style="display: none;">
                                              <span class=" normal lft">Gift/Saving(-):</span>
                                              <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span> <span class="bold lft" id="boxGiftSaving">0</span>
                                          </div> -->
                                          <div class="boxCashRefund val lft s1" style="display: none;">
                                              <span class=" normal lft">Cash Refund(-):</span>
                                             <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span>  <span class="bold lft" id="boxCashRefund">0</span>
                                          </div>
                                          <div class="boxLoyaltyCash val lft s1" style="display: none;">
                                              <span class=" normal lft">Loyalty Cash(-):</span>
                                              <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span> <span class="bold lft" id="boxLoyaltyCash">0</span>
                                          </div>
                                          <!-- <div class="Paybackrdm val lft">
                                              <span class=" normal lft">Payback(-):</span>
                                              <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span> <span class="bold lft" id="PaybackUsed"></span>
                                          </div> -->
                                          <div class="lft final">
                                              <div class="normal lft fianlpaymnet">Final Payment:</div>
                                               <span class="rs_sym rs3"><i class="fa fa-inr" aria-hidden="true"></i></span><div class="bold lft finalrs" id="boxNetPayment">570</div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div> 
                              </div>
                            </div>
                          </div>
                          <!-- end payment -->
                        </div>
              </div>
                    <!-- end according -->
                </div>
        </div>
      </div>

    <!-- end logo start -->
        <!-- end body text -->
       <!-- Footer -->
    <?php include('footer-2.php'); ?>