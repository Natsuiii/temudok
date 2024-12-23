@extends('layouts.home')

@push('css')
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@section('content')
<div class="container p-4">
    <div class="row">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Daftar Dokter -->
        <div class="col-md-12">
            <h5>@lang('message.listHome')</h5>
            <div id="doctor-list" class="d-flex flex-wrap mb-5" style="gap: 20px;"   >
                {{-- <p>Pilih spesialisasi di atas untuk melihat daftar dokter.</p> --}}
                @foreach ($doctors as $doctor)
                    {{-- card nya --}}
                    <div class="card" style="width: 250px;">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex flex-column flex-md-row align-items-center mb-3">
                                <div class="d-flex justify-content-center mb-2 mb-md-0">
                                    <img src="{{ $doctor->profile_photo_path ? asset('storage/' . $doctor->profile_photo_path) : asset('img/home/journey.png')  }}" class="fit-cover rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 2px solid #007bff;" alt="Foto Dokter">
                                </div>
                                <div class="text-center text-md-start ms-md-3">
                                    <h5 class="card-title fs-6">Dr. {{ $doctor->name }}</h5>
                                    <p class="text-muted" style="font-size: 12px;">{{ $doctor->category->category_name }}</p>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctorModal-{{ $doctor->id }}" style="margin-top: 10px; width: 100%; font-size: 14px; font-weight: bold;">
                                    @lang('message.show_detail')
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- modal 1 nya --}}
                    <div class="modal fade" id="doctorModal-{{ $doctor->id }}" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="doctorModalLabel">@lang('message.doctor_details')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center mb-3">
                                        <img id="doctorImage" src="{{ asset('img/home/journey.png') }}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover; border: 2px solid #007bff;">
                                    </div>
                                    <h5 id="doctorName" class="text-center"></h5>
                                    <p id="doctorSpecialization" class="text-muted text-center"></p>
                                    <p><strong>@lang('message.experience')</strong> <span id="doctorExperience">{{ $doctor->category->category_name }}</span></p>
                                    <p><strong>@lang('message.rating')</strong> <span id="doctorRating"></span></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary book-button" data-doctor-id="{{ $doctor->id }}" data-bs-toggle="modal" data-bs-target="#bookingModal-{{ $doctor->id }}">
                                        @lang('message.book')
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.close')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- modal 2 nya --}}
                    <div class="modal fade" id="bookingModal-{{ $doctor->id }}" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bookingModalLabel">@lang('message.booking_form')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="bookingForm" action="{{ route('appointment.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="doctor_id" id="doctorId" value="{{ $doctor->id }}">
                                        <div class="mb-3">
                                            <label for="userName" class="form-label">@lang('message.name')</label>
                                            <input type="text" class="form-control" id="userName" name="userName" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userAge" class="form-label">@lang('message.age')</label>
                                            <input type="number" class="form-control" id="userAge" name="userAge" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">@lang('message.description')</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="@lang('message.reason')"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="consultationDuration" class="form-label">@lang('message.consultation_duration')</label>
                                            <select name="consultationDuration" id="consultationDuration" class="form-select">
                                                <option value="40">40 Menit</option>
                                                <option value="60">60 Menit</option>
                                                <option value="120">120 Menit</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="appointment_date" class="form-label">@lang('message.available_date')</label>
                                            <input type="text" class="form-control" id="appointment_date-{{ $doctor->id }}" name="appointment_date" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">@lang('message.pay')</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('message.cancel')</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- daterangepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
        let disabledDates = [];

        document.addEventListener('DOMContentLoaded', function () {
            // Event listener untuk tombol booking
            document.querySelectorAll('.book-button').forEach(function (button) {
                button.addEventListener('click', function () {
                    let doctorId = this.getAttribute('data-doctor-id'); // Ambil ID dokter dari data attribute
                    let appointmentDateInput = document.querySelector(`#appointment_date-${doctorId}`);

                    // Clear input appointment date
                    appointmentDateInput.value = '';

                    // Fetch tanggal tidak tersedia untuk dokter tertentu
                    if (doctorId) {
                        disabledDates = [];
                        fetch(`/get-unavailable-times/${doctorId}`)
                            .then(response => response.json())
                            .then(data => {
                                console.log(data);
                                
                                // Format tanggal yang tidak bisa di-book
                                disabledDates = data.map(item => moment(item.unavailable_time).format('YYYY-MM-DD'));
                                $(`#appointment_date-${doctorId}`).daterangepicker({
                                    drops: 'up',
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

                                            return true; // Tanggal disable
                                        }
                                        return false;
                                    },
                                    isCustomDate: function(date) {
                                        if (disabledDates.includes(date.format('YYYY-MM-DD'))) {
                                                                    
                                            return 'bg-danger'; // Tambah warna merah
                                        }
                                        return '';
                                    },
                                    
                                });
                            })
                            .catch(error => {
                                console.error('Error fetching unavailable times:', error);
                            });
                    }
                });
            });
        });
    </script>
@endpush