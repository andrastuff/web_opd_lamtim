@extends('frontend.modern.body')
@section('modern.content')

	<section class="page-header dark page-header-xs">
		<div class="container">

			<h1>{{$data['title']}}</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">{{$data['title']}}</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	
	<section>
				<div class="container">
					
					<div class="row">
					
						<!-- RIGHT -->
						<div class="col-lg-9 col-md-9 order-sm-2 order-md-2 order-lg-2" id="blog-content">
							<div class="loader text-center"></div>
							
						</div>



						<!-- LEFT -->
						<div class="col-lg-3 col-md-3 order-sm-1 order-md-1 order-lg-1">

							<!-- CATEGORIES -->
							<div class="side-nav mb-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>Related Pages</h4>
								</div>

								<ul class="list-group list-group-bordered list-group-noicon uppercase" id="page-list">
									<div class="loader text-center"></div>
									

								</ul>

							</div>
							<!-- /CATEGORIES -->
							
							<h4>The Corner</h4>
							 

							<!-- BANNER ROTATOR -->
							<?php if(isset($data['banner']['sidebar'])){ ?>
								 
									<img class="img-fluid" src="<?php echo $data['banner']['sidebar']['img']; ?>" alt="Team">
								 
							<?php } ?> 
							<div class="mt-60">	 
							<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> 
								<div id="gpr-kominfo-widget-container"></div> 
							</div>
						</div>
					
					</div>
					
				</div>
			</section>
			
			
  
	<script>
	function loadView(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: "",
					url: ServeUrl+"/pages/"+Instansi+"/view/"+page,
                    crossDomain: true,
                    method: 'GET',
                    complete: function(response){ 		
                        if(response.status == 200){
							
							 $("#blog-content").html(response.responseJSON.data.content);
							  
							 
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){ 
							 $("#blog-content").html('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
                })
                loadSidebar();
	}
	
	function loadSidebar(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/pages/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							var addClass; if(v.slug == page){ addClass = 'active';};
									
									content +='<li class="list-group-item '+addClass+'"><a href="'+BaseUrl+'/informasi/'+v.slug+'">'+v.judul+'</a></li>';
							
							});
							
							$('#page-list').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                });
				
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/publikasi/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							
								content +='<div class="single-recent-post"> ';
                                    content +='<a href="{{url("/informasi/publikasi/")}}/'+v.id+'"><h3>'+v.judul_file+'</h3></a> ';
                                    
                                content +='</div> ';
							});
							
							$('#files').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
        })
	
	};
	loadView();
</script>	
@stop