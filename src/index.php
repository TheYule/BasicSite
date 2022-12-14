<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="The Yule" />
        <meta name="description" content="A basic site, powered with Cloudflare Pages." />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#ffde59" />
        <link rel="stylesheet" href="https://static.yoo-plex.com/css/reset.css" />
        <link rel="stylesheet" href="https://static.yoo-plex.com/css/font.css" />
        <link rel="stylesheet" href="https://static.yoo-plex.com/css/basic.css" />
        <link rel="stylesheet" href="https://static.yoo-plex.com/css/theyule.css" />
        <title>The Yule</title>
    </head>
    <body>
        <main id="wrapper">
            <div class="center">
                <h1>The Yule</h1>

                <p>A basic site, powered with Cloudflare Pages.</p>

                <p>Year: <?php echo date("Y"); ?></p>

                <img src="https://static.yoo-plex.com/images/theyule/theyule.svg" alt="The Yule" width="500" height="500" />
            </div>
        </main>
    </body>
</html>