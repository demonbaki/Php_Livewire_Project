<div>
    <table class="table table-dark table-striped ">
        <thead>
            <p class="request m-4"> Ricerca per Titolo:</p>
            <input class="m-2 btnsearch" type="text" wire:model="search">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Corpo</th>
            <th scope="col">Cancella</th>
            <th scope="col">Modifica</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{substr($article->body, 0, 15)}}...</td>
                    <td>
                        <button wire:click="deleteArticle({{$article->id}})" class="btn btn-danger">Cancella</button>
                    </td>
                    <td>
                        <a href="{{route('article.edit', $article->id)}}" class="btn btn-warning">Modifica</a>
                    </td>
                </tr> 
            @endforeach
          
          
        </tbody>
      </table>
</div>
