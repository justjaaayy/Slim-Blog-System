<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/normalize.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/flexboxgrid.css" media="screen" title="no title" charset="utf-8">
  </head>
<body>

<div class="row">
<div class="col-xs-offset-3 col-xs-9">

<div class="title">
  <h1>{{ post.title }}</h1>
</div>

<div class="author">
  By {{ post.author }} on {{ post.created }}
</div>

<p>{{ post.body }}</p>

<hr class="half-rule">

<a href="{{ urlFor('home') }}" class="return-btn">Go back</a>

</div>
</div>

</body>
</html>
