<!DOCTYPE html>
<html lang="en">

<?php require_once("includes/head.html.php"); ?>
<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
    </script>

    <?php require_once("includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <div id="formBox">

                <h2>Ask Your Questions Here!</h2>

                <form method="post" action=" ">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required><br><br>

                    <label for="question">Question:</label><br>
                    <textarea rows="10" cols="40" name="question" id="question" required></textarea><br><br>

                    <label>Are you a:</label><br>
                    <input type="radio" id="athlete" name="person" value="athlete">
                    <label for="athlete">Athlete</label><br>
                    <input type="radio" id="volunteer" name="person" value="volunteer">
                    <label for="volunteer">Volunteer</label><br>
                    <input type="radio" id="interestedParty" name="person" value="party">
                    <label for="interestedParty">Interested Party</label><br><br>
                    <input id="submit" type="submit" value="Submit">
                </form>

            </div>

        </div>

    </main>

    <?php require_once("includes/footer.html.php"); ?>

</body>

</html>