<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
    <div class="container overflow-x: hidden">
        <p></p>
        <div class="row mt-3">
            <div class="col-12">
                <button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">+ Add New
                    Address</button>
            </div>
        </div>
        <div class="row mt-3">
            <h4 class=" col-12 py-2 bg-dark text-white font-weight-bold">Payment Method</h4>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3 rounded">
            <div class="col-2 p-2">
                <img src="MasterCard_Logo.svg.png" height="38px" width="38px">
            </div>
            <div class="col-8 py-2 text-light font-weight-bold">Mastercard
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center ">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customRadio1" name="paymentMethod"
                        value="mastercard">
                    <label class="custom-control-label" for="customRadio1"></label>
                </div>
            </div>
        </div>
        <p></p>
        <div class="row bg-secondary w-auto mx-auto mt-3 rounded">
            <div class="col-2 p-2">
                <img src="COD.png" height="38px" width="38px">
            </div>
            <div class="col-8 py-2 text-light font-weight-bold">Cash On Delivery
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center ">
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="paymentMethod" value="COD">
                    <label class="custom-control-label" for="customRadio2"></label>
                </div>
            </div>
        </div>
        <p></p>
        <button type="button" class="btn btn-outline-info btn-block btn-lg font-weight-bold">+ Add Payment
            Method</button>
        <p></p>
        <div class="row mt-3">
            <h4 class="font-weight-bold text-light col-12 py-2"> Order Summary</h4>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3 rounded">
            <div class="col-12 p-2 text-light">
                <p>Special Platter</p>
                <p>Pepperoni Pizza</p>
                <p>Burger</p>
            </div>
        </div>
        <div class="row mt-3">
            <h4 class="font-weight-bold text-light col-12 py-2"> Cost Summary</h4>
        </div>
        <div class="row bg-secondary w-auto mx-auto mt-3 rounded">
            <div class="col-12 p-2 text-light">
                <p>Shipping</p>
                <p>Item Total</p>
                <p>Total Payment</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="button" class="btn btn-outline-white btn-block btn-info btn-lg font-weight-bold">Confirm
                    Order</button>
            </div>
        </div>
        <p></p>
    </div>
</body>

</html>