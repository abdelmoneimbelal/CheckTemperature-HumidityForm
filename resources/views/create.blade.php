<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <title>Check Temperature & Humidity Form</title>
</head>

<body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
        <img src="{{ asset('logo.png') }}" alt="network-logo" width="140px" height="110px" />
        <h2> Check Temperature & Humidity Form</h2><br />

    </div>
    <!-- End Header form -->

    <!-- Start Card -->
    <div class="card">
        <!-- Start Card Body -->
        <div class="card-body">
            <!-- Start Form -->
            <form id="bookingForm" action="{{ route('store') }}" method="post" class="needs-validation" novalidate
                autocomplete="off">
                @csrf
                <!-- Start Input Start Time -->
                <div class="form-group">
                    <label>Warehouse</label>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <select class="form-control mr-1" id="inputStartTimeHour" name="name" required>
                            <option value="" disabled selected>Choose warehouse</option>
                            <option value="powder"> Powder Raw Materials Storage </option>
                            <option value="liquid"> Liquid Raw Materials Storage</option>
                            <option value="intermediate"> Intermediate Products Storage</option>
                            <option value="final"> Final Products Storage</option>
                        </select>
                    </div>
                    <!-- End Input Start Time -->

                    <!-- Start Input Date , Start Time and End Time -->
                    <h3 class="text-center pt-2">Record</h3>
                    <div class="form-row">
                        <!-- Start Input Start Time -->
                        <div class="form-group col-md-3">
                            <label>Time</label>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <input type="time" class="form-control" id="inputName" name="time"
                                    placeholder="Your name" required />
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Temp</label>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <input type="number" class="form-control" id="inputName" name="temp"
                                    placeholder="˚C" required />
                            </div>
                        </div>
                        <!-- End Input Start Time -->

                        <!-- Start Input End Time -->
                        <div class="form-group col-md-3">
                            <label>Humidity</label>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <input type="number" class="form-control" id="inputName" name="humidity"
                                    placeholder="°F" required />
                            </div>
                        </div>
                        <!-- End Input End Time -->
                        <!-- Start Input End Time -->
                        <div class="form-group col-md-3">
                            <label>Signature</label>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <input type="text" class="form-control" id="inputName" name="signature"
                                    placeholder="Your Signature" required />
                            </div>
                        </div>
                        <!-- End Input End Time -->
                    </div>
                    <!-- End Input Date , Start Time and End Time -->

                    <!-- Start Input Remark -->
                    <div class="form-group">
                        <label for="textAreaRemark">Notes</label>
                        <textarea class="form-control" name="notes" id="textAreaRemark" rows="4" placeholder="Tell us you want more..."></textarea>
                    </div>
                    <!-- End Input Remark -->

                    <!-- Start Submit Button -->
                    <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
                    <!-- End Submit Button -->
            </form>
            <!-- End Form -->
        </div>
        <!-- End Card Body -->
        <h3 class="text-danger font-weight-bold" style="text-decoration: underline;">Note:</h3>
        <p class="pt-2">
            Temperature shouldn’t more than 25 ºC
            and humidity shouldn’t more than 60 %</p>
    </div>
    <!-- End Card -->
    <footer>
        <div class="my-4 text-muted text-center">
            <p><a href="https://innoworx.site/" target="_blank" style="text-decoration: none;">© INNOWORX</a> </p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Start Scritp for Form -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- End Scritp for Form -->

</body>
