@extends('layout.master')

@section('title')
    Liên hệ
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection


{{-- @push('scripts')

@endpush --}}

@section('content')
    <div class="grid wide contact-container">
        <div class="title">Liên hệ với chúng tôi</div>

        <div class="content">
            <div class="contact">
                <div class="contact__form">
                    <form method="POST" action="" accept-charset="UTF-8" class="contact-form">
                        <p>
                            <label for="name">Tên của bạn</label>
                            <input required="required" type="text" id="name" name="contact[name]" value="">
                        </p>
                        <p>
                            <label for="email">Email của bạn</label>
                            <input required="required" type="email" id="email" name="contact[email]" autocorrect="off"
                                autocapitalize="off" value="" aria-required="true">
                        </p>
                        <p>
                            <label for="phone">Số điện thoại của bạn</label>
                            <input type="tel" id="phone" name="contact[phone]" pattern="[0-9\-]*" value="">
                        </p>
                        <p>
                            <label for="message">Ý kiến của bạn</label>
                            <textarea rows="10" id="message" name="contact[body]" required="required"></textarea>
                        </p>
                        <input type="submit" class="btn-send" value="Gửi">
                    </form>
                </div>
                <div class="contact__content">
                    <p>Đây là một số câu hỏi thường gặp nhất mà bạn có thể muốn xem</p>

                    <ul class="list">
                        <li class="item"><a href="">FAQS</a></li>
                        <li class="item"><a href="">Vận chuyển</a></li>
                        <li class="item"><a href="">Chính sách bảo hành</a></li>
                        <li class="item"><a href="">Chính sách trả lại và hoàn tiền</a></li>
                    </ul>

                    <p>Hoặc nếu bạn có bất kỳ câu hỏi nào khác, xin vui lòng để lại tin nhắn của bạn tại đây trong phần bên
                        dưới. Chúng tôi sẽ
                        liên hệ lại với bạn sớm nhất có thể</p>

                    <div class="contact__content--info">
                        <p>Email: <a href="mailto:thaolv.21it@vku.udn.vn">thaolv.21it@vku.udn.vn</a></p>
                        <p>Số điện thoại: <a href="tel:+84947180074">0947180074</a></p>
                        <p>Trường Đại học Công nghệ Thông tin và Truyền thông Việt - Hàn</p>
                        <p>Địa chỉ: 470 Đường Trần Đại Nghĩa, Khu đô thị, Ngũ Hành Sơn, Đà Nẵng</p>
                    </div>

                    <p>Giờ mở cửa: 9:00 AM - 17:00 PM</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
