<!doctype html>
<html>
<head>
    <title>Оплата за услугу</title>
</head>
<body>
    <!--https://qiwi.com/p2p-admin/transfers/invoice-->
    <!--https://b2b.qiwi.com/payin/#acquiring-->
    <p>ЧТобы получить товар, вам нужно сделать оплату через Киви</p>
    <button onclick="qiwi()">Оплатить</button>
    <a href="https://oplata.qiwi.com/form?invoiceUid=54f25878-2659-4ed7-9ce0-b6c92d922651">Оплатить</a>
    <?php
        require 'BillPayments.php';
        const SECRET_KEY = 'eyJ2ZXJzaW9uIjoicmVzdF92MyIsImRhdGEiOnsibWVyY2hhbnRfaWQiOjUyNjgxMiwiYXBpX3VzZXJfaWQiOjcxNjI2MTk3LCJzZWNyZXQiOiJmZjBiZmJiM2UxYzc0MjY3YjIyZDIzOGYzMDBkNDhlYjhiNTnONPININONPN090MTg5Z**********************';

        /** @var \Qiwi\Api\BillPayments $billPayments */
        $billPayments = new BillPayments(SECRET_KEY);
        $billId = '893794793973';
        $fields = [
        'amount' => 1.00,
        'currency' => 'RUB',
        'comment' => 'test',
        'expirationDateTime' => '2018-03-02T08:44:07+03:00',
        'email' => 'example@mail.org',
        'account' => 'client4563'
        ];

        /** @var \Qiwi\Api\BillPayments $billPayments */
        $response = $billPayments->createBill($billId, $fields);

        print_r($response);
    ?>
    <script>
        function qiwi(){
            window.open('https://oplata.qiwi.com/form?invoiceUid=54f25878-2659-4ed7-9ce0-b6c92d922651');
        }
    </script>
</body>
</html>