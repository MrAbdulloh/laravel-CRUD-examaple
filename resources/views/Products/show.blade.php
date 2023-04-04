@extends('Products/layout.main')
@section('content')
    <div class="container">

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
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
