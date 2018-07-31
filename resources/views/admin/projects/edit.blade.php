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
            <label>Subtitle</label>
            <input name="subtitle" type="text" class="form-control" value="{{ $project->subtitle }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" type="text" class="form-control"
                      required>{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Technology Stack</label>
            <textarea name="techstack" type="text" class="form-control" required>{{ $project->techstack }}</textarea>
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

        <div class="form-group">
            <label for="exampleFormControlSelect2">Select tags</label>
            <select multiple class="form-control" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-4">Save project information</button>

    </form>

    <div>

        <table class="table table-hover table-responsive-md">
            <thead>
            <th scope="col">Tag</th>
            <th scope="col">Action</th>
            </thead>
            <tbody>

            @foreach($project->tags as $tag)
                <tr>
                    <td><span class="badge badge-primary p-2 mb-2 mr-2">{{ $tag->name }}</span></td>
                    <td>
                        <form method="POST" action="{{ route('admin.projects.tags.destroy', [$project->id, $tag->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-link btn-sm">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>

    <div>


        <table class="table table-hover table-responsive-md">
            <thead>
            <th scope="col">Thumbnail</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </thead>
            <tbody>


            @foreach($images as $image)

                {{--@dump($image)--}}
                <tr>
                    <td><img src="{{ $image->getUrl('thumb') }}"></td>
                    <td>{{ $image->name }}</td>
                    <td>
                        <form method="POST"
                              action="{{ route('admin.projects.media.destroy', [$project->id, $image->id]) }}">
                            {{--<form method="POST" action="/admin/media/{{ $project->slug }}/destroy">--}}
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-link btn-sm">Remove</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row">

        <form method="POST" action="/admin/media/{{$project->slug}}/create" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group col-sm-6">
                <label>Add Images</label>
                <input multiple type="file" name="images[]" class="form-control-file">
                <button type="submit" class="btn btn-primary">Add Image(s)</button>
            </div>
        </form>


    </div>



@endsection

