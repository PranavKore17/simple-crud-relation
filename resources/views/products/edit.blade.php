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
    <div class="container">

        <div class="d-flex justify-content-between mt-4">
            <h3>Edit Products</h3>
            <a href="{{ route('home') }}" class="btn btn-primary btn-sm mb-4">Home</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{route('edit',$product->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="title" name="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Price">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select class="form-select" name="category">
                            <option selected>Select Category</option>
                            @foreach ($catgories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
