@extends("layouts.master")

@section('title')
    Edit Category
@endsection

@section('content')
    <h4>Edit Category</h4>

    <form action="{{route('category.update',$category->id)}}" method="POST">

        @csrf{{-- Security factor --}}
        @method('put')

        <div class=" mb-3">
            <label class=" col-form-label" for="">Category Title</label>
            <input type="text" name="title" value={{$category->title}} class="form-control">
        </div>
        <div class=" mb-3">
            <label class=" col-form-label" for="">Category Description</label>
            <textarea type="text" name="description" rows="7" class=" form-control">{{$category->description}}</textarea>
        </div>

        <button class=" btn btn-primary">Update Category</button>
    </form>
@endsection
