<?php include_once 'views/partials/header.blade.php'; ?>
    <?php include_once 'views/partials/nav.blade.php'; ?>

    <div class="container">

        <div class="columns">
            <div class="column is-three-quarters">

                <!-- **** FEATURED **** -->
                <section class="section featured">
                    <div class="columns" id='featured'>
                        <!-- place holder for dynamic data from custom.js -->
                    </div> <!-- /.columns #featured -->
                </section> <!-- /.featured -->

                <!-- **** NEW AND UPCOMING **** -->
                <section class="section new">
                    <h1 class="title">New and Upcoming</h1>
                    <div class="columns" id='new-movie'>
                        <!-- place holder for dynamic data from custom.js -->
                    </div> <!-- /.columns #new-movie -->
                </section> <!-- /.new upcoming -->

                <!-- **** MOST POPULAR **** -->
                <section class="section popular">
                    <h1 class="title">Most Popular</h1>
                    <div class="columns" id='popular-movie'>
                        <!-- place holder for dynamic data from custom.js -->
                    </div> <!-- /.columns #popular-movie -->
                </section> <!-- /.popular -->
            </div> <!-- column is-three-quarters -->

            <!-- **** SIDEBAR **** -->
            <section class="section">
                <div class="column">
                    <p class="notification is-success">Sidebar banner advertisement!</p>
                </div>
            </section>

        </div> <!-- columns / main -->
    </div> <!-- /.container -->

    <?php include_once 'views/partials/footer.blade.php'; ?>

