<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{
    public $title;
    public $description;
    public $body;

    protected $rules = [
        'title'=> 'required|min:6',
        'description'=> 'required|min:10',
        'body'=> 'required|min:25',
    ];

    protected $message = [
        
            'title.required'=> 'Il titolo è obbligatorio',
            'description.required'=> 'Il sottotitolo è obbligatorio',
            'body.required'=> 'Il corpo è obbligatorio',
            'title.min'=> 'Il titolo deve essere almeno di 6 caratteri',
            'description.min'=> 'Il sottotitolo deve essere almeno di 10 caratteri',
            'body.min'=> 'Il corpo deve essere almeno di 25 caratteri',
       
    ];

    public function update($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();
        
        Article::create(
            [
                'title'=> $this->title,
                'description'=> $this->description,
                'body'=> $this->body
            ]
        );

        $this->reset();
    }
    
    
    
    
    public function render()
    {
        return view('livewire.article-form');
    }
}