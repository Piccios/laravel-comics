<footer>
    <div>
        <section class="container-links">
            <div>
                <ul class="footerPartOne">
                    <h2> dc comics </h2>
                    @foreach ($FooterPartOne as $link)
                        <li>
                            <a href="">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="footerShop">
                    <h2>shop</h2>
                    @foreach ($FooterShop as $link)
                        <li>
                            <a href="">{{ $link['name'] }}</a>
                    @endforeach
                </ul>
                <ul class="footerPartTwo">
                    <h2>dc</h2>
                    @foreach ($FooterPartTwo as $link)
                        <li>
                            <a href="">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="footerPartThree">
                    <h2>sites</h2>
                    @foreach ($FooterPartThree as $link)
                        <li>
                            <a href="">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
    <div class="socials">
        <section class="containerSocials">
            <div class="button">
                <span class="buttonFooter">sign-up now!</span>
            </div>
            <div class="social">
                <h3>fallow us</h3>
                <ul>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youTube">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest">
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope">
                    </li>
                </ul>
            </div>
        </section>
    </div>
</footer>
