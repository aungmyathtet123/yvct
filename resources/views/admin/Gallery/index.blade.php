@extends('admin.dashboard')
@section('content')
   <div class="container mt-5">
    <a href="{{ route('backend.gallery.create') }}" class="btn btn-primary">Go to Gallery CreateForm</a>
       <div class="row mt-3">
        @foreach($galleries as $key => $gallery)
        <div class="col-lg-4 col-md-4 col-sm-12 mt-5">
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6">
                    <img src="{{asset( 'images/gallery/'.$gallery->image ) }}" alt="" class="img-fluid p-0" width="150px;">
                </div>
                <div class="col-6 col-md-6 col-sm-6 mt-2 p-0">
                    <p class="lead">{{ $gallery->order_no }}</p>
                        <a href="{{ route('backend.gallery.edit', $gallery->id) }}" class="btn btn-success btn-small d-inline p-2"><i class="fa fa-pencil"  aria-hidden="true"></i>&nbsp;Edit</a>
                          <form method="post" action="{{ route('backend.gallery.destroy', $gallery->id) }}" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-small p-2"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

       </div>
       {{ $galleries->links() }}
   </div>
@endsection
