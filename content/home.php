<div class=" text-center">
    <div class="row background-img align-items-center">
        <div class="child">
            <image class="background-img" src="img/beginfoto-stranden-zeeland-1997112101-660x330.jpg">
        </div>
        <div class="child blurbackground cover-img">
            <?php
            // Execute the query and fetch the results
            $sys = $conn->query("SELECT titel, pagina, tekst FROM teksten");
            $results = $sys->fetchAll(PDO::FETCH_ASSOC);

            // Loop through the results and print the desired columns
            foreach ($results as $row) {
                if ($row['pagina'] == $link) {
                    echo "<h1 class='titel'>" . $row['titel'] . "</h1>";
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container">
                <i class="fa-solid fa-check-double d-flex"></i><p class="d-flex">test</p>
            </div>
        </div>
    </div>
    <div class='row'>
        <?php
        foreach ($results as $row) {
            if ($row['pagina'] == $link) {
                echo "<p class='ps-4 pe-4'>" . $row['tekst'] . "</p>";
            }
        }
        ?>
    </div>
</div>