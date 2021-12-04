@extends('admin.dashboard')
@section('content')
   <div class="container mt-5">
    <a href="{{ route('backend.article',$id) }}" class="btn btn-primary">GotoCreateForm</a>
       <div class="row mt-3">
           @foreach($articles as $key => $article)


           <div class="col-4">
            <div class="card text-center">
                <div class="card-header">
                {{ $article->title }}
                </div>
                <div class="card-body">
                    <img src="{{asset( 'images/'.$article->image ) }}" alt="" class="img-fluid" width="100px" height="100px">
                  <p class="card-text">{{ $article->description }}</p>

                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('backend.article.edit', $article->id) }}" class="btn btn-success d-inline"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i>&nbsp;Edit</a>
                    <form method="post" action="{{ route('backend.article.destroy', $article->id) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger "><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>&nbsp;Delete</button>
                    </form>
                </div>
              </div>

           </div>
           @endforeach
       </div>

   </div>
@endsection
