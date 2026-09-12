@extends('layouts.app')
@section('title', 'Recipe Details')

@section('content')
<h1>{{ $recipe['name'] }}</h1>
<p>Prepared by: Ronnie T. Vargas</p>

<table class="table table-bordered table-striped">
    <tr class="table-dark">
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td><strong>ID:</strong></td>
        <td>{{ $recipe['id'] }}</td>
    </tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>{{ $recipe['name'] }}</td>
    </tr>
    <tr>
        <td><strong>Description:</strong></td>
        <td>{{ $recipe['description'] }}</td>
    </tr>
    <tr>
        <td><strong>Cook Time:</strong></td>
        <td>{{ $recipe['cook_time'] }} minutes</td>
    </tr>
</table>

<p>
    <a href="{{ route('recipes.index') }}">Back to Recipe List</a>
</p>
@endsection