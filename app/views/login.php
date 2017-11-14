<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <style>
    .header {
        font-family: 'Oswald', sans-serif;
        background-color: gray;
        color: white;
        padding: 50px 5px 10px 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row header">
            <div class="col">
                <h1><?= $data['header']; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mt-5">
            <h3>Log in</h3>
            <form method="POST">
                <input class="form-control" type="text" name="vardas" placeholder="Username">
                <input class="form-control" type="password" name="slaptazodis" placeholder="Password">
                <button class="form-control btn btn-success mt-3" name="submit">Submit</button>
            </form>
                <div class="row" style="text-align: center;">
                    <div class="col-6">
                        <a href="http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master/Stats">Statistika</a>
                    </div>
                    <div class="col-6">
                        <a href="http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master/Stats/top">Kreives</a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                    <div class="row mt-5">
                        <div id="kauliukas_pirmas" class="col-4">
                            <img class="img-fluid" src="images/1.jpg">
                        </div>
                        <div id="kauliukas_antras" class="col-4">
                            <img class="img-fluid" src="images/1.jpg">
                        </div>
                        <div id="kauliukas_trecias" class="col-4">
                            <img class="img-fluid" src="images/1.jpg">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-12 text-right">
                            <input id="start_game" class="btn btn-primary" value="Pradeti zaidima" disabled="disabled"> 
                        </div>
                        <div class="col-lg-6 col-md-12 text-left">
                            <input id="roll_dice" class="btn btn-success nulinis" value="Sukti kauliukus" disabled="disabled"> 
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>