<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">

    <title>Wallet</title>
</head>
<body>
    <div class="flex bg-bgColor text-brand-gray-medium text-sm">
        <?php $wallet = "text-blue-800 font-bold"; ?>
        <?php include("sidebar.php") ?>
        <div class="flex-1">
            <div class="flex flex-col">
                <header>
                    <?php include("navbar.php") ?>
                </header>
                <div class="main-box flex flex-col overflow-y-auto">
                    <main class="flex-1">
                        <div class="mt-18 mx-5">
                            <div class="flex my-8">      
                                <div class="w-1/4 p-4 mr-3 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Total balance</p>
                                        <p class="text-blue-700 font-bold">0.00BTC</p>
                                    </div>
                                    <div class="bg-brand-green-light rounded-full p-2"><img src="img/balance.png" alt="Balance"></div>
                                </div>
                                <div class="w-1/4 p-2 mr-3 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Total earnings</p>
                                        <p class="text-blue-700 font-bold">0.00BTC</p>
                                    </div>
                                    <div class="bg-red-100 rounded-full p-2"><img src="img/earnings.png" alt="Balance"></div>
                                </div>
                                <div class="w-1/4 p-2 mr-3 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Deposits</p>
                                        <p class="text-blue-700 font-bold">0.00BTC</p>
                                    </div>
                                    <div class="bg-purple-200 rounded-full p-2"><img src="img/deposits.png" alt="Balance"></div>
                                </div>
                                <div class="w-1/4 p-2 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Withdrawals</p>
                                        <p class="text-blue-700 font-bold">0.00USD</p>
                                    </div>
                                    <div class="bg-yellow-100 rounded-full p-2"><img src="img/withdrawals.png" alt="Balance"></div>
                                </div>
                            </div>
                            <div class="mb-10">
                                <button class="rounded bg-white border border-blue-700 text-blue-700 px-4 py-2 mr-4">&minus; Withdraw</button>
                                <button class="rounded bg-blue-700 text-white px-4 py-2">&plus; Deposit</button>
                            </div>
                            <div class="mb-10 bg-white rounded shadow-lg">
                                <p class="mb-4 pl-2 py-3 border-b border-borderLine font-bold text-brand-gray-dark">Transaction History</p>
                                <div class="px-3">
                                    <table class="w-full px-3 table-fixed">
                                        <thead>
                                        <tr class="text-left bg-bgColor text-brand-gray-dark font-bold">
                                            <th class="w-1/5 pl-2 py-3">Reference ID</th>
                                            <th class="w-1/5">Type</th>
                                            <th class="w-1/5">Method</th>
                                            <th class="w-1/5">Amount</th>
                                            <th class="w-1/5">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody class="mx-4">
                                        <tr class="border-b border-borderLine">
                                            <td class="pl-2 py-3">FT-20141202-459557</td>
                                            <td class="text-green-400">Deposit</td>
                                            <td>BTC</td>
                                            <td>0.1225</td>
                                            <td class="text-green-400">Completed</td>
                                        </tr>
                                        <tr class="border-b border-borderLine">
                                            <td class="pl-2 py-3">FT-20141202-459586</td>
                                            <td class="text-green-400">Deposit</td>
                                            <td>Etherum</td>
                                            <td>4.3000</td>
                                            <td class="text-yellow-400">Pending</td>
                                        </tr>
                                        <tr class="border-b border-borderLine">
                                            <td class="pl-2 py-3">FT-20141202-459555</td>
                                            <td class="text-green-400">Deposit</td>
                                            <td>BTC</td>
                                            <td>0.5225</td>
                                            <td class="text-yellow-400">Pending</td>
                                        </tr>
                                        <tr class="border-b border-borderLine">
                                            <td class="pl-2 py-3">FT-20141202-459557</td>
                                            <td class="text-red-500">Withdrawal</td>
                                            <td>Bank transfer</td>
                                            <td>$5225.99</td>
                                            <td class="text-green-400">Completed</td>
                                        </tr>
                                        <tr class="">
                                            <td class="pl-2 py-3">FT-20141202-459557</td>
                                            <td class="text-red-500">Withdrawal</td>
                                            <td>BTC</td>
                                            <td>$725.25</td>
                                            <td class="text-green-400">Completed</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
                    <footer>      
                        <?php include("footer.php") ?>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>