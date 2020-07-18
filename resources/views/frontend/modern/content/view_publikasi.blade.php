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
						<div class="col-lg-9 col-md-9 order-sm-2 order-md-2 order-lg-2">
							<div class="loader text-center"></div>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover table-striped table-bordered">
							<tbody>
							  <tr>
								<td>Judul File</td>
								<td id="judul"></td>
							  </tr>
							  <tr>
								<td>Nama File </td>
								<td id="file"></td>
							  </tr>
							  <tr>
								<td>Type File</td>
								<td id="type"></td>
							  </tr>
							  <tr>
								<td>Tanggal Upload</td>
								<td id="datex"></td>
							  </tr>
							  <tr>
								<td>Download </td>
								<td class="read-more" id="download">
								</td>
							  </tr>
							</tbody>
							</table>
						</div>



						<!-- LEFT -->
						<div class="col-lg-3 col-md-3 order-sm-1 order-md-1 order-lg-1">

							<!-- CATEGORIES -->
							<div class="side-nav mb-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>Related Publikasi</h4>
								</div>

								<ul class="list-group list-group-bordered list-group-noicon uppercase" id="files">
									<div class="loader text-center"></div>
									

								</ul>

							</div>
							<!-- /CATEGORIES -->
							
							 
							<h4>The Corner</h4>
							 

							<!-- BANNER ROTATOR -->
							<?php if(isset($data['banner']['sidebar'])){ ?>
								 
									<img class="img-fluid" src="<?php echo $data['banner']['sidebar']['img']; ?>" alt="Team">
								 
							<?php } ?>
							<!-- /BANNER ROTATOR -->


							 


						</div>
					
					</div>
					
				</div>
			</section>
			
    
  <script>
	function loadView(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: "",
					url: ServeUrl+"/publikasi/"+Instansi+"/view/"+page,
                    crossDomain: true,
                    method: 'GET',
                    complete: function(response){ 		
                        if(response.status == 200){
							
							 $(".titles").html(response.responseJSON.data.judul_file);
							 $("#judul").html(response.responseJSON.data.judul_file);
							 $("#file").html('<b>'+response.responseJSON.data.nama_file+'</b> <i>(encrypted)</i>');
							 $("#type").html(response.responseJSON.data.type_file);
							 $("#datex").html(response.responseJSON.data.date);
							 $("#download").html('<a class="btn btn-default" href="'+response.responseJSON.data.link_download+'"><span class="glyphicon glyphicon-save"></span> Download</a>');
							 
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
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/publikasi/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
								 
										content +='<div class="row tab-post">';
											content +='<div class="col-md-12 col-sm-12 col-12">';
												content +='<a href="{{url("/informasi/publikasi/")}}/'+v.id+'" class="tab-post-link">'+v.judul_file+'</a>';
												content +='<small>'+v.date+'</small>';
											content +='</div>';
										content +='</div>'; 
							
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