<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.bootstrap4.min.css') }}">
    </head>
    <body class="container">
        <br><br>
        <div class="card">
            <div class="card-header">
                Contactos
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        {!! $dataTable->table() !!}
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery.min.js')}}" ></script>
        <script src="{{ asset('js/popper.min.js')}}" ></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" ></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
        <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
        <script src="/vendor/datatables/buttons.server-side.js"></script>
        {!! $dataTable->scripts() !!}
    </body>
</html>
