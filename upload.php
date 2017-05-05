<?php

if(isset($_POST['submit']))
{
  $uploaddir = './uploads/';
  $uploadfile = $uploaddir . basename($_FILES['upload_img']['name']);

  echo "<p>";

  if (move_uploaded_file($_FILES['upload_img']['tmp_name'], $uploadfile)) {
  } else {
  }


  $source_file =$uploadfile;

  // histogram options

  $maxheight = 300;
  $barwidth = 2;

  $im = ImageCreateFromJpeg($source_file);

  $imgw = imagesx($im);
  $imgh = imagesy($im);

  // n = total number or pixels

  $n = $imgw*$imgh;

  $histo = array();
  for($i=0;$i<$maxheight;$i++){
    $histo[$i]=0;
  }
  for ($i=0; $i<$imgw; $i++)
  {
          for ($j=0; $j<$imgh; $j++)
          {

                  // get the rgb value for current pixel

                  $rgb = ImageColorAt($im, $i, $j);

                  // extract each value for r, g, b

                  $r = ($rgb >> 16) & 0xFF;
                  $g = ($rgb >> 8) & 0xFF;
                  $b = $rgb & 0xFF;

                  // get the Value from the RGB value

                  $V = round(($r + $g + $b) / 3);

                  // add the point to the histogram

                  $histo[$V] += $V / $n;

          }
  }

  // find the maximum in the histogram in order to display a normated graph

  $max = 0;
  $val=0;
  for ($i=0; $i<255; $i++)
  {
          if ($histo[$i] > $max)
          {
                  $max = $histo[$i];
          }
  }

  echo "<div style='width: ".(256*$barwidth)."px; margin:auto;border: 1px solid'>";
  for ($i=0; $i<255; $i++)
  {
          $val += $histo[$i];

          $h = ( $histo[$i]/$max )*$maxheight;

          echo "<img src=\"img.gif\" width=\"".$barwidth."\" height=\"".$h."\" border=\"0\">";
  }
  echo "</div>";


}
?>
