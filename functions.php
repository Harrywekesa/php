<?php
#Functions
function hello(){
    echo "This is a function to greet you, Hello";
}

hello();

#Function with an argument
function argumente($name){
    echo "<br>My name is $name";
}

argumente("Harrison");
argumente("Wekesa");
argumente("Wanjala");


#Function with arguments
function arguments($fname, $sname){
    echo "<br>My two names are $fname $sname";
}

arguments("Harrison", "Wekesa");
arguments("Wanjala", "Wekesa");

#Function with more than two arguments
function argumentsnyingi($fname, $mname, $lname){
    echo "<br>My three names are $fname $mname $lname";
}

argumentsnyingi("Harrison", "Wekesa", "Wanjala");
argumentsnyingi("Daima", "Mimi", "Mkenya" );
