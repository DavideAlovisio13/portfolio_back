@extends('layouts.dash')

@section('content')
    <div class="container" id="create">
        <h2>Create New Project</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Project title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Project description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror" required>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" id="start_date"
                    class="form-control @error('start_date') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" id="end_date"
                    class="form-control @error('end_date') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label for="project_url">Project URL</label>
                <input type="text" name="project_url" id="project_url"
                    class="form-control @error('project_url') is-invalid @enderror" placeholder="Project URL"
                    value="{{ old('project_url') }}" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
