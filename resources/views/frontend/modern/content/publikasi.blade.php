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

					<!-- FILTER -->
					<ul class="nav nav-pills mix-filter mb-30">
						<li data-filter="all" class="filter active"><a href="#">All</a></li>
					</ul>
					<!-- /FILTER -->

					<div class="row mix-grid">

						<!-- LEFT COLUMNS -->
						<div class="col-md-9">
						<div class="loader text-center"></div>
							<div id="files">
								<!-- CALLOUT -->
							</div>	
							<div class="text-center" id="load">
									<div class="loader text-center"></div>
									<div class="col-md-12 about-content text-center"><a id="loadmore" class="btn btn-reveal btn-default b-0 btn-shadow-1" onclick="loadMore()" data-value=""><i class="fa fa-circle-o-notch"></i><span> Load More</span></a></div>
							</div>
						
						</div>
						<!-- /LEFT COLUMNS -->
						

						<!-- RIGHT COLUMNS -->
						<div class="col-md-3">

						 <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> 
								<div id="gpr-kominfo-widget-container"></div>

						</div>
						<!-- /RIGHT COLUMNS -->

					</div>
					
				</div>
			</section>
			
        
    <script>
	var data = {"page" : 1};
	function loadDownloads(data){
		$.ajax({
					data: data,
					url: ServeUrl+"/publikasi/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = ''; 
							
							$.each(response.responseJSON.data.data, function(k,v){
								
								content +='<div class="callout alert alert-border mt-10 mb-10">';
									content +='<div class="row">';
										content +='<div class="col-md-9 col-sm-12">';
											content +='<h4>'+v.judul_file+'</h4>';
											content +='<p class="font-lato fs-14">'+v.date+'</p>';
										content +='</div>';
										content +='<div class="col-md-3 col-sm-12 text-right">';
											content +='<a href="{{url("/informasi/publikasi/")}}/'+v.id+'" class="btn btn-default btn-lg btn-round">Download</a>';
										content +='</div>';
									content +='</div>';
								content +='</div>';								
								 
							
							});
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							$('#files').append(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){
							 $('#loadmore').remove();
							 $('#files').append('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
        })
	
	};
	loadDownloads(data);
	
	function loadMore(){
		var page = parseInt($('#loadmore').data("value"))+1;
		var data = {"page" : page};
		loadDownloads(data);		
	};
	</script>  
@stop