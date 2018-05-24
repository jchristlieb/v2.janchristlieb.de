@extends('layouts.admin')

@section('content')

    <h2 class="mb-4">Edit project <strong>{{ $project->name }}</strong></h2>
    <form method="post" action="/admin/projects/{{ $project->id }}">

        {{ csrf_field() }}

        {{ method_field('patch') }}

        <div class="form-group">
            <label>Project Name</label>
            <input name="name" type="text" class="form-control" value="{{ $project->name }}" required>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" value="{{ $project->title }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" type="text" class="form-control" required>{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input name="client" type="text" class="form-control" value="{{ $project->client }}">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input name="date" type="date" class="form-control" value="{{ $project->date}}" required>
        </div>
        <div class="form-group">
            <label>Project Website</label>
            <input name="link" type="text" class="form-control" value="{{ $project->link }}" required>
        </div>
        <div class="form-group">
            <label>GitHub Repository</label>
            <input name="repository" type="text" class="form-control" value="{{ $project->repository }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit project</button>
    </form>

@endsection

