<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>golfweb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">

        <style type="text/css">

            body { padding-top: 40px; }

        </style>
    </head>

    <body>
        <div id ="root" class="container">
            <h1>Vue for loops</h1>
            <div>
            <aside class="menu">
                        <p class="menu-label">
                          Skills
                        </p>
                        <ul class="menu-list">
                            <li v-for="skill in skills"><a>@{{ skill }}</a></li>
                        </ul>
                    </aside>
            </div>
        </div>

        <script type="text/javascript" src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
        <script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

</html>
