<p>vakantiehuizen.php</p>
<div class="row text-center">

    <?php
    $sql = "SELECT titel, pagina, tekst FROM teksten";

    // Execute the query and fetch the results
    $sys = $conn->query($sql);
    $results = $sys->fetchAll(PDO::FETCH_ASSOC);

    // Loop through the results and print the desired columns
    foreach ($results as $row) {
        if ($row['pagina'] == $link) {
            echo "<div class='col-lg'></div><div class='col-lg-6'><h1 class='ps-4 pe-4'>" . $row['titel'] . "</h1></div><div class='col-lg'></div></div><div class='row text-center'>";
            echo "<div class='col-lg'></div><div class='col-lg-6'><p class='ps-4 pe-4'>" . $row['tekst'] . "</p></div><div class='col-lg'></div>";
        }
    }
    ?>
</div>