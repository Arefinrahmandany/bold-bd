@extends('backEnd.layouts.app')

@section('main-content')


<!--**********************************
                Content body start
            ***********************************-->

            <div class="bg-light rounded p-2">
                <div class="mb-2"><h3>Basic information</h3></div>
            </div>
<div class="container">
    <form method="" action>
        @csrf
            <div class="product-sub-block mb-3">
                <div class="bg-light rounded p-4">
                    <div class="mb-4">
                        <h5>Product Images & Video</h5>
                        <span class="product-sub-block-tips">Your product images is the first thing your customer sees on the product page.</span>
                    </div>

                    <div class="col-6">
                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                    </div>
                </div>
            </div>

            <div class="product-sub-block mb-3">
                <div class="bg-light rounded p-4">
                    <div class="mb-4">
                        <h5>Product Information</h5>
                        <span class="product-sub-block-tips">Having accurate product information raises discoverability.</span>
                    </div>

                    <div class="col-6">
                        <input class="form-control" type="text" id="product_name" placeholder="Product Name">
                    </div>
                    <div class="translate-input-container col-6 mt-4">
                        <div class="product-sub-block-tips">Recommended Category</div>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <div class="row justify-content-around mt-3">
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Model</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input here">
                        </div>
                    </div>

                    <div class="row justify-content-around mt-3">
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">frame_colour</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Dial Size</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input here">
                        </div>
                    </div>

                    <div class="row justify-content-around mt-3">
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Watch Type</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Movement</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input here">
                        </div>
                    </div>

                    <div class="row justify-content-around mt-3">
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Strap Material</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Watch's Water Resistance</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input here">
                        </div>
                    </div>


                    <div class="row justify-content-around mt-3">
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Waterproof</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="col-5">
                            <label for="exampleInputPassword1" class="form-label">Watch Feature</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input here">
                        </div>
                    </div>

                </div>
            </div>

            <div class="product-sub-block mb-3">
                <div class="bg-light rounded p-4">
                    <div class="mb-4">
                        <h5>Description</h5>
                        <span class="product-sub-block-tips">Having long description helps to build trust by providing more key information in both picture and text form.</span>
                    </div>
                    <div class="col-8 mt-4">
                        <textarea class="" style="width:100%; height:100%;"></textarea>
                    </div>
                    <div class="col-8 mt-3">
                        <div class="next-form-item next-top product-form-item required-true always-visible-false">
                            <div class="next-form-item-label">
                                <label>
                                    <span class="field-label-container required-true">
                                        <span class="field-label">What's in the box *</span>
                                    </span>
                                </label>
                            </div>
                            <div class="next-form-item-control">
                                <div>
                                    <input class="form-control" type="text" name="packageContent" value="" >
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="product-sub-block mb-3">
                <div class="bg-light rounded p-4">
                    <div class="mb-4">
                        <h5>Variants, Price, Stock</h5>
                        <span class="product-sub-block-tips">Add different variants if there are different colour or different sizes.</span>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col"><h6>Price</h6></div>
                            <div class="col"><h6>Quantity</h6></div>
                            <div class="col"><h6>Seller SKU</h6></div>
                            <div class="col"><h6>Colour</h6></div>
                            <div class="col"><h6>Cost</h6></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control" type="number" name="price" placeholder="Bdt"></div>
                            <div class="col"><input class="form-control" type="number" name="qty" placeholder="Quantity"></div>
                            <div class="col"><input class="form-control" type="number" name="sku" placeholder="sku"></div>
                            <div class="col"><input class="form-control" type="text" name="colour" placeholder="colour"></div>
                            <div class="col"><input class="form-control" type="number" name="cost" placeholder="Bdt"></div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="product-sub-block mb-3">
                <div class="bg-light rounded p-4">
                    <div class="mb-4">
                        <h5>Service & Warranty</h5>

                    </div>
                    <div class="mb-3">
                        <div class="mb-4">
                            <h6>Service</h6>
                            <span class="product-sub-block-tips">Sellers can opt to provide warranty for the customers.</span>
                        </div>
                        <div class="col-5 mb-3">
                            <input class="form-control" type="text" name="warranty" placeholder="Warranty Period and Policy">
                        </div>

                    </div>
                </div>
            </div>
            <div class="mb-3 mt-4 ">
                <button class="btn btn-primary" name="submit" type="button">Add Product</button >
            </div>


    </form>
</div>
















            <!--**********************************
        Content body end
    ***********************************-->


    @endsection
