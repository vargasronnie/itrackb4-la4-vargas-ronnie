@extends('layouts.app')
@section('title', 'Quick Recipes')
@section('content')
<h3>Recipes 20 Minutes or Less</h3>

<table class="table table-bordered table-striped">
    <tr class="table-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Cook Time</th>
        <th>Action</th>
    </tr>

    @foreach ($recipes as $recipe)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $recipe['name'] }}</td>
        <td>{{ $recipe['cook_time'] }} min</td>
        <td><a href="{{ route('recipes.show', ['id' => $recipe['id']]) }}">View Details</a></td>
    </tr>
    @endforeach
</table>
@endsection