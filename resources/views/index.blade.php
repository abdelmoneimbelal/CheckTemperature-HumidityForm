<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <title>Check Temperature & Humidity </title>
</head>

<body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
        <img src="{{ asset('logo.png') }}" alt="network-logo" width="140px" height="110px" />
        <h2> Check Temperature & Humidity</h2><br />

    </div>
    <!-- End Header form -->
@if(is_countable($stores) && count($stores) < 0)

    <!-- Start Card -->
    <div class="card">
        <!-- Start Card Body -->
        <div class="card-body">
            <a type="button" href="{{ url('create') }}" class="btn btn-primary">Add New</a><br /><br />
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Warehouse</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $store)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                @if ($store->name == 'powder')
                                    Powder Raw Materials Storage
                                @endif
                                @if ($store->name == 'liquid')
                                    Liquid Raw Materials Storage
                                @endif
                                @if ($store->name == 'intermediate')
                                    Intermediate Products Storage
                                @endif
                                @if ($store->name == 'final')
                                    Final Products Storage
                                @endif
                            </td>
                            <td><a href="{{ url('show', $store->id) }}" type="button" class="btn btn-warning">View</a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Card -->
    @else
    <a type="button" href="{{ url('create') }}" class="btn btn-primary">Add New</a>
    @endif
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
