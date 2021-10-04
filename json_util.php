<?php
function read_content($filename){
    $content = file_get_contents($filename);
    $ret = json_decode($content,true);
    return $ret;
}

function read_one($filename, $index){
    $content= read_content($filename);
    return $content[$index];

}

function write_json($filename, $json){
    file_put_contents($filename, json_encode($json, JSON_PRETTY_PRINT));

}

function delete_json($filename, $index){
    $json = read_json($filename);
    unset($json[$index]);
    write_json($filename, $json);
}

function modify_json($filename, $index, $newData){
    $json = read_content($filename);
    $json[$index]['name'] = str_replace('+',' ', $newData);
    write_json($filename, $json);
}


function restore($filename){
	$json = read_json($filename);
	write_json($filename, $json);
}
?>

