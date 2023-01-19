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

    {{-- update model starts here --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/updateVehicleDetailsById" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="">Update Brand Name :</label>
                            <input type="text" class="form-control" name="brandName" id="brandName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Update Model Name :</label>
                            <input type="text" class="form-control" name="modelName" id="modelName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Vehicle Image :</label>
                            <input type="file" class="form-control" name="vehicleImage" id="image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Vehicle Seats :</label>
                            <input type="text" class="form-control" name="seats" id="seats">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Vehicle Description :</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="hidden" name="vehicleId" id="vehicleId">
                            <input type="submit" class="btn btn-primary btn-sm" value="Update Vehicle">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    {{-- update model ends here --}}

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Manage Vehicles</h2>

            <div class="row">
                @if(Session()->get('status') != null)
                <div class="col-md-12 alert alert-success" role="alert">
                    {{Session()->get('status')}}
                </div>
                @endif
                <form action="/addVehicle" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Brand Name :</label>
                            <input type="text" class="form-control" placeholder="Eg. Benz" name="brand_name">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Model Name :</label>
                            <input type="text" class="form-control" placeholder="Eg Class-S Sereies" name="model_name">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Upload Image :</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Seats :</label>
                            <input type="text" class="form-control" placeholder="Eg. 7" name="seat_count">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="">Vehicle Description :</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary btn-sm" value="Add Vehicle">
                            <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                        </div>
                    </div>
                </form>
            </div>

            <div class="row mt-3">
                <table class="table mt-3" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Model Name</th>
                            <th scope="col">Seats</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_vehicles as $each_vehicle)
                        <tr>
                            <th scope="row">{{ $each_vehicle['id'] }}</th>
                            <td>{{ $each_vehicle['brand'] }}</td>
                            <td>{{ $each_vehicle['model'] }}</td>
                            <td>{{ $each_vehicle['seats'] }}</td>
                            <td>{{ $each_vehicle['description'] }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-primary btn-sm edit" style="width: 100%" data-toggle="modal" data-target="#exampleModal">Update</a>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <a href="/deleteVehicleById/{{$each_vehicle['id']}}" class="btn btn-danger btn-sm" style="width: 100%">Delete</a>
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