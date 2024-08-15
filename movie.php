<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter movie title" name="title"autocomplete="off">
            </div>
        </form>

        <form action="upload.php" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" placeholder="Enter your email" name="movie_image">
                <input type="submit" name="submit" value="Upload">
            </div>
        </form>

        <form>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile"autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>

</body>

</html>

