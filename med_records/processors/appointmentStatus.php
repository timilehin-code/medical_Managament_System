<?php
function styleDataFromDatabase($data) {
    $html = "<table>";
    $html .= "<tr><th>Name</th><th>Status</th></tr>";

    foreach ($data as $row) {
        $style = "style='padding: 10px;'";
        if ($row["appointmentStatus"] == "booked") {
            $style .= "background-color: green; color: white;";
        } else {
            $style .= "background-color: red; color: white;";
        }
        $html .= "<tr " . $style . "><td>" . $row["appointmentStatus"] . "</td></tr>";
    }

    $html .= "</table>";
    return $html;
}

require '../connection/conx.php';

$sqli = "SELECT * FROM appointment";
$result = $conn->query($sqli);

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$styledTable = styleDataFromDatabase($data);
echo $styledTable;

// $conn->close();
