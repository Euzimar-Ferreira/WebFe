

@section('mobile')

<ul class="sidenav grey lighten-2" id="mobile-demo">
    <!-- 
     
 <li class=" blue"  style="padding:30px">
   <div class="">
     <div class="left">
         <img src="img/usuario.jpg" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
     </div>
     <div class="">
         <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown">Jay<i class="mdi-navigation-arrow-drop-down right"></i></a>
         
             <ul id="profile-dropdown" class="dropdown-content">
                 <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                 <li><a href="#"><i class="material-icons">settings</i>Setting</a></li>
                 <li><a href="#"><i class="material-icons">help</i>Help</a></li>
                 <li class="divider"></li>
                 <li><a href="#"><i class="material-icons">lock</i>Lock</a></li>
                 <li><a href="#"><i class="material-icons">exit_to_app</i>Logout</a></li>
             </ul>
        
         
     </div>
        
   </div>
   <a class=" white-text" href="#" >Jay@gmail.com</a>
 </li>
-->
 
   @if($userLogin)
   <li class="white">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_special</i>Layouts <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body orange lighten-5">
              <ul>
                <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen<span class="new badge right yellow grey lighten-1" data-badge-caption="updated"></span></a></li>
                <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu<span class="new badge right yellow darken-3"></span></a></li>
                <li><div class="divider"></div></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="white">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_open</i>A submenu <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
            <div class="collapsible-body orange lighten-5">
              <ul>
                <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen</a></li>
                <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu</a></li>
                <li><div class="divider"></div></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">mail</i>Menu item</a></li>
      <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">call</i> Menu item</a></li>
      <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">android</i> Menu item</a></li>
      <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">dialpad</i> Menu item</a></li>
      <li class="white"><div class="divider"></div></li>
      <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">language</i> Menu item<span class="new badge right yellow darken-3"></span></a></li>
      
      <li class="grey darken-2">
        <div class="row">  
          <div class="social-icons">
            <div class="col s2">
              <a href="#"><i class="fa fa-lg fa-linkedin-square"></a></i>
            </div>
            <div class="col s2">
              <a href="#"><i class="fa fa-lg fa-facebook-official"></a></i>
            </div>
            <div class="col s2">
              <a href="#"><i class="fa fa-lg fa-twitter"></a></i>
            </div>
            <div class="col s2">
              <a href="#"><i class="fa fa-lg fa-google-plus"></a></i>
            </div>
            <div class="col s2">
              <a href="#"><i class="fa fa-lg fa-pinterest"></a></i>
            </div>
            <div class="col s2">
              <a href="#"><i class="fa fa-lg fa-youtube"></a></i>
            </div>
          </div>
        </div>
      </li>
         
     </ul>
   @else
   <li><div class="user-view">
        <div class="background" style="background-image:linear-gradient(to bottom,#0d47a1 4%,#2979ff);padding-bottom:20px">
          
        </div>
        <a href="#user"><img class="" width="100px" src="img/logo.png"></a>
        <a href="#name"><span class="white-text name"></span></a>
        <a href="#email"><span class="white-text email"></span></a>
      </div></li>
   <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">mail</i>Menu item</a></li>
   <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">call</i> Menu item</a></li>
   <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">android</i> Menu item</a></li>
   <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">dialpad</i> Menu item</a></li>
   <li class="white"><div class="divider"></div></li>
   @endif
    
     

@endsection