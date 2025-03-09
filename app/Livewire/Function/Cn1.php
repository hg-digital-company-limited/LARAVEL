<?php

namespace App\Livewire\Function;

use App\Models\Transaction;
use Livewire\Component;

class Cn1 extends Component
{
    public $transactions;
    public function mount()
    {
        $this->fetchTransactionsFromApi();
        $this->loadTransactions();
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
    public function loadTransactions()
    {
        // Lấy tất cả giao dịch từ cơ sở dữ liệu
        $this->transactions = Transaction::all();
    }

    public function render()
    {
        return view('livewire.function.cn1');
    }
}
