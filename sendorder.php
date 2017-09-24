<!doctype html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
        <link rel="stylesheet" href="/resources/font-awesome-4.7.0/css/font-awesome.min.css" />
        <link type="text/css" href="resources/numberspinner.css" />
        <link rel="stylesheet" type="text/css" href="resources/stylesheet.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Cadaverous Cupcakes</h1>
            <div class="menu">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="sendorder.php">Order Cupcakes</a>
                <a href="map.html">Map</a>
            </div>
            <div class="slinks">
                <a href="https://facebook.com" target="_blank">
                    <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
                </a>
                <a href="https://instagram.com" target="_blank">
                    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com" target="_blank">
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                </a>
                <a href="https://snapchat.com" target="_blank">
                    <i class="fa fa-snapchat-ghost fa-lg" aria-hidden="true"></i>
                </a>
                <a href="https://yelp.com" target="_blank">
                    <i class="fa fa-yelp fa-lg" aria-hidden="true"></i>
                </a>
            </div>
        </header>
        <div class="content">
            <section class="info-title">
                <p class="panel-title">
                    Order Form
                </p>
            </section>
            <section id="orderform" class="info">
                <form method="post" action="receiveorder.php">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Customer Information</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customerinfo[firstname]" placeholder="First name" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="customerinfo[lastname]" placeholder="Last name" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="customerinfo[email]" placeholder="Email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="phone" class="form-control" name="customerinfo[phonenumber]" placeholder="Phone number" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Order Details</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="pickupdate">Pickup Date</label>
                                        <input type="date" class="form-control" name="pickupdate" id="pickupdate" min="<?=date('Y-m-d')?>" required>
                                    </div>
                                    
                                    <label id="paymentmethod">Payment Method</label>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" name="payment" value="Cash" aria-labelledby="paymentmethod" checked/>
                                            </span>
                                            <span class="form-control">Cash</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" name="payment" value="Paypal" aria-labelledby="paymentmethod"/>
                                            </span>
                                            <span class="form-control">Paypal</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <input type="radio" name="payment" value="Blood of the Innocent" aria-labelledby="paymentmethod"/>
                                            </span>
                                            <span class="form-control">Blood of the Innocent</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Quantities</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="quantity-danger hide alert alert-danger" role="alert">
                                        Please actually buy some cupcakes, you cheap bastard. AND NO NEGATIVE NUMBERS.
                                    </div>
                                    
                                    <div class="form-group product">
                                        <label for="vulture">Vulture's Nest, <span class="price">$3.50</span></label>
                                        <div class="input-group number-spinner">
                                            <span class="input-group-btn data-dwn">
                                                <button type="button" class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                            </span>
                                            <input id="vulture" name="flavorquant[vulture]" type="text" class="quantity form-control text-center" value="0" min="0" max="99" />
                                            <span class="input-group-btn data-up">
                                                <button type="button" class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group product">
                                        <label for="tooth">Tooth Faerie, <span class="price">$4.25</span></label>
                                        <div class="input-group number-spinner">
                                            <span class="input-group-btn data-dwn">
                                                <button type="button" class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                            </span>
                                            <input id="tooth" name="flavorquant[tooth]" type="text" class="quantity form-control text-center" value="0" min="0" max="99" />
                                            <span class="input-group-btn data-up">
                                                <button type="button" class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group product">
                                        <label for="snaildog">Snips, Snails, and Puppy Dog Tails, <span class="price">$3.50</span></label>
                                        <div class="input-group number-spinner">
                                            <span class="input-group-btn data-dwn">
                                                <button type="button" class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                            </span>
                                            <input id="snaildog" name="flavorquant[snaildog]" type="text" class="quantity form-control text-center" value="0" min="0" max="99 /">
                                            <span class="input-group-btn data-up">
                                                <button type="button" class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    Order total: <span class="total"></span>
                                    <input type="hidden" name="ordertotal" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Special Instructions</h3>
                                </div>
                                <div class="panel-body">
                                    <textarea class="form-control" name="requests" value="" placeholder="i.e., any allergies, personalized frosting writing, etc."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submitbutton">
                        <button type="submit" class="btn btn-default">Submit Order</button>
                    </div>
                </form>
            </section>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="resources/numberspinner.js" type="text/javascript"></script>
        <script src="resources/submit.js" type="text/javascript"></script>
        <script src="resources/total.js" type="text/javascript"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>