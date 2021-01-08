<div class="min-h-screen w-52 bg-gray-900"> <!--sidebar start-->
    <div class="fixed w-52 min-h-full py-7 flex flex-col bg-white text-brand-gray-light text-sm" >
        <div class="flex-1">
            <div class="w-3/4 m-auto mb-8"><img src="img/dashboard-logo.png" alt="Dashboard logo"></div>
            <div class="group flex mb-8 items-center w-3/4 m-auto">
                <div class="mr-3 group-focus:text-blue-700"><img src="img/dashboard-icon.png" alt="Dashboard icon"></div>
                <a href="dashboard.html" class="bg-white group-focus:text-blue-500">Dashboard</a>
            </div>
            <div class="flex <?=$wallet ?> items-center w-3/4 m-auto mb-8">
                <div class="mr-3"><img src="img/wallet.png" alt="Wallet icon"> </div>
                <a href="wallet.html">Wallet</a>
            </div>
            <div class="flex <?php echo $deposit ?> items-center mb-8 w-3/4 m-auto">
                <div class="mr-3"><img src="img/deposit.png" alt="Deposit icon"></div>
                <a href="deposit.html">Deposit</a>
            </div>
            <div class="flex items-center mb-8 w-3/4 m-auto">
                <div class="mr-3"><img src="img/withdrawal.png" alt="Withdrawal icon"></div>
                <a href="withdraw.html">Withdrawal</a>
            </div>
            <div class="flex items-center mb-8 w-3/4 m-auto">
                <div class="mr-3"><img src="img/profile.png" alt="Profile icon"></div>
                <a class="" href="profile.html">Profile</a>
            </div>
        </div>
        <div class="flex w-3/4 m-auto">
            <div class="mr-3"><img src="img/signout.png" alt="Sign out"></div>
            <p class="text-red-700">Sign Out</p>
        </div>
    </div>
</div> <!--sidebar end-->