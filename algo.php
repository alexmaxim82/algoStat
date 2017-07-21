!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Algo Stat</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="algo.php">Accueil</a></li>
                <li><a href="count.php">Etape 1</a></li>
                <li><a href="temps.php">Etape 2</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container-fluid">
    <h2 class="subtitle"> AlgoStat</h2>
    <?php include('algoInsertion.php') ?>
    <?php include('algoSelection.php') ?>

    <section>
        <h2 class="subtitle">Representation algos</h2>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </section>


</div>
<footer class="ffirst">
    <div class="row">
        <div class="col-md-3">
            <h6 class="smallh6">Algo stat de maxim_e, pacaud_a et shango_a</h6>
        </div>
</footer>
<footer class="flast">

    <p>copyright 2017</p>
</footer>

<script src ="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src ='jAlgo.js'></script>



</body>

</html>
