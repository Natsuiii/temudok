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
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Apa itu Perlengketan Usus?',
            'slug' => Str::slug('Apa itu Perlengketan Usus?', '-'),
            'content' => "<div>Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.</div> <br> <div>Kondisi yang juga disebut adhesi usus ini terjadi akibat adanya luka pada jaringan antar organ. Akibatnya, usus pun saling menempel. Pasalnya, luka membuat jaringan lebih mudah menempel karena permukaannya sangat lengket. Itu sebabnya, usus lengket sering terjadi pada pasien yang baru menjalani operasi. Gangguan pencernaan ini mungkin terjadi pada antar-saluran pencernaan atau sistem pencernaan dengan jaringan otot perut.</div> <br> <div>Perlengketan usus jarang menimbulkan gejala, namun jika menyumbat usus sebagian atau seluruhnya, maka akan menimbulkan gejala-gejala seperti sakit perut atau kram yang parah, muntah, kembung, ketidakmampuan untuk mengeluarkan gas, sembelit, dan sebagainya. Jika Anda mengalami gejala obstruksi usus, segera cari bantuan medis untuk penanganan lebih intensif.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Cara Menjaga Jantung Agar Terhindar dari Serangan Jantung',
            'slug' => Str::slug('Cara Menjaga Jantung Agar Terhindar dari Serangan Jantung', '-'),
            'content' => "Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi. Maka dari itu, kesehatan jantung perlu sekali untuk dijaga. Oleh karena itu, artikel ini akan membahas beberapa cara menjaga kesehatan jantung sehingga dapat terhindar dari penyakit jantung koroner.</div> <br> <div>Olahraga atau aktivitas fisik ringan secara rutin bisa menolong jantung untuk tetap sehat. Ketika berolahraga, jantung akan memompa darah dengan lebih deras sehingga semua pembuluh darah menjadi lebih lentur. Selain itu, oksigen akan terdistribusi dengan lancar ke seluruh tubuh sehingga membuat Anda menjadi merasa lebih bugar.</div> <br> <div>Tak lupa, berhentilah merokok! Peringatan yang ada di bungkus rokok bukanlah tanpa alasan. Menurut WHO, ada sekitar 1,9 juta orang tiap tahun meninggal karena sakit jantung yang terkait penggunaan tembakau. Nikotin di rokok tak hanya merusak paru-paru, tetapi juga membahayakan jantung manusia. Jika Anda ingin mempunyai jantung yang sehat, berhentilah merokok dari sekarang.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Apa itu Perlengketan Usus Yang Lengkap?',
            'slug' => Str::slug('Apa itu Perlengketan Usus Yang Lengkap?', '-'),
            'content' => "<div>Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.</div> <br> <div>Kondisi yang juga disebut adhesi usus ini terjadi akibat adanya luka pada jaringan antar organ. Akibatnya, usus pun saling menempel. Pasalnya, luka membuat jaringan lebih mudah menempel karena permukaannya sangat lengket. Itu sebabnya, usus lengket sering terjadi pada pasien yang baru menjalani operasi. Gangguan pencernaan ini mungkin terjadi pada antar-saluran pencernaan atau sistem pencernaan dengan jaringan otot perut.</div> <br> <div>Perlengketan usus jarang menimbulkan gejala, namun jika menyumbat usus sebagian atau seluruhnya, maka akan menimbulkan gejala-gejala seperti sakit perut atau kram yang parah, muntah, kembung, ketidakmampuan untuk mengeluarkan gas, sembelit, dan sebagainya. Jika Anda mengalami gejala obstruksi usus, segera cari bantuan medis untuk penanganan lebih intensif.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Cara Menjaga Jantung Agar Terhindar dari Serangan Jantunggg',
            'slug' => Str::slug('Cara Menjaga Jantung Agar Terhindar dari Serangan Jantunggg', '-'),
            'content' => "Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi. Maka dari itu, kesehatan jantung perlu sekali untuk dijaga. Oleh karena itu, artikel ini akan membahas beberapa cara menjaga kesehatan jantung sehingga dapat terhindar dari penyakit jantung koroner.</div> <br> <div>Olahraga atau aktivitas fisik ringan secara rutin bisa menolong jantung untuk tetap sehat. Ketika berolahraga, jantung akan memompa darah dengan lebih deras sehingga semua pembuluh darah menjadi lebih lentur. Selain itu, oksigen akan terdistribusi dengan lancar ke seluruh tubuh sehingga membuat Anda menjadi merasa lebih bugar.</div> <br> <div>Tak lupa, berhentilah merokok! Peringatan yang ada di bungkus rokok bukanlah tanpa alasan. Menurut WHO, ada sekitar 1,9 juta orang tiap tahun meninggal karena sakit jantung yang terkait penggunaan tembakau. Nikotin di rokok tak hanya merusak paru-paru, tetapi juga membahayakan jantung manusia. Jika Anda ingin mempunyai jantung yang sehat, berhentilah merokok dari sekarang.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Apa itu Perlengketan Ususss?',
            'slug' => Str::slug('Apa itu Perlengketan Ususss?', '-'),
            'content' => "<div>Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.</div> <br> <div>Kondisi yang juga disebut adhesi usus ini terjadi akibat adanya luka pada jaringan antar organ. Akibatnya, usus pun saling menempel. Pasalnya, luka membuat jaringan lebih mudah menempel karena permukaannya sangat lengket. Itu sebabnya, usus lengket sering terjadi pada pasien yang baru menjalani operasi. Gangguan pencernaan ini mungkin terjadi pada antar-saluran pencernaan atau sistem pencernaan dengan jaringan otot perut.</div> <br> <div>Perlengketan usus jarang menimbulkan gejala, namun jika menyumbat usus sebagian atau seluruhnya, maka akan menimbulkan gejala-gejala seperti sakit perut atau kram yang parah, muntah, kembung, ketidakmampuan untuk mengeluarkan gas, sembelit, dan sebagainya. Jika Anda mengalami gejala obstruksi usus, segera cari bantuan medis untuk penanganan lebih intensif.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Cara Menjaga Jantung aaAgar Terhindar dari Serangan Jantung',
            'slug' => Str::slug('Cara Menjaga Jantung aaAgar Terhindar dari Serangan Jantung', '-'),
            'content' => "Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi. Maka dari itu, kesehatan jantung perlu sekali untuk dijaga. Oleh karena itu, artikel ini akan membahas beberapa cara menjaga kesehatan jantung sehingga dapat terhindar dari penyakit jantung koroner.</div> <br> <div>Olahraga atau aktivitas fisik ringan secara rutin bisa menolong jantung untuk tetap sehat. Ketika berolahraga, jantung akan memompa darah dengan lebih deras sehingga semua pembuluh darah menjadi lebih lentur. Selain itu, oksigen akan terdistribusi dengan lancar ke seluruh tubuh sehingga membuat Anda menjadi merasa lebih bugar.</div> <br> <div>Tak lupa, berhentilah merokok! Peringatan yang ada di bungkus rokok bukanlah tanpa alasan. Menurut WHO, ada sekitar 1,9 juta orang tiap tahun meninggal karena sakit jantung yang terkait penggunaan tembakau. Nikotin di rokok tak hanya merusak paru-paru, tetapi juga membahayakan jantung manusia. Jika Anda ingin mempunyai jantung yang sehat, berhentilah merokok dari sekarang.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Apa ituuu Perlengketan Usus?',
            'slug' => Str::slug('Apa ituuu Perlengketan Usus?', '-'),
            'content' => "<div>Perlengketan usus (adhesi usus) adalah kondisi ketika jaringan pencernaan dan otot menempel pada dinding abdomen (perut). Pada kondisi normal, permukaan antar organ pencernaan licin dan lembut, sehingga tidak menyebabkan usus lengket.</div> <br> <div>Kondisi yang juga disebut adhesi usus ini terjadi akibat adanya luka pada jaringan antar organ. Akibatnya, usus pun saling menempel. Pasalnya, luka membuat jaringan lebih mudah menempel karena permukaannya sangat lengket. Itu sebabnya, usus lengket sering terjadi pada pasien yang baru menjalani operasi. Gangguan pencernaan ini mungkin terjadi pada antar-saluran pencernaan atau sistem pencernaan dengan jaringan otot perut.</div> <br> <div>Perlengketan usus jarang menimbulkan gejala, namun jika menyumbat usus sebagian atau seluruhnya, maka akan menimbulkan gejala-gejala seperti sakit perut atau kram yang parah, muntah, kembung, ketidakmampuan untuk mengeluarkan gas, sembelit, dan sebagainya. Jika Anda mengalami gejala obstruksi usus, segera cari bantuan medis untuk penanganan lebih intensif.</div>",
        ]);

        Article::factory()->create([
            'doctor_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => 'Caraaa Menjaga Jantung Agar Terhindar dari Serangan Jantung',
            'slug' => Str::slug('Caraaa Menjaga Jantung Agar Terhindar dari Serangan Jantung', '-'),
            'content' => "Penyakit jantung merupakan pembunuh nomor satu di dunia. Penderitanya seringkali tak menduga jika dirinya mengidap penyakit jantung hingga saat serangan terjadi. Maka dari itu, kesehatan jantung perlu sekali untuk dijaga. Oleh karena itu, artikel ini akan membahas beberapa cara menjaga kesehatan jantung sehingga dapat terhindar dari penyakit jantung koroner.</div> <br> <div>Olahraga atau aktivitas fisik ringan secara rutin bisa menolong jantung untuk tetap sehat. Ketika berolahraga, jantung akan memompa darah dengan lebih deras sehingga semua pembuluh darah menjadi lebih lentur. Selain itu, oksigen akan terdistribusi dengan lancar ke seluruh tubuh sehingga membuat Anda menjadi merasa lebih bugar.</div> <br> <div>Tak lupa, berhentilah merokok! Peringatan yang ada di bungkus rokok bukanlah tanpa alasan. Menurut WHO, ada sekitar 1,9 juta orang tiap tahun meninggal karena sakit jantung yang terkait penggunaan tembakau. Nikotin di rokok tak hanya merusak paru-paru, tetapi juga membahayakan jantung manusia. Jika Anda ingin mempunyai jantung yang sehat, berhentilah merokok dari sekarang.</div>",
        ]);
    }
}
