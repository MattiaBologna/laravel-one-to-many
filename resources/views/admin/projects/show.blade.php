@extends('layouts.app')

@section('title', 'Project')

@section('content')

<main>
    <section>
        <div class="container">
            <h2>{{$project->title}}</h2>
        </div>
        <div class="container">
            <p><strong>Description: </strong>{{$project->description}}</p>
            @if ($project->type)
                <p><strong>Type: </strong>{{$project->type ? $project->type->name : ''}}</p>
            @endif
            <p><strong>Github link: </strong>{{$project->link}}</p>
        </div>
    </section>
</main>

@endsection