<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Manipulating Numbers</center></h1>
        <div class="box">
            <h2>First Semester (Midterm)</h2>
            <form method="post">
                <p>Quiz A: <input type="number" name="quizA" required></p>
                <p>Quiz B: <input type="number" name="quizB" required></p>
                <p>Quiz C: <input type="number" name="quizC" required></p>
                <p>Project Alpha: <input type="number" name="projectAlpha" required></p>
                <p>Midterm Exam: <input type="number" name="midtermExam" required></p>

                <h2>Second Semester (Tentative Final)</h2>
                <p>Quiz X: <input type="number" name="quizX" required></p>
                <p>Quiz Y: <input type="number" name="quizY" required></p>
                <p>Quiz Z: <input type="number" name="quizZ" required></p>
                <p>Project Beta: <input type="number" name="projectBeta" required></p>
                <p>Project Gamma: <input type="number" name="projectGamma" required></p>
                <p>Final Exam: <input type="number" name="finalExam" required></p>

                <p><input type="submit" name="submit" value="Calculate Grades"></p>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $quizA = $_POST['quizA'];
                $quizB = $_POST['quizB'];
                $quizC = $_POST['quizC'];
                $projectAlpha = $_POST['projectAlpha'];
                $midtermExam = $_POST['midtermExam'];

                $averageQuizzesFirstSemester = ($quizA + $quizB + $quizC) / 3;
                $midtermGrade = ($averageQuizzesFirstSemester * 0.3) + ($projectAlpha * 0.2) + ($midtermExam * 0.5);

                $quizX = $_POST['quizX'];
                $quizY = $_POST['quizY'];
                $quizZ = $_POST['quizZ'];
                $projectBeta = $_POST['projectBeta'];
                $projectGamma = $_POST['projectGamma'];
                $finalExam = $_POST['finalExam'];

                $averageQuizzesSecondSemester = ($quizX + $quizY + $quizZ) / 3;
                $averageProjectsSecondSemester = ($projectBeta + $projectGamma) / 2;
                $tentativeFinalGrade = ($averageQuizzesSecondSemester * 0.3) + ($averageProjectsSecondSemester * 0.2) + ($finalExam * 0.5);

                $finalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

                echo "<h2>Results</h2>";
                echo "<p><strong>Midterm Grade:</strong> " . number_format($midtermGrade, 2) . "</p>";
                echo "<p><strong>Tentative Final Grade:</strong> " . number_format($tentativeFinalGrade, 2) . "</p>";
                echo "<p><strong>Final Grade:</strong> " . number_format($finalGrade, 2) . "</p>";
            }
            ?>

            <p><a href="index.html">Return to Main Page</a></p>
        </div>
        <center>Leo Dimol<br>October 28, 2024</center>
    </div>
    
</body>
</html>
