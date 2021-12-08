@extends('admin.dashboard')
@section('content')
<div class="container mt-5">
    <h3>{{ $type->name }} Create Form</h3>
    <form action="{{ route('backend.article.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"> Name</span>
                    </div>
                    <input type="text" class="form-control" name="title"><br>
                    <span class="text-danger">{{ $errors->first('title') }}</span>
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
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Subject or Description</span>
                    </div>
                    <input type="text" class="form-control" name="description"><br>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
            </div>

            <input type="hidden" class="form-control" name="type_id" value={{ $type->id }}>

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
