<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/styles/style.css" rel="stylesheet">
    <title>Home</title> 
</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-4xl gap-5 mx-auto my-5 py-5 place-items-center overflow-x-auto">
        <div class="max-w-sm rounded overflow-hidden shadow-lg hover:-translate-y-2 ease-linear duration-100">
            <!-- nanti ini di loop-->
            <div class="relative">
                <img
                    class="w-full h-64 object-cover"
                    src={images}
                    alt="Sunset in the mountains" />
                <div class="absolute bottom-0 w-full px-3 py-2 items-center flex justify-between bg-black bg-opacity-75">
                    <div class="flex">
                        <img src={location} alt="location logo" class="w-6" />
                        <p class="text-white">location</p>
                    </div>
                    <div class="px-5 py-1 bg-sky-500 border rounded-2xl">
                        <p class="font-semibold text-white">price</p>
                    </div>
                </div>
            </div>
            <div class="px-2 py-2">
                <div class="flex items-center justify-start gap-4">
                    <p>event date</p> |<p>event time</p>
                </div>
                <p class="font-bold">Event Name</p>
                <p class="text-gray-500 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                    sollicitudin a odio ac ornare. Nulla ut augue posuere tellus
                    sollicitudin tincidunt et id orci. Duis consectetur, orci eu
                    ultricies tincidunt, nulla justo placerat tortor, sit amet dapibus
                    tellus libero at magna. Donec in nunc at sem ultrices luctus eget
                    interdum.
                </p>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg hover:-translate-y-2 ease-linear duration-100">
            <div class="relative">
                <img
                    class="w-full h-64 object-cover"
                    src={images}
                    alt="Sunset in the mountains" />
                <div class="absolute bottom-0 w-full px-3 py-2 items-center flex justify-between bg-black bg-opacity-75">
                    <div class="flex">
                        <img src={location} alt="location logo" class="w-6" />
                        <p class="text-white">location</p>
                    </div>
                    <div class="px-5 py-1 bg-sky-500 border rounded-2xl">
                        <p class="font-semibold text-white">price</p>
                    </div>
                </div>
            </div>
            <div class="px-2 py-2">
                <div class="flex items-center justify-start gap-4">
                    <p>event date</p> |<p>event time</p>
                </div>
                <p class="font-bold">Event Name</p>
                <p class="text-gray-500 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                    sollicitudin a odio ac ornare. Nulla ut augue posuere tellus
                    sollicitudin tincidunt et id orci. Duis consectetur, orci eu
                    ultricies tincidunt, nulla justo placerat tortor, sit amet dapibus
                    tellus libero at magna. Donec in nunc at sem ultrices luctus eget
                    interdum.
                </p>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg hover:-translate-y-2 ease-linear duration-100">
            <div class="relative">
                <img
                    class="w-full h-64 object-cover"
                    src={images}
                    alt="Sunset in the mountains" />
                <div class="absolute bottom-0 w-full px-3 py-2 items-center flex justify-between bg-black bg-opacity-75">
                    <div class="flex">
                        <img src={location} alt="location logo" class="w-6" />
                        <p class="text-white">location</p>
                    </div>
                    <div class="px-5 py-1 bg-sky-500 border rounded-2xl">
                        <p class="font-semibold text-white">price</p>
                    </div>
                </div>
            </div>
            <div class="px-2 py-2">
                <div class="flex items-center justify-start gap-4">
                    <p>event date</p> |<p>event time</p>
                </div>
                <p class="font-bold">Event Name</p>
                <p class="text-gray-500 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                    sollicitudin a odio ac ornare. Nulla ut augue posuere tellus
                    sollicitudin tincidunt et id orci. Duis consectetur, orci eu
                    ultricies tincidunt, nulla justo placerat tortor, sit amet dapibus
                    tellus libero at magna. Donec in nunc at sem ultrices luctus eget
                    interdum.
                </p>
            </div>
        </div>
    </div>
</body>

</html>