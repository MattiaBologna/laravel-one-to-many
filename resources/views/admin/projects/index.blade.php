@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<section>
    <div class="container">
        <h2>Projects</h2>
    </div>
    <div class="container">
        <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Add a new Project</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td><a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a></td>
                        <td><a href="{{$project->link}}" target='_blank'>Github link</a></td>
                        <td>{{$project->slug}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection