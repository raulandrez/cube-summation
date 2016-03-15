<!DOCTYPE html>
<html>
    <head>
        <title>Prueba Backend Grability Rappi By Raul Gutierrez </title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 30;
               
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 60px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Cube Summation</div>

              
  {!! Form::open(['route' => ['salida'], 'method' => 'POST']) !!}
        {!! Form::textarea('entrada', '', [
        'class' => 'form-control',
        'id' =>  'entrada'
       
        ]) !!}
        <span class="input-group-btn">
            {!! Form::submit('PHP', array('class' => 'btn btn-primary btn-md')) !!}
        </span>
        {!! Form::close() !!}
        
</div>
              
            </div>
        </div>
    </body>
</html>
