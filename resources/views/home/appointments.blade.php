@extends('layouts.home')

@section('content')
<div class="container p-4">
    <div class="row">
        <!-- Daftar Spesialis -->
        <div style="gap: 10px; padding: 10px; background-color: #f8f9fa; border-radius: 8px;" class="d-flex overflow-x-auto mb-3">
            <button class="btn btn-outline-primary" id="internist" onclick="filterDoctors('internist')" style="cursor: pointer;">Dokter Spesialis Penyakit Dalam</button>
            <button class="btn btn-outline-primary" id="skin" onclick="filterDoctors('skin')" style="cursor: pointer;">Dokter Spesialis Kulit</button>
            <button class="btn btn-outline-primary" id="ent" onclick="filterDoctors('ent')" style="cursor: pointer;">Dokter Spesialis THT</button>
            <button class="btn btn-outline-primary" id="nutrition" onclick="filterDoctors('nutrition')" style="cursor: pointer;">Dokter Spesialis Gizi</button>
            <button class="btn btn-outline-primary" id="obgyn" onclick="filterDoctors('obgyn')" style="cursor: pointer;">Dokter Spesialis Kandungan</button>
            <button class="btn btn-outline-primary" id="dentist" onclick="filterDoctors('dentist')" style="cursor: pointer;">Dokter Gigi</button>
        </div>
        
        <!-- Daftar Dokter -->
        <div class="col-md-12">
            <h5>Daftar Dokter</h5>
            <div id="doctor-list" class="d-flex flex-wrap mb-5" style="gap: 20px;"   >
                <p>Pilih spesialisasi di atas untuk melihat daftar dokter.</p>
            </div>
        </div>
    </div>
</div>

<!-- First Modal -->
<div class="modal fade" id="doctorModal" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctorModalLabel">Detail Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <img id="doctorImage" src="{{ asset('img/home/journey.png') }}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover; border: 2px solid #007bff;">
                </div>
                <h5 id="doctorName" class="text-center"></h5>
                <p id="doctorSpecialization" class="text-muted text-center"></p>
                <p><strong>Pengalaman:</strong> <span id="doctorExperience"></span></p>
                <p><strong>Rating:</strong> <span id="doctorRating"></span></p>
                <p><strong>Harga Konsultasi:</strong> <span id="doctorPrice"></span>,- / 30 menit</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="bookButton" data-bs-toggle="modal" data-bs-target="#bookingModal">Book</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Second Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Formulir Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm">
                    <div class="mb-3">
                        <label for="userName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="userName" name="userName" required>
                    </div>
                    <div class="mb-3">
                        <label for="userAge" class="form-label">Usia</label>
                        <input type="number" class="form-control" id="userAge" name="userAge" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Deskripsikan keluhan yang Anda alami..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="consultationDuration" class="form-label">Durasi Konsultasi</label>
                        <div id="durationButtons" class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary duration-button" data-duration="30">30 Menit</button>
                            <button type="button" class="btn btn-outline-primary duration-button" data-duration="45">45 Menit</button>
                            <button type="button" class="btn btn-outline-primary duration-button" data-duration="60">60 Menit</button>
                        </div>
                        <input type="hidden" id="consultationDuration" name="consultationDuration" required>
                    </div>
                    <div class="mb-3">
                        <label for="availabilityDate" class="form-label">Tanggal Tersedia</label>
                        <input type="date" class="form-control" id="availabilityDate" name="availabilityDate" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const doctors = {
        internist: [
            { name: "dr. Fendy Wijaya, Sp.PD-KGEH", specialization: "Dokter Spesialis Penyakit Dalam", experience: "15 Tahun", rating: "99%", price: "Rp 80.000" },
            { name: "dr. Owen Tamashi, Sp.PD-KKV", specialization: "Dokter Spesialis Penyakit Dalam", experience: "3 Tahun", rating: "85%", price: "Rp 45.000" },
            { name: "dr. Tiara Andini Kesuma, Sp.PD-KR", specialization: "Dokter Spesialis Penyakit Dalam", experience: "6 Tahun", rating: "88%", price: "Rp 55.000" },
            { name: "dr. Rere Andin Huang, Sp.PD-KAI", specialization: "Dokter Spesialis Penyakit Dalam", experience: "4 Tahun", rating: "91%", price: "Rp 52.000" }
        ],
        skin: [
            { name: "dr. Kevyn Lim, Sp.KK", specialization: "Dokter Spesialis Kulit", experience: "8 Tahun", rating: "95%", price: "Rp 60.000" },
            { name: "dr. Ismail Marzuki, Sp.DV", specialization: "Dokter Spesialis Kulit", experience: "6 Tahun", rating: "92%", price: "Rp 58.000" },
            { name: "dr. Maria Kusuma, Sp.DVE", specialization: "Dokter Spesialis Kulit", experience: "10 Tahun", rating: "94%", price: "Rp 65.000" },
            { name: "dr. Agus Skibidi, Sp.KK", specialization: "Dokter Spesialis Kulit", experience: "7 Tahun", rating: "90%", price: "Rp 62.000" }
        ],
        ent: [
            { name: "dr. Justin Regan, Sp.THT-KL", specialization: "Dokter Spesialis THT", experience: "7 Tahun", rating: "88%", price: "Rp 55.000" },
            { name: "dr. Wilbert Yang, Sp.THT-KL", specialization: "Dokter Spesialis THT", experience: "5 Tahun", rating: "84%", price: "Rp 50.000" },
            { name: "dr. Flavia Louis, Sp.THT-KL", specialization: "Dokter Spesialis THT", experience: "2 Tahun", rating: "85%", price: "Rp 55.000" }

        ],
        nutrition: [
            { name: "dr. Alves Renato, Sp.GK", specialization: "Dokter Spesialis Gizi", experience: "4 Tahun", rating: "87%", price: "Rp 50.000" },
            { name: "dr. Julio Aja, Sp.GK", specialization: "Dokter Spesialis Gizi", experience: "3 Tahun", rating: "85%", price: "Rp 48.000" },
            { name: "dr. Andrew Nicholas, Sp.G", specialization: "Dokter Spesialis Gizi", experience: "5 Tahun", rating: "88%", price: "Rp 55.000" },
            { name: "dr. Sherly Stacia Andani, Sp.G", specialization: "Dokter Spesialis Gizi", experience: "7 Tahun", rating: "94%", price: "Rp 68.000" }
        ],
        obgyn: [
            { name: "dr. Tiara Intan Kusuma, Sp.OG", specialization: "Dokter Spesialis Kandungan", experience: "5 Tahun", rating: "85%", price: "Rp 50.000" },
            { name: "dr. Evelyn Angelica, Sp.OG", specialization: "Dokter Spesialis Kandungan", experience: "7 Tahun", rating: "90%", price: "Rp 55.000" },
            { name: "dr. Valentcia Angelica, Sp.OG", specialization: "Dokter Spesialis Kandungan", experience: "6 Tahun", rating: "89%", price: "Rp 52.000" },
            { name: "dr. Aurora Florensia, Sp.OG", specialization: "Dokter Spesialis Kandungan", experience: "8 Tahun", rating: "95%", price: "Rp 70.000" }
        ],
        dentist: [
            { name: "drg. Leonardo Zheng, Sp.KG", specialization: "Dokter Gigi", experience: "10 Tahun", rating: "93%", price: "Rp 70.000" },
            { name: "drg. Andrew Alfonso, Sp.PM", specialization: "Dokter Gigi", experience: "12 Tahun", rating: "96%", price: "Rp 75.000" },
            { name: "drg. Christin Lay, Sp.KGA", specialization: "Dokter Gigi", experience: "15 Tahun", rating: "90%", price: "Rp 75.000" }

        ]
    };

    function filterDoctors(specialization) {
        const buttons = document.querySelectorAll('.btn-outline-primary');
        buttons.forEach(button => {
            button.style.backgroundColor = "";
            button.style.color = "#007bff";
        });

        const selectedButton = document.getElementById(specialization);
        selectedButton.style.backgroundColor = "#007bff";
        selectedButton.style.color = "white";

        const doctorList = document.getElementById("doctor-list");
        doctorList.innerHTML = "";

        if (doctors[specialization]) {
            doctors[specialization].forEach((doc, index) => {
                const card = 
                `
                        <div class="card" style="width: 250px;">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-column flex-md-row align-items-center mb-3">
                                    <div class="d-flex justify-content-center mb-2 mb-md-0">
                                        <img src="{{ asset('img/home/journey.png') }}" class="fit-cover rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 2px solid #007bff;" alt="Foto Dokter">
                                    </div>
                                    <div class="text-center text-md-start ms-md-3">
                                        <h5 class="card-title fs-6">${doc.name}</h5>
                                        <p class="text-muted" style="font-size: 12px;">${doc.specialization}</p>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <button class="btn btn-primary" onclick="showDoctorDetails(${index}, '${specialization}')" style="margin-top: 10px; width: 100%; font-size: 14px; font-weight: bold;">Detail</button>
                                </div>
                            </div>
                        </div>
                `;
                doctorList.innerHTML += card;
            });

        } else {
            doctorList.innerHTML = "<p>Tidak ada dokter tersedia untuk spesialisasi ini.</p>";
        }
    }

    function showDoctorDetails(index, specialization) {
        const doctor = doctors[specialization][index];

        document.getElementById("doctorName").innerText = doctor.name;
        document.getElementById("doctorSpecialization").innerText = doctor.specialization;
        document.getElementById("doctorExperience").innerText = doctor.experience;
        document.getElementById("doctorRating").innerText = doctor.rating;
        document.getElementById("doctorPrice").innerText = doctor.price;

        const modal = new bootstrap.Modal(document.getElementById('doctorModal'));
        modal.show();
    }

    document.querySelectorAll('.duration-button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.duration-button').forEach(btn => {
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-outline-primary');
                btn.style.color = '';
            });

            this.classList.remove('btn-outline-primary');
            this.classList.add('btn-primary');
            this.style.color = 'white';

            document.getElementById('consultationDuration').value = this.getAttribute('data-duration');
        });
    });
</script>
@endsection
