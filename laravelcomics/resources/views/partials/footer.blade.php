<footer>
    <div class="container">
        <!-- Row 1 -->
        <div class="row row1">
            @foreach ($datax['footerImages'] as $item)
                <div class="footer-item">
                    <img class="footer-image" src="{{ asset($item['src']) }}" alt="{{ $item['alt'] }}">
                    <span class="footer-text">{{ $item['text'] }}</span>
                </div>
            @endforeach
        </div>
        <!-- Row 2 -->
        <div class="row row2">
            <!-- Column 1 -->
            <div class="column column1">
                <h4>DC COMICS 1</h4>
                <ul class="footer-menu">
                    @foreach ($datax['list1'] as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
                <h4>SHOP</h4>
                <ul class="footer-menu">
                    @foreach ($datax['list4'] as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- Column 2 -->
            <div class="column column2">
                <h4>DC</h4>
                <ul class="footer-menu">
                    @foreach ($datax['list2'] as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- Column 3 -->
            <div class="column column3">
                <h4>SITES</h4>
                <ul class="footer-menu">
                    @foreach ($datax['list3'] as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- Column 4 -->
            <div class="column column4">
                <img class="logo" src="{{ asset('img/dc-logo-bg.png') }}" alt="logo">
            </div>
        </div>
        <!-- Row 3 -->
        <div class="row row3">
            <button class="sign-up-btn">SIGN-UP NOW</button>
            <div class="follow-us">
                <span>FOLLOW US</span>
                @foreach ($datax['socialIcons'] as $icon)
                    <img src="{{ asset($icon['src']) }}" alt="{{ $icon['alt'] }}">
                @endforeach
            </div>
        </div>
    </div>
</footer>
