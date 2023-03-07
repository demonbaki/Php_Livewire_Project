<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{
    public $search = "";
    
    public function render()
    {
        if ($this->search == "") {
            $articles = Article::all();
        }else{
            $articles = Article::where('title', 'LIKE', '%'. $this->search. '%')->get();
        }
        return view('livewire.articles-table', compact('articles'));
    }

    public function deleteArticle($id){
        Article::findOrFail($id)->delete();
    }
}

