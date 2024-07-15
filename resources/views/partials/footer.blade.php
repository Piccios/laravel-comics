<footer>
    <div>
        <secrtion class="container-links">
            <div>
                <ul class="footerPartOne">
                    <h2> dc comics </h2>
                    @foreach ($FooterPartOne as $link)
                    <li>
                        <a href="">{{$link['name']}}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="FooterShop">
                    <h2>shop</h2>
                    @foreach ($FooterShop as $link)
                    <li>
                        <a href="">{{$link['name']}}</a>
                    @endforeach
                    </ul>
            </div>
        </secrtion>
    </div>
</footer>
