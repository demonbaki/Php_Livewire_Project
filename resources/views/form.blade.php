<x-layout>

  <div class="contact_section layout_padding">
    <div class="container">
       <div class="contact_main">
          <h1 class="request_text">A Call Back</h1>
          <form method="POST" action="{{route('form.iscriviti')}}">
            @csrf
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="name">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt mt-3" placeholder="Email" name="email">
             </div>
             <div class="form-group">
                <input type="number" class="email-bt mt-3" placeholder="Phone Numbar" name="number">
             </div>
             <div class="form-group">
                <textarea class="massage-bt mt-3" placeholder="Massage" rows="5" id="comment" name="description"></textarea>
             </div>
             <button type="submit" class="btn m-2 subscribe_bt">Submit</button>
          </form>
          
          
       </div>
    </div>
 </div>
  </x-layout>
  
  