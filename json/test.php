<?php 

$jsonString = file_get_contents('landmark.json');
$data = json_decode($jsonString, true);

$id = $_GET['id'];

foreach ($data as $key => $entry) {
    if ($entry['id'] == $id) {
        $value = $data[$key]['views'];
        $data[$key]['views'] = (string)((int)$value + 1);
        $total = $data[$key]['views'];
    }
}

$newJsonString = json_encode($data);
file_put_contents('landmark.json', $newJsonString);

echo $total;
?>