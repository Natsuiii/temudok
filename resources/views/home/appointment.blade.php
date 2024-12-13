@extends('layouts.home')

@section('content')
<div class="container p-4">
    <div class="row">
        <!-- Daftar Spesialis -->
        <div style="gap: 10px; padding: 10px; background-color: #f8f9fa; border-radius: 8px;" class="d-flex overflow-x-auto mb-3">
            <button class="btn btn-outline-primary" id="general" onclick="filterDoctors('general')" style="cursor: pointer;">Dokter Umum</button>
            <button class="btn btn-outline-primary" id="skin" onclick="filterDoctors('skin')" style="cursor: pointer;">Dokter Spesialis Kulit</button>
            <button class="btn btn-outline-primary" id="ent" onclick="filterDoctors('ent')" style="cursor: pointer;">Dokter Spesialis THT</button>
            <button class="btn btn-outline-primary" id="nutrition" onclick="filterDoctors('nutrition')" style="cursor: pointer;">Dokter Spesialis Gizi</button>
            <button class="btn btn-outline-primary" id="lungs" onclick="filterDoctors('lungs')" style="cursor: pointer;">Dokter Kesehatan Paru</button>
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

<script>
    const doctors = {
        general: [
            { name: "Dr. Fendy Wijaya", specialization: "Dokter Umum", experience: "5 Tahun", rating: "90%", price: "Rp 50.000" },
            { name: "Dr. Owen Tamashi Buntoro", specialization: "Dokter Umum", experience: "3 Tahun", rating: "85%", price: "Rp 45.000" },
            { name: "Dr. Tiara Andini", specialization: "Dokter Umum", experience: "6 Tahun", rating: "88%", price: "Rp 55.000" },
            { name: "Dr. Tere Liye", specialization: "Dokter Umum", experience: "4 Tahun", rating: "91%", price: "Rp 52.000" }
        ],
        skin: [
            { name: "Dr. Be Justin Regan", specialization: "Dokter Spesialis Kulit", experience: "8 Tahun", rating: "95%", price: "Rp 60.000" },
            { name: "Dr. Ismail Marzuki", specialization: "Dokter Spesialis Kulit", experience: "6 Tahun", rating: "92%", price: "Rp 58.000" },
            { name: "Dr. Maria Kusuma", specialization: "Dokter Spesialis Kulit", experience: "10 Tahun", rating: "94%", price: "Rp 65.000" },
            { name: "Dr. Agus Spididi", specialization: "Dokter Spesialis Kulit", experience: "7 Tahun", rating: "90%", price: "Rp 62.000" }
        ],
        ent: [
            { name: "Dr. Kevyn Aprilyanto", specialization: "Dokter Spesialis THT", experience: "7 Tahun", rating: "88%", price: "Rp 55.000" },
            { name: "Dr. Edo Syahrini", specialization: "Dokter Spesialis THT", experience: "5 Tahun", rating: "84%", price: "Rp 50.000" },
            { name: "Dr. Flavia Louis", specialization: "Dokter Spesialis THT", experience: "2 Tahun", rating: "85%", price: "Rp 55.000" }

        ],
        nutrition: [
            { name: "Dr. Alves Latuconsina", specialization: "Dokter Spesialis Gizi", experience: "4 Tahun", rating: "87%", price: "Rp 50.000" },
            { name: "Dr. Julio Aja", specialization: "Dokter Spesialis Gizi", experience: "3 Tahun", rating: "85%", price: "Rp 48.000" },
            { name: "Dr. Andrew Nicholas", specialization: "Dokter Spesialis Gizi", experience: "5 Tahun", rating: "88%", price: "Rp 55.000" }

        ],
        lungs: [
            { name: "Dr. Leonardo Dahendra", specialization: "Dokter Kesehatan Paru", experience: "10 Tahun", rating: "93%", price: "Rp 70.000" },
            { name: "Dr. Andrew Alfonso Lie", specialization: "Dokter Kesehatan Paru", experience: "12 Tahun", rating: "96%", price: "Rp 75.000" },
            { name: "Dr. Lie Kam Tjoeng", specialization: "Dokter Kesehatan Paru", experience: "15 Tahun", rating: "90%", price: "Rp 75.000" }

        ],
        dentist: [
            { name: "Dr. Tiara Intan Kusuma", specialization: "Dokter Gigi", experience: "5 Tahun", rating: "85%", price: "Rp 50.000" },
            { name: "Dr. Evelyn Angelica", specialization: "Dokter Gigi", experience: "7 Tahun", rating: "90%", price: "Rp 55.000" },
            { name: "Dr. Valentcia Angelica", specialization: "Dokter Gigi", experience: "6 Tahun", rating: "89%", price: "Rp 52.000" }
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
                // const card = 
                // `
                //     <div style="flex: 0 0 30%; max-width: 30%; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                //         <div style="display: flex; align-items: center; padding: 15px; gap: 15px;">
                //             <img src="{{ asset('img/home/journey.png') }}" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                //             <div>
                //                 <h5 style="margin: 0; font-size: 16px; font-weight: bold;">${doc.name}</h5>
                //                 <p style="margin: 0; font-size: 14px; color: #666;">${doc.specialization}</p>
                //             </div>
                //         </div>
                //         <div style="padding: 10px 15px; border-top: 1px solid #f1f1f1;">
                //             <p style="margin: 0; font-size: 14px;">Pengalaman: <strong>${doc.experience}</strong></p>
                //             <p style="margin: 0; font-size: 14px;">Rating: <strong>${doc.rating}</strong></p>
                //             <p style="margin: 0; font-size: 14px; color: #007bff; font-weight: bold;">${doc.price}</p>
                //             <button class="btn btn-primary" style="margin-top: 10px; width: 100%; font-size: 14px; font-weight: bold;">Book</button>
                //         </div>
                //     </div>
                // `;
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
                                    <p style="margin: 0; font-size: 14px;">Pengalaman: <strong>${doc.experience}</strong></p>
                                    <p style="margin: 0; font-size: 14px;">Rating: <strong>${doc.rating}</strong></p>
                                    <p style="margin: 0; font-size: 14px; color: #007bff; font-weight: bold;">${doc.price}</p>
                                    <button class="btn btn-primary" style="margin-top: 10px; width: 100%; font-size: 14px; font-weight: bold;">Book</button>
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
</script>
@endsection
