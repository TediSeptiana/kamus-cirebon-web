<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Example;

class WordSeeder extends Seeder
{
    public function run(): void
    {
        $words = [
            [
                'lemma' => 'acar',
                'meaning' => 'acar',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'isun beli doyan mangan acar bonténg', 'translation' => 'saya tidak suka makan acar ketimun']
                ]
            ],
            [
                'lemma' => 'adab',
                'meaning' => 'sopan',
                'word_class' => 'noun',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'wong iku beli adab', 'translation' => 'orang itu tidak sopan']
                ]
            ],
            [
                'lemma' => 'adag-adug',
                'meaning' => 'sombong; lagak',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'bocah iku adag-adug pisan', 'translation' => 'anak itu sombong sekali']
                ]
            ],
            [
                'lemma' => 'adan',
                'meaning' => 'azan',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'sedurungé sembahyang, adan diki', 'translation' => 'sebelum sembahyang, azan dulu'],
                    ['cirebon' => 'boca santri adan nyaring pisan', 'translation' => 'anak santri suara azannya nyaring']
                ]
            ],
            [
                'lemma' => 'adang',
                'meaning' => 'halang; hadang; cegat',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'awas baka balik tak adang', 'translation' => 'awas kalau pulang di-hadang']
                ]
            ],
            [
                'lemma' => 'adat',
                'meaning' => 'adat',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'adat Jawa Wetan sékén karo adat Jawa Cirebon', 'translation' => 'adat Jawa Timur berbeda dengan adat Jawa Cirebon']
                ]
            ],
            [
                'lemma' => 'adeg',
                'meaning' => 'berdiri',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'saka iku adeg pancer', 'translation' => 'tiang itu berdiri tegak']
                ]
            ],
            [
                'lemma' => 'ngadeg',
                'meaning' => 'berdiri',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'wong iku sing mau ngadeg baé', 'translation' => 'orang itu tadi berdiri saja']
                ]
            ],
            [
                'lemma' => 'adeg-adeg',
                'meaning' => 'batas',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'adeg-adeg sawah tiang dímét ning wong', 'translation' => 'batas sawah (patok) hilang diambil orang']
                ]
            ],
            [
                'lemma' => 'adem',
                'meaning' => 'dingin',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'banyu sumure Pak Taswi adem', 'translation' => 'air sumur Pak Taswi dingin']
                ]
            ],
            [
                'lemma' => 'adi',
                'meaning' => 'kecil',
                'word_class' => 'noun',
                'category_id' => 3,
                'examples' => [
                    ['cirebon' => 'jumlah adi nira loro', 'translation' => 'jumlah adikmu ada dua']
                ]
            ],
            [
                'lemma' => 'adil',
                'meaning' => 'adil',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'kepala kantor isun adil', 'translation' => 'kepala kantor saya adil']
                ]
            ],
            [
                'lemma' => 'adoh',
                'meaning' => 'jauh',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'umah Ani adoh sing dalan', 'translation' => 'rumah Ani jauh dari jalan']
                ]
            ],
            [
                'lemma' => 'adohana',
                'meaning' => 'jauhlah',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'adohana ula iku', 'translation' => 'jauhlah ular itu']
                ]
            ],
            [
                'lemma' => 'adol',
                'meaning' => 'jual',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'pasar gedéné wong adol tuku', 'translation' => 'pasar tempat orang berjual beli']
                ]
            ],
            [
                'lemma' => 'adu',
                'meaning' => 'adu',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'wong ana wong adu kébó', 'translation' => 'kemarin ada orang mengadu kerbau'],
                    ['cirebon' => 'adu melas pisan. Didil beli balik-balik sing Jakarta', 'translation' => 'aduh kasihan sekali, Didil tidak pulang-pulang dari Jakarta']
                ]
            ],
            [
                'lemma' => 'aduh',
                'meaning' => 'aduh',
                'word_class' => 'other',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'aduh larae ati iki', 'translation' => 'aduh sakitnya hati ini']
                ]
            ],
            [
                'lemma' => 'aduk',
                'meaning' => 'campur; diaduk dicampur',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'semén di aduk karo wedi', 'translation' => 'semen dicampur dengan pasir']
                ]
            ],
            [
                'lemma' => 'adus',
                'meaning' => 'mandi',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'bocah cilik baka isuk beli gelem adus', 'translation' => 'anak kecil kalau pagi tidak mau mandi']
                ]
            ],
            [
                'lemma' => 'ae',
                'meaning' => 'hai',
                'word_class' => 'other',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ae ketemu maning', 'translation' => 'hai ketemu lagi']
                ]
            ],
            [
                'lemma' => 'agama',
                'meaning' => 'agama',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'agama Islam', 'translation' => 'agama saya Islam']
                ]
            ],
            [
                'lemma' => 'agemana',
                'meaning' => 'puskaka; jimat',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'agemana wong jaman biyen beruba keris lan tombak', 'translation' => 'pusaka zaman dahulu berupa keris dan tombak']
                ]
            ],
            [
                'lemma' => 'agem-agem',
                'meaning' => 'jimat',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'agem-agem ora oli ana sing weru ndalae', 'translation' => 'jimat tidak boleh ada yang tahu di mana tempatnya']
                ]
            ],
            [
                'lemma' => 'ageng',
                'meaning' => '(halus) besar',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'putrane sampun ageng', 'translation' => 'putranya sudah besar']
                ]
            ],
            [
                'lemma' => 'ager-ager',
                'meaning' => 'agar-agar',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ager-ager mantsaptisan', 'translation' => 'agar-agar manis sekali']
                ]
            ],
            [
                'lemma' => 'aba',
                'meaning' => 'kakek',
                'word_class' => 'noun',
                'category_id' => 3,
                'examples' => [
                    ['cirebon' => 'aba lagi gering ning umah sakit', 'translation' => 'kakek sedang sakit di rumah sakit']
                ]
            ],
            [
                'lemma' => 'abah',
                'meaning' => 'ayah',
                'word_class' => 'noun',
                'category_id' => 3,
                'examples' => [
                    ['cirebon' => 'abah Umar siweg linggih teng ajenge griya', 'translation' => 'Pak Umar sedang duduk di depan rumah']
                ]
            ],
            [
                'lemma' => 'aban',
                'meaning' => 'suaranya',
                'word_class' => 'noun',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'bedug luhur aban ageng pisan', 'translation' => 'beduk luhur suaranya besar sekali']
                ]
            ],
            [
                'lemma' => 'aban-aban',
                'meaning' => 'menurut berita',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'aban-aban tangga arep hajatan', 'translation' => 'menurut berita tetangga akan melaksanakan slametan']
                ]
            ],
            [
                'lemma' => 'abang',
                'meaning' => 'merah',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'warna klami iku abang', 'translation' => 'warna baju itu merah']
                ]
            ],
            [
                'lemma' => 'abdi',
                'meaning' => 'aku; saya',
                'word_class' => 'noun',
                'category_id' => 3,
                'examples' => [
                    ['cirebon' => 'abdi bade tindak ke pasar', 'translation' => 'saya akan pergi ke pasar']
                ]
            ],
            [
                'lemma' => 'aben',
                'meaning' => 'perbuatan bahan makanan yang terakhir dengan bentuk paling besar daripada yang lainnya',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'gawé aben misro', 'translation' => 'Bapak sedang membuat misro yang terbesar']
                ]
            ],
            [
                'lemma' => 'abet',
                'meaning' => 'bekas',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'abet sira niba kesenggol kucing', 'translation' => 'tempat bekas makananmu jatuh tersentuh kucing']
                ]
            ],
            [
                'lemma' => 'abong-abong',
                'meaning' => 'mentang-mentang',
                'word_class' => 'adverb',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'abong-abong sugih pèngen menang déwék baé', 'translation' => 'mentang-mentang kaya maunya menang sendiri saja']
                ]
            ],
            [
                'lemma' => 'abot',
                'meaning' => 'berat',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'abot badan satus kilogram', 'translation' => 'berat badannya seratus kilogram']
                ]
            ],
            [
                'lemma' => 'abrit',
                'meaning' => 'merah (halus)',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'warna kembang iku abrit', 'translation' => 'warna bunga itu merah']
                ]
            ],
            [
                'lemma' => 'abuh',
                'meaning' => 'bengkak',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'tangané abuh dientup tawon', 'translation' => 'tangannya bengkak disengat lebah']
                ]
            ],
            [
                'lemma' => 'abyor',
                'meaning' => 'terang; jelas; cerah',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'listrik bengi kien abyor pisan', 'translation' => 'listrik pada malam ini sangat terang']
                ]
            ],
            [
                'lemma' => 'acak',
                'meaning' => 'coba',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'acak kepriben rasaé dadi wong gedé', 'translation' => 'coba bagaimana rasanya jadi orang besar']
                ]
            ],
            [
                'lemma' => 'acan',
                'meaning' => 'belum',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'abah insun acan sumping', 'translation' => 'ayah saya belum datang']
                ]
            ],
            [
                'lemma' => 'aget',
                'meaning' => 'dapat',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'dados, boten aget ngehadiri kekasihé', 'translation' => 'jadi, tidak dapat menghadiri kekasihnya']
                ]
            ],
            [
                'lemma' => 'agung',
                'meaning' => 'besar',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'sumur agung aké sing nekoni', 'translation' => 'sumur besar banyak didatangi pengunjung']
                ]
            ],
            [
                'lemma' => 'ah',
                'meaning' => 'ah (kata seru)',
                'word_class' => 'other',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ah siraku wés gelé', 'translation' => 'ah kamu sudah geli']
                ]
            ],
            [
                'lemma' => 'ahad',
                'meaning' => 'hari Minggu',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'Yati arep miyang ning Jakarta dina ahad', 'translation' => 'Yati akan pergi ke Jakarta hari Minggu']
                ]
            ],
            [
                'lemma' => 'ahire',
                'meaning' => 'akhirnya',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'bocah wadon iku ahire dugi ning pinggir balong', 'translation' => 'anak perempuan itu akhirnya sampai di pinggir kolam'],
                    ['cirebon' => 'ahire dadi kaptan', 'translation' => 'akhirnya jadi tertantar']
                ]
            ],
            [
                'lemma' => 'ahli',
                'meaning' => 'ahli',
                'word_class' => 'noun',
                'category_id' => 3,
                'examples' => [
                    ['cirebon' => 'isun duwe ahli bahasa Jawa', 'translation' => 'saya punya ahli bahasa Jawa']
                ]
            ],
            [
                'lemma' => 'ai',
                'meaning' => 'oh (kata seru)',
                'word_class' => 'other',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ai isun dipeseni ema', 'translation' => 'oh saya dipesani ibu']
                ]
            ],
            [
                'lemma' => 'aja',
                'meaning' => 'jangan',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'sira aja loka nyabeta adi', 'translation' => 'kamu jangan suka memukul adik']
                ]
            ],
            [
                'lemma' => 'ajaib',
                'meaning' => 'ajaib',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'sukiki ana pemuda ajaib', 'translation' => 'besok ada pemuda ajaib']
                ]
            ],
            [
                'lemma' => 'ajak',
                'meaning' => 'ajak; ngajak mengajak',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'bengi-bengi ajak balik', 'translation' => 'malam-malam mengajak pulang']
                ]
            ],
            [
                'lemma' => 'ajang',
                'meaning' => 'ping, tempat makan',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'sira arep mangan wisa njukut ajang dung?', 'translation' => 'kamu mau makan sudah mengambil piring belum?']
                ]
            ],
            [
                'lemma' => 'ajar',
                'meaning' => 'ajar: kurang, kurang ajar',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'aja kurang ajar, Cung!', 'translation' => 'jangan kurang ajar, Nak!']
                ]
            ],
            [
                'lemma' => 'aji',
                'meaning' => 'nilai; harga',
                'word_class' => 'noun',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'guru duwé aji luhung', 'translation' => 'guru memiliki nilai luhur'],
                    ['cirebon' => 'lampu beli bagus kurang aji', 'translation' => 'kalau tidak baik kurang nilai']
                ]
            ],
            [
                'lemma' => 'ajian',
                'meaning' => 'dijual dihadiahkan',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'majikan kudu ajian', 'translation' => 'majikan harus dihadiahkan']
                ]
            ],
            [
                'lemma' => 'ajeg',
                'meaning' => 'anu; mau',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'mbok Caswi ajeg punten', 'translation' => 'Ibu Caswi mau ke mana?']
                ]
            ],
            [
                'lemma' => 'ajeng',
                'meaning' => 'depan',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'mbok Caswi wonten teng ajeng griya', 'translation' => 'Ibu Caswi ada di depan rumah']
                ]
            ],
            [
                'lemma' => 'ajer',
                'meaning' => 'rukun',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'pergaulané bocah loro iku ajer', 'translation' => 'pergaulan dua anak itu rukun']
                ]
            ],
            [
                'lemma' => 'akal',
                'meaning' => 'akal',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'wedia ora duwé akal pikiran', 'translation' => 'kambing tidak punya akal pikiran']
                ]
            ],
            [
                'lemma' => 'akar',
                'meaning' => 'akar',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'dina Kemis ana rapat akar', 'translation' => 'hari Kamis ada rapat akar']
                ]
            ],
            [
                'lemma' => 'akeh',
                'meaning' => 'banyak',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'bisana kalen ning guri umah akeh iwaké', 'translation' => 'biasanya kali di belakang rumah banyak ikannya']
                ]
            ],
            [
                'lemma' => 'akil balég',
                'meaning' => 'dewasa',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'lamun wis akil balég sira oleh kawin', 'translation' => 'kalau sudah dewasa kamu sudah boleh kawin']
                ]
            ],
            [
                'lemma' => 'akhir',
                'meaning' => 'akhir',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'iki akhir semester', 'translation' => 'ini akhir semester']
                ]
            ],
            [
                'lemma' => 'akibat',
                'meaning' => 'akibat',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ngakibatken nepsu kang bisa akibat gawé sangsaraning badan', 'translation' => 'nafsulah yang dapat mengakibatkan diri sengsara']
                ]
            ],
            [
                'lemma' => 'akrab',
                'meaning' => 'akrab',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'pergaulané akrab pisan', 'translation' => 'pergaulannya sangat akrab']
                ]
            ],
            [
                'lemma' => 'aksara huruf',
                'meaning' => 'aksara huruf',
                'word_class' => 'noun',
                'category_id' => 1,
                'examples' => [
                    ['cirebon' => 'iki aksara huruf apa?', 'translation' => 'ini huruf apa?']
                ]
            ],
            [
                'lemma' => 'ala watak',
                'meaning' => 'seseorang yang keras',
                'word_class' => 'noun',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'ati-ati, atiné bocah kené ala watak', 'translation' => 'hati-hati, hati anak itu keras']
                ]
            ],
                        // ================= DATA BARU DARI GAMBAR HALAMAN 4 & 5 =================
            [
                'lemma' => 'alah dese\'',
                'meaning' => 'seperti; umpama',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'tingkah lakuné alah dese\' wong édan', 'translation' => 'tingkah lakunya seperti orang gila']
                ]
            ],
            [
                'lemma' => 'alam',
                'meaning' => 'alam; alami; dunia; petunjuk',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'nyuwun wisik saking Pangéran Murbéng', 'translation' => 'mohon petunjuk dari Tuhan seru sekalian alam'],
                    ['cirebon' => 'iki wis tua', 'translation' => 'alam ini sudah tua']
                ]
            ],
            [
                'lemma' => 'alamat',
                'meaning' => 'alamat; tanda; pertanda',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'kita ning Jakarta', 'translation' => 'alamat saya di Jakarta'],
                    ['cirebon' => 'ngimpi nyandak hayam olíh rejeki', 'translation' => 'bermimpi menangkap ayam tanda akan mendapat rezeki']
                ]
            ],
            [
                'lemma' => 'alang',
                'meaning' => 'halang; rintang',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'sapa sing ngolang-alangi maksudmu?', 'translation' => 'siapa yang menghalangi maksudmu?']
                ]
            ],
            [
                'lemma' => 'ngolang-alangi',
                'meaning' => 'menghalangi; merintangi',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'sapa sing ngolang-alangi maksudmu?', 'translation' => 'siapa yang menghalangi maksudmu?']
                ]
            ],
            [
                'lemma' => 'dialangi',
                'meaning' => 'dihalangi; dihadang; dicegat',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'wong mlaku beli kena dialangi', 'translation' => 'orang berjalan tidak boleh dihalangi']
                ]
            ],
            [
                'lemma' => 'alang ujuré',
                'meaning' => 'tidak ada ujung pangkalnya',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'omongé langka alang ujuré', 'translation' => 'perkataannya tidak ada ujung pangkalnya']
                ]
            ],
            [
                'lemma' => 'alang-alang',
                'meaning' => 'alang-alang',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ning karang kita akéh suket alang-alang', 'translation' => 'di pekarangan saya banyak rumput alang-alang']
                ]
            ],
            [
                'lemma' => 'alap-alap',
                'meaning' => 'nama sejenis burung bangau',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'manuk alap-alap baka mabur duwur-duwur', 'translation' => 'burung bangau kalau terbang tinggi']
                ]
            ],
            [
                'lemma' => 'alas',
                'meaning' => 'hutan',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ning Dermayu wis langka alas', 'translation' => 'di Dermayu sudah tidak ada hutan']
                ]
            ],
            [
                'lemma' => 'alat',
                'meaning' => 'alat; perakas',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'sakiki wis akéh alat modérn', 'translation' => 'sekarang sudah banyak alat modern']
                ]
            ],
            [
                'lemma' => 'aleman',
                'meaning' => 'manja',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'aja aleman', 'translation' => 'jangan manja']
                ]
            ],
            [
                'lemma' => 'alesan',
                'meaning' => 'alasan',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'bisa baé alesan', 'translation' => 'bisa saja alasan']
                ]
            ],
            [
                'lemma' => 'alhamdulillah',
                'meaning' => 'ucapan setelah mengerjakan sesuatu; alhamdulillah',
                'word_class' => 'other',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'alhamdulillah wis teka ning umah', 'translation' => 'alhamdulillah sudah sampai di rumah']
                ]
            ],
            [
                'lemma' => 'aliali',
                'meaning' => 'kecil',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'calon pengantin lagi tuku aliali', 'translation' => 'calon pengantin sedang tukar cincin']
                ]
            ],
            [
                'lemma' => 'alias',
                'meaning' => 'alias; atau',
                'word_class' => 'other',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'wong tua alias embok bapak kudu dihormati', 'translation' => 'orang tua atau ibu bapak harus dihormati']
                ]
            ],
            [
                'lemma' => 'alihan',
                'meaning' => 'tukar tempat',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'baka wis pegel kudu alihan', 'translation' => 'kalau sudah lelah harus tukar tempat']
                ]
            ],
            [
                'lemma' => 'alim',
                'meaning' => 'orang yang tidak banyak omong; bertingkah wajar; pendiam',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'biasané baka wong alim iku pinter', 'translation' => 'biasanya kalau orang pendiam itu pandai']
                ]
            ],
            [
                'lemma' => 'aling-aling',
                'meaning' => 'hijab; batas',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ruangan bocah lanang karo bocah wadon kudu dipai aling-aling', 'translation' => 'ruangan anak laki-laki dan anak perempuan harus diberi batas']
                ]
            ],
            [
                'lemma' => 'alip',
                'meaning' => 'nama huruf Arab yang pertama',
                'word_class' => 'noun',
                'category_id' => 1,
                'examples' => [
                    ['cirebon' => 'sawisé alip, ba, sesudah alif, ba', 'translation' => 'sesudah alif, ba']
                ]
            ],
            [
                'lemma' => 'alis',
                'meaning' => 'alis',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'wong iku kandel alis', 'translation' => 'orang itu tebal alisnya']
                ]
            ],
            [
                'lemma' => 'alit',
                'meaning' => 'kecil',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'putra kula taksi alit', 'translation' => 'putra saya masih kecil']
                ]
            ],
            [
                'lemma' => 'Allah',
                'meaning' => 'Allah; Tuhan',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'ora ana pangéran anging Allah', 'translation' => 'tidak ada Tuhan kecuali Allah']
                ]
            ],
            [
                'lemma' => 'alok',
                'meaning' => 'memberi tahu; memberi aba-aba',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'baka wis alok', 'translation' => 'kalau sudah, harus memberi tahu']
                ]
            ],
            [
                'lemma' => 'alon',
                'meaning' => 'pelan',
                'word_class' => 'adverb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'alon bagan asal tekan gera', 'translation' => 'biar pelan asal sampai di tempat tujuan']
                ]
            ],
            [
                'lemma' => 'alot',
                'meaning' => 'sukar; sulit',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'lawang lemari ditariké alot', 'translation' => 'pintu lemari dibukanya sukar sekali']
                ]
            ],
            [
                'lemma' => 'alu',
                'meaning' => 'alu (alat untuk menumbuk padi)',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'nutu pari kudu karo alu', 'translation' => 'menumbuk padi harus dengan alu']
                ]
            ],
            [
                'lemma' => 'alum',
                'meaning' => 'layu',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'kembangé wis alum', 'translation' => 'bunganya sudah layu']
                ]
            ],
            [
                'lemma' => 'alun-alun',
                'meaning' => 'alun-alun',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'sukiki kudu kumpul ning alun-alun', 'translation' => 'besok harus berkumpul di alun-alun']
                ]
            ],
            [
                'lemma' => 'alus',
                'meaning' => 'halus',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'kulité wong wadon iku alus', 'translation' => 'kulit orang perempuan itu halus']
                ]
            ],
            [
                'lemma' => 'amal',
                'meaning' => 'perbuatan',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'wong urip kudu duwé amal bagus', 'translation' => 'orang hidup harus punya amal yang baik']
                ]
            ],
            [
                'lemma' => 'aman',
                'meaning' => 'aman',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'negara kita aman', 'translation' => 'negara saya aman']
                ]
            ],
            [
                'lemma' => 'keamanan',
                'meaning' => 'keamanan',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'keamanan kampung kudu dijaga', 'translation' => 'keamanan kampung harus dijaga']
                ]
            ],
            [
                'lemma' => 'amanat',
                'meaning' => 'amanat; pesan; titipan',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'jungjungan amanat rakyat', 'translation' => 'junjungan amanat rakyat']
                ]
            ],
            [
                'lemma' => 'amba',
                'meaning' => 'lebar',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'godong gedangé amba', 'translation' => 'daun pisangnya lebar']
                ]
            ],
            [
                'lemma' => 'ambek',
                'meaning' => 'marah',
                'word_class' => 'noun',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'bapa isun ambek', 'translation' => 'bapak saya marah']
                ]
            ],
            [
                'lemma' => 'ngambeké',
                'meaning' => 'marahnya',
                'word_class' => 'noun',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'ngambeké kaya wong édan', 'translation' => 'marahnya seperti orang gila']
                ]
            ],
            [
                'lemma' => 'ambekané',
                'meaning' => 'napasnya',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ambekané sesek', 'translation' => 'napasnya sesak']
                ]
            ],
            [
                'lemma' => 'ambles',
                'meaning' => 'masuk ke dalam tanah',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'tunggak iku wis ambles', 'translation' => 'tunggak itu sudah masuk ke dalam tanah']
                ]
            ],
            [
                'lemma' => 'ambrol',
                'meaning' => 'hancur',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'kertas dikum dadí ambrol', 'translation' => 'kertas direndam jadi hancur']
                ]
            ],
            [
                'lemma' => 'ambruk',
                'meaning' => 'runtuh',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'umahé wis ambruk', 'translation' => 'rumahnya sudah runtuh']
                ]
            ],
            [
                'lemma' => 'ambu',
                'meaning' => 'bau',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'ambuné blenak', 'translation' => 'baunya tidak enak']
                ]
            ],
            [
                'lemma' => 'ambu bau',
                'meaning' => 'baunya',
                'word_class' => 'noun',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'cangkemé ambu bau', 'translation' => 'mulutnya bau']
                ]
            ],
            [
                'lemma' => 'ambung',
                'meaning' => 'cium',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'teka-teka njuluk ambung', 'translation' => 'datang-datang minta cium']
                ]
            ],
            [
                'lemma' => 'ngambung',
                'meaning' => 'mencium',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'Engkos lagi ngambung kembang', 'translation' => 'Engkos sedang mencium bunga']
                ]
            ],
            [
                'lemma' => 'amil',
                'meaning' => 'pemungut zakat',
                'word_class' => 'noun',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'jujur amil', 'translation' => 'pemungut zakat harus jujur']
                ]
            ],
            [
                'lemma' => 'amin',
                'meaning' => 'ucapan ketika berdoa',
                'word_class' => 'other',
                'category_id' => 5,
                'examples' => [
                    ['cirebon' => 'dongà diakhiri kelawan ucapan amin', 'translation' => 'doa diakhiri dengan ucapan amin']
                ]
            ],
            [
                'lemma' => 'amis',
                'meaning' => 'amis',
                'word_class' => 'adjective',
                'category_id' => 4,
                'examples' => [
                    ['cirebon' => 'banyuné mambu amis', 'translation' => 'airnya berbau amis']
                ]
            ],
            [
                'lemma' => 'amit',
                'meaning' => 'ucapan ketika lewat di depan orang (permisi)',
                'word_class' => 'verb',
                'category_id' => 2,
                'examples' => [
                    ['cirebon' => 'baka liwat ning arep amit', 'translation' => 'kalau lewat di depan orang, permisi']
                ]
            ],
        ];

        foreach ($words as $data) {
            $word = Word::updateOrCreate(
                ['lemma' => $data['lemma']],
                [
                    'category_id'        => $data['category_id'],
                    'indonesian_meaning' => $data['meaning'],
                    'word_class'         => $data['word_class'],
                ]
            );

            $word->examples()->delete();

            foreach ($data['examples'] as $ex) {
                Example::create([
                    'word_id'                => $word->id,
                    'cirebon_sentence'       => $ex['cirebon'],
                    'indonesian_translation' => $ex['translation'],
                ]);
            }
        }
    }
}