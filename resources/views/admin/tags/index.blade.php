@extends('layouts.admin')

@section('content')

    <h2 class="mb-4">Manage tags</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">last modified</th>
            <th scope="col">tag name</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tags as $tag)

            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tag->updated_at }}</td>
                <td><a href="/tags/{{ $tag->slug }}" target="_blank">{{ $tag->name }}</a></td>
                <td><a href="/admin/tags/{{$tag->id}}/edit" class="btn btn-primary btn-sm mr-2">Edit</a>
                    <form class="d-inline" method="post" action="/admin/tags/{{ $tag->id }}">
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
