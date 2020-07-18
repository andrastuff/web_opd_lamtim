@extends('backend.body')
@section('content')

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
			  <div class="card border-2 border-dark">
					<div class="card-header header-elements-inline bg-dark">
						<h6 class="text-semibold">Detail Artikel</h6>	
							 
						 
						<div class="header-elements">
							<div class="list-icons">
									<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
				  </div>

					<div class="card-body">
							<div class="float-right mb-4">
							<a id="delete" class="btn bg-danger btn-sm"><i class="icon-trash position-left"></i> Delete </a>
							<a id="update" class="btn bg-success btn-sm"><i class="icon-pencil3 position-left"></i> Edit</a> 
							</div>
								<div class="mb-4">
									<div class="mb-3 text-center">
										<a href="#" class="d-inline-block">
											<img id="image" src="" class="img-fluid" alt="">
										</a>
									</div>

									<h4 class="font-weight-semibold mb-1">
										<a href="#" class="text-default title"></a>
									</h4>

									<ul class="list-inline list-inline-dotted text-muted mb-3">
										<li class="list-inline-item">By <a href="#" class="text-muted">Administrator</a></li>
										<li class="list-inline-item date"></li>
										<li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> <span class="view"></span></a></li>
									</ul>

									<div id="content" class="mb-3">
									
									</div>
 
								</div>

							</div>
							</div>
				
			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->
	 
<script>

	function loadView(){
		var id = window.location.pathname.split('/').pop();
		$.ajax({
					data: "",
					url: ServeUrl+"/artikel/"+Instansi+"/view/"+id,
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
													$('.title').html(response.responseJSON.data.judul_artikel);
													$('.date').html(response.responseJSON.data.tanggal);
													$('.view').html(response.responseJSON.data.view);
													$('#image').attr('src', response.responseJSON.data.url_img);
													$('#content').html(response.responseJSON.data.isi_artikel);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	};
	loadView();
		
	
	$('#update').on( 'click',function () {
        var id = window.location.pathname.split('/').pop();
		window.location.href = BaseUrl+"/admin/artikel/"+Instansi+"/update/"+id;
    } );
	
	$('#delete').on( 'click',function () {
		var id = window.location.pathname.split('/').pop();
		swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: 'Yes, remove it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function (result) {
				if(result.value == true){
				
				$.ajax({
							data: "",
							url: ServeUrl+"/artikel/"+Instansi+"/delete/"+id,
							crossDomain: false,
							method: 'GET',
							complete: function(response){                
							  if(response.status == 201){ 
								  swal({
										title: ' Removed!',
										text: response.responseJSON.message,
										type:'success',
										onClose: function () {
											window.location.replace(BaseUrl+'/admin/artikel');
										}
									}); 
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else if(response.status == 403){
								    swal({
										title: ' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
										onClose: function () {
										window.location.replace(BaseUrl+'/admin/artikel');								
										}
									}); 
									 
							  }else{
								    swal({
										title: response.status+' Aborted!',
										text: response.responseJSON.message,
										type:'warning',
									}); 
									 
							  }
							},
							dataType:'json'
				})
				}
            });
	 } );
 
</script>
@stop
