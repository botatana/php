<?php
// Fetch data from the API
$url = 'https://api.opendota.com/api/proMatches';
$response = file_get_contents($url);

// Decode JSON response
$data = json_decode($response, true);

// Create a table
echo '<table border="1">';
echo '<tr><th>ID</th><th>Match Duration</th><th>Start Time</th><th>End Time</th><th>Team Name 1</th><th>Team Name 2</th></tr>';

// Display the last 20 matches
for ($i = 0; $i < 20; $i++) {
    $match = $data[$i];

    // Extracting relevant information
    $id = $match['match_id'];
    $duration = $match['duration'];
    $startTime = date('Y-m-d H:i:s', $match['start_time']);
    $endTime = date('Y-m-d H:i:s', $match['start_time'] + $match['duration']);
    $teamName1 = $match['radiant_team']['name'];
    $teamName2 = $match['dire_team']['name'];

    // Displaying the data in the table
    echo "<tr><td>$id</td><td>$duration</td><td>$startTime</td><td>$endTime</td><td>$teamName1</td><td>$teamName2</td></tr>";
}

echo '</table>';
?>
