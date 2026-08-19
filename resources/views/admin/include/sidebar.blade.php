<style>
  .content-wrapper{
    min-height: 524px;
    margin-left: 15% !important;
  }
  .table .table-bordered .table-striped{
    width: 1530px
  }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="width:15%;">
    <!-- Brand Logo -->
      <!-- <img src="img/Logo.jpg" height="50px" width="50px" style="opacity: 1"> -->
      <span class="brand-link brand-text font-weight-light"><b>Ksquare Energy</b></span>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color:#343a40;">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>Dashboard</p>
            </a>
          </li>
          @if(Auth::user()->email != 'shrutilohariwal@gmail.com')
          <li class="nav-item">
            <a href="{{route('category')}}" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('products')}}" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('productstabing')}}" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>Products Tabing</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('adminContact')}}" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>Contacts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('adminInquiry')}}" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>Inquiries</p>
            </a>
          </li>
          @endif
           <li class="nav-item">
            <a href="{{route('blog')}}" class="nav-link">
              <p>Blog</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('blogfaq')}}" class="nav-link">
              <p>Blog Faq</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('statessolar')}}" class="nav-link">
              <p>States Solar Product</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('citysolar')}}" class="nav-link">
              <p>City Solar Product</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('solar')}}" class="nav-link">
              <p>Solar Product</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('solarfaq')}}" class="nav-link">
              <p>Solar Product Faq</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('certificate')}}" class="nav-link">
              <p>Cerificate</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('teamslife')}}" class="nav-link">
              <p> Happy Teams Activity(life at ksquare)</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('lifeimage')}}" class="nav-link">
              <p>Snapshot Culture(life at ksquare)</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('events')}}" class="nav-link">
              <p>Events</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>