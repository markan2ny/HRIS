@extends('dashboard.layouts')
@section('emp-active')
{{ 'active' }}
@endsection
@section('emp-menu-open')
{{ 'menu-open' }}
@endsection
@push('styles')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('css/all.min.css')}} ">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" title="Add Employee" data-toggle="modal" data-target="#emp_form"><i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-secondary" title="Salary"><i class="fa-solid fa-coins"></i></button>
                    <button type="button" class="btn btn-secondary" title="Leave"><i class="fa-solid fa-plane-departure"></i></button>
                    <button type="button" class="btn btn-secondary" title="Loan"><i class="fa-solid fa-comment-dollar"></i></button>
                </div>
            </div>
            <div class="card-body">

                <table id="mytable" class="display nowrap table table-striped table-bordered table-sm" width="100%">
                    <thead>
                        <tr>
                            <th>
                                <small class="font-weight-bold">
                                    ID CODE
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    EMP. NAME
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    GENDER
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    CIVIL STATUS
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    DEPT.
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    ADDRESS
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    DATE OF HIRED
                                </small>
                            </th>
                            <th>
                                <small class="font-weight-bold">
                                    STATUS
                                </small>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($employee as $emp)
                            <tr>
                                <td>{{ $emp->idcode }}</td>
                                <td>{{ $emp->full_name }}</td>
                                <td>{{ $emp->gender }}</td>
                                <td>{{ $emp->civil_status }}</td>
                                <td>{{ $emp->department }}</td>
                                <td>{{ $emp->address }}</td>
                                <td>{{ $emp->date_hired }}</td>
                                <td>{{ $emp->employee_status }}</td>
                            </tr>
                       @empty

                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('dashboard.modal.add_emp')
@endsection

@push('script')
<!--FONTAWESOME--->
<script src="{{ asset('js/all.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
      $("#mytable").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#mytable_wrapper .col-md-6:eq(0)');
    //   $('#example1').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": true,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": true,
    //     "responsive": true,
    //     "scrollX": true
    //   });
    });
</script>
@endpush