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
    <span class="text-muted fw-light">Settings /</span> Add / Manage Province
</h4>
</div>

<!-- Category Model -->
<div class="modal fade" id="createnewscategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-title"><span class="modal-title-span">Add</span> Avatar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                <div class="row">
                    
                    
                    
                    <div class="col-md-6">
                    
                    	<div class="" style="text-align:center;;margin-top:30px;">
                            <input name="file1" type="file" class="dropify" data-height="90" />
                        </div>
                    
                    	<div class="details"
                            <b>Avatar Details</b>
                            <div class="txt">Name and Task of Avatar</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" name="avatar_name" placeholder="Type Avatar Name" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" name="avatar_task" placeholder="Type Avatar Task" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                    </div>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

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
        <h5 class="m-0">Province List</h5>
                
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Province</button>
            </div>
            
            
            
            
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Country</th>
            <th>Province Name</th>
            <th>Total People</th>
            
            <th>Options</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">

        @php
            $i=0;
        @endphp
        	
            @foreach ($state_list as $cont)
                @php
                    $i++;
                @endphp
            	<tr>
                    <td>{{$i}}</td>
                	
                    <td>
                        {{$cont->country_code}}

                    </td>
                    <td class="upper">
                    	{{$cont->name}}
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



    {{ $state_list->links() }}




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
      
	