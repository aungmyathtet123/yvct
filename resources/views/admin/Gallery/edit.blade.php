@extends('admin.dashboard')
@section('content')


    <div class="container mt-5">
        <h3>Gallery update Form</h3>
        <form method="post" action="{{ route('backend.gallery.update',$Gallery->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                    <div class="row mt-5">

                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"> Order</span>
                                </div>
                                <input type="text" class="form-control" name="order" value="{{ $Gallery->id }}">
                                <span class="text-danger">{{ $errors->first('order') }}</span><br>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                                </div>
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset('images/'.$Gallery->image ) }}" alt="" class="img-fluid" width="80px">
                                <span class="text-danger">{{ $errors->first('image') }}</span><br>
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
