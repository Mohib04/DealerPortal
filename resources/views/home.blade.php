<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
>>>>>>> 55a655470380f6300821b93a2f2cf8957faa4f6a
    <title>AnH Enterprise Limited</title>
</head>

<<<<<<< HEAD
<body style="font-family: 'Open Sans', sans-serif;">

    <div class="container">
        <!-- Top Contant here -->
        <div class="bg-light">
            <h1 class="text-center text-uppercase">Dealers Portal</h1>
            <div class="row">
                <div class="col-md-6">
                    <!-- Search Form start-->
                    <form action="" method="GET" class="d-flex">
                        <input name="search" value="{{ $search }}" class="form-control me-3" type="search"
                            id="search" placeholder="Search by name or area" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                    <!-- Search Form end-->
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ url('dealer/import') }}"><button type="button"
                            class="btn btn-success">Import</button></a>
                    <a href="{{ route('download') }}"><button type="button"
                            class="btn btn-success">Download</button></a>
                    @if (Auth::check())
                        <a href="{{ url('dashboard') }}"><button type="button"
                                class="btn btn-success">dashboard</button></a>
                    @else
                        <a href="{{ url('/login') }}"><button type="button" class="btn btn-success">Login
                                In</button></a>
                    @endif


                </div>
            </div>
        </div>

        <!--table -->
        <div class="card-group pt-2">
            <div class="row">

                @foreach ($data as $value)
                    <div class="col-md-3">
                        <div class="card">
                            <img style="height:300px; width: 100%; margin: auto"
                                src="{{ asset('uploads/dealers/' . $value->image) }}" class="card-img-top"
                                alt="...">
                            <ul style="font-size: 12px;" class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Distribution Company:</strong>
                                    {{ $value->company }}</li>
                                <li class="list-group-item"><strong>Distributor’s Name: </strong> {{ $value->name }}
                                </li>
                                <li class="list-group-item"><strong>Phone: {{ $value->phone }} </strong>
                                </li>
                                <li class="list-group-item"><strong>Area: </strong> {{ $value->area }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach

                <div #Content>

                </div>

=======
<div class="container" >
    <!-- Top Contant here -->
    <div class="bg-light">
        <h1 class="text-center text-uppercase">Dealers Portal</h1>
        <div class="row">
            <div class="col-md-6">
                <nav class="navbar navbar-light ">
                        <form class="d-flex" action=" " method="get">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                </nav>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('download') }}"><button type="button" class="btn btn-outline-success btn-lg">Download</button></a>
                <a href="{{ url('dealerForm') }}"><button type="button" class="btn btn-outline-success btn-lg">Add Dealer</button></a>
>>>>>>> 55a655470380f6300821b93a2f2cf8957faa4f6a
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Optional JavaScript; choose one of the two! -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9a383770c3.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                let link = $(this).attr('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        })
    </script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
=======
    <!--table -->
    <table style="vertical-align: middle" class="table table-success table-bordered border-light table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Distribution Company</th>
            <th scope="col">Distributor's Name</th>
            <th scope="col">Area</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($values as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->company }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->area }}</td>
                <td style="width: 9%"><img class="rounded-circle " style="width: 100px; height: 100px; text-align: center;" src="{{ asset('uploads/dealers/'.$value->image) }}"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Optional JavaScript; choose one of the two! -->
>>>>>>> 55a655470380f6300821b93a2f2cf8957faa4f6a

            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif

        $('#search').on('keyup', function() {
            $value = $(this).val();
            $ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },

                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>
