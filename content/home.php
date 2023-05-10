<div class=" text-center">
    <div class="row background-img align-items-center">
        <div class="child">
            <image class="background-img" src="img/beginfoto-stranden-zeeland-1997112101-660x330.jpg">
        </div>
        <div class="child blurbackground cover-img">
            <?php
            $sql = "SELECT titel, pagina, tekst FROM teksten";

            // Execute the query and fetch the results
            $sys = $conn->query($sql);
            $results = $sys->fetchAll(PDO::FETCH_ASSOC);

            // Loop through the results and print the desired columns
            foreach ($results as $row) {
                if ($row['pagina'] == $link) {
                    echo "<h1 class='ps-4 pe-4 cover-img'>" . $row['titel'] . "</h1>";
                    echo "</div></div><div class='row'>";
                    echo "<p class='ps-4 pe-4'>" . $row['tekst'] . "</p>";
                }
            }
            ?>
        </div>
    </div>