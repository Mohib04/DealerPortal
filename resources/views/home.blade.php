<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AnH Enterprise Limited</title>
</head>
<body>

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
            </div>
        </div>
    </div>

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

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
