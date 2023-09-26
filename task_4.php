<?php
$studentGrades = array(
    'Student1' => array('Bangla' => 85, 'English' => 92, 'Math' => 78),
    'Student2' => array('Bangla' => 88, 'English' => 95, 'Math' => 90),
    'Student3' => array('Bangla' => 75, 'English' => 86, 'Math' => 92)
);
function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "$student's average grade is: $average\n";
    }
}
calculateAverageGrades($studentGrades);
?>