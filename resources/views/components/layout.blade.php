<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
    @vite(['resources/css/app.css'])
</head>
<body class = "bg-blue-900 text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center bg-grey-200 py-4 border-b border-white/40">
            <div class="font-bold">
                <a href="/">
                    Jobs.io
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">post a job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px]">
            {{ $slot }}
        </main>


    </div>
</body>
</html>