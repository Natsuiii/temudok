@extends('landingpage.layout.dashboard')

@section('content')
<div class="container p-4">
    <h4 style="font-weight: bold; margin-bottom: 20px;">Riwayat Pemesanan</h4>

    <div>
        <!-- Tab Navigation -->
        <div style="display: flex; justify-content: center; gap: 30px; margin-bottom: 30px;">
            <button class="btn btn-primary" id="ongoing-tab" onclick="showTab('ongoing')" style="cursor: pointer; padding: 10px 20px; font-size: 16px;">Ongoing</button>
            <button class="btn btn-outline-primary" id="history-tab" onclick="showTab('history')" style="cursor: pointer; padding: 10px 20px; font-size: 16px;">History</button>
        </div>

        <!-- Ongoing -->
        <div id="ongoing-section" style="display: block;">
            <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                <!-- Card -->
                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="img/journey.png" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                        <div>
                            <h5 style="margin: 0; font-size: 16px; font-weight: bold;">Dr. Fendy Wijaya</h5>
                            <p style="margin: 0; font-size: 14px; color: #666;">Dokter Umum</p>
                            <p style="margin: 0; font-size: 14px; color: #007bff;">Rating: 4.5/5</p>
                        </div>
                    </div>
                    <div>
                        <p style="margin: 0; font-size: 14px;">Tanggal Booking: <strong>12 Desember 2024</strong></p>
                        <p style="margin: 0; font-size: 14px;">Harga: <strong>Rp 50.000</strong></p>
                    </div>
                    <div>
                        <a href="#" style="display: inline-block; text-align: center; text-decoration: none; color: white; background-color: #007bff; padding: 10px; border-radius: 5px; font-size: 14px; font-weight: bold;">Link Zoom</a>
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="img/journey.png" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                        <div>
                            <h5 style="margin: 0; font-size: 16px; font-weight: bold;">Dr. Fendy Wijaya</h5>
                            <p style="margin: 0; font-size: 14px; color: #666;">Dokter Umum</p>
                            <p style="margin: 0; font-size: 14px; color: #007bff;">Rating: 4.5/5</p>
                        </div>
                    </div>
                    <div>
                        <p style="margin: 0; font-size: 14px;">Tanggal Booking: <strong>12 Desember 2024</strong></p>
                        <p style="margin: 0; font-size: 14px;">Harga: <strong>Rp 50.000</strong></p>
                    </div>
                    <div>
                        <a href="#" style="display: inline-block; text-align: center; text-decoration: none; color: white; background-color: #007bff; padding: 10px; border-radius: 5px; font-size: 14px; font-weight: bold;">Link Zoom</a>
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="img/journey.png" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                        <div>
                            <h5 style="margin: 0; font-size: 16px; font-weight: bold;">Dr. Fendy Wijaya</h5>
                            <p style="margin: 0; font-size: 14px; color: #666;">Dokter Umum</p>
                            <p style="margin: 0; font-size: 14px; color: #007bff;">Rating: 4.5/5</p>
                        </div>
                    </div>
                    <div>
                        <p style="margin: 0; font-size: 14px;">Tanggal Booking: <strong>12 Desember 2024</strong></p>
                        <p style="margin: 0; font-size: 14px;">Harga: <strong>Rp 50.000</strong></p>
                    </div>
                    <div>
                        <a href="#" style="display: inline-block; text-align: center; text-decoration: none; color: white; background-color: #007bff; padding: 10px; border-radius: 5px; font-size: 14px; font-weight: bold;">Link Zoom</a>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- History -->
        <div id="history-section" style="display: none;">
            <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                <!-- Card -->
                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="img/journey.png" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                        <div>
                            <h5 style="margin: 0; font-size: 16px; font-weight: bold;">Dr. Tiara Andini</h5>
                            <p style="margin: 0; font-size: 14px; color: #666;">Dokter Umum</p>
                        </div>
                    </div>
                    <div>
                        <p style="margin: 0; font-size: 14px;">Tanggal Booking: <strong>10 Desember 2024</strong></p>
                        <p style="margin: 0; font-size: 14px;">Harga: <strong>Rp 55.000</strong></p>
                    </div>
                    <div>
                        <a href="#" style="display: inline-block; text-align: center; text-decoration: none; color: white; background-color: #6c757d; padding: 10px; border-radius: 5px; font-size: 14px; font-weight: bold; pointer-events: none;">Selesai</a>
                    </div>
                </div>
                
                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="img/journey.png" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                        <div>
                            <h5 style="margin: 0; font-size: 16px; font-weight: bold;">Dr. Tiara Andini</h5>
                            <p style="margin: 0; font-size: 14px; color: #666;">Dokter Umum</p>
                        </div>
                    </div>
                    <div>
                        <p style="margin: 0; font-size: 14px;">Tanggal Booking: <strong>10 Desember 2024</strong></p>
                        <p style="margin: 0; font-size: 14px;">Harga: <strong>Rp 55.000</strong></p>
                    </div>
                    <div>
                        <a href="#" style="display: inline-block; text-align: center; text-decoration: none; color: white; background-color: #6c757d; padding: 10px; border-radius: 5px; font-size: 14px; font-weight: bold; pointer-events: none;">Selesai</a>
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; border: 1px solid #ddd; border-radius: 10px; padding: 15px; gap: 15px; width: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <img src="img/journey.png" alt="Foto Dokter" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; border: 2px solid #007bff;">
                        <div>
                            <h5 style="margin: 0; font-size: 16px; font-weight: bold;">Dr. Tiara Andini</h5>
                            <p style="margin: 0; font-size: 14px; color: #666;">Dokter Umum</p>
                        </div>
                    </div>
                    <div>
                        <p style="margin: 0; font-size: 14px;">Tanggal Booking: <strong>10 Desember 2024</strong></p>
                        <p style="margin: 0; font-size: 14px;">Harga: <strong>Rp 55.000</strong></p>
                    </div>
                    <div>
                        <a href="#" style="display: inline-block; text-align: center; text-decoration: none; color: white; background-color: #6c757d; padding: 10px; border-radius: 5px; font-size: 14px; font-weight: bold; pointer-events: none;">Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showTab(tab) {
        const ongoingSection = document.getElementById('ongoing-section');
        const historySection = document.getElementById('history-section');
        const ongoingTab = document.getElementById('ongoing-tab');
        const historyTab = document.getElementById('history-tab');

        if (tab === 'ongoing') {
            ongoingSection.style.display = 'block';
            historySection.style.display = 'none';
            ongoingTab.classList.remove('btn-outline-primary');
            ongoingTab.classList.add('btn-primary');
            historyTab.classList.remove('btn-primary');
            historyTab.classList.add('btn-outline-primary');
        } else {
            ongoingSection.style.display = 'none';
            historySection.style.display = 'block';
            historyTab.classList.remove('btn-outline-primary');
            historyTab.classList.add('btn-primary');
            ongoingTab.classList.remove('btn-primary');
            ongoingTab.classList.add('btn-outline-primary');
        }
    }
</script>
@endsection
