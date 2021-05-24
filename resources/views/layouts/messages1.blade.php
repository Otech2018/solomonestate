@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div style="color:red; font-size:18px; background-color:#ffcdd2; padding:10px;">
            {!!$error!!}
           
        </div>
    @endforeach
@endif

@if(session('success'))
        <div style="color:green; font-size:18px; background-color:#c8e6c9; padding:10px;">
            {!! session('success')!!}

        </div>
@endif



@if(session('error'))
        <div style="color:red; font-size:18px; background-color:#ffcdd2; padding:10px;">
            {!! session('error')!!}

        </div>
@endif





        <script>
            $('.alert').alert();
        </script>