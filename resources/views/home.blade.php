<!DOCTYPE html>
<html>

<head>
    <title>Demo Datatable filter</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                    <div>
                        <h4 class="mb-3">Datatable Filter</h4>
                    </div>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Filter
                            </button>
                            <form class="dropdown-menu p-4">
                                <div class="mb-3">
                                    <select name="column" id="column" class="form-control">
                                        <option value="">Select Field</option>
                                        @foreach (config('constants.fields') as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select name="operator" id="operator" class="form-control">
                                        <option value="">Select operator</option>
                                        @foreach (config('constants.operators') as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="val" id="val" class="form-control"
                                        placeholder="Value">
                                </div>
                                <button type="button" class="btn btn-primary btnFilter">Add Filter</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="badgeContainer py-2 d-flex">

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="showTable">

                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Bedroom</th>
                                    <th>Bathroom</th>
                                    <th>Portals</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $list)
                                    <tr>
                                        <td>{{ $list->id }}</td>
                                        <td>{{ $list->title }}</td>
                                        <td>{{ $list->description }}</td>
                                        <td>{{ $list->price }}</td>
                                        <td>{{ $list->type }}</td>
                                        <td>{{ $list->bedroom->name }}</td>
                                        <td>{{ $list->bathroom->name }}</td>
                                        <td>{{ $list->portals->implode('name', ', ') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.min.js"></script>
</body>
<script type="text/javascript">
    $(function() {
        $(".data-table").DataTable({
            "ordering": false,
            "info": true,
            "searching": false,
            "responsive": true,
            "autoWidth": true,
        });
    });

    function fill_datatable(filter) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{ route('home') }}',
            type: "POST",
            dataType: 'json',

            data: {
                filter: filter
            },
            success: function(response) {

                $('.showTable').html('');
                $('.showTable').html(response.html);
                $('.data-table').DataTable({
                    "destroy": true,
                });
            }
        });
    }
    let filter = [];
    $(document).ready(function() {



        $('.btnFilter').on('click', function() {

            var column = $('#column').val();
            var operator = $('#operator').val();
            var operatorname = $('#operator').find('option:selected').text();
            var val = $('#val').val();

            filter.push({
                column: column,
                operator: operator,
                val: val
            });

            $(".badgeContainer").append(
                '<div class="mx-1 d-flex align-items-center badgeClose badge text-bg-dark" colId="' +
                column + '" operId="' + operator + '" valId="' + val + '">' + column + ' ' +
                operatorname + ' ' + val + '<span class="text-danger ms-2">×</span></div>');
            $('#column').val('');
            $('#operator').val('');
            $('#val').val('');
            if (filter.length != 0) {

                fill_datatable(filter);
            } else {
                alert('Select filter option');
            }
        });


    });
    $(document).on('click', '.badgeClose', function(e) {
        e.preventDefault();
        var column = $(this).attr('colId');

        var operator = $(this).attr('operId');
        var val = $(this).attr('valId');
        filter.forEach((item, index) => {
            if (item.column === column && item.operator === operator && item.val === val) {
                filter.splice(index, 1);
            }
        });
        $(this).closest('div').remove();

        fill_datatable(filter);

    });
</script>

</html>
