@extends('layouts.default')

@section('content')

<h3 class="title is-3">Pick up the templates you like.</h3>

<table class="table">
    <thead>
    <th>ID</th>
    <th>NAME</th>
    </thead>
@foreach ($templates as $template)
    <tr>
    <th>{{ $template->id }}</th>
    <th>{{ $template->name  }}</th>
    </tr>
@endforeach
</table>

@endsection
