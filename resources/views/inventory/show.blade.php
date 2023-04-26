@extends("layouts.master")

@section('title')
    Item Detail
@endsection

@section('content')

    <h4>Item Detail</h4>

    <table class=" table table-bordered table-striped">
            <tr>
                <td>Name</td>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{$item->price}}</td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>{{$item->stock}}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{$item->created_at}}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{$item->updated_at}}</td>
            </tr>
    </table>

@endsection
