@extends('products.layout')

@section('content')
    <div class="row mt-md-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Testowanie Umiejtnosci Laravela</h2>
            </div>
            <div class="pull-right mt-4">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
            <div class="pull-right mb-3 mt-2">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>kategorie</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td style="font-weight: 700">{{ $product->detail }}</td>
                <td>{{ $product->price}}$</td>
                <td>
                    @forelse($product->categories as $category)
                        {{ $category->name_category }}
                    @empty
                        brak kategorii
                    @endforelse
                </td>

                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="mx-3">

                        <a class="btn btn-info mx-1" href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary mx-1" href="{{ route('products.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger mx-1">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection