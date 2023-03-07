<x-layout>
   @if (session('message'))
   <div class="alert alert-success">
       <p>{{session('message')}}</p>
   </div>
       
   @endif
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
      
            <livewire:counter/>

          </div>
        </div>
      </div>
      <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-6 text-center">
       
         
           <livewire:article-form/>

           </div>
         </div>
       </div>
    <div class="col-md-8">
        <div class="amezing_box">
           <div class="titlepage">
              <h2>Amezing this <br> application and features</h2>
           </div>
           
           <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
           <a class="read_more " href="#">Read more</a>
        </div>
     </div>
    
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-8 col-sm-12 padding_0">
              <div class="map_main">
                 <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                 </div>
              </div>
           </div>
           
           </div>
        </div>
     </div>
</x-layout>