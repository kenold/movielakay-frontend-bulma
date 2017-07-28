
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

    <!-- layout -->
    <div class="container">
        <section class="section recent">
            <h1 class="title">New and Upcoming</h1>
            <div class="columns">
                <div class="column is-three-quarters">
                    <!-- middle poster list-->
                    <div class="columns">
                        <div class="column">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-parent">
                                        <a href="#"><img src="http://via.placeholder.com/210x311" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <h3><a href="#">Movie Title</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-parent">
                                        <a href="#"><img src="http://via.placeholder.com/210x311" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <h3><a href="#">Movie Title</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-parent">
                                        <a href="#"><img src="http://via.placeholder.com/210x311" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <h3><a href="#">Movie Title</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-parent">
                                        <a href="#"><img src="http://via.placeholder.com/210x311" alt="Image"></a>
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <h3><a href="#">Movie Title</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end middle poster list-->
                </div>
                <div class="column">
                    <p class="notification is-success">sidebar</p>
                </div>
            </div> <!-- columns -->
        </section>
    </div> <!-- container -->

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    &copy;<a href="http://movielakay.com">MovieLakay.com</a>
                </p>
            </div>
        </div>
    </footer>

    <script async type="text/javascript" src="js/bulma.js"></script>
</body>
</html>
