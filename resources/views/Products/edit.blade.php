@extends('Products/layout.main')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="{{route('product.update',$product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" value="{{$product->description}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" value="{{$product->price}}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
