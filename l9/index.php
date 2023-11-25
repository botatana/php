<?php

$url = 'https://api.opendota.com/api/proMatches';
$response = file_get_contents($url);


$data = json_decode($response, true);


echo '<table border="1">';
echo '<tr><th>ID</th><th>Match Duration</th><th>Start Time</th><th>End Time</th><th>Team Name 1</th><th>Team Name 2</th></tr>';


for ($i = 0; $i < 20; $i++) {
    $match = $data[$i];

    $id = $match['match_id'];
    $duration = $match['duration'];
    $startTime = date('Y-m-d H:i:s', $match['start_time']);
    $endTime = date('Y-m-d H:i:s', $match['start_time'] + $match['duration']);
    $teamName1 = $match['radiant_team']['name'];
    $teamName2 = $match['dire_team']['name'];

    echo "<tr><td>$id</td><td>$duration</td><td>$startTime</td><td>$endTime</td><td>$teamName1</td><td>$teamName2</td></tr>";
}

echo '</table>';
?>
