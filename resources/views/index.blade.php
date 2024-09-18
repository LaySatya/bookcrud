<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
</head>
<style>
    #bookIMG:hover {
        transition: .5s;
        transform: scale(5.5);
        cursor: pointer;
    }
</style>

<body>
    <h1 class="text-center mt-5"> Laravel Book CRUD </h1>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="container mt-3 bg-light">
        <div class="row">
            <div class="col-xl-12 m-2">
                <a href="/store" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-12">
                <table class="table table-stripped">
                    <thead class="bg-primary">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Year</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book['id'] }}</td>
                                <td>{{ $book['title'] }}</td>
                                <td>{{ $book['author'] }}</td>
                                <td>{{ $book['description'] }}</td>
                                <td>{{ $book['price'] }}$</td>
                                <td>{{ $book['year'] }}</td>
                                <td>
                                    <img id="bookIMG" src="{{ asset('images/' . $book['image']) }}" height="40"
                                        alt="">
                                </td>
                                <td>
                                    <a href="/show/{{ $book['id'] }}" class="btn btn-sm btn-primary"><i
                                            class="fa-solid fa-eye"></i></a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $book['id'] }}">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $book['id'] }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Book</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <a href="/delete/{{ $book['id'] }}"
                                                        class="btn btn-danger"><i
                                                            class="fa-solid fa-trash-can"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/prepareUpdate/{{$book['id']}}" class="btn btn-sm btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

</body>

</html>
