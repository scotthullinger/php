<?php

//=========================================
// LIST DIRECTORIES & FILES
//=========================================

$files = scandir('directory_name_here');

echo '<ul>';
foreach ($files as $file) {
    echo '<li>';
    echo $file;
    echo '</li>';
}
echo '</ul>';
