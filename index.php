<?php

    class MyException extends Exception{
        function errorMessage(){
            $error = "MY error Message ".$this->getMessage().
            " <br> My error Line:=".$this->getLine().
            " <br> MY error gile name := ".$this->getFile();
            return $error;
        }
    }

   function division($n){
        try {
            

            if($n <= 0){
                throw new Exception('Enter valid number');
            }

            if($n == 3){
                throw new MyException('The number is 3');
            }


            $div = 10 / $n;
            echo $div;
        }catch(\MyException $me){
            echo $me->errorMessage();
        }catch (\Exception $e) {
            echo "Message:".$e->getMessage().", get line:".$e->getLine().", get file:".$e->getFile();
        }
        finally{
            echo "<br>Finally done";
        }
   }
    
   division(0);





  


?>