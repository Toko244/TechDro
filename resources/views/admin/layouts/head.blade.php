<head>
    <meta charset="utf-8" />
    <title>TechDro | სამართავი პანელი</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- App css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('admin/form-builder/js/form_builder.js') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dataTable.css') }}">
    <link href="{{ asset('/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/admin.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/css/style.css')}}" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>
