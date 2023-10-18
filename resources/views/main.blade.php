
@extends('layouts.app')
@section('content')


<div class="slider"></div>
<div class="shop-category">
    <?php for($i=0; $i<15; $i++){ ?>
        <div class="category">
            <img src="https://source.unsplash.com/random/200x240" class="category-img" alt="">
            <p class="category-name">Name of ctegory</p>
        </div>
    <?php } ?>
</div>
<div class="shop-content-wrapper">
    <h4 class="Type">Новинки</h4>
    <div class="shop-content">
        <?php for($i=0; $i<10; $i++){ ?>
        <div class="box-items">
            <img src="https://source.unsplash.com/random/200x240" class="items" alt="">
            <p class="items-description">Name of produst</p>
            <p class="items-description">Category</p>
            <p class="price">499$</p>
            <a href="#" class="cart-btn">Buy</a>
        </div>
        <?php } ?>
    </div>

    <h4 class="Type">Популярные</h4>
    <div class="shop-content">
        <?php for($i=0; $i<10; $i++){ ?>
        <div class="box-items">
            <img src="https://source.unsplash.com/random/200x240" class="items" alt="">
            <p class="items-description">Name of produst</p>
            <p class="items-description">Category</p>
            <p class="price">499$</p>
            <a href="#" class="cart-btn">Buy</a>
        </div>
        <?php } ?>
    </div>
</div>

{{-- <div class="new_products">
    <h4>Новинки</h4>
    <div class="ItemsBox">
        <?php for($i=0; $i<10; $i++){ ?>
            <div class="Item">
                <div class="ItemImg" style="background-image: url('img/img2.jpg')"></div>
                <div>
                    <h3 class="NameOfProduct">Name</h3>
                    <p class="PriceOfProduct">Цена : 99 000 сум</p>
                </div>
                <a class="BuyButton btn btn-success"  href="main/1">Купить</a>
            </div>
        <?php } ?>
    </div>
</div>

<div class="popular_products">
    <h4>Популярные</h4>
    <div class="ItemsBox">
        <?php for($i=0; $i<10; $i++){ ?>
            <div class="Item">
                <div class="ItemImg" style="background-image: url('img/img2.jpg')"></div>
                <div>
                    <h3 class="NameOfProduct">Name</h3>
                    <p class="PriceOfProduct">Цена : 99 000 сум</p>
                </div>
                    <a class="BuyButton btn btn-success"  href="main/1">Купить</a>
            </div>
        <?php } ?>
    </div>
</div> --}}

@include('footer');
@endsection

