@extends('layouts.app')

@section('site-title', 'Many to Many RelationShip')

@push('css')
    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #3c8dbc;
            border-color: #367fa9;
            padding: 1px 10px;
            color: #fff;
        }
    </style>
@endpush


@section('header-title', 'MANY TO MANY RELATIONSHIP')


@section('main-content')
    <div class="card">
        <div class="card-header bg-secondary">
            <h3 class="card-title">Insert Data</h3>
            <a href="{{ route('index') }}" class="btn btn-primary float-right" style="margin-top: -40px;">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                @fakeKey
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="{{ fake_field('name') }}" class="form-control" id="name" value="{{ old('name') }}" placeholder="Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-form-label col-sm-2" for="role">Role</label>
                    <div class="col-sm-10 {{ $errors->has('roles')? 'focused error':'' }}">
                        <select class="form-control select2 my-1 mr-sm-2" name="{{ fake_field('roles[]') }}" id="role" data-live-search="true" multiple="multiple" data-placeholder="Select a Role"
                                style="width: 100%;">
                            @forelse($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @empty
                                <option disabled>No data found!!</option>
                            @endforelse
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endpush
