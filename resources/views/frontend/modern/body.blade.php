<!doctype html>
<html lang="en">
<head>
	<title><?php if(isset($data['subtitle'])){ echo $data['subtitle'];}else{echo $data['title'];}; echo " | ".$data['judul'] ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="description" content="<?php if((isset($data['metapage'])) AND (isset($data['metapage']['metadesc']) != "")){ echo $data['metapage']['metadesc'];} else { echo $data['metadesc']; } ?>">
	<meta name="keywords" content="<?php if((isset($data['metapage'])) AND (isset($data['metapage']['metakey']) != "")){ echo $data['metapage']['metakey'];} else { echo $data['metakey']; } ?>" />
	<meta name="robots" content="index, follow" />
	
	<meta property="og:title" content="<?php if(isset($data['subtitle'])){ echo $data['subtitle'];}else{echo $data['title'];}; echo " | ".$data['judul'] ?>" />
	<meta property="og:description" content="<?php if((isset($data['metapage'])) AND (isset($data['metapage']['metadesc']) != "")){ echo $data['metapage']['metadesc'];} else { echo $data['metadesc']; } ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo url()->current(); ?>" />
	<meta property="og:image" content=" <?php if(isset($data['metapage'])){ echo $data['metapage']['url_img'];} elseif (isset($data['logo'])){ echo $data['logo'];} else { echo url('assets/frontend/images/logo.png');}; ?>" />
	
	<link rel="shortcut icon" href="{{url('assets/images/web/logo.png')}}" />
    
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

	<!-- CORE CSS -->
	<link href="{{url('assets/frontend/modern')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- REVOLUTION SLIDER -->
	<link href="{{url('assets/frontend/modern')}}/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
	<link href="{{url('assets/frontend/modern')}}/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

	<!-- THEME CSS -->
	<link href="{{url('assets/frontend/modern')}}/css/essentials.css" rel="stylesheet" type="text/css" />
	<link href="{{url('assets/frontend/modern')}}/css/layout.css" rel="stylesheet" type="text/css" />

	<!-- PAGE LEVEL SCRIPTS -->
	<link href="{{url('assets/frontend/modern')}}/css/header-1.css" rel="stylesheet" type="text/css" />
	<link href="{{url('assets/frontend/modern')}}/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" /> 
    
   
    <!-- CSS Skin -->
    <link rel="stylesheet" id="changeStylesheet" href="{{$data['style']}}">
	
	<link href="{{$data['font']}}" rel="stylesheet">
	
	
	<script>
		var BaseUrl = "{{url('/')}}";
		var ServeUrl = "{{env('APP_SERVER')}}";
		var Instansi = "{{env('APP_INSTANSI')}}";
	</script>
	
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c9dd3ee6f05b20011c6d7a5&product=sticky-share-buttons' async='async'></script>

	<script src="{{url('assets/frontend/modern')}}/plugins/jquery/jquery-3.4.1.min.js"></script>
	<script>
		function getUrlVars() {
			var vars = {};
			var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
				vars[key] = value.replace(/\+/g, ' ').replace(/\#/g, ' ');
			});
			return vars;
		}
	</script>
			
	</head>
	<body class="smoothscroll enable-animation {{$data['theme']}}" style="background-image: url('{{$data['bg']}}');">
		<div id="wrapper">

@include('frontend.modern.navbar')

@yield('modern.content')

@include('frontend.modern.footer') 
