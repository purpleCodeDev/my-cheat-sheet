<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

<link href="css/default.css" rel="stylesheet" type="text/css"/>
<link href="css/fonts.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/">MCS</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li class="current_page_item"><a href="/" accesskey="1" title="">Homepage</a></li>
                        <li><a href="/about" accesskey="3" title="">About Me</a></li>
                        <li><a href="#" accesskey="5" title="">Contact</a></li>
                    </ul>
                </div>
            </div>

            @yield('header')

        </div>
        @yield('content')
    </body>
</html>
