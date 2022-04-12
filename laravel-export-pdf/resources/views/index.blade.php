<! DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <title> Laravel 8 PDF </title>
        <! - Bootstrap5 CSS ->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
                crossorigin="anonymous">

            
    </head>

    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <h2> Product list </h2>
                </div>
                <div class="col-md-4">
                    <div class="mb-4 d-flex justify-content-end">
                        <a class="btn btn-primary" href="http://127.0.0.1:8000/product/pdf"> Export to PDF </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <caption> Product list </caption>
                        <thead>
                            <tr>
                                <th> SKU </th>
                                <th> Name </th>
                                <th> Amount </th>
                                <th> Price </th>
                                <!-- <th> Description </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <th> {{$product-> sku}} </th>
                                <td> {{$product-> name}} </td>
                                <td> {{$product-> quantity}} </td>
                                <td> {{$product-> price}} </td>
                                <!-- <td> {{$product-> description}} </td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KinkN"
            crossorigin="anonymous"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>

    </body>

    </html>
