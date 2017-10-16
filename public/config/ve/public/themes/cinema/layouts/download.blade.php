{{ Theme::partial('header')}}
{{ Theme::partial('nav')}}
<div class="container-fluid" >
<div class="row" >
{{ Theme::place('content')}}
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        {{ alertjs() }}
    </body>
</html>