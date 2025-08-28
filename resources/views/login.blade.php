<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="/js/script.js"></script>
    <link rel="icon" href="assets/logo.png">
    <title>AesE-learn</title>

    <style>
        :root{
            --primary-color:#116779;
            --background-color:#F1F1F2;
            --secondary-color:#d1f1f9;
        }
    </style>
</head>
<body onscroll="scrollPercentage()" class="items-center w-full">
    <!-- Section login -->
    <div style="display: flex; position: fixed; top: 0; left:0; z-index: 299; " class="items-center justify-center container flex w-full min-h-screen bg-zinc-800 items-center md:justify-center">
        <div class="container flex flex-col items-center justify-center w-full h-full bg-(--primary-color) rounded-lg p-5 md:w-1/2 md:h-3/4">
            <h1 class="text-xl text-(--background-color) font-extrabold text-center my-2 md:text-3xl md:my-6">Type your registered account here</h1>
            <div class="flex flex-col items-center justify-center w-full h-full rounded-lg">
                <form method="POST" action="/login">
                    @csrf
                    <fieldset class="flex flex-col w-full items-center justify-center border-3 border-(--background-color) rounded-lg px-10 py-2 md:w-7/10 md:h-3/4">
                        <legend class="text-center text-(--background-color) text-xl md:text-2xl my-2 px-3 font-bold">Login</legend>
                        <input name="email" id="emailAcc" class="@error('email') is-invalid @enderror rounded-lg w-[300px] pl-3 my-2 bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50" type="email" placeholder="Type your registered email" required autofocus value="{{ old('email') }}">
                        @error('email')
                            <div class="text-red-600 mb-2">{{ $message }}</div>
                        @enderror
                        <input name="phone" id="phoneAcc" class="rounded-lg w-[300px] pl-3 my-2 bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50" type="tel" placeholder="Type your registered phone number" required>
                        <button type="submit" class="bg-(--background-color) w-full md:w-[300px] my-3 rounded-lg h-[40px] font-extrabold text-(--primary-color) text-xl border-2 border-(--background-color) hover:bg-(--primary-color) hover:text-(--background-color) md:text-2xl md:w-7/10 md:mx-10 md:flex md:text-center md:justify-center md:items-center cursor-pointer">LOGIN</button>
                    </fieldset>
                </form>                
            </div>
        </div>
    </div>
    
    
</body>
</html>