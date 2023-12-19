<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire ajout categorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>



    <div class="container">
        <hr />

        <form action="/category/add" method="POST">
            @csrf
            

            <div class="form-group">

                <label for="">Nom de la categorie </label>
                <input type="text" name="nom" class="form-control" value="{{ @old ('nom') }}">

                @error('nom')
                {{$message}}
                @enderror

            </div>

            <div class="form-group">

                <label for="">description de la categorie </label>
                <textarea name="desc" class="form-control">{{ @old ('desc') }}</textarea>
                @error('desc')
                {{$message}}
                @enderror
            </div>

            <button type="submit" class="btn btn-primary"> Ajouter</button>


        </form>




    </div>




</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>