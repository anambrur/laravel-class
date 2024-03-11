<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
<<<<<<< HEAD
    {{-- <table border="1" width="75%">
=======
    <a href="{{route('product.create')}}">Add Product</a>
    <table border="1" width="75%">
>>>>>>> b542a75e2dfcc24f55aa31216864a42aacfb4006
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $k => $d)
        <tr>
            <td>{{$k+1}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->details}}</td>
            <td>{{$d->price}}</td>
            <td>
                <a href="{{route('product.show',$d)}}">Details</a>
                <a href="{{route('product.edit',$d)}}">Edit</a>
                <form action="{{route('product.destroy',$d)}}" method="post">
                    @csrf()
                    @method('delete')
                    {{-- <input type="submit" value="Delete"> --}}
                    <button>submit</button>
                </form>
            </td>
        </tr>

        @endforeach
    </table> --}}


    <table>
        <thead>
            <tr>
                <th>Ctegory</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $d)
                <tr>
                    <td>{{ $d->category }}</td>
                </tr>
            @empty
            @endforelse

        </tbody>
    </table>
    {{ $data->links() }}
</body>

</html>
