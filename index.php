<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Kaj Ginus"/>
  <title>Json 2</title>
</head>

<body>
  <h1>Form</h1>
  <form id="pop" method="POST" action="save.php">
    <fieldset>
      <legend>Form</legend>
      <label>Name:</label><br />
      <input type="text" placeholder="Name" name="name" autofocus/><br /><br />

      <label>Job:</label><br />
      <input type="text" placeholder="Job" name="job"/><br /><br />

      <input type="submit" value="Submit"/>
    </fieldset>
  </form>

  <?php
  $file = 'info.json';
  if(!file_exists($file))
  {
    die("Can't find file");
  }
  $content = file_get_contents($file);
  $json = json_decode($content, true);
  echo"<hr><code><pre>";

  foreach ($json as $test)
  {
    print_r("Name: ".$test['name']."<br />");
    print_r("Job".$test['job']."<br />");
    print_r("<br />");
  }
  echo"</pre></code><hr>";
  ?>
</body>
</html>
