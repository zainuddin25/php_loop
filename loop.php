<?php

// ***** 1 ***** \\

function z()
{
    for($z=1;$z<=10;$z++)
    {
        if($z>3)
        {
            if($z>7)
            {
                echo $z;
            }else{
                continue;
            }
        }else{
            echo $z;  
        }
    }
}
// ***** 2 ***** \\
// function x()
// {
//     for($x=5;$x>=1;$x--)
//     {
//         if($x<=2)
//         {
//             echo "*";
//             continue;
//         }else{
//             echo $x;
//         }
//     }
// }

// ***** 3 ***** \\

    function x(){
    $x=5;
    while($x>=1)
    {
        if($x<=2){
            echo "*";
        }else{
            echo $x;
        }
        $x--;
    }
}

// ***** 4 ***** \\

function  v()
{
    for($v=1;$v<=4;$v++)
    {
        if($v %2==0){
            echo $v."b";
        }else{
            echo $v."a";
        }
    }
}

// ***** 5  ***** \\

function p(){
    for($p=1;$p<=6;$p++)
    {
        if($p>=4 && $p<=6)
        {
            echo "A";
        }else{
            echo $p;
        }
    }
}

p();

// ***** 6 ***** \\

function c(){
    for($c=4;$c>=0;$c--)
    {
        if($c<=2){
            if($c==1){
                echo $c;
            }else{
                echo "A";
            }
        }else{
            echo $c;
        }
    } 
}   
c();

// ***** 7 ***** \\

function u(){
    for($u=0;$u<=3;$u++)
    {
        if($u>=0 && $u<=1)
        {
            echo "A";
        }else{
            echo $u;
        }
    }
    echo $u;
}


?>