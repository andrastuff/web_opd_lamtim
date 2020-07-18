<html>
	<head>
		<style> 
		@import url('https://fonts.googleapis.com/css?family=Ubuntu');
		/*---------------------------------------------------------------
		02. DEFAULT CSS
		---------------------------------------------------------------*/
		body {
			font-family: 'Ubuntu', sans-serif;
			font-size: 14px;
			line-height: 26px;
			font-weight: 400;
			background-color: #9D1255;
			overflow: hidden;
			background-image: linear-gradient(45deg, #e91e63, #420046);
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		</style>
	</head>
	<body>
		<h1>Error 404</h1>
		<h2>{{ $exception->getMessage() }}</h2>
	</body>
</html>