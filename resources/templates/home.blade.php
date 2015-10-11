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
    @include("ribbon")
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">&nbsp;</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="/">Famous-o-meter</a></li>
                            <li><a href="/submit">Add Yourself</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">The world famous Famous-o-meter.</h1><br>
                <p>Help make Frank famous!</p>
                <p><a href="https://twitter.com/intent/tweet?screen_name=frankdejonge&text=Happy%20birthday!%20%F0%9F%8E%89%F0%9F%8E%89%F0%9F%8E%89" class="twitter-mention-button" data-size="large">Tweet to @frankdejonge</a></p>

                <div class="row">
                    <div class="col-md-12" id="table-holder">
                        <table class="table" id="dev-table">
                            <thead>
                            <tr>
                                <th width="10%" class="text-center">&nbsp;</th>
                                <th width="20%">&nbsp;</th>
                                <th width="30%">Username</th>
                                <th width="40%">Followers</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($Users as $User)
                                <?php $i++; /* Switch this to use Alex's @set */ ?>
                                <tr>
                                    <td class="text-center">{{{ $i }}}</td>
                                    <td class="text-center"><img style="height: 60px" src="{{{ $User->image_url }}}"></td>
                                    <td><a href="https://twitter.com/{{{ $User["username"] }}}">@{{{ $User["username"] }}}</a></td>
                                    <td>{{{ number_format($User->count_followers) }}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="mastfoot">
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
