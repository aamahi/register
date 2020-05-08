<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{url('/home')}}">
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
                <a href="javascript:;" >
                    <i class="fa fa-shopping-cart"></i>
                    <span>Product</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.product')}}">Product List</a></li>
                    <li><a  href="{{route('add_product')}}">Product Add</a></li>
                    <li><a  href="{{route('deletd_category_list')}}">Deleted Product</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="{{route('admin.order')}}" >
                    <i class="fa fa-tag"></i>
                    <span>Order</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-picture-o"></i>
                    <span>Banner</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.banner')}}">Banner List</a></li>
                    <li><a  href="{{route('delete_slider')}}">Deleted Banner</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="{{route('testimonial')}}" >
                    <i class="fa fa-star"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{route('cupon')}}" >
                    <i class="fa fa-gift"></i>
                    <span>Cupon</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-pencil"></i>
                    <span>Blog</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{route('admin.blog')}}">Blog</a></li>
                    <li><a  href="{{route('deleted_blog')}}">Deleted Blog</a></li>
                </ul>
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
