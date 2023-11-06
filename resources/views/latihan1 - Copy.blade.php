<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container">
            <p></p>
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">+ Add New Address</button>
                </div>
            </div>
            <p class="bg-dark text-white font-weight-bold">Payment Method</p>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="form-check bg-secondary">
                            <input class="col-12 p-15 mt-2 form-check-input text-left" type="radio" name="options" id="option1" value="option1">
                            <img src="mastercardLogo.png" height="35px" width="35px">
                            <label class="form-check-label text-light" for="option1">
                                Mastercard
                            </label>
                        </div>
                        <p></p>
                        <div class="form-check bg-secondary">
                            <input class="col-12 p-15 mt-2 form-check-input" type="radio" name="options" id="option2" value="option2">
                            <img src="COD.png" height="35px" width="35px">
                            <label class="form-check-label text-light text-left " for="option2">
                                Cash On Delivery
                            </label>
                        </div>
                        <p></p>
                        <button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">+ Add Payment Method</button>
                        <p></p>
                        <p class="bg-dark text-white font-weight-bold">Order Summary</p>
                        <div class="container mt-3">
                            <div class="d-flex flex-column mb-3">
                                <div class="p-2 bg-secondary text-light">Special Platter
                                    <div class="text-light">1x</div>
                                </div>
                                <div class="p-2 bg-secondary text-light">Papperoni Pizza</div>
                                <div class="p-2 bg-secondary text-light">Burger</div>
                            </div>
                        </div>
                        <p class="bg-dark text-white font-weight-bold">Cost Summary</p>
                        <div class="container mt-3">
                            <div class="d-flex flex-column mb-3">
                                <div class="p-2 bg-secondary text-light">Shipping</div>
                                <div class="p-2 bg-secondary text-light">Items Total</div>
                                <div class="p-2 bg-secondary text-light">Total Payment</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-white btn-block btn-info btn-lg font-weight-bold">Confirm Order</button>
            <p></p>
        </div>
    </body>
</html>