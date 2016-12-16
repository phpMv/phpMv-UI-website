<div id="jumbotron" class="ui segment">
	<h1 class="ui header">phpMv-UI
	<div class="sub header">{{ expr[1] }}</div>
	</h1>
	<div class="ui brown message">
		<h2 class="header">What's new ?</h2>
		<div class="content">Phalcon-JQuery becomes <b>phpMv-UI</b> and supports several php frameworks</div>
	</div>
	<div class="ui red ribbon label">Overview</div>
	<p>{{ q["bt-download"] }}</p>
	<p>{{ expr[3] }}</p>
	<pre><code class="language-javascript">{
    "require": {
        "phpmv/php-mv-ui": "dev-master"
    }
}</code></pre>
	<p>{{ expr[4] }}</p>
	<pre><code class="language-bash">composer install</code></pre>
</div>
{% if hasScript==true %} {{ script_foot }} {% endif %}
