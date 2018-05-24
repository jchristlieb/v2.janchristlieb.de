@extends('layouts.admin')

@section('content')

    <h2 class="mb-4">Edit tag <strong>{{ $tag->name }}</strong></h2>

    <form method="post" action="/admin/tags/{{ $tag->id }}">

        {{ csrf_field() }}
        {{ method_field('patch') }}

        <div class="form-group">
            <label>Tag name</label>
            <input name="name" type="text" class="form-control" value="{{ $tag->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Edit tag</button>

    </form>

    @endsection