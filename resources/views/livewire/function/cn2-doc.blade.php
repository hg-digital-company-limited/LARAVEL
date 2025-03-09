<div>
    <div>

        <head>
            <link class="main-stylesheet" href="/template/public/cute-alert/style.css" rel="stylesheet" type="text/css">
            <script src="/template/public/cute-alert/cute-alert.js"></script>
            <script src="/template/public/js/jquery-3.6.0.js"></script>
            <script src="/template/public/themesbrand/js/layout.js"></script>
            <link href="/template/public/themesbrand/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/template/public/themesbrand/css/icons.min.css" rel="stylesheet" type="text/css" />
            <link href="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
                type="text/css" />
            <link href="/template/public/themesbrand/css/app.min.css" rel="stylesheet" type="text/css" />
            <link href="/template/public/themesbrand/css/custom.min.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&family=Roboto+Condensed&display=swap"
                rel="stylesheet">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet"
                href="/template/public/AdminLTE3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        </head>
        <style>
            html,
            body {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse.png"), progress;
            }

            a:hover {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse1.png"), progress;
            }

            .btn:hover {
                cursor: url("https://ecaptcha.sieuthicode.net/assets/img/mouse1.png"), progress;
            }

            body {
                font-family: 'Oswald', sans-serif;
            }

            .ribbon-box .ribbon-primary {
                background: #15171A;
            }

            .ribbon-box .ribbon-primary.ribbon-shape::after {
                border-left-color: #15171A;
                border-bottom-color: #15171A;
            }

            .ribbon-box .ribbon-primary.ribbon-shape::before {
                border-left-color: #15171A;
                border-top-color: #15171A;
            }

            [data-layout=vertical][data-sidebar=dark] .navbar-menu {
                background: linear-gradient(#15171A, #15171A, #10101F);
                border-right: #15171A;
            }

            [data-layout=vertical][data-sidebar=dark] .navbar-nav .nav-link {
                color: #dfdfdf;
            }

            [data-layout=vertical][data-sidebar=dark] .menu-title {
                color: #838fb9;
            }

            [data-layout=vertical][data-sidebar=dark] .navbar-nav .nav-sm .nav-link {
                color: #c0c0c0;
            }

            [data-topbar=dark] #page-topbar {
                background-color: linear-gradient(#15171A, #15171A, #10101F);
                border-color: #15171A;
            }

            .navbar-menu .navbar-nav .nav-link {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 0.625rem 1.5rem;
                color: var(--vz-vertical-menu-item-color);
                font-size: 16px;
                font-family: 'Oswald', sans-serif;
            }

            .navbar-menu .navbar-nav .nav-sm .nav-link {
                padding: 0.55rem 1.5rem !important;
                color: var(--vz-vertical-menu-sub-item-color);
                white-space: pre-line;
                position: relative;
                font-size: .813rem;
                font-family: 'Oswald', sans-serif;
            }

            .menu-icon {
                font-size: 16px;
                line-height: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 28px;
                transition: transform 0.5s;
                margin-right: 10px;
                color: #6d8bb0;
            }
        </style>

        <body>
            <div id="layout-wrapper">
                @livewire('inc.header')
                <div class="app-menu navbar-menu">
                    @livewire('inc.sidebar')
                </div>
                <div class="vertical-overlay"></div>
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">VNPAY</h4>
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="/doc/cn1">TÀI LIỆU</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <div class="ribbon ribbon-primary ribbon-shape ">Tài khoản test
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
<pre class="form-control">
    #	Thông tin thẻ	Ghi chú
    1
    Ngân hàng: NCB
    Số thẻ: 9704198526191432198
    Tên chủ thẻ:NGUYEN VAN A
    Ngày phát hành:07/15
    Mật khẩu OTP:123456
    Thành công
    2
    Ngân hàng: NCB
    Số thẻ: 9704195798459170488
    Tên chủ thẻ:NGUYEN VAN A
    Ngày phát hành:07/15
    Thẻ không đủ số dư
    3
    Ngân hàng: NCB
    Số thẻ: 9704192181368742
    Tên chủ thẻ:NGUYEN VAN A
    Ngày phát hành:07/15
    Thẻ chưa kích hoạt
    4
    Ngân hàng: NCB
    Số thẻ: 9704193370791314
    Tên chủ thẻ:NGUYEN VAN A
    Ngày phát hành:07/15
    Thẻ bị khóa
    5
    Ngân hàng: NCB
    Số thẻ: 9704194841945513
    Tên chủ thẻ:NGUYEN VAN A
    Ngày phát hành:07/15
    Thẻ bị hết hạn
    6
    Loại thẻ quốc tếVISA (No 3DS)
    Số thẻ: 4456530000001005
    CVC/CVV: 123
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:12/26
    Email:test@gmail.com
    Địa chỉ:22 Lang Ha
    Thành phố:Ha Noi
    Thành công
    7
    Loại thẻ quốc tếVISA (3DS)
    Số thẻ: 4456530000001096
    CVC/CVV: 123
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:12/26
    Email:test@gmail.com
    Địa chỉ:22 Lang Ha
    Thành phố:Ha Noi
    Thành công
    8
    Loại thẻ quốc tếMasterCard (No 3DS)
    Số thẻ: 5200000000001005
    CVC/CVV: 123
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:12/26
    Email:test@gmail.com
    Địa chỉ:22 Lang Ha
    Thành phố:Ha Noi
    Thành công
    9
    Loại thẻ quốc tếMasterCard (3DS)
    Số thẻ: 5200000000001096
    CVC/CVV: 123
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:12/26
    Email:test@gmail.com
    Địa chỉ:22 Lang Ha
    Thành phố:Ha Noi
    Thành công
    10
    Loại thẻ quốc tếJCB (No 3DS)
    Số thẻ: 3337000000000008
    CVC/CVV: 123
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:12/26
    Email:test@gmail.com
    Địa chỉ:22 Lang Ha
    Thành phố:Ha Noi
    Thành công
    11
    Loại thẻ quốc tếJCB (3DS)
    Số thẻ: 3337000000200004
    CVC/CVV: 123
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:12/24
    Email:test@gmail.com
    Địa chỉ:22 Lang Ha
    Thành phố:Ha Noi
    Thành công
    12
    Loại thẻ ATM nội địaNhóm Bank qua NAPAS
    Số thẻ: 9704000000000018
    Số thẻ: 9704020000000016
    Tên chủ thẻ:NGUYEN VAN A
    Ngày phát hành:03/07
    OTP:otp
    Thành công
    12
    Loại thẻ ATM nội địaEXIMBANK
    Số thẻ: 9704310005819191
    Tên chủ thẻ:NGUYEN VAN A
    Ngày hết hạn:10/26
    Thành công
</pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card ribbon-box">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <div class="ribbon ribbon-primary ribbon-shape ">Lệnh tạo thanh toán
                                                    VNPAY
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
<pre class="form-control">
    public function create()
    {
        $vnp_TmnCode = "AHWX5MX0"; //Mã website tại VNPAY
        $vnp_HashSecret = "LMPIBTDLXYGA1K0RTK06SAEPKGW0V1LX"; //Chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = env('APP_URL') . "/cn2";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 10000 * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHashType=HMACSHA512&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
</pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                @livewire('inc.footer')

                        </div>
                    </div>

                    <script src="/template/public/themesbrand/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="/template/public/themesbrand/libs/simplebar/simplebar.min.js"></script>
                    <script src="/template/public/themesbrand/libs/node-waves/waves.min.js"></script>
                    <script src="/template/public/themesbrand/libs/feather-icons/feather.min.js"></script>
                    <script src="/template/public/themesbrand/js/pages/plugins/lord-icon-2.1.0.js"></script>
                    <script src="/template/public/themesbrand/js/plugins.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/datatables/jquery.dataTables.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/jszip/jszip.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/pdfmake/pdfmake.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/pdfmake/vfs_fonts.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
                    <script
                        src="/template/public/AdminLTE3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                    <link rel="stylesheet" href="/template/public/AdminLTE3/plugins/codemirror/codemirror.css">
                    <link rel="stylesheet" href="/template/public/AdminLTE3/plugins/codemirror/theme/monokai.css">
                    <script src="/template/public/themesbrand/libs/sweetalert2/sweetalert2.min.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/codemirror.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/css/css.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/xml/xml.js"></script>
                    <script src="/template/public/AdminLTE3/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
                    <script src="/template/public/themesbrand/js/app.js"></script>
                    <script
                        type="text/javascript">CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo1"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo2"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo3"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo4"), { mode: "htmlmixed", theme: "monokai" }); CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo5"), { mode: "htmlmixed", theme: "monokai" }); new ClipboardJS(".copy"); function copy() { cuteToast({ type: "success", message: "Đã sao chép vào bộ nhớ tạm", timer: 5000 }); }</script>
        </body>

    </div>

</div>
