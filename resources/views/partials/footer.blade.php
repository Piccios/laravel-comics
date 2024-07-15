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
                <ul class="footerPartTwo">
                    <h2>dc</h2>
                    @foreach ($FooterPartTwo as $link)
                    <li>
                        <a href="">{{$link['name']}}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="footerPartThree">
                    <h2>sites</h2>
                    @foreach ($FooterPartThree as $link)
                    <li>
                        <a href="">{{$link['name']}}</a>
                    </li>
                    @endforeach
            </div>
        </secrtion>
    </div>
</footer>
