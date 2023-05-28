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
    $firstInArray = true;
    $lastId = 0;

    $sql = "SELECT h.personen, h.prijs, h.huis, h.omschrijving_small, h.omschrijving, h.id, a.huis_id, a.afbeelding
    FROM huizen h
    LEFT JOIN afbeeldingen a ON a.huis_id = h.id
    ORDER BY h.huis";

    $sys = $conn->query($sql);
    $results = $sys->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        if ($row['id'] != $lastId) {
            echo "
<div class='col-md-6 col-lg-4 col-xl-3 col-xxl-3 mt-3'>
    <div class='card m-auto h-100'>
        <div class='card-header'>
            <img class='card-img-top mt-2' src='" . $row['afbeelding'] . "' alt='foto " . $row['huis'] . "'>
            <h5 class='card-title'>" . $row['huis'] . "</h5>
        </div>
        <div class='card-body'>
            <h6 class='card-subtitle mb-2 text-muted'>€" . $row['prijs'] . "</h6>
            <p class='card-text'>" . $row['omschrijving_small'] . "</p>
        </div>
        <div class='card-footer'>
            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modal" . $row['id'] . "'>Meer informatie</button>
        </div>
    </div>
</div>
<div class='modal fade' id='modal" . $row['id'] . "' tabindex='-1' aria-labelledby='modalLabel" . $row['id'] . "' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='modalLabel" . $row['id'] . "'>" . $row['huis'] . "</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <div id='carousel" . $row['id'] . "' class='carousel slide'>
                    <div class='carousel-inner'>";

            foreach ($results as $picture) {
                if ($picture['huis_id'] == $row['id'] && $picture['afbeelding'] != null) {
                    echo "<div class='carousel-item";
                    if ($firstInArray) {
                        echo " active";
                        $firstInArray = false;
                    }
                    echo "'>
                            <img src='" . $picture['afbeelding'] . "' class='d-block w-100 h-50'>
                        </div>";
                }
            }

            echo "</div>
                    <button class='carousel-control-prev' type='button' data-bs-target='#carousel" . $row['id'] . "' data-bs-slide='prev'>
                        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                        <span class='visually-hidden'>Previous</span>
                    </button>
                    <button class='carousel-control-next' type='button' data-bs-target='#carousel" . $row['id'] . "' data-bs-slide='next'>
                        <span class='carousel-control-next-icon' aria-hidden='true'></span>
                        <span class='visually-hidden'>Next</span>
                    </button>
                </div>
                <p>" . $row['omschrijving'] . "</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>";
            $lastId = $row['id'];
        }
    }
?>

    </div>


</div>
</div>