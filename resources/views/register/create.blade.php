<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')

    <title>Student raport</title>

</head>

<body class="h-screen bg-gray-100 flex justify-center items-center">

    <div class="bg-white p-14 w-[500px] rounded-lg shadow-md text-center">
        <h1 class="mb-10 text-2xl font-bold">Register</h1>

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <input
                class="shadow-sm appearance-none border w-full px-4 py-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300 mb-4"
                type="name" name="name" id="name" placeholder="Nama" required>
            <input
                class="shadow-sm appearance-none border w-full px-4 py-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300 mb-4"
                type="email" name="email" id="email" placeholder="Email" required>
            <input
                class="shadow-sm appearance-none border w-full px-4 py-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300 mb-8"
                type="password" name="password" id="password" placeholder="Password" required>

            <button type="submit"
                class="w-full bg-white rounded-md mt-4 px-4 py-2 text-center font-medium text-green-600 shadow-sm ring-1 ring-green-600 hover:bg-slate-50 h-10">Register</button>
        </form>

    </div>
</body>
