
   <head>
     <meta http-equiv="content-type" content="text/xml; charset=utf-8" />
     <!--ensures proper rendering and touch zooming on mobile devices-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>StarTrekDB</title>
     <!--import google font-->
     <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
     <!--import style sheet-->
     <link rel="stylesheet" type = "text/css"
     href=stdbstyle.css>
     <!--link javascript-->
</head>
  <?php

  DEFINE ('DB_USER', 'root');
  DEFINE ('DB_PASSWORD', '4011');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'startrekdb');

  // create a connection to the DB
  // @ symbol prevents errors from displaying in the browser
  $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  OR die('Could Not Connect to the Database' . mysqli_connect_error());

  $jsondata = file_get_contents('vgr.json');
  $data = json_decode($jsondata, true);

  // loop through the seasons
  $season = 1;
  foreach($data as $val){
    $nextArr = $val;

    // loop through the episodes
    foreach($nextArr as $val){
      $seriesnum = 4;
      $episodeNum = $val['No. in season'];
      $episodeName =  $val['Title'];
      $director = $val['Directed by'];
      $releaseDate = $val['Original air date'];
      echo $season, " ", $episodeName;

      $sql = "INSERT INTO episodelist" . "(seriesnum, season, episodenum, episodename, director, release_date)
      VALUES ('$seriesnum', '$season', '$episodeNum', '$episodeName', '$director', '$releaseDate')";
      if (mysqli_query($dbc, $sql)){
          echo "Data entered successfuly";
      }
      else{
        die("ERROR here " . mysqli_error($dbc));
      }
    }

    $season += 1;
  }

  $episode1 = $data['season1']['0']['Title'];
  //

  ?>
