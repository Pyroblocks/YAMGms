$.ajax({
	url: 'req_articles.php',
	type: 'GET',
	success : function(data) {
		if(data.includes("req_article Error:")) {
			console.log(data);
			return;
		}

		var obj = jQuery.parseJSON(data);

		var articles = document.getElementById("yapnews-articles");

		if(articles === null) {
			return;
		}

		for(var index = 0; index < obj.length; ++index) {
			var article = document.createElement('div');
			article.setAttribute('class', 'yapnews-article');
			var articleTitle = document.createElement('a');
			articleTitle.setAttribute('class', 'yapnews-article-title');
			articleTitle.setAttribute('href', 'https://www.yapms.com/news/article.php?a=' + obj[index]['id']);
			articleTitle.setAttribute('target', '_blank');
			var articleAuthor = document.createElement('div');
			articleAuthor.setAttribute('class', 'yapnews-article-author');
			var articleSnippet = document.createElement('div');
			articleSnippet.setAttribute('class', 'yapnews-article-snippet');
			articleTitle.innerHTML = obj[index]['title'];
			articleAuthor.innerHTML = obj[index]['author'];
			articleSnippet.innerHTML = obj[index]['snippet'];

			article.appendChild(articleTitle);
			article.appendChild(articleAuthor);
			article.appendChild(articleSnippet);
			articles.appendChild(article);
		}
	},
	error: function(a,b,c) {
		console.log(a);
		console.log(b);
		console.log(c);
	}
});
