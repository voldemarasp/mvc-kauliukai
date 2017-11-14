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
            <div class="col-9">
                <h1><?= $data['header']; ?></h1>
            </div>
            <div class="col-3 text-right">
                <?php if (!empty($_SESSION['logged'])) { ?><a style="color:white;" href="Login/logout">Log out</a> <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <?php if (!empty($_SESSION['logged'])) { ?>
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th scope="col">Zaidimas</th>
                            <th scope="col">Rezultatas</th>
                            <th scope="col">Data</th>
                        </tr>
                    </thead>
                    <tbody id="statistika">
                    </tbody>
                </table>
                <?php } elseif (empty($_GET['register']) || !empty($_GET['login']) || !empty($_GET['go_login'])) { 
                    ?>
                    <h3 class="mt-5">Log in</h3>
                    <?php if (!empty($_GET['login_error'])) { echo "<p style='color:red;'>Bad login details</p>"; } ?>
                    <form method="POST" action="Login">
                        <input class="form-control" type="text" name="vardas" placeholder="Username" id="username">
                        <input class="form-control" type="password" name="slaptazodis" placeholder="Password" id="password">
                        <button id="login_submit" class="form-control btn btn-success mt-3" name="login_submit">Submit</button>
                    </form>
                    <p class="mt-3 text-center"><a href="?register=yes">Register</a></p>
                    <?php } elseif (!empty($_GET['register']) || !empty($_GET['error_reg'])) {
                        ?>
                        <h3 class="mt-5">Register</h3>
                        <?php if (!empty($_GET['error_reg'])) { echo "<p style='color:red;'>Username exists</p>"; } ?>
                        <form method="POST" action="Login/register">
                            <input id="username" class="form-control" type="text" name="vardas_reg" placeholder="Username">
                            <input id="password" class="form-control" type="password" name="slaptazodis_reg" placeholder="Password">
                            <button id="register_submit" class="form-control btn btn-success mt-3" name="register_submit">Submit</button>
                        </form>
                        <p class="mt-3 text-center"><a href="?register=">Login</a></p>
                        <?php } ?>
                        <div class="row text-center mt-5">
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
                                <input id="start_game" class="btn btn-primary" value="Pradeti zaidima"
                                <?php
                                if (!isset($_SESSION["logged"])) { echo "disabled='disabled'"; }
                                ?>
                                >
                            </div>
                            <div class="col-lg-6 col-md-12 text-left">
                                <input id="roll_dice" class="btn btn-success nulinis" value="Sukti kauliukus"
                                <?php
                                if (!isset($_SESSION["logged"])) { echo "disabled='disabled'"; }
                                ?>
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
            <script type="text/javascript" src="http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master/script_game.js"></script>
        </body>
        </html>