<section class="info-title">
    <p class="panel-title">
        Order Form
    </p>
</section>
<section id="orderform" class="info">
    <form method="post" action="<?=rewrite_url("/order-received")?>">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Customer Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="customer_firstname" placeholder="First name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="customer_lastname" placeholder="Last name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="customer_email" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="customer_phone" placeholder="Phone number" required />
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
                            <label for="pickup_date">Pickup Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control datepicker" name="pickup_date" id="pickup_date" required>
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        
                        <label id="payment_method">Payment Method</label>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="payment_method" value="Cash" aria-labelledby="payment_method" checked/>
                                </span>
                                <span class="form-control">Cash</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="payment_method" value="Paypal" aria-labelledby="payment_method"/>
                                </span>
                                <span class="form-control">Paypal</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio" name="payment_method" value="Blood of the Innocent" aria-labelledby="payment_method"/>
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
                                <input id="vulture" name="flavor_vulture" type="text" class="quantity form-control text-center" value="0" min="0" max="99" />
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
                                <input id="tooth" name="flavor_tooth" type="text" class="quantity form-control text-center" value="0" min="0" max="99" />
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
                                <input id="snaildog" name="flavor_snaildog" type="text" class="quantity form-control text-center" value="0" min="0" max="99 /">
                                <span class="input-group-btn data-up">
                                    <button type="button" class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                </span>
                            </div>
                        </div>
                        
                        Order total: <span class="total"></span>
                        <input type="hidden" name="order_total" value="" />
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