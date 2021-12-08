@extends('admin.dashboard')
@section('content')
<div class="container mt-5">
    <h3>Gallery Create Form</h3>
    <form action="{{ route('backend.gallery.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"> Order</span>
                    </div>
                    <input type="text" class="form-control" name="order"><br>
                    <span class="text-danger">{{ $errors->first('order') }}</span>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                    </div>
                    <input type="file" class="form-control" name="image"><br>
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
            </div>



            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group mb-3  justify-content-center">
                    <div class="input-group-prepend">
                       <input type="submit" class="btn btn-primary" value="submit">
                    </div>

                </div>
            </div>


        </div>
    </form>
</div>
@endsection
