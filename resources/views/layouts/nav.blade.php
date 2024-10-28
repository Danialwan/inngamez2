<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">

<nav class="flex justify-between fixed z-50">
 <div class="logo flex items-center">
    <a href="#"><img src="{{ asset('images/Logo/InnGamez_LogoWhite.png') }}" alt=""></a>
 </div>
 <div class="menu">
    <ul class="flex link">
        <li class="active"><a href="/" id="link">Home</a></li>
        <li><a href="/about" id="link">About</a></li>
        <li><a href="/news" id="link">News</a></li>
        <li><a href="/contact" id="link">Contact</a></li>
        <li><a href="javascript:void(0);" class="hamburger_icon z-60" onclick="myFunction()"><i><img
            style="max-width: 2rem;" src="{{ asset('images/icon/Hamburger_icon_white.png') }}" alt=""></i></a></li>
    </ul>
 </div>
</nav>
<div class="menu-responsive z-40 hidden" id="myMenu">
    <ul class="link-responsive ">
        <a href="/" id="link"><li>Home</li></a>
        <a href="/about" id="link"><li>About</li></a>
        <a href="/news" id="link"><li>News</li></a>
        <a href="/contact" id="link"><li>Contact</li></a>
    </ul>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myMenu");
        x.classList.toggle("hidden");
    }
</script>
