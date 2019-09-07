
<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <title>پنل مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="پنل مدیریت">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

    @include('include.css')
    @include('include.js')
</head>

<body class="active-ripple theme-blue fix-header sidebar-extra ">

@include('include.nav-bar')

</body>
<script>
        var isopen = true;
      $("#toggle-sidebar").click(function(){
        if (isopen){
          $('#panel-title').css("font-size","1.2rem");
          $('#panel-title').innerHTML = "";
        }else {
          $('#panel-title').css("font-size","1.9rem");
        }
        isopen = !isopen;
      });
</script>
