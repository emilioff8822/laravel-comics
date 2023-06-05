<footer>
    <div class="container">
        <div class="row row1">
            @foreach ($data['footerImages'] as $item)
                <div class="footer-item">
                    <img class="footer-image" src="{{ asset($item['src']) }}" alt="{{ $item['alt'] }}">
                    <span class="footer-text">{{ $item['text'] }}</span>
                </div>
            @endforeach
        </div>

        <div class="row row2">
            <div class="column column1">
                <h4>DC COMICS 1</h4>
                <ul class="footer-menu">
                    @foreach ($data['list1'] as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
                <h4>SHOP</h4>
                <ul class="footer-menu">
                    @foreach ($data['list4'] as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="column column4">
                <img class="logo" src="{{ asset('img/dc-logo-bg.png') }}" alt="logo">
            </div>
        </div>

        <div class="row row3">
            <button class="sign-up-btn">SIGN-UP NOW</button>
            <div class="follow-us">
                <span>FOLLOW US</span>

                @foreach ($data['socialIcons'] as $icon)
                    <img src="{{ asset($icon['src']) }}" alt="{{ $icon['alt'] }}">
                @endforeach
            </div>
        </div>
    </div>
</footer>
