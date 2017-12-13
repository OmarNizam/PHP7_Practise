<?php

// echo dirname(__File__);

  $file = "/Users/omar/Desktop/PHP/elzero-php/File-System/Osama.php";

  if (is_writable($file)) {
      echo 'Good the file [' . $file . '] is writable' . "<br />";
      file_put_contents($file, "The file is writable" . "<br />");
  } else {
      echo 'Sorry the file [' . $file . '] is not writable So I can\'t add contents to it.' . "<br />";
      file_put_contents($file, "Created by PHP");
  }

echo "The dirname is : " .  dirname("/Users/omar/Desktop/PHP/elzero-php/File-System/Omar.php") . "<br />";   // get the dir path for exactly file.

echo __FILE__ ."<br />";   // print the full path for your file

echo dirname(__FILE__) . "<br />";   // print the dir path for this file.

echo __DIR__ . "<br />";

// Syntax:
//        basename($path);

echo basename(__FILE__, '.php') . "<br />";   // print the file name without the extintion .php

echo "Yor file name is " . basename(__FILE__, '.php') . "<br />";

if (basename(__FILE__, ".php") === "index") {   // If this file name is index print the message.
  echo "Good your file is ready now" . "<br />  ";
}

/*
  [1] Check if the Directory is exists or not
  [2] If the directory is not exists => Make the directory
  [3] Assign this directory to variable
  [5] Create a file inside the directory
  [6] Assign this file to variable
  [7] Change mode of this file to be read only
  [8] Check if this file is writable and if not
  [9] Change the file mode and make it writable
  [10] Include this file in the index.PHP
*/

if (file_exists(__DIR__ . '/PHP')) {
  echo "Sorry this directory exists" . "<br />";
} else {
  mkdir(__DIR__ . '/PHP');
}

$directory = __DIR__ . '/PHP/';
file_put_contents($directory . "text.php", "Hello");

$file = $directory . 'text.php';

chmod($file, 0444);    // Chang the file mode to read only.

if (is_writable($file)) {
  file_put_contents($file, "Hello");
} else {
  chmod($file, 0755);      // Changing the file mode to writable.
  file_put_contents($file, "<?php echo 'congratulations the training is Done' . '<br />';");
}

include $file;


//  File System :  file_put_contents
      //Syntax:
      //          file_put_contents($filename, $data, mode, context);
      // for mode there are three kinds:
      //                              // [1] FILE_APPEND
                                      // [2] LOCK_EX
                                      // [3] FILE_USE_INCLUDE_PATH

file_put_contents('test.php', '50505050', FILE_APPEND | LOCK_EX);



// file system :
        //Syntax:
        //       file_get_contents(path, context, offset, max_length);

$text = file_get_contents('read.php' , false, NULL, 11, 4);
file_put_contents('Write.php', $text);

// file system :
//              copy($source, $dest);   // note that copy just for files and it not for folders.


    // copy text file and create a new file called new_test.php and inside it the same contents.

if (!copy('test.php', 'new_text.php')) {
  echo "Sorry the file not copied" . "<br />";
} else {
  echo "The file has been copied" . "<br />";
}

//
function copyMe($extention) {
   $original = __FILE__;
   //echo $original;
   return copy($original, $original . "." . $extention);
}
copyMe('bak');



// System File:
//            rename($oldname, $newname, context);   // It work with directories and files

rename('test.php', 'text.php');    // Rename the file name test to text


// System file:
//              pathinfo($path);    // give me all the informations about my file path
/*
  return :
          Array
        (
            [dirname] => /Users/omar/Desktop/PHP/elzero-php/File-System
            [basename] => index.php
            [extension] => php
            [filename] => index
        )
*/


$links = pathinfo(__FILE__);
echo $links['dirname'] . "<br />";
echo $links['basename'] . "<br />";
echo $links['extension'] . "<br />";
echo $links['filename'] . "<br />";
// or
echo "<pre>";
print_r($links);
echo "</pre>";
// or
echo pathinfo(__FILE__, PATHINFO_DIRNAME) . "<br />";


// File system:
//             unlink  & rmdir
//   Syntax:
//          unlink($filename);     // used to delete a file on the server.  & It work just on the writable files.  // or it will give you a permission denied error
$file1 = 'text.php';
if (file_exists($file) && is_writable($file)) {
  unlink($file);
} else {
  echo "Sorry the file is not writable";
  chmod($file, 0755);
}

// Syntax :
//          rmdir($dirname);     // remove the directory

rmdir('test');


// File system
// Syntax:
//          scandir($directory);   // make scan for the directory and give me back what is inside it

$link1 = __DIR__ . "/scan";
$files = scandir($link1, SCANDIR_SORT_NONE);
echo "<pre>";
print_r($files);
echo "</pre>";

  //   rmdir($link1);  // This will give me err cause the directory is not empty
foreach ($files as $file) {
  if (is_file( $link1 . "/" . $file )) {
    unlink($link1 . "/" . $file);
  }
}


// File system:
//              fopen
//      Syntax:
//              fopen($filename, $mode, include_path, context);
//   modes:
//        [1] r: Read only starting from the beginning of the file [file must be exist].
//        [2] r+: Read and Write from starting from the beginning of the file [file must be exist].
//        [3] w: Write only starting from the beginning of the file [create the file if it is not exist].
//        [4] w+: Write and Read starting from the beginning of the file [create the file if it is not exist  ].
//        [5] a: Write only [Open and write to the end of the file] + [create the file if it is not exist].
//        [6] a: Write and read [Open and write to the end of the file] + [create the file if it is not exist].
//        [7] x: Write only [create a new file] + [if the file is exist it will give me an error].
//        [8] x: Write only [create a new file] + [if the file is exist it will give me an error].


// Syntax:
//        fread($handle, $length);
  $fileHandle = fopen('omar.txt', 'r+');
  $read = fread($fileHandle , filesize('omar.txt'));  // it will get all the file contents
  echo "Orginal content of the file before repalce the cpontents WAS: ( " . $read . " )" ."<br />";

// Syntax:
//        fwrite($handle, $string, length);

  $write = fwrite($fileHandle, "Th1s is the nsw text ... ");

// Syntax:
//        fseek($handle, $offset, whence);
//      offset : index of the the byte that I am seek for
  //    whence : [1] by default: SEEK_SET
//

  fseek($fileHandle, 2, SEEK_SET);
  fwrite($fileHandle, "i");
  fseek($fileHandle, 13, SEEK_SET);
  fwrite($fileHandle, "e");

// Syntax:
//        fclose($handle);

$fileHandle1 = fopen('training1.txt', 'r+');   // Handle the file and the mode is read&write from the beginning of the file
fwrite($fileHandle1, 'O');

fseek($fileHandle1, 5);  // offset is 5  :  mean put the pointer on possition 5
fwrite($fileHandle1, 'N');

fclose($fileHandle1);
