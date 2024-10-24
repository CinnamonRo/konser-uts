<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/input.css">
</head>

<body>
    <div class=" min-w-screen min-h-screen flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-light-teal">
                <p class="text-center text-white text-lg font-bold">
                    New Password
                </p>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Username <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300  shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username"
                        type="text"
                        placeholder="Username"
                        required />
                </div>

                <div class="mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Password <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300  shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        type="password"
                        placeholder="******************"
                        required />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Re-Password <sup class="text-red-500">*</sup>
                    </label>
                    <input
                        class="focus:border-sky-300  shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="repassword"
                        type="password"
                        placeholder="******************"
                        required />
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-lm-teal text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Create
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2024 Kelompok Bahagia
            </p>
        </div>
    </div>
</body>

</html>