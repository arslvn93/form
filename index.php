<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form MLS</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery/jquery.js"></script>
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css">
    <script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
</head>
    <style>
        .btn-primary {
            color: #fff;
            background-color: #40d8a1;
            border-color: #40d8a1;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #35b587;
            border-color: #35b587;
        }
        .btn-primary:focus {
            color: #fff;
            background-color: #35b587;
            border-color: #35b587;
            box-shadow: 0 0 0 0.25rem #35b587;
        }
        .btn-primary:active {
            color: #fff;
            background-color: #35b587;
            border-color: #35b587;
        }
        .btn-primary:focus, .btn-primary:active:focus {
            box-shadow: 0 0 0 0.25rem #35b587;
        }
        .btn-outline-primary {
            color: #40d8a1;
            border-color: #40d8a1;
        }
        .btn-outline-primary:hover {
            color: #fff;
            background-color: #40d8a1;
            border-color: #40d8a1;
        }
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.25rem #35b587;
        }
        .btn-outline-primary:active, .btn-outline-primary.active {
            color: #fff;
            background-color: #40d8a1;
            border-color: #40d8a1;
        }
        .btn-outline-primary:focus, .btn-outline-primary.active:focus {
            box-shadow: 0 0 0 0.25rem #35b587 !important;
        }
        .form-check-input[type=radio], .form-check-input[type=radio] {
            border-radius: 0;
            transition: .2s;
        }
        .form-check-input:checked {
            border-color: #40d8a1;
        }
        .form-check-input:focus {
            box-shadow: 0 0 0 0.25rem #35b587;
        }
        .form-check-input:checked[type=radio], .form-check-input:checked[type=checkbox] {
            background: #40d8a1;
        }
    </style>
<body>
    <input type="hidden" name="type" id="type">
    <div class="container">
        <div class="row justify-content-center" id="form_mls_number">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="mls_number" class="form-label">MLS Number</label>
                                <input type="text" name="mls_number" id="mls_number" class="form-control" id="mls_number" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary btnSubmit" type="submit" onclick="targetFormArray=['form_mls_number', 'form_mls_number_result']">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_mls_number_result">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <div id="card-header">
                                <h5 class="card-title mb-4" id="mls_agreement"></h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="mls_address"></h6>
                            </div>
                            <hr>
                            <div id="divCustomer">
                                <div class="row rowCustomer">
                                    <div class="form-group mb-4 col-xl-9 col-md-9 col-sm-9 col-9">
                                        <label for="name0" class="form-label labelCustomerName"></label>
                                        <input type="text" name="names[]" id="name0" class="form-control inputCustomerName" required>
                                    </div>
                                    <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                        <div class="form-group">
                                            <label for="" class="form-label text-nowrap labelTypeCustomer" style="font-size: 0.8rem; line-height: 1.4rem;"></label>
                                            <button type="button" class="form-control btn btn-outline-primary" onclick="addInputCustomer(); setOldValuesInputCustomers();">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="price" class="form-label" id="labelPrice"></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Price" aria-describedby="price" required min="0" oninput="price_input(); commas_number_input(price);">
                                </div>
                            </div>
                            <div class="form-group mb-4" id="divDeposit">
                                <label for="deposit" class="form-label" id="labelDeposit">Deposit Amount</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" name="deposit" id="deposit" class="form-control" placeholder="Deposit" aria-label="Deposit" aria-describedby="deposit" required min="0" oninput="commas_number_input(deposit);">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputDate" class="form-label" id="labelDate"></label>
                                <input type="text" id="inputDate" autocomplete="off" class="form-control" placeholder="Date" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary btnSubmit" type="submit">Next</button>
                                <button class="btn" type="button" onclick="backPreviousForm();">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_legal_descriptions">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <div id="divLegalDescriptionCondo" class="mb-4">
                                <label for="" class="form-label"><strong>Legal</strong> Description of Condo</label>
                                <div class="row mb-2">
                                    <label for="legal_description_condo_unit" class="col-3 col-form-label">UNIT</label>
                                    <div class="col-3">
                                        <input type="text" name="legal_description_condo_unit" id="legal_description_condo_unit" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="legal_description_condo_level" class="col-3 col-form-label">LEVEL</label>
                                    <div class="col-3">
                                        <input type="text" name="legal_description_condo_level" id="legal_description_condo_level" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div id="divLegalDescriptionParkingSpot">
                                <div class="row rowParkingSpot">
                                    <div class="col-12">
                                        <div class="form-group mb-4">
                                            <label for="" class="form-label labelParkingSpot"><strong>Legal</strong> Description of Parking Spot</label>
                                            <div class="row mb-2">
                                                <label for="legal_description_parking_spot_unit_0" class="col-3 col-form-label">UNIT</label>
                                                <div class="col-3">
                                                    <input type="text" name="legal_description_parking_spot_unit" id="legal_description_parking_spot_unit_0" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="legal_description_parking_spot_level" class="col-3 col-form-label">LEVEL</label>
                                                <div class="col-3">
                                                    <input type="text" name="legal_description_parking_spot_level" id="legal_description_parking_spot_level" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="divLegalDescriptionLocker" class="mb-4">
                                <label for="" class="form-label"><strong>Legal</strong> Description of Locker</label>
                                <div class="row mb-2">
                                    <label for="legal_description_locker_unit" class="col-3 col-form-label">UNIT</label>
                                    <div class="col-3">
                                        <input type="text" name="legal_description_locker_unit" id="legal_description_locker_unit" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="legal_description_locker_level" class="col-3 col-form-label">LEVEL</label>
                                    <div class="col-3">
                                        <input type="text" name="legal_description_locker_level" id="legal_description_locker_level" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4" id="divLegalDescriptionProperty">
                                <label for="legal_description_property" class="form-label">What is the Legal Description of the Property?</label>
                                <textarea name="legal_description_property" id="legal_description_property" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary btnSubmit" type="submit">Next</button>
                                <button class="btn" type="button" onclick="backPreviousForm();">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_condition_finance">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <label for="">Finance Condition</label>
                            <div class="card my-4">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="finance_condition" id="no_finance_condition" value="No Finance Condition" class="form-check-input">
                                                <label for="no_finance_condition" class="form-check-label">No Finance Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="finance_condition" id="one_finance_condition" value="One Finance Condition" class="form-check-input">
                                                <label for="one_finance_condition" class="form-check-label">One Finance Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="finance_condition" id="two_finance_condition" value="Two Finance Condition" class="form-check-input">
                                                <label for="two_finance_condition" class="form-check-label">Two Finance Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="finance_condition" id="three_finance_condition" value="Three Finance Condition" class="form-check-input">
                                                <label for="three_finance_condition" class="form-check-label">Three Finance Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="finance_condition" id="four_finance_condition" value="Four Finance Condition" class="form-check-input">
                                                <label for="four_finance_condition" class="form-check-label">Four Finance Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="finance_condition" id="five_finance_condition" value="Five Finance Condition" class="form-check-input">
                                                <label for="five_finance_condition" class="form-check-label">Five Finance Condition</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btnSubmit" type="submit">Next</button>
                                <button class="btn" type="button" onclick="backPreviousForm();">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_condition_status_review">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <label for="">Status Review Condition</label>
                            <div class="card my-4">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="status_review_condition" id="no_status_review_condition" value="No Status Review Condition" class="form-check-input">
                                                <label for="no_status_review_condition" class="form-check-label">No Status Review Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="status_review_condition" id="one_status_review_condition" value="One Status Review Condition" class="form-check-input">
                                                <label for="one_status_review_condition" class="form-check-label">One Status Review Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="status_review_condition" id="two_status_review_condition" value="Two Status Review Condition" class="form-check-input">
                                                <label for="two_status_review_condition" class="form-check-label">Two Status Review Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="status_review_condition" id="three_status_review_condition" value="Three Status Review Condition" class="form-check-input">
                                                <label for="three_status_review_condition" class="form-check-label">Three Status Review Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="status_review_condition" id="four_status_review_condition" value="Four Status Review Condition" class="form-check-input">
                                                <label for="four_status_review_condition" class="form-check-label">Four Status Review Condition</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="status_review_condition" id="five_status_review_condition" value="Five Status Review Condition" class="form-check-input">
                                                <label for="five_status_review_condition" class="form-check-label">Five Status Review Condition</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btnSubmit" type="submit">Next</button>
                                <button class="btn" type="button" onclick="backPreviousForm()">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_condition_inspection">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <label for="">Inspection Condition</label>
                            <div class="card my-4">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="inspection_condition" id="no_inspection_condition" value="No Inspection Condition" class="form-check-input">
                                                <label for="no_inspection_condition" class="form-check-label">No Inspection Condition</label>
                                            </div>   
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="inspection_condition" id="one_business_day" value="One Business Day" class="form-check-input">
                                                <label for="one_business_day" class="form-check-label">One Business Day</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="inspection_condition" id="two_business_day" value="Two Business Day" class="form-check-input">
                                                <label for="two_business_day" class="form-check-label">Two Business Day</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="inspection_condition" id="three_business_day" value="Three Business Day" class="form-check-input">
                                                <label for="three_business_day" class="form-check-label">Three Business Day</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="inspection_condition" id="four_business_day" value="Four Business Day" class="form-check-input">
                                                <label for="four_business_day" class="form-check-label">Four Business Day</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="radio" name="inspection_condition" id="five_business_day" value="Five Business Day" class="form-check-input">
                                                <label for="five_business_day" class="form-check-label">Five Business Day</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary btnSubmit" type="submit">Next</button>
                                <button class="btn" type="button" onclick="backPreviousForm()">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_chattel">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <label for="">What <strong>Chattels</strong> Are Included?</label>
                            <div class="card my-4">
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_1" class="form-check-input" value="Stainless Steel Fridge/Freezer">
                                                <label for="chattel_1" class="form-check-label">Stainless Steel Fridge/Freezer</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_2" class="form-check-input" value="Stainless Steel Over-the-Range Microwave with Built in Exhaust Fan">
                                                <label for="chattel_2" class="form-check-label">Stainless Steel Over-the-Range Microwave with Built in Exhaust Fan</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_3" class="form-check-input" value="Stainless Steel Dishwasher">
                                                <label for="chattel_3" class="form-check-label">Stainless Steel Dishwasher</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_4" class="form-check-input" value="Stainless Steel Oven With Electric Range">
                                                <label for="chattel_4" class="form-check-label">Stainless Steel Oven With Electric Range</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_5" class="form-check-input" value="Stacked Front Loading Washer & Dryer">
                                                <label for="chattel_5" class="form-check-label">Stacked Front Loading Washer & Dryer</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_6" class="form-check-input" value="All Electric Light Fixtures">
                                                <label for="chattel_6" class="form-check-label">All Electric Light Fixtures</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input type="checkbox" name="chattels" id="chattel_7" class="form-check-input" value="All Existing Window Coverings">
                                                <label for="chattel_7" class="form-check-label">All Existing Window Coverings</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check" id="form_chattel_order">
                                                <input type="checkbox" name="chattels" id="chattel_other" class="form-check-input" value="Other">
                                                <label for="chattel_other" class="form-check-label" id="label_chattel_other">Other</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary btnSubmit" type="submit">Next</button>
                                <button class="btn" type="button" onclick="backPreviousForm()">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="form_thank_you">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4 d-flex justify-content-center flex-column">
                        <p class="card-text text-center">Thank you! Please check your email to download the offer.</p>
                        <button class="btn btn-primary d-block mt-2" onclick="location.reload();">Draft Another Offer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var previous_mls_number = '';
        var customerNamesArray = [];
        var indexTargetForm = 0;
        var targetFormArray = ['form_mls_number', 'form_mls_number_result'];
        var targetFinalForm = '';
        var form_mls_number = document.getElementById('form_mls_number');
        var form_mls_number_result = document.getElementById('form_mls_number_result');
        var form_condition_finance = document.getElementById('form_condition_finance');
        var form_condition_status_review = document.getElementById('form_condition_status_review');
        var form_condition_inspection = document.getElementById('form_condition_inspection');
        var form_chattel = document.getElementById('form_chattel');
        var form_thank_you = document.getElementById('form_thank_you');
        var divCustomer = document.getElementById('divCustomer');
        var form_legal_descriptions = document.getElementById('form_legal_descriptions');
        var divLegalDescriptionCondo = document.getElementById('divLegalDescriptionCondo');
        var divLegalDescriptionParkingSpot = document.getElementById('divLegalDescriptionParkingSpot');
        var divLegalDescriptionLocker = document.getElementById('divLegalDescriptionLocker');
        var divLegalDescriptionProperty = document.getElementById('divLegalDescriptionProperty');

        var legal_description_condo_unit = document.getElementById('legal_description_condo_unit');
        var legal_description_condo_level = document.getElementById('legal_description_condo_level');
        var legal_description_locker_unit = document.getElementById('legal_description_locker_unit');
        var legal_description_locker_level = document.getElementById('legal_description_locker_level');
        var legal_description_property = document.getElementById('legal_description_property');
        var mls_agreement = document.getElementById('mls_agreement');
        var mls_address = document.getElementById('mls_address');
        var chattel_other = document.getElementById('chattel_other');
        var form_chattel_other = document.getElementById('form_chattel_other');
        var label_chattel_other = document.getElementById('label_chattel_other');

        var labelPrice = document.getElementById('labelPrice');
        var labelDeposit = document.getElementById('labelDeposit');
        var labelDate = document.getElementById('labelDate');
        var deposit = document.getElementById('deposit');

        let labelCustomerName_html = '';
        let labelTypeCustomer_html = '';
        let labelPrice_html = '';
        let labelDate_html = '';
        let labelDeposit_html = '';
        let labelType_html = '';

        chattel_other.onchange = function() {
            if (this.checked == true) {
                label_chattel_other.innerHTML = `<input type="text" id="input_chattel_other" class="form-control" placeholder="Type Something" value="${label_chattel_other.innerHTML}">`;
                this.value = document.getElementById('input_chattel_other').value;
            } else {
                label_chattel_other.innerHTML = document.getElementById('input_chattel_other').value;
                this.value = label_chattel_other.innerHTML;
            }
        }

        function closed_date_weekend() {
            var datetime = $('#inputDate').datepicker('getDate');
            var day = datetime.getDay();
            var date = datetime.getDate();
            var month = datetime.getMonth();
            var year = datetime.getYear();
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            if (days[day] == 'Saturday' || days[day] == 'Sunday') {
                alert('Cannot have Closing Date on a Weekend');
                inputDate.value = '';
            }
            actualDate = `${year}-${month}-${date}`;
        };

        function getActualDate() {
            var datetime = $('#inputDate').datepicker('getDate');
            var day = datetime.getDay();
            var date = datetime.getDate().toString().padStart(2, '0');
            var month = datetime.getMonth().toString().padStart(2, '0');
            var year = datetime.getFullYear();

            actualDate = `${year}-${month}-${date}`;
            return actualDate;
        }

        inputDate.onkeypress = function(type) {
            type.preventDefault();
        }

        price.addEventListener('keypress', function(type) {
            var numbers = '1234567890';

            if (!numbers.includes(type.key)) {
                alert('Numbers Only Please');
                type.preventDefault();
            }
        });

        deposit.addEventListener('keypress', function(type) {
            var numbers = '1234567890,';

            if (!numbers.includes(type.key)) {
                alert('Numbers Only Please');
                type.preventDefault();
            }
        });

        function setOldValuesInputCustomers() {
            var rowCustomers = divCustomer.querySelectorAll('.rowCustomer');
            for (let x = 0; x < rowCustomers.length - 1; x++) {
                rowCustomers[x].querySelector('.inputCustomerName').value = customerNamesArray[x];
            }
        }

        function getValuesAllInputCustomers() {
            customerNamesArray = [];
            var rowCustomers = divCustomer.querySelectorAll('.rowCustomer');

            rowCustomers.forEach(function(rowCustomer) {
                customerNamesArray.push(rowCustomer.querySelector('.inputCustomerName').value);
            });

            if (customerNamesArray.length == 1) {
                return customerNamesArray.join('');
            }

            return customerNamesArray;
        }

        function addInputCustomer() {
            var rowCustomers = divCustomer.querySelectorAll('.rowCustomer');
            rowCustomers[0].querySelector('.labelCustomerName').innerHTML = `${labelCustomerName_html} 1`;

            if (rowCustomers.length != 4) {
                getValuesAllInputCustomers();
                divCustomer.innerHTML += `<div class="row rowCustomer"><div class="form-group mb-4 col-xl-9 col-md-9 col-sm-9 col-9"><label for="name${rowCustomers.length}" class="form-label labelCustomerName">${labelCustomerName_html} ${rowCustomers.length + 1}</label><input type="text" name="names[]" id="name${rowCustomers.length}" class="form-control inputCustomerName" required></div><div class="col-xl-3 col-md-3 col-sm-3 col-3"><div class="form-group"><label for="" class="form-label text-nowrap opacity-0">_</label><button type="button" class="btnRemoveCustomer form-control btn btn-outline-danger" onclick="removeInputCustomer('${rowCustomers.length}')">x</button></div></div></div>`;
            } else {
                alert(`Sorry, 4 is the max number of ${labelTypeCustomer_html.toLowerCase()}s`);
            }
        }

        function addInputParkingSpot() {
            var rowParkingSpots = divLegalDescriptionParkingSpot.querySelectorAll('.rowParkingSpot');
            rowParkingSpots[0].querySelector('.labelParkingSpot').innerHTML = `<strong>Legal</strong> Description of Parking Spot 1`;

            divLegalDescriptionParkingSpot.innerHTML += `<div class="row rowParkingSpot"><div class="col-12"><div class="form-group mb-4"><label for="" class="form-label labelParkingSpot"><strong>Legal</strong> Description of Parking Spot ${rowParkingSpots.length + 1}</label><div class="row mb-2"><label for="legal_description_parking_spot_unit_${rowParkingSpots.length}" class="col-3 col-form-label">UNIT</label><div class="col-3"><input type="text" name="legal_description_parking_spot_unit" id="legal_description_parking_spot_unit_${rowParkingSpots.length}" class="form-control"></div></div><div class="row"><label for="legal_description_parking_spot_level_${rowParkingSpots.length}" class="col-3 col-form-label">LEVEL</label><div class="col-3"><input type="text" name="legal_description_parking_spot_level" id="legal_description_parking_spot_level_${rowParkingSpots.length}" class="form-control"></div></div></div></div></div>`;
        }
    
        function removeInputCustomer(indexRowCustomer) {
            var rowCustomers = divCustomer.querySelectorAll('.rowCustomer');
            rowCustomers[indexRowCustomer].remove();
            updateAllInputCustomers();
        }

        function removeAllInputCustomers() {
            var rowCustomers = divCustomer.querySelectorAll('.rowCustomer');

            let indexRowCustomer = 0;
            rowCustomers.forEach(function(rowCustomer) {
                if (indexRowCustomer != 0) {
                    rowCustomer.remove();
                }
                indexRowCustomer++;
            });
            rowCustomers[0].querySelector('.inputCustomerName').value = '';
        }

        function updateAllInputCustomers() {
            var rowCustomers = divCustomer.querySelectorAll('.rowCustomer');

            let indexRowCustomer = 0;
            rowCustomers.forEach(function(rowCustomer) {
                if (indexRowCustomer != 0) {
                    rowCustomer.querySelector('.labelCustomerName').innerHTML = `${labelCustomerName_html} ${indexRowCustomer + 1}`;
                    rowCustomer.querySelector('.labelCustomerName').setAttribute('for', `name${indexRowCustomer}`);
                    rowCustomer.querySelector('.btnRemoveCustomer').setAttribute('onclick', `removeInputCustomer('${indexRowCustomer}')`);
                    rowCustomer.querySelector('.inputCustomerName').setAttribute('id', `name${indexRowCustomer}`);
                }
                indexRowCustomer++;
            });

            if (rowCustomers.length == 1) {
                rowCustomers[0].querySelector('.labelCustomerName').innerHTML = labelCustomerName_html;
            }
        }

        function price_input() {
            if (price.value != '') {
                deposit.value = (5 * parseInt(price.value.replace(/,/g, ''))) / 100;
            } else {
                deposit.value = '0';
            }
        };

        function commas_number_input(input_element) {
            var new_value = Intl.NumberFormat().format(input_element.value.replace(/,/g, ''));

            input_element.value = new_value;
        }

        function hideAllForms() {
            form_mls_number.style.display = 'none';
            form_mls_number_result.style.display = 'none';
            form_condition_finance.style.display = 'none';
            form_condition_status_review.style.display = 'none';
            form_condition_inspection.style.display = 'none';
            form_legal_descriptions.style.display = 'none';
            form_chattel.style.display = 'none';
            form_thank_you.style.display = 'none';
        }

        window.onload = function () {
            displayForm();
            $('#inputDate').datepicker({
                changeYear: true,
                changeMonth: true,
                dateFormat: 'DD MM d, yy',
            });
        }

        function displayForm() {
            hideAllForms();

            console.log(targetFormArray);
            if (targetFormArray.length == indexTargetForm + 1) {
                document.getElementById(targetFormArray[indexTargetForm]).querySelector('.btnSubmit').innerHTML = 'Draft Offer Now';
            }

            document.getElementById(targetFormArray[indexTargetForm]).style.display = 'flex';
            indexTargetForm++;
        }

        function backPreviousForm() {
            hideAllForms();
            indexTargetForm-=2;
            document.getElementById(targetFormArray[indexTargetForm]).style.display = 'flex';
            indexTargetForm++;
        }

        function getSelectedFinanceCondition() {
            var finance_conditions = document.querySelectorAll('input[name="finance_condition"]');

            for(f = 0; f < finance_conditions.length; f++) {
                if (finance_conditions[f].checked) {
                    return finance_conditions[f].value;
                }
            }
            return '';
        }

        function removeSelectedFinanceCondition() {
            var finance_conditions = document.querySelectorAll('input[name="finance_condition"]');

            for(f = 0; f < finance_conditions.length; f++) {
                if (finance_conditions[f].checked) {
                    finance_conditions[f].checked = false;
                }
            }
        }

        function getSelectedStatusReviewCondition() {
            var status_review_conditions = document.querySelectorAll('input[name="status_review_condition"]');

            for(s = 0; s < status_review_conditions.length; s++) {
                if (status_review_conditions[s].checked) {
                    return status_review_conditions[s].value;
                }
            }
            return '';
        }

        function removeSelectedStatusReviewCondition() {
            var status_review_conditions = document.querySelectorAll('input[name="status_review_condition"]');

            for(s = 0; s < status_review_conditions.length; s++) {
                if (status_review_conditions[s].checked) {
                    status_review_conditions[s].checked = false;
                }
            }
        }

        function getSelectedInspectionCondition() {
            var inspection_conditions = document.querySelectorAll('input[name="inspection_condition"]');

            for(i = 0; i < inspection_conditions.length; i++) {
                if (inspection_conditions[i].checked) {
                    return inspection_conditions[i].value;
                }
            }
            return '';
        }

        function removeSelectedInspectionCondition() {
            var inspection_conditions = document.querySelectorAll('input[name="inspection_condition"]');

            for(i = 0; i < inspection_conditions.length; i++) {
                if (inspection_conditions[i].checked) {
                    inspection_conditions[i].checked = false;
                }
            }
        }

        function getSelectedChattels() {
            var chattels = form_chattel.querySelectorAll('input[name="chattels"]');
            var chattels_array = [];

            for(c = 0; c < chattels.length; c++) {
                if (chattels[c].checked) {
                   chattels_array.push(chattels[c].value);
                }
            }

            var chattels_values = chattels_array.join(', ');
            return chattels_values;
        }

        function removeSelectedChattels() {
            var chattels = form_chattel.querySelectorAll('input[name="chattels"]');

            for(c = 0; c < chattels.length; c++) {
                if (chattels[c].checked) {
                   chattels[c].checked = false;
                }
            }
        }

        function getValuesAllParkingSpots() {
            var rowParkingSpots = divLegalDescriptionParkingSpot.querySelectorAll('.rowParkingSpot');
            var parking_spots_array = [];

            var countAllEmptyParkingSpot = 0;
            var indexParkingSpot = 0;
            rowParkingSpots.forEach(function(rowParkingSpot) {
                var parking_spot_unit = rowParkingSpot.querySelector('input[name="legal_description_parking_spot_unit"]').value;
                var parking_spot_level = rowParkingSpot.querySelector('input[name="legal_description_parking_spot_level"]').value;

                parking_spots_array.push({
                    'Unit': parking_spot_unit,
                    'Level': parking_spot_level,
                });

                if (parking_spot_unit == '' && parking_spot_level == '') {
                    parking_spots_array[indexParkingSpot] = '';
                    countAllEmptyParkingSpot += 2;
                }
                indexParkingSpot = 1;
            });

            if (rowParkingSpots.length * 2 == countAllEmptyParkingSpot) {
                parking_spots_array = [];
            }

            return parking_spots_array;
        }

        function sendForm(final_target_form) {
            hideAllForms();
            form_thank_you.style.display = 'flex';
            var url = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjEzNjI4OSI_3D';
            var xhttp;
            if (window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();
            } else {
                xhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            var formData = new FormData();
            formData.append('Names', JSON.stringify(getValuesAllInputCustomers()));
            formData.append('Date', getActualDate());
            formData.append('Price', price.value);
            formData.append('type', type.value);

            if (final_target_form == 'form_freehold_purchase_agreement') {
                formData.append('Deposit', deposit.value);
                formData.append('Finance', getSelectedFinanceCondition());
                formData.append('Inspection', getSelectedInspectionCondition());
                formData.append('LegalDescription', legal_description_property.value);
                formData.append('Chattels', getSelectedChattels());
            } else if (final_target_form == 'form_condo_purchase_agreement') {
                formData.append('Deposit', deposit.value);
                formData.append('Finance', getSelectedFinanceCondition());
                formData.append('Status', getSelectedStatusReviewCondition());
                formData.append('Unit', legal_description_condo_unit.value);
                formData.append('Level', legal_description_condo_level.value);
                if (getValuesAllParkingSpots().length == 0) {
                    formData.append('Parking', '');
                } else {
                    formData.append('Parking', JSON.stringify(getValuesAllParkingSpots()));
                }
                formData.append('Chattels', getSelectedChattels());
            }
            xhttp.open('POST', url, true);
            xhttp.send(formData);
        }

        function emptyAllForms() {
            removeAllInputCustomers();
            price.value = '';
            deposit.value = '';
            inputDate.value = '';
            legal_description_condo_unit.value = '';
            legal_description_condo_level.value = '';
            legal_description_locker_unit.value = '';
            legal_description_locker_level.value = '';
            legal_description_property.value = '';
            divLegalDescriptionParkingSpot.innerHTML = `<div class="row rowParkingSpot"><div class="col-12"><div class="form-group mb-4"><label for="" class="form-label labelParkingSpot"><strong>Legal</strong> Description of Parking Spot</label><div class="row mb-2"><label for="legal_description_parking_spot_unit_0" class="col-3 col-form-label">UNIT</label><div class="col-3"><input type="text" name="legal_description_parking_spot_unit" id="legal_description_parking_spot_unit_0" class="form-control"></div></div><div class="row"><label for="legal_description_parking_spot_level_0" class="col-3 col-form-label">LEVEL</label><div class="col-3"><input type="text" name="legal_description_parking_spot_level" id="legal_description_parking_spot_level_0" class="form-control"></div></div></div></div></div>`;
            removeSelectedFinanceCondition();
            removeSelectedStatusReviewCondition();
            removeSelectedInspectionCondition();
            removeSelectedChattels();
            $('#inputDate').datepicker('option', 'onSelect', '');
        }

        async function getMLSForms() {
            return new Promise(function(resolve, reject) {
                if (previous_mls_number != mls_number.value) {                    
                    // var hero = 'https://cors-anywhere.herokuapp.com/';
                    var hero = 'https://cors-proxy-mls.herokuapp.com/';
                    var url = hero + `https://api.property.ca/v1/listings?mls_number=${mls_number.value}`;
                    var xhttp;
                    if(window.XMLHttpRequest) {
                        xhttp = new XMLHttpRequest();   
                    } else {
                        xhttp = new ActiveXObject('Microsoft.XMLHTTP');
                    }
                    xhttp.onreadystatechange = async function() {
                        if(this.readyState === 4 && this.status === 200) {
                            var response = JSON.parse(this.responseText);
    
                            if (response.hasOwnProperty('data')) {
                                if (response.data.length != 0) {
                                    if (response.data[0].hasOwnProperty('offer') && response.data[0].hasOwnProperty('property_class')) {
                                        divDeposit.style.display = 'none';
                                        emptyAllForms();
                                        divLegalDescriptionCondo.style.display = 'none';
                                        divLegalDescriptionParkingSpot.style.display = 'none';
                                        divLegalDescriptionLocker.style.display = 'none';
                                        divLegalDescriptionProperty.style.display = 'none';
    
                                        let agreement = response.data[0].property_class+' ';
            
                                        if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Rent') {
                                            agreement += 'Lease';
                                            labelCustomerName_html = 'Full Legal Name of Tenant';
                                            labelTypeCustomer_html = 'Tenant';
                                            labelPrice_html = 'Monthly Rent Amount';
                                            labelDate_html = 'Closing Date';
                                            targetFinalForm = 'form_freehold_lease_agreement';
                                        } else if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Sale') {
                                            agreement += 'Purchase';
                                            labelCustomerName_html = 'Full Legal Name of Buyer';
                                            labelTypeCustomer_html = 'Buyer';
                                            labelPrice_html = 'Offer Price';
                                            labelDate_html = 'Closing Date';
                                            divDeposit.style.display = 'block';
                                            targetFormArray.push('form_legal_descriptions');
                                            divLegalDescriptionProperty.style.display = 'block';
                                            targetFormArray.push('form_condition_finance');
                                            targetFormArray.push('form_condition_inspection');
                                            targetFormArray.push('form_chattel');
                                            targetFinalForm = 'form_freehold_purchase_agreement';
                                            $('#inputDate').datepicker('option', 'onSelect', function() {
                                                closed_date_weekend();
                                            });
                                        } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Rent') {
                                            agreement += 'Lease';
                                            labelCustomerName_html = 'Full Legal Name of Tenant';
                                            labelTypeCustomer_html = 'Tenant';
                                            labelPrice_html = 'Monthly Rent Amount';
                                            labelDate_html = 'Closing Date';
                                            targetFinalForm = 'form_condo_lease_agreement';
                                        } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Sale') {
                                            agreement += 'Purchasse';
                                            labelCustomerName_html = 'Full Legal Name of Buyer';
                                            labelTypeCustomer_html = 'Buyer';
                                            labelPrice_html = 'Offer Price';
                                            labelDate_html = 'Closing Date';
                                            divDeposit.style.display = 'block';
                                            targetFormArray.push('form_legal_descriptions');
                                            divLegalDescriptionCondo.style.display = 'block';
                                            
                                            if (response.data[0].parking_spots != 0) {
                                                divLegalDescriptionParkingSpot.style.display = 'block';
                                                for (var x = p = 0; p < response.data[0].parking_spots - 1; p++) {
                                                    addInputParkingSpot();
                                                }
                                            }
            
                                            if (response.data[0].has_locker != null) {
                                                divLegalDescriptionLocker.style.display = 'block';
                                            }
                                            targetFormArray.push('form_condition_finance');
                                            targetFormArray.push('form_condition_status_review');
                                            targetFormArray.push('form_chattel');
                                            targetFinalForm = 'form_condo_purchase_agreement';
                                            $('#inputDate').datepicker('option', 'onSelect', function() {
                                                closed_date_weekend();
                                            });
                                        }
                                        type.value = agreement.replace(' ', '');
                                        divCustomer.querySelectorAll('.rowCustomer')[0].querySelector(`.labelCustomerName`).innerHTML = labelCustomerName_html;
                                        divCustomer.querySelectorAll('.rowCustomer')[0].querySelector(`.labelTypeCustomer`).innerHTML = `Add ${labelTypeCustomer_html}</small>`;
                                        labelPrice.innerHTML = labelPrice_html;
                                        labelDate.innerHTML = labelDate_html;
                                        mls_agreement.innerHTML = agreement + ' Agreement';
                                        mls_address.innerHTML = response.data[0].title;
                                        previous_mls_number = mls_number.value;
                                        resolve('Finish');
                                        return;
                                    }
                                }
                            }
                            alert('MLS Number not supported, please try another one.');
                        }
                    };
                    xhttp.open('GET', url, true);
                    xhttp.send();
                } else {
                    resolve('Finish');
                }
            });
        }

        function goNextForm() {
            return new Promise((resolve, reject) => {
                displayForm();
                resolve('Finish');
            });
        }

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', async function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    if (form.checkValidity()) {
                        if (indexTargetForm != targetFormArray.length) {
                            if (indexTargetForm == 1) {
                                await getMLSForms();
                            }
                            await goNextForm();
                        } else {
                            sendForm(targetFinalForm);
                        }
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>