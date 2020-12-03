


    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{config('app.name', 'Solomonsideas)}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
  <link href="{{ asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{ asset('css/side_bar.css')}}" rel="stylesheet">
  
  <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.min.css')}}"> 
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
@include('backend.inc.side_nav')
 @yield('content')
  

 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
 <script src="{{ asset('js/index.js') }}"></script>  


 <script src="{{ asset('dropify/dist/js/dropify.min.js') }}"></script>
 


 <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


 <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

<script>
  

   // Basic
   // $('.dropify').dropify();
   $('.dropify').dropify({
   messages: {
       'default': 'Drag and drop',
       'replace': 'Drag and drop or click to replace',
       'remove':  'Remove',
       'error':   'Ooops, something wrong happended.'
   }
});



</script>
  
 </body>
</html>