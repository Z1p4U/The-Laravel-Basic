@extends("layouts.master")

@section('title')
    Edit
@endsection

@section('content')
    <h4>Edit Item</h4>

    <form action="{{route('item.update',$item->id)}}" method="POST">

        @csrf{{-- Security factor --}}
        @method('put')

        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Name</label>
            <input type="text" name="name" value={{$item->name}} class="form-control">
        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Price</label>
            <input type="text" name="price" value={{$item->price}} class=" form-control">
        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Item Stock</label>
            <input type="text" name="stock" value={{$item->stock}} class=" form-control">
        </div>

        <button class=" btn btn-primary">Update Item</button>
    </form>
@endsection
