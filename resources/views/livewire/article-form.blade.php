
<div>
  <div class="contact_section layout_padding">
    <div class="container">
       <div class="contact_main">
          <h1 class="request_text">A Call Back</h1>
          <form wire:submit.prevent="save">
              <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" wire:model.debounce.lazy="title">
                @error('title') <span class="error bg-danger">{{ $message }}</span> @enderror                   
              </div>
              <div class="mb-3">
                  <label class="form-label">Sottotitolo</label>
                  <input type="text" class="form-control" wire:model.debounce.lazy="description">
                  @error('subtitle') <span class="error bg-danger">{{ $message }}</span> @enderror                   
              </div>
              <div class="mb-3">
                  <label class="form-label">Corpo</label>
                  <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model.debounce.lazy="body"></textarea>
                  @error('body') <span class="error bg-danger">{{ $message }}</span> @enderror                   
              </div>
              <button type="submit" class="btn subscribe_bt ">Submit</button>
            </form>
          
       </div>
    </div>
 </div>

</div>
   