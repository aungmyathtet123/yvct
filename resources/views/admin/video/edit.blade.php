@extends('admin.dashboard')
@section('content')


    <div class="container mt-5">
        <h3>Video update Form</h3>
        <form method="post" action="{{ route('backend.video.update',$videos->id) }}">
            @csrf
            @method('PUT')
            <div class="row mt-5">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                        </div>
                        <input type="text" class="form-control" name="title" value="{{ $videos->title }}">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default" >Link</span>
                        </div>
                        <input type="text" class="form-control" name="link" value="{{ $videos->link }}">
                        <span class="text-danger">{{ $errors->first('link') }}</span>
                    </div>
                </div>



                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="input-group mb-3  justify-content-center">
                        <div class="input-group-prepend">
                           <input type="submit" class="btn btn-primary" value="update">
                        </div>

                    </div>
                </div>


            </div>
        </form>
    </div>

@endsection
