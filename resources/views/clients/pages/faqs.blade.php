@extends('layout.master')

@section('title')
    Liên hệ
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/faqs.css') }}">
@endsection


{{-- @push('scripts')

@endpush --}}

@section('content')
    <div class="grid wide faqs-container">
        <div class="title">FAQs</div>

        <div class="content">
            <p>
                <strong>
                    May I know more details about the mechanical keyboard switches?
                </strong><br>
                Here is the information about our available switches:
                <a
                    href="https://iqunix.store/blogs/news/mechanical-switches-guide">https://iqunix.store/blogs/news/mechanical-switches-guide</a>
            </p>

            <p>
                <strong>
                    Why Costar stabs?
                </strong><br>
                IQUNIX being a pre-build manufacturer, providing products of excellent typing feel is our priority, whilst
                Costar stabs
                add bonus points to the experience.
                In case you find removing the larger keycaps a PITA, click here to get <a
                    href="https://cdn.shopify.com/s/files/1/1183/1328/files/20200623160618.jpg?v=1592899658">a replacing
                    guide</a>. Video guide coming soon.
            </p>

            <p>
                <strong>
                    Is there any information for ITX Case compatible hardware and parts?
                </strong><br>
                <a
                    href="https://cdn.shopify.com/s/files/1/1183/1328/files/ZX-1_Case_Compatibility_f66605e1-33e2-4df6-a562-1d473a4ef21e.pdf?v=1611831196">Clicking
                    to Check IQUNIX ZX-1 Case Compatibility.</a>
            </p>

            <p>
                <strong>
                    Are the keyboards macOS compatible?
                </strong><br>
                Yes, all the keyboards are compatible with macOS.
                <br>
                The Mac supplementary keycaps are included in the package.
            </p>

            <p>
                <strong>
                    What's the shipping time?
                </strong><br>
                All orders will be processed within 5 business days (excluding weekends and holidays) from our Chinese
                warehouse or
                Oversea warehouse. Learn More details about delivery time and cost from our <a href="">Shipping
                    Policy.</a>
            </p>

            <p>
                <strong>
                    Do you have a warehouse in my local country?
                </strong><br>
                Currently, we have oversea warehouses in Poland, Australia, and United States. There are a few SKUs in stock
                that could
                be shipped from these warehouses.
            </p>

            <p>
                <strong>
                    Do I need to pay for taxes/duties?
                </strong><br>
                All products sold by IQUNIX do not include duties and taxes. There are only product amounts and shipping
                fees charged on
                your orders. <br>
                Customs Policies widely vary in different countries. We have no control over these charges and can’t predict
                what they
                may be. IQUNIX shall not be liable for any additional charges such as vat tax, customs clearance fees, local
                shipping
                charges, or admin charges, etc. <br>
                If your packages were detained by your country customs, please contact us to offer the related commercial
                invoice and
                shipping documents.(support@iqunix.store)
            </p>

            <p>
                <strong>
                    May I learn more details about warranty policy and return policy?
                </strong><br>
                For keyboards and ITX cases, we offer a 1-year warranty sevice. To learn more details, please click the
                following text
                directly.
            </p>

            <p>
                <strong>
                    Will F96 be restocked?
                </strong><br>
                Once it's gone, it's gone. F96 will make way for its successor, the F97.
            </p>

            <p>
                <strong>
                    I like the keycap designs of F96, how can I get them on F97?
                </strong><br>
                Keycap sets are sold in limited supply, you may grab one set along with the F97 keyboard.
            </p>
        </div>
    </div>
@endsection

@section('js')

@endsection
