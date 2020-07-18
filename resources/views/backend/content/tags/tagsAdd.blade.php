@extends('backend.body')
@section('content')
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
			<form id="form-tags" class="form-horizontal" enctype="multipart/form-data">
				<div class="card border-2 border-purple-800">
					<div class="card-header header-elements-inline">
							<h6 class="text-semibold font-weight-semibold">
								
								Add Tag<br>
								<small class="display-block">Add Some Tag</small>
							</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
						<fieldset class="step" id="step1">
							<div class="row">
								<div class="col-md-7">
								
									<div class="form-group row">
										<label class="col-form-label col-lg-4 font-weight-semibold text-uppercase">Tag Name <span class="text-danger">*</span></label>
										<div class="col-lg-8">
										<input type="text" id="nama_tag" name="nama_tag" class="form-control" placeholder="Nama Tag" value=""/>	
										</div>
									</div>
								</div>
							</div>	
						</fieldset>
						
						<div class="content-divider">
							<span class="pt-10 pb-10"> </span>
						</div>
					
						<div class="text-left">
							<a onclick="goBack()" class="btn btn-default"><i class="icon-arrow-left13 position-left"></i> Cancel</a>
							<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</div>
				</div>
				<!-- /summernote editor -->
				</form>
			</div>
			<!-- /content area -->
		</div>
		<!-- /main content -->
	<script type="text/javascript" src="{{url('assets/admin')}}/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="{{url('assets/admin')}}/js/plugins/forms/styling/uniform.min.js"></script>
	
<script> 
	$("#form-tags").submit(function(event) {
		$(".btn-primary").prop("disabled", true);
		event.preventDefault();
		var form 	= $(this)[0]; 
		var data 	= new FormData(form);
		var id  	= window.location.pathname.split('/').pop();
		if($.isNumeric(id)){
			var path = ServeUrl+"/tags/"+Instansi+"/update/"+id;
		}else{
			var path = ServeUrl+"/tags/"+Instansi+"/create";
		}
				$.ajax({
							data       : data,
							url        : path,
							method     : 'POST',
							processData: false,
							contentType: false,
							cache      : false,
							complete: function(response){                
							  if(response.status == 201){
								  
								  swal({
										title: '',
										text : response.responseJSON.message,
										type :'success',
										onClose: function () {
												window.location.replace(BaseUrl+'/admin/tags');
										}
									}); 
							  }else if(response.status == 404){
								   swal({
										title: response.status+' Aborted!',
										text : response.responseJSON.message,
										type :'warning',
										onClose: function () {
										 										
										}
									});    
							  }else if(response.status == 401){
								e('info','401 server conection error');
							  }else{
								  swal({
										title: '',
										text : response.responseJSON.message,
										type :'warning',
										onClose: function () {
											 								
										}
									});	 
							  }
							  $(".btn-primary").prop("disabled", false);
							},
							dataType:'json'
				})
				 
	});

	function loadView(){
		var id = window.location.pathname.split('/').pop();
		if ($.isNumeric(id)){
		$.ajax({
					data: "",
					url: ServeUrl+"/tags/"+Instansi+/view/+id,
                    crossDomain: false,
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							if(response.responseJSON.data.parent >=1 ){
							$('.parent').html('<label class="col-form-label col-lg-4 font-weight-semibold">Parent</label><div class="col-lg-8"><input type="text" name="parent" class="form-control" placeholder="parent" value="" /></div>');	
							}
							$('.title').html(response.responseJSON.data.kategori);
							$('input[name=nama_tag]').val(response.responseJSON.data.nama_tag);
							$('input[name=tag_seo]').val(response.responseJSON.data.tag_seo);
							$('input[name=count]').val(response.responseJSON.data.count);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
		}
	};
	loadView();

	function readURL(input,img) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$(input).prev('img').attr('src', e.target.result);
				}
				
				reader.readAsDataURL(input.files[0]);
			}
	}
		
	$("#img").change(function(){
			readURL(this);
	});
</script>
@stop
