<?php


if(isset($_POST['a'], $_POST['b'], $_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];



/**
 * Suskaičiuojamas trikampio plotas
 *
 * @param $a - trikampio kraštinės ilgis
 * @param $b - trikampio kraštinės ilgis
 * @param $c - trikampio kraštinės ilgis
 * @var  $atsakymas
 */

$atsakymas = function ($a, $b, $c) {
        $p = ($a + $b + $c) / 2;
        $s = ($p * ($p - $a) * ($p - $b) * ($p - $c)) ** (1 / 2);
        return $s;
    };
}

//print_r($atsakymas($a,$b,$c));

?>

<?php include "navigation.php"; ?>


<div class="container-md">
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Trikampio ploto skaičiavimas
                </div>
                <div class="card-body">
                    <form method="post">
                        <div>Kraštinės a ilgis</div>
                        <input class="col-12" type="text" name="a">
                        <div class="mt-3">Kraštinės b ilgis</div>
                        <input class="col-12" type="text" name="b">
                        <div class="mt-3">Kraštinės c ilgis</div>
                        <input class="col-12" type="text" name="c"><br>
                        <button class="btn btn-success mt-4 col-12" type="submit">Skaičiuoti trikampio plotą
                        </button>
                    </form>
                </div>
            </div>
            <div class="mt-3">
                <?php if (isset($atsakymas)>0) { ?>
                    Kraštinės a ilgis yra: <?= $a ?><br>
                    Kraštinės b ilgis yra: <?= $b ?><br>
                    Kraštinės c ilgis yra: <?= $c ?><br>
                    Trikampio plotas yra: <?= round($atsakymas($a,$b,$c),2) ?><br>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

