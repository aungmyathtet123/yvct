@extends('admin.dashboard')
@section('content')


    <div class="container mt-5">
        <h3>About update Form</h3>
        <form method="post" action="{{ route('backend.about.update',$about->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mt-5">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                        </div>
                        <input type="text" class="form-control" name="title" value="{{ $about->title }}">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                        </div>
                        <input type="file" class="form-control" name="image">
                        <img src="{{asset( 'images/about/'.$about->image ) }}" class="img-fluid" width="80px">
                        <span class="text-danger">{{ $errors->first('image') }}</span><br>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default" >Description</span>
                        </div>
                        <textarea class="form-control" name="description">{{ $about->description }}</textarea>
                        <span class="text-danger">{{ $errors->first('description') }}</span>
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
