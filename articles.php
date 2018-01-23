<?php
/**
 * Created by PhpStorm.
 * User: gburs
 * Date: 18/01/2018
 * Time: 11:39
 */



$file = parse_ini_file("articles.dat", true);

foreach ($file as $sectionName => $item) {
    $day = $item["day"];
    $month = $item["month"];
    $title = $item["title"];
    $picture = $item["picture"];
    $slug = $item["slug"];
    $body = $item["body"];

    print ("<b>Artykuł#</b> " .$sectionName . "<br>" . $day . "<br>" . $month . "<br>" . $title . "<br>" . $picture . "<br>" . $slug . "<br>" . $body . "<br>");
}
