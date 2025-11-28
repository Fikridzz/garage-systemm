<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')

    <title>Student raport</title>

</head>

<body class="h-screen bg-gray-100 flex justify-center items-center">

    <div class="bg-white p-14 w-[500px] rounded-lg shadow-md text-center">
        <h1 class="mb-10 text-2xl font-bold">Login</h1>

        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <input
                class="shadow-sm appearance-none border w-full px-4 py-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300 mb-4"
                type="email" name="email" id="email" placeholder="Email" required>
            <input
                class="shadow-sm appearance-none border w-full px-4 py-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300"
                type="password" name="password" id="password" placeholder="Password" required>

            <div class="flex items-center space-x-2 mt-2 mb-4">
                <input type="checkbox" name="remember" class="rounded-sm border border-slate-400">
                <label for="remember">Remember me</label>
            </div>

            <button type="submit"
                class="w-[100%] bg-white rounded-md mt-4 px-4 py-2 text-center font-medium text-blue-600 shadow-sm ring-1 ring-blue-600 hover:bg-slate-50 h-10 mb-2">Login</button>

            <a class="text-blue-500 underline hover:text-blue-700" href="{{ route("register.create") }}">Buat akun</a>

        </form>
    </div>

</body>

</html>
