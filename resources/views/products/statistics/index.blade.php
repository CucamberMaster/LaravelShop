@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
            <div class="pull-left mt-2">
                <h2> Show Stats about Products and Categories</h2>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Number of Products</th>
                    <th>Name of the Category</th>
                </tr>
                @foreach($productsCounts as $productcount)
                    <tr>
                        <td>
                            {{$productcount->products_count}}
                        </td>
                        <td>
                            {{$productcount->name_category}}
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-2">
                <table class="table table-bordered">
                    <tr>
                        <th>Highest Price of Product</th>
                        <th>Name Product</th>
                    </tr>
                    @foreach($highPrice as $high)
                        <tr>
                            <td>
                                {{$high->price}}
                            </td>
                            <td>
                                {{$high->name}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2">
                <table class="table table-bordered">
                    <tr>
                        <th>Lowest Price of Product</th>
                        <th>Name Product</th>
                    </tr>
                    @foreach($lowPrice as $high)
                        <tr>
                            <td>
                                {{$high->price}}
                            </td>
                            <td>
                                {{$high->name}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Category name</th>
                        <th>The average price of the product by the category</th>
                        <th>Name of the cheapest Products</th>
                    </tr>
                    @foreach( $stats as $stat)
                        <tr>
                            <td>
                                {{$stat['name_category']}}
                            </td>
                            <td>
                                {{number_format($stat ['avg'])}} $
                            </td>
                            <td>
                                {{$stat['product_name']}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
@endsection