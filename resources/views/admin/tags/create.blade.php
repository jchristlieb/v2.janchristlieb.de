@extends('layouts.admin')

@section('content')

    <h2 class="mb-4">Add a tag</h2>

    <form method="post" action="/admin/tags">

        {{ csrf_field() }}

        <div class="form-group">
            <label>Tag name</label>
            <input name="name" type="text" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add tag</button>

    </form>

@endsection
