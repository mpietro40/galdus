<?php

// open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);
Print ("$indexCount files<br>\n");

// sort 'em
sort($dirArray);

// print 'em
print("<table>\n");
print("<tr><th>File name</th><th>File type</th><th>File size</th><th>File date</th></tr>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
           $type= filetype($dirArray[$index]);
		print("<tr><td><a href=\"$dirArray[$index]/GS/\">$dirArray[$index]</a></td>");
		print("<td>");
		if($type=="dir"){
      print("<span style='color:#AD6003;font-weight:bold;'>");
      print("Folder");
		  print("</span>");
    }else{
      print($type);
    }
    print("</td>");
		print("<td>");
		print(filesize($dirArray[$index]));
		print("</td>");
		print("<td>");
    print(date("F d Y H:i:s.", filemtime($dirArray[$index])));
		print("</td>");
		print("</tr>\n");
	}
}
print("</table>\n");

?>
