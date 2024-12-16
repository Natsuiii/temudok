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
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa itu Perlengketan Usus?',
            'content' => "Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.\n\n".
                        "Kondisi yang juga disebut adhesi usus ini terjadi akibat adanya luka pada jaringan antar organ. Akibatnya, usus pun saling menempel. Pasalnya, luka membuat jaringan lebih mudah menempel karena permukaannya sangat lengket. Itu sebabnya, usus lengket sering terjadi pada pasien yang baru menjalani operasi. Gangguan pencernaan ini mungkin terjadi pada antar-saluran pencernaan atau sistem pencernaan dengan jaringan otot perut.\n\n".
                        "Perlengketan usus jarang menimbulkan gejala, namun jika menyumbat usus sebagian atau seluruhnya, maka akan menimbulkan gejala-gejala seperti sakit perut atau kram yang parah, muntah, kembung, ketidakmampuan untuk mengeluarkan gas, sembelit, dan sebagainya. Jika Anda mengalami gejala obstruksi usus, segera cari bantuan medis untuk penanganan lebih intensif.\n",
            'description' => Str::words('Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 2,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Cara Menjaga Jantung Agar Terhindar dari Serangan Jantung',
            'content' => "Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi. Maka dari itu, kesehatan jantung perlu sekali untuk dijaga. Oleh karena itu, artikel ini akan membahas beberapa cara menjaga kesehatan jantung sehingga dapat terhindar dari penyakit jantung koroner.\n\n".
                        "Olahraga atau aktivitas fisik ringan secara rutin bisa menolong jantung untuk tetap sehat. Ketika berolahraga, jantung akan memompa darah dengan lebih deras sehingga semua pembuluh darah menjadi lebih lentur. Selain itu, oksigen akan terdistribusi dengan lancar ke seluruh tubuh sehingga membuat Anda menjadi merasa lebih bugar.\n\n".
                        "Tak lupa, berhentilah merokok! Peringatan yang ada di bungkus rokok bukanlah tanpa alasan. Menurut WHO, ada sekitar 1,9 juta orang tiap tahun meninggal karena sakit jantung yang terkait penggunaan tembakau. Nikotin di rokok tak hanya merusak paru-paru, tetapi juga membahayakan jantung manusia. Jika Anda ingin mempunyai jantung yang sehat, berhentilah merokok dari sekarang.\n",
            'description' => Str::words('Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 3,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Benarkah Mandi Malam Mengakibatkan Rematik?',
            'content' => "Anda pasti sering mendengar bahwa mandi di malam hari dapat menyebabkan rematik. Pernyataan ini mungkin telah Anda dengar sejak lama dan diturunkan dari generasi ke generasi. Namun, secara medis, apakah pernyataan ini benar? Lantas, apakah rematik itu? Kita akan ungkap kebenarannya di artikel ini.\n\n".
                        "Penyakit rematik adalah suatu kondisi medis yang mengacu pada sekumpulan penyakit (lebih dari 80 jenis), yang berkaitan dengan kelainan otot, sendi, dan struktur di sekitarnya. Rematik dapat berupa penyakit autoimun, seperti rheumatoid arthritis (peradangan akibat kekebalan tubuh menyerang sendi) dan lupus, atau non-autoimun, seperti gout arthritis (asam urat tinggi yang menyebabkan radang).\n\n".
                        "Faktanya, pernyataan tersebut adalah mitos. Mandi malam tidak menyebabkan rematik, namun dapat memperparah kondisi seseorang yang sudah mengidap rematik. Hal ini dikarenakan udara dingin atau air dingin dapat mengakibatkan perubahan konsistensi cairan sendi, yang dapat memperparah kekakuan otot dan sendi. Perlu diluruskan bahwa rematik tidak akan muncul tiba-tiba pada orang sehat hanya karena mandi malam.\n",
            'description' => Str::words('Anda pasti sering mendengar bahwa mandi di malam hari dapat menyebabkan rematik. Pernyataan ini mungkin telah Anda dengar sejak lama dan diturunkan dari generasi ke generasi.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 5,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Panu dan Pencegahannya',
            'content' => "Panu adalah infeksi kulit yang disebabkan oleh jamur. Jamur penyebab panu sebenarnya adalah salah satu jamur yang memang normal hidup di kulit, yaitu jamur Malassezia. Namun, ketika jamur ini berkembang secara berlebih, terjadilah perubahan warna pada kulit yang merupakan ciri utama panu.\n\n".
                        "Sebagian orang percaya bahwa langsung mandi ketika tubuh berkeringat dapat menyebabkan panu. Padahal, tubuh yang dibiarkan berkeringat dan dalam kondisi lembab justru dapat menjadi pemicu pertumbuhan jamur penyebab panu. Selain keringat berlebih yang tidak segera dikeringkan, ada sejumlah faktor yang dapat memicu pertumbuhan berlebih penyebab panu, seperti kulit berminyak, perubahan hormon, dan kondisi medis tertentu.\n\n".
                        "Pengobatan untuk kasus infeksi panu yang ringan umumnya menggunakan obat oles berupa krim, losion, atau sampo. Sedangkan untuk panu yang sudah meluas, dokter dapat meresepkan obat panu minum yang mengandung antijamur. Untuk mencegah risiko terjadinya panu, Anda dapat menghindari penggunaan skincare yang berbahan dasar minyak, menggunakan sampo yang mengandung selenium sulfida, dan menggunakan sunscreen saat beraktivitas.\n",
            'description' => Str::words('Panu adalah infeksi kulit yang disebabkan oleh jamur. Jamur penyebab panu sebenarnya adalah salah satu jamur yang memang normal hidup di kulit, yaitu jamur Malassezia.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 7,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Double Chin yang Suka Bikin Gak Pede!',
            'content' => "Double chin atau dagu berlipat umumnya terbentuk akibat adanya penumpukan lemak di bawah dagu. Namun, penyebab double chin bukan hanya itu saja. Double chin juga bisa muncul meski tidak ada penimbunan lemak. Orang yang memiliki berat badan berlebih atau obesitas lebih berisiko untuk memiliki double chin. Hal ini karena penumpukan lemak bisa terjadi di wajah, tak terkecuali pada area dagu dan sekitarnya.\n\n".
                        "Jika berat badanmu normal, tetapi dagu masih terlihat berlipat, bisa jadi kondisi ini disebabkan oleh faktor keturunan. Memiliki orang tua dan keluarga yang dagunya berlipat akan meningkatkan risiko yang sama pada keturunannya. Selain itu, elastisitas kulit yang menurun menyebabkan kulit sekitar dagu kendur, sehingga terbentuklah lipatan pada dagu atau double chin.\n\n".
                        "Ada beragam cara mengatasi double chin. Bagi yang memiliki berat badan berlebih, lakukanlah diet sehat untuk menurunkan berat badan, agar lemak di area dagu dapat berkurang. Selain itu, Anda juga bisa mencoba senam wajah, sedot lemak, dan facelift. Namun, yang terpenting adalah Anda harus percaya diri. Kepercayaan diri yang baik akan membuat Anda menerima diri sendiri apa adanya.\n",
            'description' => Str::words('Double chin atau dagu berlipat umumnya terbentuk akibat adanya penumpukan lemak di bawah dagu.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 8,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Tutorial Punya Kulit Glowing yang Sehat',
            'content' => "Tampilan kulit glowing merupakan tren kecantikan yang tengah berkembang saat ini. Kulit glowing merupakan kulit yang sehat dan bercahaya dengan ciri-ciri warna kulit merata serta tekstur halus dan elastis. Untuk mendapatkan kulit glowing, banyak orang yang melakukan perawatan kecantikan, baik dengan mengaplikasikan produk-produk skincare maupun melakukan perawatan di klinik kecantikan.\n\n".
                        "Faktor nutrisi, gaya hidup dan manajemen stres sangat mempengaruhi kondisi kesehatan kulit. Pola makan sehat bermanfaat bagi seluruh tubuh, termasuk kulit. Namun demikian, terdapat zat gizi tertentu yang memiliki manfaat yang spesifik bagi kesehatan kulit. Misalnya, vitamin A, C, dan E yang berperan sebagai antioksidan, atau pemelihara sel kulit, serta mencegah timbulnya kanker kulit.\n\n".
                        "Selain itu, asam lemak omega-3 diperlukan untuk membantu menjaga kulit tetap kenyal dan lembab. Di lain sisi, mineral zinc yang banyak ditemukan pada daging, hati, kerang dan telur, sangat membantu mempertahankan integritas kulit dan mendukung penyembuhan luka. Kulit mencerminkan kesehatan tubuh sehingga menutrisi kulit dari dalam maupun luar adalah resep utama untuk mendapatkan tampilan kulit glowing.\n",
            'description' => Str::words('Tampilan kulit glowing merupakan tren kecantikan yang tengah berkembang saat ini. Kulit glowing merupakan kulit yang sehat dan bercahaya dengan ciri-ciri warna kulit merata.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 9,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Telinga Berdenging, Apakah Bahaya?',
            'content' => "Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal. Bunyi ini bisa berupa dengungan, siulan, dering, atau bunyi lain yang hanya dapat didengar oleh orang yang mengalaminya. Tinnitus bukanlah penyakit, tetapi merupakan gejala dari berbagai kondisi yang mendasarinya.\n\n".
                        "Telinga berdenging pada umumnya disebabkan karena mendengar suara keras secara tiba-tiba atau berulang kali, seperti konser musik, mesin berat, atau ledakan, dapat merusak sel-sel rambut halus di telinga bagian dalam yang berfungsi mengirimkan sinyal suara ke otak. Kerusakan ini bisa menyebabkan tinnitus. Penumpukan kotoran telinga yang berlebihan juga dapat menyebabkan iritasi yang bisa memicu tinnitus.\n\n".
                        "Jika Anda mengalami tinnitus terus-menerus, disertai dengan gejala lain seperti pusing, kehilangan pendengaran, atau nyeri telinga, segera hubungi dokter. Meski seringkali tidak berbahaya, tinnitus bisa menjadi sangat mengganggu dan mungkin menandakan kondisi kesehatan yang lebih serius. Jika Anda mengalami gejala ini, penting untuk mencari konsultasi medis untuk diagnosis dan penanganan yang tepat.\n",
            'description' => Str::words('Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 10,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa Itu Infeksi Sinusitis?',
            'content' => "Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah. Gangguan ini dapat membuat lendir tipis yang mengalir keluar dari saluran hidung. Sinus bisa tersumbat karena berisi cairan sehingga bakteri tumbuh dan menyebabkan infeksi.\n\n".
                        "Beberapa penyebab sinusitis yang umum antara lain polip hidung, deviasi septum hidung, alergi, infeksi saluran napas, dan kondisi medis lainnya. Pada anak-anak, hal-hal yang dapat meningkatkan risiko alami kondisi ini misalnya adanya alergi, terjangkit dari anak-anak lain, banyak menghirup asap di lingkungan sekitarnya, bahkan juga akibat penggunaan dot.\n\n".
                        "Seseorang dapat dikatakan terkena sinusitis kambuhan jika ia mengalami sinusitis akut sebanyak 4 kali atau lebih dalam 1 tahun. Gejala yang timbul akibat kondisi ini umumnya berlangsung kurang dari 2 minggu setiap kali kambuh. Lakukan pemeriksaan ke dokter jika mengalami gejala yang telah disebutkan, terutama jika gejala memburuk dan berlangsung lebih dari 10 hari. Jangan tunda untuk mencari pertolongan ke IGD rumah sakit terdekat.\n",
            'description' => Str::words('Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 11,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apakah Prosedur Irigasi Telinga Aman Dilakukan?',
            'content' => "Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil. Impaksi serumen adalah penumpukan serumen yang menyebabkan gangguan pendengaran atau sumbatan telinga. Adanya impaksi serumen dapat menghalangi proses diagnostik yang memerlukan pemeriksaan membran timpani.\n\n".
                        "Prosedur irigasi telinga melibatkan air hangat atau sesuai suhu badan yang dialirkan ke dalam liang telinga. Adanya tekanan akibat aliran air diharapkan akan mengeluarkan serumen prop atau benda asing secara mekanik. Walaupun terkesan mudah, tindakan ini memiliki risiko mencederai membran timpani. Oleh karena itu, tekanan saat mengalirkan air harus dikendalikan sedemikian rupa agar mengurangi risiko ruptur membran timpani.\n\n".
                        "Irigasi telinga bermanfaat untuk mengeluarkan penumpukan kotoran pada telinga. Selain itu, tindakan ini juga bisa membantu untuk mengeluarkan benda asing yang secara tidak sengaja masuk ke dalam telinga. Meskipun aman, tetapi prosedur ini juga dapat memicu efek samping. Nah, untuk meminimalisir efek samping, pastikan kamu melakukan irigasi telinga pada rumah sakit atau klinik dengan dokter spesialis THT.\n",
            'description' => Str::words('Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 12,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Konsep 4 Sehat 5 Sempurna Kini Telah Ditinggalkan',
            'content' => "Slogan 4 Sehat 5 Sempurna adalah pedoman gizi seimbang yang pasti sudah tak asing untuk kamu, Tapi, tahukah kamu bahwa istilah yang ada sejak tahun 1952 itu telah berganti nama? Slogan 4 sehat 5 sempurna kini berganti menjadi Pedoman Gizi Seimbang (PGS), yang dikeluarkan oleh P2PTM Kemenkes RI.\n\n".
                        "Pedoman Gizi Seimbang mengacu pada Nutrition Guide for Balanced Diet, yaitu hasil kesepakatan konferensi pangan sedunia pada tahun 1992. Dalam Pedoman Gizi Seimbang pengganti makanan 4 Sehat 5 Sempurna, disebutkan ada 4 poin yang harus dijalani agar kebutuhan gizi kita terpenuhi, yaitu:\n1. Mengonsumsi makanan beragam\n2. Membiasakan perilaku hidup bersih\n3. Melakukan aktivitas fisik\n4. Mempertahankan dan memantau berat badan\n\n".
                        "Dalam Pedoman Gizi Seimbang pengganti makanan 4 Sehat 5 Sempurna juga terdapat panduan konsumsi sehari-hari yang disebut Tumpeng Gizi Seimbang. Isinya adalah anjuran untuk:\n1. Membatasi asupan gula, garam, dan minyak\n2. Mengonsumsi sumber protein\n3. Minum air putih 8 gelas\n4. Makan sayuran 3-4 porsi\n5. Mengonsumsi buah-buahan 2-3 porsi\n6. Mengonsumsi karbohidrat 3-4 porsi\n7. Rutin berolahraga dan bergerak\n8. Memantau berat badan\n9. Menjaga kebersihan\n",
            'description' => Str::words('Slogan 4 Sehat 5 Sempurna adalah pedoman gizi seimbang yang pasti sudah tak asing untuk kamu.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 14,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Mengapa Stunting Menjadi Fokus Pemerintah RI?',
            'content' => "Stunting adalah kondisi gangguan pertumbuhan pada anak yang ditandai dengan tinggi badan anak yang lebih pendek dari anak seusianya. Stunting dapat disebabkan oleh berbagai hal, seperti kurangnya asupan gizi pada ibu hamil dan anak, infeksi berulang, stimulasi psikososial yang tidak memadai, dan sanitasi yang buruk. Stunting dapat berdampak pada kecerdasan anak dan timbulnya penyakit degeneratif seperti obesitas, diabetes, dan penyakit jantung koroner.\n\n".
                        "Anak stunting bisa mengalami pertumbuhan otak yang tidak maksimal, sehingga tidak bisa mengalami perkembangan sehat selayaknya anak seusianya. Anak dengan stunting berisiko mengalami gangguan kesehatan lain. Contohnya seperti diabetes dan gangguan jantung. Kondisi-kondisi ini tentu tak sejalan dengan misi pemerintah untuk membangun Indonesia Emas 2045. Bagaimana mungkin suatu negara bisa maju jika anak-anaknya terkena stunting dan gizi buruk?\n\n".
                        "Untuk menanggulangi dan menurunkan angka stunting di Indonesia, diperlukan adanya kerjasama yang baik antara pemerintah dengan masyarakat. Orang tua perlu segera memeriksakan Si Kecil ke dokter jika tinggi badannya tampak lebih pendek ketimbang anak seusianya. Bagi anak di bawah 2 tahun, pemeriksaan harus dilakukan 1-2 bulan sekali. Sementara anak di atas 2 tahun, pemeriksaan bisa dilakukan 1 tahun sekali.\n",
            'description' => Str::words('Stunting adalah kondisi gangguan pertumbuhan pada anak yang ditandai dengan tinggi badan anak yang lebih pendek dari anak seusianya.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 15,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Pola Makan yang Baik untuk Penderita Obesitas',
            'content' => "Obesitas adalah kondisi ketika lemak yang menumpuk di dalam tubuh sangat banyak akibat kalori masuk lebih banyak dibandingkan yang dibakar. Obesitas merupakan akumulasi lemak abnormal atau berlebihan yang bisa menyebabkan keadaan berat badan seseorang melebihi dari standar kesehatan yang telah ditentukan sehingga dapat mengganggu kesehatan.\n\n".
                        "Berdasarkan data Riskesdas tentang analis survei konsumsi makanan individu, sebesar 40,7% masyarakat Indonesia mengonsumsi makanan berlemak, 53,1% mengonsumsi makanan manis, 93,5% kurang konsumsi sayur dan buah, dan 26,1% aktivitas fisik yang kurang. Data ini jelas menunjukkan bahwa obesitas banyak disebabkan oleh pola makan dan gaya hidup yang buruk.\n\n".
                        "Pola makan untuk menghindari obesitas adalah sebagai berikut.\n1. Menggunakan piring makan model T yaitu jumlah sayur 2 kali lipat dari bahan makanan sumber karbohidrat\n2. Jumlah makanan sumber protein setara dengan jumlah makanan sumber karbohidrat\n3. Buah minimal harus sama dengan jumlah karbohidrat atau protein\n4. Kurangi konsumsi refined carbohydrates\n",
            'description' => Str::words('Obesitas adalah kondisi ketika lemak yang menumpuk di dalam tubuh sangat banyak akibat kalori masuk lebih banyak dibandingkan yang dibakar.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 16,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Telinga Berdenging, Apakah Bahaya?',
            'content' => "Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal. Bunyi ini bisa berupa dengungan, siulan, dering, atau bunyi lain yang hanya dapat didengar oleh orang yang mengalaminya. Tinnitus bukanlah penyakit, tetapi merupakan gejala dari berbagai kondisi yang mendasarinya.\n\n".
                        "Telinga berdenging pada umumnya disebabkan karena mendengar suara keras secara tiba-tiba atau berulang kali, seperti konser musik, mesin berat, atau ledakan, dapat merusak sel-sel rambut halus di telinga bagian dalam yang berfungsi mengirimkan sinyal suara ke otak. Kerusakan ini bisa menyebabkan tinnitus. Penumpukan kotoran telinga yang berlebihan juga dapat menyebabkan iritasi yang bisa memicu tinnitus.\n\n".
                        "Jika Anda mengalami tinnitus terus-menerus, disertai dengan gejala lain seperti pusing, kehilangan pendengaran, atau nyeri telinga, segera hubungi dokter. Meski seringkali tidak berbahaya, tinnitus bisa menjadi sangat mengganggu dan mungkin menandakan kondisi kesehatan yang lebih serius. Jika Anda mengalami gejala ini, penting untuk mencari konsultasi medis untuk diagnosis dan penanganan yang tepat.\n",
            'description' => Str::words('Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 17,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa Itu Infeksi Sinusitis?',
            'content' => "Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah. Gangguan ini dapat membuat lendir tipis yang mengalir keluar dari saluran hidung. Sinus bisa tersumbat karena berisi cairan sehingga bakteri tumbuh dan menyebabkan infeksi.\n\n".
                        "Beberapa penyebab sinusitis yang umum antara lain polip hidung, deviasi septum hidung, alergi, infeksi saluran napas, dan kondisi medis lainnya. Pada anak-anak, hal-hal yang dapat meningkatkan risiko alami kondisi ini misalnya adanya alergi, terjangkit dari anak-anak lain, banyak menghirup asap di lingkungan sekitarnya, bahkan juga akibat penggunaan dot.\n\n".
                        "Seseorang dapat dikatakan terkena sinusitis kambuhan jika ia mengalami sinusitis akut sebanyak 4 kali atau lebih dalam 1 tahun. Gejala yang timbul akibat kondisi ini umumnya berlangsung kurang dari 2 minggu setiap kali kambuh. Lakukan pemeriksaan ke dokter jika mengalami gejala yang telah disebutkan, terutama jika gejala memburuk dan berlangsung lebih dari 10 hari. Jangan tunda untuk mencari pertolongan ke IGD rumah sakit terdekat.\n",
            'description' => Str::words('Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 19,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apakah Prosedur Irigasi Telinga Aman Dilakukan?',
            'content' => "Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil. Impaksi serumen adalah penumpukan serumen yang menyebabkan gangguan pendengaran atau sumbatan telinga. Adanya impaksi serumen dapat menghalangi proses diagnostik yang memerlukan pemeriksaan membran timpani.\n\n".
                        "Prosedur irigasi telinga melibatkan air hangat atau sesuai suhu badan yang dialirkan ke dalam liang telinga. Adanya tekanan akibat aliran air diharapkan akan mengeluarkan serumen prop atau benda asing secara mekanik. Walaupun terkesan mudah, tindakan ini memiliki risiko mencederai membran timpani. Oleh karena itu, tekanan saat mengalirkan air harus dikendalikan sedemikian rupa agar mengurangi risiko ruptur membran timpani.\n\n".
                        "Irigasi telinga bermanfaat untuk mengeluarkan penumpukan kotoran pada telinga. Selain itu, tindakan ini juga bisa membantu untuk mengeluarkan benda asing yang secara tidak sengaja masuk ke dalam telinga. Meskipun aman, tetapi prosedur ini juga dapat memicu efek samping. Nah, untuk meminimalisir efek samping, pastikan kamu melakukan irigasi telinga pada rumah sakit atau klinik dengan dokter spesialis THT.\n",
            'description' => Str::words('Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 20,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Telinga Berdenging, Apakah Bahaya?',
            'content' => "Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal. Bunyi ini bisa berupa dengungan, siulan, dering, atau bunyi lain yang hanya dapat didengar oleh orang yang mengalaminya. Tinnitus bukanlah penyakit, tetapi merupakan gejala dari berbagai kondisi yang mendasarinya.\n\n".
                        "Telinga berdenging pada umumnya disebabkan karena mendengar suara keras secara tiba-tiba atau berulang kali, seperti konser musik, mesin berat, atau ledakan, dapat merusak sel-sel rambut halus di telinga bagian dalam yang berfungsi mengirimkan sinyal suara ke otak. Kerusakan ini bisa menyebabkan tinnitus. Penumpukan kotoran telinga yang berlebihan juga dapat menyebabkan iritasi yang bisa memicu tinnitus.\n\n".
                        "Jika Anda mengalami tinnitus terus-menerus, disertai dengan gejala lain seperti pusing, kehilangan pendengaran, atau nyeri telinga, segera hubungi dokter. Meski seringkali tidak berbahaya, tinnitus bisa menjadi sangat mengganggu dan mungkin menandakan kondisi kesehatan yang lebih serius. Jika Anda mengalami gejala ini, penting untuk mencari konsultasi medis untuk diagnosis dan penanganan yang tepat.\n",
            'description' => Str::words('Telinga berdenging, atau yang dikenal dengan istilah medis tinnitus, adalah kondisi di mana seseorang mendengar bunyi yang tidak berasal dari sumber eksternal.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 21,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apa Itu Infeksi Sinusitis?',
            'content' => "Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah. Gangguan ini dapat membuat lendir tipis yang mengalir keluar dari saluran hidung. Sinus bisa tersumbat karena berisi cairan sehingga bakteri tumbuh dan menyebabkan infeksi.\n\n".
                        "Beberapa penyebab sinusitis yang umum antara lain polip hidung, deviasi septum hidung, alergi, infeksi saluran napas, dan kondisi medis lainnya. Pada anak-anak, hal-hal yang dapat meningkatkan risiko alami kondisi ini misalnya adanya alergi, terjangkit dari anak-anak lain, banyak menghirup asap di lingkungan sekitarnya, bahkan juga akibat penggunaan dot.\n\n".
                        "Seseorang dapat dikatakan terkena sinusitis kambuhan jika ia mengalami sinusitis akut sebanyak 4 kali atau lebih dalam 1 tahun. Gejala yang timbul akibat kondisi ini umumnya berlangsung kurang dari 2 minggu setiap kali kambuh. Lakukan pemeriksaan ke dokter jika mengalami gejala yang telah disebutkan, terutama jika gejala memburuk dan berlangsung lebih dari 10 hari. Jangan tunda untuk mencari pertolongan ke IGD rumah sakit terdekat.\n",
            'description' => Str::words('Sinusitis adalah peradangan atau pembengkakan pada jaringan yang melapisi sinus atau dinding sinus. Sinus merupakan rongga kecil berisi udara dan terletak pada struktur tulang wajah.', 10, '...')
        ]);

        Article::factory()->create([
            'doctor_id' => 22,
            'post_date' => $faker->dateTimeThisYear(),
            'title' => 'Apakah Prosedur Irigasi Telinga Aman Dilakukan?',
            'content' => "Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil. Impaksi serumen adalah penumpukan serumen yang menyebabkan gangguan pendengaran atau sumbatan telinga. Adanya impaksi serumen dapat menghalangi proses diagnostik yang memerlukan pemeriksaan membran timpani.\n\n".
                        "Prosedur irigasi telinga melibatkan air hangat atau sesuai suhu badan yang dialirkan ke dalam liang telinga. Adanya tekanan akibat aliran air diharapkan akan mengeluarkan serumen prop atau benda asing secara mekanik. Walaupun terkesan mudah, tindakan ini memiliki risiko mencederai membran timpani. Oleh karena itu, tekanan saat mengalirkan air harus dikendalikan sedemikian rupa agar mengurangi risiko ruptur membran timpani.\n\n".
                        "Irigasi telinga bermanfaat untuk mengeluarkan penumpukan kotoran pada telinga. Selain itu, tindakan ini juga bisa membantu untuk mengeluarkan benda asing yang secara tidak sengaja masuk ke dalam telinga. Meskipun aman, tetapi prosedur ini juga dapat memicu efek samping. Nah, untuk meminimalisir efek samping, pastikan kamu melakukan irigasi telinga pada rumah sakit atau klinik dengan dokter spesialis THT.\n",
            'description' => Str::words('Irigasi telinga adalah salah satu prosedur yang dapat dilakukan untuk membersihkan liang telinga dari impaksi serumen atau mengeluarkan benda asing telinga yang berukuran kecil.', 10, '...')
        ]);
    }
}
