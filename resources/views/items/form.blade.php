@extends('adminlte.master')

@section('content')
    <form action="/items" method="POST">
    @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" placeholder="Enter description" id="description" name="description">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" placeholder="Enter stock" id="stock" name="stock">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" placeholder="Enter price" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
