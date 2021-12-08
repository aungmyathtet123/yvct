@extends('admin.dashboard')
@section('content')
   <div class="container mt-5">
    <a href="{{ route('backend.about.create') }}" class="btn btn-primary">GotoAboutCreateForm</a>
       <div class="row mt-3">
           <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>


                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $index => $about)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $about->title }}</td>
                            <td> <img src="{{asset( 'images/about/'.$about->image ) }}" alt="" class="img-fluid p-0" width="200px;"></td>
                            <td>{{ $about->description }}</td>
                            <td><a href="{{ route('backend.about.edit', $about->id) }}" class="btn btn-success"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i>&nbsp;Edit</a>
                            </td>

                            <form method="post" action="{{ route('backend.about.destroy', $about->id) }}">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>&nbsp;Delete</button></td>
                            </form>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $abouts->links() }}
           </div>
       </div>
   </div>
@endsection
