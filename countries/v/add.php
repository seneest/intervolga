<?php
include_once('../m/func.php');
$country='';
$country_err='';
if (!empty($_POST)) {
    $country=htmlspecialchars($_POST["country"]);


    if (mb_strlen($country)<3){
        echo '<div class="alert alert-danger" role="alert"> Минимум 3 символа </div>';
        $country_err="is-invalid";
    }
    else {
        add_country($country);
        $new_url='../' ;
        header('Location:'.$new_url);
        echo '<meta http-equiv="refresh" content="1;URL=../">';
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../сss/style.css">
    <title>Страна</title>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="../../"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill home" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg></a></li>
    </ol>
</nav>
<form method="post">
<h1>Страна</h1>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
                <div class="form-group">
                    <label for="country">Название страны</label>
                    <input name="country" type="text" required class="form-control <?php echo $country_err; ?>" id="country" value="<?php echo "$country"; ?>">
                    <?php if (".$country_err."=="is-invalid") {echo '<div class="invalid-feedback"> Неверные данные </div>';}?>
                </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
         </div>
    </div>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
