<!DOCTYPE html>
<html>
<head>
    <title>Dependent dropdown example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="m-5 w-50">
        <h1 class="lead">Dependent dropdown example</h1>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" id="category">
                <option selected disabled>Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" id="course"></select>
        </div>
       
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#category').on('change', function () {
                var categoryId = this.value;
                $('#course').html('');
                $.ajax({
                    url: '{{ route('getCourse') }}?id='+categoryId,
                    type: 'get',
                    success: function (res) {
                        $('#course').html('<option value="">Select Course</option>');
                        $.each(res, function (key, value) {
                            $('#course').append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                       
                    }
                });
            });
           
        });
    </script>



</body>
</html>