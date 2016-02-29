var apiKey = 'y28r7zxq24wdae6bwjndv6k2';
var resultID = "";

$(document).ready(function() {
    //var queryText = $('#movie-search').val();
    //var queryURI = encodeURI(queryText);
    var searchApiRequest = "http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json?apikey=" + apiKey;

	/*	movies.forEach(function(movie, index) {

	});*/

    $.ajax({
        url: searchApiRequest,
        type: 'GET',
        dataType: 'jsonp',
        error: function() {
            console.log('there was error in processing the search request.');
        },
        success: function(json) {
            var movieInfo = json.movies[0];
						var movieId = json.movies.id[0];
						var reviewApiRequest = "http://api.rottentomatoes.com/api/public/v1.0//movies/" + movieId+ "/reviews.json?apikey=" + apiKey;
            var noResultsMessage = 'your search returned no matches. Please try again.';
            //var resultTitle = movieInfo.title;
            //var resultThumb = movieInfo.posters.thumbnail;
            //var resultDesc = movieInfo.critics_consensus;

						var title = movie.title;
						var rating = movie.ratings.critics_score;
						var image = movie.posters.original;

						console.log(title);

            var reviewsPublicURL = movieInfo.links.reviews;
            var reviewsRequest = reviewsPublicURL;

            resultID = movieInfo.id; // supposed to set global var resultID to movieID

            $('.search-results').find('img').attr('src',resultThumb).end().find('h1').text(resultTitle).end().find('p').text(resultDesc);

        },
        complete: function() {
            $.ajax({
                url:reviewApiRequest,
                type: 'GET',
                dataType: 'jsonp',
                error: function(json) {
                    console.log('for whatever reason, we could not find any reviews of this movie');
                },
                success: function(json) {
                    console.log(json.total);
                }
            });
        }
    });

	});
