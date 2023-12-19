<footer class="main-footer" style="background-image:url({{asset('front')}}/images/background/5.png)">
    <div class="auto-container">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset($website->website_logo)}}" alt="" class="img-fluid" width="200px"/></a>
        </div>
        <ul class="footer-nav">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('home.books')}}">Books</a></li>
{{--            <li><a href="{{route('home.recipes')}}">Recipes</a></li>--}}
            <li><a href="{{route('home.blogs')}}">Blogs</a></li>
            <li><a href="{{route('home.contact')}}">Contact us</a></li>
        </ul>
        <ul class="social-box">
            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
        </ul>
        <div class="copyright">&copy; {{$website->footer}}</div>
    </div>
</footer>
