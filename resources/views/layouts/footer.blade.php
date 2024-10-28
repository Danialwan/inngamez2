<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<footer class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 p-10 ps-20">
    <div class="footerText pe-10">
        <b>INNGAMEZ</b>
        <p>All company names, brand names, trademarks, logos, illustrations, videos and any other intellectual property
            (Intellectual Property) published on this website are the property of their respective owners. Any
            non-authorized use of Intellectual Property is strictly prohibited and any violation will be prosecuted
            under the law.</p>
    </div>
    <div class="socialMedia">
        <b>SOCIAL MEDIA</b>
        <div class="flex gap-4 mt-4">
            <a href="{{$instagram->link}}"><img width="30" src="{{ asset('images/icon/instagram.svg') }}" alt=""></a>
            <a href="{{$facebook->link}}"><img width="30" src="{{ asset('images/icon/facebook.svg') }}" alt=""></a>
            <a href="{{$youtube->link}}"><img width="30" src="{{ asset('images/icon/youtube.svg') }}" alt=""></a>
            <a href="{{$linkedin->link}}"><img width="30" src="{{ asset('images/icon/linkedin.svg') }}" alt=""></a>
        </div>
    </div>
</footer>
<div class="copyright flex justify-center p-5">
    <a class="loginBtn" href="/login">© </a> 2024 INNGAMEZ STUDIO. ALL RIGHT RESERVED
</div>
