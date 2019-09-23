@extends('layouts.app')

@section('site-title', 'Many to Many RelationShip')


@section('header-title', 'MANY TO MANY RELATIONSHIP')


@section('main-content')
    <div class="card">
        <div class="card-header bg-secondary">
            <h3 class="card-title">Show Data</h3>
            <a href="{{ route('role.index') }}" class="btn btn-primary float-right" style="margin-top: -40px;">Back</a>
        </div>
        <div class="card-body">
            <h1>Role: {{ $role->role }}</h1>
            <h3>User Name:</h3>
                @forelse($role->users as $user)
                    <ul>
                        <li>{{ $user->name }}</li>
                    </ul>
                @empty
                    <h3>User Name: No data found!</h3>
                @endforelse
            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
