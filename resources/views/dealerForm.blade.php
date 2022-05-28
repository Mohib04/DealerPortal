@extends('back_end.layouts.master')

@section('bodySection')
    <div id="layoutSidenav_content">
        <main class="mt-3 bg-light ">
            <div class="container" style="width: 90%">
                <!--Error -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--Form-->
                <form action="{{ url('dealerForm') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="company" class="form-label">Distribution Company</label>
                        <input type="text" name="company" class="form-control" id="company" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Distributor’s Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="area" class="form-label">Area</label>
                        <select name="area" class="form-select" aria-label="Default select example">
                            <option disabled selected>Select Division</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Mymensingh">Mymensingh</option>
                        </select>
                        {{-- <input type="text" name="area" class="form-control" id="area" aria-describedby="emailHelp"> --}}
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Dealer</button>
                </form>
            </div>

        </main>

    @endsection
