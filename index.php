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
                        <form class="needs-validation" novalidate id="formMain">
                            <div class="form-group mb-4">
                                <label for="names" class="form-label" id="labelNames"></label>
                                <input type="text" name="names" id="names" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="price" class="form-label" id="labelPrice"></label>
                                <input type="text" name="price" id="price" class="form-control" placeholder="$" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputDate" class="form-label" id="labelDate"></label>
                                <input type="date" name="inputDate" id="inputDate" class="form-control" required>
                            </div>
                            <input type="hidden" name="type" id="type" required>
                            <div class="form-group">
                                <label for="deposit" class="form-label" id="labelDeposit">Please Enter the Deposit Amount</label>
                                <input type="text" name="deposit" id="deposit" class="form-control" placeholder="$" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
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
        var labelNames = document.getElementById('labelNames');
        var labelPrice = document.getElementById('labelPrice');
        var labelType = document.getElementById('labelType');
        var labelDate = document.getElementById('labelDate');
        var labelDeposit = document.getElementById('labelDeposit');
        var mls_number = document.getElementById('mls_number');
        var names = document.getElementById('names');
        var price = document.getElementById('price');
        var type = document.getElementById('type');
        var inputDate = document.getElementById('inputDate');
        var deposit = document.getElementById('deposit');

        function hideForm() {
            cardHeader.style.display = 'none';
            cardText.style.display = 'none';
        }

        function setTarget(buttonValue) {
            if (buttonValue != undefined) {
                targetForm = buttonValue;
            }
        }

        window.onload = function () {
            hideForm();
            form_mls_number.style.display = 'block';
            formMain.style.display = 'none';
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
            formData.append('Mls Number', mls_number.value);
            formData.append('Names', names.value);
            formData.append('Date', inputDate.value);
            formData.append('Price', price.value);
            if (name_form == 'form_freehold_purchase_agreement' || name_form == 'form_condo_purchase_agreement') {
                formData.append('Deposit', deposit.value);
            }
            formData.append('Type', type.value);

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
            var hero = 'https://cors-anywhere.herokuapp.com/';
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

                    let agreement = response.data[0].property_class+' ';
                    if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Rent') {
                        agreement += 'Lease';
                        labelNames.innerHTML = 'Enter the Names of the Tenants';
                        labelPrice.innerHTML = 'Monthly Rent Amount';
                        labelDate.innerHTML = 'Closing Date';
                        labelDeposit.style.display = 'none';
                        deposit.style.display = 'none';
                        targetForm = 'form_freehold_lease_agreement';
                    } else if (response.data[0].property_class == 'Freehold' && response.data[0].offer == 'Sale') {
                        agreement += 'Purchase';
                        labelNames.innerHTML = 'Enter the Names of the Buyers';
                        labelPrice.innerHTML = 'Offer Price';
                        labelDate.innerHTML = 'Closing Date';
                        labelDeposit.style.display = 'block';
                        deposit.value = '';
                        deposit.style.display = 'block';
                        targetForm = 'form_freehold_purchase_agreement';
                    } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Rent') {
                        agreement += 'Lease';
                        labelNames.innerHTML = 'Enter the Names of the Tenants (Seprated by &)';
                        labelPrice.innerHTML = 'Monthly Rent Amount';
                        labelDate.innerHTML = 'Closing Date';
                        labelDeposit.style.display = 'none';
                        deposit.style.display = 'none';
                        targetForm = 'form_condo_lease_agreement';
                    } else if (response.data[0].property_class == 'Condo' && response.data[0].offer == 'Sale') {
                        agreement += 'Purchase';
                        labelNames.innerHTML = 'Enter the Names of the Buyers';
                        labelPrice.innerHTML = 'Offer Price';
                        labelDate.innerHTML = 'Closing Date';
                        labelDeposit.style.display = 'block';
                        deposit.value = '';
                        deposit.style.display = 'block';
                        targetForm = 'form_condo_purchase_agreement';
                    }
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