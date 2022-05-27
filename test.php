<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title> Testing </title>
    <link href="images/icons/coolcraft_icon.png" rel="icon" type="image/png" />

    <link href="style.css" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <!--
    <script src="script.js"> </script>
    <script src="ajax_db.js"> </script>
    -->

    <div class="header">
        <p> Hello </p>
        <?php
        $text = $_POST['text1'];
        $button = $_POST['button1'];
        echo "<p> " . $text . " and " . $button . "</p>";
        ?>
    </div>

    <br><br><br>

    <footer class="footer">
    </footer>
</body>

</html>