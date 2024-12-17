<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        Article::factory()->create([
            'doctor_id' => 1,
            'image_url' => 'img/articles/1.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa itu Perlengketan Usus?',
            'content1' => "Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.",
            'content2' => "Kondisi yang juga disebut adhesi usus ini terjadi akibat adanya luka pada jaringan antar organ. Akibatnya, usus pun saling menempel. Pasalnya, luka membuat jaringan lebih mudah menempel karena permukaannya sangat lengket. Itu sebabnya, usus lengket sering terjadi pada pasien yang baru menjalani operasi. Gangguan pencernaan ini mungkin terjadi pada antar-saluran pencernaan atau sistem pencernaan dengan jaringan otot perut.",
            'content3' => "Perlengketan usus jarang menimbulkan gejala, namun jika menyumbat usus sebagian atau seluruhnya, maka akan menimbulkan gejala-gejala seperti sakit perut atau kram yang parah, muntah, kembung, ketidakmampuan untuk mengeluarkan gas, sembelit, dan sebagainya. Jika Anda mengalami gejala obstruksi usus, segera cari bantuan medis untuk penanganan lebih intensif.",
            'description' => Str::words('Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 2,
            'image_url' => 'img/articles/2.jpeg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Cara Menjaga Jantung Agar Terhindar dari Serangan Jantung',
            'content1' => "Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi. Maka dari itu, kesehatan jantung perlu sekali untuk dijaga. Oleh karena itu, artikel ini akan membahas beberapa cara menjaga kesehatan jantung sehingga dapat terhindar dari penyakit jantung koroner.",
            'content2' => "Olahraga atau aktivitas fisik ringan secara rutin bisa menolong jantung untuk tetap sehat. Ketika berolahraga, jantung akan memompa darah dengan lebih deras sehingga semua pembuluh darah menjadi lebih lentur. Selain itu, oksigen akan terdistribusi dengan lancar ke seluruh tubuh sehingga membuat Anda menjadi merasa lebih bugar.",
            'content3' => "Tak lupa, berhentilah merokok! Peringatan yang ada di bungkus rokok bukanlah tanpa alasan. Menurut WHO, ada sekitar 1,9 juta orang tiap tahun meninggal karena sakit jantung yang terkait penggunaan tembakau. Nikotin di rokok tak hanya merusak paru-paru, tetapi juga membahayakan jantung manusia. Jika Anda ingin mempunyai jantung yang sehat, berhentilah merokok dari sekarang.",
            'description' => Str::words('Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 3,
            'image_url' => 'img/articles/3.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Benarkah Mandi Malam Mengakibatkan Rematik?',
            'content1' => "Anda pasti sering mendengar bahwa mandi di malam hari dapat menyebabkan rematik. Pernyataan ini mungkin telah Anda dengar sejak lama dan diturunkan dari generasi ke generasi. Namun, secara medis, apakah pernyataan ini benar? Lantas, apakah rematik itu? Kita akan ungkap kebenarannya di artikel ini.",
            'content2' => "Penyakit rematik adalah suatu kondisi medis yang mengacu pada sekumpulan penyakit (lebih dari 80 jenis), yang berkaitan dengan kelainan otot, sendi, dan struktur di sekitarnya. Rematik dapat berupa penyakit autoimun, seperti rheumatoid arthritis (peradangan akibat kekebalan tubuh menyerang sendi) dan lupus, atau non-autoimun, seperti gout arthritis (asam urat tinggi yang menyebabkan radang).",
            'content3' => "Faktanya, pernyataan tersebut adalah mitos. Mandi malam tidak menyebabkan rematik, namun dapat memperparah kondisi seseorang yang sudah mengidap rematik. Hal ini dikarenakan udara dingin atau air dingin dapat mengakibatkan perubahan konsistensi cairan sendi, yang dapat memperparah kekakuan otot dan sendi. Perlu diluruskan bahwa rematik tidak akan muncul tiba-tiba pada orang sehat hanya karena mandi malam.",
            'description' => Str::words('Anda pasti sering mendengar bahwa mandi di malam hari dapat menyebabkan rematik. Pernyataan ini mungkin telah Anda dengar sejak lama dan diturunkan dari generasi ke generasi.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 5,
            'image_url' => 'img/articles/4.jpeg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Panu dan Pencegahannya',
            'content1' => "Panu adalah infeksi kulit yang disebabkan oleh jamur. Jamur penyebab panu sebenarnya adalah salah satu jamur yang memang normal hidup di kulit, yaitu jamur Malassezia. Namun, ketika jamur ini berkembang secara berlebih, terjadilah perubahan warna pada kulit yang merupakan ciri utama panu.",
            'content2' => "Sebagian orang percaya bahwa langsung mandi ketika tubuh berkeringat dapat menyebabkan panu. Padahal, tubuh yang dibiarkan berkeringat dan dalam kondisi lembab justru dapat menjadi pemicu pertumbuhan jamur penyebab panu. Selain keringat berlebih yang tidak segera dikeringkan, ada sejumlah faktor yang dapat memicu pertumbuhan berlebih penyebab panu, seperti kulit berminyak, perubahan hormon, dan kondisi medis tertentu.",
            'content3' => "Pengobatan untuk kasus infeksi panu yang ringan umumnya menggunakan obat oles berupa krim, losion, atau sampo. Sedangkan untuk panu yang sudah meluas, dokter dapat meresepkan obat panu minum yang mengandung antijamur. Untuk mencegah risiko terjadinya panu, Anda dapat menghindari penggunaan skincare yang berbahan dasar minyak, menggunakan sampo yang mengandung selenium sulfida, dan menggunakan sunscreen saat beraktivitas.",
            'description' => Str::words('Panu adalah infeksi kulit yang disebabkan oleh jamur. Jamur penyebab panu sebenarnya adalah salah satu jamur yang memang normal hidup di kulit, yaitu jamur Malassezia.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 7,
            'image_url' => 'img/articles/5.jpeg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Double Chin yang Suka Bikin Gak Pede!',
            'content1' => "Double chin atau dagu berlipat umumnya terbentuk akibat adanya penumpukan lemak di bawah dagu. Namun, penyebab double chin bukan hanya itu saja. Double chin juga bisa muncul meski tidak ada penimbunan lemak. Orang yang memiliki berat badan berlebih atau obesitas lebih berisiko untuk memiliki double chin. Hal ini karena penumpukan lemak bisa terjadi di wajah, tak terkecuali pada area dagu dan sekitarnya.",
            'content2' => "Jika berat badanmu normal, tetapi dagu masih terlihat berlipat, bisa jadi kondisi ini disebabkan oleh faktor keturunan. Memiliki orang tua dan keluarga yang dagunya berlipat akan meningkatkan risiko yang sama pada keturunannya. Selain itu, elastisitas kulit yang menurun menyebabkan kulit sekitar dagu kendur, sehingga terbentuklah lipatan pada dagu atau double chin.",
            'content3' => "Ada beragam cara mengatasi double chin. Bagi yang memiliki berat badan berlebih, lakukanlah diet sehat untuk menurunkan berat badan, agar lemak di area dagu dapat berkurang. Selain itu, Anda juga bisa mencoba senam wajah, sedot lemak, dan facelift. Namun, yang terpenting adalah Anda harus percaya diri. Kepercayaan diri yang baik akan membuat Anda menerima diri sendiri apa adanya.",
            'description' => Str::words('Double chin atau dagu berlipat umumnya terbentuk akibat adanya penumpukan lemak di bawah dagu.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 8,
            'image_url' => 'img/articles/6.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Tutorial Punya Kulit Glowing yang Sehat',
            'content1' => "Tampilan kulit glowing merupakan tren kecantikan yang tengah berkembang saat ini. Kulit glowing merupakan kulit yang sehat dan bercahaya dengan ciri-ciri warna kulit merata serta tekstur halus dan elastis. Untuk mendapatkan kulit glowing, banyak orang yang melakukan perawatan kecantikan, baik dengan mengaplikasikan produk-produk skincare maupun melakukan perawatan di klinik kecantikan.",
            'content2' => "Faktor nutrisi, gaya hidup dan manajemen stres sangat mempengaruhi kondisi kesehatan kulit. Pola makan sehat bermanfaat bagi seluruh tubuh, termasuk kulit. Namun demikian, terdapat zat gizi tertentu yang memiliki manfaat yang spesifik bagi kesehatan kulit. Misalnya, vitamin A, C, dan E yang berperan sebagai antioksidan, atau pemelihara sel kulit, serta mencegah timbulnya kanker kulit.",
            'content3' => "Selain itu, asam lemak omega-3 diperlukan untuk membantu menjaga kulit tetap kenyal dan lembab. Di lain sisi, mineral zinc yang banyak ditemukan pada daging, hati, kerang dan telur, sangat membantu mempertahankan integritas kulit dan mendukung penyembuhan luka. Kulit mencerminkan kesehatan tubuh sehingga menutrisi kulit dari dalam maupun luar adalah resep utama untuk mendapatkan tampilan kulit glowing.",
            'description' => Str::words('Tampilan kulit glowing merupakan tren kecantikan yang tengah berkembang saat ini. Kulit glowing merupakan kulit yang sehat dan bercahaya dengan ciri-ciri warna kulit merata.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 9,
            'image_url' => 'img/articles/7.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Telinga Berdenging, Apakah Bahaya?',
            'content1' => "Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal. Bunyi ini bisa berupa dengungan, siulan, dering, atau bunyi lain yang hanya dapat didengar oleh orang yang mengalaminya. Tinnitus bukanlah penyakit, tetapi merupakan gejala dari berbagai kondisi yang mendasarinya.",
            'content2' => "Telinga berdenging pada umumnya disebabkan karena mendengar suara keras secara tiba-tiba atau berulang kali, seperti konser musik, mesin berat, atau ledakan, dapat merusak sel-sel rambut halus di telinga bagian dalam yang berfungsi mengirimkan sinyal suara ke otak. Kerusakan ini bisa menyebabkan tinnitus. Penumpukan kotoran telinga yang berlebihan juga dapat menyebabkan iritasi yang bisa memicu tinnitus.",
            'content3' => "Jika Anda mengalami tinnitus terus-menerus, disertai dengan gejala lain seperti pusing, kehilangan pendengaran, atau nyeri telinga, segera hubungi dokter. Meski seringkali tidak berbahaya, tinnitus bisa menjadi sangat mengganggu dan mungkin menandakan kondisi kesehatan yang lebih serius. Jika Anda mengalami gejala ini, penting untuk mencari konsultasi medis untuk diagnosis dan penanganan yang tepat.",
            'description' => Str::words('Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 10,
            'image_url' => 'img/articles/8.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa Itu Infeksi Sinusitis?',
            'content1' => "Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah. Gangguan ini dapat membuat lendir tipis yang mengalir keluar dari saluran hidung. Sinus bisa tersumbat karena berisi cairan sehingga bakteri tumbuh dan menyebabkan infeksi.",
            'content2' => "Beberapa penyebab sinusitis yang umum antara lain polip hidung, deviasi septum hidung, alergi, infeksi saluran napas, dan kondisi medis lainnya. Pada anak-anak, hal-hal yang dapat meningkatkan risiko alami kondisi ini misalnya adanya alergi, terjangkit dari anak-anak lain, banyak menghirup asap di lingkungan sekitarnya, bahkan juga akibat penggunaan dot.",
            'content3' => "Seseorang dapat dikatakan terkena sinusitis kambuhan jika ia mengalami sinusitis akut sebanyak 4 kali atau lebih dalam 1 tahun. Gejala yang timbul akibat kondisi ini umumnya berlangsung kurang dari 2 minggu setiap kali kambuh. Lakukan pemeriksaan ke dokter jika mengalami gejala yang telah disebutkan, terutama jika gejala memburuk dan berlangsung lebih dari 10 hari. Jangan tunda untuk mencari pertolongan ke IGD rumah sakit terdekat.",
            'description' => Str::words('Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 11,
            'image_url' => 'img/articles/9.jpeg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apakah Prosedur Irigasi Telinga Aman Dilakukan?',
            'content1' => "Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil. Impaksi serumen adalah penumpukan serumen yang menyebabkan gangguan pendengaran atau sumbatan telinga. Adanya impaksi serumen dapat menghalangi proses diagnostik yang memerlukan pemeriksaan membran timpani.",
            'content2' => "Prosedur irigasi telinga melibatkan air hangat atau sesuai suhu badan yang dialirkan ke dalam liang telinga. Adanya tekanan akibat aliran air diharapkan akan mengeluarkan serumen prop atau benda asing secara mekanik. Walaupun terkesan mudah, tindakan ini memiliki risiko mencederai membran timpani. Oleh karena itu, tekanan saat mengalirkan air harus dikendalikan sedemikian rupa agar mengurangi risiko ruptur membran timpani.",
            'content3' => "Irigasi telinga bermanfaat untuk mengeluarkan penumpukan kotoran pada telinga. Selain itu, tindakan ini juga bisa membantu untuk mengeluarkan benda asing yang secara tidak sengaja masuk ke dalam telinga. Meskipun aman, tetapi prosedur ini juga dapat memicu efek samping. Nah, untuk meminimalisir efek samping, pastikan kamu melakukan irigasi telinga pada rumah sakit atau klinik dengan dokter spesialis THT.",
            'description' => Str::words('Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 12,
            'image_url' => 'img/articles/10.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Konsep 4 Sehat 5 Sempurna Kini Telah Ditinggalkan',
            'content1' => "Slogan 4 Sehat 5 Sempurna adalah pedoman gizi seimbang yang pasti sudah tak asing untuk kamu, Tapi, tahukah kamu bahwa istilah yang ada sejak tahun 1952 itu telah berganti nama? Slogan 4 sehat 5 sempurna kini berganti menjadi Pedoman Gizi Seimbang (PGS), yang dikeluarkan oleh P2PTM Kemenkes RI.",
            'content2' => "Pedoman Gizi Seimbang mengacu pada Nutrition Guide for Balanced Diet, yaitu hasil kesepakatan konferensi pangan sedunia pada tahun 1992. Dalam Pedoman Gizi Seimbang pengganti makanan 4 Sehat 5 Sempurna, disebutkan ada 4 poin yang harus dijalani agar kebutuhan gizi kita terpenuhi, yaitu mengonsumsi makanan beragam, membiasakan perilaku hidup bersih, melakukan aktivitas fisik, mempertahankan dan memantau berat badan",
            'content3' => "Dalam Pedoman Gizi Seimbang pengganti makanan 4 Sehat 5 Sempurna juga terdapat panduan konsumsi sehari-hari yang disebut Tumpeng Gizi Seimbang. Isinya adalah anjuran untuk membatasi asupan gula, garam, dan minyak, mengonsumsi sumber protein, minum air putih 8 gelas, makan sayuran 3-4 porsi, mengonsumsi buah-buahan 2-3 porsi, mengonsumsi karbohidrat 3-4 porsi, rutin berolahraga dan bergerak, memantau berat badan, menjaga kebersihan",
            'description' => Str::words('Slogan 4 Sehat 5 Sempurna adalah pedoman gizi seimbang yang pasti sudah tak asing untuk kamu.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 14,
            'image_url' => 'img/articles/11.jpeg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Mengapa Stunting Menjadi Fokus Pemerintah RI?',
            'content1' => "Stunting adalah kondisi gangguan pertumbuhan pada anak yang ditandai dengan tinggi badan anak yang lebih pendek dari anak seusianya. Stunting dapat disebabkan oleh berbagai hal, seperti kurangnya asupan gizi pada ibu hamil dan anak, infeksi berulang, stimulasi psikososial yang tidak memadai, dan sanitasi yang buruk. Stunting dapat berdampak pada kecerdasan anak dan timbulnya penyakit degeneratif seperti obesitas, diabetes, dan penyakit jantung koroner.",
            'content2' => "Anak stunting bisa mengalami pertumbuhan otak yang tidak maksimal, sehingga tidak bisa mengalami perkembangan sehat selayaknya anak seusianya. Anak dengan stunting berisiko mengalami gangguan kesehatan lain. Contohnya seperti diabetes dan gangguan jantung. Kondisi-kondisi ini tentu tak sejalan dengan misi pemerintah untuk membangun Indonesia Emas 2045. Bagaimana mungkin suatu negara bisa maju jika anak-anaknya terkena stunting dan gizi buruk?",
            'content3' => "Untuk menanggulangi dan menurunkan angka stunting di Indonesia, diperlukan adanya kerjasama yang baik antara pemerintah dengan masyarakat. Orang tua perlu segera memeriksakan Si Kecil ke dokter jika tinggi badannya tampak lebih pendek ketimbang anak seusianya. Bagi anak di bawah 2 tahun, pemeriksaan harus dilakukan 1-2 bulan sekali. Sementara anak di atas 2 tahun, pemeriksaan bisa dilakukan 1 tahun sekali.",
            'description' => Str::words('Stunting adalah kondisi gangguan pertumbuhan pada anak yang ditandai dengan tinggi badan anak yang lebih pendek dari anak seusianya.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 15,
            'image_url' => 'img/articles/12.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Pola Makan yang Baik untuk Penderita Obesitas',
            'content1' => "Obesitas adalah kondisi ketika lemak yang menumpuk di dalam tubuh sangat banyak akibat kalori masuk lebih banyak dibandingkan yang dibakar. Obesitas merupakan akumulasi lemak abnormal atau berlebihan yang bisa menyebabkan keadaan berat badan seseorang melebihi dari standar kesehatan yang telah ditentukan sehingga dapat mengganggu kesehatan.",
            'content2' => "Berdasarkan data Riskesdas tentang analis survei konsumsi makanan individu, sebesar 40,7% masyarakat Indonesia mengonsumsi makanan berlemak, 53,1% mengonsumsi makanan manis, 93,5% kurang konsumsi sayur dan buah, dan 26,1% aktivitas fisik yang kurang. Data ini jelas menunjukkan bahwa obesitas banyak disebabkan oleh pola makan dan gaya hidup yang buruk.",
            'content3' => "Pola makan untuk menghindari obesitas adalah menggunakan piring makan model T, yaitu jumlah sayur 2 kali lipat dari bahan makanan sumber karbohidrat, jumlah makanan sumber protein setara dengan jumlah makanan sumber karbohidrat, buah minimal harus sama dengan jumlah karbohidrat atau protein, dan kurangi konsumsi refined carbohydrates.",
            'description' => Str::words('Obesitas adalah kondisi ketika lemak yang menumpuk di dalam tubuh sangat banyak akibat kalori masuk lebih banyak dibandingkan yang dibakar.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 16,
            'image_url' => 'img/articles/13.jpeg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Bahaya Kehamilan Usia Dini Bagi Remaja',
            'content1' => "Usia ideal bagi perempuan untuk hamil adalah 20–30 tahun atau di awal usia 30-an. Menjalani kehamilan di bawah usia 20 tahun dapat dikatakan berisiko karena berdasarkan anatomi tubuh, perkembangan panggul perempuan pada usia tersebut belum sempurna sehingga dapat menyebabkan kesulitan saat melahirkan.",
            'content2' => "Ibu yang hamil di bawah usia 20 tahun memiliki risiko lebih tinggi mengalami kelahiran prematur. Semakin awal bayi dilahirkan, semakin besar pula risiko terjadinya gangguan tumbuh kembang, cacat bawaan lahir, hingga gangguan fungsi pernapasan dan pencernaan pada bayi. Pada kasus tertentu, hamil di bawah usia 20 tahun juga dapat meningkatkan risiko terjadinya keguguran atau kematian janin.",
            'content3' => "Selain itu, tahukah kamu jika salah satu faktor risiko seseorang mengalami kanker rahim adalah kehamilan pada usia dini? Meskipun terbilang jarang sekali terjadi pada wanita hamil, kemungkinan tersebut masih ada. Kanker ini akan menyerang sel indung telur pada rahim yang menimbulkan gangguan berbahaya. Maka dari itu, ketahui risiko terkena kanker rahim pada wanita yang hamil di usia dini.",
            'description' => Str::words('Usia ideal bagi perempuan untuk hamil adalah 20–30 tahun atau di awal usia 30-an. Menjalani kehamilan di bawah usia 20 tahun dapat dikatakan berisiko karena berdasarkan anatomi tubuh.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 17,
            'image_url' => 'img/articles/14.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa Itu Kehamilan Ektopik (Ectopic Pregnancy)?',
            'content1' => "Kehamilan ektopik adalah kehamilan yang terjadi di luar rahim. Pada kehamilan normal, telur yang sudah dibuahi akan melalui saluran tuba falopi yang menghubungkan indung telur dengan rahim menuju ke rahim. Telur tersebut akan melekat pada rahim dan mulai tumbuh menjadi janin. Namun pada kehamilan ektopik, telur yang sudah dibuahi akan menempel dan tumbuh di tempat yang tidak semestinya.",
            'content2' => "Penyebab hamil di luar kandungan bisa beragam, seperti riwayat hamil ektopik sebelumnya, masih menggunakan alat kontrasepsi spiral dan pil progesteron saat hamil, atau adanya kerusakan dari saluran telur. Beberapa faktor risiko yang dapat menyebabkan gangguan saluran ini, di antaranya merokok, penyakit radang panggul, dan endometriosis.",
            'content3' => "Penanganan kehamilan ektopik dilakukan dengan operasi atas pertimbangan dokter spesialis kebidanan dan kandungan. Oleh karena kehamilan ektopik dapat mengancam nyawa, maka deteksi dini dan keputusan untuk mengakhiri kehamilan disesuaikan dengan prosedur yang disarankan oleh pihak rumah sakit. Pengobatan kehamilan ektopik dapat dilakukan dengan cara terapi obat-obatan ataupun operasi.",
            'description' => Str::words('Kehamilan ektopik adalah kehamilan yang terjadi di luar rahim. Pada kehamilan normal, telur yang sudah dibuahi akan melalui saluran tuba falopi yang menghubungkan indung telur dengan rahim menuju ke rahim.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 19,
            'image_url' => 'img/articles/15.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Bagaimanakah Proses Persalinan secara Normal Berlangsung?',
            'content1' => "Proses melahirkan normal yang dialami setiap ibu hamil bisa berbeda-beda. Namun, pada dasarnya ada 3 tahapan proses yang umumnya dilalui oleh ibu hamil sebelum akhirnya bertemu dengan buah hati tercinta. Tahapan proses melahirkan normal dimulai ketika ibu hamil mulai mengalami kontraksi rahim. Namun, perlu diingat bahwa kontraksi ini berbeda dengan kontraksi palsu.",
            'content2' => "Tahapan pertama diawali dengan pelebaran leher rahim, kontraksi yang kuat, dan meningkatnya intensitas rasa sakit. Kadang, tahap ini juga diikuti dengan pecahnya ketuban. Pada fase ini, ibu yang melahirkan umumnya membutuhkan pendamping. Selanjutnya, tahapan kedua adalah proses mendorong bayi agar keluar dari tubuh ibu. Pada tahap ini, bukaan leher rahim sudah penuh dan semua tenaga harus dikerahkan untuk mengeluarkan bayi.",
            'content3' => "Terakhir, di tahapan ketiga, bayi telah lahir, namun persalinan belum sepenuhnya usai. Pada tahap ketiga proses melahirkan normal, Bumil harus menunggu hingga plasenta keluar dari rahim. Plasenta biasanya akan keluar dalam waktu 5–10 menit setelah bayi lahir. Namun, ada juga yang baru keluar setelah 30–60 menit. Setelah bayi dan plasenta keluar, bidan akan menjahit luka robekan di jalan lahir. Ibu juga bisa mulai menyusui sang buah hati.",
            'description' => Str::words('Proses melahirkan normal yang dialami setiap ibu hamil bisa berbeda-beda. Namun, pada dasarnya ada 3 tahapan proses yang umumnya dilalui oleh ibu hamil sebelum akhirnya bertemu dengan buah hati tercinta.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 20,
            'image_url' => 'img/articles/16.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Karang Gigi dan Bau Mulut',
            'content1' => "Karang gigi adalah timbunan plak yang membentuk lapisan seperti kotoran yang mengeras di gigi. Berbeda dengan plak biasa, kondisi ini lebih sulit untuk dihilangkan dengan sikat gigi biasa. Oleh karena itu, pembersihan masalah ini hanya bisa dilakukan oleh dokter gigi. Jika tidak kamu bersihkan, ini bisa menimbulkan masalah pada gigi dan gusi, seperti gingivitis atau radang gusi.",
            'content2' => "Hal yang menjadi penyebab karang gigi adalah plak yang tidak kamu bersihkan, hingga akhirnya menumpuk dan mengeras pada gigi. Karena plak pada gigi tidak dapat hilang dengan sendirinya, kamu perlu menyikat gigi setiap hari. Karang yang tidak kunjung kamu bersihkan bisa menyebabkan beberapa gejala seperti bau mulut, iritasi, hingga gusi berdarah.",
            'content3' => "Mengatasi atau pengobatan karang gigi tidak cukup hanya dengan menyikat gigi. Untuk membersihkannya, kamu perlu menjalani prosedur bernama scaling gigi, yaitu prosedur non-bedah yang dilakukan dengan menggunakan scaler (alat khusus untuk mengikisnya). Alat ini tersedia dalam jenis manual dan ultrasonik. Namun, scaler ultrasonik lebih sering digunakan karena memudahkan proses pengikisan. Selain itu, scaler ini juga lebih cepat dan mengurangi risiko nyeri.",
            'description' => Str::words('Karang gigi adalah timbunan plak yang membentuk lapisan seperti kotoran yang mengeras di gigi. Berbeda dengan plak biasa, kondisi ini lebih sulit untuk dihilangkan dengan sikat gigi biasa.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 21,
            'image_url' => 'img/articles/17.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Waspadai Bahaya Tindik Lidah!',
            'content1' => "Tindik lidah merupakan salah satu bentuk ekspresi diri yang cukup populer di kalangan remaja. Di balik alasan estetika, tindik lidah bisa berbahaya bagi kesehatan, terutama kesehatan gigi dan mulut. Proses tindik lidah dilakukan dengan cara menusuk lidah menggunakan jarum untuk membuat lubang kecil. Setelah itu, perhiasan berbentuk cincin atau bulatan kecil akan dimasukkan ke dalam lubang tersebut.",
            'content2' => "Tindik lidah pada awalnya bisa menyebabkan nyeri, bengkak, dan air liur berlebih. Saat perhiasan menembus jaringan lunak, tindikan di lidah bisa menimbulkan risiko yang lebih berbahaya daripada tindikan di bagian tubuh lain, misalnya telinga atau hidung. Ini karena perawatan tindik lidah lebih sulit dan luka tindikan lebih mudah terinfeksi. Tindikan di lidah juga bisa memicu terjadinya perdarahan saat pembuluh darah tertusuk jarum selama proses penindikan.",
            'content3' => "Mulut secara alami mengandung jutaan bakteri yang dengan mudah menyebabkan infeksi, nyeri, dan pembengkakan. Tindikan di lidah bisa terinfeksi karena banyak faktor, seperti kualitas bahan perhiasan yang buruk, alat yang tidak steril, atau sering menyentuh area tindikan dengan tangan yang kotor. Karena banyaknya bahaya yang dapat ditimbulkan, tindik lidah tetap tidak disarankan.",
            'description' => Str::words('Tindik lidah merupakan salah satu bentuk ekspresi diri yang cukup populer di kalangan remaja. Di balik alasan estetika, tindik lidah bisa berbahaya bagi kesehatan, terutama kesehatan gigi dan mulut.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 22,
            'image_url' => 'img/articles/18.jpg',
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Bagaimana Jika Gigi Anak Berlubang?',
            'content1' => "Gigi berlubang termasuk keluhan umum pada anak-anak dan sebaiknya tidak boleh disepelekan karena bisa menyebabkan gigi nyeri atau gigi copot, namun juga bahaya kesehatan lainnya. Penyebab atau faktor gigi berlubang pada anak sangat banyak, antara lain bakteri dalam plak akibat anak jarang menyikat gigi, sehingga terjadi penumpukan plak di dalam rongga mulut.",
            'content2' => "Dalam pencegahannya, fluoride termasuk salah satu mineral yang dibutuhkan untuk mencegah gigi berlubang, sehingga gigi anak sangat penting disikat dengan pasta gigi yang mengandung fluoride. Fluoride adalah mineral yang terjadi secara alami, membantu mencegah gigi berlubang pada anak-anak dan orang dewasa dengan membuat permukaan luar gigi (enamel) lebih kuat terhadap serangan asam yang menyebabkan kerusakan gigi.",
            'content3' => "Selain itu, orang tua juga harus sadar pentingnya kesehatan gigi susu bagi pertumbuhan anak secara keseluruhan dan pentingnya gigi susu untuk kesehatan gigi tetap kemudian. Oleh sebab itu, mulailah kebiasaan baik untuk membersihkan rongga mulut, makan makanan sehat, tidak memperkenalkan atau mengontrol makanan atau minuman manis sejak dini, serta membiasakan sikat gigi bersama keluarga.",
            'description' => Str::words('Gigi berlubang termasuk keluhan umum pada anak-anak dan sebaiknya tidak boleh disepelekan karena bisa menyebabkan gigi nyeri atau gigi copot, namun juga bahaya kesehatan lainnya.', 10, '...')
        ]);
    }
}
