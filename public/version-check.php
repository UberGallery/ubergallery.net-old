<?php // UberGallery version check script

  $currentVersion = "1.6.2";
  $clientVersion = $_GET['ver'];

  if ($clientVersion < $currentVersion) {
    echo "upgrade";
  } elseif ($clientVersion == $currentVersion) {
    echo "latest";
  } elseif ($clientVersion > $currentVersion) {
    echo "development";
  }

?>