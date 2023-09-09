<?php

//Index array
echo "<h3> Index Array</h3>";
echo "<br>";

$user= array("rakib","rakib17@gamil.com","O+");
echo "<pre>";
print_r($user);
echo "</pre>";
echo "<br>";

//associative array
echo "<h3> Associative Array </h3>";

$data1= array(
    "name" => "abbas ali rakib",
    "age" => "22",
    "email" => "rakib17@gamil.com",

);

 echo "<pre>";
 print_r($data1);
 echo "</pre>";
 echo "<br>";

 //Multi Dimential Array 
 echo "<h3> Multi Dimential Array </h3>";
 
 $data2= array(
    array(
        "name" => "abbas ali rakib",
        "age" => "22",
        "email" => "rakib17@gamil.com",
    ),
    array(
        "name" => "Mr.X",
        "age" => "24",
        "email" => "mrx@gmail.com",

        ),

    );

    echo "<pre>";
    print_r($data2);
    echo "</pre>";
    echo "<br>";

 // Using strtoupper method
 echo "<h3> Using Str to Upper </h3>";

 $userp= array(
    "name" => "abbas ali rakib",
    "age" => "22",
    "email" => "rakib17@gamil.com",
);

echo strtoupper($userp["name"]);
echo "<br>";


//Using strtolower method
 echo "<h3> Using Str to Lower </h3>";

 $userq= array(
     "name" => "mr.xyz",
     "age" => "25",
     "email" => "MRXYZ@GMAIL.COM",
);

echo strtolower($userq["email"]);
echo "<br>";


//ucwords method
echo "<h3> Using Uper Case Words </h3>";
 
 $data1= array(
    "name" => "abbas ali rakib",
    "id" => "f563a25",
    "email" => "rakib17@gamil.com",
);

echo ucwords($data1["id"]);
echo "<br>";



//ucfirst method
echo "<h3> Using uc first </h3>";
 
 $data2= array(
     "name" => "mr.xyz",
     "age" => "25",
     "email" => "mrxyz@gmail.com",
);

echo ucfirst($data2["name"]);
echo "<br>";

//strreverse method
echo "<h3> Using Str reverse </h3>";
 $data3= array(
    "name" => "abbas ali",
    "roll" => "4589",
    "id" => "f586se45",
);

echo strrev($data3["id"]);
echo "<br>";
 


//strpos method
echo "<h3>Using Str pos </h3>";

  $mer= " welcome to dashbord,,  what's up..gerw3 webdfer lebfgdf";
  $url= str_replace(" ","-","$mer");
  
  echo "$url";


//substr method
echo "<h3> Using Sub string </h3>";
 
 $doc= "i am rakbi, i am from Bangladesh";
 $doct= substr($doc,0,10);
 echo "$doc <br>";


//password hash
echo "<h3> Password Bcrypt </h3>";

$userPass= "abbas23gi";
echo password_hash($userPass, PASSWORD_BCRYPT);
echo "</br>";