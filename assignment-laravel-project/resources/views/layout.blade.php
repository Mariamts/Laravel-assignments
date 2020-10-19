<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if (isset($title))
            {{$title}}
        @else
            No Title
        @endif
    </title>
</head>
<style>
    .light{
        background-color: lightpink;
    }
    .dark {
        background-color: #301934;
    }
</style>
<body class="{{$theme}}">
    
    @yield('content')

    @yield('power')

    @if ($showFooter)
        @yield("footer")
    @endif
</body>
</html>