@extends('layouts/layoutMaster')

@section('title', 'Property Listing - Wizard Examples')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/wizard-ex-property-listing.js')}}"></script>
@endsection

@section('content')

<style>
      input.one::placeholder{
        font-weight: bolder;
        color:black;
    }


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
     
      margin-right: 10px;
      
      height: 30px;
      width: 30px;
      max-width: 30px;
      padding: 5px;
      display:none;
  }
  
  img{
    height:fit-content !important;
  }
  
  .bs-stepper .bs-stepper-content {
  padding: 0.5rem 1.5rem;
}
  b, .title-tx{
    padding:0px !important;
  }
  .mangprices{
    border-bottom:solid 1px #d9dee3;
  }
  .main-panel{
    background: #f2f2f2;
    margin-top: 10px;
    border-radius: 10px;
  }
  .max-plans{
    text-align:right;
    color:#DA6787;
    margin-bottom:5px;
  }
  
  #avatar_image{
    height:120px;
    /*border-radius:50%;*/
    width:120px;
    cursor:pointer;
  }
  #uploadimage{
    display:none;
  }
  
  .bot-20{
    margin-bottom:20px;
  }
  
  .cke_notification_warning{
    display:none; 
  }
  .price-list-heading{
    padding:10px;
    background:#fff;
    border-radius:10px;
    max-width:75%;
    margin:auto;
    text-align:center;
    margin-bottom:10px;
  }
  .price-list-heading h5{
    margin-bottom:0px;
  }
  .price-item{
    padding:15px;
    background:#fff;
    border-radius:10px;
    margin-bottom:10px;
  }
  .currency{
    background: #8d92a5;
    padding-left: 5px;
    border-radius: 50%;
    height: 20px;
    width: 20px;
    display: block;
    float: left;
    color: #fff;
    font-size: 13px;
    margin-right:3px;
  }
  .price{
    color:#ED1C25;
  }
  .txt-green{
    color:#1BC469;
    font-weight: 600;
  }
  .btn-save{
    margin-top:10px;
    background:#f2f2f2;
  }
  .dots-img{
    float:right;
    margin-top: 5px;
  }

  .price_details{
    width:calc(100% - 25px);
    float:left;
  }

</style>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Wizard examples /</span> Pricing List
</h4>

<!-- Property Listing Wizard -->

<div class="row">

<div class="col-md-8">

  
    

<div id="wizard-property-listing" class="bs-stepper vertical ">


    


  <div class="bs-stepper-content">
    
        <div class="row mangprices">
                <b>Manage Prices</b>
                <div class="title-tx">Title of Price</div>
          </div>
         
          
          <div class="col-md-12 container p-3 main-panel">
                        
      <div class="row">
              <div class="col-md-12 max-plans">
                  Max 5 Prices plan allowed
                </div>
                
                <div class="col-md-12 text-center bot-20">
                  <label for="uploadimage"><img id="avatar_image" src="{{asset('/images/uploadimage.png')}}" /> </label>
                            <input name="dp" id="uploadimage" type="file" onchange="loadFile(event)" class="dropify" data-height="90" accept="image/*" />
                            
                            <button type="button" class="btn btn-danger removebtn">X</button>
                </div>
    
        
           
          <div class="col-md-3">
              
                <label>Type Price Title</label>
                <input class="form-control mb-3 one" name="title"  type="text" class="mb-4" placeholder="Price Title...">

            </div>
            
            <div class="col-md-3">
              
                <label>Total Days Allowed</label>
                <input class="form-control mb-3 one" name="days" min="0" type="number" class="mb-4" placeholder="1" value="1" >

            </div>
            
            <div class="col-md-3">
              
                <label>Select Currency</label>
                <select class="form-control mb-3 one" name="currency"  class="mb-4" >
                  <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                    <option value="CHF">CHF</option>
                    <option value="CAD">CAD</option>
                    <option value="SAR">SAR</option>
                    <option value="AED">AED</option>
                    <option value="PKR">PKR</option>
                    <option value="INR">INR</option>
                    
                
                </select>

            </div>
            
            <div class="col-md-3">
              
                <label>Type Price</label>
                <input class="form-control mb-3 one" name="price" type="text" placeholder="Free" >

            </div>

            

            <div class="col-md-12 ">
              <label>Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
            </div>
      
        </div>



    </div>

  <div class="col-md-12 text-center">
    <button class="btn btn-save">
      Save
    </button>

  </div>
    


   

            

 
  
</div>
    
    </div>
  
</div>

<div class="col-md-4">
  
    <div class="main_side_bar">
    <div class="price-list-heading">
    <h5 class="d-flex justify-content-center">Our Pricing List</h5>
    </div>  
        
        
        <div style="padding:15px" class="coloun price-item">
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-inline">
                    <img src="{{asset('assets/img/free.png')}}" alt="" width="20px" height="25px">
                     
                    <h5><b>Standard</b></h5>
                </div>
                <div class="d-flex justify-content-inline">
                    <p class="price-free">
            <span class="currency">€</span> 
          Free</p>
                    <!--<img src="{{asset('assets/img/tick.PNG')}}" alt="" width="20px" height="20px">-->

                </div>
            </div>
            <p class="price_details"><span class="txt-green">&#10003; &nbsp;3 days</span> in the selected category
    
      
    </p>
    <img src="{{asset('assets/img/dots.jpg')}}" class="dots-img" alt="" width="20px" height="20px">
    <div class="clearfix"></div>

      <div>
      
      </div>

        </div>


<div style="padding:15px" class="coloun mt-4 price-item">
    <div class="d-flex justify-content-between ">
        <div class="d-flex justify-content-inline ">
            <img src="{{asset('assets/img/premium.png')}}" alt="" width="20px" height="25px">
            <h5>Starter</h5>
        </div>
        <div class="d-flex justify-content-inline">
            <p class="price">
      <span class="currency">€</span>   
      9,99</p>
            <!-- <img src="tick.PNG" alt="" width="20px" height="30px"> -->

        </div>
    </div>
    <p class="price_details"><span class="txt-green">&#10003; &nbsp;7 days</span> in <span class="txt-green">selected area</span> and 
    in <span class="txt-green">category</span> on <span class="txt-green">first place</span>
    
  </p>
  <img src="{{asset('assets/img/dots.jpg')}}" class="dots-img" alt="" width="20px" height="20px">
  <div class="clearfix"></div>
</div>


<!-- thr -->



<div style="padding:15px" class="coloun mt-5 price-item">
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-inline mt-1 ">
            <img src="{{asset('assets/img/advance.png')}}" alt="" width="20px" height="25px">
            <h5>Advanced</h5>
        </div>
        <div class="d-flex justify-content-inline">
            <p class="price">
      <span class="currency">€</span>   
      19,99</p>
            <!-- <img src="tick.PNG" alt="" width="20px" height="30px"> -->

        </div>
    </div>
    <p class="price_details"><span class="txt-green">&#10003; &nbsp;10 days</span> in <span class="txt-green">selected area </span>
    and in <span class="txt-green">category</span> on 
    <span class="txt-green">first place in Feeds</span>
    
  </p>
  <img src="{{asset('assets/img/dots.jpg')}}" class="dots-img" alt="" width="20px" height="20px">
  <div class="clearfix"></div>
</div>

    </div>
    
</div>
</div>

</div>
<!--/ Property Listing Wizard -->
@endsection
