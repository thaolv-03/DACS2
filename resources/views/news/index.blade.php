@extends('layout.masterAdmin')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.4/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/datatables.min.css" />
@endpush

@section('content')
    <div class="card-body">

        {{-- section phải trùng tên với yield bên master --}}
        <a class="btn btn-success" href=" {{ route('news.create') }} ">Thêm</a>
        <table class="table table-striped table-centered mb-0" id="my-Table">
            <div class="form-group ">
                <select id="select-name" class="custom-select mb-3">
                    <option value="" selected>Tìm tên</option> // Cmt
                </select>
            </div>
            <button class="btn btn-success" id="btn-Delete-Filter">Xóa tìm kiếm</button>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Create at</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>

        </table>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            //     // var data=[
            //     //     value:'',
            //     //     text:'Chọn tên'
            //     // ]

            $("#select-name").select({
                ajax: {
                    url: "{{ route('news.getdata.name') }}",
                    dataType: 'json',
                    data: function(params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function(data, params) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                },
                placeholder: 'Lọc theo tên',
                allowClear: true
            });

            var table = $('#my-Table').DataTable({
                dom: 'Blfrtip',
                select: true,
                processing: true,
                serverSide: true,
                ajax: '{!! route('news.getdata') !!}',
                columnDefs: [{
                        className: "not-export",
                        "targets": [4, 5]
                    } // thêm class not-export vào cột t7,8
                ],
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        targets: 1,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return `<a class=""
                                        href=" ${data['link']} ">${data['title']}
                                         </a>`;
                        }
                    },
                    {
                        data: 'image',
                        targets: 2,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            if (!data) {
                                return '1';
                            }
                            return `<img src="{{ Storage::url('${data}') }}" style="width: 70px; height:60px; object-fit: cover">`; 
                            //  width= '60' height='60' 
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },

                    {
                        data: 'edit',
                        targets: 4,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return `<a class="btn btn-primary"
                                        href=" ${data} ">Sửa
                                         </a>`;
                        }
                    },
                    {
                        data: 'destroy',
                        targets: 5,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return `<form action="${data}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type='button' class="btn-delete btn btn-danger">Xóa</button>
                                        </form>`;
                        }
                    },

                ],

                buttons: [

                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible :not(.not-export)'
                        }
                    },
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible :not(.not-export)'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible :not(.not-export)'
                        }
                    },

                    'colvis'
                ],
            });

            $('#select-name').change(function() {
                console.log($(this).val());
                table.column(1).search($(this).val()).draw();
            });

            $(document).on('click', '#btn-Delete-Filter', function() {
                table.search('');
                table.columns().search('').draw();

            });
            $(document).on('click', '.btn-delete', function() {
                let row = $(this).parents('tr');
                let form = $(this).parents('form');
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    dataType: 'json',
                    data: form
                        .serialize(), // lấy toàn bộ dữ liệu ở form -> chuyển data sang route ở form xử lí -> trả về json
                    //-> thành công thì xóa
                    success: function() {
                        console.log("success");
                        table.draw();
                    },
                    error: function() {
                        console.log("error");
                    }
                });

            });
        });
    </script>
@endpush
