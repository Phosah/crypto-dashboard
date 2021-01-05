<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Withdraw</title>
</head>
<body>
    <div class="flex text-brand-gray-medium">
        <?php include("sidebar.php") ?>
        <div class="flex-1">
            <header>
                <?php include("navbar.php") ?>
            </header>
            <main>
                <div class="mt-18 mx-5">
                    <h1 class="my-8 text-brand-gray-dark font-bold">Withdraw</h1>
                    <form action="">
                        <label class="block mb-3 text-brand-gray-dark text-xs font-bold" for="btc">Amount:</label>
                        <div class="w-3/4 mb-3 focus-within:ring-1 ring-gray-500 flex bg-white border border-inputBorder-dark rounded">
                            <select name="" id="" class="pl-2 rounded text-xs outline-none" >
                                <option value="">BTC</option>
                                <option value="">Litecoin</option>
                            </select>
                            <div class="border-l border-inputBorder-dark"></div>
                            <input type="text" class="py-3 pl-2 text-xs w-full outline-none rounded-md" placeholder="0.00">
                        </div>
                        <div class="w-1/2 mb-4 bg-blue-100 rounded border-l-4 border-blue-500 text-blue-500 "><p class="px-3 py-3 text-xs">The monetary equivalent would be deposited to your account</p></div>
                        <div class="mb-4">
                            <label for="" class="block mb-3 font-bold text-brand-gray-dark text-xs">Account Name:</label>
                            <input type="text" class="w-3/4 pl-4 py-3 border border-inputBorder-dark rounded bg-white text-xs outline-none focus:ring-1 ring-gray-500" placeholder="Input name">
                        </div>
                        <div class="mb-4">
                            <label for="" class="block mb-3 text-brand-gray-dark font-bold text-xs">Account Number:</label>
                            <input type="text" class="w-3/4 pl-4 py-3 border border-inputBorder-dark rounded bg-white text-xs outline-none focus:ring-1 ring-gray-500" placeholder="Enter card Number">
                        </div>
                        <div class="flex justify-between w-3/4 mb-8">
                            <div class="w-2/3 mr-3">
                                <label for="" class="block mb-3 text-xs text-brand-gray-dark font-bold">Bank Name</label>
                                <input type="text"  class="w-full py-3 pl-4 border border-inputBorder-dark rounded bg-white text-xs outline-none focus:ring-1 ring-gray-500" placeholder="Enter bank name">
                            </div>
                            <div class="w-1/3">
                                <label for="" class="block mb-3 text-brand-gray-dark text-xs font-bold">Account Type</label>
                                <select name="" id=""  class="w-full py-3 pl-4 border border-inputBorder-dark rounded bg-white text-xs outline-none focus:ring-1 ring-gray-500" placeholder="select account type">
                                    <option value="">Savings</option>
                                    <option value="">Current</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
            <footer>
                <?php include("footer.php") ?>
            </footer>
        </div>
    </div>
</body>
</html>