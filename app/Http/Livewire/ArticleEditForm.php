<?php

namespace App\Http\Livewire;
use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{
    public $title;
    public $description;
    public $body;
    public $articleId;

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

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount($articleId){
        $article = Article::findOrFail($articleId);
        $this->articleId = $articleId;
        $this->title = $article->title;
        $this->description = $article->description;
        $this->body = $article->body;
    }

    public function updateArticle(){
        $this->validate();
        $article = Article::findOrFail($this->articleId);
        $article->update(
            [
                'title'=>$this->title,
                'description'=>$this->description,
                'body'=>$this->body
            ]
        );
        return redirect()->route('articles.index');
    }
    
    public function render()
    {
        return view('livewire.article-edit-form');
    }
}

