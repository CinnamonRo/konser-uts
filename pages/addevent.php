<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/input.css">
    <title>Document</title>
</head>

<body>
    <div className="min-w-screen min-h-screen flex items-center justify-center">
        <div className="w-full max-w-xs">
            <form
                className="shadow-md rounded px-8 pt-6 pb-8 mb-4 bg-light-teal"
                onSubmit={handleSubmit}>
                <p className="text-center text-white text-lg font-bold">
                    Add New Event
                </p>
                <div className="mb-3">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Nama Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_nama"
                        type="text"
                        placeholder="Nama Event"
                        name="event_nama"
                        value={eventData.event_nama}
                        onChange={handleChange}
                        required />
                </div>

                <div className="mb-3">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Lokasi Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_lokasi"
                        type="text"
                        placeholder="Lokasi Event"
                        name="event_lokasi"
                        value={eventData.event_lokasi}
                        onChange={handleChange}
                        required />
                </div>

                <div className="mb-3">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Tanggal Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_tanggal"
                        type="date"
                        name="event_tanggal"
                        value={eventData.event_tanggal}
                        onChange={handleChange}
                        required />
                </div>

                <div className="mb-3">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Jam Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_jam"
                        type="time"
                        name="event_jam"
                        value={eventData.event_jam}
                        onChange={handleChange}
                        required />
                </div>

                <div className="mb-3">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Harga Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_harga"
                        type="number"
                        placeholder="Harga Event"
                        name="event_harga"
                        value={eventData.event_harga}
                        onChange={handleChange}
                        required />
                </div>

                <div className="mb-3">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Deskripsi Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_deskripsi"
                        type="text"
                        placeholder="Deskripsi Event"
                        name="event_deskripsi"
                        value={eventData.event_deskripsi}
                        onChange={handleChange}
                        required />
                </div>

                <div className="mb-6">
                    <label className="block text-gray-700 text-sm font-bold mb-2">
                        Poster Event<sup className="text-red-500">*</sup>
                    </label>
                    <input
                        className="focus:border-sky-300 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="event_image"
                        type="file"
                        name="event_image"
                        accept="image/*"
                        onChange={handleImageChange}
                        required />
                </div>

                <div className="flex items-center justify-center">
                    <button
                        className="bg-lm-teal text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Create
                    </button>
                </div>
            </form>
            <p className="text-center text-gray-500 text-xs">
                &copy;2024 Kelompok Bahagia
            </p>
        </div>
    </div>
</body>

</html>