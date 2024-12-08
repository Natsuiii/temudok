@extends('layouts.dashboard')

@push('css')
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Calendar</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Calendar
                        </li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid px-4">
        <div class="alert alert-warning" role="alert" id="warning">
            Alert
        </div>
        <input type="text" name="booking" id="booking" class="w-100 form-control is-invalid" autocomplete="off" />
    </div>
@endsection

@push('scripts')
    <!-- daterangepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        $(function() {
            $('#warning').hide();
            // Daftar tanggal yang tidak bisa dipilih
            const disabledDates = [
                '2024-12-25' // 25 Desember 2024
            ];

            const disabledHours = [12, 13];

            $('#booking').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),      
                minDate: moment(),
                locale: {
                    format: 'DD MMMM YYYY / HH:mm'
                },
                isInvalidDate: function(date) {
                    if (disabledDates.includes(date.format('YYYY-MM-DD'))) {
                        return true; // Menandai tanggal sebagai tidak valid
                    }
                    return false; // Tanggal lain valid
                },
                isCustomDate: function(date) {
                    if (disabledDates.includes(date.format('YYYY-MM-DD'))) {
                        return 'bg-danger'; // Menambahkan kelas khusus
                    }
                    return ''; // Tidak ada gaya khusus
                },
            });

            function displayWarningMessage(selectedDate) {
                const formatHour = selectedDate.format('HH:mm'); // Format tanggal dan waktu
                const formatDate = selectedDate.format('DD MMMM YYYY'); // Format tanggal
                $('#warning').text(`Untuk jam ${formatHour} pada tanggal ${formatDate}, tidak valid karena sudah di book! Coba pilih tanggal dengan range lebih 1 jam`).show(); // Tampilkan pesan
            }

            $('#booking').on('apply.daterangepicker', function(ev, picker) {
                const selectedHour = picker.startDate.hour(); // Ambil jam yang dipilih
                if (disabledHours.includes(selectedHour)) {
                    // Batalkan pilihan jika jam tidak valid
                    displayWarningMessage(picker.startDate);
                    $('#warning').show(); // Tampilkan pesan peringatan
                    $(this).val(''); // Kosongkan input
                } else {
                    $('#warning').hide(); // Sembunyikan pesan peringatan
                }
            });

            $('#booking').on('hide.daterangepicker', function(ev, picker) {
                const selectedHour = picker.startDate.hour(); // Ambil jam yang dipilih
                if (disabledHours.includes(selectedHour)) {
                    displayWarningMessage(picker.startDate);
                    $('#warning').show(); // Tampilkan pesan peringatan
                    $(this).val(''); // Kosongkan input
                } else {
                    $('#warning').hide(); // Sembunyikan pesan peringatan
                }
            });
        });
    </script>
@endpush