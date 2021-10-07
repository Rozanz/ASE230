<?php

//function for reading content of a json file
function read_content($filename){
    $content = file_get_contents($filename);
    $ret = json_decode($content,true);
    return $ret;
}


//function which reads content of a json file into PHP array and returns one element with index
function read_one($filename, $index){
    $content= read_content($filename);
    return $content[$index];

}


//function for saving php array to a json file
function write_json($filename, $json){
    //$json=array_values($json);
    file_put_contents($filename, json_encode($json, JSON_PRETTY_PRINT));

}

//function for removing the element at the indicated index
function delete_json($filename, $index){
    $json = read_content($filename);
    unset($json[$index]);
    write_json($filename, $json);
}


//function for modifying the array at the indicated index
//query string is on the details page
function modify_json($filename, $index, $newData){
    $json = read_content($filename);
    $json[$index]['name'] = str_replace('+',' ', $newData);
    write_json($filename, $json);
}

//function for restoring the page to actual form
function restore(){
	$data = read_content('class.backup.json');
	write_json('class.json', $data);
}
?>

