<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>  Shopping Cart
                    </a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('Order.Show')}}">Show Order List</a></li>
                        <li><a href="{{route('Wishlist.Show')}}">Show Wish List </a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"> Products  <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('product.additem')}}">Add Item </a></li>
                        <li><a href="{{route('product.index')}}">Show All Items </a></li>
                        <li><a href="{{route('product.showitemn')}}">Normal items</a></li>
                        <li><a href="{{route('product.showitems')}}">Sale items </a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>