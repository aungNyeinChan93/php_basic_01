<?php 

function makingheader($mess){
    echo "<h1> {$mess} </h1>";
}
function breakline(){
    echo "<br>";
}

print"<pre>";
makingheader("Array");
$arrayOne = array("1","2");
$arrayTwo = ["3","4","5"];
$associatedArray = ["name"=>"chan","age"=>30,"email"=>"anc@gmail.com"];
print_r($arrayOne);
breakLine() ;
print_r($arrayTwo);
breakLine() ;
print_r($associatedArray);
breakLine() ;
echo $arrayTwo[0] ."<br>";
echo $arrayTwo[1]."<br>";
echo $associatedArray["name"];
$associatedArray["gender"] = "male";
$associatedArray[""] = "hello";
$associatedArray[4] = "edit";   
// echo $associatedArray[0] ."<br>";            //  associated array can't be use with index >> error occour 
unset($associatedArray["age"]);                 //  remove data form array
breakLine() ;
print_r($associatedArray);
breakLine() ;
echo count($associatedArray);                   //  array length >> count();                   
breakLine() ;
foreach($associatedArray as $key => $value){    
    echo $key . ":". $value." <br>"; 
}
breakLine() ;


$myObj = new stdClass();                        //  Object || stdclass();
$myObj->name = "test";
breakLine() ;
echo $myObj->name;

makingheader("Array method");

$customers = ["anc","bb","cc","dd"];
array_unshift($customers, "aa","aaa","aaaa");
print_r($customers);

array_shift($customers);
print_r($customers);

array_push($customers,"ee","ff","gg");
print_r($customers  );

array_pop( $customers );
var_dump($customers);

// add key:value data into array use by +operator ;
makingheader(" add key:value data into array use by +operator");
$colors = [
    "red" => "#ff0000",
    "green"=> "#00ff00",
    "blue"=> "#0000ff",
    "white"=> "#000000",
];
print_r( $colors );
$colors= ["black"=> "#ffffff"] + $colors;               //  add first
$colors=  $colors + ["yellow"=> "#ff0f0f"] ;            //  add last
print_r( $colors );

echo "-------------------------------------------------------<br>";
$language = array("HTML"=>5,"CSS"=>3,"JS"=>"es6","REACT"=>16,"NODE_JS"=>"enverioment","PHP"=>8);
print_r( $language );
makingheader("array_keys()");
$keys = array_keys($language);
print_r($keys);
makingheader("array_values()");
$values = array_values($language);
print_r( $values );

makingheader("array_key_exits method:bool");
$findKey = array_key_exists("HTML",$language);          //  : bool 1
$findKey2 = array_key_exists("test",$language);          //  : bool 
echo $findKey;
echo $findKey2;

makingheader("in_array method:bool");
$myNums = [10,20,30,40,50];
$resNum = in_array(10, $myNums);
print_r( $resNum );

$reverse = array_reverse($myNums);
var_dump($reverse);

makingheader("array-merge()");
$arrayMrege = array_merge([1,2,3],[4,5,6]);
print_r( $arrayMrege );