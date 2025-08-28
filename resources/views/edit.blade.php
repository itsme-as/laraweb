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
<body class="bg-(--background-color) justify-center items-center min-h-screen flex flex-col">
    <h1 class="text-4xl font-extrabold underline text-(--primary-color) mb-3">Edit Account</h1>
    <form method="POST" action="{{ route('account.update', $member->id) }}" class="text-base flex flex-col border-2 border-(--primary-color) rounded-xl p-5 gap-3 mb-2">
        @csrf
        @method('PUT')
        <div class="flex flex-row ">
            <label class="w-[75px] font-bold underline text-(--primary-color) py-1">Name:</label>
            <input class="border-2 border-(--primary-color) bg-(--secondary-color) px-3 py-1 rounded-lg" type="text" name="name" value="{{ $member->name }}" required><br>
        </div>
        <div class="flex flex-row">
            <label class="w-[75px] font-bold underline text-(--primary-color) py-1">Email:</label>
            <input class="border-2 border-(--primary-color) bg-(--secondary-color) px-3 py-1 rounded-lg" type="email" name="email" value="{{ $member->email }}" required><br>
        </div>
        <div class="flex flex-row">
            <label class="w-[75px] font-bold underline text-(--primary-color) py-1">Phone:</label>
            <input class="border-2 border-(--primary-color) bg-(--secondary-color) px-3 py-1 rounded-lg" type="text" name="phone" value="{{ $member->phone }}" required><br>
        </div>
        <div class="flex flex-row">
            <label class="w-[75px] font-bold underline text-(--primary-color) py-1">Address:</label>
            <input class="border-2 border-(--primary-color) bg-(--secondary-color) px-3 py-1 rounded-lg" type="text" name="address" value="{{ $member->address }}"><br>
        </div>
        <button class="text-(--primary-color) border-2 border-(--primary-color) rounded-lg px-3 py-1 hover:bg-(--primary-color) hover:text-(--background-color) hover:font-bold cursor-pointer" type="submit">Save</button>
    </form>
    <a class="text-lg hover:text-red-900" href="{{ url('/account') }}">Back</a>
</body>
</html>