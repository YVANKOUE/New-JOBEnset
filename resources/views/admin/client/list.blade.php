@extends('admin.adminlayout')

@section('title')
    {{ config('app.name') }} | @lang('Users')
@endsection


{{-- @section('navigation')
    <!--begin::Page Heading-->
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><a href="{{route('users.index')}}">@lang('Users Management')</a></h5>
        <!--end::Page Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('users.index') }}" class="text-muted">@lang('Users')</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page Heading-->
@endsection --}}


@section('Content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">@lang('Jobs list')

                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User">
                                <thead>
                                    <tr>
                                        <th width="10">

                                        </th>
                                        <th>@lang('Domain')</th>
                                        <th>@lang('Sous domain')</th>
                                        <th>Date publication</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($annonces as $annonce)
                                        <tr data-entry-id="{{ $annonce->id }}">
                                            <td>{{ $annonce->id }}</td>
                                            <td>{{ $annonce->domaine}}</td>
                                            <td>{{ $annonce->sous_domaine }}</td>
                                            <td>{{ $annonce->created_at }}</td>
                                            <td>
                                                <button class="btn btn" style="background-color: #187DE4;" ><a style="color:white;" href="">Répondre</a> </button>    
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection



{{-- @section('Page Vendors')

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/datatables/datatable.js') }}"></script>
    <!-- END: Page JS-->


    <script>
        $(document).on('click', "form.delete a", function(e) {
            var _this = $(this);
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: '{{ __('Are you sure?') }}',
                text: '{{ __("You won't be able to revert this!") }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{ __('Yes, delete it!') }}',
                cancelButtonText: '{{ __('No, cancel!') }}',
                reverseButtons: true
            }).then(function(isConfirm) {
                if (isConfirm) {
                    _this.closest("form").submit();
                }
            });
        });

    </script>


@endsection --}}

{{-- @section('DataTable')
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        let deleteButtonTrans = '{{ trans('globaldelete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('users.mass_destroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                    return $(entry).data('entry-id')
                });

                if (ids.length === 0) {
                    var _this = $(this);
                    e.preventDefault();
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    })
                    swalWithBootstrapButtons.fire({
                        title: '{{ __('Error') }}',
                        text: '{{ __("Please tick some rows in the table") }}',
                        icon: 'warning',
                        confirmButtonText: '{{ __('Okay') }}',
                        reverseButtons: true
                    });
                    return
                }

                if (confirm('{{ trans('areYouSure') }}')) {
                    $.ajax({
                        headers: {'x-csrf-token': "{{ csrf_token() }}"},
                        method: 'POST',
                        url: config.url,
                        data: { ids: ids, _method: 'DELETE' }})
                        .done(function () { location.reload() })
                }
            }
        }
        dtButtons.push(deleteButton)
        $.extend(true, $.fn.dataTable.defaults, {
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        });
        $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })

</script>
@endsection --}}

{{-- @section('Page Vendors Styles')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
@endsection --}}
