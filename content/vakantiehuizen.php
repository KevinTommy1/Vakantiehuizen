<div class="cont-subtext-2 sixty-percent mt-3 pt-3">
    <div class="row text-center">

        <?php
        $sql = "SELECT titel, pagina, tekst FROM teksten";

        // Execute the query and fetch the results
        $sys = $conn->query($sql);
        $results = $sys->fetchAll(PDO::FETCH_ASSOC);

        // Loop through the results and print the desired columns
        foreach ($results as $row) {
            if ($row['pagina'] == $link) {
                echo "<div class='col-lg'><h1 class='ps-4 pe-4'>" . $row['titel'] . "</h1></div></div><div class='row text-center'>";
                echo "<div class='col-lg'><p class='ps-4 pe-4'>" . $row['tekst'] . "</p></div>";
            }
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="row p-5">
        <?php
        $sql = "SELECT personen, prijs, huis, omschrijving_small, omschrijving FROM huizen";

        $sys = $conn->query($sql);
        $results = $sys->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {
            echo "
        <div class='col-md-6 col-lg-4 col-xl-3 col-xxl-3'>
            <div class='card m-auto mt-3'>
                <div class='card-body'>
                    <img class='card-img-top' src='img/huisjes/bos_lodge/bos_lodge.png' alt'img'>
                    <h5 class='card-title'>" . $row['huis'] . "</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>€" . $row['prijs'] . "</h6>
                    <p class='card-text'>" . $row['omschrijving_small'] . "</p>
                    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Meer informatie</button>
                    <a href='#' class='btn btn-primary'>Order</a>
                </div>
            </div>
        </div>";
        }
        ?>
    </div>
</div>