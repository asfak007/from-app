@extends('admin.master')
@section('body')
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <table class="table table-responsive" id="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Short Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ideas as $idea)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $idea->name ?? 'None' }}</td>
                                        <td>{{ $idea->title }}</td>
                                        <td>{{ $idea->category->name }}</td>
                                        <td>{{ $idea->short_description }}</td>
{{--                                        <td>{!! \Illuminate\Support\Str::words($idea->long_description, 20, '....') !!}</td>--}}
                                        <td>{{ $idea->status == 1 ? 'Selected' : 'Unselected' }}</td>
                                        <td>
                                            <a href="{{ route('idea.details',['id'=>$idea->id]) }}" class="btn btn-sm btn-outline-primary">view Details</a>
{{--                                            <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-sm btn-secondary">edit</a>--}}
{{--                                            <a href="{{ route('delete-blog', ['id' => $blog->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this data?')">delete</a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

