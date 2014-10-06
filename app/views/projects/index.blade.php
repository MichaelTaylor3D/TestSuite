@extends('master')

@section('content')
    Project Index
    <?php foreach($projects as $project) : ?>
        <p>{{ $project->name }} {{ HTML::linkRoute('editproject', 'edit', $project->id) }} delete</p>
    <?php endforeach ?>
@stop