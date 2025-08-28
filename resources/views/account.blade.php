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
<body class="bg-(--background-color) flex flex-col items-center justify-center w-full min-h-screen">

    <section class="flex flex-col border-2 border-(--primary-color) rounded-xl px-16 py-10 justify-center text-center font-extrabold text-xl w-full px-2 mx-8 md:w-1/2 ">
        <h1 class="mb-3 pb-2">Hello {{ $member_name ?? 'Guest' }}</h1>
        <div class="container flex flex-col gap-3 justify-center items-center text-base font-normal">
            <div class="container items-center justify-center  flex flex-row gap-2">
                <div class="container text-left flex flex-row w-full bg-(--secondary-color) px-3 py-2 rounded-lg border-2 border-(--primary-color)">
                    <div class="w-[120px]">Name:</div>
                    <div>{{ $member_name ?? 'Guest' }}</div>
                </div>
                <div class="container text-left flex flex-row w-full bg-(--secondary-color) px-3 py-2 rounded-lg border-2 border-(--primary-color)">
                    <div class="w-[120px]">Phone:</div>
                    <div class="">{{ $member_phone ?? '08xxxxxxxxxx' }}</div>
                </div>
            </div>
            <div class="container items-center justify-center  flex flex-row gap-2">
                <div class="container text-left flex flex-row w-full bg-(--secondary-color) px-3 py-2 rounded-lg border-2 border-(--primary-color)">
                    <div class="w-[120px]">Email:</div>
                    <div>{{ $member_email ?? 'Guest@domain.com' }}</div>
                </div>
                <div class="container text-left flex flex-row w-full bg-(--secondary-color) px-3 py-2 rounded-lg border-2 border-(--primary-color)">
                    <div class="w-[120px]">Address:</div>
                    <div class="">{{ $member_address ?? 'st.Jonas' }}</div>
                </div>
            </div>
        </div>    
    </section>

    <div class="flex flex-row gap-3 my-10">
        <a href="{{ route('account.edit', session('member_id')) }}" class="w-[200px] bg-(--background-color) text-center border-2 border-(--primary-color) rounded-sm text-(--primary-color) font-normal text-lg hover:bg-(--primary-color) hover:text-(--background-color) hover:font-bold cursor-pointer">EDIT</a>
        <form action="{{ route('account.destroy', session('member_id')) }}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit" class="w-[200px] bg-(--background-color) border-2 border-(--primary-color) rounded-sm text-(--primary-color) font-normal text-lg hover:bg-(--primary-color) hover:text-(--background-color) hover:font-bold cursor-pointer">
                <i class="fas fa-trash"></i> DELETE ACCOUNT
            </button>
        </form>
        <form action="{{ route('account.logout') }}" method="POST">
        @csrf
            <button type="submit" class="w-[200px] bg-(--background-color) border-2 border-(--primary-color) rounded-sm text-(--primary-color) font-normal text-lg hover:bg-(--primary-color) hover:text-(--background-color) hover:font-bold cursor-pointer">
                LOGOUT
            </button>
        </form>
    </div>

    <a href="/main" class="container fixed top-3 left-3 text-(--primary-color) hover:text-red-900 font-normal text-lg w-fit cursor-pointer">
        Kembali ke Main Page?
    </a>
    
</body>
</html>
