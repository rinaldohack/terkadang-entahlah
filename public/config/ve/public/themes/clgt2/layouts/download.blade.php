{{ Theme::partial('header')}}
{{ Theme::partial('nav')}}
<div class="container-fluid" >
    <div class="row" >
        {{ Theme::place('content')}}
    </div>
</div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="{{ Theme::asset()->url('js/ie-row-fix.js') }}"></script>
        {{ alertjs() }}
    </body>
</html>