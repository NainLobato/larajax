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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Contact list
                                    <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add Contact</a>
                                </h4>
                            </div>
                            <div class="panel-body">
                                <table id="contact-table" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="30">No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery.min.js')}}" ></script>
        <script src="{{ asset('js/popper.min.js')}}" ></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" ></script>
        <script src="{{ asset('js/datatables.min.js')}}" ></script>
        <script src="{{ asset('js/buttons.bootstrap4.min.js')}}" ></script>
        <script type="text/javascript">
            var table = $('#contact-table').DataTable({
                language: {
                    "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                },
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.contact') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'pageLength',
                ]
            });
        </script>
    </body>
</html>
