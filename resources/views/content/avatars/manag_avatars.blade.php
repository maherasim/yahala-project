@extends('layouts/layoutMaster')

@section('title', 'Avatar - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css " rel="stylesheet">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>

<style>	
	.avatar_details{
		background: #f3f3f3;
	  	padding: 10px;
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
		float:right;
	}
	.av_image{
		width:100%;
		border-radius:5px;
	}
	.card{
		padding-top:10px;
		padding-bottom:20px;
	}
	.heading {
		font-weight:bold;
		font-size:18px;
		color:#1c274c;
	}
	.details{
		margin-bottom:10px;
	}
	.dashhr{
		width: 60%;
		  text-align: center;
		  margin: auto;
		  color:#fff !important;
		  border-top: 4px solid;
	}
	.postshr{
		margin-bottom:20px !important;
		  text-align: center;
		  margin: auto;
		  color:#fff !important;
		  border-top: 4px solid;
	}
	.del_feed{
		cursor:pointer;
	}
	.feeds_div{
		margin:auto;
		
	}
	.feeds_container{
		padding:10px;
	}
	.w-px-30{
		height:30px;
		width:30px;
		float:left;
		margin-right:5px;
	}
	.post_avatar{
		width:100px;
		float:left;
		font-size:13px;
		
	}
	.post_time{
		float:right;
		color:#44Af74;
		font-weight:bold;	
	}

	.post_schedule .post_time{
		width:calc(100% - 140px);
		margin-top:10px;
		font-size:10px;
		text-align:right;
	}

	.heading_post{
		font-weight:bold;
	}
	.post_img img{
		width:100%;
		border-radius:5px;
	}
	.feeds{
		background:#fff;
		padding:5px;
		border-radius:10px;
	}
	.folors{
		margin-top:10px;
	}
	.fol_img{
		height:30px;
		width:30px;
		border-radius:50%;
		position: relative;
  margin-left: -15px;
	}
	.z-100{
		z-index:100;
	}
	.z-90{
		z-index:90;
	}
	.z-80{
		z-index:80;
	}
	.z-70{
		z-index:70;
	}
	.z-60{
		z-index:60;
	}
	.z-50{
		z-index:50;
	}
	.z-40{
		z-index:40;
	}
	.z-30{
		z-index:30;
	}
	
	.postbox{
		background:#fff;
		padding:5px;
		border-radius:5px;
		margin-bottom: 15px;
	}
	.article_txt{
		width:100%;
		font-size:11px;
	}
	.artilce_title{
		float:left;
		width:60%;
		font-size:13px;
	}
	.article_time{
		width:40%;
		float:left;
		text-align:right;
		font-size:10px;	
	}
	.article_btn{
		width:50% !important;
	}
	.article_details{
		background:#f3f3f3;
		border-radius:5px;
		margin-top: 8px;
		padding:5px;
		margin-bottom: 5px;
	}
	.btn-share{
		font-size:11px;
		padding: 1px 8px;
	}
	.btn-share-like{
		background:#44Af74;
		
	}
	.btn-share-denied{
		
		background:#F2555B;
	}
	.btn-share-like span{
		font-size: 18px;
  		margin-right: 5px;
  		margin-top: -2px;
	}
	.btn-share-denied span{
		font-size: 18px;
  		margin-left: 5px;
  		margin-top: -2px;
	}
	.articles_btns{
		text-align:center;
	}
	.emojies{
		background: #f3f3f3;
		  width: 70px;
		  border-radius: 5px;
		  float:left;
		  text-align:center;
	}
	.margin-t-10{
		margin-top:10px;
	}
	.shares_options{
		background: #f3f3f3;
		border-radius: 5px;
		width:calc(100% - 90px);
		margin-left:20px;
		float:right;
		text-align:center;
	}
	.shareimg{
		width:100%;
	}
	.show_details{
		cursor:pointer;
	}

</style>


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="d-flex justify-content-between">
    <h4 class="fw-bold py-3 mb-4">
          Manage Avatars
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
    
       <div class="row">
       		<div class="col-sm-2">
            
            	@php
                	$count = 0;
                    $mainav = null;
                @endphp
               
            
            	@foreach ($avatars as $av)
                	
                    @php
                    	
                    	if($id == "0" && $count == 0){
                        	$mainav = $av;
                        }else if($id == $av->id){
                        	$mainav = $av;
                        }
                    @endphp
                    
                    <div class="show_details" cid="{{$av->id}}">
                    <div class="text-center ">
                    	@if($av->image != "")
                        	<img src="{{asset('/public/images/' . $av->image)}}" alt="" class="w-px-40 h-auto rounded-circle">
                        @else 
                        	<img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-40 h-auto rounded-circle">
                        @endif
                        </div>
                    
                    <div class="text-center">
                    	{{$av->name}}
                    </div>
                	
                    <div class="text-center">
                    	{{$av->task}}
                    </div>
                   </div> 
                    <hr />
                @endforeach
            </div>


			<input id="main_avid" value="{{$mainav->id}}" type="hidden" />
            
            <!-- avatar list -->
            <div class="col-sm-4 ">
            	<div class="avatar_details">
            	<div class="row">
                	<div class="col-sm-7">
                    	<div class="heading av_name">{{$mainav->name}}</div>
                        <div class="details av_task">{{$mainav->task}}</div>
                        
                        <div class="heading">Join Date</div>
                        <div class="details av_join">{{ \Carbon\Carbon::parse($mainav->created_at)->format('d, m Y')}}</div>
                        
                        <div class="heading">Member Since</div>
                        <div class="details av_time">01 Year - 11 Months</div>
                    </div>
                    <div class="col-sm-5">
                    	@if($mainav->image != "")
                        	<img class="av_image" src="{{asset('/public/images/' . $mainav->image)}}" />
                        @else
                        	<img class="av_image" src="https://www.w3schools.com/howto/img_avatar.png" />
                        @endif
                    	
                    </div>
                </div>
                
                <hr class="dashhr" />
                
                <div class="row text-center feeds_div">
                	<div class="col-sm-4 feeds_container">
                    	<div class="feeds">
                        	<div class="heading">Feeds</div>
                        	<div class="details av_feeds">12k</div>
                        </div>
                    	
                    </div>
                    <div class="col-sm-4 feeds_container">
                    	<div class="feeds">
                    		<div class="heading">Like</div>
                        	<div class="details av_like">12k</div>
                        </div>
                    </div>
                    <div class="col-sm-4 feeds_container">
                    	<div class="feeds">
                    		<div class="heading">Follower</div>
                        	<div class="details av_follower">12k</div>
                       </div>
                    </div>
                </div>
                
                <hr class="dashhr" />
                
                <div class="row text-center folors">
                	<div class="col-sm-12">
                    	<img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-100" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-90" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-80" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-70" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-60" />
                        <img src="https://www.w3schools.com/howto/img_avatar.png" class="fol_img z-50" />
                        Followers
                    </div>
                </div>
                <br>
				<hr class="dashhr" />
				<br> 
				<div class="row text-center feeds_div">
				<div class="col-sm-6">

						<div class="feeds">
						<div class="heading">Working Day</div>
                        	<div class="details av_feeds feed_day"></div>
                        </div>
					</div>
					<div class="col-sm-6">
						<div class="feeds">
							<div class="heading">Working Time</div>
                        	<div class="details av_feeds feed_time"></div>
                        </div>
					</div>
					
					<div class="col-sm-6 margin-t-10">
						<div class="feeds">
							<div class="heading">Feeds per Day</div>
                        	<div class="details av_feeds feed_per_day"></div>
                        </div>
						</div>
						<div class="col-sm-6 margin-t-10">
						<div class="feeds">
							<div class="heading">Feed Time</div>
                        	<div class="details av_feeds feed_per_time">Every 2 Hours</div>
                        </div>

				</div>
					</div>

				</div>

            </div>
            <!-- avatar list end -->


            
            <!-- post list -->
            <div class="col-sm-3 ">
            	<div class="avatar_details">
                	<div class="heading">
                    	Scheduled Feeds
                    </div>
                    <div class="details">
                    	Will be published soon
                    </div>
                    <hr class="postshr" />
                    
						<div id="sch_feeds">
							Loading...
					</div>


					<!--
                    <div class="postbox post_schedule">
                    
                        <div class="post-innter">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="w-px-30 h-auto rounded-circle">
                            <div class="post_avatar">
                                <div class="heading_post av_name">Avatar Name</div>
                                <div class="details_post av_task">&nbsp;&nbsp;Avatar Task</div>
                            </div>
                            <div class="post_time">
                                Online in <span id="remtime1">05:19</span>
                            </div>
                            <div class="post_img">
                                <img src="{{asset('/public/images/post.png')}}" />
                            </div>
                            
                            <div class="article_details">
                            
                            	<div class="artilce_title">
                                	Title of Article
                                </div>
                                <div class="article_time" id="time1">
                                	
                                </div>
                                <div class="clearfix"></div>
                                <div class="article_txt">
                                	Some text will be where when user have 
                                </div>
                            
                            </div>
                            
                            <div class="col-sm-6 artilce_title articles_btns">
                            	<button class="btn btn-success btn-share btn-share-like">
                                <span>&#9745;</span>
                                Allow to Share
                                </button>
                            </div>
                            
                            <div class="col-sm-6 artilce_title">
                            	<button class="btn btn-danger btn-share btn-share-denied">Denied to Share <span>&#9746;</span></button>
                            </div>
                            
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
					-->
                	
                </div>
            </div>
            
             <!-- post list -->
            <div class="col-sm-3 ">
            	<div class="avatar_details">
                	<div class="heading">
                    	Already Online
                    </div>
                    <div class="details">
                    	Is Already Online
                    </div>
                    <hr class="postshr" />
                    

				<div id="post_online">	
                    Loading...
					</div>
                    <!-- post box end -->
                    
                    <!-- post box end -->
                	
                </div>
            </div>
                
            <!-- post list end -->
       
       </div>  
            
    
  </div>
  <!--/ Basic Bootstrap Table -->


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->

        
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
		@section('page-script')
      
	<script>
		var url = "{{url('/get-avatars/')}}";
		var imgurl = "{{asset('')}}";


		var mid = $("#main_avid").val();
		show_details(mid);
		
		$(document).on("click", ".show_details", function(){
			var cid = $(this).attr("cid");
			show_details(cid);
		});

		var manageAvatarsUrl = "{{ url('manage-avatars') }}";
		
       
		function show_details(cid){


			$("#post_online").html("Loading...");
			$("#sch_feeds").html("Locading...");

			var apiurl = url + "/" + cid;
				$.ajax({
				  url: apiurl,
				  cache: false,
				  success: function(r){
					  var result = JSON.parse(r);
					  $(".av_name").text(result.name);
					  $(".av_task").text(result.task);
					  $(".av_join").text(result.joindate);
					  if(result.image != ""){
						  var imgpath = imgurl + "/public/images/" + result.image;
					  }else{
						  var imgpath = "https://www.w3schools.com/howto/img_avatar.png";
					  }
					  $(".av_image").attr("src", imgpath);
					  $(".av_time").text(result.days);

					  $(".feed_day").text(result.working_days);

					  if(result.working_hours == "5"){
							$(".feed_time").text("00:00 to 05:00");
					  }else if(result.working_hours	 == "10"){
						$(".feed_time").text("05:00 to 10:00");
					  }else if(result.working_hours	 == "15"){
						$(".feed_time").text("10:00 to 15:00");
					  }else if(result.working_hours	 == "20"){
						$(".feed_time").text("15:00 to 20:00");
					  }else{
						$(".feed_time").text("20:00 to 00:00");
					  }

					  $(".feed_per_day").text(result.articles_day);

					  $(".feed_per_time").text(result.articles_hours + " per Hour");

					  

					var str = '';
					var feeds = result.online_feeds;
					var ofeeds = result.feeds;
					  
					

					
                	// Example last feed time

                	
                // Display the next 5 feeds based on the fetched configuration
                	
					
					
					var lastime;

					for(var t=0; t<feeds.length; t++){
						var cfeed = feeds[t];

						str = str + '<div class="postbox ">';
                    
                        str = str + '<div class="post-innter">';
                        str = str + '<img src="' + imgpath + '" alt="" class="w-px-30 h-auto rounded-circle">';
                        str = str + '<div class="post_avatar">';
                        str = str + '<div class="heading_post av_name">'+ result.name +'</div>';
                        str = str + '<div class="details_post av_task">&nbsp;&nbsp;'+ result.task +'</div>';
                        str = str + '</div>';
                        str = str + '<div class="post_time">';
                        //str = str + '<i class="bx bx-trash me-1 del_feed" cid="' + cfeed._id + '"></i>';

						str = str + '<form action="' + manageAvatarsUrl + "/" + cfeed._id + '" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">';
                        str = str + '@method("DELETE")@csrf ';
                        str = str + '<button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">';
                        str = str + '<i class="bx bx-trash me-1"></i>';
                        str = str + '</button></form>';
                        str = str + '</div>';
                        str = str + '<div class="post_img">';
						str = str + '<img src="'+ cfeed.image +'" />';
                        str = str + '</div>';
                        str = str + '<div class="article_details">';
                        str = str + '<div class="artilce_title" title="'+ cfeed.title +'">';
                        str = str + cfeed.title.slice(0, 15)+'...';
                        str = str + '</div>';
                        str = str + '<div class="article_time">';


						lastime = cfeed.online_time;


						const date = new Date(cfeed.created_at);
						const day = String(date.getDate()).padStart(2, '0');        // Get the day and pad with 0
						const month = String(date.getMonth() + 1).padStart(2, '0'); // Get the month (0-based, so add 1)
						const year = date.getFullYear();   
						const hours = String(date.getHours()).padStart(2, '0');    // Get hours and pad with 0
						const minutes = String(date.getMinutes()).padStart(2, '0'); // Get minutes and pad with 0

						// Format the date like "DD.MM.YYYY - HH:MM"
						const formattedDate = `${day}.${month}.${year} - ${hours}:${minutes}`;

                        str = str + formattedDate ;
                        str = str + '</div>';
						str = str + '<div class="clearfix"></div>';
                        

						var html = cfeed.content;
						var div = document.createElement("div");
						div.innerHTML = html;
						var text = div.textContent || div.innerText || "";

						str = str + '<div class="article_txt" title="'+ text +'">';

                        str = str + text.slice(0, 35)+'...';
                        str = str + '</div>';
                            
                        str = str + '</div>';
                            
                        str = str + '<div class="col-sm-12 ">';
                        str = str + '<div class="emojies">';
                        str = str + '       	&#128512;&#128515;&#128516;';
                        str = str + '</div>';
                        str = str + '<div class="shares_options">';
                        str = str + '<img class="shareimg" src="{{asset("/public/images/share.png")}}" />';
                        str = str + '</div></div>';
                            
                        str = str + '<div class="clear clearfix"></div></div></div>';
                        

					}

					if(str == ""){
						str = "No feed online yet.";
					}

					var sch_str = "";
					var counter = 0;

					
					

					for(var i=0; i< ofeeds.length; i++){

						var cfeed = ofeeds[i];


						sch_str = sch_str + '<div class="postbox post_schedule">';
                    
                        sch_str = sch_str + '<div class="post-innter">';
                        
						sch_str = sch_str + '<img src="'+ imgpath +'" alt="" class="w-px-30 h-auto rounded-circle">';
                        
						sch_str = sch_str + '<div class="post_avatar">';
                        sch_str = sch_str + '<div class="heading_post av_name">' + result.name  + '</div>';
                        sch_str = sch_str + '<div class="details_post av_task">&nbsp;&nbsp; ' + result.task + '</div></div>';
                    	sch_str = sch_str + '<div class="post_time">';



                        sch_str = sch_str + 'Online in <span id="">' + result.times[i] + '</span></div>';

                        sch_str = sch_str + '<div class="post_img">';
                        sch_str = sch_str + '<img src="'+  cfeed.image  +'" /></div>';
                            
                        sch_str = sch_str + '<div class="article_details"><div class="artilce_title">';
                        sch_str = sch_str + cfeed.title.slice(0, 15)+'...';
                        sch_str = sch_str + '</div>';
                        sch_str = sch_str + '<div class="article_time" id="time1">';
                                	
                        sch_str = sch_str + '</div><div class="clearfix"></div>';
                        sch_str = sch_str + '<div class="article_txt">';

						var html = cfeed.content;
						var div = document.createElement("div");
						div.innerHTML = html;
						var text = div.textContent || div.innerText || "";
						
                        sch_str = sch_str + text.slice(0, 35)+'...';;
                                
						sch_str = sch_str + '</div></div>';
                            
                        sch_str = sch_str + '<div class="col-sm-6 artilce_title articles_btns article_btn">';
                        sch_str = sch_str + '<form action="' + manageAvatarsUrl + "/" + cfeed._id + '" onsubmit="confirmActionUpdate(event, () => event.target.submit())" method="post" class="d-inline">';
                        sch_str = sch_str + '@method("PUT")@csrf ';
						sch_str = sch_str + '<button class="btn btn-success btn-share btn-share-like">';
                        sch_str = sch_str + '<span>&#9745;</span>';
                        sch_str = sch_str + 'Allow to Share';
                        sch_str = sch_str + '</button></form></div>';

						sch_str = sch_str + '<form action="' + manageAvatarsUrl + "/" + cfeed._id + '" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">';
                        sch_str = sch_str + '@method("DELETE")@csrf ';
                         
                        sch_str = sch_str + '<div class="col-sm-6 artilce_title article_btn">';
                        
						
						sch_str = sch_str + '<button type="submit" class="btn btn-danger btn-share btn-share-denied" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">Denied to Share <span>&#9746;</span></button></form>';
                        
						
						sch_str = sch_str + '</div><div class="clear clearfix"></div></div></div>';

						counter++;
					}

					const workingHours = [];
                // Build working hours based on the number provided in the API response
                if (result.working_hours.includes('5')) workingHours.push({ start: '00:00', end: '05:00' });
                if (result.working_hours.includes('10')) workingHours.push({ start: '05:00', end: '10:00' });
                if (result.working_hours.includes('15')) workingHours.push({ start: '10:00', end: '15:00' });
                if (result.working_hours.includes('20')) workingHours.push({ start: '15:00', end: '20:00' });
                if (result.working_hours.includes('24')) workingHours.push({ start: '20:00', end: '00:00' });

                const workingDays = result.working_days; // Can be "every day" or "Monday"
                const articlesPerDay = result.articles_day; // Maximum feeds per day (e.g., 2, 4)
                const articlesHours = result.articles_hours; // Feed interval in hours (e.g., 2 hours)

                // Last feed time from API (could be dynamic)
                const lastFeedTime = new Date('2024-10-05T03:00:00'); // Example last feed time

					$("#post_online").html(str);

					$("#sch_feeds").html(sch_str);
					$("#time1").text(result.nextime);
					$("#remtime1").text(result.remtime);

					



				  }
				});

		}






		function confirmAction(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to delete this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-danger me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }

		function confirmActionUpdate(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure to update?',
                text: "Are you sure you want to share it now?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Share it!',
                customClass: {
                    confirmButton: 'btn btn-danger me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }

		

		setTimeout(function() {
			$(".alert-message").hide();
		}, 5000);

	
	</script>

@endsection
@endsection