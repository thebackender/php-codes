<!doctype html>
<html>
<head>
</head>
<body>
    <!--https://qiwi.com/p2p-admin/transfers/invoice-->
    <!--https://b2b.qiwi.com/payin/#acquiring-->
    <p>ЧТобы получить товар, вам нужно сделать оплату через Киви</p>
    <button onclick="qiwi()">Оплатить</button>
    <a href="https://oplata.qiwi.com/form?invoiceUid=54f25878-2659-4ed7-9ce0-b6c92d922651">Оплатить</a>
    <script>
        function qiwi(){
            window.open('https://oplata.qiwi.com/form?invoiceUid=54f25878-2659-4ed7-9ce0-b6c92d922651');
        }
    </script>
</body>
</html>