<?php
$file = 'info.json';
if(!file_exists($file))
{
  die("Can't find file");
}

if(!isset($_POST['name']) || !isset($_POST['job']))
{
  echo '<a href="index.php">Go back</a>';
  die('Not all fields were filled in (correctly), please go back');
}

$name = $_POST['name'];
$job = $_POST['job'];
if($name == "" || $job == "")
{
  echo '<a href="index.php">Go back</a><br />';
  die('Not all fields were filled in (correctly), please go back');
}

$data = array
(
  'name' => $name,
  'mental_state' => $job
);

$arr_data = array();
$jsondata = file_get_contents($file);
$arr_data = json_decode($jsondata, true);
$arr_data[] = $data;
$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

if(!file_put_contents($file, $jsondata))
{
  die('<p>Failed to save data</p>');
}
echo '<p>Saved, go <a href="index.php">back</a>?</p>';
?>
