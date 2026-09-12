@extends('layouts.app')
@section('title', 'My Recipe List')
@section('content')
<h3>My Recipe List</h3>

<table class="table table-bordered table-striped">
    <tr class="table-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Cook Time</th>
        <th>Action</th>
    </tr>

    @foreach ($recipes as $recipe)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
            {{ $recipe['name'] }}
            @if ($recipe['cook_time'] >= 30)
                <span style="color: green;">(Long Cook)</span>
            @endif
        </td>
        <td>{{ $recipe['description'] }}</td>
        <td>{{ $recipe['cook_time'] }} min</td>
        <td><a href="{{ route('recipes.show', ['id' => $recipe['id']]) }}">View Details</a></td>
    </tr>
    @endforeach
</table>
@endsection