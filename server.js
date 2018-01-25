// var path = require('path');
// var express = require ('express');
// var phpExpress = require('php-express')({
 
//   // assumes php is in your PATH
//   binPath: '/usr/bin/php'
// });
// var myapp = express();
// var port = 3000;
// // mymyapp.all("/*", function(req, res, next) {
// //     res.sendFile("/home/vraj/Desktop/kulebe/main-theme/kulebe/index.php");
// // });
// myapp.listen(port);
 
// // set view engine to php-express
// myapp.use('/', express.static(__dirname));
// myapp.set('views', path.join(__dirname, 'views'));
// myapp.engine('php', phpExpress.engine);
// myapp.set('view engine', 'php');
 
// // routing all .php file to php-express
// myapp.all(/.+\.php$/, phpExpress.router);
// console.log('Server running on port ' + port);

var render = require('php-node')({bin:"/usr/bin/php"});
render(__dirname+'/index.php', {}, function(e, r) {
    console.log("print",r);
})

// use PHP as view engine in Express
var express = require('express'),
	app = express(),
	phpnode = require('php-node')({bin:"/usr/bin/php"});

app.set('views', __dirname);
app.engine('php', phpnode);
app.set('view engine', 'php');

app.all('/index.php', function(req, res) {
   res.render('index');
})

var port = process.env.PORT || 3000;
app.listen(port, function() {
  console.log("Listening on " + port);
})