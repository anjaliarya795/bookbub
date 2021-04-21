<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg shadow-large navbar-dark bg-dark p-3">
        <div class="container">
            <a href="/" class="navbar-brand">BookBub</a>

            <form action="" class="d-flex me-5">
                <input type="search" name="search" class="form-control" size="70">
                <input type="submit" name="find" class="btn btn-secondary">
            </form>

            <ul class="navbar-nav me-5">
                <li class="navbar-item"><a href="/about" class="nav-link">About </a></li>
            </ul>
        </div>

    </nav>

    <div class="container mt-5">
        <div class="row my-5 py-5">
            <div class="card col-xl-6 mx-auto">
                <div class="card-body">
                    <p>         “I took my time, running my fingers along the spines of books, stopping to pull a title from the shelf and inspect it. A sense of well-being flowed through me as I circled the ground floor. It was better than meditation or a new pair of shoes- or even chocolate. My life was a disaster, but there were still books. Lots and lots of books. A refuge. A solace. Each one offering the possibility of a new beginning.”
                <strong>― Beth Pattillo, Jane Austen Ruined My Life</strong></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <a href="/book1" class="card col-xl-4 mx-auto nav-link py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 1</h1>
                </div>
            </a>
            <a href="/book2" class="card col-xl-4 nav-link mx-auto py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 2</h1>
                </div>
            </a>
        </div>
        <div class="row mt-5">
            <a href="/book3" class="card col-xl-4 mx-auto nav-link py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 3</h1>
                </div>
            </a>
            <a href="/book4" class="card col-xl-4 nav-link mx-auto py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 4</h1>
                </div>
            </a>
        </div>
    </div>
</body>
</html>