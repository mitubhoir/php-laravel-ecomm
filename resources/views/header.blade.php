<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session()->has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-Comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 right-corner-menu" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success right-corner-menu" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="right-corner-menu btn btn-info" href="cartlist">Cart({{ $total }})</a></li>
                @if (Session()->has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle right-corner-menu" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get('user')['name'] }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                <li><a href="/login" class="btn btn-outline-success right-corner-menu">Login</a></li>
                <li><a href="/register" class="btn btn-outline-success right-corner-menu">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>