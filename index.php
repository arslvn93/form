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
        .btn-check:focus + .btn-primary, .btn-primary:focus {
            color: #fff;
            background-color: #35b587;
            border-color: #35b587;
            box-shadow: 0 0 0 0.25rem #35b587;
        }
        .btn-primary, .btn-primary:active {
            color: #fff;
            background-color: #35b587;
            border-color: #35b587;
        }
        .btn-primary:focus, .btn-primary:active:focus {
            box-shadow: 0 0 0 0.25rem #35b587;
        }
    </style>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-8 col-sm-12" style="margin-top: 4rem;">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="needs-validation" novalidate>
                            <p class="card-text m-0" id="card-text">Thank you! Your form has been submitted successfully.</p>
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
                        <form class="needs-validation" novalidate id="form_freehold_lease_agreement">
                            <div class="form-group mb-4">
                                <label for="FreeholdLeasePrice" class="form-label">Enter the Names of the Tenants</label>
                                <input type="text" name="FreeholdLeaseNames" id="FreeholdLeaseNames" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="FreeholdLeasePrice" class="form-label">Monthly Rent Amount</label>
                                <input type="text" name="FreeholdLeasePrice" id="FreeholdLeasePrice" class="form-control" placeholder="$" required>
                            </div>
                            <div class="form-group">
                                <label for="FreeholdLeaseDate" class="form-label">Closing Date</label>
                                <input type="date" name="FreeholdLeaseDate" id="FreeholdLeaseDate" class="form-control" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary" type="submit" value="form_freehold_lease_agreement" onclick="setTarget(this.value)">Draft Offer Now</button>
                                <button class="btn" type="button" onclick="hideForm(); form_mls_number.style.display='block';">Back</button>
                            </div>
                        </form>
                        <form class="needs-validation" novalidate id="form_freehold_purchase_agreement">
                            <div class="form-group mb-4">
                                <label for="FreeholdPurchaseName" class="form-label">Enter the Names of the Buyers</label>
                                <input type="text" name="FreeholdPurchaseName" id="FreeholdPurchaseName" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="FreeholdPurchasePrice" class="form-label">Offer Price</label>
                                <input type="text" name="FreeholdPurchasePrice" id="FreeholdPurchasePrice" class="form-control" placeholder="$" required>
                            </div>
                            <div class="form-group">
                                <label for="FreeholdPurchaseDate" class="form-label">Closing Date</label>
                                <input type="date" name="FreeholdPurchaseDate" id="FreeholdPurchaseDate" class="form-control" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary" type="submit" value="form_freehold_purchase_agreement" onclick="setTarget(this.value)">Draft Offer Now</button>
                                <button class="btn" type="button" onclick="hideForm(); form_mls_number.style.display='block';">Back</button>

                            </div>
                        </form>
                        <form class="needs-validation" novalidate id="form_condo_lease_agreement">
                            <div class="form-group mb-4">
                                <label for="CondoLeaseNames" class="form-label">Enter the Names of the Tenants (Seprated by &)</label>
                                <input type="text" name="CondoLeaseNames" id="CondoLeaseNames" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="CondoLeasePrice" class="form-label">Monthly Rent Amount</label>
                                <input type="text" name="CondoLeasePrice" id="CondoLeasePrice" class="form-control" placeholder="$" required>
                            </div>
                            <div class="form-group">
                                <label for="CondoLeaseDate" class="form-label">Closing Date</label>
                                <input type="date" name="CondoLeaseDate" id="CondoLeaseDate" class="form-control" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary" type="submit" value="form_condo_lease_agreement" onclick="setTarget(this.value)">Draft Offer Now</button>
                                <button class="btn" type="button" onclick="hideForm(); form_mls_number.style.display='block';">Back</button>
                            </div>
                        </form>
                        <form class="needs-validation" novalidate id="form_condo_purchase_agreement">
                            <div class="form-group mb-4">
                                <label for="CondoPurchaseNames" class="form-label">Enter the Names of the Buyers</label>
                                <input type="text" name="CondoPurchaseNames" id="CondoPurchaseNames" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="CondoPurchaseDate" class="form-label">Closing Date</label>
                                <input type="date" name="CondoPurchaseDate" id="CondoPurchaseDate" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="CondoPurchasePrice" class="form-label">Offer Price</label>
                                <input type="text" name="CondoPurchasePrice" id="CondoPurchasePrice" class="form-control" placeholder="$" required>
                            </div>
                            <div class="form-group">
                                <label for="CondoPurchaseDeposit" class="form-label">Please Enter the Deposit Amount</label>
                                <input type="text" name="CondoPurchaseDeposit" id="CondoPurchaseDeposit" class="form-control" placeholder="$" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-primary" type="submit" value="form_condo_purchase_agreement" onclick="setTarget(this.value)">Draft Offer Now</button>
                                <button class="btn" type="button" onclick="hideForm(); form_mls_number.style.display='block';">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        if (isset($_SERVER['HTTP_ORIGIN'])) {
    // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
    // whitelist of safe domains
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");         

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

}
        var targetForm = '';
        var cardHeader = document.getElementById('card-header');
        var cardTitle = document.getElementById('card-title');
        var cardText = document.getElementById('card-text');
        var cardSubtitle = document.getElementById('card-subtitle');
        var form_mls_number = document.getElementById('form_mls_number');
        var form_freehold_lease_agreement = document.getElementById('form_freehold_lease_agreement');
        var form_freehold_purchase_agreement = document.getElementById('form_freehold_purchase_agreement');
        var form_condo_lease_agreement = document.getElementById('form_condo_lease_agreement');
        var form_condo_purchase_agreement = document.getElementById('form_condo_purchase_agreement');
        var mls_number = document.getElementById('mls_number');
        var FreeholdLeaseNames = document.getElementById('FreeholdLeaseNames');
        var FreeholdLeasePrice = document.getElementById('FreeholdLeasePrice');
        var FreeholdLeaseDate = document.getElementById('FreeholdLeaseDate');
        var FreeholdPurchaseName = document.getElementById('FreeholdPurchaseName');
        var FreeholdPurchasePrice = document.getElementById('FreeholdPurchasePrice');
        var FreeholdPurchaseDate = document.getElementById('FreeholdPurchaseDate');
        var CondoLeaseNames = document.getElementById('CondoLeaseNames');
        var CondoLeasePrice = document.getElementById('CondoLeasePrice');
        var CondoLeaseDate = document.getElementById('CondoLeaseDate');
        var CondoPurchaseNames = document.getElementById('CondoPurchaseNames');
        var CondoPurchaseDate = document.getElementById('CondoPurchaseDate');
        var CondoPurchasePrice = document.getElementById('CondoPurchasePrice');
        var CondoPurchaseDeposit = document.getElementById('CondoPurchaseDeposit');

        function hideForm() {
            cardHeader.style.display = 'none';
            cardText.style.display = "none";
            form_mls_number.style.display = 'none';
            form_freehold_lease_agreement.style.display = 'none';
            form_freehold_purchase_agreement.style.display = 'none';
            form_condo_lease_agreement.style.display = 'none';
            form_condo_purchase_agreement.style.display = 'none';
        }

        function setTarget(buttonHTML) {
            targetForm = buttonHTML;
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

            if (name_form == 'form_freehold_lease_agreement') {
                formData.append('FreeholdLeaseNames', FreeholdLeaseNames.value);
                formData.append('FreeholdLeasePrice', FreeholdLeasePrice.value);
                formData.append('FreeholdLeaseDate',FreeholdLeaseDate.value);
            } else if (name_form == 'form_freehold_purchase_agreement') {
                formData.append('FreeholdPurchaseName', FreeholdPurchaseName.value);
                formData.append('FreeholdPurchasePrice', FreeholdPurchasePrice.value);
                formData.append('FreeholdPurchaseDate', FreeholdPurchaseDate.value);
            } else if (name_form == 'form_condo_lease_agreement') {
                formData.append('CondoLeaseNames', CondoLeaseNames.value);
                formData.append('CondoLeasePrice', CondoLeasePrice.value);
                formData.append('CondoLeaseDate', CondoLeaseDate.value);
            } else if (name_form == 'form_condo_purchase_agreement') {
                formData.append('CondoPurchaseNames', CondoPurchaseNames.value);
                formData.append('CondoPurchaseDate', CondoPurchaseDate.value);
                formData.append('CondoPurchasePrice', CondoPurchasePrice.value);
                formData.append('CondoPurchaseDeposit', CondoPurchaseDeposit.value);
            }

            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    hideForm();
                    cardText.style.display = "block";
                }
            };
            xhttp.open('POST', url, true);
            xhttp.send(formData);
        

            console.log(formData);

            // var data = new FormData();
            // data.append('user', 'person');
            // data.append('pwd', 'password');
            // data.append('organization', 'place');
            // data.append('requiredkey', 'key');

            // var xhr = new XMLHttpRequest();
            // xhr.open('POST', 'somewhere', true);
            // xhr.onload = function () {
            //     console.log(this.responseText);
            // };
            // xhr.send(data);
        }

        window.onload = function () {
            hideForm();
            form_mls_number.style.display = 'block';
        }

        function eventNext() {
            var url = `https://api.property.ca/v1/listings?mls_number=${mls_number.value}`;
            var xhttp;
            if(window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();   
            } else {
                xhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            xhttp.onreadystatechange = function() {
                if(this.readyState === 4 && this.status === 200) {
                    var response = JSON.parse(this.responseText);

                    hideForm();

                    let agreement = response.data[0].property_class+' ';
                    if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Rent') {
                        agreement += 'Lease Agreement';
                        form_freehold_lease_agreement.style.display = 'block';
                    } else if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Sale') {
                        agreement += 'Purchase Agreement';
                        form_freehold_purchase_agreement.style.display = 'block';
                    } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Rent') {
                        agreement += 'Lease Agreement';
                        form_condo_lease_agreement.style.display = 'block';
                    } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Sale') {
                        agreement += 'Purchase Agreement';
                        form_condo_purchase_agreement.style.display = 'block';
                    }
                    cardTitle.innerHTML = agreement;
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
