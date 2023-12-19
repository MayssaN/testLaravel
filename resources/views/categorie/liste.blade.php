<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <div class="container p-3">


        <h1 class="text-center">Liste des catégories</h1>


        <table class="table">
            <thead>
                <tr>
              
                    <th scope="col">nom </th>
                    <th scope="col">description</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($listecategories as $categorie)
                <tr>
                   
                    <td>{{$categorie->name}}</td>
                    <td>{{$categorie->description}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>

















</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>