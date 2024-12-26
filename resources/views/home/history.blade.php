@extends('layouts.home')

@section('content')
<div class="container p-4">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <h4 class="fw-bold mb-2">@lang('message.historyPage')</h4>

    <div>
        <!-- Tab Navigation -->
        <div  class="d-flex justify-content-center mb-3" style="gap: 30px;">
            <button class="btn btn-outline-primary" id="unpaid-tab" onclick="showTab('unpaid')" style="cursor: pointer; padding: 10px 20px; font-size: 16px;">@lang('message.unpaid')</button>
            <button class="btn btn-primary" id="ongoing-tab" onclick="showTab('ongoing')" style="cursor: pointer; padding: 10px 20px; font-size: 16px;">@lang('message.pending')</button>
            <button class="btn btn-outline-primary" id="history-tab" onclick="showTab('history')" style="cursor: pointer; padding: 10px 20px; font-size: 16px;">@lang('message.history')</button>
        </div>

        {{-- Unpaid --}}
        <div id="unpaid-section" style="display: none;">
            @foreach ($appointmentsUnpaid as $item)
                <div class="d-flex flex-wrap" style="gap: 20px;">
                    <!-- Card -->
                    <div class="d-flex flex-row align-items-center justify-content-between w-100" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="d-flex align-items-center" style="gap: 15px;">
                            <img src="{{ asset('img/home/journey.png') }}" alt="Foto Dokter" class="object-fit-cover rounded-circle" style="width: 80px; height: 80px; border: 2px solid #007bff;">
                            <div>
                                <h5 class="m-0 fw-bold" style="font-size: 16px;">Dr. {{ $item->doctor->name }}</h5>
                                <p class="m-0" style="font-size: 14px; color: #666;">{{ $item->doctor->category->category_name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="m-0" style="font-size: 14px;">@lang('message.apppointmentDate'): <strong>{{ $item->appointment_date }}</strong></p>
                            <p class="m-0" style="font-size: 14px;">@lang('message.duration'): <strong>{{ $item->consultation_duration }} @lang('message.minutes')</strong></p>
                        </div>
                        <div>
                            <a href="{{ route('appointment.show', $item->id) }}" class="btn btn-primary text-white fw-bold text-decoration-none">@lang('message.pay')</a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="doctorModal-{{ $item->doctor_id }}" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="doctorModalLabel">Link Zoom</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <a href="" target="_blank">Link Zoom</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Ongoing -->
        <div id="ongoing-section" style="display: block;">
            @foreach ($appointmentsOngoing as $item)
                <div class="d-flex flex-wrap" style="gap: 20px;">
                    <!-- Card -->
                    <div class="d-flex flex-row align-items-center justify-content-between w-100" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="d-flex align-items-center" style="gap: 15px;">
                            <img src="{{ asset('img/home/journey.png') }}" alt="Foto Dokter" class="object-fit-cover rounded-circle" style="width: 80px; height: 80px; border: 2px solid #007bff;">
                            <div>
                                <h5 class="m-0 fw-bold" style="font-size: 16px;">Dr. {{ $item->doctor->name }}</h5>
                                <p class="m-0" style="font-size: 14px; color: #666;">{{ $item->doctor->category->category_name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="m-0" style="font-size: 14px;">@lang('message.apppointmentDate'): <strong>{{ $item->appointment_date }}</strong></p>
                            <p class="m-0" style="font-size: 14px;">@lang('message.duration'): <strong>{{ $item->consultation_duration }} @lang('message.minutes')</strong></p>
                        </div>
                        <div>
                            <button class="btn btn-primary text-white fw-bold text-decoration-none" data-bs-toggle="modal" data-bs-target="#doctorModalOngoing-{{ $item->doctor_id }}">Link Zoom</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="doctorModalOngoing-{{ $item->doctor_id }}" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="doctorModalLabel">Link Zoom</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <a href="{{ $item->meeting->join_url }}" target="_blank">Link Zoom</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- History -->
        <div id="history-section" style="display: none;">
            @foreach ($appointmentsDone as $item)
                <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                    <!-- Card -->
                    <div class="d-flex flex-row align-items-center justify-content-between w-100" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="d-flex align-items-center" style="gap: 15px;">
                            <img src="{{ asset('img/home/journey.png') }}" alt="Foto Dokter" class="object-fit-cover rounded-circle" style="width: 80px; height: 80px; border: 2px solid #007bff;">
                            <div>
                                <h5 class="m-0 fw-bold" style="font-size: 16px;">Dr. {{ $item->doctor->name }}</h5>
                                <p class="m-0" style="font-size: 14px; color: #666;">{{ $item->doctor->category->category_name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="m-0" style="font-size: 14px;">Tanggal Booking: <strong>{{ $item->appointment_date }}</strong></p>
                            <p class="m-0" style="font-size: 14px;">Durasi: <strong>{{ $item->consultation_duration }} Menit</strong></p>
                        </div>
                        <div>
                            <button class="btn btn-{{ $item->status_id == 1 ? 'success' : 'danger' }} text-white fw-bold" disabled>
                                {{ $item->status->status_name }}
                            </button>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
</div>

<script>
    function showTab(tab) {
        const ongoingSection = document.getElementById('ongoing-section');
        const unpaidSection = document.getElementById('unpaid-section');
        const historySection = document.getElementById('history-section');
        const ongoingTab = document.getElementById('ongoing-tab');
        const unpaidTab = document.getElementById('unpaid-tab');
        const historyTab = document.getElementById('history-tab');

        if (tab === 'ongoing') {
            ongoingSection.style.display = 'block';
            historySection.style.display = 'none';
            unpaidSection.style.display = 'none';
            ongoingTab.classList.remove('btn-outline-primary');
            ongoingTab.classList.add('btn-primary');
            historyTab.classList.remove('btn-primary');
            historyTab.classList.add('btn-outline-primary');
            unpaidTab.classList.remove('btn-primary');
            unpaidTab.classList.add('btn-outline-primary');
        } else if(tab === 'history') {
            ongoingSection.style.display = 'none';
            historySection.style.display = 'block';
            unpaidSection.style.display = 'none';
            historyTab.classList.remove('btn-outline-primary');
            historyTab.classList.add('btn-primary');
            ongoingTab.classList.remove('btn-primary');
            ongoingTab.classList.add('btn-outline-primary');
            unpaidTab.classList.remove('btn-primary');
            unpaidTab.classList.add('btn-outline-primary');
        } else if(tab == 'unpaid') {
            unpaidSection.style.display = 'block';
            ongoingSection.style.display = 'none';
            historySection.style.display = 'none';
            historyTab.classList.add('btn-outline-primary');
            historyTab.classList.remove('btn-primary');
            ongoingTab.classList.add('btn-outline-primary');
            ongoingTab.classList.remove('btn-primary');
            unpaidTab.classList.add('btn-primary');
            unpaidTab.classList.remove('btn-outline-primary');
        }
    }
</script>
@endsection
