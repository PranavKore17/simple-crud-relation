<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid py-3">

        <a href="{{ route('welcome') }}">welcome</a>
        <div class="d-flex justify-content-between">
            <h3>Products</h3>
            <a href="{{route('create')}}" class="btn btn-primary btn-sm mb-4">Add Product</a>
        </div>



        {{-- {{ dd($products) }} --}}
        {{-- {{ print_r($products->toArray()); }} --}}

        {{-- @foreach ($products as $product)
      <p>{{ $product->id }}</p>
      <p>{{ $product->title }}</p>
      <p>{{ $product->price }}</p>
      <p>{{ $product->category_id }}</p>
      <hr>
  @endforeach --}}

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->category }}</td>
                                <td>
                                    <a href="{{route('edit',$product->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <a href=""class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
