<x-layout>

    <div class="contact_section layout_padding">
      <div class="container">
         <div class="contact_main">
            <h1 class="request_text">A Call Back</h1>
            <form wire:submit.prevent="create-article" method="POST" action="{{route('form.iscriviti')}}">
              @csrf
               <div class="form-group">
                  <input type="text" wire:model="title" class="email-bt" placeholder="Name" name="Name">
               </div>
               <div class="form-group">
                  <input type="text" wire:model="description" class="email-bt mt-3" placeholder="Phone Numbar" name="Email">
               </div>
               <div class="form-group">
                <input type="text" wire:model="body" class="email-bt mt-3" placeholder="es.." name="Body">
             </div>
               <div class="form-group">
                  <textarea class="massage-bt mt-3" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
               </div>
            </form>
            
            <button type="submit" class="btn btn-primary m-5 subscribe_bt">Submit</button>
         </div>
      </div>
   </div>
    </x-layout>
    