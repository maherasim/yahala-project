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
    .w-5{
        max-width:20px;
    }
    .card nav{
        padding:15px;
    }
    .card nav div{
        margin-bottom:10px;
    }

</style>


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="d-flex justify-content-between">
            <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Settings /</span> Add / Manage Country
</h4>
</div>





 
<!-- Category Model -->
<div class="modal fade" id="createModal" aria-modal="true" role="dialog" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Add Country</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createForm"  method="post" enctype="multipart/form-data">
                    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName">Country Name</label>
                    <input type="text" name="name" class="form-control" value="" placeholder="Germany">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Country ISO2</label>
                    <input type="text" name="iso2" class="form-control" value="" placeholder="DE">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Country ISO3</label>
                    <input type="text" name="iso3" class="form-control" value="" placeholder="DEU">
                </div>
            </div>
        </div>
    </div>
</form>
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="createForm" class="btn btn-primary" onclick="">Create</button>
                                                </div>
                    </div>
    </div>
</div>



@if($message = Session::get('success'))
					<div class="alert alert-success alert-message">
						<i class="fa fa-check-circle"></i>
						{{ $message }}
					</div>
				@endif

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Countries List</h5>
                
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Country</button>
            </div>
       
            
           <!-- <form method="post" action="{{url('searchlocation')}}">
            @csrf

            <input name="search" />
</form>
-->
            
            
            
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Country Name</th>
            <th>States</th>
            <th>Cities</th>
            <th>Total People</th>
            
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">

        @php
            $i=0;
        @endphp
        	
            @foreach ($country_list as $cont)
                @php
                    $i++;
                @endphp
            	<tr>
                    <td>{{$i}}</td>
                	<td class="upper">
                    	{{$cont->name}}
                    </td>
                    <td>
                        @if($cont->states)
                            {{$cont->states->count()}}  
                        @else
                            0
                        @endif

                        
                    </td>
                    <td>
                        @if($cont->cities)
                            {{$cont->cities->count()}}  
                        @else
                            0
                        @endif
                    
                    </td>

                    <td>0</td>
                    
                    
                    
                    <td>



                    
                    	<a class="btn" href="#" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></a>
                        <i class="bx bx-trash me-1"></i>
                        
                   
                        
                    </td>
                
                </tr>
           
            @endforeach
        
                
            
                </tbody>
      </table>
    </div>



    {{ $country_list->links() }}




  </div>
  <!--/ Basic Bootstrap Table -->


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      @include('avatars/footer')
      
	