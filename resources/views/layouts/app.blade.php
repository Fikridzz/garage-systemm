<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <title>Speed Garage</title>

</head>

<body class="container mx-auto mt-10 mb-10 max-w-3xl">
    @yield('content')

    <footer class="bg-gray-900 h-24 flex items-center justify-center text-gray-600 text-sm">
        <p>&copy; {{ date('Y') }} Speed Garage. All rights reserved.</p>
    </footer>
</body>

</html>
