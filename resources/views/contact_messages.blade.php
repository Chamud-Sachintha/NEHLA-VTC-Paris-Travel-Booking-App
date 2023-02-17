<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">View Contact Messages</h2>

            <div class="row mt-3">
                <table class="table mt-3" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_messages as $message)
                        <tr>
                            <th scope="row">{{ $message['id'] }}</th>
                            <td>{{ $message['name'] }}</td>
                            <td>{{ $message['email'] }}</td>
                            <td>{{ $message['mobile'] }}</td>
                            <td>{{ $message['subject'] }}</td>
                            <td>
                                {{ $message['message'] }}
                            </td>
                            <td>
                                <a href="/deleteContactMessage/{{ $message['id'] }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                pageLength: 3
            });

            table.on('click', '.edit', function () {
                $tr = $(this).closest('tr');

                if($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);
                $('#vehicleId').val(data[0]);
                $('#brandName').val(data[1]);
                $('#modelName').val(data[2]);
                
                $('#seats').val(data[3]);
                $('#description').val(data[4]);

                $('#exampleModal').modal('show');
            });
        });
    </script>
</body>