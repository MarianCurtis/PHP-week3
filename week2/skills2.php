<?php
$mySkills = array ('Project Management', 'Auditing', 'Process Improvement', 'Web Development');
echo '<h1>My skills include: </h1><ul>';  $mySkills[0] . ',' . $mySkills[1] . ',' . $mySkills[2] . 'and' . $mySkills[3] . '.';
foreach ($mySkills as $s) {
    echo '<li>' . $s . '</li>';
}
echo '</ul>';
?>