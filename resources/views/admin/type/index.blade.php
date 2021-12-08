@extends('admin.dashboard')
@section('content')
   <div class="container mt-5">
    <a href="{{ route('backend.type.create') }}" class="btn btn-primary">GotoSiteTypeCreateForm</a>
       <div class="row mt-3">
           <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>


                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $index => $type)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->description }}</td>

                            <td><a href="{{ route('backend.type.edit', $type->id) }}" class="btn btn-success"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i>&nbsp;Edit</a>
                            </td>

                            {{-- <form method="post" action="{{ route('backend.type.destroy', $type->id) }}">
                                @csrf
                                @method('DELETE')
                                <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>&nbsp;Delete</button></td>
                            </form> --}}

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $types->links() }}
           </div>
       </div>
   </div>
@endsection
