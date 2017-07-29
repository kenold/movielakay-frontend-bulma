//movies array
var movies = faker.helpers.shuffle([
    {title: "Kado Bondye", year: 2015},
    {title: "Abused", year: 2015},
    {title: "We Love You Anne", year: 2015},
    {title: "The Heavenly Side of Hell", year: 2015},
    {title: "Natalie", year: 2015},
    {title: "Married Men", year: 2015},
    {title: "Dancing in the Shadow of Love", year: 2015},
    {title: "Toussaint L’ouverture", year: 2015},
    {title: "Unconditional Love", year: 2015},
    {title: "Ogou Le Revenant", year: 2015}
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
    for (var i = 0; i < 4; i++) {
        $("#new-movie").append(
            column(i)
        );
    }
});

$(document).ready(function() {
    for (var i = 5; i < 9; i++) {
        $("#popular-movie").append(
            column(i)
        );
    }
});