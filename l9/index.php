<?php
$url = 'https://api.opendota.com/api/proMatches';
for ($i = 0; $i < 10; $i++) {

}
$options= array(
    "match_id" => 3703866531,
    "duration" => 0,
    "start_time" => 0,
    "radiant_team_id"=> 0,
    "radiant_name" => "string",
    "dire_team_id"=> 0,
    "dire_name"=> "string",
    "leagueid"=> 0,
    "league_name"=> "string",
    "series_id"=> 0,
    "series_type"=> 0,
    "radiant_score"=> 0,
    "dire_score"=> 0,
    "radiant_win"=> true,
    "radiant"=> true
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo '<pre>';
print_r($data);

?>