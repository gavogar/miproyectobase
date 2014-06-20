<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    
</head>

<body>

    <div id="login">

     <h1>Catering Web</h1>

        @if(Session::get('msg'))
            <p>{{ Session::get('msg') }}</p>
        @endif

        {{ Form::open(array('url' => '/login', 'method' => 'POST')) }}        
        
                <div class="form-group">
                  
                    {{ Form::text('email', null, array('placeholder'=>'Email', 'class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control' ) ) }}
                    <!-- {{ Form::password('password', null, array('class' => 'form-control')) }} -->
                </div>

                {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
</body>
</html>