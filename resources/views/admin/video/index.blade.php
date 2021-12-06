@extends('admin.dashboard')
@section('content')
   <div class="container mt-5">
    <a href="{{ route('backend.video.create') }}" class="btn btn-primary">Goto Video CreateForm</a>
       <div class="row mt-3">
           <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $index => $video)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->link }}</td>

                            <td><a href="{{ route('backend.video.edit', $video->id) }}" class="btn btn-success"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i>&nbsp;Edit</a>
                            </td>

                            <form method="post" action="{{ route('backend.video.destroy', $video->id) }}">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>&nbsp;Delete</button></td>
                            </form>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $videos->links() }}
           </div>
       </div>
   </div>
@endsection
