<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('product.list')}}">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.create')}}">
                    <span data-feather="shopping-cart"></span>
                    Create Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('category.create')}}">
                    <span data-feather="shopping-cart"></span>
                    Create Category
                </a>
            </li>

        </ul>
    </div>
</nav>
