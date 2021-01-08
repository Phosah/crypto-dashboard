<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="custom.css">    
    <title>Deposit</title>
</head>
<body>
    <div class="flex bg-bgColor text-brand-gray-medium">
        <?php $deposit = "text-blue-800 font-bold"; ?>
        <?php include("sidebar.php") ?>
        <div class="flex-1">
            <div class="flex flex-col">
                <header>
                    <?php include("navbar.php") ?>
                </header>
                <div class="main-box flex flex-col overflow-y-auto">
                    <main class="flex-1">
                        <div class="mt-18 mx-5">
                            <h1 class="my-8 text-brand-gray-dark font-bold">Deposit</h1>
                            <div class="w-1/2 mb-8 flex">
                                <select name="" id="" class="w-1/3 mr-2 py-2 pl-2 bg-white border border-inputColor shadow-sm rounded text-xs font-semibold focus:ring-1 ring-gray-500 outline-none">
                                    <option value="">BTC</option>
                                    <option value="">Ethereum</option>
                                    <option value="">BTC Cash</option>
                                </select>
                                <input type="text" placeholder="amount" class="w-2/3 py-2 pl-2 bg-white border border-inputColor shadow-sm rounded text-xs font-semibold focus:ring-1 ring-gray-500 outline-none">
                            </div>
                            <p class="mb-2 text-xs italic">Click button to upload a screenshot of your deposit to the stated address</p>
                            <div class="w-2/4 h-44 mb-6 flex items-center justify-center bg-white border border-dashed border-inputColor">
                                <button class="py-2 px-3 bg-blue-700 text-white font-semibold text-xs rounded">Upload receipt</button>
                            </div>
                            <div class="w-max mb-8 bg-red-200 rounded border-l-4 border-red-600 text-red-400"><p class="px-3 py-3 text-xs">Please send BTC to the following address <span class="text-red-500 font-bold">3678GH8bavnujh67889MN8</span></p></div>
                            <button class="mb-2 py-2 px-4 text-white font-semibold text-xs bg-blue-700 border border-brand-gray-light rounded">Confirm</button>
                            <p class="mb-5 text-xs italic">Payments would be verified by Admin and approved once confirmed in no time</p>
                        </div>
                    </main>
                    <?php include("footer.php") ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>