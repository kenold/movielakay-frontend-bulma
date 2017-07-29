//movies array
var movies = faker.helpers.shuffle([
    {title: "Kado Bondye", year: 2017, poster: "poster.jpg"},
    {title: "Abused", year: 2017, poster: "poster.jpg"},
    {title: "We Love You Anne", year: 2013, poster: "poster.jpg"},
    {title: "The Heavenly Side of Hell", year: 2015, poster: "poster.jpg"},
    {title: "Natalie", year: 2009, poster: "poster.jpg"},
    {title: "Married Men", year: 2018, poster: "poster.jpg"},
    {title: "Dancing in the Shadow of Love", year: 2013, poster: "poster.jpg"},
    {title: "Toussaint L'ouverture", year: 2011, poster: "poster.jpg"},
    {title: "Unconditional Love", year: 2014, poster: "poster.jpg"},
    {title: "Ogou Le Revenant", year: 2012, poster: "poster.jpg"}
]);

function column(i) {

    return "" + "<div class='column'>" +
        "<div class='card'>" +
        "<div class='card-image'>" +
        "<figure class='image is-parent'>" +
        "<a href='#'><img src='http://via.placeholder.com/210x311' alt='Image'></a>" +
        "</figure>" +
        "</div>" +
        "<div class='card-content'>" +
        "<h3><a href='#'>" + movies[i].title + "</a></h3>" +
        "</div>" +
        "</div>" +
        "</div>";
}

$(document).ready(function() {

    //append 3 columns and update featured div
    for (f = 7; f < 10; f++) {
        $("#featured").append(
            column(f)
        );
    }

    //append 4 columns and update new-movie div
    for (var n = 0; n < 4; n++) {
        $("#new-movie").append(
            column(n)
        );
    }

    //append 4 columns and update popular-movie div
    for (p = 5; p < 9; p++) {
        $("#popular-movie").append(
            column(p)
        );
    }
});