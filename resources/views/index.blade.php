<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        .accordion .contentBox .label::before
        {
            content: '+';
            transform: translateY(-50%);
            padding: 10px;
            overflow: hidden;
        }
        .accordion .contentBox.active .label::after
        {
            content: '-';
        }
        .accordion .contentBox.active .content
        {
            height: 120px;
            padding: 10px 35px;
            margin-right: 70px;
            overflow: hidden;
        }
        
    </style>
    <title>EventMate</title>
</head>
<body class="font-body">
    <header>
        <nav id="navbar" class="flex items-center justify-between flex-wrap bg-[#D0E1F5] p-6 font-body">
            <div class="flex items-center flex-shrink-0 text-white mr-6 ml-20">
                <a href="#">
                    <img src="{{ asset('img/NavLogo.png') }}" class="fill-current h-12 mr-2">
                </a>
            </div>

            <div class="w-full block lg:flex lg:items-center lg:w-auto mr-20">
              <div class="text-lg font-semibold lg:flex-grow text-black justify-end">
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 hover:text-customBlue mr-8">About</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 hover:text-customBlue mr-8">FAQ</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 hover:text-customBlue mr-10">Contact</a>
              </div>
              
              <div>
                <a href="#" class="bg-customBlue font-semibold inline-block text-lg px-6 py-3 leading-none rounded-md text-white hover:bg-[#B5179E] mt-4 lg:mt-0">Sign In</a>
              </div>
            </div>
        </nav>
    </header>

    <div id="welcome" class="flex item-center justify-center gap-20">
        <div class="mt-20">
            <img src="{{ asset('img/img1lp.png') }}">
        </div>
        <div class="mt-48">
            <h1 class="text-6xl font-semibold">Welcome To</br>EventMate</h1>
            <h3 class="text-3xl mt-5">Schedule, register, and enjoy</br>the moment!</h3>
        </div>
    </div>

    <div id="aboutsection" class="flex item-center justify-center gap-16 mt-40">
        <div class="ml-48 mt-20">
            <h3 class="text-4xl font-bold mb-5">About</h3>
            <p class="text-xl">EventMate is dedicated to supporting community events.</br>
                With a focus on the comfort and needs of communities,</br>
                EventMate simplifies event coordinators tasks in</br>
                scheduling, managing participant registrations, and</br>
                disseminating important information to community</br>
                members. With EventMate, every community event will</br>
                be more organized, smooth, and satisfying!
            </p>
        </div>
        <div>
            <img src="{{ asset('img/img2lp.png') }}">
        </div>
    </div>

    <div id="faqsection" class="accordion mt-44 mb-44">
        <h1 class="flex justify-center text-4xl font-bold mb-10">Frequently Asked Question</h1>
        <div class="flex item-center justify-around ml-60 mr-36">
            <div class="w-60 mt-10">
                <h1 class="text-3xl font-semibold">Have any</br>question?</h1>
                <h3 class="mt-4 text-lg">We're here to ensure</br>
                    your experience with</br>
                    EventMate is smooth,</br>
                    enjoyable, and successful!</h3>
                <button class="mt-5">
                    <a href="#" class="bg-customBlue rounded-full py-2 px-4 text-sm text-white font-semibold hover:bg-[#B5179E]">Contact Us</a>
                </button>
            </div>

            <div class="w-3/5">
                <div class="contentBox my-3">
                    <div class="text-2xl bg-transparent font-semibold relative cursor-pointer p-3">1. How do I create a new event in EventMate? <span class="text-sm">▼</span></div>
                    <div class="text-lg content relative bg-transparent h-0 overflow-hidden duration-500">
                        <p>You can create a new event by going to EventMate account</br>
                            and clicking on the "Create Event" option. Follow the steps</br>
                            listed to fill in your event details, including event name, date,</br>
                            location, description code, and other information.
                        </p>
                    </div>
                </div>
                <div class="contentBox my-3">
                    <div class="text-2xl bg-transparent font-semibold relative cursor-pointer p-3">2. Do I need to pay to use EventMate? <span class="text-sm">▼</span></div>
                    <div class="text-lg content relative bg-transparent h-0 overflow-hidden duration-500">
                        <p>No, EventMate is free to use. Use this opportunity to join in</br>many interesting community events.</p>
                    </div>
                </div>
                <div class="contentBox my-3">
                    <div class="text-2xl bg-transparent font-semibold relative cursor-pointer p-3">3. How do I register for events that interest me? <span class="text-sm">▼</span></div>
                    <div class="text-lg content relative bg-transparent h-0 overflow-hidden duration-500">
                        <p>To register for the event you are interested in, click the "join</br>
                            event" option, then enter the code, name, email, phone, and</br>
                            instance for the event you want to participate in. Follow the</br>
                            steps provided to complete the registration process.
                        </p>
                    </div>
                </div>
                <div class="contentBox my-3">
                    <div class="text-2xl bg-transparent font-semibold relative cursor-pointer p-3">4. How do I create an account on EventMate? <span class="text-sm">▼</span></div>
                    <div class="text-lg content relative bg-transparent h-0 overflow-hidden duration-500">
                        <p>To create an account, you can click the "sign up" option,</br>
                            then fill in the information in the form of name, phone</br>
                            number, email and password,then sign up. Account has</br>
                            been successfully created.
                        </p>
                    </div>
                </div>
                <div class="contentBox my-3">
                    <div class="text-2xl bg-transparent font-semibold relative cursor-pointer p-3">5. Where can I see the event's details? <span class="text-sm">▼</span></div>
                    <div class="text-lg content relative bg-transparent h-0 overflow-hidden duration-500">
                        <p>You can click on the event you already joined, and you can</br>see the details above the description</p>
                    </div>
                </div>
            </div> 
        </div>

    <script>
        const accordion = document.getElementsByClassName ('contentBox');

        for (i = 0; i < accordion.length; i++) {
            accordion[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>
</body>
</html>