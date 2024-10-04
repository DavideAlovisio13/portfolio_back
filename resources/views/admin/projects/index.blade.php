@extends('layouts.dash')

@section('content')
    <h2>All the Projects</h2>
    @foreach ($projects as $project)
        <ul>
            <li>
                {{ $project->title }}
            </li>
        </ul>
    @endforeach
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary"> create new </a>
@endsection
