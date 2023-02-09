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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <label for="">Update 1 à 3 Price :</label>
                                <input type="text" class="form-control" name="price1" id="price1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="">Update 4 à 5 Price :</label>
                                <input type="text" class="form-control" name="price2" id="price2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="">Update 6 à 7 Price :</label>
                                <input type="text" class="form-control" name="price3" id="price3">
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
                <div class="col-12">
                    <form action="/addNewPlace" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="">Place Name :</label>
                                <input type="text" class="form-control" placeholder="Eg. Benz" name="place"
                                    id="placeName">
                            </div>
                            {{-- <div class="col-12 mt-2">
                                <label for="">Select Image :</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Enter Price :</label>
                                <input type="text" class="form-control" name="price">
                            </div> --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Add Passenger Ranges</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="">1 à 3 :</label>
                                        <input type="text" placeholder="Eg. 5" name="price1" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="">4 à 5 :</label>
                                        <input type="text" placeholder="Eg. 5" name="price2" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <label for="">6 à 7 :</label>
                                        <input type="text" placeholder="Eg. 5" name="price3" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <hr>
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
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">1 à 3 Price (eur)</th>
                                <th scope="col">4 à 5 Price (eur)</th>
                                <th scope="col">6 à 7 Price (eur)</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_places as $each_place)
                            <tr>
                                <th scope="row">{{ $each_place['id'] }}</th>
                                <td>{{ $each_place['place_name'] }}</td>
                                <td>{{ $each_place['description'] }}</td>
                                <td>{{ $each_place['price1'] }}</td>
                                <td>{{ $each_place['price2'] }}</td>
                                <td>{{ $each_place['price3'] }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-primary btn-sm edit" style="width: 100%"
                                                data-toggle="modal" data-target="#exampleModal">Update</a>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <a href="/deleteDestinationById/{{$each_place['id']}}"
                                                class="btn btn-danger btn-sm" style="width: 100%">Delete</a>
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
        src="https://maps.google.com/maps/api/js?key={{config('app.g_map_key')}}&libraries=places"></script>

    <script>
        var placeName = document.getElementById("placeName");
        var pickAutoComplete = new google.maps.places.Autocomplete(placeName);

        $(document).ready(function () {
            var table = $('#dataTable').DataTable({
                pageLength: 3
            });

            table.on('click', '.edit', function () {
                $tr = $(this).closest('tr');

                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();

                $('#destinationId').val(data[0]);
                $('#destinationName').val(data[1]);
                $('#description').val(data[2]);
                $('#price1').val(data[3]);
                $('#price2').val(data[4]);
                $('#price3').val(data[5]);

                $('#exampleModal').modal('show');
            });
        });

        // var passengerRange, price;

        // function myFunc() {
        //     passengerRange = document.getElementById("range").value;
        //     price = document.getElementById("passengerRangePrice").value;

        //     var card = htmlToElement(
        //         '<div class="col-xl-3 col-sm-6 col-12">'
        //             + '<div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">'
        //                 + '<div class="card-content">'
        //                     + '<div class="card-body">'
        //                         + '<div class="media d-flex">'
        //                             + '<div class="media-body text-left" style="border-right: 1px solid grey; padding-right: 15px;">'
        //                                 + '<h6>Range</h6>'
        //                                 + '<span>' + passengerRange + '</span>'
        //                             + '</div>'
        //                             + '<div class="media-body text-right">'
        //                                 + '<h6>Price</h6>'
        //                                 + '<span>'+ price +'</span>'
        //                             + '</div>'
        //                             + '<div class="align-self-center ms-4">'
        //                                 + '<img src="https://img.icons8.com/office/30/null/cancel.png" id='+guidGenerator()+' onclick="removeElement(event)"/>'
        //                             + '</div>'
        //                             + '<input type="hidden" value=' +  +' '
        //                         + '</div>'
        //                     + '</div>'
        //                 + '</div>'
        //             + '</div>'
        //         + '</div>');
            
        //     document.getElementById("rangeContainer").appendChild(card);

        //     return false;
        // }

        // function removeElement(event) {
        //     const getEl = document.getElementById(event.target.id).parentElement;
        //     getEl.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
        // }

        // function guidGenerator() {
        //     var S4 = function() {
        //     return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
        //     };
        //     return (S4()+S4()+S4()+S4()+S4()+S4()+S4()+S4());
        // }

        // function htmlToElement(html) {
        //     var template = document.createElement('template');
        //     html = html.trim(); // Never return a text node of whitespace as the result
        //     template.innerHTML = html;
        //     return template.content.firstChild;
        // }
    </script>
</body>