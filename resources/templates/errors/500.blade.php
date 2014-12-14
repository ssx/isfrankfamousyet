<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{{ Config::get("site.tagline") }}}">
    <meta name="author" content="Scott Wilcox <scott@dor.ky>">
    <title>{{{ Config::get("site.title") }}} | {{{ Config::get("site.tagline") }}}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix fixed">
                <div class="inner">
                    <h3 class="masthead-brand">&nbsp;</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li><a href="/">Famous-o-meter</a></li>
                            <li><a href="/submit">Add Yourself</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">Error</h1><br>
                <p class="lead">An unexpected error occurred. Please go back and try again.</p>

            </div>

            <div class="mastfoot fixed">
                <div class="inner">
                    <p>Created by <a href="https://twitter.com/ssx" target="_blank">@ssx</a> with love for <a href="https://twitter.com/frankdejonge" target="_blank">@frankdejonge</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include("common")

</body>
</html>
