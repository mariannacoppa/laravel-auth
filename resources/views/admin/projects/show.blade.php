@extends('layouts.dashboard')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>{{ $project->name }}</h2>
            <img src="{{ $project->image !== null ? './storage/'.$project->image : '' }}" alt="">
            <p>{{ $project->slug }}</p>
            <p>{{ $project->summary }}</p>
        </div>
    </div>
</div>
@endsection