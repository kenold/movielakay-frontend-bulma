<?php include_once 'views/partials/header.blade.php'; ?>
    <?php include_once 'views/partials/nav.blade.php'; ?>

<section class="hero is-dark">
    <div class="hero-body">
        <!-- **** FEATURED **** -->
        <section class="section featured">
            <div class="container">
                <div class="columns" id='featured'>
                    <!-- place holder for dynamic data from custom.js -->
                </div> <!-- /.columns #featured -->
            </div>
        </section> <!-- /.featured -->
    </div>
</section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-9">

                    <!-- **** NEW AND UPCOMING **** -->
                    <section class="section new">
                        <div class="container">
                            <h1 class="title">New and Upcoming</h1>
                            <div class="columns" id='new-movie'>
                                <!-- place holder for dynamic data from custom.js -->
                            </div> <!-- /.columns #new-movie -->
                        </div>
                    </section> <!-- /.new upcoming -->

                    <!-- **** MOST POPULAR **** -->
                    <section class="section popular">
                        <div class="container">
                            <h1 class="title">Most Popular</h1>
                            <div class="columns" id='popular-movie'>
                                <!-- place holder for dynamic data from custom.js -->
                            </div> <!-- /.columns #popular-movie -->
                        </div>
                    </section> <!-- /.popular -->
                </div> <!-- column is-three-quarters -->

                <!-- **** SIDEBAR **** -->
                <section class="section">
                    <div class="container">
                        <div class="column">
                            <p class="notification is-success">Sidebar banner advertisement here!</p>
                        </div>
                    <div class="container">
                </section>

            </div> <!-- columns / main -->
        </div> <!-- /.container section -->
    </section>

    <?php include_once 'views/partials/footer.blade.php'; ?>

