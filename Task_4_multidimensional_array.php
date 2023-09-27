<?php
function calculateGrade($score) {
    if ($score >= 90) {
        return "A+";
    } elseif ($score >= 80) {
        return "A";
    } elseif ($score >= 70) {
        return "B";
    } else {
        return "F";
    }
}

function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalScore = 0;
        $totalSubjects = 0;


        foreach ($grades as $subject => $score) {
            $totalScore += $score;
            $totalSubjects++;
        }


        $averageScore = $totalScore / $totalSubjects;


        $grade = calculateGrade($averageScore);


        echo "$student's Grade: $grade\n";
    }
}


$studentGrades = array(
    "student_1" => array("Math" => 85, "English" => 92, "Science" => 78),
    "student_2" => array("Math" => 88, "English" => 95, "Science" => 90),
    "student_3" => array("Math" => 75, "English" => 80, "Science" => 88)
);


calculateAverageGrades($studentGrades);
?>