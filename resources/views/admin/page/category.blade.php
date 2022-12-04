@extends('admin.master')

@section('title')
    Add blog category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Blog Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('new.category') }}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" value="Add Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Categories as $Category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Category->name }}</td>

                                    <td>
                                        <a href="{{ route('delete.category', ['id' => $Category->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this data?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>
    </section>

@endsection
