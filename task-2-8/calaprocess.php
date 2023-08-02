<?php
if (isset($_GET['answer'])) {
    $first = $_GET['first'];
    $second = $_GET['second'];

    if (isset($_GET['add'])) {
        $result = $first + $second;
    } elseif (isset($_GET['subtract'])) {
        $result = $first - $second;
    } elseif (isset($_GET['times'])) {
        $result = $first * $second;
    } elseif (isset($_GET['divide'])) {
        $result = $first / $second;
    } else {
        $result = "Invalid operation";
    }
} else {
    $result = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator Result</title>
</head>
<body>
    <p>The answer is: <?php echo $result; ?></p>
</body>
</html>