<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-80">
        <form>
            <div class="mb-4">
                <label for="username" class="block text-gray-700 mb-2">Username:</label>
                <input type="text" id="username" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter username">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 mb-2">Password:</label>
                <input type="password" id="password" class="w-full p-2 border border-gray-300 rounded" placeholder="Enter password">
            </div>
            <button type="submit" class="w-full bg-gray-700 text-white p-2 rounded hover:bg-gray-600">
                LOGIN
            </button>
        </form>
    </div>
</body>
</html>
