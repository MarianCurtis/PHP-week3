<?php
$mySkills = ["Woodworking", "HTML", "CSS", "PHP", "JavaScript"];
$flavors = ['caramel', 'apple', 'chocolate', 'strawberry'];

function newList($array)
{
  echo '<ul>';
  foreach ($array as $value) {
    echo '<li>' . $value . '</li>';
  }
  echo '</ul>';
}

newList($mySkills);