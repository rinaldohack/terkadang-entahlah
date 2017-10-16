<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ Theme::place('title') }}</title>
        <meta name="description" content="{{ Theme::place('meta_desc') }}">
        <meta name="keywords" content="{{ Theme::place('meta_keywords') }}">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Varela+Round" >
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
        <link rel="stylesheet" type="text/css" href="{{ Theme::asset()->url('css/custom.css') }}" />
        {{ alertcss() }}
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>