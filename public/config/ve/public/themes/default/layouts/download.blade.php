{{ Theme::partial('header')}}

    {{ Theme::partial('nav')}}
    {{ Theme::place('content')}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            if (typeof jQuery == 'undefined') {
                document.write(unescape("%3Cscript src='{{ urlencode(Theme::asset()->url('js/jquery-1.9.1.min.js')) }} type='text/javascript'%3E%3C/script%3E"));
            }
        </script>

        <!-- Main js fail. -->
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ alertjs() }}
    </body>
</html>