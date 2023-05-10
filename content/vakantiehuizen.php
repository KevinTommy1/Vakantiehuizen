<p>vakantiehuizen.php</p>
<div class="row">
    <div class="col text-center">
        <?php
        $sql = "SELECT titel, pagina, tekst FROM teksten";

        // Execute the query and fetch the results
        $sys = $conn->query($sql);
        $results = $sys->fetchAll(PDO::FETCH_ASSOC);

        // Loop through the results and print the desired columns
        foreach ($results as $row) {
            if ($row['pagina'] == $link) {
                echo "<h1 class='ps-4 pe-4'>" . $row['titel'] . "</h1>";
                echo "<p class='ps-4 pe-4'>" . $row['tekst'] . "</p>";
            }
        }
        ?>
    </div>
</div>