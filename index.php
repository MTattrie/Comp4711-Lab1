<?php

/* 
 * Comp4711 Lab1
 * @author Mark Tattrie
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mark Tattrie</title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        //adding first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //adding second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //adding myself
        $me = new Student();
        $me->surname = "Tattrie";
        $me->first_name = "Mark";
        $me->add_email('home','MTattrie93@gmail.com');
        $me->add_grade(82.53456);
        $students['a00911650'] = $me;
        
        ksort($students); // one of the many sort functions
        
        foreach($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>

