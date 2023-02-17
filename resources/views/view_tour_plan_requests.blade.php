<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <meta http-equiv="refresh" content="30">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">View Order Requests</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <table class="table" id="example">
                        <thead>
                          <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($requsts as $each_order)
                                <tr>
                                    <td>{{ $each_order->name }}</td>
                                    <td>{{ $each_order->email }}</td>
                                    <td>{{ $each_order->mobile }}</td>
                                    <td>{{ $each_order->subject }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="/app/tour-plan/{{$each_order->id}}" class="btn btn-primary btn-sm" style="width: 100%">View</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="/app/delete-tour-plan/{{ $each_order->id }}" class="btn btn-danger btn-sm" style="width: 100%">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                pageLength: 20
            });
        });
    </script>
</body>