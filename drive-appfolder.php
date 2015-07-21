
<?php
/*
  Print metadata for the Application Data folder.
 
  @param Google_DriveService $service Drive API service instance.
 */
 
function printApplicationDataFolderMetadata($service) {
  try {
    $file = $service->files->get("appfolder");

    print "Id: " . $file->getId();
    print "Title: " . $file->getTitle();
  } catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
  }
}
?>