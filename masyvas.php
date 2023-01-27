<?php



//function trinti($a) {
//    $m = [1, 2, 3, 4];
//    array_splice($m, $a, 1);
////    unset($m[$a]);
//    print_r($m);
//}

// ARBA VARIANTAS NR.2


$m = [1, 2, 3, 4];
/**Funkcija ištrina iš masyvo nurodytą elementą pagal indeksą
 *
 * @param $a nurodomas elementas pagal indeksą
 * @return void
 */
$remove=function($a) use ($m) {
    array_splice($m, $a, 1);
//    unset($m[$a]);
    print_r($m);
}


?>

<?php include "navigation.php"; ?>

<div class="row d-flex justify-content-center my-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Panaikinti masyvo elementą
            </div>
            <div class="card-body">


<!--                --><?php //= trinti(2) ?>

<!--                ARBA VARIANTAS NR.2-->

                <?= $remove(2) ?>


            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>


