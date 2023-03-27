<?php 

// Define an array of quiz questions, answer question, and correct answers
$quiz = [
    [
        "question" => "1.) which of the following is not a programming language?",
        "options" => [
            "A" => "Java",
            "B" => "Physics",
            "C" => "C++",
            "D" => "Python"
        ],
        "answer" => "B"
    ],
    [
        "question" => "2.) which of the following is not an UML diagram?",
        "options" => [
            "A" => "Use case diagram",
            "B" => "Class diagram",
            "C" => "Sequence diagram",
            "D" => "Diagonal diagram"
        ],
        "answer" => "D"
    ],
    [
        "question" => "3.) What is an object?",
        "options" => [
            "A" => "It is a thing",
            "B" => "it is use in Object oriented language",
            "C" => "it is an instance of a class",
            "D" => "class enable the creation of object"
        ],
        "answer" => "C"
    ]
    ]; 

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # Initialize the score
        $score = 0;

        // Loop through each question and check if the answer is correct
        foreach ($quiz as $key => $value){
            
            // Get the user's answer from the form
            $user_answer = $_POST["question$key"];
            
            // Check if the answer is correct
            if ($user_answer == $value["answer"]) {
                $score++;
            }
        }

        // Display the score
        echo "Your score is: $score out of "  . count($quiz);
    }
?>

<!-- Display the quiz form -->
<div class="container">
    <form method="post">
        <?php foreach ($quiz as $key => $value) { ?>
        <p class="text-success"><?php echo $value["question"]; ?></p>
        <?php foreach ($value["options"] as $option_key => $option_value) { ?>
        <input type="radio" name="question<?php echo $key; ?>" value="<?php echo $option_key; ?>" required>
        <?php echo $option_value; ?><br>
        <?php } echo "<br>"; ?>
        <?php } ?>
        <br><br>
        <input type="submit" class="btn btn-lg btn-danger rounded-pill" value="Submit">

    </form>
</div>