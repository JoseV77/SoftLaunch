<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <title>Ace in the Hole Multisports Events</title>
</head>

<body>

    <?php require_once("../includes/header.html.php"); ?>

    <main>

        <div id="wrapper">

            <div id="formBox">

                <h2>Ask Your Questions Here!</h2>

                <form method="post" action=" ">
                    <input type="text" name="honeypot" id="honeypot" value="" />

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required><br><br>

                    <label for="question">Question or Comment:</label><br>
                    <textarea rows="10" cols="40" name="question" id="question" required></textarea><br><br>

                    <label for="athlete">Are you a:</label><br>
                    <input type="radio" id="athlete" name="person" value="athlete">
                    <label for="athlete">Athlete</label><br>
                    <input type="radio" id="volunteer" name="person" value="volunteer">
                    <label for="volunteer">Volunteer</label><br>
                    <input type="radio" id="interestedParty" name="person" value="party">
                    <label for="interestedParty">Interested Party</label><br><br>
                    <input id="submit-contact" type="submit" value="Submit">
                </form>

            </div>
            <br><br>

            <h2 id="faq-heading">FAQ's</h2>
            <p id="faq-small"><strong class="questions">What are the Rules?</strong> We currently adhere to the USAT Rules for Triathlon &
                Duathlon.
                Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed
                during
                the bike for obvious safety reasons. <br><br><strong class="questions">Can I use a personal music device while
                    cycling?</strong> Absolutely no music devices are allowed during the bike segment for obvious
                safety
                risks and will result in immediate disqualification. <br><br><strong class="questions">Can I use a personal music
                    device
                    while running?</strong class="questions"> During any running segments, we prefer for athletes to NOT use music
                devices
                to maximize safety, assure a fair competitive environment and assure athletes can hear all course
                marshal instructions. With that said, we also understand that many athletes rely on music to help
                endure
                the challenge of running. To accommodate the needs of our athletes while still assuring maximum
                safety
                and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            <ul>
                <li>If you chose to use a personal music device, you must always keep one ear open for instructions
                    so
                    only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be
                    eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or
                    awards/points/rankings.</li>
                <li>If you are using a personal music devise with two earbuds, you will be immediately disqualified.
                    Trust us, we don't want to have to enforce a disqualification but in order to assure the safety
                    of
                    all athletes, this is a very important rule.</li>
                <li>We also request that if you chose to use a personal music device that you keep the volume to a
                    minimum to assure all instructions can be heard.</li>
            </ul>
            <p><strong class="questions">Do I need to wear a wetsuit?</strong> No, you do not need to wear a wetsuit. Many will not
                wear a
                wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.
                <br><br><strong class="questions">Do I have to use a road or racing bike?</strong> No. We welcome any type of bike as
                long
                as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>

        </div>

    </main>

    <?php require_once("../includes/footer.html.php"); ?>

</body>

</html>