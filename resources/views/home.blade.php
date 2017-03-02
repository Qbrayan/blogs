@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    <div class="add-staff">
                        <a href="{{ url('/blog') }}">Add New Blog</a><br/>
                    </div>


                    <table width="100%">
                        <thead class="">
                        <tr>
                            <th>Name:</th>
                            <th>Author:</th>
                            <th>Category:</th>
                            <th>Update and Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td> {{ $blog->name }}</td>
                                <td> {{ $blog->author }}</td>
                                <td> {{ $blog->category }}</td>
                                <td><span class="update"><a href="{{url('update_blog_' .$blog->id)}}">Update</a></span>
                                    &nbsp;&nbsp;
                                    <span class="remove"><a href="{{url('delete_blog_' .$blog->id)}}">Remove</a></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
