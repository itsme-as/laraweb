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
    <div id="popup-acc" style="display: flex; position: fixed; top: 0; left:0; z-index: 299; " class="items-center justify-center container flex w-full min-h-screen bg-zinc-800 items-center md:justify-center">
        <div class="container flex flex-col items-center justify-center w-full h-full bg-(--primary-color) rounded-lg p-5 md:w-1/2 md:h-3/4">
            <h1 class="text-xl text-(--background-color) font-extrabold text-center my-2 md:text-3xl md:my-6">Type your registered account here</h1>
            <div class="flex flex-col items-center justify-center w-full h-full rounded-lg">
                <form onsubmit="accFunction(event)">
                    <fieldset class="flex flex-col w-full items-center justify-center border-3 border-(--background-color) rounded-lg px-10 py-2 md:w-7/10 md:h-3/4">
                        <legend class="text-center text-(--background-color) text-xl md:text-2xl my-2 px-3 font-bold">Login</legend>
                        <input id="emailAcc" class="rounded-lg w-[300px] pl-3 my-2 bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50" type="email" placeholder="Type your registered email" required>
                        <input id="phoneAcc" class="rounded-lg w-[300px] pl-3 my-2 bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50" type="tel" placeholder="Type your registered phone number" required>
                        <button class="bg-(--background-color) w-full md:w-[300px] my-3 rounded-lg h-[40px] font-extrabold text-(--primary-color) text-xl border-2 border-(--background-color) hover:bg-(--primary-color) hover:text-(--background-color) md:text-2xl md:w-7/10 md:mx-10 md:flex md:text-center md:justify-center md:items-center cursor-pointer">LOGIN</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <!--Header start> -->
    <section id="navbar" class="fixed sticky top-0 left-0 bg-transparent backdrop-blur-md md:bg-transparent md:backdrop-blur-md z-99 min-h-[20px] border-b-1 border-slate-400 " onscroll="navFunction()">
        <nav class="absolute sticky top-0 left-0" >
            <div class="container justify-between flex">
            <div class="container w-full pl-5 py-2 md:flex">
                <h1 class="text-2xl font-extrabold text-(--primary-color)">AesE-learn</h1>
                <p class="underline text-sm text-black font-bold pt-0 -mt-2.5 md:mt-0 md:pt-2 md:pl-2">by AliefShiddiq</p>
            </div>
            
            <div class="flex hidden pt-3 md:block">
                <ul class="gap-1 flex pr-10 ">
                    <a class="w-[120px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#theory"><li >Theory</li></a>
                    <a class="w-[120px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#question-bank"><li >Question Bank</li></a>
                    <a class="w-[120px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#practice"><li >Practice</li></a>
                </ul>
            </div>

            <!-- Ini mobiel nav -->
            <div id="hamburger-navigation" onclick="hamburgerNav()" class="absolute block right-2 w-fit justify-right pt-4 pr-3 h-fit cursor-pointer items-center hover:opacity-70 md:hidden">
                <div id="bar-hamburger-1" class="absolute right-2 top-3 w-[25px] h-[4px] bg-(--primary-color) my-1 transition-all duration-300"></div>
                <div id="bar-hamburger-2" class="absolute right-2 top-5 w-[25px] h-[4px] bg-(--primary-color) my-1 transition-all duration-300"></div>
                <div id="bar-hamburger-3" class="absolute right-2 top-7  w-[25px] h-[4px] bg-(--primary-color) my-1 transition-all duration-300"></div>
            </div>


            <div id="mobile-nav" class="hidden absolute right-0 top-14.5 float-right z-199 bg-(--primary-color) w-[240px] h-[150px] rounded-b-xl pl-6 py-5 md:hidden transition-all duration-300">
                <ul class="flex flex-col gap-3">
                    <a href="#theory" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>Theory</li></a>
                    <a href="#question-bank" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>Question Bank</li></a>
                    <a href="#practice" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>Practice</li></a>
                </ul>
            </div>

            <div id="scroll-percentage" class=" fixed z-399 h-[5px] top-[55px] md:top-[45px] left-0 bg-(--primary-color) transition-all duration-100"></div>
        </nav>
    </section>
    <!-- Header end -->

    <!-- Theory section -->
    <section id="theory" class="px-12 pt-16 pb-8 bg-(--background-color) md:items-center justify-center w-full min-h-screen h-full bg-(--background-color)">
        <div class="reltive min-h-screen md:items-center md:flex">
            <div class="flex flex-col w-full md:pl-20 md:-mt-30">
                <h1 class="text-3xl md:text-[60px] font-extrabold text-(--primary-color)">Theory</h1>
                <div>
                    <p class="text-lg md:text-2xl">Contents</p>
                    <ol class="list-decimal list-inside text-base md:text-lg">
                        <a class="hover:text-(--primary-color) hover:underline" href="#limit"><li>Calculus for Limit</li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Calculus for Differential</li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Calculus for Integration</li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Vector</li></a>
                    </ol>
                </div>
            </div>
            <img src="assets/logo.png" class="flex -mr-10 md:mr-20 md:scale-160 w-[300px] h-[300px] mx-auto my-5" alt="logo">
        </div>
    </section>
    <!-- Limit -->
    <section id="limit" class="relative bg-(--secondary-color) min-h-screen w-full md:flex">
        <div class="px-10 py-16 text-justify text-base">
            <h2 class="text-2xl text-(--primary-color) font-extrabold ">Calculus for Limit</h2>
            <p class="text-lg font-bold">Definition</p>
            <p>In mathematics, the limit of a function describes the value that a function approaches as the input (or variable) gets closer to a certain point.</p>
            <p>Formal Definition (Intuitive):</p>
            <blockquote class="pl-8 my-3 border-l-2">A limit is the value that a function f(x) gets closer to as the 
            x approaches a specific number.</blockquote>
            <p class="text-lg font-bold">Example</p>
            <p><img src="assets/theory/limit1.png" class="w-1/2 h-auto md:w-1/5"></p>
            <p>When we have a function f(x) given then we gets value of f(x) closer with x=2 so we'll get the value of f(2) </p>
            <h1 class="text-[80px] font-black">WILL BE FINISHED SOON HEHEHE</h1>
        </div>
        <div>

        </div>
    </section>

    <Section id="question-bank" class="px-12 pt-16 pb-8 items-center justify-center">
        <div class="flex flex-col w-full md:pl-20 md:mt-30">
                <h1 class="text-3xl md:text-[60px] font-extrabold text-(--primary-color)">Question Bank</h1>
                <div>
                    <p class="text-lg md:text-2xl">Contents</p>
                    <ol class="list-decimal list-inside text-base md:text-lg">
                        <a class="hover:text-(--primary-color) hover:underline" href="#basic-c"><li>Basic Calculus</li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#advanced-c"><li>Advanced Calculus</li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#basic-v"><li>Basic Vector</li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#advanced-v"><li>Advanced Vector</li></a>
                    </ol>
                </div>
            </div>
            <img src="assets/logo.png" class="flex -mr-10 md:mr-20 md:scale-160 w-[300px] h-[300px] mx-auto my-5" alt="logo">
    </Section>

    <div class="relative md:flex">
        <section id="basic-c" class="px-12 pt-16 pb-8 min-h-screen items-center justify-center">
            <div class="border-t-2 border-(--primary-color) pt-5 w-full flex flex-col">
                <p class="text-xl font-bold">Basic Calculus</p>
                <ol class="list-decimal list-inside text-base md:text-lg">
                    <li class="py-4">If we have a function <span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-1.png"></span>, so what is the value of <span class="inline-block align-middle"><img class="h-8" src="assets/question-bank/basic-1b.png"></span> ? </li>
                    <li class="py-4">What is the value of <span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-2.png"></span></li>
                    <li class="py-4"><span class="inline-block align-middle"><img class="h-18" src="assets/question-bank/basic-3.png"></span></li>
                    <li class="py-4">Value of <span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-4.png"></span></li>
                    <li class="py-4">Find the derivative of <span class="inline-block align-middle"><img class="h-5" src="assets/question-bank/basic-5.png"></span> ?</li>
                    <li class="py-4">What is the <strong>dy/dx</strong> of <span class="inline-block align-middle"><img class="h-6" src="assets/question-bank/basic-6.png"></span> ?</li>
                    <li class="py-4">If <span class="inline-block align-middle"><img class="h-7" src="assets/question-bank/basic-7.png"></span>, so f'(x) ?</li>
                    <li class="py-4"><span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-8.png"></span></li>
                    <li class="py-4"><span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-9.png"></span></li>
                    <li class="py-4"><span class="inline-block align-middle"><img class="h-12" src="assets/question-bank/basic-10.png"></span></li>
                </ol>
            </div>
        </section>

        <section id="advanced-c" class="px-12 pt-16 pb-8 min-h-screen items-center justify-center">
            <div class="border-t-2 border-(--primary-color) pt-5 w-full flex flex-col">
                <p class="text-xl font-bold">Advanced Calculus</p>
                <ol class="list-decimal list-inside text-base md:text-lg">
                    <li>If we have a function <span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-1.png"></span>, so what is the value of <span class="inline-block align-middle"><img class="h-8" src="assets/question-bank/basic-1b.png"></span> ? </li>
                </ol>
            </div>
        </section>
    </div>

    <div class="relative md:flex">
        <section id="basic-v" class="px-12 pt-16 pb-8 min-h-screen items-center justify-center">
            <div class="border-t-2 border-(--primary-color) pt-5 w-full flex flex-col">
                <p class="text-xl font-bold">Basic Vector</p>
                <ol class="list-decimal list-inside text-base md:text-lg">
                    <li>If we have a function <span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-1.png"></span>, so what is the value of <span class="inline-block align-middle"><img class="h-8" src="assets/question-bank/basic-1b.png"></span> ? </li>
                </ol>
            </div>
        </section>

        <section id="advanced-v" class="px-12 pt-16 pb-8 min-h-screen items-center justify-center">
            <div class="border-t-2 border-(--primary-color) pt-5 w-full flex flex-col">
                <p class="text-xl font-bold">Advanced Vector</p>
                <ol class="list-decimal list-inside text-base md:text-lg">
                    <li>If we have a function <span class="inline-block align-middle"><img class="h-10" src="assets/question-bank/basic-1.png"></span>, so what is the value of <span class="inline-block align-middle"><img class="h-8" src="assets/question-bank/basic-1b.png"></span> ? </li>
                </ol>
            </div>
        </section>
    </div>

    <Section id="practice" class="px-12 pt-16 pb-8 bg-(--primary-color) items-center justify-center">
        <div class="bg-(--background-color) py-10 px-6 rounded-xl border-b-8 border-r-8">
            <div class="flex flex-col w-full md:pl-20 md:mt-30">
                <h1 class="text-3xl md:text-[60px] font-extrabold text-(--primary-color)">Practice</h1>
                <div>
                    <p class="text-lg md:text-2xl">Contents</p>
                    <ol class="list-decimal list-inside text-base md:text-lg">
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Level D (Calculus & Vector) &#128540; </li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Level C (Calculus & Vector) &#128517; </li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Level B (Calculus & Vector) &#128528; </li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Level A (Calculus & Vector) &#128534; </li></a>
                        <a class="hover:text-(--primary-color) hover:underline" href="#"><li>Level S (Calculus & Vector) &#128520; </li></a>
                    </ol>
                </div>
            </div>
            <img src="assets/logo.png" class="flex -mr-10 md:mr-20 md:scale-160 w-[300px] h-[300px] mx-auto my-5" alt="logo">
        </div>
    </Section>
</body>
</html>