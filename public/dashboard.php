<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">
    
    <title>Dashboard</title>
</head>
<body>
    <div class="flex bg-bgColor text-brand-gray-medium text-sm">
        <?php include("sidebar.php") ?>
        <div class="flex-1">
            <div class="flex flex-col">
                <header class="">
                    <?php include("navbar.php") ?>
                </header>
                <div class="main-box flex flex-col overflow-y-auto">
                    <main class="flex-1">
                        <div class="mt-18 px-5 ">
                            <div class="flex justify-between mt-8 mb-6">
                                <p class="font-bold text-brand-gray-dark text-base">Welcome!</p>
                                <button class="py-2 px-3 rounded bg-blue-700 text-white font-semibold">Make Deposit</button>
                            </div>
                            <div class="flex mb-6">
                                <div class="w-1/4 p-4 mr-3 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Package</p>
                                        <p class="text-red-500 font-bold">Essential</p>
                                    </div>
                                    <div class="bg-brand-green-light rounded-full p-2"><img src="img/balance.png" alt="Balance"></div>
                                </div>
                                <div class="w-1/4 p-4 mr-3 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Total Earnings</p>
                                        <p class="text-blue-700 font-bold">0.00345 BTC</p>
                                    </div>
                                    <div class="p-2 bg-purple-200 rounded-full"><img src="img/deposits.png" alt="Deposit"></div>
                                </div>
                                <div class="w-1/4 p-4 mr-3 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="font-bold">Deposits</p>
                                        <p class="text-blue-700 font-bold">0.124BTC</p>
                                    </div>
                                    <div class="p-2 bg-red-100 rounded-full"><img src="img/earnings.png" alt="Earning"></div>
                                </div>
                                <div class="w-1/4 p-4 flex items-center justify-between bg-white rounded shadow-md">
                                    <div>
                                        <p class="mb-1 font-bold">Withdrawals</p>
                                        <p class="text-blue-700 font-bold">0.00USD</p>
                                    </div>
                                    <div class="p-2 bg-yellow-100 rounded-full"><img src="img/withdrawals.png" alt="Balance"></div>
                                </div>
                            </div>
                            <div class="w-1/2 mb-2 bg-blue-100 rounded border-l-4 border-blue-500 text-blue-500 "><p class="px-3 py-3 text-xs">Earnings in the last 24 hours: <span class="font-bold">0.00345 BTC</span></p></div>
                            <p class="mb-8 text-xs">Daily <span class="text-brand-gray-dark font-bold">earning</span> percentage is <span class="text-brand-gray-dark font-bold">1%</span></p>
                            <div class="mb-4 flex items-center">
                                <div class="mr-2"><img class="h-4" src="img/refresh.png" alt="Refresh button"></div>
                                <h3 class="text-brand-gray-dark text-sm font-bold">Recent Activity</h3>
                            </div>
                            <div class="w-1/2 h-10 mb-2 py-3 pl-4 rounded flex items-center border border-blue-200">
                                <div class="mr-3"><img class="h-3" src="img/create.png" alt="Create icon"></div>
                                <p>Created account</p>
                            </div>
                            <div class="w-1/2 h-10 mb-10 py-2 pl-4 rounded flex items-center border border-blue-200">
                                <div class="mr-3"><img class="h-3" src="img/create.png" alt="Create icon"></div>
                                <p>Deposited BTC</p>
                            </div>
                        </div>
                    </main>
                    <footer class="">
                        <?php include("footer.php") ?>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>