<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manualet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/porgtelx2.png') }}">

    
     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('frontend/assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}">
    <style>
		.btn{
			background-color: rgb(40 53 123);
		}
		.page-header{
			background-color: rgb(40 53 123);
		}
		.theme-icon-holder {
			background-color: rgb(40 53 123);
		}
</style>
</head>
<body>

@include('frontend.layout.header')


@yield('main')

@include('frontend.layout.footer')


  <!-- Javascript -->          
  <script src="{{ asset('frontend/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  
    
    <!-- Page Specific JS -->
    <script src="{{ asset('frontend/assets/plugins/smoothscroll.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{ asset('frontend/assets/js/highlight-custom.js') }}"></script> 
    <script src="{{ asset('frontend/assets/plugins/simplelightbox/simple-lightbox.min.js') }}"></script>      
    <script src="{{ asset('frontend/assets/plugins/gumshoe/gumshoe.polyfills.min.js') }}"></script> 
    <script src="{{ asset('frontend/assets/js/docs.js') }}"></script> 

    
</body>
</html>