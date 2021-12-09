@extends('admin.dashboard')
@section('content')
<div class="container mt-5">
    <h3>{{ $type->name }} Create Form</h3>
    <form action="{{ route('backend.article.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">English Name</span>
                    </div>
                    <input type="text" class="form-control" name="title"><br>
                    <span class="text-danger">{{ $errors->first('title') }}</span>

                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 mb-3">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Translate
                </a>
                <div class="collapse mb-3" id="collapseExample">
                    <div class="card card-body">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Chinese Name</span>
                            </div>
                            <input type="text" class="form-control" name="ctitle"><br>
                            <span class="text-danger">{{ $errors->first('ctitle') }}</span>

                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Myanmar Name</span>
                            </div>
                            <input type="text" class="form-control" name="mtitle"><br>
                            <span class="text-danger">{{ $errors->first('mtitle') }}</span>

                        </div>
                    </div>
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
