@extends('Products/layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <a href="{{route('product.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table table-hover">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th></th>
                    </tr>
                    @foreach($projects as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td><a class="btn btn-success" href="{{route('product.edit', $product->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('product.delete',$product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                            <td><a class="btn btn-info" href="{{route('product.show', $product->id)}}">Show</a></td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
@endsection
