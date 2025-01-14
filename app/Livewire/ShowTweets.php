<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tweet;


class ShowTweets extends Component
{

    public $message = "Test";

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', compact('tweets'))->layout('layouts.app');
    }

    public function create()
    {
        Tweet::create([
            'content' => $this->message,
            'user_id' => 1, // User simulation
        ]);

        $this->message = '';
    }
}
