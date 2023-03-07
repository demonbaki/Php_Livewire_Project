<x-layout
title="Modica Articolo: {{$article->title}}"
>
    
        
    
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
              <livewire:article-edit-form 
                    articleId="{{$article->id}}"
              />
          </div>
        </div>
      </div>
</x-layout>