<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tournaments Planet</title>

        <!-- Fonts -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Passion+One&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css')}}">


        <!-- Styles -->
        <style>
        
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            </style>
        
    </head>
    <body class="antialiased">
        <!-- Top Panel -->
        @include('layouts.panel')
        <div class="relative d-flex items-center justify-left min-h-screen sm:items-center py-4 sm:pt-0" style="background:#FEF8F4">
            
            @include('loginmenu') 
            

        <!-- accordions -->
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="padding-top:30vh;">

            <!-- Designer -->
            <div class="mainbg d-flex items-center">
                <a href="/designer">
                <button class="accordion shadow flex items-center">
                    <svg
                     height="5vh" viewBox="0 -1 401.52289 401" width="5vh" xmlns="http://www.w3.org/2000/svg"><path d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0"/>
                    </svg>

                        <h1 class="lobster ml-4">Modality Designer</h1>
                    
                </button>
                    
                </a>
                <!--                 
                <div class="accordion-content mt-2 ml-12">
                    <p>
                        In this module, you will create a template for specific modality of game you are trying to play. This way, once created, that modality can be used again and again. You can always go back and modify it according to your gaming needs. Tournaments Planet also includes preexisting modalities for you to choose from, if you are not quite the creator and want to go straight to a regular game setting.
                        <br><br>
                        The Modality Designer will give you all the necessary options to create the game environment you need. You will be able to set up scoring standards, time limits, targets/goal designs, and pretty much any other rules your game may entail.
                    </p>
                </div> -->
            
                <!-- Planner -->
            <div class="d-flex items-center">

                <button class="accordion shadow flex items-center">
                    <svg height="5vh" viewBox="0 -11 456 455" width="5vh" xmlns="http://www.w3.org/2000/svg"><path d="m404.734375 39.1875h-40.734375v-30.6875c0-4.417969-3.582031-8-8-8s-8 3.582031-8 8v30.6875h-235v-30.6875c0-4.417969-3.582031-8-8-8s-8 3.582031-8 8v30.6875h-45.734375c-28.28125-.007812-51.2226562 22.894531-51.265625 51.171875v292.261719c0 28.265625 23 51.566406 51.265625 51.566406h353.46875c28.265625 0 51.265625-23.300781 51.265625-51.566406v-292.261719c-.042969-28.277344-22.984375-51.179687-51.265625-51.171875zm-388.734375 51.171875c.035156-19.445313 15.816406-35.1875 35.265625-35.171875h45.734375v30.53125c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-30.53125h235v30.53125c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-30.53125h40.734375c19.449219-.015625 35.230469 15.726562 35.265625 35.171875v39.828125h-424zm388.734375 327.828125h-353.46875c-19.441406 0-35.265625-16.128906-35.265625-35.566406v-236.433594h424v236.433594c0 19.4375-15.824219 35.566406-35.265625 35.566406zm0 0"/><path d="m219 194.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-16 58h-50v-50h50zm0 0"/><path d="m319 194.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-16 58h-50v-50h50zm0 0"/><path d="m418 194.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-15 58h-51v-50h51zm0 0"/><path d="m219 293.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-16 58h-50v-50h50zm0 0"/><path d="m119 293.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-15 58h-51v-50h51zm0 0"/><path d="m319 293.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-16 58h-50v-50h50zm0 0"/><path d="m418 293.1875c0-4.417969-3.582031-8-8-8h-66c-4.417969 0-8 3.582031-8 8v66c0 4.417969 3.582031 8 8 8h66c4.417969 0 8-3.582031 8-8zm-15 58h-51v-50h51zm0 0"/><path d="m78.195312 173.359375c-28.734374 0-52.023437 23.289063-52.023437 52.019531-.003906 28.734375 23.289063 52.023438 52.019531 52.027344 28.730469 0 52.023438-23.289062 52.027344-52.019531-.03125-28.71875-23.304688-51.996094-52.023438-52.027344zm0 88.046875c-19.898437 0-36.027343-16.132812-36.023437-36.027344 0-19.894531 16.128906-36.023437 36.027344-36.023437 19.894531.003906 36.023437 16.136719 36.019531 36.03125-.027344 19.882812-16.140625 35.996093-36.023438 36.019531zm0 0"/><path d="m95.328125 221.1875h-11.328125v-17.832031c0-4.417969-3.582031-8-8-8s-8 3.582031-8 8v25.699219c-.0625 2.109374.722656 4.15625 2.175781 5.683593 1.457031 1.527344 3.460938 2.410157 5.570313 2.449219h19.582031c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0"/></svg>
                                
                    <h1 class="lobster ml-4">Event Planner</h1>
                        
                </button>
                                
                <div class="accordion-content mt-2 ml-12 text-sm ">
                    <p>
                        This module allows you to create events based on existing Modalities. It uses the Modality template you/Tournaments Planet designed and applies it into the Event you are creating.
                        <br><br>
                        An Event has a set date and time, status (On Schedule, Delayed or Cancelled), visibility (Public or Private), media (such as link to the directions to the location of the Event, photos, or whatever links that need to be associated to the Event), and the players info.
                    </p>
                </div>
                
            </div>
            
            <!-- Match -->
            <div class="d-flex items-center">
                <!-- <div class=""> -->
                    <button class="accordion shadow flex items-center">
                        
                        <svg
                         height="5vh" viewBox="0 -4 452 452" width="5vh" xmlns="http://www.w3.org/2000/svg"><path d="m444 311h-124v-54c0-4.417969-3.582031-8-8-8h-25v-27.320312c0-4.417969-4.03125-7.679688-8.449219-7.679688h-44.550781v-31.652344c25.152344-2.761718 46.800781-18.347656 58.785156-40.347656h2.644532c34.617187 0 62.570312-29.398438 62.570312-65.363281v-25.621094c.046875-2.101563-.75-4.132813-2.214844-5.640625-1.46875-1.507812-3.476562-2.363281-5.578125-2.375h-47.207031v-34.898438c-.089844-4.480468-3.730469-8.070312-8.207031-8.101562h-137.265625c-4.417969 0-7.527344 3.679688-7.527344 8.101562v34.898438h-48.207031c-2.101563.011719-4.109375.867188-5.578125 2.375-1.464844 1.507812-2.261719 3.539062-2.214844 5.640625v25.621094c0 35.964843 27.953125 65.363281 62.570312 65.363281h2.601563c11.847656 22 33.515625 37.601562 58.828125 40.351562v31.648438h-44.550781c-4.417969 0-8.449219 3.261719-8.449219 7.679688v27.320312h-25c-4.417969 0-8 3.582031-8 8v90h-124c-4.417969 0-8 3.582031-8 8v81c0 4.417969 3.582031 8 8 8h436c4.417969 0 8-3.582031 8-8v-117c0-4.417969-3.582031-8-8-8zm-102-252v17.636719c0 25.71875-18.632812 46.878906-42.550781 49.03125 2.257812-7.375 3.453125-15.035157 3.550781-22.746094v-43.921875zm-232 17.636719v-17.636719h40v44.257812c-.042969 7.574219.957031 15.117188 2.980469 22.417969-23.960938-2.109375-42.980469-23.289062-42.980469-49.039062zm56 26.621093v-87.257812h121v86.855469c0 35.253906-27.421875 63.933593-60.660156 63.933593-33.339844 0-60.339844-28.5-60.339844-63.53125zm15 126.742188h90v17h-90zm255 198h-420v-65h124c4.417969 0 8-3.582031 8-8v-90h156v54c0 4.417969 3.582031 8 8 8h124zm0 0"/>
                        </svg>
                        
                        <h1 class="lobster ml-4">Host a Match</h1>
                    
                    </button>
                
                    <div class="accordion-content mt-2 ml-12 text-sm ">
                        <p>
                            This module has two parts to it. The Match template (where you will create a match that will happen in the Event) and and the Game template will be where the players will have their targets and score assigned to their game as they play.
                        </p>
                    </div>
                
                
            </div>
            
        </div>
        <!--        
            "MODALITY"       
            A word of explanation on a particular parameter of Targets: "Factors" - the application allows to define three different 'weights' for each shot: Missed (factor zero), Hit (factor one) and Bull's Eye (factor two). When a player miss a target on a shot, the button Missed (or "No") will multiply the number of points for that target-shot by ZERO. If a player 'just hit' a target or hits it in a 'not convincing way' (like a ricochet - also called 'dirty shot') the Officer can record a Hit for it, which multiplies the number of points for that target-shot by ONE. However, if a player hits a target with a 'hard shot' (very precise), the Officer may consider it a Bull's Eye, which rewards the shot by multiplying the number of points of that target-shot by TWO.
            
            Another word of explanation when creating Targets: the field Maximum Shots specifies how many shots will be created for that target and add an input field for each shot to define the number of points attributed to it. You can define any integer number - including negative numbers (for 'forbidden targets', for instance - see an example in the Tournament "Save The Child").
            
            And if the targets are not easy to identify, you can use the 'description' to give a little more information about them.
            
            "HOST"        
            Host an Event - this is the module "Matches", and here is where the real fun happens. This module shows two main tabs: Matches and Games.
            In Matches you can select a previously saved Match or create a new one - which starts with the selection of an existing Event, then you add more players or remove the ones already registered (in case they didn't show up or you are breaking an Event in different Matches).
            Once the Match is saved/updated, then go to the tab Games, where you will find the" Score Card", which shows all players that are playing that Match in sequences of Games (innings), each player with the number of points he/she scored in that game. Bellow the Score Card is the the "Totals", which shows the total of points each player scored in all Games of that Match. When you click on a player name in the Score Card, all targets and the performance of that player is displayed in the "Game-Player Dashboard", and in there you (or your "Game Officers" - the people who are operating the Games) can continue recording as the player continues his/her work.
            Tipically, every match is broken down into games (innings). During a game, each player must shoot all targets. A game is only completed when all players shoot all targets. Obviously, this can change, depending on the type of Tournament and its own set rules.
            
            Still in the Matches module > tab Games:
            almost everything in this module will play a fun audio - the players names in the Score Card, each one of the buttons, the countdown timer, etc - this is not only to raise the level of fun, but it will also help players that are focused in their acitvity to make sure that the proper result was registered for him/her, just by hearing the sound played (for instance, a missed shot always chimes the same quirk audio). However if this bothers the players, the Game Officer can turn the audio off by unchecking the option 'Play Audio' in the tab Matches.
            
            for Matches of Events based on Tournaments that have Number of Games checked as 'continuous', once all players complete their targets, the app will automatically create a new Game. Otherwise, the Game Officer can add a 'New Games' manually, if desired.
            
            there is an option to Finalize the Match - this will shut down all 'pending' targets of all players, with a 'Missed' factor for each open shot, and set the date-time of the End of the Match. At that point, there will be no way to continue playing that Match.
            
            this tab also has a countdown timer to be used in timed activities, and this feature is available even if no Match is selected.
            
            All modules allow to enter URLs for Media, which will give your visitors acess to photo albums, videos, and other medias. Tournaments World DOES NOT have an option to upload and host these resources, so you can just point to external sources (YouTube, Instagram, etc).
            
            Note that the 'cardinality' in Tournaments World is: a Tournament can have many Events, an Event can have many Matches, a Match can have many Games, a Game (inning/round) can have many Targets, a Target can have many shots.
            
            Tournaments and Events can be created as "public" (their default value), or they can be created as "private" (this is useful when you are still modeling a Tournament or Event, or they are activities closed to a specific group of people). A public activity can be viewed and used by all users - including visitors (non-registered users), but can only be changed by its owner. A private activity can only be viewed and changed by its owner.
            
            However we encourage users to always create public activities, so everyone will benefit from it, and this will help us to create a strong community and a very diverse set of activities.
            
            Visitors of Tournaments World are able only to create and operate Matches and Games for existing Events. In order to have access to all functionalities, visitors need to Sign Up, which only requires a name and email (which will be used only to retrieve the password, if needed).
            
            
            High Tech Users
            If you are a high tech user or you are organizing a Championship or public competition, you may want to connect your phone or tablet via Bluetooth to a wide screen TV or projector and also to a speaker to show the Games / Targets / Scores to a larger audience.
            
            
            Final words
            This app was built in a couple of weeks and it was never intended to be a visual masterpiece, but something to enhance my fun with the kids.
            
            At the conception of Tournaments World I had no project specification, design or database modeling – just a simple idea for 2 or 3 screens with data saved in JSON files, for single user operations. However it turned out to be a full blown relational database driven application, for multiple (simultaneous) users. Since then, more and more features have been added, making it a more serious app, with good potential.
            
            But don't worry, everything is free, there is no advertisements, in-app purchases or any kind of hidden charges.
            
            So enjoy - but be fair and patient with the app. The system was not fully tested, I mean, it may contain bugs. But remember, this app belongs to all of us, which includes you, so don't be mean if you find issues. On the contrary, click HERE to contact and send me a notification with the error you found and more importantly, the precise steps to reproduce it, so that I can fix the bug as soon as possible for the good of the whole community. You can also ask questions or say nice things, if you want :).
            
            In the future I want to re-write this app the right way - no longer as a toy, to give it a little more respect and preparing it for a future it seems to deserve. And I have a long backlog of very cool ideas that I want to implement.
            
            
            I'm really glad if this app helps add a little more fun to your day. Use and abuse.
            
            
            Regards,
            Carlos  
            
            
            Contact US
            -->
        
        </div>
        
    </div>
    @include('layouts.footer')
</body>
</html>
<script src="{{ url('js/accordion.js') }}"></script>
