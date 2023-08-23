

 <aside class="main-sidebar sidebar-dark-primary elevation-2" style="background-color:#1C2833;">
  
  <a href="{{ route('home') }}" class="brand-link">
   <center>
    <span class="brand-text font-weight-white">InComIT Solution</span>
   </center>
  </a>
 
  <div class="sidebar">

   <div class="user-panel mt-2 mb-2 d-flex">
    <div class="info" align="center">
     <a href="{{ route('home') }}" class="d-block">
      <center>Sales Report</center>
     </a>
    </div>
   </div>

   <!-- Sidebar Menu -->
   <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">   

     <li class="nav-item">
      <a href="#" class="nav-link">
       <i class="nav-icon fas fa-th"></i>
       <p> Manage Post
         <i class="fas fa-angle-left right"></i>
       </p>
      </a>
      <ul class="nav nav-treeview">
       <li class="nav-item">
        <a href="{{ route('blog.add') }}" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>Add Post</p>
        </a>
       </li>
       <li class="nav-item">
        <a href="{{ route('blog.view') }}" class="nav-link">
         <i class="far fa-circle nav-icon"></i>
         <p>View Post</p>
        </a>
       </li>

      </ul>
     </li>
     
    </ul>
   </nav>

     
  </div> 
 </aside>