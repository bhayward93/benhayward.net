const express = require('express'),
	bodyParser = require('body-parser'),
	app = express(),
	path = require('path');
app.set('view engine', 'pug');
app.use(bodyParser.urlencoded({extended:false}));
app.use(express.static(path.join(__dirname, 'public')));/*
 * http://localhost:8080/
 */
app.get('/', function (req, res) {
 	res.render(
        'index',
        {headerTitle: 'Ben Hayward'})
});

// 404.
app.use(function(req, res, next) {
    res.status(404).send("404: Sorry, but the resource that you have requested does not exist on this server.");
});

// Start the server on port 3000.
app.listen(8080, function () {
    console.log('Server listening on port 8080.');
});