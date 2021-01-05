<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="flex bg-bgColor">
        <?php include("sidebar.php") ?>
        <div class="flex-1">
            <header>
                <?php include("navbar.php") ?> 
            </header>
            <main>
                <div class="mt-18">
                    <div class="h-72 flex justify-center items-center">
                        <div>
                            <div class="flex justify-center mb-3"><img src="img/profile-photo.png" class="h-44" alt="Profile photo"></div>
                            <p class="text-center text-lg text-blue-700 font-semibold mb-2">Efosa Uyi-Idahor</p>
                            <p class="text-center text-xs text-brand-gray-medium">Package: <span class="font-semibold text-brand-gray-dark">Starter</span> Date Created: <span class="font-semibold text-brand-gray-dark">12th July 2020</span></p>
                        </div>
                    </div>
                    <div class="mx-5 text-sm text-brand-gray-medium">
                        <div class="bg-white my-8 rounded shadow-md">
                            <p class="px-3 mb-4 py-3 border-b border-blue-100 font-bold text-brand-gray-dark">Profile</p>
                            <div class="mx-3">
                                <form action="">
                                    <div class="flex mb-4">
                                        <div class="w-1/2 mr-3">
                                            <label class="block mb-1 font-semisemibold" for="name">Fullname</label>
                                            <input class="py-2 w-full border border-blue-100 rounded outline-none focus:ring-1 ring-gray-500" type="text" id="name">
                                        </div>
                                        <div class="w-1/2">
                                            <label class="block mb-1 font-semisemibold" for="number">Phone number</label>
                                            <div class="py-2 flex border border-blue-100 rounded outline-none focus-within:ring-1 ring-gray-500">
                                                <select name="" id="" class="rounded outline-none">
                                                    <option value="">+234</option>
                                                    <option value="">+229</option>
                                                    <option value="">+44</option>
                                                </select>
                                                <div class="items-stretch border-l border-blue-100"></div>
                                                <input class="w-full outline-none" type="number" id="number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex mb-8">
                                        <div class="w-1/2 mr-3">
                                            <label class="block mb-1 font-semisemibold" for="country">Country</label>
                                            <select class="w-full border py-2 border-blue-100 rounded outline-none focus:ring-1 ring-gray-500"  name="country" id="country">
                                                <p>Nigeria</p>
                                                <p>France</p>
                                                <p>Luxemborg</p>
                                                <p>Benin</p>
                                            </select>
                                        </div>
                                        <div class="w-1/2">
                                            <label class="block mb-1 font-semisemibold" for="code">Postal code</label>
                                            <input class="w-full border py-2 border-blue-100 rounded outline-none focus:ring-1 ring-gray-500" type="number" id="code">
                                        </div>
                                    </div>
                                    <button class="bg-blue-700 mb-6 px-6 py-2 text-white rounded font-semibold">Update info</button>
                                </form>
                            </div>
                        </div>
                        <div class="bg-white mb-8 rounded shadow-md">
                            <p class="mb-4 px-3 py-3 border-b border-blue-100 font-bold text-brand-gray-dark">Reset password</p>
                            <div class="mx-3">
                                <form action="">
                                    <div class="flex mb-3">
                                        <div class="w-1/2 mr-3">
                                            <label class="block mb-1 font-semibold" for="oldpass">Old Password</label>
                                            <input class="w-full border py-2 border-blue-100 rounded outline-none focus:ring-1 ring-gray-500" type="text" name="oldpass">
                                        </div>
                                        <div class="w-1/2">
                                            <label class="block mb-1 font-semibold" for="newpass">New Password</label>
                                            <input class="w-full border py-2 border-blue-100 rounded outline-none focus:ring-1 ring-gray-500" type="text" name="newpass">
                                        </div>
                                    </div>
                                    <div class="flex mb-8">
                                        <div class="w-1/2">
                                            <label class="block mb-1 font-semibold" for="confirmpass">Confirm Password</label>
                                            <input class="w-full border py-2 border-blue-100 rounded outline-none focus:ring-1 ring-gray-500" type="text" name="confirmpass">
                                        </div>
                                    </div>
                                    <button class="bg-blue-700 mb-6 px-6 py-2 text-white rounded font-semibold">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>                 
                </div>
            </main>
            <footer>
                <?php include("footer.php") ?>
            </footer>
        </div>
    </div>
</body>
</html>