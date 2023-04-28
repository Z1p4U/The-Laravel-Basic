@extends('layouts.master')

@section('title')
    Category Lists
@endsection

@section('content')
    <h4>Category Lists</h4>

    <table class=" table table-bordered table-hover text-center">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Description</td>
                <td>Control</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ Str::limit($category->description, 20, '...') }}</td>
                    <td>
                        <a class=" btn btn-sm btn-outline-primary"
                            href="{{ route('category.show', $category->id) }}">Detail</a>
                        <a class=" btn btn-sm btn-outline-info" href="{{ route('category.edit', $category->id) }}">Edit</a>

                        <form class=" d-inline-block" action="{{ route('category.destroy', $category->id) }}" method="POST">
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
                        <a href="{{ route('category.create') }}" class=" btn btn-primary">Create</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
