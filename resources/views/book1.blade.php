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
                <li class="navbar-item"><a href="/about" class="nav-link">About</a></li>
            </ul>
        </div>

    </nav>

    <div class="container mt-5">
        <div class="row my-5 py-5">
            <div class="card col-xl-6 mx-auto">
                <div class="card-body">
                    <h2 class="text-danger mb-3">To Kill A Mockingbird</h2>
                    <p><strong>The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it, To Kill A Mockingbird became both an instant bestseller and a critical success when it was first published in 1960. It went on to win the Pulitzer Prize in 1961 and was later made into an Academy Award-winning film, also a classic.
                    Compassionate, dramatic, and deeply moving, To Kill A Mockingbird takes readers to the roots of human behavior - to innocence and experience, kindness and cruelty, love and hatred, humor and pathos. Now with over 18 million copies in print and translated into forty languages, this regional story by a young Alabama woman claims universal appeal. Harper Lee always considered her book to be a simple love story. Today it is regarded as a masterpiece of American literature.</strong></p>
                </div>
            </div>
        </div>
        <div class="row my-5 py-5">
            <a href="/book2" class="card col-xl-3 mx-auto nav-link py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 2</h1>
                </div>
            </a>
            <a href="/book3" class="card col-xl-3 mx-auto nav-link py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 3</h1>
                </div>
            </a>
            <a href="/book4" class="card col-xl-3 mx-auto nav-link py-3 shadow-lg">
                <div class="card-body text-center text-dark">
                    <h1>Book 4</h1>
                </div>
            </a>
        </div>
    </div>
</body>
</html>