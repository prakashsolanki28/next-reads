@if ($type == 'css')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/datatable/css/dataTables.bootstrap5.min.css') }}">
    <linl rel="stylesheet" type="text/css" href="{{ url('assets/vendor/datatable/css/responsive.dataTables.min.css') }}">

        <style>
            @media(max-width:768px) {
                .dataTables_wrapper .dataTables_filter {
                    padding: 0;
                    padding-top: 15px;
                }

                div.dataTables_wrapper div.dataTables_filter input {
                    width: 80% !important;
                    margin: 0;
                }

                div.dataTables_wrapper div.dataTables_filter label {
                    width: 100% !important;
                }

                #DataTables_Table_0_wrapper .dt-buttons {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .dtr-details li .dtr-data {
                    text-wrap: pretty !important;
                    width: 100% !important;
                    display: block;
                }

                .dataTables_info {
                    margin-left: -44px;
                }
            }

            div.dataTables_wrapper div.dataTables_length select {
                width: 40%;
            }

            #myForm {
                display: none;
            }
        </style>
@endif


@if ($type == 'js')
    <script src="{{ url('assets/vendor/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendor/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets/vendor/datatable/js/dataTables.responsive.min.js') }}"></script>
    @if ($export)
        <script src="{{ url('assets/vendor/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('assets/vendor/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ url('assets/vendor/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ url('assets/vendor/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ url('assets/vendor/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ url('assets/vendor/datatable/js/buttons.print.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                "processing": true,
                language: {
                    searchPlaceholder: 'Search {{ $title }} ...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        className: 'btn btn-warning',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        },
                        filename: function() {
                            return '{{ $title }}_csv';
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-warning',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        },
                        filename: function() {
                            return '{{ $title }}_excel';
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-warning',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        },
                        filename: function() {
                            return '{{ $title }}_pdf';
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-warning',
                        exportOptions: {
                            columns: '.export'
                        }
                    }
                ]
            });
        });
    </script>

@endif
