@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5 mb-5">Videogames:</h1>

            <h3 class="mb-5">The Benefits: Positive Effects of Video Games</h3>

            <ul>
                <li class="list-unstyled">
                    Memory – Playing first person shooter games such as Call of Duty and Battlefield series enables the player to effectively judge what information should be stored in his working memory and what can be discarded considering the task at hand, 
                    according to a study published in the Psychological Research.
                    Concentration – A study conducted by the Appalachia Educational Laboratory reveal that children with attention-deficit disorder who played Dance Dance Revolution improve their reading scores by helping them concentrate.
                    Improved ability to rapidly and accurately recognize visual information – A study from Beth Israel Medical Center NY, found a direct link between skill at video gaming and skill at keyhole, or laparoscopic, surgery. Doctors who spent at least three hours a week 
                    playing video games made about 37 % fewer mistakes in surgery and performed the task 27% faster than non-gaming surgeons. Another study found that people who play video games on a regular basis are better at registering visual data and are therefore quicker visual 
                    learners. They are also more resistant to perceptual interference, and are therefore able to learn for a longer period of time in distracting environments.

                </li>

                <li class="mt-3 mb-5 list-unstyled">
                    Reasoned judgments
                    Taking risks – Winning in any game involves a player’s courage to take risks. Most games do not reward players who play safely.
                    Teamwork and cooperation when played with others – Many multiplayer games such as Team Fortress 2 involve cooperation with other online 
                    players in order to win. These games encourage players to make the most of their individual skills to contribute to the team. According to a survey by Joan Ganz Cooney Center, 
                    teachers report that their students become better collaborators after using digital games in the classroom.
                    Management – Management simulation games such as Rollercoaster Tycoon and Zoo tycoon teach the player to make management decisions and manage the effective use of finite resources. 
                    Other games such as Age of Empires and Civilization even simulate managing the course of a civilization.
                    Simulation, real world skills.  The most well known simulations are flight simulators, which attempt to mimic the reality of flying a plane. All of the controls, including airspeed, wing angles, altimeter, 
                    and so on, are displayed for the player, as well as a visual representation of the world, and are updated in real time.
                    Non-English speaking players report learning English by playing games.
                </li>
            </ul>

            <p class="font-weight-bold">Click <a style="color: #058e24;" href="{{ route('posts.index') }}">Here</a> to discover a stack of videogames that I absolutely loved – each of them is so different 
               but they all have a special place in my heart!  
            </p>
       </div>
    </main>

@endsection