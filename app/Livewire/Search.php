<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
//    You can use the Url attribute to store a component's property in the URL query string
//    #[Url(as: 'q', except:'', history: true)]
    public $searchText = '';

    public $placeholder;

    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset('searchText');
    }

//    The queryString function below can be used instead of the Url attribute.
    protected function queryString()
    {
        return [
            'searchText' => [
                'except' => '',
                'as' => 'q',
                'history' => true,
            ],
        ];
    }

//    This is the same as the above queryString function
//    protected $queryString = [
//        'searchText' => ['except' => '', 'as' => 'q', 'history' => true],
//    ];

    public function render()
    {

        return view('livewire.search', [
            'results' => Article::where('title', 'like', "%{$this->searchText}%")->get(),
        ]);
    }
}
