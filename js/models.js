var User = Backbone.Model.extend({
	defaults: {
	  "login": "octocat",
	  "id": 1,
	  "avatar_url": "https://1.gravatar.com/avatar/bb17cafc08254c48919d12213f117e8e?d=https%3A%2F%2Fidenticons.github.com%2Ff5852fd0e3770196c2fa0054caa9386e.png&s=140",
	  "gravatar_id": "somehexcode",
	  "url": "https://api.github.com/users/octocat",
	  "name": "monalisa octocat",
	  "company": "GitHub",
	  "blog": "https://github.com/blog",
	  "location": "San Francisco",
	  "email": "octocat@github.com",
	  "hireable": false,
	  "bio": "There once was...",
	  "public_repos": 2,
	  "public_gists": 1,
	  "followers": 20,
	  "following": 0,
	  "html_url": "https://github.com/octocat",
	  "created_at": "2008-01-14T04:33:35Z",
	  "type": "User",
	  "level": 1
	}
});

var Users = Backbone.Collection.extend({
	model: User
});