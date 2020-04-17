<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Category</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('category')}}">Category List</a></li>
                    <li><a  href="{{route('deletd_category_list')}}">Deleted Category</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="{{route('testimonial')}}" >
                    <i class="fa fa-star"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{route('admin.contact')}}" >
                    <i class="fa fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
