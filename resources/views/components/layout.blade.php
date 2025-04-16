<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="px-10">
        <nav class="flex justify-between items-center py-4">
            <div>
                <a href="">
                    Logo
                </a>
            </div>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
                
            </div>
            <div>
                <a href="">Post a job</a></div>
        </nav>
        <main>{{ $slot }}</main>
    </div>
</body>
</html>
