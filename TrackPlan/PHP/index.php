<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=600, initial-scale=1.0">
    <link rel="stylesheet" href="SASS/styles.css">
    <title>TrackPlan Interview Question</title>
</head>

<body>
    <main>
        <div class="cont">
            <h1>TrackPlan Interview Question</h1>
            <form action="output.php" method="POST">
                <div>
                    <!-- Main Functionality -->
                    <!-- <label for="input">Input</label> -->
                    <input type="text" name="input" required placeholder="Input">
                </div>

                <div>
                    <!-- Numbers -->
                    <input type="checkbox" name="numbers">
                    <label for="numbers">Numbers</label>
                </div>

                <div>
                    <!-- Top Bar -->
                    <input type="checkbox" name="topBar">
                    <label for="topBar">Top Bar</label>
                </div>

                <div>
                    <!-- Remove Spaces -->
                    <input type="checkbox" name="remSpace">
                    <label for="remSpace">Remove Spaces</label>
                </div>
                <div>
                    <!-- Submit -->
                    <input type="submit" value="Enter" class="button">
                    <input type="reset" class="button">
                </div>
            </form>
        </div>
    </main>
</body>

</html>