<?php
function read_content($filename){
    $content = file_get_contents($filename);
    $ret = json_decode($content,true);
    return $ret;
}

function readone($filename, $index){
    $content= read_content($filename);
    return $content[$index];

}

function writejson($filename, $json){
    file_put_contents($filename, json_encode($json));

}

function delete_json($filename, $index){
    $json = read_json($filename);
    unset($json[$index]);
    write_json($filename, $json);
}

?>

