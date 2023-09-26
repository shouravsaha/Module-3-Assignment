<?php
$studentGrades = array(
    'Student1' => array('Bangla' => 75, 'English' => 92, 'Math' => 92),
    'Student2' => array('Bangla' => 86, 'English' => 95, 'Math' => 91),
    'Student3' => array('Bangla' => 89, 'English' => 86, 'Math' => 78)
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