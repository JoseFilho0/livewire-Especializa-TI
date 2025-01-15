<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tweet;
use Livewire\WithPagination;


class ShowTweets extends Component
{
    use WithPagination;

    public $content = "Test";

    protected $rules = [
        "content"=> "required|min:3|max:255",
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->paginate(2);

        return view('livewire.show-tweets', compact('tweets'))->layout('layouts.app');
    }

    public function create()
    {

        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => 1, // User simulation
        ]);

        $this->content = '';
    }
}
