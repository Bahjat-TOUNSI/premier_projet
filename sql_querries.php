<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Progression PHP de base</title>
    <?php
    global $db;
    include "bootstraplinks.php";
    include "database.php";
    include "header.php";
    ?>
</head>

<body>

<pre>
<?php
print_r(order_name_price($db));


?>
</pre>









</body>

</html>

<?php
include "footer.php";
?>