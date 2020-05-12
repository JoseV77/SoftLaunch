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

            <div id="grid-items">

                <div id="block1">

                  <?php require_once("includes/slideshow.html.php"); ?>

                    <div id="text">
                        <h2>Heading 2</h2>
                        <p>Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text
                            Paragraph
                            text
                            Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text
                            Paragraph
                            text
                            Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text
                            Paragraph
                            text
                            Paragraph text Paragraph text</p>
                    </div>

                </div>

                <div id="block2">

                    <div id="socialmedia-feed">
                        <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"
                            data-tabs="timeline, events" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a>
                            </blockquote>
                        </div>
                    </div>


                    <div id="weather-feed">
                        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us"
                            data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original">PORTLAND WEATHER</a>
                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php require_once("includes/footer.html.php"); ?>

</body>

</html>