<?php
session_start();
$session = $_SESSION['login_time'];

if ($session) {
    header('Location: index');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% relative">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 relative">
            <div class="w-full bg-indigo-600 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-3xl font-bold text-white">
                        Login
                    </h1>
                    <hr class="bg-indigo-800 border-0 h-1 rounded-xl">
                    <form class="space-y-4 md:space-y-6" action="action/action-login" method="post" autocomplete="off">
                        <div>
                            <label for="nomor_hp" class="block mb-2 text-sm font-medium text-white">Nomor HP</label>
                            <input type="text" name="nomor_hp" id="nomor_hp" class="bg-gray-50 text-gray-900 rounded-lg block w-full p-2.5 focus:outline-none" placeholder="08123456789" required="" autocomplete="off" inputmode="numeric">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <input type="password" name="password" id="password" class="bg-gray-50 text-gray-900 rounded-lg block w-full p-2.5 focus:outline-none" placeholder="••••••••••" required="" autocomplete="new-password">
                        </div>
                        <hr class="bg-indigo-800 border-0 h-1 rounded-xl">
                        <button type="submit" class="w-full text-white bg-sky-500 hover:bg-indigo-500 ease-in duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include '_footer.php'
        ?>
    </section>
</body>

</html>