<!DOCTYPE html>
<html>

<head>
    <title>Lichtbediening</title>
    <link rel="stylesheet" href="includes/LichtenAanUit.css">
</head>

<body>

    <div class="room-card">

        <h2>Lichtbediening</h2>

        <form method="post">

            <label for="kamer">Kies een kamer:</label>
            <br><br>

            <select name="kamer" id="kamer">
                <option value="woonkamer">Woonkamer</option>
                <option value="keuken">Keuken</option>
                <option value="slaapkamer">Slaapkamer</option>
                <option value="badkamer">Badkamer</option>
            </select>

            <div class="button-group">
                <button type="submit" name="actie" value="aan">Licht Aan</button>
                <button type="submit" name="actie" value="uit">Licht Uit</button>
            </div>

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kamer = htmlspecialchars($_POST['kamer']);
            $actie = htmlspecialchars($_POST['actie']);

            echo "<p class='status'>Het licht in de <strong>$kamer</strong> wordt <strong>$actie</strong> gezet.</p>";
        }
        ?>

    </div>

</body>

</html>