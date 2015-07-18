<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#4D9650">
    <meta name="msapplication-TileColor" content="#4D9650"/>
    <title>
        Sean's Resume
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="/assets/js/vendor/jquery.js"></script>
    <script src="/assets/js/app.js"></script>
</head>
<body>
<div class="container row">
    <header class="hero-unit">
        <div class="row">
            <div class="large-3 columns hide-for-small hide-for-print">
                @include ('partials.social')
            </div>
            {{--<div class="large-3 columns bio">--}}
                {{--<img src="/assets/img/seanja.png" alt="" class="hide-for-small"/>--}}
                {{--<img src="/assets/img/seanja-eyes.png" alt="" class="hide-for-medium-up"/>--}}
            {{--</div>--}}
            {{--<div class="large-6 columns">--}}
                {{--<h1>Hi, I'm Sean</h1>--}}

                {{--<p>Web application developer in London Ontario.</p>--}}
            {{--</div>--}}
        </div>
    </header>
    <div class="row">
        <div class="large-3 columns sidebar hide-for-small hide-for-print">
            @if (!empty($tags))
                <div class="skills">
                    <h5>Looking for some specific skills?</h5>
                    <ul class="skill-list">
                        @foreach ($tags as $tag):
                        <li class="{{$tag->count < 2 ? 'hide-for-medium-down' : ''}}">
                            <a class="skill" href="#" data-tag="{{$tag->keyname}}">{{$tag->name}} ({{$tag->count}})</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="large-9 columns content">
            @if ($errors->any())
                <div class="error">
                    @foreach($errors->all() as $e)
                        <div>
                            {{$e}}
                        </div>
                    @endforeach
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    <footer>
        @include ('partials.social')
    </footer>
</div>

<script>
    //    (function (i, s, o, g, r, a, m) {
    //        i['GoogleAnalyticsObject'] = r;
    //        i[r] = i[r] || function () {
    //                    (i[r].q = i[r].q || []).push(arguments)
    //                }, i[r].l = 1 * new Date();
    //        a = s.createElement(o),
    //                m = s.getElementsByTagName(o)[0];
    //        a.async = 1;
    //        a.src = g;
    //        m.parentNode.insertBefore(a, m)
    //    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    //
    //    ga('create', 'UA-4779209-11', 'seanja.com');
    //    ga('send', 'pageview');
</script>
</body>
</html>
