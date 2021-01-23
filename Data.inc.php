<?php
    require "Library.inc.php";
    require "Data.inc.php";
    use Library;
    use DataCleaner;
    // Instantiate the Library's Clean class
    $filter = new Library\Clean();
      // Instantiate the DataCleaner's Clean class
      $profanity = new DataCleaner\Clean();
      // Create a book title
      $title = "the idiotic sun also rises";
      // Output the title before filtering occurs
      printf("Title before filters: %s <br />", $title);
      // Remove profanity from the title
      $title = $profanity->removeProfanity($title);
      printf("Title after Library\Clean: %s <br />", $title);
      // Remove white space and capitalize title
      $title = $filter->filterTitle($title);
      printf("Title after DataCleaner\Clean: %s <br />", $title);
  ?>