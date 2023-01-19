<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                <form action="/updateDestinationById" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="">Update Destination Name :</label>
                            <input type="text" class="form-control" name="destinationName" id="destinationName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Update Destination Description :</label>
                            <input type="text" class="form-control" name="description" id="description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Update Price :</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <input type="hidden" name="destinationId" id="destinationId">
                            <input type="submit" class="btn btn-primary btn-sm" value="Update destination">
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
            <h2 class="mb-4">Manage Destination</h2>
            
            <div class="row">
                @if(Session()->get('status') != null)
                    <div class="col-md-12 alert alert-success" role="alert">
                        {{Session()->get('status')}}
                    </div>
                @endif
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <form action="/addNewPlace" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="">Place Name :</label>
                                <input type="text" class="form-control" placeholder="Eg. Benz" name="place" id="placeName">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Select Image :</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Enter Price :</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Type Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12 mt-3 mb-3">
                                <input type="submit" class="btn btn-primary btn-sm" value="Add Place">
                                <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <table class="table" id="dataTable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price (eur)</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_places as $each_place)
                                <tr>
                                    <th scope="row">{{ $each_place['id'] }}</th>
                                    <td>{{ $each_place['place_name'] }}</td>
                                    <td>{{ $each_place['description'] }}</td>
                                    <td>{{ $each_place['price'] }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="#" class="btn btn-primary btn-sm edit" style="width: 100%" data-toggle="modal" data-target="#exampleModal">Update</a>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <a href="/deleteDestinationById/{{$each_place['id']}}" class="btn btn-danger btn-sm" style="width: 100%">Delete</a>
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
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{config('app.g_map_key')}}&libraries=places" ></script>

    <script>
        var placeName = document.getElementById("placeName");
        var pickAutoComplete = new google.maps.places.Autocomplete(placeName);

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
                $('#destinationId').val(data[0]);
                $('#destinationName').val(data[1]);
                $('#description').val(data[2]);
                $('#price').val(data[3]);

                $('#exampleModal').modal('show');
            });
        });
    </script>
</body>