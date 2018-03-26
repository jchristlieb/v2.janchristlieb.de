@extends('layouts.admin')

@section('content')

    <h2 class="mb-4">Manage projects</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">last modified</th>
            <th scope="col">project name</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>



        @foreach($projects as $project)

            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $project->updated_at }}</td>
                <td><a href="/projects/{{ $project->slug }}" target="_blank">{{ $project->name }}</a></td>
                <td><a href="/admin/projects/{{$project->id}}/edit" class="btn btn-primary btn-sm mr-2">Edit</a>
                    <form class="d-inline" method="post" action="/admin/projects/{{ $project->id }}">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>


        @endforeach

        </tbody>
    </table>

@endsection





