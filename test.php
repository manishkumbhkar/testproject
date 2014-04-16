<?php
echo "Manhish"; 
$pdfDirectory = "/opt/lampp/htdocs/test/";
$thumbDirectory = "/opt/lampp/htdocs/test/";
 
//get the name of the file

 
//remove all characters from the file name other than letters, numbers, hyphens and underscores

 $filename1 = $thumbDirectory."honey.jpg";
 $filename2 = $thumbDirectory."nandi12_950.jpg";
//name the thumbnail image the same as the pdf file

 
//$im1 = new Imagick();   
//$im1->readImage($filename1);
//$im1->readImage($filename2);
//$im1->resetIterator(); 
//# Combine multiple images into one, stacked vertically. 
//$ima = $im1->appendImages(true); 
//$ima->setImageFormat("png"); 
//header("Content-Type: image/png"); 
//echo $ima; 
     
    //the path to the PDF file
    $pdfWithPath = $pdfDirectory.$filename2;
     
    $mani= 'convert '.$filename1.'  '.$filename2.' -append  '.$pdfDirectory.'append_row.pdf'; 
    //add the desired extension to the thumbnail
    $thumb = $thumbDirectory."out.jpg";
     echo "<LI>".$ecute_cmd = "convert ".$pdfWithPath." ". $thumb;
     echo "<LI>".$ecute_cmd1 = "convert -append in-*.jpg ".$thumb;
     echo '<br/>';
    //execute imageMagick's 'convert', setting the color space to RGB and size to 200px wide
    exec($mani) ;
    // shell_exec('convert /path/to/input.png /path/to/output.pdf');
         
    //show the image
    echo "<p><a href=\"$pdfWithPath\"><img src=\"pdfimage/$thumb\" alt=\"\" /></a></p>";
    

 
?>
