const express = require('express'),
	bodyParser = require('body-parser'),
	app = express(),
	path = require('path'),
	OrbitDB = require('orbit-db'),
	IPFS = require('ipfs'),
	ipfsOptions = {
  		EXPERIMENTAL: {
    		pubsub: true
  		},
	},
	ipfs = new IPFS(ipfsOptions);

app.set('view engine', 'pug');
app.use(bodyParser.urlencoded({extended:false}));
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', function (req, res) {
	console.log('loading home');
 	res.render(
        'index',
        {headerTitle: 'Ben Hayward'}
    );
});
// app.get('/add-post', function (req, res) {
//  	res.render(
//         'admin-panel',
//         {headerTitle: 'Ben Hayward'})
// });
// 404.
app.use(function(req, res, next) {
    res.status(404).send("404: Sorry, but the resource that you have requested does not exist on this server.");
});

// Start the server on port 3000.
app.listen(8080, function () {
    console.log('Server listening on port 8080.');
});


const posts = null;
ipfs.on('ready', async () => {
	const orbitdb = new OrbitDB(ipfs),
	access = {
		write: [orbitdb.key.getPublic('hex')],
	},
	db = await orbitdb.feed('benha-blog', access);
	console.log(db.address.toString());

	db.events.on('ready', () => {
		posts = feed.iterator().collect();
		posts.forEach((post) => console.log(post.title + '\n', post.content));
		console.log('posts:'+posts)
	});

	const addPost = async(content) => {
		try{
			await db.put('post', content);
			console.log('Successful post');
		} catch(e) {
			console.log('FAIL'+e.getMessage());
		}
	}

	app.post('/addPost', async function (req, res) {
		try{
			addPost(content);
			console.log("adding post")
		} catch(e) {
			console.log('A critical error has occurred.');
			console.log(e);
		}
	});

  //const latest = db.iterator({ limit: 5 }).collect()
  //console.log(JSON.stringify(latest, null, 2))
   // const hash = await db.add('hello world')

});
ipfs.on('error', (e) => console.error(e))
