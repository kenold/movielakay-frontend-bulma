
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MovieLakay - Haitian Movie Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" id="bulma" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

    <nav class="nav has-shadow">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item" href="home.php">
                    movieLAKAY
                </a>
            </div>
            <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
            <div class="nav-right nav-menu">
                <a class="nav-item is-tab is-active">
                    Home
                </a>
                <a class="nav-item is-tab">
                    Movies
                </a>
                <a class="nav-item is-tab">
                    People
                </a>
                <a class="nav-item is-tab">
                    Trailers
                </a>
                <a class="nav-item is-tab">
                    Photos
                </a>
                <a class="nav-item is-tab">
                    News
                </a>
                <span class="nav-item">
        <a class="button">
          Log in
        </a>
        <a class="button is-info">
          Sign up
        </a>
      </span>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="columns">
            <div class="column is-three-quarters">

                <section class="section new">
                    <h1 class="title">New and Upcoming</h1>
                    <div class="columns" id='new-movie'>
                        <!-- place holder for dynamic popular from custom.js -->
                    </div> <!-- /.columns new -->
                </section> <!-- /.new upcoming -->

                <!-- **** MOST POPULAR **** -->
                <section class="section popular">
                    <h1 class="title">Most Popular</h1>
                    <div class="columns" id='popular-movie'>
                        <!-- place holder for dynamic data from custom.js -->
                    </div>
                </section>
            </div> <!-- column is-three-quarters -->

            <!-- **** SIDEBAR **** -->
            <section class="section">
                <div class="column">
                    <p class="notification is-success">Sidebar banner ads!</p>
                </div>
            </section>

        </div> <!-- columns / main -->
    </div> <!-- /.container -->

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>&copy;MovieLakay.com</p>
            </div>
        </div>
    </footer>

    <script async type="text/javascript" src="js/bulma.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- generate dummy data with FakerJS -->
    <script type="text/javascript" src="js/faker.min.js"></script>

    <!-- script to load dummy data -->
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
