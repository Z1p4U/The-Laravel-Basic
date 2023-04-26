@extends("layouts.master")

@section('title')
    Create
@endsection

@section('content')
    <h4>Create Item</h4>

    <form action="{{route('item.store')}}" method="post">

        @csrf{{-- Security factor --}}

        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Name</label>
            <input type="text" name="name" class=" form-control">
        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Price</label>
            <input type="text" name="price" class=" form-control">
        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Stock</label>
            <input type="text" name="stock" class=" form-control">
        </div>

        <button class=" btn btn-primary">Save Item</button>
    </form>
@endsection
