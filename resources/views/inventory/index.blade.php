@extends("layouts.master")

@section('title')
    Item Lists
@endsection

@section('content')
    <h4>Item Lists</h4>

    <table class=" table table-bordered table-hover text-center">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a class=" btn btn-sm btn-outline-primary" href="{{route('item.show',$item->id)}}">Detail</a>
                        <a class=" btn btn-sm btn-outline-info" href="{{route('item.edit',$item->id)}}">Edit</a>

                        <form class=" d-inline-block" action="{{route('item.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class=" btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="5" class=" text-center">
                    <p class=" text-center">There is no record.</p>
                    <a href="{{route("item.create")}}" class=" btn btn-primary">Create</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection
