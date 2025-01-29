<?php
//set_exception_handler()

function set_exception_handler(throwable $exception){
    echo "Uncaught exception: " , $exception->getMessage(), "\n";
}
set_exception_handler('exception_handler');

throw new Exception('Uncaught Exception');
echo "Not Executed\n";

//التعامل مع الاستثناءات باستخدام finallyكتلة
function inverse($x) {
    if (!$x) {
    throw new Exception('Division by zero.');
    }
    return 1/$x;
    }
    
    try {
    echo inverse(5) . "\n";
    } catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    } finally {
    echo "First finally.\n";
    }
    
    try {
    echo inverse(0) . "\n";
    } catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    } finally {
    echo "Second finally.\n";
    }
    
    // Continue execution
    echo "Hello World\n";

  //  التفاعل بين finallyالكتلة وreturn

  
    
    function test() {
    try {
    throw new Exception('foo');
    } catch (Exception $e) {
    return 'catch';
    } finally {
    return 'finally';
    }
    }
    
    echo test();

 //   حذف المتغير الذي تم التقاطه


    
    class SpecificException extends Exception {}
    
    function test() {
    throw new SpecificException('Oopsie');
    }
    
    try {
    test();
    } catch (SpecificException) {
    print "A SpecificException was thrown, but we don't care about the details.";
    }  
//    : الرمي كتعبير

   
    
    function test() {
    do_something_risky() or throw new Exception('It did not work');
    }
    
    try {
    test();
    } catch (Exception $e) {
    print $e->getMessage();
    }    

?>
