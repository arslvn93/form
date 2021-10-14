<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form MLS</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
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
    </style>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <p class="card-text m-0" id="card-text">
                                Thank you! Your form has been submitted successfully.
                                <button class="btn btn-primary d-block mt-2" onclick="location.reload();">Refresh Page</button>
                            </p>
                            <div id="card-header">
                                <h5 class="card-title mb-4" id="card-title">Freehold Lease Agreement</h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="card-subtitle">1165 Sherwood Mills Blvd</h6>
                                <hr>
                            </div>
                            <div id="form_mls_number">
                                <div class="form-group">
                                    <label for="mls_number" class="form-label">MLS Number</label>
                                    <input type="text" name="mls_number" id="mls_number" class="form-control" id="mls_number" required>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit" value="Next" onclick="setTarget(this.value)">Next</button>
                                </div>
                            </div>
                        </form>
                        <form class="needs-validation" novalidate id="formMain">
                            <div id="divBuyer">
                                <div class="row">
                                    <div class="form-group mb-4 col-xl-9 col-md-9 col-sm-9 col-9">
                                        <label for="name0" class="form-label labelName"></label>
                                        <input type="text" name="names[]" id="name0" class="form-control" required>
                                    </div>
                                    <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                        <div class="form-group">
                                            <label for="" class="form-label text-nowrap">Add Buyer</label>
                                            <button type="button" class="form-control btn btn-outline-primary" onclick="addInputBuyer()">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="price" class="form-label" id="labelPrice"></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="price" required>
                                </div>
                            </div>
                            <div class="form-group mb-4" id="divDeposit">
                                <label for="deposit" class="form-label" id="labelDeposit">Please Enter the Deposit Amount</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" name="deposit" id="deposit" class="form-control" placeholder="Deposit" aria-label="Deposit" aria-describedby="deposit" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputDate" class="form-label" id="labelDate"></label>
                                <input type="date" name="inputDate" id="inputDate" class="form-control" required>
                            </div>
                            <input type="hidden" name="type" id="type" required>
                            <div id="divLegal">
                                <div class="form-group mb-4" id="divLegalCondo">
                                    <label for="" class="form-label"><strong>Legal</strong> Description of Condo</label>
                                    <div class="row mb-2">
                                        <label for="legal_condo_unit" class="col-3 col-form-label">UNIT</label>
                                        <div class="col-3">
                                            <input type="number" name="legal_condo_unit" id="legal_condo_unit" class="form-control" min="0" value="0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="legal_condo_level" class="col-3 col-form-label">LEVEL</label>
                                        <div class="col-3">
                                            <input type="number" name="legal_condo_level" id="legal_condo_level" class="form-control" min="0" value="0" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="divLegalParkingSpot">
                                    <div class="row rowPark">
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label for="" class="form-label labelPark"><strong>Legal</strong> Description of Parking Spot</label>
                                                <div class="row mb-2">
                                                    <label for="legal_parking_spot_unit_0" class="col-3 col-form-label">UNIT</label>
                                                    <div class="col-3">
                                                        <input type="number" name="legal_parking_spot_unit" id="legal_parking_spot_unit_0" class="form-control" min="0" value="0" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="legal_parking_spot_level" class="col-3 col-form-label">LEVEL</label>
                                                    <div class="col-3">
                                                        <input type="number" name="legal_parking_spot_level" id="legal_parking_spot_level" class="form-control" min="0" value="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4" id="divLegalLocker">
                                    <label for="" class="form-label"><strong>Legal</strong> Description of Locker</label>
                                    <div class="row mb-2">
                                        <label for="legal_locker_unit" class="col-3 col-form-label">UNIT</label>
                                        <div class="col-3">
                                            <input type="number" name="legal_locker_unit" id="legal_locker_unit" class="form-control" min="0" value="0" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="legal_locker_level" class="col-3 col-form-label">LEVEL</label>
                                        <div class="col-3">
                                            <input type="number" name="legal_locker_level" id="legal_locker_level" class="form-control" min="0" value="0" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4" id="divLegalProperty">
                                    <label for="legal_property" class="form-label">What is the Legal Description of the Property?</label>
                                    <textarea name="legal_property" id="legal_property" rows="4" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div id="divCondition">
                                <div class="form-group mb-4" id="divConditionFinance">
                                    <label for="">Finance Condition</label>
                                    <div class="form-check">
                                        <input type="radio" name="finance_condition" id="no_finance_condition" value="No Finance Condition" class="form-check-input" required>
                                        <label for="no_finance_condition" class="form-check-label">No Finance Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="finance_condition" id="one_finance_condition" value="One Finance Condition" class="form-check-input" required>
                                        <label for="one_finance_condition" class="form-check-label">One Finance Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="finance_condition" id="two_finance_condition" value="Two Finance Condition" class="form-check-input" required>
                                        <label for="two_finance_condition" class="form-check-label">Two Finance Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="finance_condition" id="three_finance_condition" value="Three Finance Condition" class="form-check-input" required>
                                        <label for="three_finance_condition" class="form-check-label">Three Finance Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="finance_condition" id="four_finance_condition" value="Four Finance Condition" class="form-check-input" required>
                                        <label for="four_finance_condition" class="form-check-label">Four Finance Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="finance_condition" id="five_finance_condition" value="Five Finance Condition" class="form-check-input" required>
                                        <label for="five_finance_condition" class="form-check-label">Five Finance Condition</label>
                                    </div>
                                </div>
                                <div class="form-group mb-4" id="divConditionStatusReview">
                                    <label for="">Status Review Condition</label>
                                    <div class="form-check">
                                        <input type="radio" name="status_review_condition" id="no_status_review_condition" value="No Status Review Condition" class="form-check-input" required>
                                        <label for="no_status_review_condition" class="form-check-label">No Status Review Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status_review_condition" id="one_status_review_condition" value="One Status Review Condition" class="form-check-input" required>
                                        <label for="one_status_review_condition" class="form-check-label">One Status Review Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status_review_condition" id="two_status_review_condition" value="Two Status Review Condition" class="form-check-input" required>
                                        <label for="two_status_review_condition" class="form-check-label">Two Status Review Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status_review_condition" id="three_status_review_condition" value="Three Status Review Condition" class="form-check-input" required>
                                        <label for="three_status_review_condition" class="form-check-label">Three Status Review Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status_review_condition" id="four_status_review_condition" value="Four Status Review Condition" class="form-check-input" required>
                                        <label for="four_status_review_condition" class="form-check-label">Four Status Review Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status_review_condition" id="five_status_review_condition" value="Five Status Review Condition" class="form-check-input" required>
                                        <label for="five_status_review_condition" class="form-check-label">Five Status Review Condition</label>
                                    </div>
                                </div>
                                <div class="form-group mb-4" id="divConditionInspection">
                                    <label for="">Inspection Condition</label>
                                    <div class="form-check">
                                        <input type="radio" name="inspection_condition" id="no_inspection_condition" value="No Inspection Condition" class="form-check-input" required>
                                        <label for="no_inspection_condition" class="form-check-label">No Inspection Condition</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="inspection_condition" id="one_business_day" value="One Business Day" class="form-check-input" required>
                                        <label for="one_business_day" class="form-check-label">One Business Day</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="inspection_condition" id="two_business_day" value="Two Business Day" class="form-check-input" required>
                                        <label for="two_business_day" class="form-check-label">Two Business Day</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="inspection_condition" id="three_business_day" value="Three Business Day" class="form-check-input" required>
                                        <label for="three_business_day" class="form-check-label">Three Business Day</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="inspection_condition" id="four_business_day" value="Four Business Day" class="form-check-input" required>
                                        <label for="four_business_day" class="form-check-label">Four Business Day</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="inspection_condition" id="five_business_day" value="Five Business Day" class="form-check-input" required>
                                        <label for="five_business_day" class="form-check-label">Five Business Day</label>
                                    </div>
                                </div>
                                <div id="divChattel">
                                    <div class="form-group mb-4">
                                        <label for="">What <strong>Chattels</strong> Are Included?</label>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_1" class="form-check-input" value="Stainless Steel Fridge/Freezer">
                                            <label for="chattels_1" class="form-check-label">Stainless Steel Fridge/Freezer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_2" class="form-check-input" value="Stainless Steel Over-the-Range Microwave with Built in Exhaust Fan">
                                            <label for="chattels_2" class="form-check-label">Stainless Steel Over-the-Range Microwave with Built in Exhaust Fan</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_3" class="form-check-input" value="Stainless Steel Dishwasher">
                                            <label for="chattels_3" class="form-check-label">Stainless Steel Dishwasher</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_4" class="form-check-input" value="Stainless Steel Oven With Electric Range">
                                            <label for="chattels_4" class="form-check-label">Stainless Steel Oven With Electric Range</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_5" class="form-check-input" value="Stacked Front Loading Washer & Dryer">
                                            <label for="chattels_5" class="form-check-label">Stacked Front Loading Washer & Dryer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_6" class="form-check-input" value="All Electric Light Fixtures">
                                            <label for="chattels_6" class="form-check-label">All Electric Light Fixtures</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_7" class="form-check-input" value="All Existing Window Coverings">
                                            <label for="chattels_7" class="form-check-label">All Existing Window Coverings</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="chattels" id="chattels_8" class="form-check-input" value="Other">
                                            <label for="chattels_8" class="form-check-label">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit" onclick="setTarget()">Draft Offer Now</button>
                                <button class="btn" type="button" onclick="hideForm(); form_mls_number.style.display='block'; formMain.style.display='none';">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var targetForm = '';
        var cardHeader = document.getElementById('card-header');
        var cardTitle = document.getElementById('card-title');
        var cardText = document.getElementById('card-text');
        var cardSubtitle = document.getElementById('card-subtitle');
        var form_mls_number = document.getElementById('form_mls_number');
        var formMain = document.getElementById('formMain');
        var labelPrice = document.getElementById('labelPrice');
        var labelType = document.getElementById('labelType');
        var labelDate = document.getElementById('labelDate');
        var labelDeposit = document.getElementById('labelDeposit');
        var mls_number = document.getElementById('mls_number');
        var names = document.getElementById('names');
        var price = document.getElementById('price');
        var type = document.getElementById('type');
        var inputDate = document.getElementById('inputDate');
        var divDeposit = document.getElementById('divDeposit');
        var deposit = document.getElementById('deposit');
        var divBuyer = document.getElementById('divBuyer');
        var divLegal = document.getElementById('divLegal');
        var legal_condo_unit = document.getElementById('legal_condo_unit');
        var legal_condo_level = document.getElementById('legal_condo_level');
        var legal_parking_spot_unit = document.getElementById('legal_parking_spot_unit');
        var legal_parking_spot_level = document.getElementById('legal_parking_spot_level');
        var legal_locker_unit = document.getElementById('legal_locker_unit');
        var legal_locker_level = document.getElementById('legal_locker_level');
        var legal_property = document.getElementById('legal_property');
        var divLegalCondo = document.getElementById('divLegalCondo');
        var divLegalParkingSpot = document.getElementById('divLegalParkingSpot');
        var divLegalLocker = document.getElementById('divLegalLocker');
        var divLegalProperty = document.getElementById('divLegalProperty');
        var divCondition = document.getElementById('divCondition');
        var divConditionFinance = document.getElementById('divConditionFinance');
        var divConditionStatusReview = document.getElementById('divConditionStatusReview');
        var divConditionInspection = document.getElementById('divConditionInspection');
        var finance_conditions = document.querySelectorAll('input[name="finance_condition"]');
        var status_review_conditions = document.querySelectorAll('input[name="status_review_condition"]');
        var inspection_conditions = document.querySelectorAll('input[name="inspection_condition"]');
        var no_finance_condition = document.getElementById('no_finance_condition');
        var no_status_review_condition = document.getElementById('no_status_review_condition');
        var no_inspection_condition = document.getElementById('no_inspection_condition');
        var chattels_1 = document.getElementById('chattels_1');
        var divChattel = document.getElementById('divChattel');

        let labelName_html = '';
        let labelPrice_html = '';
        let labelDate_html = '';
        let labelDeposit_html = '';
        let labelType_html = '';


        window.onload = function () {
            hideForm();
            form_mls_number.style.display = 'block';
            formMain.style.display = 'none';
            // form_mls_number.style.display = 'none';
            // formMain.style.display = 'block';
        }

        function hideForm() {
            cardHeader.style.display = 'none';
            cardText.style.display = 'none';
        }

        function setTarget(buttonValue) {
            if (buttonValue != undefined) {
                targetForm = buttonValue;
            }
        }

        inputDate.addEventListener('change', function() {
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            if (days[new Date(this.value).getDay()] == 'Saturday' || days[new Date(this.value).getDay()] == 'Sunday') {
                alert('Cannot have Closing Date on a Weekend');
            }
        });

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

        function price_input() {
            if (price.value != '') {
                deposit.value = 5 * parseFloat(price.value) / 100;
            } else {
                deposit.value = '0';
            }
        };

        function addInputBuyer() {
            var rowBuyers = divBuyer.querySelectorAll('.row');

            if (rowBuyers.length != 4) {
                divBuyer.innerHTML += `<div class="row"><div class="form-group mb-4 col-xl-9 col-md-9 col-sm-9 col-9"><label for="name${rowBuyers.length}" class="form-label labelName">${labelName_html} ${rowBuyers.length + 1}</label><input type="text" name="names[]" id="name${rowBuyers.length}" class="form-control" required></div><div class="col-xl-3 col-md-3 col-sm-3 col-3"><div class="form-group"><label for="" class="form-label text-nowrap">Remove Buyer</label><button type="button" class="form-control btn btn-outline-danger" onclick="removeInputBuyer('${rowBuyers.length}')">x</button></div></div></div>`;
            } else {
                alert('Sorry, 4 is the max number of buyers');
            }
        }

        function addInputParkingSpot()
        {
            var rowParkingSpots = divLegalParkingSpot.querySelectorAll('.rowPark');

            divLegalParkingSpot.innerHTML += `<div class="row rowPark"><div class="col-12"><div class="form-group mb-4"><label for="" class="form-label labelPark"><strong>Legal</strong> Description of Parking Spot ${rowParkingSpots.length + 1}</label><div class="row mb-2"><label for="legal_parking_spot_unit" class="col-3 col-form-label">UNIT</label><div class="col-3"><input type="number" name="legal_parking_spot_unit" id="legal_parking_spot_unit" class="form-control" min="0" value="0" required></div></div><div class="row"><label for="legal_parking_spot_level" class="col-3 col-form-label">LEVEL</label><div class="col-3"><input type="number" name="legal_parking_spot_level" id="legal_parking_spot_level" class="form-control" min="0" value="0" required></div></div> </div></div></div>`;
        }

        function removeInputBuyer(indexRowBuyer)
        {
            var rowBuyers = divBuyer.querySelectorAll('.row');
            rowBuyers[indexRowBuyer].remove();
            updateAllInputBuyers();
        }

        function getValuesAllInputBuyers()
        {
            var buyers_values_array = [];

            var rowBuyers = divBuyer.querySelectorAll('.row');

            rowBuyers.forEach(function(rowBuyer) {
                buyers_values_array.push(rowBuyer.querySelector('input').value);
            });

            return buyers_values_array;
        }

        function getValuesAllParkingSpots()
        {
            var rowParkingSpots = divLegalParkingSpot.querySelectorAll('.rowPark');
            var parking_spots_array = [];

            rowParkingSpots.forEach(function(rowParkingSpot) {
                parking_spots_array.push({
                    'Unit': rowParkingSpot.querySelector('input[name="legal_parking_spot_unit"]').value,
                    'Level': rowParkingSpot.querySelector('input[name="legal_parking_spot_level"]').value,
                });
            });

            return parking_spots_array;
        }

        function updateAllInputBuyers() {
            var rowBuyers = divBuyer.querySelectorAll('.row');

            var indexRowBuyer = 0;
            rowBuyers.forEach(function(rowBuyer) {
                if (indexRowBuyer != 0) {
                    rowBuyer.querySelector(`.labelName`).innerHTML = `${labelName_html} ${indexRowBuyer + 1}`;
                    rowBuyer.querySelector('button').setAttribute('onclick', `removeInputBuyer('${indexRowBuyer}')`);
                }
                indexRowBuyer++;
            });
        }

        function emptyAllInputBuyers() {
            var rowBuyers = divBuyer.querySelectorAll('.row');

            var indexRowBuyer = 0;
            rowBuyers.forEach(function(rowBuyer) {
                if (indexRowBuyer != 0) {
                    rowBuyer.remove();
                }
                indexRowBuyer++;
            });
        }

        function getSelectedFinance()
        {
            for(f = 0; f < finance_conditions.length; f++) {
                if (finance_conditions[f].checked) {
                    return finance_conditions[f].value;
                }
            }
        }

        function getSelectedStatusReview()
        {
            for(s = 0; s < status_review_conditions.length; s++) {
                if (status_review_conditions[s].checked) {
                    return status_review_conditions[s].value;
                }
            }
        }

        function getSelectedInspection()
        {
            for(n = 0; n < inspection_conditions.length; n++) {
                if (inspection_conditions[n].checked) {
                    return inspection_conditions[n].value;
                }
            }
        }

        function getSelectedChattels()
        {
            var chattels = divChattel.querySelectorAll('input');
            var chattels_array = [];

            for(c = 0; c < chattels.length; c++) {
                if (chattels[c].checked) {
                   chattels_array.push(chattels[c].value);
                }
            }

            var chattels_values = chattels_array.join(', ');
            return chattels_values;
        }

        function removeSelectedInspection()
        {
            for(n = 0; n < inspection_conditions.length; n++) {
                inspection_conditions[n].removeAttribute('checked');
            }
        }

        function sendForm(name_form) {
            var url = 'https://connect.pabbly.com/workflow/sendwebhookdata/IjEzNjI4OSI_3D';
            var xhttp;
            if (window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();
            } else {
                xhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            var formData = new FormData();
            formData.append('mls_number', mls_number.value);
            formData.append('Names', getValuesAllInputBuyers());
            formData.append('Date', inputDate.value);
            formData.append('Price', price.value);
            formData.append('type', type.value);
            if (name_form == 'form_freehold_purchase_agreement') {
                formData.append('Deposit', deposit.value);
                formData.append('Finance', getSelectedFinance());
                formData.append('Inspection', getSelectedInspection());
                formData.append('LegalDescription', legal_property.value);
                formData.append('Chattels', getSelectedChattels());
            } else if (name_form == 'form_condo_purchase_agreement') {
                formData.append('Deposit', deposit.value);
                formData.append('Finance', getSelectedFinance());
                formData.append('Status', getSelectedStatusReview());
                formData.append('Unit', legal_condo_level.value);
                formData.append('Level', legal_condo_unit.value);
                if (divLegalParkingSpot.style.display == 'block') {
                    formData.append('Parking', getValuesAllParkingSpots());
                } else {
                    formData.append('Parking', null);
                }

                if (divLegalLocker.style.display == 'block') {
                    formData.append('Locker', {
                        'Unit': legal_locker_unit.value,
                        'Level': legal_locker_level.value,
                    });
                } else {
                    formData.append('Locker', null);
                }
                formData.append('Chattels', getSelectedChattels());
            }

            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    hideForm();
                    cardText.style.display = "block";
                    form_mls_number.style.display = 'none';
                    formMain.style.display = 'none';
                }
            };
            xhttp.open('POST', url, true);
            xhttp.send(formData);
        }

        function eventNext() {
            // var hero = 'https://cors-anywhere.herokuapp.com/';
            var hero = 'https://cors-proxy-mls.herokuapp.com/';
            var url = hero + `https://api.property.ca/v1/listings?mls_number=${mls_number.value}`;
            var xhttp;
            if(window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();   
            } else {
                xhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            xhttp.onreadystatechange = function() {
                if(this.readyState === 4 && this.status === 200) {
                    var response = JSON.parse(this.responseText);
                    form_mls_number.style.display = 'none';
                    formMain.style.display = 'block';
                    deposit.value = 'just value for validation';
                    
                    divBuyer.querySelectorAll('.row')[0].querySelector('input').value = '';
                    price.value = '';
                    inputDate.setAttribute('type', 'text');
                    inputDate.value = '';
                    inputDate.setAttribute('type', 'date');

                    divLegalCondo.style.display = 'none';
                    divLegalParkingSpot.style.display = 'none';
                    divLegalLocker.style.display = 'none';
                    divLegalProperty.style.display = 'none';
                    divConditionFinance.style.display = 'none';
                    divConditionStatusReview.style.display = 'none';
                    divConditionInspection.style.display = 'none';
                    divChattel.style.display = 'none';
                    legal_property.value = 'just value for validation';
                    no_finance_condition.checked = true;
                    no_status_review_condition.checked = true;
                    no_inspection_condition.checked = true;
                    chattels_1.checked = true;
                    
                    price.setAttribute('onkeypress', '');
                    price.setAttribute('oninput', '');
                    let agreement = response.data[0].property_class+' ';
                    if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Rent') {
                        agreement += 'Lease';
                        labelName_html = 'Enter the Names of the Tenants';
                        labelPrice_html = 'Monthly Rent Amount';
                        labelDate_html = 'Closing Date';
                        divDeposit.style.display = 'none';
                        targetForm = 'form_freehold_lease_agreement';
                    } else if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Sale') {
                        agreement += 'Purchase';
                        labelName_html = 'Enter the Names of the Buyers';
                        labelPrice_html = 'Offer Price';
                        labelDate_html = 'Closing Date';
                        deposit.value = '';
                        divDeposit.style.display = 'block';
                        targetForm = 'form_freehold_purchase_agreement';
                        price.setAttribute('pnkeypress', 'function(e) {price_keypress(e);}');
                        price.setAttribute('oninput', 'price_input()');
                        divLegalProperty.style.display = 'block';
                        divConditionFinance.style.display = 'block';
                        divConditionInspection.style.display = 'block';
                        no_finance_condition.checked = false;
                        no_inspection_condition.checked = false;
                        legal_property.value = '';
                        chattels_1.checked = false;
                        divChattel.style.display = 'block';
                    } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Rent') {
                        agreement += 'Lease';
                        labelName_html = 'Enter the Names of the Tenants (Seprated by &)';
                        labelPrice_html = 'Monthly Rent Amount';
                        labelDate_html = 'Closing Date';
                        labelDeposit.style.display = 'none';
                        divDeposit.style.display = 'none';
                        targetForm = 'form_condo_lease_agreement';
                    } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Sale') {
                        agreement += 'Purchase';
                        labelName_html = 'Enter the Names of the Buyers';
                        labelPrice_html = 'Offer Price';
                        labelDate_html = 'Closing Date';
                        deposit.value = '';
                        divDeposit.style.display = 'block';
                        targetForm = 'form_condo_purchase_agreement';
                        price.setAttribute('onkeypress', 'function(e) {price_keypress(e);}');
                        price.setAttribute('oninput', 'price_input()');
                        divLegalCondo.style.display = 'block';
                        divLegalLocker.style.display = 'block';
                        divConditionFinance.style.display = 'block';
                        divConditionStatusReview.style.display = 'block';
                        no_finance_condition.checked = false;
                        no_status_review_condition.checked = false;
                        chattels_1.checked = false;
                        divChattel.style.display = 'block';

                        if (response.data[0].parking_spots != 0) {
                            divLegalParkingSpot.style.display = 'block';
                            divLegalParkingSpot.querySelectorAll('.rowPark')[0].querySelector('.labelPark').innerHTML += ' 1';
                            for (var p = 0; p < response.data[0].parking_spots; p++) {
                                addInputParkingSpot();                        
                            }
                        }

                        if (response.data[0].has_locker == null) {
                            divLegalLocker.style.display = 'none';
                        }
                    }
                    emptyAllInputBuyers();
                    divBuyer.querySelectorAll('.row')[0].querySelector(`.labelName`).innerHTML = `${labelName_html} 1`;
                    labelPrice.innerHTML = labelPrice_html;
                    labelDate.innerHTML = labelDate_html;
                    type.value = agreement.replace(' ', '');
                    cardTitle.innerHTML = agreement + ' Agreement';
                    cardSubtitle.innerHTML = response.data[0].title;
                    cardHeader.style.display = 'block';
                }
            };
            xhttp.open('GET', url, true);
            xhttp.send();
        }   

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    if (form.checkValidity()) {
                        if (targetForm == 'Next') {
                            eventNext();
                        } else {
                            sendForm(targetForm);
                        }
                    }
                    form.classList.add('was-validated');
                }, false)
            });
        })();
    </script>
</body>
</html>