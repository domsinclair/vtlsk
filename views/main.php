<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <!-- Link to the compiled Tailwind CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>vtlsk_module/css/vtlsk.css">
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-blue-600 text-white p-6">
        <h1 class="text-4xl font-bold">Welcome to Trongate + Tailwind CSS</h1>
        <p class="text-lg mt-2">This is a basic view rendered by Trongate using Tailwind CSS.</p>
    </header>

    <main class="p-8">
        <!-- A dynamically styled card with Tailwind classes -->
        <div class="bg-white shadow-md rounded-lg p-6 max-w-md mx-auto">
            <h2 class="text-xl font-semibold text-gray-800">Hello, World!</h2>
            <p class="mt-4 text-gray-600">
                This is a simple example of a card component styled with Tailwind classes. Check whether it has been added to the compiled CSS.
            </p>
            <button class="mt-6 px-4 py-2 bg-green-500 text-white font-medium rounded shadow hover:bg-green-600">
                Click Me
            </button>
        </div>

        <!-- A Tailwind feature not typically preloaded -->
        <div class="mt-10 text-center">
            <p class="text-xs tracking-widest text-gray-500 uppercase">
                Tailwind is working if you see this properly formatted text!
            </p>
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-300 p-4 text-center">
        <p>&copy; <?php echo date('Y'); ?> Trongate + Tailwind CSS</p>
    </footer>

</body>
</html>