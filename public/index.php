<?php
session_start();
$session = $_SESSION['login_time'];

if (!$session) {
    header('Location: login');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Info</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% relative">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 relative">
            <div class="w-full bg-indigo-600 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-3xl font-bold text-white">
                        Informasi Login
                    </h1>
                    <hr class="bg-indigo-800 border-0 h-1 rounded-xl">

                    <h2 class="text-xl text-white">Waktu login: <?php echo $_SESSION['login_time'] ?></h2>

                    <hr class="bg-indigo-800 border-0 h-1 rounded-xl">
                    <a href="action/action-logout.php">
                        <button class="w-full text-white bg-sky-500 hover:bg-indigo-500 ease-in duration-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4 md:mt-6">
                            Log out
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include '_footer.php'
        ?>
    </section>
</body>

</html>