<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-V8HGULRsPnt-XZzw"></script>
</head>

<body>
    <button id="pay-button"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Borrow!</button>

    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            window.snap.pay('{{ $ajukanPinjam->snapToken }}', {
                onSuccess: function (result) {
                    /* You may add your own implementation here */
                    window.location.href = "{{ route('paySuccess', $ajukanPinjam->Pinjam_ID) }}";
                    alert("payment success!"); console.log(result);
                },
                onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                onError: function (result) {
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                onClose: function () {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>