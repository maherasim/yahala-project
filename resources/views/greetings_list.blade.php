@include('avatars/head')







<style>	
	.details{
		background: #f3f3f3;
	  	padding: 5px;
	  	border-radius: 10px;
	  	padding-bottom: 10px;
	  	margin-top: 5px;
	}
	.w-px-40{
		height:40px !important;
	}
	.upper{
		text-transform:uppercase;
	}
	.text-rigth{
		float:left;
		margin-right:10px;
	}
	.ava-link{
		color:unset;
	}


    .modal .modal-header .btn-close {
    margin-top: -1.25rem;
    position: fixed;
    margin-left: 495px;
}
.dropify-wrapper .dropify-message span.file-icon{
    display:block !important;
    line-height: 50px;
    display: block !important;
    width: 100%;
}	
.removebtn{
		position: absolute;
		  margin-top: 15px;
		  margin-right: 10px;
		  margin-left: -30px;
		  height: 30px;
		  width: 30px;
		  max-width: 30px;
		  padding: 5px;
		  display:none;
	}
	
</style>


      <!-- Content wrapper -->
     
     <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <style>
    .modal .modal-header .btn-close {
    margin-top: -1.25rem;
    position: fixed;
    margin-left: 495px;
}
.dropify-wrapper .dropify-message span.file-icon{
    display:block !important;
    line-height: 50px;
    display: block !important;
    width: 100%;
}
	.card-heading{
		background:#f2f2f2;
		padding: 5px !important;
	}
	.card-heading img{
		height:22px !important;
		width:22px !important;
		border-radius:0px !important;
	}
	.user-block{
		background: #fff;
  		border-radius: 5px;
  		margin-bottom: 5px;
  		padding: 0px 5px;;
		width: 85%;
		display:flex;
		float:left;
		margin-right:10px;
	}
	.user-block .image{
		margin-top:5px;
		margin-right:10px;
	}
	.cross-heading{
		padding-top:1px;	
		float:right;
	}
	.dotted{
		display: list-item !important;
		margin-left:10px;
		font-size:10px;
	}
	.dotted-href{
		color:#333 !important;
	}
	.delcross{
		font-size:1.4rem !important;
		color:#F2555B !important;
	}
	.post-details{
		background: #f2f2f2 !important;
		margin-bottom:10px;
		border-radius:5px;
		padding:5px;
		margin:5px;
		margin: 10px 20px;
	}
	.modal-header{
		background:#f2f2f2;
		padding: 5px 10px;
	}
	.pr-img{
		border-radius:5px;
		height:30px;
	}
	.prod-left{
		width:35px;
		float:left;
		padding-top:5px;
	}
	.prod-right{
		width:calc(100% - 35px);
		float:left;
	}
	.prod-heading{
		font-weight:bold;
		font-size:13px;
	}
	.prod-txt{
		font-size:12px;
	}	
	.card hr{
		margin: 0.6rem;
	}
	
	.post-image img{
		width:100%;
	}
	.invoice-img{
		width:100%;
	}
	
</style>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Greeting </span> /Add Cards
</h4>


 <ul class="nav nav-pills flex-column flex-md-row mb-3 d-flex justify-content-end align-item-end">
               
      
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createcategoryModal_new">Add New Cards</button>
            </ul>
  <!--/ User Sidebar -->

 <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-md-12 ">
<div class="row ">
           
        
        
@foreach($greetings as $greet)
        
        <div class="column col-lg-3">
          <div id="feed-post-1" class="card is-post">
              <!-- Main wrap -->
              <div class="content-wrap">
                  <!-- Post header -->
                  <div class="card-heading justify-content-between">
                      <!-- User meta -->
                      <div class="user-block">
                          <div class="image">
                              <img src="https://www.w3schools.com/howto/img_avatar.png" data-user-popover="1" alt="">
                          </div>
                          <div class="user-info">
                              <span class="d-flex"><a href="#" class="dotted">Alex Smith</a></span>
                              <span class="time dotted">Wed 29 Nov 1:49 pm</span>
                          </div>
                      </div>
                      <!-- Right side dropdown -->
                      <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                        <div class="d-flex justify-content-start align-items-center ">
                                <!--<button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>-->
                                <!--</button>
                                <button type="button" class="btn btn-sm btn-icon popup" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>-->
                                
                                <button class="btn btn-sm btn-icon delcross"> ☒</button>
                                
                            </div>

                   
                  </div>
                  <!-- /Post header -->

                  <!-- Post body -->
                  <div class="card-body">
                      <div class="post-image">
                          <a data-fancybox="post1" data-lightbox-type="comments">
                          <!--  <video controls="" class="">-->
                          <!--    <source src="https://dash.yekbun.net/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4">-->
                          <!--</video>-->
                           <img src="https://dashboard.yekbun.net/public//assets/img/image.png" data-user-popover="1" alt="">
                          </a>
                          <!-- Action buttons -->

                      </div>
                      
                      <div class="post-details">
                      	<h6>Product Details</h6>
                      	
                        <div class="pr-details">
                        	<div class="prod-left">
                            	<img src="{{asset('/images/pr-title.png')}}" class="pr-img" />
                            </div>
                            <div class="prod-right">
                            	
                                <div class="prod-heading">Product Title</div>
                                <div class="prod-txt">Title of the Product</div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="prod-left">
                            	<img src="{{asset('/images/pr-time.png')}}" class="pr-img" />
                            </div>
                            <div class="prod-right">
                            	
                                <div class="prod-heading">Start & End Date</div>
                                <div class="prod-txt">Start: 08.08.2024 - 09.08.2024</div>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            <hr />
                            <div class="prod-left">
                            	<img src="{{asset('/images/pr-plan.png')}}" class="pr-img" />
                            </div>
                            <div class="prod-right">
                            	
                                <div class="prod-heading">Select Plan</div>
                                <div class="prod-txt">Standard or Premium or Advanced</div>
                                
                            </div>
                        	
                            <div class="clearfix"></div>
                            <hr />
                            
                            <div class="text-center">
                            	<b>Invoice</b>
                            
                            	<img src="{{asset('/images/invoices.png')}}" class="pr-img20" />
                            </div>
                        </div>
                        
                      </div>
                      
                      
                      
                  </div>
                  <!-- /Post body -->
              </div>
              <!-- /Main wrap -->

              <!-- Post #1 Comments -->
              <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                <div class="comments-header">
                                  </div>
                  <!-- Comments body -->
                  <div class="comments-body has-slimscroll">
                    <img src="https://dash.yekbun.net/assets/svg/icons/Comment- area.svg" style="width: 100%" alt="">
                </div>
                <!-- /Comments body -->
              </div>
              <!-- /Post #1 Comments -->
          </div>
      </div>

@endforeach

            </div>
  <!-- User Content -->
   

            <!-- User Pills -->
          
            <!--/ User Pills -->





        </div>
  <!-- User Content -->
    
 


    
  

<!-- Modal -->
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Edit User Information</h3>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        <form id="editUserForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalEditUserFirstName">First Name</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalEditUserLastName">Last Name</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="col-12 fv-plugins-icon-container">
            <label class="form-label" for="modalEditUserName">Username</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" placeholder="john.doe.007">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">Email</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">Status</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected="">Status</option>
              <option value="1">Active</option>
              <option value="2">Inactive</option>
              <option value="3">Suspended</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">Tax ID</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">+1</span>
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">Language</label>
            <div class="position-relative"><div class="position-relative"><select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserLanguage">
              <option value="">Select</option>
              <option value="english" selected="" data-select2-id="17">English</option>
              <option value="spanish">Spanish</option>
              <option value="french">French</option>
              <option value="german">German</option>
              <option value="dutch">Dutch</option>
              <option value="hebrew">Hebrew</option>
              <option value="sanskrit">Sanskrit</option>
              <option value="hindi">Hindi</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="18"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">Country</label>
            <div class="position-relative"><div class="position-relative"><select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalEditUserCountry">
              <option value="" data-select2-id="45">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="44" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserCountry-container"><span class="select2-selection__rendered" id="select2-modalEditUserCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
<!-- Add New Credit Card Modal -->
<div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Edit Card</h3>
          <p>Edit your saved card details</p>
        </div>
        <form id="editCCForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 fv-plugins-icon-container">
            <label class="form-label w-100" for="modalEditCard">Card Number</label>
            <div class="input-group input-group-merge has-validation">
              <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2">
              <span class="input-group-text cursor-pointer p-1" id="modalEditCard2"><span class="card-type-edit"><img src="https://dashboard.yekbun.net/public//assets/img/icons/payments/visa-cc.png" height="28"></span></span>
            </div><div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditName">Name</label>
            <input type="text" id="modalEditName" class="form-control" placeholder="John Doe" value="John Doe">
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalEditExpiryDate">Exp. Date</label>
            <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit" placeholder="MM/YY" value="08/28">
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalEditCvv">CVV Code</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit" maxlength="3" placeholder="654" value="XXX">
              <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Card Verification Value" data-bs-original-title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Set as primary card</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="address-title">Add New Address</h3>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <form id="addNewAddressForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">

          <div class="col-12">
            <div class="row">
              <div class="col-md mb-md-0 mb-3">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Home</span>
                      <small> Delivery time (9am – 9pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked="">
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-3">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                    <span class="custom-option-body">
                      <i class="bx bx-briefcase"></i>
                      <span class="custom-option-title"> Office </span>
                      <small> Delivery time (9am – 5pm) </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalAddressFirstName">First Name</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="John">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="col-12 col-md-6 fv-plugins-icon-container">
            <label class="form-label" for="modalAddressLastName">Last Name</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="Doe">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Country</label>
            <div class="position-relative"><div class="position-relative"><select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" tabindex="-1" aria-hidden="true" data-select2-id="modalAddressCountry">
              <option value="" data-select2-id="72">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="71" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalAddressCountry-container"><span class="select2-selection__rendered" id="select2-modalAddressCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div>
          </div>
          <div class="col-12 ">
            <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="12, Business Park">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="Mall Road">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">Landmark</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">City</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="Los Angeles">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">State</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="California">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">Zip Code</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control" placeholder="99950">
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Use as a billing address?</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->
<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Add New Card</h3>
          <p>Add new card to complete payment</p>
        </div>
        <form id="addNewCCForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 fv-plugins-icon-container">
            <label class="form-label w-100" for="modalAddCard">Card Number</label>
            <div class="input-group input-group-merge has-validation">
              <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2">
              <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
            </div><div class="fv-plugins-message-container invalid-feedback"></div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddCardName">Name</label>
            <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe">
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
            <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY">
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalAddCardCvv">CVV Code</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654">
              <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Card Verification Value" data-bs-original-title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Save card for future billing?</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary btn-reset mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
<!-- Add New Credit Card Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Upgrade Plan</h3>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
          <div class="col-sm-9">
            <label class="form-label" for="choosePlan">Choose Plan</label>
            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
              <option selected="">Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class="mx-md-n5 mx-n3">
      <div class="modal-body">
        <h6 class="mb-0">User current plan is standard plan</h6>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-2 mt-3">
            <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
            <h1 class="display-3 mb-0 text-primary">99</h1>
            <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
          </div>
          <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

<div class="modal fade modal-6698d17fb4a90" id="createcategoryModal_new" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                
                
                <div class="card-heading justify-content-between">
                      <!-- User meta -->
                      <div class="user-block">
                          <div class="image">
                              <img src="https://www.w3schools.com/howto/img_avatar.png" data-user-popover="1" alt="">
                          </div>
                          <div class="user-info">
                              <span class="d-flex"><a href="#" class="dotted dotted-href">Alex Smith</a></span>
                              <span class="time dotted">Wed 29 Nov 1:49 pm</span>
                          </div>
                      </div>
                      <!-- Right side dropdown -->
                      <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                        <div class="d-flex justify-content-start align-items-center cross-heading">
                                <!--<button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>-->
                                <!--</button>
                                <button type="button" class="btn btn-sm btn-icon popup" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>-->
                                
                                <button class="btn btn-sm btn-icon delcross"> ☒</button>
                                
                            </div>

                   
                  </div>
                    
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
            	<!-- starting -- >
                
                
                <div id="feed-post-1" class="card is-post">
              <!-- Main wrap -->
              <div class="content-wrap">
                  <!-- Post header -->
                  
                  <!-- /Post header -->

                  <!-- Post body -->
                  <div class="card-body">
                      <div class="post-image">
                          <a data-fancybox="post1" data-lightbox-type="comments">
                          <!--  <video controls="" class="">-->
                          <!--    <source src="https://dash.yekbun.net/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4">-->
                          <!--</video>-->
                           <img src="https://dashboard.yekbun.net/public//assets/img/image.png" data-user-popover="1" alt="">
                          </a>
                          <!-- Action buttons -->

                      </div>
                      
                      <div class="post-details">
                      	<h6>Product Details</h6>
                      	
                        <div class="pr-details">
                        	<div class="prod-left">
                            	<img src="{{asset('/images/pr-title.png')}}" class="pr-img" />
                            </div>
                            <div class="prod-right">
                            	
                                <div class="prod-heading">Product Title</div>
                                <div class="prod-txt">Title of the Product</div>
                                
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="prod-left">
                            	<img src="{{asset('/public/assets/img/pr-time.png')}}" class="pr-img" />
                            </div>
                            <div class="prod-right">
                            	
                                <div class="prod-heading">Start & End Date</div>
                                <div class="prod-txt">Start: 08.08.2024 - 09.08.2024</div>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            <hr />
                            <div class="prod-left">
                            	<img src="{{asset('/images/pr-plan.png')}}" class="pr-img" />
                            </div>
                            <div class="prod-right">
                            	
                                <div class="prod-heading">Select Plan</div>
                                <div class="prod-txt">Standard or Premium or Advanced</div>
                                
                            </div>
                        	
                            <div class="clearfix"></div>
                            <hr />
                            
                            <div class="text-center">
                            	<b>Invoice</b><br />
                            
                            	<img src="{{asset('/images/invoices.png')}}" class="invoice-img" />
                            </div>
                        </div>
                        
                      </div>
                      
                      
                      
                  </div>
                  <!-- /Post body -->
              </div>
              <!-- /Main wrap -->

              <!-- Post #1 Comments -->
              <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                <div class="comments-header">
                                  </div>
                  <!-- Comments body -->
                  <div class="comments-body has-slimscroll">
                    <img src="https://dash.yekbun.net/assets/svg/icons/Comment- area.svg" style="width: 100%" alt="">
                </div>
                <!-- /Comments body -->
              </div>
              <!-- /Post #1 Comments -->
          </div>
                
                
                <!-- starting ends -->
            
            </div>
        </div>
   </div>
</div>
        
            



<div class="modal fade modal-6698d17fb4a90" id="createcategoryModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Add Greeting Card</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <style>
    .file-icon{
       display:none;
    }
</style>

<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
<form id="createForm" method="POST" action="https://dashboard.yekbun.net/music" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="RDtgsZLTf3tBdHLqOoXhhNrjPDSOgUOfWhDuoVnU">    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
            

              <div class="col-md-12">
                <label class="form-label" for="fullname">Product Title</label>
               
                <input class="form-control" style="width:100%;" placeholder="Product Title">
              
              </div>
           
                <!--<div class="col-md-12">-->
                <!--    <label class="form-label" for="fullname">Select Artist</label>-->
                <!--    <select class="form-select" aria-label="Default select example" name="artist_id">-->
                <!--        <option selected value="">Select</option>-->
                       
                    
                <!--    </select>-->
                  
               
                <!--</div>-->
             
         <div class="col-12">
                  <div class="card">
                  
                    
                     <label for="uploadimage"></label>
                     
                     
                    <div class="card-body p-0">
                    
                    <img src="" id="avatar_image" />
                     <button type="button" class="btn btn-danger removebtn">X</button>
                       
                        <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"> <p>Drag and drop a file here or click</p></span><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div>
                      
                        <input name="dp" id="uploadimage" type="file" onchange="loadFile(event)" class="dropify" data-height="90" accept="image/*" />
                        
                        <button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                        
                        
                    </div>
                </div>
            </div>
            
            
             <div class="col-md-12">
                <label class="form-label" for="fullname">Start Date</label>
                <input class="form-control" type="date" name="start_date" placeholder="dd.mm.yyyy">
              </div>
              
              <div class="col-md-12">
                <label class="form-label" for="fullname">End Date</label>
                <input class="form-control" type="date" name="end_date" placeholder="dd.mm.yyyy">
              </div>
              
              <div class="col-md-12">
                <label class="form-label" for="fullname">Select Plan</label><br />
                <input  type="radio" name="pr_plan" value="Standard" id="standard">
                <label for="standard">Standard &nbsp;&nbsp;&nbsp;</label>
                  
                <input  type="radio" name="pr_plan" value="Premium" id="premium"> 
                <label for="premium">Premimum &nbsp;&nbsp;&nbsp;</label>
                
                <input  type="radio" name="pr_plan" value="Advanced" id="advanced">
                <label for="advanced">Advanced </label> 
              </div>
           
          
        </div>
    </div>
    </div>
</form>

<script>
    'use strict';

    dropZoneInitFunctions.push(function (){
            // previewTemplate: Updated Dropzone default previewTemplate

            const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                                    <div class="dz-details">
                                      <div class="dz-thumbnail" style="width:95%">
                                        <img data-dz-thumbnail>
                                        <span class="dz-nopreview">No preview</span>
                                        <div class="dz-success-mark"></div>
                                        <div class="dz-error-mark"></div>
                                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                        </div>
                                      </div>
                                      <div class="dz-filename" data-dz-name></div>
                                      <div class="dz-size" data-dz-size></div>
                                    </div>
                                    </div></div></di>`;

            // Multiple Dropzone

            const dropzoneMulti = new Dropzone('#dropzone-audio', {
                url: 'https://dashboard.yekbun.net/file/upload',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': 'RDtgsZLTf3tBdHLqOoXhhNrjPDSOgUOfWhDuoVnU'
                },
                sending: function (file, xhr, formData) {
                    formData.append('folder', 'music');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="audio_paths[]" value="${response.path}" data-path="${response.path}">`;
                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }

                    $.ajax({
                        url: 'https://dashboard.yekbun.net/file/delete',
                        method: 'delete',
                        headers: {
                            'X-CSRF-TOKEN': 'RDtgsZLTf3tBdHLqOoXhhNrjPDSOgUOfWhDuoVnU'
                        },
                        data: {path: file.previewElement.dataset.path},
                        success: function () {}
                    });

                    return this._updateMaxFilesReachedClass();
                }
            });
        });
        
</script>
<script src="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js
">
  
</script>
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="createForm" class="btn btn-primary" onclick="">Add</button>
                                                </div>
                    </div>
    </div>
</div>




<!-- /Modal -->


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>

       
        <!--/ Content wrapper -->
      @include('avatars/footer')
      
	
    <script>
			
			
			var imgsrc = $("#avatar_image").attr("src");
			
			
			
			setTimeout(function(){
				$(".alert-message").fadeOut("slow");
			}, 5000);
		
		
			function addnew(){
				var str = '<div class="col-md-12 sources">'
                str = str + '<input class="form-control source_list" name="source_link[]" placeholder="Add Source Link Here" />'
				str = str + '<button type="button"  class="btn btn-sm btn-icon source_btn remove" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Add">';
				str = str + '<i class="bx bx-trash"></i></button></div>';
				
				$("#sourcelist").append(str);	
			}
			
			$(document).on("click", ".remove", function(){
				$(this).closest(".sources").html("");
				
			});
			
			
			var loadFile = function(event) {
				var image = document.getElementById('avatar_image');
				
				image.src = URL.createObjectURL(event.target.files[0]);
				$(".removebtn").show();
				$(".dropify-wrapper").hide();
			};
			
			$(document).on("click", ".removebtn", function(){
				$("#avatar_image").attr("src", imgsrc);
				$(".removebtn").hide();
				$(".dropify-wrapper").show();
				
				var fileInput = document.getElementById('uploadimage')
			   fileInput.value = ''
			   fileInput.dispatchEvent(new Event('change'));
				
			});
		
    

</script>