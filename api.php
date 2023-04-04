<?php
    header('Access-Control-Allow-Origin: *');
    $data = json_decode(file_get_contents("config.json"), true);
    $json = (object) [];
    $json->header = ["<li><a href='#'>".$_SERVER['HTTP_HOST']."</a></li>"];
    $json->section = (object) ["pagrahp" => null, "image" => null];
    $json->nav = [];
    $json->footer = [];

    //Header
    foreach ($data["header"] as $key => $value) {
        array_push($json->header, <<<HTML
        <li><a href='{$value["href"]}' target="_blank">{$value["name"]}</a></li>
        HTML);
    }
    $json->header = join(" ", $json->header);
    
    //Section
    $json->section->pagrahp = <<<HTML
        <h2>{$data["section"]["pagrahp"]["title"]}</h2>
        <p>{$data["section"]["pagrahp"]["pagrahp"]}</p>
        <a href='{$data["section"]["pagrahp"]["btn"]["href"]}' target="_blank">{$data["section"]["pagrahp"]["btn"]["name"]}</a>
    HTML;
    $json->section->image = <<<HTML
        <img src='{$data["section"]["image"]["img"]}' class="starbucks">
    HTML;

    //Nav
    foreach ($data["nav"] as $key => $value){
        array_push($json->nav, <<<HTML
            <li><a href='{$value["href"]}' target="_blank"><img src='{$value["src"]}'></a></li>
        HTML);
    }
    $json->nav = join(" ", $json->nav);    

    //Footer
    foreach ($data["footer"] as $key => $value){
        array_push($json->footer, <<<HTML
        <li><img src='{$value["src"]}' onclick='imgSlider("{$value["src"]}");changeCircleColor("{$value["color"]}")'></li>
        HTML);
    }
    $json->footer= join(" ",$json->footer);

    echo json_encode($json,JSON_PRETTY_PRINT);

?>