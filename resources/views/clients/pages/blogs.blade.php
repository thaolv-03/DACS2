@extends('layout.master')

@section('title')
    Liên hệ
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/blogs.css') }}">
@endsection


{{-- @push('scripts')

@endpush --}}

@section('content')
    <div class="grid wide blogs-container">
        <div class="title">Hướng dẫn công tắc cơ học</div>

        <div class="content">
            <p>
                <strong>
                    Công tắc trong bàn phím là gì?
                </strong> <br>
                Công tắc là các cơ chế hình khối nhỏ nằm bên dưới keycap và kết nối với PCB. Các thiết bị chuyển mạch khác
                nhau về hình thức, âm thanh và cảm giác của chúng. Trong hầu hết các trường hợp, bạn sẽ không thể nhìn thấy
                chúng. Nói cách khác, việc lựa chọn công tắc sẽ không ảnh hưởng đến hình thức bên ngoài của bàn phím. Chúng
                có ảnh hưởng lớn đến cách bàn phím của bạn sẽ phát ra âm thanh và cảm giác.
            </p>

            <p>
                <strong>
                    Nói chung, hành vi của bất kỳ công tắc nào có thể được chia thành ba loại:
                </strong> <br>
                1. Linear - Các phím bấm đều và mượt mà. <br>
                2. Tactile - Một cú va chạm ở giữa hành trình, thường là xung quanh điểm khởi động. <br>
                3. Clicky - Một cú va chạm khi đang di chuyển kèm theo một âm thanh "cạch" rõ ràng. <br>
            </p>

            <p>
                Bất kể bạn chọn loại công tắc nào, bàn phím cơ học rất phù hợp để làm việc hàng ngày và chơi trò chơi PC vì
                chúng cung cấp phản hồi không thể nhầm lẫn khi nhấn. Điều đó nói lên rằng, một phần thú vị của bàn phím cơ
                là có được một bàn phím hoàn toàn phù hợp với nhu cầu của bạn.
            </p>

            <div class="switch-description-container">

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/cherry_blue.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Cherry MX Blue</li>
                            <li>Clicky + Tactile / 60cN force</li>
                            <li>Feel: Heavy</li>
                            <li>Sound: Loud</li>
                            <li>Lifespan: 50 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Đặc điểm chuyển mạch bằng xúc giác và âm thanh. Tuyệt vời để đánh máy và lý tưởng cho những người
                            dùng thích nghe và cảm thấy tiếng lách cách khi họ nhấn phím. Các công tắc phím xúc giác này
                            giúp đảm bảo nhập dữ liệu chính xác.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/cherry_brown.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Cherry MX Brown</li>
                            <li>Tactile / 55cN force</li>
                            <li>Feel: Medium</li>
                            <li>Sound: Soft</li>
                            <li>Lifespan: 100 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Công tắc phím nhẹ hơn với phản hồi xúc giác và âm thanh tinh tế. Một sự kết hợp tuyệt vời cho
                            nhân viên đánh máy và game thủ.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/cherry_silver.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Cherry MX Silver</li>
                            <li>Linear / 45cN force</li>
                            <li>Feel: Light</li>
                            <li>Sound: Quiet</li>
                            <li>Lifespan: 100 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Công tắc phím tuyến tính, nhẹ, với hoạt động tương tự như Red Cherry MX; Tuy nhiên, nó có khoảng
                            cách khởi động và quãng đường di chuyển ngắn hơn.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/cherry_red.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Cherry MX Red</li>
                            <li>Linear / 45cN force</li>
                            <li>Feel: Smooth and Direct</li>
                            <li>Sound: Quiet</li>
                            <li>Lifespan: 100 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Đặc tính chuyển mạch tuyến tính kết hợp với điện trở lò xo thấp kích hoạt trực tiếp. Cherry MX
                            Red là sự lựa chọn hàng đầu cho những người mới bắt đầu trong thế giới bàn phím cơ. Công nghệ
                            chạy mượt mà cho phép các phiên viết và chơi game cân bằng.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/cherry_pink.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Cherry MX Pink/Silent Red</li>
                            <li>Linear / 45cN force</li>
                            <li>Feel: Smooth and Silent</li>
                            <li>Sound: Quiet</li>
                            <li>Lifespan: 50 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Giống như Cherry MX Red, Cherry MX Silent Red cũng được đặc trưng bởi đặc tính chuyển mạch tuyến
                            tính. Các tiếng ồn khi vận hành được giảm thiểu một cách đáng tin cậy bằng cách giảm chấn đã
                            được cấp bằng sáng chế. Công tắc với công nghệ im lặng tự cho mình là một lựa chọn khôn ngoan
                            liên quan đến lực lò xo thấp và tác động mềm của nó.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/ttc_silver.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>TTC Speed Silver</li>
                            <li>Linear / 45cN force</li>
                            <li>Feel: Light</li>
                            <li>Sound: Soft</li>
                            <li>Lifespan: 100 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Nhanh hơn, ổn định hơn, đáng tin cậy hơn, ngăn chặn việc chạm nhầm.TTC Speed Silver Switch có thể
                            được kích hoạt nhanh hơn bằng cách rút ngắn hành trình dẫn. nó cải thiện độ chính xác của công
                            tắc và lực nhấn ban đầu bằng thiết kế cấu trúc lò xo dài kép. Nó ngăn chặn việc chạm ngẫu nhiên
                            và phục hồi nhanh chóng một cách hiệu quả.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/ttc_pink.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>TTC Gold Pink</li>
                            <li>Linear / 37cN force</li>
                            <li>Feel: Soft and Smooth</li>
                            <li>Sound: Quiet</li>
                            <li>Lifespan: 100 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Nhanh chóng và mượt mà. Là công tắc có lực tác động nhẹ nhất, công tắc TTC Gold Pink mang lại sự
                            thoải mái và êm ái khi đánh máy và chơi game trong thời gian dài.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/ttc_ace.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>TTC ACE</li>
                            <li>Linear / 45cN force</li>
                            <li>Feel: Light</li>
                            <li>Sound: Soft</li>
                            <li>Lifespan: 100 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Một sự lựa chọn thông minh cho cảm giác tuyến tính mượt mà với độ tin cậy vững chắc. Với lò xo
                            được làm từ thép không gỉ mạ vàng và các điểm tiếp xúc được làm từ hợp kim vàng, chúng đều bền
                            và nhạy. Mỗi công tắc cũng có 2 milimet đáng kể, vì vậy các lỗi mềm hơn có thể sẽ không đăng ký.
                        </p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/ttc_frozen.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>TTC Frozen Silent</li>
                            <li>Linear/ 39cN force</li>
                            <li>Feel: Smooth</li>
                            <li>Sound: Quiet</li>
                            <li>Lifespan: 50 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Sở hữu cảm giác chạm tốt giống như Gold Pink switch nhưng mềm và êm hơn. Giảm tiếng ồn hiệu quả
                            mang đến cho bạn trải nghiệm yên tĩnh như trong tảng băng.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/ttc_panda.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>TTC Holy Panda</li>
                            <li>Tactile / 55cN force</li>
                            <li>Feel: Heavy</li>
                            <li>Sound: Loud</li>
                            <li>Lifespan: 50 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Đó là một công tắc có cảm giác xúc giác mạnh mẽ, cảm giác xác thực, mượt mà nhưng không tù túng.
                        </p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/gateron_brown.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Gateron Brown</li>
                            <li>Tactile /55cN force</li>
                            <li>Feel: Medium</li>
                            <li>Sound: Medium</li>
                            <li>Lifespan: 50 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Sự kết hợp giữa công tắc Linear và Clicky. Không tạo ra một cú nhấp chuột khi được nhấn, nhưng
                            vết sưng xúc giác vẫn hiện diện. Lý tưởng cho những ai muốn có xúc giác và làm việc xung quanh
                            các đồng nghiệp.</p>
                    </div>
                </div>

                <div class="switch-description">
                    <div class="switch-description-img">
                        <img src="../assets/img/switch/gateron_red.webp" alt="">
                    </div>
                    <div class="switch-description-detail">
                        <ul>
                            <li>Gateron Red</li>
                            <li>Linear / 45cN force</li>
                            <li>Feel: Light</li>
                            <li>Sound: Light</li>
                            <li>Lifespan: 50 Million Keystrokes</li>
                        </ul>
                    </div>
                    <div class="switch-description-uses">
                        <p>Nó nhẹ và mềm hơn công tắc nâu. Công tắc lý tưởng cho những người làm việc đánh máy và chơi game
                            trong thời gian dài.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
