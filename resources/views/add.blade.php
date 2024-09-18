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

<body>
    <h1 class="text-center mt-5"> Laravel Book CRUD </h1>
    <div class="container mt-2">
        @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif

    </div>
    <form action="/addBooks" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3 bg-light">
            <div class="row">
                <div class="col-xl-12 m-2">
                    <a href="/" name="btnAdd" class="btn btn-info text-white">
                        back
                    </a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        <div class="container mt-4 bg-light">
            <div class="row m-3">
                <div class="col-xl-6 mt-3">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control">
                </div>
                <div class="col-xl-6 mt-3">
                    <label for="">Author</label>
                    <input type="text" name="author" id="" class="form-control">
                </div>
                <div class="col-xl-6 mt-3">
                    <label for="">Description</label>
                    <input type="text" name="description" id="" class="form-control">
                </div>
                <div class="col-xl-6 mt-3">
                    <label for="">Price</label>
                    <input type="text" name="price" id="" class="form-control">
                </div>
                <div class="col-xl-6 mt-3">
                    <label for="">Year</label>
                    <input type="date" name="year" id="" class="form-control">
                </div>
                <div class="col-xl-6 mt-3">
                    <label for="">Image</label>
                    <input type="file" name="image" id="photo" class="form-control">
                </div>
                <div class="col-xl-6 mb-5"></div>
                <div class="col-xl-6 mb-5 mt-2">
                    <img id="preViewIMG" src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg"
                        height="200" alt="">
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    const file = document.getElementById('photo');
    const imgPreview = document.getElementById('preViewIMG');

    file.addEventListener("change", function() {
        var srcfile = this.files[0];
        var reader = new FileReader();
        reader.addEventListener('load', function() {
            imgPreview.src = reader.result;
        })

        reader.readAsDataURL(srcfile);
    })
</script>
</html>
