@extends('layouts.master')

@section('title')
    Create
@endsection

@section('content')
    <h4>Create Item</h4>

    {{-- @if ($errors->any())
    <ul>
        @foreach ($error->all as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif --}}

    <form action="{{ route('item.store') }}" method="post">

        @csrf{{-- Security factor --}}

        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Name</label>

            <input type="text" name="name" value="{{ old('name') }}"
                class=" form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Price</label>

            <input type="text" name="price" value="{{ old('price') }}"
                class=" form-control @error('price') is-invalid @enderror">

            @error('price')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Stock</label>

            <input type="text" value="{{ old('stock') }}" name="stock"
                class=" form-control @error('stock') is-invalid @enderror">

            @error('stock')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <button class=" btn btn-primary">Save Item</button>
    </form>
@endsection
