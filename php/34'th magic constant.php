<?php
echo "<br>The Line number is : ". __line__;
echo "<br>The file name is : ". __file__;
echo "<br>The directory is : ". __dir__;
function demo(){
echo "<br>The function name is : ". __function__;
}
demo();
?>