<html>
<head>
<meta charset="utf-8">
<title>fatacy</title>
</head>
<body>

<?php
function get_all_node($code){ 
    preg_match_all("/Fetching node data from url '(.*)'/i",$code,$arr); 
    return $arr[1]; 
}
if (!empty($_GET['key']) && '1'===$_GET['key']){
    echo nl2br(file_get_contents("nodes.txt"));
}else{
    $text = file_get_contents("result.txt");
    $ret = get_all_node($text);
    foreach ($ret as $value){
        echo $value."<br/>";
    } 
}

?>
</body>
</html>
