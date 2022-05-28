@extends('back_end.layouts.master')

@section('bodySection')

    <div id="layoutSidenav_content">
        <main class="bg-light mt-3 ">
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
                <form action="{{ url('dealer/update/' . $data->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <input name="old_image" type="hidden" value="{{ asset('uploads/dealers/' . $data['image']) }}">
                    <div class="mb-3">
                        <label for="company" class="form-label">Distribution Company</label>
                        <input value="{{ $data->company }}" type="text" name="company" class="form-control" id="company"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Distributor’s Name</label>
                        <input value="{{ $data->name }}" type="text" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="area" class="form-label">Area</label>
                        <input value="{{ $data->area }}" type="text" name="area" class="form-control" id="area"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input value="{{ asset('uploads/dealers/' . $data['image']) }}" type="file" name="image"
                            class="form-control" id="image" aria-describedby="emailHelp">
                        <img style="width: 100px; height: 100px;" src="{{ asset('uploads/dealers/' . $data->image) }}"
                            class="card-img-top" alt="...">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Dealer</button>
                </form>
            </div>

        </main>

        <!-- Content here -->

        <!--Form-->

    @endsection
