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
                    <a class="w-[90px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#home"><li >Home</li></a>
                    <a class="w-[90px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#programs"><li >Programs</li></a>
                    <a class="w-[90px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#join-us"><li >Join Us!</li></a>
                    <a class="w-[90px] rounded-xl border-2 border-(--primary-color) text-center text-(--primary-color) mx-2 hover:bg-(--primary-color) hover:text-(--background-color) cursor-pointer" href="#about"><li >About</li></a>  
                    <a href="/main" class="w-[200px] rounded-xl border-2 border-black-900 bg-(--primary-color) text-center text-(--background-color) mx-2 hover:bg-(--background-color) hover:text-(--primary-color) cursor-pointer">Have an account?</a>
                </ul>
            </div>

            <!-- Ini mobiel nav -->
            <div id="hamburger-navigation" onclick="hamburgerNav()" class="absolute block right-2 w-fit justify-right pt-4 pr-3 h-fit cursor-pointer items-center hover:opacity-70 md:hidden">
                <div id="bar-hamburger-1" class="absolute right-2 top-3 w-[25px] h-[4px] bg-(--primary-color) my-1 transition-all duration-300"></div>
                <div id="bar-hamburger-2" class="absolute right-2 top-5 w-[25px] h-[4px] bg-(--primary-color) my-1 transition-all duration-300"></div>
                <div id="bar-hamburger-3" class="absolute right-2 top-7  w-[25px] h-[4px] bg-(--primary-color) my-1 transition-all duration-300"></div>
            </div>


            <div id="mobile-nav" class="hidden absolute right-0 top-14.5 float-right z-199 bg-(--primary-color) w-[240px] h-[220px] rounded-b-xl pl-6 py-5 md:hidden transition-all duration-300">
                <ul class="flex flex-col gap-3">
                    <a href="#home" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>Home</li></a>
                    <a href="#programs" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>Programs</li></a>
                    <a href="#join-us" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>Join Us!</li></a>
                    <a href="#about" class="bg-(--secondary-color) px-4 border-1 rounded-xl w-[200px] hover:bg-white hover:text-(--primary-color)"><li>About</li></a>
                    <a href="/main" class="w-[200px] rounded-xl border-2 border-black-900 bg-(--primary-color) text-left text-(--background-color) px-4 hover:bg-(--background-color) hover:text-(--primary-color) cursor-pointer">Have an account?</a>
                </ul>
            </div>

            <div id="scroll-percentage" class=" fixed z-399 h-[5px] top-[55px] md:top-[45px] left-0 bg-(--primary-color) transition-all duration-100"></div>
        </nav>
    </section>
    <!-- Header end -->


    <!-- Main section start -->
    <section id="home" class="relative items-center md:flex ">
        <div class="items-center pt-8 px-5 w-full min-h-[250px] md:pl-20">
            <h1 class="w-full text-lg text-black font-bold md:text-xl">Hello, Welcome to</h1>
            <h1 class="w-full text-2xl text-(--primary-color) font-black md:text-3xl ">AesE-learn</h1>
            <p class=" text-justify w-full mt-3 text-base md:pr-25">This is a math e-learning for everyone who want to learn math and anyone who need a practice in a math</p>
        </div>
        <div class="w-full h-screen min-h-[400px] justify-center items-center md:pt-16">
            <img src="assets/logo.png" alt="AesE-learn" class="absolute w-full max-w-[450px] justify-self-center h-auto z-10 md:scale-90 md:w-2/5 ">
            <svg class="block top-0 left-0 -z-99 md:scale-80 max-w-[450px] justify-self-center " viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="var(--secondary-color)" d="M46.5,-69.6C61.2,-62.9,74.8,-51.6,79.5,-37.4C84.2,-23.3,80,-6.2,76.5,10.2C72.9,26.6,69.9,42.3,60.3,50.7C50.6,59,34.3,60,19.2,63.7C4.1,67.4,-9.7,73.8,-22.2,71.8C-34.6,69.9,-45.6,59.5,-56.8,48.3C-67.9,37,-79.2,25,-84.8,10C-90.4,-5.1,-90.4,-23.2,-82.5,-36.6C-74.7,-49.9,-58.9,-58.6,-43.9,-65.2C-28.8,-71.8,-14.4,-76.4,0.7,-77.6C15.9,-78.7,31.7,-76.4,46.5,-69.6Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>
    <!-- Main setion end -->


    <!-- Program section start -->
    <section id="programs" class=" bg-(--secondary-color) min-h-screen w-full justify-between relative pb-16">
        <h1 class="text-xl  text-center font-extrabold pt-16 pb-12 md:text-2xl ">Programs</h1>
        <div class="container justify-between px-3 md:flex md:gap-3">
            <div class="items-center bg-(--background-color) rounded-lg w-full h-120 text-center text-lg px-4 py-6 mb-3">
                <h2 class="mb-4 font-bold md:text-xl">Theory</h2>
                <p class="text-base mb-8 md:text-lg">We have some math theory in this e-learning, here are the list for our given theory: 
                </br>(will updated for adding theory)</p>
                <ol class="text-sm text-left list-decimal pl-6 md:text-base">
                    <li>Calculus for Limit</li>
                    <li>Calculus for Differential</li>
                    <li>Calculus for Integration</li>
                    <li>Vector</li>
                </ol>
            </div>
            <div class="items-center bg-(--background-color) rounded-lg w-full h-120 text-center text-lg px-4 py-6 mb-3">
                <h2 class="mb-4 font-bold md:text-xl">Question Bank</h2>
                <p class="text-base mb-8 md:text-lg">Here are some question for the theory we given above.</p>
                <ol class="text-sm text-left list-decimal pl-6 md:text-base">
                    <li>Basic Calculus</li>
                    <li>Advanced Calculus</li>
                    <li>Basic Vector</li>
                    <li>Advanced Vector</li>
                </ol>
            </div>
            <div class="items-center bg-(--background-color) rounded-lg w-full h-120 text-center text-lg px-4 py-6 mb-3">
                <h2 class="mb-4 font-bold md:text-xl">Practice</h2>
                <p class="text-base mb-8 md:text-lg">After finished practices with question bank, here are the practice test for you</p>
                <ol class="text-sm text-left list-decimal pl-6 md:text-base">
                    <li>Level D (Calculus & Vector)</li>
                    <li>Level C (Calculus & Vector)</li>
                    <li>Level B (Calculus & Vector)</li>
                    <li>Level A (Calculus & Vector)</li>
                    <li>Level S (Calculus & Vector)</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Program section end -->


    <!-- Join section start -->
    <section id="join-us" class="min-h-screen items-center pt-32 pb-16 px-5 justify-center">
        <h1 class="text-center font-extrabold text-2xl mb-3 md:mb-10 md:text-3xl">Join us!</h1>
        <div class="container items-center justify-between flex flex-col md:flex-row gap-3 ">
            @foreach($bundles as $bundle)
            <div class="container py-4 px-3 bg-(--secondary-color) rounded-xl w-full min-h-80 max-h-fit text-center items-center content-center md:h-fit md:w-1/2 md:justify-self-center md:rounded-3xl">
                <h2 class="underline font-bold text-xl md:text-3xl">{{ $bundle->title }}</h2>
                <p class="py-2 min-h-35 md:text-xl">{{ $bundle->description }}</p>
                <p class="text-sm line-through">{{ $bundle->normal_price }}</p>
                <p class="text-lg font-bold md:text-3xl">{{ $bundle->selling_price }}</p>
            </div>
            @endforeach
        </div>

        <div class="container bg-(--secondary-color) py-10 w-full mt-5 justify-center">
            <form action="{{ route('home.store') }}" method="POST"  class="flex flex-col px-2 py-2 justify-center">
                @csrf
                <fieldset class="w-full gap-3 border-2 border-(--primary-color) justify-center px-2 py-2 md:w-1/2 self-center">
                    <legend class="text-center text-lg md:text-2xl">Join us now!</legend>
                    <div class="md:flex flex-row justify-center ">
                        <div class="md:w-1/3 flex-col md:mx-4 ">
                            <input name="name" id="name" class=" rounded-lg pl-3 my-2 w-full bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50 " type="text" placeholder="Your name">
                            <input name="email" id="email" class=" rounded-lg pl-3 my-2 w-full bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50 " type="email" placeholder="Your email">
                        </div>
                        <div class="md:w-1/3 flex-col md:mx-4">
                            <input name="phone" id="phone" class=" rounded-lg pl-3 my-2 w-full bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50 " type="tel" pattern="[0-9]{12}" placeholder="Your phone number">
                            <input name="address" id="address" class=" rounded-lg pl-3 my-2 w-full bg-(--background-color) border-b-2 border-(--primary-color) placeholder:text-(--primary-color) placeholder:opacity-50 " type="text" placeholder="Your address">
                        </div>
                    </div>
                    <div class="md:flex flex-row justify-center ">
                        <input id="class" class="mx-4 font-bold text-base" type="radio" name="class" value="TheoryOnly"> Theory Only
                        <input id="class" class="mx-4 font-bold text-base" type="radio" name="class" value="TWQ"> Theory with Question Bank
                        <input id="class" class="mx-4 font-bold text-base" type="radio" name="class" value="PracticeOnly"> Practice Only
                        <input id="class" class="mx-4 font-bold text-base" type="radio" name="class" value="FullBundle"> Full Bundle
                    </div>
                    <button type="submit" class="bg-(--primary-color) w-full my-3 rounded-lg h-[40px] justify-self-center font-extrabold text-(--background-color) text-xl md:text-2xl md:w-7/10 md:mx-10 md:flex md:text-center md:justify-center md:items-center cursor-pointer">JOIN</button>
                </fieldset>
            </form>
        </div>
    </section>
     <!-- Join section end -->
    

    <section class="min-h-screen items-center pt-32 pb-16 px-5 justify-center">
        <h1 class="text-center font-extrabold text-2xl mb-3 md:mb-10 md:text-3xl">Our Member</h1>
        <div class="flex flex-col md:flex-row md:gap-5">
            @foreach ($members as $member)
            <div class="container bg-(--secondary-color) py-10 w-full mt-5 justify-center text-center rounded-xl md:w-1/3 md:mx-auto">
                <p class="text-base md:text-xl font-bold">{{ $member->name }}</p>
                <p class="text-sm md:text-base italic">Class: {{ $member->class }} </p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Popup after join -->
    <div onclick="closeJoinFunction()" style="display: none; position: fixed; top: 0; left:0; z-index: 299; " class="container flex w-full min-h-screen bg-zinc-600 items-center md:justify-center">
        <div class="container opacity-100 py-10 px-5 text-white bg-(--primary-color) items-center justify-center scale-80 rounded-xl md:w-1/3 md:flex-col md:justify-self-center md:px-16">
            <h1 class="text-center text-white text-2xl my-3">Welcome to the club brother!</h1>
            <div class="flex-col text-lg">
                <p>My brother <span class="underline" id="popup-name">ini nama</span></p>
                <p>Hope you enjoy here</p>
                <p>U can access all of these previlleges</p>
                <p></br></p>
                <p>of course brother!</p>

                </br>
                </br>
                </br>
                <p>If you have any problem,</p>
                <p>text to me</p>
                <p>aes | 087763918048</p>
                <p>click this link instead <a href="https://wa.me/+6287763918048" class="text-red-600">Here!</a></p>
            </div>
        </div>
    </div>

    <!-- About section start -->
    <section id="about" class="container text-white min-h-screen w-full bg-(--primary-color) py-10 px-8 justify-center text-base md:flex md:justify-between md:gap-3 md:items-center">
        <div class="flex-col w-full md:w-1/2 md:items-center md:ml-32">
            <h1 class="text-2xl font-black">About the author</h1>
            <h2 class="text-xl font-extrabold">My name is <span class="underline">Alief Maulana Shiddiq</span></h2>
            <p class="text-sm text-justify">I really like math and physics, I do a math and physics since elementary
             school and take a hands on olympiad from JHS. Now I being a
              math teacher so I can teach you from <span class="underline">ZERO</span> 
              to <span class="underline">HERO</span></p>
        </div>
        <div class="flex-col justify-center w-full md:w-1/2 md:items-center">
            <img src="assets/aes.png" class="absolute w-full pt-16 md:pt-30 md:max-w-[300px] max-w-[250px] justify-self-center justify-center items-center h-auto z-10 md:scale-90 md:w-2/5">
            <svg class="block top-0 left-0 -z-99 md:scale-80 max-w-[450px] justify-self-center" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#F1F1F1" d="M46.8,-55.5C61.2,-43.7,73.7,-29.5,76.9,-13.3C80,2.8,73.7,20.9,64.4,37.3C55.1,53.8,42.7,68.6,26.2,76.8C9.6,85,-11.2,86.5,-28.2,79.5C-45.1,72.4,-58.2,56.8,-68.3,39.4C-78.4,22,-85.5,2.8,-83.5,-15.7C-81.4,-34.3,-70.2,-52.3,-54.8,-63.9C-39.3,-75.5,-19.7,-80.7,-1.7,-78.6C16.2,-76.6,32.4,-67.3,46.8,-55.5Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>
    <!-- About section end -->

    
</body>
</html>

<!-- onclick="joinFunction()" -->
<!-- id="popup-join" -->
<!-- onsubmit="joinFunction(event)" -->