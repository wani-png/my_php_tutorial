<?php
/* #1 Video - Why learn PHP? Because it's still relevant till this day such as (wordpress, drupal, magento, facenook).
Its is also beginner-friendly for early web developers who wanna try it themselves.

            - What does it mean? A PHP Hypertext Preprocessor
            - PHP is a server-side scripting language
            - HTML,CSS,JavaScript --> PHP (host server)
            - if submit a form, it will save it inside the PHP database
*/

//#3 video (Your First PHP File)
   // echo 'hello, ninjas'; //needs to add semicolon in every end sentence
                          //will apear in the browser as a string
  //  echo 'hello, again'; //if remove the semicolon, the following text will not appear
?>

<!--<!DOCTYPE html>
<html>
    <head>
        <titl>my first php file</title>
    </head>
    <body>

        <h1><?php echo 'Hello, ninjas'; ?></h1>

    </body>
</html>
     - will request the server to run the php code and return the result to the browser
     - will act just like a html code
-->



<?php
#4 video (Variables & Constants)
    //DEFINE('NAME','Wanita'); //cannot overwrite the constant value

    //$name = 'wanita'; //variable name can be anything, but must start with a dollar sign ($)
    //$age = 20; //can store numbers

    //$name; //will return the value of the variable that was set
?>

<!--<!DOCTYPE html>
<html>
    <head>
        <titl>PHP Tutorials</title>
    </head>
    <body>
        <h2><php echo NAME; ?></h2>
        <h2><php echo $age; ?></h2>
    </body>
</html> 
-->


<?php
#5 video (Strings)
    //$stringOne = 'my email is @{}21343242'; //can contain special characters
    //$stringTwo = 'whatever@youfikirsendiri.com';
    
    //echo $stringOne .$stringTwo; //can combine two strings using a dot (.)

   //$name = 'Wanita';

    //echo 'Hai, my name is ' . $name; //they are now joined allhamdulillah

    //echo "Salam namaku ialah $name"; //using ("") will return the value of the string that was set

    //echo "Wanita itu mahukan kek  \"saye nak one slice kek black forest\""; //if use ("") inside the string, need to add a (\) before the double quotes
    //echo 'Wanita itu mahukan kek  "saye nak one slice kek black forest"'; //if use ('') inside the string, no need to add a (\) before the single quotes

    //echo $name[1]; //escape characters will find the first letter of the string

    //echo strlen($name); //will count the length of the string
    //echo strtoupper($name); //will make the string to uppercase
    //echo strtolower($name); //will make the string to lowercase
    //echo str_replace('Wanita','Wani hebat',$name); //will replace the string with another string


#6 video (Numbers)

    //$radius = 25; //integer
    //$pi = 3.14; //float or sometimes a double

    //basic - *(multiply), /(divide), +, -, **(find power of)

    //echo $pi * $radius ** 2; //will show 1962.5

    //order of operation - B I D M A S
    //echo 2 * (4 + 9) / 3; //will show 8.666666666667

    //incrementing and decrementing operators
    //echo $radius++; //will show 25, but the value of radius will be 26
    //echo $radius; //will show 26, but the value of radius will be 25

    //shorthand operators
    //$age = 20;
    //$age += 10;//adds up the previous age same goes with other operators add any symbol it will show different results
    //echo $age;

    //number functions
    //echo floor($pi); //will flow down the nearest number, will show number 3
    //echo ceil($pi); //will flow up the nearest number, will show number 4
    //echo pi(); //show the value of pi, will show number 3.1415926535898


#7 video (Arrays)
    //indexed arrays
    //$peopleOne = ['wani', 'dijah', 'nia']; //can store multiple values
    //echo $peopleOne[1]; // will call out the name from the chosen number, dijah

    //$peopleTwo = array('farra', 'aisyah'); //another way to create an array
    //echo $peopleTwo[1]; // will call out the name from the chosen number, aisyah

    //$ages = [20, 21, 22, 23, 24];
    //echo $age[2]; //will show the value of the chosen number, 22
    //print_r($age); //will show all the values inside the array

    //$ages[1] = 25; //can add a new value to the array
    //print_r($ages); //will replace the value at index 1 inside the array with 25

    //$ages[] = 60; //can add a new value to the array at the end
    //print_r($ages);

    //array_push($ages, 70); //add new value to the end of the array
    //print_r($ages);

    //echo count($ages); //will count the number of values inside the array, will show 7

    //$peopleThree = array_merge($peopleOne, $peopleTwo); //will combine two arrays into one
    //print_r($peopleThree); //will show all the values inside the array, will show 5 names

    //associative arrays (key & value pairs)
    //$wanitaOne = ['wani' => 'orange', 'dijah' => 'pinku', 'nia' => 'maroon']; //key is the name, value is the color
    //echo $wanitaOne['dijah']; //will show the value of the key, pinku
    //print_r($wanitaOne); //will show all the values inside the array

    //$wanitaTwo = array('farra' => 'green', 'aisyah' => 'red', 'batman' => 'black'); //rumah tangga kedua
    //print_r($wanitaTwo);

   //$wanitaTwo['batman'] = 'blue';
    //print_r($wanitaTwo); //will replace the previous value colour to blue

    //echo count($wanitaOne); //will count the number of values inside the array, will show 3

    //$wanitaThree = array_merge($wanitaOne, $wanitaTwo); //will combine two arrays into one (gabungan dua rumah tangga allhamdulillah)
    //print_r($wanitaThree); //will show all the values inside the array, shows 6 names


#8 video (Multidimensional Arrays)
    /*$blogs = [
        ['title' => 'wanita wani', 'color' => 'orange', 'content' => 'lorem', 'likes' => 30],
        ['title' => 'wanita dijah', 'color' => 'pinku', 'content' => 'lorem', 'likes' => 25],
        ['title' => 'wanita nia', 'color' => 'maroon', 'content' => 'lorem', 'likes' => 50]
    ]; //this is index array, but inside the array, there are associative arrays

    //print_r($blogs[1][1]); //shows one of the values inside the array, if add another number, it shows the value of the next index, pinku
    //echo $blogs[2]['color']; 
   //echo count($blogs);//shows number of value in the array, 3
   
   $blogs[] = ['title' => 'wanita farra', 'color' => 'green', 'content' => 'lorem', 'likes' => 100]; //add new value to the array
   
   //print_r($blogs);//shows all
   $popped = array_pop($blogs); //removes the last value from the array
   print_r($popped); //shows the last value removed, farra
    */


#9 video (loops)
   /* -common in every progaramming language
      -used to repeat a block of code
      -while loop, for loop, foreach loop
   */

      $wanita = ['wani', 'dijah', 'nia'];

     /* for($i = 0; $i < count($wanita); $i++){ //for loop, will repeat the code until the condition is met
         echo $wanita[$i] . '<br />'; //will show all the values inside the array, each value in a new line
      }

      foreach($wanita as $wanita){//same outcome just different way to write the code
         echo $wanita . '<br />';
      }  */

      $products = [
         ['name' => 'laptop', 'price' => 3000],
         ['name' => 'desktop', 'price' => 2000],
         ['name' => 'tablet', 'price' => 1000]
      ];  //multidimensional array

      /*foreach ($products as $product) {
         echo $product['name'] . ' - ' . $product['price'];
         echo '<br />'; //shows the product name and the price
      } */

     /* $i = 0;  

      while($i < count($products)) {
         echo $products[$i]['name'];
         echo '<br />'; //shows the product name and the price
         $i++; //increase the value of i by one
      } */
?>

<!--<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            <?php foreach ($products as $product) { ?> //open up the loop using different php text
                <h3><?php echo $product['name']; ?></h3> //output the product name
                <p>$ <?php echo $product['price']; ?></p> //output the product price
            <?php } ?> //close up the loop using different php text
    </body>
</html> -->


<?php
 #video 10 (Boolean Logic & Comparisons)
    //echo true; "1" //outputs 1 cuz is true :D
    //echo false; //outputs nothing cuz is false :'(

        //comparison with numbers
    //echo 5 > 10; //outputs nothing as false :'(
    //echo 5 < 10; //outputs 1 as true :D
    //echo 5 == 10; //outputs nothing as false :'(
    //echo 10 == 10; //outputs 1 as true :D
    //echo 5 != 10; //outputs 1 as true :D
    //echo 5 <= 5; //outputs 1 as true :D
    //echo 5 >= 5; //outputs 1 as true :D

        //comparison with strings it compares the first letter of the string
    //echo 'wani' > 'dijah'; //outputs 1 as true :D cuz w is greater than d
    //echo 'wani' < 'dijah'; //outputs nothing as false :'(
    //echo 'wani' > 'Wani'; //outputs 1 as true :D cuz of capital letter W is greater than lowercase letter
    //echo 'wani' == 'wani'; //outputs as true :D
    //echo 'wani' == 'Wani'; //outputs nothing as false :'(

        //loose vs strict equal comparison
    //echo 5 == '5'; //outputs 1 as true :D (loose comparison)
    //echo 5 === '5'; //outputs nothing as false :'( cuz not the same data type due to === (strict comparison)
    //echo 5 === 5; //outputs 1 as true :D cuz the same data type due to === (strict comparison)

    //echo true == "1"; //outputs 1 as true :D (loose comparison)
    //echo false == ""; //outputs 1

?>