@include('header')

<html>
<div class="container-fluid w-75 mt-4">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card mb-4 shadow-sm border border-3 border-secondary">

                <div class="card-body ">
                        <div class="product">
                            <form action="cart" method="POST">
                            <h3>Album Enzo</h3>
                            <p>Price : 40 €</p>
                            <p>Promo : non </p>
                                <input type="number" name="quantity" value="0" min="0" max="99">
                            <p>Stock : 99</p>
                                <input type="submit" value="Ajouter au panier">
                            </form>
                        </div>
                </div>
                <img src="https://media.istockphoto.com/photos/blank-vinyl-album-cover-sleeve-mockup-isolated-clipping-path-picture-id536669874?k=20&m=536669874&s=612x612&w=0&h=9pvT9F_6J6kWRjBNvQCJOGeiZkeCTrm7JRgWHqcCLSQ=" alt="" class="w-100 img-fluid">
            </div>
        </div>
    </div>
</div>
@include('footer')
</html>


