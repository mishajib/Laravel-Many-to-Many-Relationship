@extends('layouts.app')

@section('site-title', 'Many to Many RelationShip')


@section('header-title', 'MANY TO MANY RELATIONSHIP')


@section('main-content')
    <div class="card">
        <div class="card-header bg-secondary">
            <h3 class="card-title">Edit Data</h3>
            <a href="{{ route('role.index') }}" class="btn btn-primary float-right" style="margin-top: -40px;">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('role.update', $role->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" name="role" class="form-control" id="role" value="{{ $role->role }}" placeholder="Role">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <form/>
        </div>
    </div>
@endsection
