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

	 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/font-awesome.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/owl.carousel.css">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/animate.min.css">
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/css-plugin-collections.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/style.css">
    
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/classic/css/responsive.css">
	
	<!-- Fancy Box -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <!-- CSS Skin -->
    <link rel="stylesheet" id="changeStylesheet" href="{{$data['style']}}">
	
	<link href="{{$data['font']}}" rel="stylesheet">
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120846200-1"></script>
	 <script src="{{url('assets/frontend')}}/classic/js/jquery.min.js"></script>
	<script>
		var BaseUrl = "{{url('/')}}";
		var ServeUrl = "{{env('APP_SERVER')}}";
		var Instansi = "{{env('APP_INSTANSI')}}";
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-120846200-1');
		
	
	</script>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c9dd3ee6f05b20011c6d7a5&product=sticky-share-buttons' async='async'></script>
	</head>
<body id="bg" class="{{$data['theme']}}" style="background-image: url('{{$data['bg']}}');">
    <div class="wrapper">

@include('frontend.classic.navbar')

@yield('classic.content')

@include('frontend.classic.footer') 
