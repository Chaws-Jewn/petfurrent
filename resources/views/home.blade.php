<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETFURRENT</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
        <title>Petfurrent</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

        <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Arrow up button
        document.getElementById('arrow-up').addEventListener('click', function () {
            window.scrollBy(0, -window.innerHeight);
        });

        // Arrow down button
        const arrowDown = document.getElementById('arrow-down');
        let scrollInterval;

        arrowDown.addEventListener('mousedown', function () {
            scrollInterval = setInterval(function () {
                window.scrollBy(0, 10); // Adjust scroll amount as needed
            }, 20); // Adjust the interval as needed for smooth scrolling
        });

        arrowDown.addEventListener('mouseup', function () {
            clearInterval(scrollInterval);
        });

        arrowDown.addEventListener('mouseleave', function () {
            clearInterval(scrollInterval);
        });
    });
</script>


        <style>
            /* body{
              font-family: "Sofia", sans-serif;
            font-size: 30px;
        } */
        body{
            font-family: "Trirong", serif;
        }
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
        /*STICKY */
        .header {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: center;

        }

        #navbar {
            overflow: hidden;
            /* background-color:; */
            border-radius: 10px;
        }

        #navbar.sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: purple; /* Add your desired background color */
            z-index: 1000; /* Adjust z-index as needed */
        }

        #navbar a {
            float: left;
            display: block;
            /* color: ; */
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            border-radius: 10px;
        }

        #navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        #navbar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .content {
            padding: 16px;
        }
        .arrow-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: purple;
        border-radius: 50%;
        padding: 10px;
        cursor: pointer;
        z-index: 1000; /* Ensure the buttons appear above other content */
    }

    .arrow-button a {
        color: white;
        text-decoration: none;
    }

    .arrow-button svg {
        width: 24px;
        height: 24px;
    }

    .up {
        bottom: 80px; /* Adjust the position as needed */
    }

    /* Styles for hover effect */
    .arrow-button:hover {
        background-color: #04AA6D;
    }
    </style>
    </head>
    <body class="antialiased" style="background-color:purple">
           @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                        @endif
                    @endauth
                </div>
            @endif
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1 sticky" style="background-color:purple;">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />
            {{-- "order-1 md:order-2" --}}
            <div class="order-1 md:order-2" id="menu">
                <nav id="navbar">
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0" style="background-color:white;color:purple;">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" >Login</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" >Register</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1">
    <img src="https://png.pngtree.com/element_our/png/20180917/pets-vector-template-this-could-be-use-as-of-pet-shop-png_99442.jpg" width="50" style="background-color:white;border-radius: 50%"><br>

    <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " style="padding-left:10px;color: white">
        PETFURRENT
    </a>
</div>

        </div>
    </nav>
    <section class="bg-white py-8" id="welcome-petode">


        <div class="container py-8 px-6 mx-auto">
            <div style="padding-left: 20px;font-size: 500%;">
                <div>Welcome to Petfurrent!</div>
            </div>
            <div style="padding-left: 60px;font-size: 125%;"><h1>Where you can find your future pets and Adopt your perfect companion.</h1></div>
            <div class="container mx-auto">
                <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                    <br>
                    <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" style="background-color: purple; color:white;">ADOPT NOW!!</a>
                </div>
            </div>
        </div>
    <br><br>
</section>
<br>
    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://www.snipp.com/hs-fs/hubfs/Pet%20care%20industry%20banner%20trends.png?width=2300&height=805&name=Pet%20care%20industry%20banner%20trends.png');">


                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://www.snipp.com/hs-fs/hubfs/Pet%20care%20industry%20end%20banner.png?width=2200&height=770&name=Pet%20care%20industry%20end%20banner.png');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4"></p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://www.snipp.com/hs-fs/hubfs/Pet%20care%20industry%20landscape%20banner.png?width=2300&height=805&name=Pet%20care%20industry%20landscape%20banner.png');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl my-4"></p>
                            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>
        </div>
    </div><br>

    <section class="bg-white py-8" id="pet-adoption">
        <div class="container py-8 px-6 mx-auto">
            <hr>
            <br>
            <center>
                
            <a class="uppercase tracking-wide font-bold text-gray-800 text-xl mb-8" style="font-size: 50px; text-align:center;">"Pet Adoption Considerations"</a>
            <h2 style="color: red">Important Considerations Before Adopting a Pet!</h2>
            
        <iframe width="1000" height="500" src="https://www.youtube.com/embed/AuAkLfE9_gs?si=fjYmDKIuyvlARjej" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </center>
            <br>
            <hr>
 <div class="blog" style="font-size: 20px">
            <br>
                <p><strong>Questions for All Adopters:</strong><br></p>
                <p><strong>Existing Pets:</strong><br> 
                    Do you have any other pets, and how will they react to a new pet?</p>
        
                <p><strong>Living Arrangements:</strong><br> 
                    Is your current residence suited to the pet you're considering?</p>

                <p><strong>Lifestyle and Commitment:</strong><br>
                    How will your social life or work obligations affect your ability to care for a pet?</p>
                    <p>Do you have a plan for your new pet during vacations and/or work travel?</p>

                <p><strong>Household Acceptance:</strong><br> 
                    How do the people you live with feel about having a pet in the house?</p>
                    <p>Are you (or your spouse, partner, or roommate) intolerant of hair, dirt, and other realities of sharing your home with a pet, such as allergies?</p>
                    <p>Do you or any of your household/family members have health issues that may be affected by a pet?</p>

                <p><strong>Breed Compatibility:</strong><br> 
                    What breed of pet is the best fit with your current lifestyle? (You can find information on specific breeds in our pet breed directory.)</p>
                
                <p><strong>Home Atmosphere:</strong><br>
                    Is there tension in the home? Pets quickly pick up on stress in the home, and it can exacerbate their health and behavior problems.</p>
                    <p>Is there an adult in the family who has agreed to be ultimately responsible for the pet's care?</p>
                <br>

                <p><strong>Other Considerations:</strong><br></p>
                <p><strong>Expectations from the Pet:</strong><br>
                    What do you expect your pet to contribute to your life? For example, do you want a running and hiking buddy, or is your idea of exercise watching it on TV?</p>
                
                <p><strong>Adopting a Young Pet:</strong><br>
                    If you are thinking of adopting a young pet, do you have the time and patience to work with the pet through its adolescence, taking house-breaking, chewing, and energy-level into account?</p>

                <p><strong>Lifestyle Alignment:</strong><br>
                    Have you considered your lifestyle carefully and determined whether a younger or older pet would be a better match for you?</p>
                    <p>Can you train and handle a pet with behavior issues, or are you looking for an easy-going friend?</p>

                <p><strong>Specific Needs:</strong><br>
                    Do you need a pet who will be reliable with children or one you can take with you when you travel?</p>
                    <p>Do you want a pet who follows you all around the house, or would you prefer a less clingy, more independent character?</p>
                <br>

                <p><strong>Size Considerations:</strong><br></p>
                <p><strong>Home Accommodations:</strong><br>
                    What size pet can your home accommodate?</p>
                    <p>Will you have enough room if your pet grows to be bigger than expected?</p>

                <p><strong>Consideration for Others:</strong><br>
                    What size pet would suit the other people who live in or visit your home regularly?</p>
                    <p>Do you have another pet to consider when choosing the size of your next pet?</p>

                <p><strong>Travel Considerations:</strong><br>
                    How big of a pet can you travel comfortably with?</p>
                <br>
                <center>
                <p class="uppercase tracking-wide font-bold text-gray-800 text-xl mb-8" style="color:green">These questions cover a wide range of factors to ensure that adopting a pet aligns with your lifestyle, preferences, and capabilities.</p>
                </center>
            </div><br><br>
            <hr>
            <br>
            <center>
            <a class="uppercase tracking-wide font-bold text-gray-800 text-xl mb-8" style="font-size: 50px" id="pet-care">Pet Care Guide</a>
            
            <div class="blog" style="font-size: 20px">
                <h2 style="color: red">Essential tips and advice to ensure your furry or feathered friend lives a happy and healthy life.!</h2>
                <iframe width="1000" height="500" src="https://www.youtube.com/embed/Tn3lZE0rRBs?si=LkBiVsFey3Eyka6v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </center><br>
                <hr>
                <section>
                <a class="uppercase tracking-wide font-bold text-gray-800 text-xl mb-8" style="font-size: 25px">Dental care</a><br>
                    <strong>Tips for Maintaining Your Pet's Oral Hygiene</strong>
                    <strong>Regular Brushing:</strong>
                    <p>Brush your pet's teeth regularly using a pet-friendly toothbrush and toothpaste. Start slowly to get them used to the process.</p>
                    <strong>Dental Treats and Toys:</strong>
                    <p> Provide dental treats or toys designed to promote oral health. These can help reduce plaque and tartar buildup.</p>
                    <strong>Professional Dental Cleanings:</strong>
                    <p> Schedule regular dental check-ups with your veterinarian. Professional cleanings are crucial for a thorough examination and cleaning.</p>
                    <strong>Healthy Diet:</strong>
                    <p> Feed your pet a balanced and nutritious diet, as proper nutrition contributes to overall health, including dental health.</p>
                </section>
                <br>
                <section>
                    <h2><strong>Nutrition</strong></h2>
                    <p>Proper nutrition is crucial for your pet's well-being. Consult with your veterinarian to determine the best diet for your pet's breed, age, and health condition. Include a mix of high-quality pet food, fresh water, and occasional treats.</p>
                    <strong>1. Protein</strong>
                    <p>Protein is crucial for your pet's muscle development and overall health. Choose high-quality pet foods that contain a good balance of proteins from sources like meat, fish, and eggs.</p>
                    <strong>2. Vitamins and Minerals</strong>
                    <p>Ensure your pet gets a variety of vitamins and minerals for proper growth and maintenance of bodily functions. Look for pet foods enriched with vitamins A, D, E, and minerals like calcium and phosphorus.</p>
                    <strong>3. Essential Fatty Acids</strong>
                    <p>Include sources of omega-3 and omega-6 fatty acids in your pet's diet. These are essential for a healthy coat, skin, and can support joint health. Fish oil is a great supplement for this purpose.</p>
                    <strong>4. Hydration</strong>
                    <p>Water is a vital nutrient for pets. Make sure your pet has access to clean and fresh water at all times. Dehydration can lead to various health issues, so pay attention to your pet's water intake.</p>
                    
                </section>
                <br>
                <section>
                    <h2><strong>Exercise</strong></h2>
                    <p>Regular exercise is essential for keeping your pet active and preventing obesity. Create a routine that includes daily walks, playtime, and interactive toys. Cats, for example, benefit from toys that stimulate their natural hunting instincts.</p>
                    <strong>1. Basic Commands Mastery</strong>
                    <p>Start with the basics such as "sit," "stay," and "come." Use positive reinforcement, like treats or praise, when your pet follows a command correctly. Consistency is key, so practice these commands regularly in different environments.</p>
                    <strong>2. Clicker Training</strong>
                    <p>Consider clicker training as an effective method. Associate the sound of a clicker with a reward, signaling to your pet that they've done something right. This technique is particularly useful for teaching complex tricks and behaviors.</p>
                    <strong>3. Target Training</strong>
                    <p>Use target training to teach your pet to touch a specific object with their nose or paw. This technique helps in developing focus and can be a foundation for more advanced tricks. Gradually increase the distance and complexity of the target for added challenges.</p>
                    <strong>4. Positive Reinforcement</strong>
                    <p>Always reinforce good behavior with positive rewards. Whether it's treats, praise, or playtime, positive reinforcement strengthens the bond between you and your pet. Avoid punishment-based training, as it can create fear and anxiety in your pet.</p>
                </section>
                <br>
                <section>
                    <h2><strong>Healthcare</strong></h2>
                    <p>Schedule regular check-ups with your veterinarian to monitor your pet's health. Keep up with vaccinations, flea and tick prevention, and dental care. Be aware of any changes in behavior or appetite, as these could be signs of underlying health issues.</p>
    
                    <strong>1. Regular Veterinary Check-ups</strong>
                    <p>As your pet ages, regular check-ups become crucial. Schedule visits to the veterinarian to monitor their health, detect potential issues early, and ensure they receive appropriate vaccinations.</p>
                    <strong>2. Balanced Nutrition</strong>
                    <p>Adjust your senior pet's diet to meet their changing nutritional needs. Consider specially formulated senior pet food that addresses issues like joint health, weight management, and dental care.</p>
                    <strong>3. Exercise and Mental Stimulation</strong>
                    <p>Even as pets age, they need regular exercise to maintain a healthy weight and prevent stiffness. Provide gentle activities suitable for their age and consider puzzle toys to keep their minds active.</p>
                    <strong>4. Comfortable Living Environment</strong>
                    <p>Create a comfortable and easily accessible living space for your senior pet. Consider providing soft bedding, ramps for easy access to elevated areas, and maintaining a warm environment to alleviate any arthritis-related discomfort.</p>
                </section>
                <br>
                <section>
                    <h2><strong>Grooming</strong></h2>
                    <p>Regular grooming helps maintain your pet's hygiene and appearance. Brush your pet's coat, trim nails, and clean ears as needed. For specific breeds, consider professional grooming services. Don't forget to give your pet plenty of positive reinforcement during grooming sessions!</p>
                    <strong>1. Bathing</strong>
                    <p>Regular bathing is essential for maintaining your pet's hygiene. Use a pet-friendly shampoo and ensure you rinse thoroughly to avoid skin irritation. Brush your pet's fur before bathing to remove any loose hair and tangles.</p>
                    <strong>2. Brushing</strong>
                    <p>Brush your pet's coat regularly to prevent matting and reduce shedding. The frequency depends on the breed and hair type. Use a suitable brush or comb for your pet's specific coat to keep it healthy and shiny.</p>
                    <strong>3. Nail Trimming</strong>
                    <p>Trimming your pet's nails is crucial to prevent discomfort and potential injuries. Use pet nail clippers and be cautious not to cut into the quick. If you're unsure, seek guidance from a veterinarian or a professional groomer.</p>
                    <strong>4. Ear Cleaning</strong>
                    <p>Check your pet's ears regularly for dirt, wax, or signs of infection. Clean ears with a veterinarian-approved solution and a soft cotton ball. Avoid using cotton swabs, as they can push debris further into the ear canal.</p>
                </section>
                <br>
                <center>
                <p class="uppercase tracking-wide font-bold text-gray-800 text-xl mb-8" style="color:green">Guides for Possible Pets</p>
                <hr>
                </center>
            </div>
        </div>
    </section>
<!-- Arrow button for navigating up -->
<div class="arrow-button up" id="arrow-up">
    <a href="#header">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </a>
</div>

<!-- Arrow button for navigating down -->
<div class="arrow-button down" id="arrow-down">
    <a href="#welcome-petode">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </a>
</div>

    <footer class="container flex px-3 py-8 container mx-auto bg-white" style="background-color: purple;width:100%;" class="container flex px-3 py-8 ">
    <div class="w-full mx-auto flex flex-wrap">
        <div class="flex w-full lg:w-1/2 ">
            <div class="px-3 md:px-0" style="padding-left: 20px;">
                <h3 class="font-bold text-gray-900" style="color: white;">For more information, send your concern here.</h3>
                <br>
                <form action="" method="post">
                @csrf
                <label for="email" style="color: white;">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" style="padding-left:10px;">
                <br>

                <label for="subject" style="color: white;">Subject:</label>
                <br>
                <textarea id="subject" name="subject" placeholder="Comment.." style="padding-left:10px; height:55px"></textarea>
                <button class="button" type="submit">Submit</button>
                @if($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            </form>


                <style>
                    .button {
                        background-color: white;
                        border: none;
                        color: purple;
                        padding: 5px;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 0px;
                        cursor: pointer;
                        border-radius: 10%;
                        padding-top: 5px;
                        padding-bottom: 0px
                    }
                </style>
            </div>
        </div>
        <br>
        <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right mt-6 md:mt-0" style="color: white;">
            <div class="px-3 md:px-0">
                <h3 class="text-left font-bold text-gray-900" style="color: white;">Social Media</h3>
                <br>
                <div class="w-full flex items-center py-4 mt-0">
                    <a href="#welcome-petode" class="mx-2">About</a>
                    <a href="#pet-adoption" class="mx-2">Pet Adoption</a>
                    <a href="#pet-care" class="mx-2">Pet Care</a>
                    <a href="#contact-us" class="mx-2">Contact Us</a>
                </div>
                <div class="w-full flex items-center py-4 mt-0">
                    <a href="#" class="mx-2">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <!-- Facebook Icon -->
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/jayvee.ubaldo/" class="mx-2">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <!-- Facebook Icon -->
                        </svg>
                    </a>
                    <a href="#" class="mx-2">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <!-- Twitter Icon -->
                        </svg>
                    </a>
                    <a href="#" class="mx-2">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <!-- Instagram Icon -->
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>



    </body>
</html>
