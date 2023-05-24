<div class="text-center">
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
    <div class="row pt-4">
        <div class="col-md"></div>
        <div class="col-md">
            <div class="cont-subtext">
                <div class="inline-flex">
                    <ul class="ul-same-row reset">
                        <li>
                            <i class="fa-solid fa-check-double fa-2xl"></i>
                        </li>
                        <li>
                            <p class="reset">Goedkoop</p>
                        </li>
                    </ul>
                </div>
                <p class="subtext">Wij bieden de goedkoopste service met de hoogste kwaliteit in zeeland!</p>
            </div>
        </div>
        <div class="col-md">
            <div class="cont-subtext">
                <div class="inline-flex">
                    <ul class="ul-same-row reset">
                        <li>
                            <i class="fa-solid fa-check-double fa-2xl"></i>
                        </li>
                        <li>
                            <p class="reset">Duurzaam</p>
                        </li>
                    </ul>
                </div>
                <p class="subtext">Onze huisjes zijn uitstoot vrij en op een combi van zonne- en windenergie.</p>
            </div>
        </div>
        <div class="col-md">
            <div class="cont-subtext">
                <div class="inline-flex">
                    <ul class="ul-same-row reset">
                        <li>
                            <i class="fa-solid fa-check-double fa-2xl"></i>
                        </li>
                        <li>
                            <p class="reset">Écht zeeuws</p>
                        </li>
                    </ul>
                </div>
                <p class="subtext"></p>
            </div>
        </div>
        <div class="col-md"></div>
    </div>
    <div class="container cont-subtext-2 mt-5">
        <?php
        foreach ($results as $row) {
            if ($row['pagina'] == $link) {
                echo "<p class='ps-4 pe-4 pt-2 reset'>" . $row['tekst'] . "</p>";
            }
        }
        ?>
    </div>
</div>