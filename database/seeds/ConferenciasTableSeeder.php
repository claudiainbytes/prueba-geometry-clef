<?php

use Illuminate\Database\Seeder;
use App\Conferencia;

class ConferenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conferencia::create([
            'titulo'  => 'The modern PWA cheat sheet',
            'imagen'      => 'conf-1.png',
            'video' => 'https://www.youtube.com/embed/cybhV88KLfI',
            'descripcion'  => 'PWAs are now installable on every mobile and desktop OSs, but there is a lot of new things since last year we need to do to create a successful experience. We will start understanding the App Lifecycle on every OS including new APIs, the limitations on iOS and how to deal with them, and how WebAPK works on Android. We will mention challenges on desktop PWAs, including multi-window management and we will finally cover distribution channels, including new DOM events to improve analytics, how to create a custom Install experience, and how to distribute the app in the store.'
        ]);
        Conferencia::create([
            'titulo'  => 'Shape of the web',
            'imagen'      => 'conf-2.png',
            'video' => 'https://www.youtube.com/embed/SeV_Pqw5egU',
            'descripcion'  => '“The Shape Of The Web” is about both accomplishments and challenges that lay in past, present and future of the web - from its technologies employed and its employed technologists.'
        ]);
        Conferencia::create([
            'titulo'  => 'Aprendiendo programación funcional con JavaScript',
            'imagen'      => 'conf-3.png',
            'video' => 'https://www.youtube.com/embed/e-5obm1G_FY',
            'descripcion'  => 'In computer science, functional programming is a programming paradigm or pattern (a style of building the structure and elements of computer programs).Functional Programming treats computation as the evaluation of mathematical functions.'
        ]);
        Conferencia::create([
            'titulo'  => 'Polyhedra, letting your passions take form',
            'imagen'      => 'conf-4.png',
            'video' => 'https://www.youtube.com/embed/jhdJHBD9Fts',
            'descripcion'  => 'For millennia, mathematicians and artists have been fascinated by polyhedra, 3D shapes that encode complex symmetries and relationships.'
        ]);
        Conferencia::create([
            'titulo'  => 'CSS in JS: Is it worth the hype',
            'imagen'      => 'conf-5.png',
            'video' => 'https://www.youtube.com/embed/gpDBX3hYnTE',
            'descripcion'  => 'JSS is a more powerful abstraction over CSS. It uses JavaScript as a language to describe styles in a declarative and maintainable way. It is a high performance JS to CSS compiler which works at runtime and server-side.'
        ]);
    }
}
