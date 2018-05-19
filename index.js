var express = require('express');

var app = express();

app.use(express.static('public', {
  extensions: ['html']
}));

app.use("/node_modules", express.static(__dirname + '/node_modules'));

app.use("img", express.static(__dirname + 'img'));


// Home Route
app.get('/', function(req, res) {
	res.send('Hello World');
});

app.listen(process.env.PORT || 5000, function(){
	console.log('Server started on port 3000...');
});
