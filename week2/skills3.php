<?php
$mySkills = array ('Project Management', 'Auditing', 'Process Improvement', 'Web Development', 'kayaking');
function newList($array) {
    echo '<ul>';
    foreach ($array as $s) {
        echo '<li>' . $s . '</li>';
    }
    echo '</ul>';
}
echo '<h1>My Skills Include: </h1>';
newList($mySkills);
?>