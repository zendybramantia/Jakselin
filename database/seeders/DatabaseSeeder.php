<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Category;
use App\Models\WisataKuliner;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeding ADMIN
        User::create([
            'name' => 'Azhar Baihaqi Nugraha',
            'email' => 'azhar03456789@gmail.com',
            'nohp' => '081223727292',
            'username' => 'azhar03212',
            'password' => bcrypt('azhar03.,'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Faishal Januarahman',
            'email' => 'faishaljakselin@gmail.com',
            'nohp' => '082217938312',
            'username' => 'Faishal J',
            'password' => bcrypt('faishal123'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Zendy Bramantia A',
            'email' => 'zendyjakselin@gmail.com',
            'nohp' => '082126374859',
            'username' => 'Zendy B A',
            'password' => bcrypt('zendy123'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Rifki Adi Pramana',
            'email' => 'rifkijakselin@gmail.com',
            'nohp' => '082738273821',
            'username' => 'Rifki A P',
            'password' => bcrypt('rifki123'),
            'is_admin' => 1
        ]);


        // Seeding User
        $faker = Faker::create('id_ID');
        echo 'Seeding User\n';
        $userTemporary = [];
        for ($i = 0; $i < 30; $i += 1) {
            $user = User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'username' => $faker->userName(),
                'nohp' => '23232323',
                'avatar' => 'images/profile.jpg',
                'password' => bcrypt('123')
            ]);
            array_push($userTemporary, $user);
        }

        //Seeding Category

        Category::create([
            'name' => 'Cepat Saji'
        ]);
        Category::create([
            'name' => 'Cafe'
        ]);
        Category::create([
            'name' => 'Fine Dining'
        ]);
        Category::create([
            'name' => 'Kaki Lima'
        ]);
        Category::create([
            'name' => 'Bakery'
        ]);

        //Seeding WisataKuliner
        //Cepat saji(1)
        WisataKuliner::create([
            'nama_tempat' => 'Lawless Burgerbar',
            'category_id' => 1,
            'alamat' => 'Jl. Kemang Selatan VIII No.67K, RT.7/RW.2, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12730',
            'deskripsi' => 'Lawless Burgerbar menyajikan makanan yang terdiri dari burger, sandwich, dan beberapa macam snacks dengan kualitas 
            terbaik dan value for money yang oke. Harga burger mulai dari Rp.35,000, snacks mulai dari Rp.15,000, dan minuman mulai dari Rp.12,000. Porsi yang ditawarkan juga tidak main-main. Dengan harga yang affordable, kamu akan mendapatkan burger yang kamu bisa genggam penuh di tangan dan terasa membanjiri mulut. Bahkan menu yang terbesar yang di namakan The Lemmy adalah sebuah paket lengkap berisi double juicy patty, beef brisket, beef bacon, cheese, onion strings, dan sunny side up.',
            'gambar' => 'images/kuliner/cs1.jpg',
        ]);
        
        WisataKuliner::create([
            'nama_tempat' => 'Pizza Grand Lucky',
            'category_id' => 1,
            'alamat' => 'Jl. Jend. Sudirman No.Lot 12, RT.5/RW.3, Senayan, Kebayoran Baru, South Jakarta City, Jakarta 12190',
            'deskripsi' => 'Pizza enak ini bisa kamu temukan di Grand Lucky Superstore, SCBD. Walaupun berada di kawasan yang terkenal elit, jangan khawatir soal harga pizza yang  dijual di sini. satu slicenya dengan ukuran jumbo cuma dibanderol 33rb rupiah saja. dan rasanya gak perlu diragukan lagi. Paling favorite disini Cheese Pizzanya kejunya melimpah gurih, rotinya ga bikin eneg, padahal ukurannya besar loh. Minumnya juga bisa refill sesuka kamu loh. Karena tempatnya jadi satu dengan superstore Grand Lucky dan juga area perkantoran, jadi tempat ini selalu ramai kalau pas makan siang. Tapi ga usah kuatir, mereka selalu menyediakan Pizza ini Fresh From The Oven kok.',
            'gambar' => 'images/kuliner/cs2.jpg',
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Byurger',
            'category_id' => 1,
            'alamat' => 'Ps. Cipete, jl.Pangeran antasari raya PD. Pasar Jaya No 10 Cilandak Barat, di, RT.9/RW.11, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430',
            'deskripsi' => 'Pencinta burger bisa menjajal burger enak di Pasar Cipete Selatan. Byurger menghadirkan burger artisan dengan pilihan topping seperti shortribs sampai nangka!Baru berdiri sekitar 1 tahun, Byurger sukses mencuri perhatian pencinta burger. Di sini tersedia ragam pilihan burger artisan dengan harga cukup terjangkau, mulai dari Rp 28.000 sampai Rp 69.500.Lokasi resto burger ini juga cukup unik karena menempati ruko dua lantai di Pasar Cipete Selatan. Meski begitu, tempatnya nyaman dengan interior yang Instagrammable. Ada sentuhan warna oranye dan hijau terang di area santap lantai 2.',
            'gambar' => 'images/kuliner/cs3.jpg',
           
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Stack',
            'category_id' => 1,
            'alamat' => 'Jl. Wijaya I No. 64, Wijaya, Kebayoran Baru, Jakarta Selatan, Jakarta',
            'deskripsi' => 'Ingin mencoba kuliner baru nan unik di Jakarta? Stack dapat menjadi pilihan yang tepat untuk dikunjungi. Resto yang lagi nge-hits di ibu kota ini menyajikan menu sandwich dengan berbagai macam isian. Stack berada di Kawasan senopati, yaitu Jalan Wijaya I No. 64, Kebayoran Baru, Jakarta Selatan. Resto terletak di sebuah ruko dengan tempat yang tidak terlalu besar. Menu yang dihadirkan diantaranya; Lobster Stack, Wagyu Sando Stack, Steak Stack, Butter Chix Stack, Se`I Stack, Classic Stack Burger, dan Egg Stack. Selain menu utama tersebut, terdapat juga menu pendamping, desserts, dan beragam minuman. Harga menu Stack berkisar mulai Rp30.000 hingga Rp190.000.',
            'gambar' => 'images/kuliner/cs4.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Master Cheese Pizza',
            'category_id' => 1,
            'alamat' => 'Jalan Tebet Raya No. 61-69, Tebet, Jakarta Selatan',
            'deskripsi' => 'Di kawasan Tebet Raya, Jakarta Selatan ada tempat makan calzone pizza yang hits banget. Namanya Master Cheese Pizza yang menawarkan aneka menu calzone, pizza tutup berbentuk setengah lingkaran dengan keju yang mulur gurih. Mulai dari menu yang Classic dengan harga Rp 26 ribu hingga menu Favourite seharga Rp 29 ribu per porsinya. Varian yang bisa dipesan adalah creamy chicken, blackpepper chicken, pepperoni lover, dan lainnya. Tak hanya menu calzone pizza, ada juga slice pizza berukuran besar. Satu lembarnya dibanderol harga Rp 29 ribuan. Ada varian smoked beef, super cheese, salted egg grilled beef, dan lainnya.',
            'gambar' => 'images/kuliner/cs5.jpg',
            
        ]);
        
        //Cafe(2)
        WisataKuliner::create([
            'nama_tempat' => 'Anomali Cafe Senopati',
            'category_id' => 2,
            'alamat' => 'Jl. Senopati Raya No.19, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190',
            'deskripsi' => 'Anomali Cafe Senopati bisa jadi merupakan tempat yang kerap dikunjungi maupun mampir takeaway bagi para pecinta kopi. Tak hanya menawarkan kuliner yang enak dan menarik, namun desain interior menawan cafe yang satu ini didominasi warna alam, pencahayaan yang hangat. Cafe di Jakarta Selatan ini memiliki jam buka mulai dari pukul 07.00-23.00 loh. Anda pun bisa mendapatkan fasilitas seperti Wi-fi, tempat yang nyaman dan cozy, stop kontak yang ada, kemudian mushola untuk beribadah serta yang paling penting area parkir yang cukup.',
            'gambar' => 'images/kuliner/cafe-1.jpg',
        
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Gordi HQ',
            'category_id' => 2,
            'alamat' => 'Jl. Jeruk Purut Dalam No.mor 25, RT.6/RW.3, Cilandak Tim., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12560',
            'deskripsi' => 'Salah satu cafe hits di Jakarta Selatan yang diberi nama Gordi HQ ini menjadi tempat ngopi yang memiliki konsep indoor dan outdoor yang cozy.Gordi HQ menghadirkan berbagai fasilitas yang cukup menyenangkan dan dari cafe ini sendiri, seperti jaringan wifi untuk pengunjung, kemudian ada smoking area, stop kontak yang diletakkan di meja, kemudian yang pasti ada mushola untuk beribadah dan pelayanan untuk takeaway atau dibawa pulang. ',
            'gambar' => 'images/kuliner/cafe-2.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Lucky Cat Coffee and Kitchen',
            'category_id' => 2,
            'alamat' => 'Parkir Selatan Plaza Festival, Jl. H. R. Rasuna Said No.C22, RT.2/RW.5, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12940',
            'deskripsi' => 'Tak hanya memiliki coffee yang cukup nikmat, tempat ini menyajikan free wifi yang banyak digunakan dan cukup cepat dalam penggunaannya. Cafe yang satu ini juga melayani selama 24 jam dan cocok untuk anda yang suka menghabiskan banyak waktu entah untuk sekadar mengobrol ataupun mengerjakan project di cafe. ',
            'gambar' => 'images/kuliner/cafe-3.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Happines Kitchen and Coffee',
            'category_id' => 2,
            'alamat' => 'Jl. Moh. Kahfi 1 No.36 A, RT.10/RW.2, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630',
            'deskripsi' => 'Happiness Kitchen & Coffee menghadirkan tempat yang menarik untuk didatangi dan memiliki menu makanan dan minuman yang lezat. Cafe di Kemang Jakarta Selatan yang satu ini menghadirkan menu mulai dari Indonesian Food, Western dan Oriental food. Happines Kitchen and Coffee ini buka sejak pagi yakni mulai pukul 08.00-22.00 dan di akhir pekan hingga pukul 23.00. Wah cocok banget kan buat sarapan maupun nongkrong bareng teman-teman? ',
            'gambar' => 'images/kuliner/cafe-4.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'One Fifiteenth Coffee',
            'category_id' => 2,
            'alamat' => 'Jl. Gandaria 1 No.63, RT.2/RW.3, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130',
            'deskripsi' => 'Tak hanya menghadirkan kopi yang nikmat, namun juga menghadirkan camilan seperti cake, pisang, maupun camilan asin lainnya. Kamu bisa menikmati kuliner di cafe ini mulai hari Senin-Minggu mulai dari pukul 07.00 hingga 21.00.',
            'gambar' => 'images/kuliner/cafe-5.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'BEAU by Talita Setyadi',
            'category_id' => 2,
            'alamat' => 'Jl. Cikajang No.29, RT.1/RW.5, Petogogan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12170',
            'deskripsi' => 'Cafe BEAU by Talia Setyadi cocok banget untuk vegetarian bisa banget nongkrong di sini sembari menikmati kuliner vegan yang lezat dan nikmat.',
            'gambar' => 'images/kuliner/cafe-6.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Trafique Coffee',
            'category_id' => 2,
            'alamat' => 'Jl. Hang Tuah Raya No.9, RT.2/RW.6, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120',
            'deskripsi' => 'Tempat ngopi di Jakarta Selatan yang satu ini memiliki konsep yang minimalis dan elegan. Mulai dari bangunan hingga suasana ruangan di dalamnya pun hening dan bikin betah. Waktu buka cafe yang satu ini cukup lama, yakni Senin hingga Minggu, jam 09.00 sampai 21.00 WIB.',
            'gambar' => 'images/kuliner/cafe-7.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Hause Rooftop',
            'category_id' => 2,
            'alamat' => 'Tower 2 MD Place, Jl. Setia Budi Selatan No.7, RT.5/RW.1, Kuningan, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910',
            'deskripsi' => 'Punya konsep casual dining dan bar yang keren, cafe ini cocok buat anda saat nongkrong malam-malam. Buka sejak jam 09.00-24.00 di hari Minggu-Kamis dan 09.00-02.00 di hari Jumat dan Sabtu. Cafe ini pun memiliki signature menu yakni cocktails yang nggak boleh anda lewatkan. Bagi anda yang berada di Setiabudi dan ingin menikmati cocktails bisa mampir nih.',
            'gambar' => 'images/kuliner/cafe-8.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Filmore Coffee',
            'category_id' => 2,
            'alamat' => 'Jl. H. Sidik No.7, RT.4/RW.6, Kuningan, Karet Kuningan, Kecamatan Setiabudi, Kuningan, Daerah Khusus Ibukota Jakarta 12940',
            'deskripsi' => 'Cafe yang satu ini bisa dibilang menjadi salah satu hidden gem di daerah Jakarta Selatan yang nggak boleh dilewatkan. Tak hanya menghadirkan rasa yang nikmat dan harga yang murah meriah, cafe yang satu ini juga memberikan ambience yang homey abis. Paling nikmat kalau morning talks sambil ngopi bareng teman-teman nih. Namun, jangan datang di hari Senin karena Filmore Coffee tutup waktu tersebut.',
            'gambar' => 'images/kuliner/cafe-9.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Woodpecker Coffee',
            'category_id' => 2,
            'alamat' => 'Jl. Panglima Polim V No.23, RT.3/RW.7, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160',
            'deskripsi' => 'Cafe yang berada di jalan Panglima Polim ini sangat dekat dengan Mangia Cafe. Bisa banget jadi pilihanmu saat menginginkan desert nikmat namun dengan tempat yang intens. Hal ini karena Woodpecker Coffee menghadirkan suasana yang tak terlalu ramai. Cafe ini buka sejak jam 07.00 hingga 21.00.',
            'gambar' => 'images/kuliner/cafe-10.jpg',
            
        ]);

        //Fine Dining(3)
        WisataKuliner::create([
            'nama_tempat' => 'Eastern Opulence',
            'category_id' => 3,
            'alamat' => 'Jl. Cipaku I No.85, RT.1/RW.4, Petogogan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12170',
            'deskripsi' => 'Berada di kawasan Senopati, Eastern Opulence begitu popouler untuk dijadikan restoran mewah untuk momen spesial. Ruangan yang tersedia, dibagi menjadi banyak pilihan, beberapa di antaranya VIP AMETHYST, VIP EMERALD, VIP RUBY yang masing-masing berkapasitas 12 hingga 16 orang. Sedangkan VIP SAPPHIRE bisa menampung 20 orang di dalamnya. Soal pengalaman fine dining di sini tak perlu diragukan lagi, Gyutan Cabe Ijo, Sop Buntut Eastern Opulence hingga Bebek Lodeh Medok tersaji sempurna dengan bahan-bahan berkualitas.',
            'gambar' => 'images/kuliner/fd-1.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Ruths Chris Steak House Jakarta',
            'category_id' => 3,
            'alamat' => 'Somerset Grand Citra Ground Floor Jl. Prof. Dr. Satrio Kav1 RT.11/RW.4, RT.5/RW.2, Kuningan, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12940',
            'deskripsi' => 'Ruths Chris Steak House membuka outlet pertamanya di Indonesia. Berlokasi di Somerset Apartment yang berdampingan langsung dengan Lotte Shopping Avenue, Kuningan, begitu mudah dijangkau dari segala penjuru di Jakarta. Kualitas daging steak yang disajikan merupakan pilihan daging grade terbaik di kelasnya.',
            'gambar' => 'images/kuliner/fd-2.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Sofia at The Gunawarman',
            'category_id' => 3,
            'alamat' => 'Jl. Gunawarman No.3, RT.6/RW.3, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12110',
            'deskripsi' => 'Cukup dekat dengan Eastern Opulence, SOFIA at The Gunawarman juga menjadi salah satu destinasi utama bagi para pencinta fine dining di Jakarta Selatan. SOFIA at The Gunawarman menawarkan menu western bintang lima yang cocok untuk berbagai ocassion',
            'gambar' => 'images/kuliner/fd-3.jpg',
            
        ]);
        
        WisataKuliner::create([
            'nama_tempat' => '71st Omakase Restaurant',
            'category_id' => 3,
            'alamat' => 'Jl. Gelagah No.35, Pisangan, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15419',
            'deskripsi' => '71st Omakase, yang mengusung konsep interior yang unik, yaitu bernuansa serba putih, biru, dan cokelat, sehingga terasa menyatukan berbagai elemen yang menunjang suasana makan yang tak kalah uniknya. Di Omakase sitting area, para Chef-nya akan menyajikan special menu setiap harinya, karena di 71st Omakase, tidak tersedia buku menu untuk memilih menu apa yang diinginkan. Lain halnya dengan ala carte sitting area yang harus melalui reservasi terlebih dahulu.',
            'gambar' => 'images/kuliner/fd-4.jpg',
            
        ]);
       
        WisataKuliner::create([
            'nama_tempat' => 'Akira Back',
            'category_id' => 3,
            'alamat' => 'Jl. Setia Budi Selatan No.7, RT.5/RW.1, Kuningan, Setia Budi, Jakarta, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910',
            'deskripsi' => 'Menilik ke dalam MD Building, Setiabudi, Jakarta Selatan, ada Akira Back yang jadi satu-satunya restoran fine dining di bangunan tersebut. Konsep interior yang diusungnya menggunakan jaring-jaring yang mirip dengan aksen jaring yang menyelimuti MD Building itu sendiri. Nama Akira Back diambil dari nama sang chef, yaitu Chef Akira Back. Sehingga semua makanan yang tersaji merupakan inspirasi dari yang penciptanya. Ada menu yang menjadi pilihan utama di restoran yang buka dua sesi setiap harinya; lunch and dinner, yaitu Tuna Pizza (IDR 195K) yang merupakan pizza dough yang tipis dipadu dengan saus Ponzu mayo dan lembaran tuna yang diiris tipis. Ada juga 48 Hours Slow Cooked Wagyu Short Ribs (IDR 450K ) yang tak kalah menggiurkannya.',
            'gambar' => 'images/kuliner/fd-5.jpg',
            
        ]);
        
        WisataKuliner::create([
            'nama_tempat' => 'Table8 at Hotel Mulia Senayan',
            'category_id' => 3,
            'alamat' => 'Hotel Mulia Jakarta, Jl. Asia Afrika, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'deskripsi' => 'Table8 yang ada di dalam rangkaian restoran mewah di Hotel Mulia Senayan punya desain interior yang berbeda dari hotel restaurant yang ada di Jakarta. Pasalnya, di sini terdapat beberapa buah miniatur pagoda yang jadi aksen yang kuat di dalam ruangan. Sehingga nuansa dinasti Cina begitu terasa sejak pertama kali memasuki Table8 ini. Bagi yang sedang mencari restoran untuk acara keluarga, Table8 dirasa tepat untuk jadi pilihannya. Sebab, restoran yang buka pukul 12:00 - 22:30 di hari Minggu hingga Kamis, dan pukul 11:00 - 22:00 untuk hari Jumat dan Sabtu ini sering kali dimanfaatkan untuk pernikahan dan acara spesial keluarga.',
            'gambar' => 'images/kuliner/fd-6.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Amuz Gourmet Restaurant',
            'category_id' => 3,
            'alamat' => 'The Energy Building (2nd Floor,Lot 11A,SCBD, Jl. Jenderal Sudirman No.Kav. 52-53, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190',
            'deskripsi' => 'Restoran fine dining ini jadi masuk ke dalam nominasi World Luxury Restaurant Awards 2019. Pantas saja, sebab tema yang diusungnya penuh dengan kemewahan di setiap sudutnya, dengan menu makanan ala Prancis yang diolah langsung oleh Gilles Marx, Chef kenamaan yang hasil karyanya dipuja di Indonesia. Di Amuz Gourmet Restaurant ada banyak ruangan yang mencerminkan kepribadian untuk setiap acaranya. Soal makanan, Amuz Gourmet Restaurant tidak perlu ditanyakan lagi, Poached Lombok Langouste with Bufala Mozzarella Terrine yang menggunakan kerang dari Lombok jadi salah satu best menu di sini. Untuk signature menu-nya, ada Escargot a la Bourguignonne yang sukses jadi favorit penikmat fine dining di Jakarta Selatan.',
            'gambar' => 'images/kuliner/fd-7.jpg',
            
        ]);

        // Kaki Lima(4)

        WisataKuliner::create([
            'nama_tempat' => 'Warung Boma Fatmawati',
            'category_id' => 4,
            'alamat' => 'Jalan RS. Fatmawati Raya No.22, Gandaria Sel, Cilandak.',
            'deskripsi' => 'Kepengin menikmati pecel pada malam hari? Langsung saja meluncur ke warung Boma yang merupakan spesialis dari nasi pecel Madiun yang sudah terbukti lezatnya. Kuliner kaki lima ini selalu ramai pengunjung, terlebih sering banget masuk dalam liputan acara kuliner di televisi swasta maupun kanal YouTube para food vlogger. Nasi pecel madiun di sini bumbu kacangnya melimpah, dengan rasa lezat yang konsisten. Pilihan lauknya yang cukup banyak, bikin acara santap menyantap jadi makin semangat. Selain pecel, ada menu iga bakar juga yang jadi primadona di Warung Boma.',
            'gambar' => 'images/kuliner/kl1.jpg',
            
        ]);
        
        WisataKuliner::create([
            'nama_tempat' => 'Nasi Goreng Kebuli Apjay',
            'category_id' => 4,
            'alamat' => 'Jalan Panglima Polim IX No.18, Melawai, Kebayoran Baru.',
            'deskripsi' => 'Walaupun nasi goreng kebuli Apjay selalu bikin pelanggannya rela antre. Rasanya selalu pas, gak pernah mengecewakan lidah. Banyak yang berpendapat jika bumbu kebulinya nampol abis. Belum lagi daging kambingnya yang lumayan banget, plus gak alot, bikin lidah serasa dimanjakan dengan masakan ala Timur Tengah. Jika kamu gak suka daging kambing, ada pilihan nasi goreng ayam dengan bumbu kebuli, lho. Dijamin sama enaknya!',
            'gambar' => 'images/kuliner/kl2.jpg',
            
        ]);
        
        WisataKuliner::create([
            'nama_tempat' => 'Ketoprak Ciragil',
            'category_id' => 4,
            'alamat' => 'Jalan Ciragil II No.24, Kebayoran Baru.',
            'deskripsi' => 'Berlabel kuliner legendaris, bikin ketoprak Ciragil selalu ramai pengunjung. Memang sih, harga seporsi ketoprak di sini cukup pricey, tapi sebanding dengan rasanya, kok. Dengan porsi yang lumayan banyak, plus tambahan telur, dijamin bikin perut auto kenyang deh. Usai menghabiskan ketoprak, pelanggan yang datang biasanya lanjut menikmati segarnya es podeng. Konon, es podeng di sini segar banget, dengan isi yang melimpah. Sayang banget, kan, jika sampai terlewatkan!',
            'gambar' => 'images/kuliner/kl3.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Gultik',
            'category_id' => 4,
            'alamat' => 'Jalan Mahakam No.28, Kramat Pela, Kebayoran Baru.',
            'deskripsi' => 'Berdiri di daerah atau tempat nongkrongnya anak Jaksel, bikin spot kuliner kaki lima ini selalu ramai pengunjung, terutama yang kepengin banget menikmati sedapnya gulai itik legendaris. Itik termasuk jenis unggas yang jika tidak diolah betul, menyisakan bau amis. Tapi gak bakal kamu jumpai ketika menyantap seporsi gulai itik di sini. Irisan daging itiknya lumayan banyak, dan tidak alot. Harga seporsi gultik di sini juga terjangkau banget. Dijamin bikin kamu kepengin nambah terus!',
            'gambar' => 'images/kuliner/kl4.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Sate Sambas Jupri',
            'category_id' => 4,
            'alamat' => 'Jalan Sungai Sambas II, Kramat Pela.',
            'deskripsi' => 'Kuliner malam memang paling asyik menikmati sate. Apalagi jika kamu melipir ke sate sambas Jupri. Sate di sini cukup beragam, lho. Mulai dari sate kambing, sate ayam, sate kulit, sampai sate taichan. Setiap tusukan sate berisi daging yang ukurannya lumayan besar-besar. Bumbu kacangnya padat, dan lumayan banyak, ditambah tekstur lontongnya legit, alasan pelanggan selalu datang lagi untuk memesan sate di sini.',
            'gambar' => 'images/kuliner/kl5.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Bubur Barito',
            'category_id' => 4,
            'alamat' => 'Jalan Gandaria Tengah III No.3, Kramat Pela, Kebayoran Baru.',
            'deskripsi' => 'Ngomongin kuliner kaki lima paling hits di Jaksel kurang afdal bila tidak menyebutkan bubur Barito. Tempat untuk menikmati bubur pada malam hari ini, memang selalu ramai pengunjung. Bubur Barito terkenal punya rasa gurih yang gak bikin enek. Meski tidak diguyur dengan bumbu kuning, lezatnya nampol abis, apalagi topping-nya juga banyak. Pelanggan yang datang ke sini, biasanya memesan semangkuk bubur dengan diberi tambahan telur mentah. Konon, rasanya jadi unik banget, lho. Tertarik mencoba?',
            'gambar' => 'images/kuliner/kl6.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Soto Ayam Ceker Arifin Gandaria 2',
            'category_id' => 4,
            'alamat' => 'Jalan Gandaria II, Kramat Pela, Kebayoran Baru.',
            'deskripsi' => 'Kamu yang ngaku pencinta ceker, sudah pernah menikmati soto ceker di sini belum? Kuliner kaki lima ini lokasinya gak jauh dari Mal Gandaria City, lho. Bisalah, usai jalan-jalan atau berbelanja mampir ke sini. Keistimewaan soto ceker di sini terletak pada kuah gurihnya yang juara! Selain empuk, cekernya pun lumayan banyak, lho. Kamu pun bisa menikmati soto ceker bersama tambahan sate yang disediakan.',
            'gambar' => 'images/kuliner/kl7.jpg',
            
        ]);

        //Bakery(5)
        WisataKuliner::create([
            'nama_tempat' => 'Hokkaido Baked Cheese Tart',
            'category_id' => 5,
            'alamat' => 'Kota Kasablanka, Lantai Lower Ground, Jl. Casablanca Raya, Tebet, Jakarta Selatan',
            'deskripsi' => 'hokkaido baked cheese tart merupakan salah satu makanan yang terbuat dari kulit pie yang identik banget dengan isian keju mereka. untuk lokasinya sihada di sebrang carefour dan ga jauh dengan eskalator yang arahnya ke food temptationnya kokas. makanan yang terkenal kejunya ini luncurin menu baru loh yaitu oreo.. agak berbeda dari yang biasanya. kalau biasanya pinggirannya menggunakan kulit pie biasa, untuk yang satu ini kulit luarnya juga berwarna hitam yang dimana pinggirannya juga rasanya oreo gitu guys. untuk tengahnya sendiri sih masih sama isiannya keju ya.. bedanya ada mini oreo on top gitu yang menurut kita sih fungsinya agar orang lain tau kalau yang dimakan atau yang dipilih adalah yang rasa oreo. ',
            'gambar' => 'images/kuliner/bakery-1.jpg',
            
        ]);
        
        WisataKuliner::create([
            'nama_tempat' => 'Dough Lab',
            'category_id' => 5,
            'alamat' => 'Jl. Senopati No. 37, Senopati, Kebayoran Baru, Jakarta Selatan',
            'deskripsi' => 'Tidak ada yang mengalahkan rasanya menikmati cookies yang masih hangat dan lezat, fresh dari oven. pengalaman kuliner pelanggan saat menghabiskan waktu menikmati kreasi cookies favorit mereka bersama teman dan keluarga.',
            'gambar' => 'images/kuliner/bakery-2.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Clairmont Patisserie',
            'category_id' => 5,
            'alamat' => 'Jl. Gandaria I No. 73, Gandaria, Jakarta Selatan.',
            'deskripsi' => 'Pilihan berikutnya ada Clairmont Patisserie yang punya banyak pilihan kue-kue lezat menggiurkan. Meskipun sudah ada cukup lama karena sudah berdiri sejak 1997, tapi kualitasnya terjaga sebagai spesialis cake, hantaran, dan kue kering. Jenis-jenis cake yang dijual di toko ini antara lain Black Forest, Belgium Chocolate, Black Velvet, Double Layer Cheese dan Blueberry Cheese Cake. ',
            'gambar' => 'images/kuliner/bakery-3.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Chateraise',
            'category_id' => 5,
            'alamat' => 'Senayan City, Lantai Lower Ground, Jl. Asia Afrika, Senayan, Jakarta Selatan.',
            'deskripsi' => 'Melewati depan tokonya saja kamu pasti sudah tergoda dengan deretan kue-kue cantik di bagian display dan aroma harum nikmat yang tercium. Chateraise sendiri merupakan toko kue asal Jepang yang sudah berpengalaman sejak 1955. Toko kue ini juga terkenal dengan pilihan kue-kue yang super lembut seperti contohnya Cheesecake. Soal pilihan kue unggulan mereka ada Richness Bake Cheese Cake, Fluffy Souffle, Roll Brulee, dan Baked Cheese Tart.',
            'gambar' => 'images/kuliner/bakery-4.jpg',
            
        ]);

        WisataKuliner::create([
            'nama_tempat' => 'Levant Boulangerie & Patisserie',
            'category_id' => 5,
            'alamat' => 'Jl. Cipete Dalam No. 9A, Fatmawati, Jakarta Selatan.',
            'deskripsi' => 'Terletak tepat di samping Sekolah Lycee Prancis, membuat toko roti dan pastry ini jadi buruan para ekspatriat asal Negeri Menara Eiffel tersebut. Levant menjual aneka roti dan pastry artisan khas Prancis yang langsung dipanggang di tempat. Kue khas Eropa yang bisa kamu cobain antara lain, Tartelette Strawberry, Praline Orange, Vanilla Flan Parisien, Mille Feuille, Canelle, dan Schwarzwa?lder Kirschtorte.',
            'gambar' => 'images/kuliner/bakery-5.jpg',
            
        ]);



        // WisataKuliner::factory(100)->create();
        User::factory(10)->create();
    }
}
