@extends('layouts.app')

@section('content')
<div class="container">

<h2>Edit Project</h2>

<form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $project->title }}"><br><br>

    <textarea name="description">{{ $project->description }}</textarea><br><br>

    <input type="text" name="tech_stack" value="{{ $project->tech_stack }}"><br><br>

    <button type="submit">Update</button>
</form>

</div>
@endsection