<?php
//include_once 'includes/Person.php';
//include_once 'includes/Student.php';


spl_autoload_register(function($class){ //spl_autoload_register() method
  include 'includes/'.$class.'.php';
});

new Student();
new Person();

?>