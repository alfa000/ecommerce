@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-0">Item</h5>
            </div>
        </div>

        <div class="row mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value=""></option>
                        <option value="Fashion">Fashion</option>
                        <option value="Sport">Sport</option>
                        <option value="Music">Music</option>
                        <option value="Electronic">Electronic</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="img">Image</label>
                    <input type="file" class="form-control" id="img" name="img" accept="image/*">
                </div>

                <div class="form-group mb-3">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>

                <div class="form-group mb-3">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock">
                </div>

                <div class="form-group text-right">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end container-->
@endsection
