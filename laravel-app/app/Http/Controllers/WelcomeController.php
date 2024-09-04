<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $welcomeStrings = [
            "sprintf(\"%s %s!\", 'HELLO', 'WORLD')",
            "alert('HELLO WORLD!')",
            "<h2>HELLO WORLD!</h2>",
            "print \"{} {}!\".format('HELLO', 'WORLD')",
            "++++++++[>++++[>++>+++>+++>+<<<<-]>+>+>->>+[<]<-]>>.>---.+++++++..+++.>>.<-.<.+++.------.--------.>>+.>++." // Brainfuck? Why not?
        ];

        // Rotate through the above strings daily.
        $today = (now()->dayOfYear) % sizeof($welcomeStrings);

        return view('welcome', [
            'welcome' => htmlentities($welcomeStrings[$today])
        ]);
    }
}
