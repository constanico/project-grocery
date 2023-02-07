<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstName' => 'Admin',
            'lastName' => '1',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'gender' => 'laki-laki',
            'picture' => 'admin.png',
            'password' => bcrypt('adminadmin'),
        ]);

        Item::create([
            'name' => 'Bayam',
            'image' => 'bayam.png',
            'desc' => 'Bayam adalah tumbuhan yang biasa ditanam untuk dikonsumsi daunnya sebagai sayuran hijau.
            Tumbuhan ini berasal dari Amerika tropik namun sekarang tersebar ke seluruh dunia. Tumbuhan ini dikenal
            sebagai sayuran sumber zat besi yang penting bagi tubuh.',
            'price' => '15000',
        ]);

        Item::create([
            'name' => 'Brokoli',
            'image' => 'brokoli.png',
            'desc' => 'Brokoli adalah tanaman yang sering dibudidayakan sebagai sayur. Brokoli adalah kultivar dari spesies yang sama dengan kubis dan kembang kol, yaitu Brassica oleracea. Brokoli berasal dari daerah Laut Tengah dan sudah sejak masa Yunani Kuno dibudidayakan.
            Sayuran ini masuk ke Indonesia belum lama (sekitar 1970-an) dan kini cukup populer sebagai bahan pangan.',
            'price' => '18000',
        ]);

        Item::create([
            'name' => 'Sawi Caisim',
            'image' => 'caisim.png',
            'desc' => 'adalah salah satu sayuran daun populer di Indonesia. Nama lainnya adalah sawi bakso (karena menjadi sayuran daun pendamping dalam penyajian bakso) atau caisim/caisin (dari nama bahasa Kanton 菜心, choy sum, yang harafiah berarti "hatinya sayur").
            Jenis sawi lain yang juga kadang-kadang disebut sawi hijau adalah pakcoy/petsai atau sawi sendok.',
            'price' => '12000',
        ]);

        Item::create([
            'name' => 'Bawang Merah',
            'image' => 'bawangmerah.png',
            'desc' => 'adalah salah satu bumbu masak utama dunia yang berasal dari Iran, Pakistan, dan pegunungan-pegunungan di sebelah utaranya, tetapi kemudian menyebar ke berbagai penjuru dunia, baik sub-tropis maupun tropis. Wujudnya berupa umbi yang dapat dimakan mentah, untuk bumbu masak, acar, obat tradisional, kulit umbinya dapat dijadikan zat pewarna dan daunnya dapat pula digunakan untuk campuran sayur.
            Tanaman penghasilnya disebut dengan nama sama.',
            'price' => '22000',
        ]);

        Item::create([
            'name' => 'Bawang Putih',
            'image' => 'bawangputih.png',
            'desc' => 'adalah nama tanaman dari genus Allium sekaligus nama dari umbi yang dihasilkan. Mempunyai sejarah penggunaan oleh manusia selama lebih dari 7.000 tahun, terutama tumbuh di Asia Tengah, dan sudah lama menjadi bahan makanan di daerah sekitar Laut Tengah, serta bumbu umum di Asia, Afrika, dan Eropa. Dikenal di catatan Mesir kuno, digunakan baik sebagai campuran masakan maupun pengobatan. Umbi dari tanaman bawang putih merupakan bahan utama untuk bumbu dasar masakan Indonesia.',
            'price' => '28000',
        ]);

        Item::create([
            'name' => 'Buncis',
            'image' => 'buncis.png',
            'desc' => 'adalah sejenis polong-polongan yang dapat dimakan dari berbagai kultivar Phaseolus vulgaris. Buah, biji, dan daunnya dimanfaatkan orang sebagai sayuran.
            Sayuran ini kaya dengan kandungan protein. Ia dipercaya berasal dari Amerika Tengah dan Amerika Selatan.',
            'price' => '6000',
        ]);

        Item::create([
            'name' => 'Kacang Panjang',
            'image' => 'kacangpanjang.png',
            'desc' => 'adalah salah satu tanaman sayuran yang populer dalam kuliner Asia Tenggara dan Asia Timur. Buah polongnya dimasak sebagai sayur atau dimakan mentah sebagai lalapan. Ia tumbuh dengan cara memanjat atau melilit. Bagian yang dijadikan sayur atau lalapan adalah buah (polong) yang masih muda dan serat-seratnya masih lunak.

            Kacang panjang ini mudah didapati di kawasan panas di Asia. Daunnya disebut dengan lembayung dan dapat diolah pula menjadi sayur.

            Cara menanam tanaman kacang panjang adalah tanam langsung dengan memasukan 2–3 biji kedalam lubang sedalam 1–2 cm kemudian ditimbun tanah, berbunga pada umur 30 hari dan mulai panen umur 45 hari.',
            'price' => '15000',
        ]);

        Item::create([
            'name' => 'Pakcoy',
            'image' => 'pakcoy.png',
            'desc' => 'merupakan jenis sayuran yang populer. Sayuran yang dikenal pula sebagai sawi sendok ini mudah dibudidayakan dan dapat dimakan segar (biasanya dilayukan dengan air panas) atau diolah menjadi asinan. Kadang-kadang sawi ini juga disebut sawi hijau karena fungsinya mirip, meskipun sawi sendok lebih kaku teksturnya serta ukurannya cenderung lebih kecil dan meroset.

            Jenis sayuran ini mudah tumbuh di dataran rendah maupun dataran tinggi. Bila ditanam pada suhu sejuk tumbuhan ini akan cepat berbunga. Karena biasanya dipanen seluruh bagian tubuhnya (kecuali akarnya), sifat ini kurang disukai. Pemuliaan sawi ditujukan salah satunya untuk mengurangi kepekaan akan suhu ini. Sayuran ini biasanya digunakan dalam bahan sup atau penghias makanan.',
            'price' => '8000',
        ]);

        Item::create([
            'name' => 'Terong',
            'image' => 'terong.png',
            'desc' => 'adalah tumbuhan penghasil buah yang dijadikan sayur-sayuran. Asalnya adalah India dan Sri Lanka. Terung berkerabat dekat dengan kentang dan leunca, dan agak jauh dari tomat.

            Terung ialah terna yang sering ditanam secara tahunan. Tanaman ini tumbuh hingga 40–150 cm (16-57 inci) tingginya. Daunnya besar, dengan lobus yang kasar. Ukurannya 10–20 cm (4-8 inci) panjangnya dan 5–10 cm (2-4 inci) lebarnya. Jenis-jenis setengah liar lebih besar dan tumbuh hingga setinggi 225 cm (7 kaki), dengan daun yang melebihi 30 cm (12 inci) dan 15 cm (6 inci) panjangnya. Batangnya biasanya berduri. Warna bunganya antara putih hingga ungu, dengan mahkota yang memiliki lima lobus. Benang sarinya berwarna kuning. Buah tepung berisi, dengan diameter yang kurang dari 3 cm untuk yang liar, dan lebih besar lagi untuk jenis yang ditanam.',
            'price' => '8000',
        ]);

        Item::create([
            'name' => 'Toge',
            'image' => 'toge.png',
            'desc' => 'adalah tumbuhan (sporofit) muda yang baru saja berkembang dari tahap embrionik di dalam biji.

            Tahap perkembangannya disebut perkecambahan dan merupakan satu tahap kritis dalam kehidupan tumbuhan.',
            'price' => '6000',
        ]);

        Item::create([
            'name' => 'Kangkung',
            'image' => 'kangkung.png',
            'desc' => 'adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai makanan. Kangkung banyak dijual di pasar-pasar. Kangkung banyak terdapat di kawasan Asia, tempat asalnya tidak diketahui. dan merupakan tumbuhan yang dapat dijumpai hampir di mana-mana terutama di kawasan berair.

            Masakan kangkung yang populer adalah cah kangkung bumbu tauco atau terasi, juga di wewarungan terdapat pelecing kangkung lombok',
            'price' => '5000',
        ]);
    }
}
