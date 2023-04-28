@extends('layouts.master')

@section('title')
    Edit
@endsection

@section('content')
    <h4>Edit Item</h4>

    <form action="{{ route('item.update', $item->id) }}" method="POST">

        @csrf{{-- Security factor --}}
        @method('put')

        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Name</label>
            <input type="text" name="name" value="{{ old('name', $item->name) }}"
                class=" form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Price</label>
            <input type="text" name="price" value="{{ old('price', $item->price) }}"
                class=" form-control @error('price') is-invalid @enderror">

            @error('price')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Stock</label>
            <input type="text" name="stock" value="{{ old('stock', $item->stock) }}"
                class=" form-control @error('stock') is-invalid @enderror">

            @error('stock')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class=" btn btn-primary">Update Item</button>
    </form>
@endsection
