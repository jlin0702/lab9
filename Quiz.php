<?php
    $qa = array(
        array("Question 1: What is the smallest planet?", "Mercury"),
        array("Question 2: What is the fourth planet from the sun?", "Mars"),
        array("Question 3: What is the largest planet?", "Jupiter"),
        array("Question 4: What is the farthest planet from the sun?", "Neptune"),
        array("Question 5: What is the closest planet to the sun?", "Mercury")
    );

    $correct = 0;
    $total = count($qa);
    for ($i = 0; $i < $total; $i++) {
        $user_ans = $_POST["q".($i+1)];
        $cor_ans = $qa[$i][1];
        echo $qa[$i][0] . "<br>";
        echo "&emsp;You answered: " . $user_ans . "<br>";
        echo "&emsp;Correct Answer: " . $cor_ans . "<br><br>";
        if ($user_ans == $cor_ans) {
            $correct++;
        }
    }
    echo "Total Correct: " . $correct . '/' . $total . "<br>";
    echo "Percentage: " . (($correct / $total) * 100) . "%";
?>