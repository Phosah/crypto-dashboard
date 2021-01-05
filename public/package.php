<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Package</title>
</head>
<body>
    <header>
        <?php include("navbar.php") ?>
    </header>
    <main>
        <div class="flex bg-brand-gray-light">
            <?php include("sidebar.php") ?>
            <div class="w-full">
                <div class="mx-5">
                    <h1 class="my-4 font-semibold">Select Package</h1>
                    <div class="flex mb-8">
                        <div class="w-1/3 mr-4 border border-blue-700 px-5 py-4 text-center">
                            <div class="mb-4 flex justify-center"><img src="img/essential.png" alt="Essential"></div>
                            <h1 class="mb-4 font-semibold">Essential</h1>
                            <h3 class="mb-3">Earning Rate</h3>
                            <p class="mb-3">0.0000000004 BTC/min</p>
                            <p class="mb-4">0.0000005760 BTC/day</p>
                            <button class="rounded bg-blue-700 text-white px-3 py-2">Buy for 0.009 BTC</button>
                        </div>
                        <div class="w-1/3 mr-4 text-white bg-blue-700 px-5 py-4 text-center">
                            <div class="mb-4 flex justify-center"><img src="img/standard.png" alt="Standard"></div>
                            <h1 class="mb-4 font-semibold">Standard</h1>
                            <h3 class="mb-3">Earning Rate</h3>
                            <p class="mb-3">0.0000000004 BTC/min</p>
                            <p class="mb-4">0.0000005760 BTC/day</p>
                            <button class="rounded bg-white text-blue-700 px-3 py-2">Free</button>
                        </div>
                        <div class="w-1/3 border border-blue-700 px-5 py-4 text-center">
                            <div class="mb-4 flex justify-center"><img src="img/premium.png" alt="Premium"></div>
                            <h1 class="mb-4 font-semibold">Premium</h1>
                            <h3 class="mb-3">Earning Rate</h3>
                            <p class="mb-3">0.0000000004 BTC/min</p>
                            <p class="mb-4">0.0000005760 BTC/day</p>
                            <button class="rounded bg-blue-700 text-white px-3 py-2">Buy for 0.009 BTC</button>
                        </div>
                    </div>
                    <?php include("footer.php") ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>