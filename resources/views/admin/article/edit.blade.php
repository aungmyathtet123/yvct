@extends('admin.dashboard')
@section('content')


    <div class="container mt-5">
        <h3>Article update Form</h3>
        <form method="post" action="{{ route('backend.article.update',$article->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                    <div class="row mt-5">

                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default"> Title</span>
                                </div>
                                <input type="text" class="form-control" name="title" value="{{ $article->title }}">
                                <span class="text-danger">{{ $errors->first('title') }}</span><br>
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
                                        <input type="text" class="form-control" name="ctitle" value="{{ $article->ctitle }}"><br>
                                        <span class="text-danger">{{ $errors->first('ctitle') }}</span>

                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Myanmar Name</span>
                                        </div>
                                        <input type="text" class="form-control" name="mtitle" value="{{ $article->mtitle }}"><br>
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
                                <input type="file" class="form-control" name="image">
                                <img src="{{asset('images/'.$article->image ) }}" alt="" class="img-fluid" width="80px">
                                <span class="text-danger">{{ $errors->first('image') }}</span><br>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                                </div>
                                <input type="text" class="form-control" name="description" value="{{ $article->description }}">
                                <span class="text-danger">{{ $errors->first('description') }}</span><br>
                            </div>
                        </div>


                                @foreach ($types as $type )
                                @if($type->id==$article->type_id)
                                <input type="hidden" class="form-control" name="type_id"  value="{{ $type->id }}"
                                >
                                @endif<br>
                                @endforeach







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
