<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('product.create')}}">Add Product</a>
    <table border="1" width="75%">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($data as $k=> $d)
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
    </table>
</body>

</html>