var movies = faker.helpers.shuffle([
    "Kado Bondye",
    "Abused",
    "We Love You Anne",
    "The Heavenly Side of Hell",
    "Natalie",
    "Married Men",
    "Dancing in the Shadow of Love",
    "Toussaint L’ouverture",
    "Unconditional Love",
    "Ogou Le Revenant"

]);

var movieYear = faker.helpers.shuffle(["2014", "2015", "2016", "2017"]);

function column(i) {
    return "" + "<div class='column'>" +
        "<div class='card'>" +
        "<div class='card-image'>" +
        "<figure class='image is-parent'>" +
        "<a href='#'><img src='http://via.placeholder.com/210x311' alt='Image'></a>" +
        "</figure>" +
        "</div>" +
        "<div class='card-content'>" +
        "<h3><a href='#'>" + movies[i] + "</a></h3>" +
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