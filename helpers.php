<?php

/**
 * Get the bas path 
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 * 
 */

 function loadView($name) {
    $viewPath = basePath("views/{$name}.view.php");

    file_exists($viewPath) ? require $viewPath : '';
 }


 /**
 * Load a partial
 * 
 * @param string $name
 * @return void
 * 
 */

 function loadPartial($name) {
    $partialPath = basePath("views/partials/{$name}.php");


    file_exists($partialPath) ? require $partialPath : '';
    
 }

 /**
  * Inspect a value(s)
  * @param mixed $value
  * @return void 
  */

  function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
  }

   /**
  * Inspect a value and die
  * @param mixed $value
  * @return void 
  */

  function inspectAndDie($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
  }