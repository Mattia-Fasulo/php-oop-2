<div id="app">
    <div class="container">
        <div class="row mt-5 g-5">
            <?php foreach ($products as $key) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $key->urlImg ?>" alt="Card image cap">

                    <?php echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>$key->name</h5>";
                        echo "<div class='my-2'>Category: " . $key->getCategoryIcon() . "</div>";
                        echo "<div class='d-flex justify-content-between    align-content-center'>";
                        echo "<a href='#' class='btn btn-primary'>Buy</a>";
                        echo "<div class='fs-5 pt-2'>$key->price €</div>";
                        echo "</div>";
                        echo "</div>";
                    ?>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

</div>