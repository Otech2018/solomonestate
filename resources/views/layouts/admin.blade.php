


    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{config('app.name', 'Solomonsideas')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  
 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
  

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
 

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



  
        $(document).ready(function(){
            $("select.country").change(function(){
                var selectedCountry = $(this).children("option:selected").val();
               // alert("You have selected the country - " + selectedCountry);
               if(selectedCountry == 162 ){
                  $('#lga').hide(); $('#state').hide(); $('#state-list').show();$('#state-text').hide(); $('#lga-list').show();$('#lga-text').hide();
                    //
                     $('.state').attr('required','required'); 
                     $('.lgaa').attr('required','required');  
                    
               }else{
                 $('#lga').hide(); $('#state').hide(); $('#state-list').hide();$('#state-text').show(); $('#lga-list').hide();$('#lga-text').show();
                  //
                  $('.lgaa').removeAttr('required');
                 $('.state').removeAttr('required');
                }
            });
        });



        $(document).ready(function(){
            $("select.state").change(function(){
                $('.lgaa').prop('selectedIndex', 0);
                var selectedState = $(this).children("option:selected").val();

                if(selectedState =='all'){
                   $('.rankf').hide();   
                 }else{
                   $('.rankf').show();  
                 }
                $('.lga').attr('disabled','disabled');  $('.lga').hide();
                $('.lgaClass'+selectedState).removeAttr('disabled'); 
                 $('.lgaClass'+selectedState).show(); 
                 if(selectedState =='all'){
                   $('.rankf').hide();   
                 }
            });
        });

       
  

   // Basic
   // $('.dropify').dropify();
   $('.dropify').dropify({
   messages: {
       'default': 'Image',
       'replace': 'Drag and drop or click to replace',
       'remove':  'Remove',
       'error':   'Ooops, something wrong happended.'
   }
});



</script>
  
 </body>
</html>