<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            border: 2px solid greenyellow;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;

        }

        td {
            border: 1px solid skyblue;
            text-align: center;
        }
    </style>



</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_deg">

                    <table class="table_deg">
                        <tr>
                            <th>Product title</th>
                            <th>description</th>
                            <th>Category</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>image</th>
                        </tr>

                        @foreach($product as $products)

                        <tr>
                            <td>{{$products->title}}</td>
                            <td>{{$products->description}}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->quantity}}</td>
                            <td>
                                <img height="120" width="120" src="products/{{$products->image}}">

                            </td>
                        </tr>
                        @endforeach



                    </table>



                </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src=" {{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}">
    </script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>