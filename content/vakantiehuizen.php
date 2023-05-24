<p>vakantiehuizen.php</p>
<div class="cont-subtext-2 wordkleinerkutding">
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