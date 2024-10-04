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
@endsection
