 (function ($) {
 var users = [
    { "login": "octocat1", "id": 1, "gravatar_id": "somehexcode", "url": "https://api.github.com/users/octocat", "name": "monalisa octocat", "company": "GitHub", "blog": "https://github.com/blog", "location": "San Francisco", "email": "octocat@github.com", "hireable": false, "bio": "There once was...", "public_repos": 2, "public_gists": 1, "followers": 20, "following": 0, "html_url": "https://github.com/octocat", "created_at": "2008-01-14T04:33:35Z", "type": "User" },
    { "login": "octocat2", "id": 2, "gravatar_id": "somehexcode", "url": "https://api.github.com/users/octocat", "name": "monalisa octocat", "company": "GitHub", "blog": "https://github.com/blog", "location": "San Francisco", "email": "octocat@github.com", "hireable": false, "bio": "There once was...", "public_repos": 2, "public_gists": 1, "followers": 20, "following": 0, "html_url": "https://github.com/octocat", "created_at": "2008-01-14T04:33:35Z", "type": "User" },
    { "login": "octocat3", "id": 3, "gravatar_id": "somehexcode", "url": "https://api.github.com/users/octocat", "name": "monalisa octocat", "company": "GitHub", "blog": "https://github.com/blog", "location": "San Francisco", "email": "octocat@github.com", "hireable": false, "bio": "There once was...", "public_repos": 2, "public_gists": 1, "followers": 20, "following": 0, "html_url": "https://github.com/octocat", "created_at": "2008-01-14T04:33:35Z", "type": "User" },
    { "login": "octocat4", "id": 4, "gravatar_id": "somehexcode", "url": "https://api.github.com/users/octocat", "name": "monalisa octocat", "company": "GitHub", "blog": "https://github.com/blog", "location": "San Francisco", "email": "octocat@github.com", "hireable": false, "bio": "There once was...", "public_repos": 2, "public_gists": 1, "followers": 20, "following": 0, "html_url": "https://github.com/octocat", "created_at": "2008-01-14T04:33:35Z", "type": "User" }
];

var UserView = Backbone.View.extend({
    tagName: "article",
    className: "user-container",
    template: $("#userTemplate").html(),

    render: function () {
        var tmpl = _.template(this.template);
        
        $(this.el).html(tmpl(this.model.toJSON()));
        return this;
    }
});

var UsersView = Backbone.View.extend({
el: $("#users"),
    initialize: function () {
        this.collection = new Users(users);
        this.render();

},

render: function () {
    var that = this;
    _.each(this.collection.models, function (item) {
    that.renderUser(item);
    }, this);
},

renderUser: function (item) {
        var userView = new UserView({
            model: item
        });
        this.$el.append(userView.render().el);
    }
});
var usersView = new UsersView();


} (jQuery));