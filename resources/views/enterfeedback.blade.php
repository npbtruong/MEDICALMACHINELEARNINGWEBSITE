<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    </head>

    <body class="antialiased" align="center">
        
        <input type="file" id="inputfeedback" name="inputfeedback">
        <button id="img--download" class="btn btn-primary">Download Predicted Image</button>

        <button id="img--feedback" class="btn btn-primary btn-color">Feedback</button>
        <button id="img--undo" class="btn btn-primary" onclick="undo()">Undo</button>
        <button id="img--reset" class="btn btn-primary" onclick="reset()">Reset</button>
        <button id="img--rectangle" class="btn btn-primary" onclick="rectangle()">Rectangle</button>
        <input id="msg" name="msg" rows="1" cols="50" placeholder="What do you want?"></input>
        
        <div class="img--container"></div>
        <canvas id="myCanvas" width="750" height="350">
            Your browser does not support the HTML5 canvas tag.
        </canvas>

        
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }); 
            });
        </script>

<script src="{{ asset('asset_db/js/feedback2.js') }}"></script>
    </body>
</html>
