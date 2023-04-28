@extends('layouts.master')

@section('title')
    Create
@endsection

@section('content')
    <h4>Create Category</h4>

    <form action="{{ route('category.store') }}" method="post">

        @csrf{{-- Security factor --}}

        <div class=" mb-3">
            <label class=" col-form-label" for="">Category Title</label>
            <input type="text" name="title" class=" form-control @error('title') is-invalid @enderror">

            @error('title')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class=" mb-3">
            <label class=" col-form-label" for="">Description</label>
            <textarea type="text" name="description" rows="7"
                class=" form-control @error('description') is-invalid @enderror"></textarea>

            @error('description')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class=" btn btn-primary">Save</button>
    </form>
@endsection
