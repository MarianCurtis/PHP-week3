<!-- week 2 task 1 -->

<?php
$mySkills = array ('Project Management', 'Auditing', 'Process Improvement', 'Web Development');
echo 'My skills include:'. $mySkills[0] . ',' . $mySkills[1] . ',' . $mySkills[2] . 'and' . $mySkills[3] . '.';
?>



<!-- week 2 task 2 -->

<?php
$mySkills = array ('Project Management', 'Auditing', 'Process Improvement', 'Web Development');
echo '<h1>My Skills Include: </h1><ul>';  $mySkills[0] . ',' . $mySkills[1] . ',' . $mySkills[2] . 'and' . $mySkills[3] . '.';
foreach ($mySkills as $s) {
    echo '<li>' . $s . '</li>';
}
echo '</ul>';
?>

<!-- week 2 task 3 -->

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
