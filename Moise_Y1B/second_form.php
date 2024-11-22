
    <!doctype html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    </head>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $week = $_POST['week'];
    $month = $_POST['month'];
    $range = $_POST['range'];
    $color = $_POST['color'];
    $study = $_POST['study'];
    $comments = $_POST['comments'];

    echo "<h3>Form Submission Details</h3>";
    echo "<table border='1' style='border-collapse: collapse;'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Week of Study</td><td>$week</td></tr>";
    echo "<tr><td>Month of Study</td><td>$month</td></tr>";
    echo "<tr><td>Range</td><td>$range</td></tr>";
    echo "<tr><td>Color</td><td><span style='background-color: $color; padding: 5px;'>$color</span></td></tr>";
    echo "<tr><td>session</td><td>$study</td></tr>";
    echo "<tr><td>lessons</td><td>$comments</td></tr>";
    echo "</table>";
}
?>


