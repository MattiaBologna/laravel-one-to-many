@extends('layouts.app')

@section('title', 'Project')

@section('content')

<main>
    <section>
        <div class="container">
            <h2>Project: {{$project->title}}</h2>
        </div>
        <div class="container">
            <p>{{$project->description}}</p>
            <p>{{$project->link}}</p>
        </div>
    </section>
</main>

@endsection