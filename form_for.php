<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat form dari for php</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="c0l-12 col-md-8 col-lg-10 text-black mt-3" style="min-height: 800px">
    <h2 class="text-center"><b>FORM FOR</b></h2>
    <br>
        <form action="whiledando.php" method="POST">
            <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Number</label>
                <div class="col-sm-10">
                    <input type="number" name="number" class="form-control"  placeholder="masukan angka">
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">RUN</button> 
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>