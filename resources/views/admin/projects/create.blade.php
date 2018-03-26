@extends('layouts.admin')

@section('content')

    <h2 class="mb-4">Add a new project</h2>
    <form method="post" action="/admin/projects" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
            <label>Project Name</label>
            <input name="name" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" type="text" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input name="client" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input name="date" type="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Project Website</label>
            <input name="link" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>GitHub Repository</label>
            <input name="repository" type="text" class="form-control">
        </div>

        <hr>

        <div class="row">

            <div class="form-group col-sm-6">
                <label for="exampleFormControlFile1">Select Image</label>
                <input type="file" name="image-1" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group col-sm-6">
                <label for="exampleFormControlFile1">Select 2nd Image (optional)</label>
                <input type="file" name="image-2" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group col-sm-6">
                <label for="exampleFormControlFile1">Select 3rd Image (optional)</label>
                <input type="file" name="image-3" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group col-sm-6">
                <label for="exampleFormControlFile1">Select 4th Image (optional)</label>
                <input type="file" name="image-4" class="form-control-file" id="exampleFormControlFile1">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Save new project</button>


    </form>

@endsection

