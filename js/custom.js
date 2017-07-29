//movies array
var movies = faker.helpers.shuffle([
    {title: "Kado Bondye", year: 2017},
    {title: "Abused", year: 2017},
    {title: "We Love You Anne", year: 2013},
    {title: "The Heavenly Side of Hell", year: 2015},
    {title: "Natalie", year: 2009},
    {title: "Married Men", year: 2018},
    {title: "Dancing in the Shadow of Love", year: 2013},
    {title: "Toussaint L'ouverture", year: 2011},
    {title: "Unconditional Love", year: 2014},
    {title: "Ogou Le Revenant", year: 2012}
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

    //append 4 columns and update new-movie div
    for (var i = 0; i < 4; i++) {
        $("#new-movie").append(
            column(i)
        );
    }

    //append 4 columns and update popular-movie div
    for (i = 5; i < 9; i++) {
        $("#popular-movie").append(
            column(i)
        );
    }
});