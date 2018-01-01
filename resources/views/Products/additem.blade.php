@extends('Layer.master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1> Add New Item </h1>

            <form action="{{ route('product.addproduct') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Item title</label>
                    <input type="text" id="title" name="title" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="type">item type</label>
                    <select name="category" class="form-control" required="required">
                            <option value="Normal">Normal</option>
                            <option value="Sale">Sale</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection