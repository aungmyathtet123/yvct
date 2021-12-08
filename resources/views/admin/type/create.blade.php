@extends('admin.dashboard')
@section('content')
<div class="container mt-5">
    <h3>Type Create Form</h3>
    <form action="{{ route('backend.type.store') }}" method="post">
        @csrf
        <div class="row mt-5">

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                    </div>
                    <input type="text" class="form-control" name="name">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                    </div>
                    <textarea name="description"  class="form-control"></textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
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
