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
                                        <h4 class="mb-sm-0">NẠP TIỀN NGÂN HÀNG</h4>
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
                                                <div class="ribbon ribbon-primary ribbon-shape ">Lệnh SQL tạo bảng transactions
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
                                                        <pre  class="form-control">
CREATE TABLE `transactions` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `bank_brand_name` VARCHAR(50) DEFAULT NULL,
    `account_number` VARCHAR(20) DEFAULT NULL,
    `transaction_date` DATETIME DEFAULT NULL,
    `amount_out` DECIMAL(15,2) DEFAULT NULL,
    `amount_in` DECIMAL(15,2) DEFAULT NULL,
    `accumulated` DECIMAL(15,2) DEFAULT NULL,
    `transaction_content` TEXT,
    `reference_number` VARCHAR(50) DEFAULT NULL,
    `code` VARCHAR(20) DEFAULT NULL,
    `sub_account` VARCHAR(20) DEFAULT NULL,
    `bank_account_id` VARCHAR(20) DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT NULL,
    `updated_at` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
                                                <div class="ribbon ribbon-primary ribbon-shape ">Hàm thêm transactions
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                        <pre  class="form-control">
public function fetchTransactionsFromApi()
{
    $url = 'https://my.sepay.vn/userapi/transactions/list';
    $accountNumber = '0966579217';
    $limit = 10;
    $token = 'LS2IMDZ7SD0NHYOGA3PORUBITHMP5RNRSWDKU4XMEK15GVAPX6QABCJIDH0JYHXG';

    // Khởi tạo cURL
    $ch = curl_init();

    // Thiết lập các tùy chọn cho cURL
    curl_setopt($ch, CURLOPT_URL, $url . '?account_number=' . $accountNumber . '&limit=' . $limit);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token,
    ]);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    // Thực hiện yêu cầu cURL
    $response = curl_exec($ch);

    // Kiểm tra lỗi cURL
    if (curl_errno($ch)) {
        return; // Xử lý lỗi nếu cần
    }

    // Đóng cURL
    curl_close($ch);

    // Giải mã phản hồi JSON
    $data = json_decode($response, true);

    // Kiểm tra nếu phản hồi thành công
    if (isset($data['status']) && $data['status'] === 200 && $data['messages']['success']) {
        $transactions = $data['transactions'] ?? [];

        foreach ($transactions as $transaction) {
            try {
                // Kiểm tra xem giao dịch đã tồn tại chưa
                if (!\App\Models\Transaction::where('reference_number', $transaction['reference_number'])->exists()) {
                    // Tạo một giao dịch mới
                    \App\Models\Transaction::create([
                        'id' => $transaction['id'], // Giả định rằng API trả về id
                        'bank_brand_name' => $transaction['bank_brand_name'], // Thay đổi key nếu cần
                        'account_number' => $transaction['account_number'], // Thay đổi key nếu cần
                        'transaction_date' => $transaction['transaction_date'], // Thay đổi key nếu cần
                        'amount_out' => $transaction['amount_out'], // Thay đổi key nếu cần
                        'amount_in' => $transaction['amount_in'], // Thay đổi key nếu cần
                        'accumulated' => $transaction['accumulated'], // Thay đổi key nếu cần
                        'transaction_content' => $transaction['transaction_content'], // Thay đổi key nếu cần
                        'reference_number' => $transaction['reference_number'], // Thay đổi key nếu cần
                        'code' => $transaction['code'] ?? null, // Thay đổi key nếu cần
                        'sub_account' => $transaction['sub_account'] ?? null, // Thay đổi key nếu cần
                        'bank_account_id' => $transaction['bank_account_id'], // Thay đổi key nếu cần
                    ]);
                } else {
                    // Giao dịch đã tồn tại, có thể ghi log hoặc xử lý theo cách khác
                    dd('Transaction already exists: ' . $transaction['id']);

                }
            } catch (\Exception $e) {
                // Xử lý lỗi nếu cần
                dd('Error saving transaction: ' . $e->getMessage());
            }
        }
    }
}
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
                                                <div class="ribbon ribbon-primary ribbon-shape ">NẠP TIỀN NGÂN HÀNG TÀI
                                                    LIỆU
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <label for="codeMirrorDemo" class="form-label">Tạo command
                                                        transactions</label>
                                                    <div>
                                                        <pre  class="form-control">

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; // Import mô hình User

class Transactions extends Command
{
    protected $signature = 'app:transactions';
    protected $description = 'Command to log hello world every 5 seconds and update user balance';

    public function handle()
    {
        $userId = 2; // Thay đổi ID người dùng nếu cần
        $user = User::find($userId); // Lấy người dùng

        if (!$user) {
            $this->error('User not found!');
            return;
        }

        while (true) {
            $this->info('Hello world!');
            $this->fetchTransactionsFromApi();
            sleep(5); // Ngủ 5 giây
        }
    }
    public function fetchTransactionsFromApi()
    {
        $url = 'https://my.sepay.vn/userapi/transactions/list';
        $accountNumber = '0966579217';
        $limit = 10;
        $token = 'LS2IMDZ7SD0NHYOGA3PORUBITHMP5RNRSWDKU4XMEK15GVAPX6QABCJIDH0JYHXG';

        // Khởi tạo cURL
        $ch = curl_init();

        // Thiết lập các tùy chọn cho cURL
        curl_setopt($ch, CURLOPT_URL, $url . '?account_number=' . $accountNumber . '&limit=' . $limit);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $token,
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        // Thực hiện yêu cầu cURL
        $response = curl_exec($ch);

        // Kiểm tra lỗi cURL
        if (curl_errno($ch)) {
            return; // Xử lý lỗi nếu cần
        }

        // Đóng cURL
        curl_close($ch);

        // Giải mã phản hồi JSON
        $data = json_decode($response, true);

        // Kiểm tra nếu phản hồi thành công
        if (isset($data['status']) && $data['status'] === 200 && $data['messages']['success']) {
            $transactions = $data['transactions'] ?? [];

            foreach ($transactions as $transaction) {
                try {
                    // Kiểm tra xem giao dịch đã tồn tại chưa
                    if (!\App\Models\Transaction::where('reference_number', $transaction['reference_number'])->exists()) {
                        // Tạo một giao dịch mới
                        \App\Models\Transaction::create([
                            'id' => $transaction['id'], // Giả định rằng API trả về id
                            'bank_brand_name' => $transaction['bank_brand_name'], // Thay đổi key nếu cần
                            'account_number' => $transaction['account_number'], // Thay đổi key nếu cần
                            'transaction_date' => $transaction['transaction_date'], // Thay đổi key nếu cần
                            'amount_out' => $transaction['amount_out'], // Thay đổi key nếu cần
                            'amount_in' => $transaction['amount_in'], // Thay đổi key nếu cần
                            'accumulated' => $transaction['accumulated'], // Thay đổi key nếu cần
                            'transaction_content' => $transaction['transaction_content'], // Thay đổi key nếu cần
                            'reference_number' => $transaction['reference_number'], // Thay đổi key nếu cần
                            'code' => $transaction['code'] ?? null, // Thay đổi key nếu cần
                            'sub_account' => $transaction['sub_account'] ?? null, // Thay đổi key nếu cần
                            'bank_account_id' => $transaction['bank_account_id'], // Thay đổi key nếu cần
                        ]);
                    } else {
                        // Giao dịch đã tồn tại, có thể ghi log hoặc xử lý theo cách khác
                        // dd('Transaction already exists: ' . $transaction['id']);

                    }
                } catch (\Exception $e) {
                    // Xử lý lỗi nếu cần
                    // dd('Error saving transaction: ' . $e->getMessage());
                }
            }
        }
    }
}

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
                                                <div class="ribbon ribbon-primary ribbon-shape ">Cấu hình Pusher
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
                                                        <pre  class="form-control">
BROADCAST_CONNECTION=pusher
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=1954604
PUSHER_APP_KEY=ef34e040856c80f99af3
PUSHER_APP_SECRET=65c43fa0d14ea04fec0a
PUSHER_APP_CLUSTER=ap1
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
                                                <div class="ribbon ribbon-primary ribbon-shape ">Cấu hình Pusher
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">

                                                    <div>
                                                        <pre class="form-control">
   &lt;script src="https://js.pusher.com/8.2.0/pusher.min.js"&gt;&lt;/script&gt;
   &lt;script&gt;
     // Enable Pusher logging - don't include this in production
     Pusher.logToConsole = true;
     var pusher = new Pusher('ef34e040856c80f99af3', {
       cluster: 'ap1',
       encrypted: true
     });
     var channel = pusher.subscribe('my-channel');
     channel.bind('my-event', function(data) {
       alert(JSON.stringify(data));
     });
   &lt;/script&gt;
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
                                                <div class="ribbon ribbon-primary ribbon-shape ">Cấu hình Event
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
                                                        <pre class="form-control">
&lt;?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CN1_MyEvent implements ShouldBroadcastNow
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;

  public function __construct($message)
  {
    $this->message = ['message' => '123123123'];
  }

  public function broadcastOn()
  {
      return ['my-channel'];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
  public function broadcastWith(): array
  {
      return  $this->message;
  }
}

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
                                                <div class="ribbon ribbon-primary ribbon-shape ">Lệnh chạy tự động
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <div>
<pre class="form-control">
php artisan app:transactions
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
