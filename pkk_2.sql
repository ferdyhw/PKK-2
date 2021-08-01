-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2020 pada 14.26
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkk_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `basic`
--

CREATE TABLE `basic` (
  `id` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `basic`
--

INSERT INTO `basic` (`id`, `title`, `text`) VALUES
(1, 'Pengertian IoT', '<body style=\"text-align: justify;\">\r\n&nbsp;&nbsp;&nbsp;&nbsp;IoT atau Internet of Things adalah suatu konsep dimana objek tertentu punya kemampuan untuk mentransfer data lewat jaringan tanpa memerlukan adanya interaksi dari manusia ke manusia ataupun dari manusia ke perangkat komputer. Internet of Things lebih sering disebut dengan singkatannya yaitu IoT. IoT ini sudah berkembang pesat mulai dari konvergensi teknologi nirkabel, micro-electromechanical systems (MEMS), dan juga Internet.IoT ini juga kerap diidentifikasikan dengan RFID sebagai metode komunikasi. Walaupun begitu, IoT juga bisa mencakup teknologi-teknologi sensor lainnya, semacam teknologi nirkabel maupun kode QR yang sering kita temukan di sekitar kita.Internet of Things ini juga mengacu pada mesin atau alat yang bisa diidentifikasikan sebagai representasi virtual dalam strukturnya yang berbasis Internet.\r\n</body>'),
(2, 'Cara Kerja IoT', '<body style=\"text-align: justify;\">\r\n&nbsp;&nbsp;&nbsp;&nbsp;Cara Kerja Internet of Things itu seperti apa? Sebenarnya IoT bekerja dengan memanfaatkan suatu argumentasi pemrograman, dimana tiap-tiap perintah argumen tersebut bisa menghasilkan suatu interaksi antar mesin yang telah terhubung secara otomatis tanpa campur tangan manusia dan tanpa terbatas jarak berapapun jauhnya.Internet di sini menjadi penghubung antara kedua interaksi mesin tersebut. Lalu di mana campur tangan manusia? Manusia dalam IoT tugasnya hanyalah menjadi pengatur dan pengawas dari mesin-mesin yang bekerja secara langsung tersebut. Tantangan terbesar dalam mengkonfigurasi Internet of Things ialah menyusun jaringan komunikasinya sendiri, untuk melakukan hal tersebut diperlukan software untuk mengirimkan program ke dalam mikrocontroller yaitu Arduino IDE. Bahasa pemrograman yang digunakan yaitu bahasa C++.\r\n</body>'),
(3, 'Sejarah IoT', '<body style=\"text-align: justify;\">\r\n&nbsp;&nbsp;&nbsp;&nbsp;IoT ini adalah teknologi canggih yang mampu melakukan transfer data lewat jaringan dengan interaksi yang mudah, masa depan dari pengembangannya jadi sangat menjanjikan. Kehidupan manusia sehari-harinya bisa dioptimalkan dan dipermudah dengan sensor cerdas dan peralatan pintar yang berbasis internet ini.Awalnya, internet itu sendiri mulai terkenal di tahun 1989. Lalu pada tahun 1990, seorang peneliti bernama John Romkey membuat suatu perangkat yang kala itu tergolong canggih. Perangkatnya adalah pemanggang roti yang bisa dinyalakan atau juga dimatikan lewat internet. Kemudian di tahun 1994, seseorang bernama Steve Mann menciptakan WearCam, dan pada tahun 1997-nya si Paul Saffo menjelaskan secara singkat mengenai penemuannya soal teknologi sensor dan masa depannya nanti. \r\n<ol></ol>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Barulah di tahun 1999 Kevin Ashton membuat konsep Internet of Things. Kevin ini adalah Direktur Auto IDCentre dari MIT. Di tahun yang sama, yaitu 1999, ditemukan mesin yang sistemnya berbasis Radio Frequency Identification (RFID) secara global. Nah, penemuan inilah yang jadi awal kepopuleran dari konsep IoT. Orang-orang, terutama pakar teknologi jadi berlomba-lomba mengembangkan teknologinya sesuai konsep IoT. IoT kembali terkenal di tahun 2005, yaitu pada saat media-media ternama semacam The Guardian dan Boston Globe mulai mengutip banyak sekali dari artikel ilmiah dan proses pengembangan IoT. Hingga tahun 2008, berbagai macam perusahaan setuju untuk meluncurkan IPSO untuk memasarkan penggunaan IP dalam jaringan bagi Smart Object yang juga bertujuan mengaktifkan IoT itu sendiri. \r\n</body>'),
(4, 'Unsur-Unsur IoT', '<body style=\"text-align: justify;\">\r\nAda beberapa unsur pembentuk IoT yang mendasar termasuk kecerdasan buatan, konektivitas, sensor, keterlibatan aktif serta pemakaian perangkat berukuran kecil. Berikut beberapa unsur pembentuk iot :\r\n<ol>\r\n<li>Kecerdasan Buatan (Artificial Intelligence/AI), IoT membuat hampir semua mesin yang ada menjadi Smart. Ini berarti IoT bisa meningkatkan segala aspek kehidupan kita dengan pengembangan teknologi yang didasarkan pada AI. Jadi, pengembangan teknologi yang ada dilakukan dengan pengumpulan data, algoritma kecerdasan buatan, dan jaringan yang tersedia. Sebenarnya ya contohnya bisa jadi mesin yang tergolong sederhana semacam meningkatkan/mengembangkan lemari es/kulkas Anda sehingga bisa mendeteksi jika stok susu dan sereal favorit Anda sudah hampir habis, bahkan bisa juga membuat pesanan ke supermarket secara otomatis jika stok mau habis. Penerapan kecerdasan buatan ini memang sangatlah menarik.</li>\r\n<li>Konektivitas, adalah kemungkinan untuk membuat/membuka jaringan baru, dan jaringan khusus IoT. Jadi, jaringan ini tak lagi terikat hanya dengan penyedia utamanya saja. Jaringannya tidak harus berskala besar dan mahal, bisa tersedia pada skala yang jauh lebih kecil dan lebih murah. IoT bisa menciptakan jaringan kecil tersebut di antara perangkat sistem.</li>\r\n<li>Sensor ini merupakan pembeda yang membuat IoT unik dibanding mesin canggih lainnya. Sensor ini mampu mendefinisikan instrumen, yang mengubah IoT dari jaringan standar dan cenderung pasif dalam perangkat, hingga menjadi suatu sistem aktif yang sanggup diintegrasikan ke dunia nyata sehari-hari kita. Ada terdapat banyak sensor yang dapat digunakan dalam membuat IoT diantaranya adalah Sensor Suhu(DHT11), Sensor Ultrasonic(HCS-RO4), Sensor Cahaya(LDR), Sensor Gas(MQ2) dan masih banyak lagi seperti Sensor Gerak, Getar dan Kecepatan./li>\r\n<li>Keterlibatan Aktif (Active Engagement), Engangement yang sering diterapkan teknologi umumnya yang termasuk pasif. IoT ini mengenalkan paradigma yang baru bagi konten aktif, produk, maupun keterlibatan layanan.</li>\r\n<li>Perangkat Berukuran Kecil, seperti yang diperkirakan para pakar teknologi, memang menjadi semakin kecil, makin murah, dan lebih kuat dari masa ke masa. IoT memanfaatkan perangkat-perangkat kecil yang dibuat khusus ini agar menghasilkan ketepatan, skalabilitas, dan fleksibilitas yang baik. </li>\r\n</ol>\r\n</body>'),
(5, 'Pembagian IoT', '<body style=\"text-align: justify;\">\r\n<strong>Sektor Pembangunan</strong>\r\n<br>\r\nSektor Pembangunan ini diatur dalam Komersial / Kelembagaan, meliputi toko-toko dan supermarket, gedung perkantoran dan departemen pemerintah, dan segmen industri, meliputi bangunan pabrik, dan perumahan. Perangkat yang kemudian dapat dihubungkan untuk memberikan pelayanan kepada pengguna termasuk HVAC, kontrol akses, manajemen pencahayaan,sensor kebakaran, sistem keamanan dan lain-lain yang berada di gedung-gedung dan fasilitas di kedua segmen. Layanan ini dibangun untuk mengotomatisasi dan bereaksi terhadap kondisi lingkungan.\r\n\r\n<ol></ol>\r\n\r\n<strong>Sektor Energi</strong>\r\n<br>\r\nSektor Energi diatur ke dalam tiga segmen pasar:\r\n<ol>\r\n<li>Pasokan / Permintaan, yang meliputi pembangkit listrik, transmisi / distribusi, kualitas daya dan manajemen energi. Meliputi pembangkit listrik dari sumber tradisional bahan bakar fosil.</li>\r\n<li>Alternatif, meliputi sumber baru termasuk sumber energi terbarukan seperti cahaya, angin, pasang serta elektrokimia.</li>\r\n<li>Minyak / Gas, yang terdiri dari aplikasi dan perangkat yang digunakan untuk mengekstrak dan mengangkut komoditas ini. Meliputi rig, derek, kepala sumur, pompa dan pipa.</li>\r\n</ol>\r\n\r\n<strong>Sektor Rumah Tangga</strong>\r\n<br>\r\nSektor rumah tangga saat ini beragam dan cepat berubah, disusun dalam tiga segmen pasar:\r\n<ol>\r\n<li>Infrastruktur, meliputi kabel, akses jaringan dan manajemen energi rumah</li>\r\n<li>Kesadaran / Keamanan, meliputi keamanan dan alarm kebakaran rumah, pemantauan lansia (tidak klinis) dan anak-anak.</li>\r\n<li>Kenyamanan / Hiburan, meliputi pengendalian iklim, manajemen pencahayaan, peralatan dan hiburan</li>\r\n</ol>\r\nOleh karena itu sektor ini sekarang mencakup eReaders, photoframes Digital, Game konsol serta Cincin / pengering dan Alarm Rumah.\r\n\r\n<ol></ol>\r\n\r\n<strong>Sektor Kesehatan</strong>\r\n<br>\r\nSektor kesehatan meliputi telemedicine, rumah jompo, dan perawatan kesehatan di rumah termasuk pemantauan jarak jauh. Misalnya alat pacu jantung jantung ditanamkan untuk orang tua (klinis). Aplikasi ini memberdayakan pasien dan dokter sama untuk melakukan penelitian yang lebih baik dan pilihan pengobatan. Sektor ini kemudian juga melacak peralatan Lab, seperti sentrifus, inkubator, freezer dan peralatan tes darah. Ini mencakup segmen berikut:\r\n<ol>\r\n<li>Perawatan meliputi Rumah Sakit, ER, Ponsel POC, Klinik, dll.</li>\r\n<li>Dalam vivo(berasal dari Spanyol: vivo[vivo, hidup]) / rumah meliputi Implan (pacu jantung, dll), Sistem Pemantauan Rumah.</li>\r\n<li>Penelitian yang meliputi Penemuan Obat, Diagnostik dan peralatan Lab.</li>\r\n</ol>\r\n\r\n<strong>Sektor Industri</strong>\r\n<br>\r\nSektor Industri mencakup pemantauan dan pelacakan aset, yang melibatkan pemantauan diskrit aset atau perangkat untuk memastikan kinerja uptime, kontrol versi, dan analisis lokasi untuk berbagai proses industri pabrik. Proses ini tersegmentasi sebagai berikut:\r\n<ol>\r\n<li>Cairan</li>\r\n<li>Konversi / Diskrit meliputi tank, fabrikasi, perakitan / kemasan.</li>\r\n<li>Distribusi meliputi infrastruktur / rantai persediaan.</li>\r\n<li>Sumber Otomasi meliputi pertanian, irigasi, pertambangan, gudang, pabrik / tanaman.</li>\r\n</ol>\r\n\r\n<strong>Sektor Transportasi</strong>\r\n<br>\r\nSektor Transportasi dibagi menjadi tiga segmen utama:\r\n<ol>\r\n<li>Kendaraan. Ini termasuk kendaraan telematika, pelacakan dan komunikasi dengan mobil, truk dan trailer. Kendaraan telematika kemudian memungkinkan layanan seperti navigasi, diagnostik kendaraan, dan pencarian kendaraan yang dicuri. Daerah yang berhubungan dengan kendaraan lainnya termasuk off-highway (misalnya konstruksi, pertanian).</li>\r\n<li>Non-Kendaraan. Transportasi non-kendaraan termasuk pesawat, kereta api, kapal / perahu dan kontainer.</li>\r\n<li>Sistem Transportasi. Transportasi Sistem mencakup layanan informasi untuk penumpang, skema pembayaran jalan, skema parkir, terutama di kota-kota.</li>\r\n</ol>\r\n\r\n<strong>Sektor Perdagangan</strong>\r\n<br>\r\nSektor perdagangan yang meliputi sistem jaringan dan perangkat yang memungkinkan pengecer untuk memiliki peningkatan visibilitas rantai pasokan, konsumen dan mengumpulkan informasi produk, meningkatkan kontrol persediaan, mengurangi konsumsi energi, dan penelusuran aset dan keamanan. Ini termasuk angka penjualan peralatan, Mesin penjual (makanan / minuman, rokok, produk bernilai tinggi seperti CD),alat pembayaran parkir, Peralatan (pompa bensin, pencuci / pengering, pendingin, pembersih mobil) Layanan, Hiburan (mesin game, sistem suara) dan Signage / tampilan (billboard, display) serta sistem RFID (penandaan barang), dll. Sektor ini dibagi menjadi tiga segmen utama:\r\n<ol>\r\n<li>Toko, meliputi supermarket, pusat perbelanjaan, serta situs toko tunggal dan pusat distribusi.</li>\r\n<li>Perhotelan meliputi hotel, restoran, bar, kafe dan klub.</li>\r\n<li>Khusus meliputi SPBU, game, bowling, bioskop, konser, balap, dan pameran.</li>\r\n</ol>\r\n\r\n<strong>Sektor Keamanan</strong>\r\n<br>\r\nSektor Keamanan Publik sangat luas dan dibagi menjadi lima segmen:\r\n<ol>\r\n<li>Layanan darurat, meliputi polisi, pemadam kebakaran, jasa ambulans serta kerusakan mobil dan layanan pengaturan. Ini termasuk instalasi unit gawat darurat.</li>\r\n<li>Infrastruktur Publik, meliputi pemantauan lingkungan termasuk dataran banjir, instalasi pengolahan air. Hal ini berkaitan dengan iklim dan meteorologi.</li>\r\n<li>Pelacakan meliputi manusia (pekerja mandiri, parolees, dll), hewan, pengiriman dan pos, kemasan dan pelacakan bagasi.</li>\r\n<li>Peralatan meliputi senjata militer, kendaraan militer, kapal, pesawat dan peralatan lainnya.</li>\r\n<li>Pengawasan, meliputi pengawasan tetap (CCTV, Kamera Kecepatan) serta keamanan militer dan radar / satelit.</li>\r\n</ol>\r\n\r\n<strong>Sektor Teknologi dan Jaringan</strong>\r\n<br>\r\nSektor ini dibagi menjadi dua segmen utama:\r\n<ol>\r\n<li>Jaringan perusahaan, meliputi peralatan kantor seperti mesin fotokopi, printer, mesin cap serta pemantauan jarak jauh PBXs, IT / komponen pusat data dan komponen jaringan pribadi.</li>\r\n<li>Jaringan publik termasuk infrastruktur pembawa seperti menara seluler, pusat data publik, sistem pasokan listrik dan penyejuk ruangan. Kategori ini berbeda dari manajemen fasilitas di sektor pembangunan.</li>\r\n</ol>\r\n</body>'),
(6, 'Implementasi IoT', '<body style=\"text-align: justify;\">\r\n&nbsp;&nbsp;&nbsp;&nbsp;Internet of Things mengacu pada pengidentifikasian suatu objek yang direpresentasikan secara virtual di dunia maya atau Internet. Jadi dapat dikatakan bahwa Internet of Things adalah bagaimana suatu objek yang nyata di dunia ini digambarkan di dunia maya (Internet). Bahkan salah satu cafe kopi terkenal di Indonesia Starbucks dalam beberapa tahun ke depan, dilaporkan berencana menghubungkan kulkas dan mesin kopi milik mereka dengan teknologi Internet of Thing. Sehingga mereka dapat meningkatkan pelayanan mereka dengan mengetahui apa saja yang lebih disukai konsumen, meramalkan kebutuhan stock barang (kopi,dll), dan masih banyak lainnya dan pada akhirnya efisiensi dan keuntungan akan meningkat. Mari kita bayangkan ketika semua benda, bahkan manusia, hewan dan tumbuhan dilengkapi dengan alat pengidentifikasian, maka mereka bisa dikelola secara efisien dengan bantuan komputer. Dan pengidentifikasian tersebut dapat dilakukan dengan beberapa teknologi seperti kode batang (Barcode), Kode QR (QR Code) dan Identifikasi Frekuensi Radio (RFID).\r\n\r\n<ol></ol>\r\n\r\n<strong>Kode Batang</strong>\r\n<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Kode batang atau lebih dikenal dengan bahasa inggrisnya barcode adalah suatu kumpulan data optik yang dapat dibaca oleh alat scannernya. Kode batang pada awalnya digunakan untuk otomatisasi pemeriksaan barang di swalayan dan hingga saat ini kode batang (tipe UPC (Universal Price Codes)) kebanyakan masih digunakan untuk hal tersebut.Hal ini dikarenakan banyaknya keuntungan yang dapat diambil dari penggunaan kode batang, yaitu:\r\n<br>\r\n<ol style=\"text-decoration: none;\">\r\n<li>Proses Input Data lebih cepat, karena: Scanner Kode batang dapat membaca / merekam data lebih cepat dibandingkan dengan melakukan proses input data secara manual.</li>\r\n<li>Proses Input Data lebih tepat, karena: Teknologi Kode batang mempunyai ketepatan yang tinggi dalam pencarian data.</li>\r\n<li>Proses Input lebih akurat mencari data, karena: Teknologi Kode batang mempunyai akurasi dan ketelitian yang sangat tinggi.</li>\r\n<li>Mengurangi Biaya, karena dapat mengindari kerugian dari kesalahan pencatatan data, dan mengurangi pekerjaan yang dilakukan secara manual secara berulang-ulang dan memiliki harga yang lebih murah daripada RFID.</li>\r\n<li>Peningkatan Kinerja Manajemen, karena dengan data yang lebih cepat, tepat dan akurat maka pengambilan keputusan oleh manajemen akan jauh lebih baik dan lebih tepat, yang nantinya akan sangat berpengaruh dalam menentukan kebijakan perusahaan.</li>\r\n</ol>\r\nPrinsip kerja kode batang sangatlah sederhana, yaitu ketika kode batang didekatkan pada scanner atau pemindainya, maka scannernya akan memancarkan cahaya dan mengidentifikasi informasi atau kode yang ada pada kode batang tersebut.\r\n\r\n<ol></ol>\r\n\r\n<strong>Kode QR</strong>\r\n<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Kode QR atau lebih dikenal dengan sebutan QR Code (Quick Response Code) adalah suatu kode batang dua dimensi yang dikembangkan oleh Denso Wave, salah satu divisi pada Denso Corporation yang merupakan perusahaan jepang. Sesuai namanya Kode QR (Quick Response) diciptakan untuk menyampaikan informasi dengan cepat dan mendapatkan respons yang cepat pula. Berbeda dengan kode batang, yang hanya menyimpan informasi secara horizontal, kode QR mampu menyimpan informasi secara horizontal dan vertikal, oleh karena itu secara otomatis Kode QR dapat menampung informasi yang lebih banyak daripada kode batang. Pada zaman sekarang ini kode QR banyak digunakan sebagai alat penaut fisik yang dapat menyimpan alamat dan URL, nomor telepon, teks dan sms yang dapat digunakan pada majalah, surat harian, iklan, pada tanda-tanda bus, kartu nama ataupun media lainnya. Atau dengan kata lain sebagai penghubung secara cepat konten daring (dalam jaringan/online) dan konten luring (luar jaringan/offline). Kehadiran kode ini memungkinkan semua orang berinteraksi dengan media yang ditempeli oleh kode QR, melalui ponsel secara efektif dan efisien. Semua orang juga dapat menghasilkan dan mencetak sendiri kode QR, sehingga orang lain dapat dengan mudah mengakses alamat URL ataupun segala informasi yang disimpan oleh kode QR tersebut .\r\n\r\n<ol></ol>\r\n\r\n<strong>Identifikasi Frekuensi Radio</strong>\r\n<br>\r\n&nbsp;&nbsp;&nbsp;&nbsp;Identifikasi Frekuensi Radio atau RFID (Radio Frequensi Identifity) merupakan salah satu teknologi implementasi dari Internet of Things. Secara singkatnya, RFID adalah sebuah metode identifikasi secara otomatis dengan menggunakan suatu peranti yang disebut RFID tag atau transponder.\r\nPada zaman modern sekarang ini, RFID merupakan teknologi yang sudah umum (banyak digunakan), dikarenakan kegunaan dan efisiensinya dalam mendukung segala aktivitas kehidupan manusia. Baik pada sektor produksi, distribusi maupun konsumsi. Hal ini dikarenakan label atau kartu RFID adalah sebuah benda yang bisa dipasang atau dimasukkan di dalam sebuah produk, hewan atau bahkan manusia dengan tujuan untuk identifikasi menggunakan gelombang radio. Sehingga memudahkan penggunanya untuk mendata (mengetahui jumlah maupun keberadaan atau lokasi) barang yang dimilikinya tersebut. Prinsip kerja RFID sangatlah sederhana yaitu RFIDtag (label RFID) memuat informasi dalam bentuk elektronik dan ketika bertemu dengan RFIDreadernya, informasi itu akan dikirimkan ke RFIDreader dalam bentuk gelombang radio (makanya disebut Radio Frequensi Identifity). Sehingga benda tersebut dapat teridentifikasi oleh RFIDreadernya.\r\n</body>'),
(7, 'Metode Yang Digunakan Pada IoT', '<body style=\"text-align: justify;\">\r\n<ul>\r\n<li>Metode yang digunakan oleh Internet of Things adalah nirkabel atau pengendalian secara otomatis tanpa mengenal jarak. Pengimplementasian Internet of Things sendiri biasanya selalu mengikuti keinginan si developer dalam mengembangkan sebuah aplikasi yang ia ciptakan, apabila aplikasinya itu diciptakan guna membantu monitoring sebuah ruangan maka pengimplementasian Internet of Things itu sendiri harus mengikuti alur diagram pemrograman mengenai sensor dalam sebuah rumah, berapa jauh jarak agar ruangan dapat dikontrol, dan kecepatan jaringan internet yang digunakan. Perkembangan teknologi jaringan dan Internet seperti hadirnya IPv6, 4G, dan Wimax, dapat membantu pengimplementasian Internet of Things menjadi lebih optimal, dan memungkinkan jarak yang dapat di lewati menjadi semakin jauh, sehingga semakin memudahkan kita dalam mengontrol sesuatu.</li>\r\n<li>Pengimplementasian Internet of Things terwujud dalam produk Speedy Monitoring. Produk ini diluncurkan oleh PT Telkom guna menangkap, merekam, dan memonitor suatu ruangan atau area tertentu dengan menggunakan IP Camera yang terhubung ke jaringan Speedy. Kelebihan produk ini adalah kita dapat mengakses hasil monitoring kamera dan memanajemen sistem ini melalui web browser. Baik melalui desktop maupun mobile phone. Keistimewaan dari produk Speedy Monitoring adalah tersedianya media penyimpanan yang ditangani secara terpusat sehingga kita hanya perlu menyediakan kamera dan tak perlu repot lagi dengan urusan penyediaan tempat penyimpanan data dan penyediaan server. Dapat mengawasi dan mengontrol suatu tempat dan keadaaan saat kapanpun dan dimanapun adalah idaman. Tentunya dengan IOT mempermudah kita mengawasi dan mengontrol apapun tanpa terbatas jarak dan waktu (online monitoring), termasuk memonitor keadaan rumah (home monitoring). Jika Home Monitoring dapat dilakukan dengan mudah, setiap waktu, dan dari media akses apapun tentunya kita akan merasa aman dan nyaman meninggalkan rumah apalagi dalam jangka waktu yang lama. Maka dari itu dengan Internet of Things kita dapat mengendalikan segala sesuatu melalui sebuah perangkat dan mempermudah dalam melakukan segala aktivitas.</li>\r\n</ul>\r\n</body>'),
(8, 'Manfaat IoT', '<body style=\"text-align: justify;\">\r\n&nbsp;&nbsp;&nbsp;&nbsp;Banyak manfaat yang didapatkan dari internet of things. Pekerjaan yang kita lakukan menjadi cepat, mudah, dan efisien. Kita juga bisa mendeteksi pengguna dimanapun ia berada. Sebagai contoh barcode yang tertera pada sebuah produk. Dengan barcode tersebut, bisa dilihat produk mana yang paling banyak terjual dan produk mana yang kurang diminati. Selain itu dengan barcode kita juga bisa memprediksi produk yang stoknya harus ditambah atau dikurangi. Dengan barcode kita tak perlu susah-susah menghitung produk secara manual. Contoh lain saat kita pergi ke Singapore. Jika kita ingin bepergian menggunakan transportasi umum seperti MRT atau bis kita cukup menggunakan atau membeli EZ-link card. EZ-link card biasanya dipakai oleh para wisatawan yang mengunjungi Singapore sebagai pengganti uang untuk membayar jasa transportasi yang telah digunakan. Sedangkan warga negara Singapore sendiri menggunakan ktp ataupun kartu pelajar sebagai alat membayarnya. Cara ini lebih efisien dan cepat ketimbang kita menggunakan uang tunai. Jika kita menggunakan uang tunai, kita masih harus mengantri untuk membayar, belum lagi jika kita membayar dengan nilai nominal uang besar, kita harus menunggu untuk mendapatkan uang kembalian kita.\r\n</body>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_1`
--

CREATE TABLE `comment_1` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment_1`
--

INSERT INTO `comment_1` (`id`, `name`, `comment`, `date`) VALUES
(49, 'FerdyHw', 'WOI', '2020-04-02'),
(50, 'asep', 'weei', '2020-04-02'),
(51, '', '', '2020-04-02'),
(52, 'dwd', 'dwad', '2020-04-02'),
(53, 'Bwaa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '2020-04-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_2`
--

CREATE TABLE `comment_2` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment_2`
--

INSERT INTO `comment_2` (`id`, `name`, `comment`, `date`) VALUES
(1, 'asep', 'naon atuh', '2020-04-02'),
(2, 'admindd', 'WAAW', '2020-04-02'),
(3, 'FerdyHw', 'WEEW', '2020-04-02'),
(4, 's', 's', '2020-04-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_3`
--

CREATE TABLE `comment_3` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment_3`
--

INSERT INTO `comment_3` (`id`, `name`, `comment`, `date`) VALUES
(1, 'FerdyHw', 'WOI', '2020-04-02'),
(2, 'admindd', 'WAW', '2020-04-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_4`
--

CREATE TABLE `comment_4` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment_4`
--

INSERT INTO `comment_4` (`id`, `name`, `comment`, `date`) VALUES
(1, 'FerdyHw', 'WOI', '2020-04-02'),
(2, 'admindd', 'WAW', '2020-04-02'),
(3, 'Katya Lischina', 'Hai', '2020-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_5`
--

CREATE TABLE `comment_5` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment_5`
--

INSERT INTO `comment_5` (`id`, `name`, `comment`, `date`) VALUES
(1, 'FerdyHw', 'WOI', '2020-04-02'),
(2, 'admindd', 'WAW', '2020-04-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment_6`
--

CREATE TABLE `comment_6` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment_6`
--

INSERT INTO `comment_6` (`id`, `name`, `comment`, `date`) VALUES
(1, 'FerdyHw', 'WOI', '2020-04-02'),
(2, 'admindd', 'WAW', '2020-04-02'),
(3, 'FerdyHw', 'WEW', '2020-04-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$C.9gpMCo3ZFhGRTteTjRNO/25Ro5b2joYU/1bcmqpoWT9IV3Lup9a'),
(2, 'user', '$2y$10$Veam1q2Ev0Q6.r7jmH5cnejtCZsSuy4wpUyOw9DKgSjWOWvGi1RNO'),
(3, 'p', '$2y$10$07Ur2zSgYdIUSuDD.lTUsunnNjsJuYzLTD1s3Up37Qz/HwRnNDb.G');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_1`
--
ALTER TABLE `comment_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_2`
--
ALTER TABLE `comment_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_3`
--
ALTER TABLE `comment_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_4`
--
ALTER TABLE `comment_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_5`
--
ALTER TABLE `comment_5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comment_6`
--
ALTER TABLE `comment_6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment_1`
--
ALTER TABLE `comment_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `comment_2`
--
ALTER TABLE `comment_2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `comment_3`
--
ALTER TABLE `comment_3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `comment_4`
--
ALTER TABLE `comment_4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comment_5`
--
ALTER TABLE `comment_5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `comment_6`
--
ALTER TABLE `comment_6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
