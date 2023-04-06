<?php

namespace Database\Seeders;

use App\Models\Tickets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Tickets::create([
            'ticket_image' => 'https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/06/11/daftar-harga-tiket-we-the-fest-2-20220611094410.jpg',
            'ticket_image_landscape' => 'https://cdn-2.tstatic.net/tribunnews/foto/bank/images/we-the-fest-2022.jpg',
            'ticket_name' => 'We The Fest 2022',
            'ticket_desc' => 'WE THE FEST is Indonesias most anticipated summer festival of music, arts, fashion and food by the countrys leading concert promoter/event organizer.',
            'ticket_startfrom' => '1250000',
            'ticket_schedule' => '2022/09/23',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'Ismaya Live',
            'catalogue_id' => '1',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://asset.kompas.com/crops/KF-HW1U1QLg-d-btwrqTaHwZ8vk=/143x0:1408x843/750x500/data/photo/2022/10/27/635a4413aa570.jpg',
            'ticket_image_landscape' => 'https://mmc.tirto.id/image/share/tw/2022/09/30/berdendang-bergoyang-festival-2022_ratio-16x9.jpg',
            'ticket_name' => 'Berdendang Bergoyang 2022',
            'ticket_desc' => 'Konser yang berlokasi di Jakarta dan dihadiri banyak musisi dari berbagai genre dan generasi. Diisi dengan berbagai kolaborasi antar musisi juga. ',
            'ticket_startfrom' => '450000',
            'ticket_schedule' => '2022/10/28',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'Emvrio Production',
            'catalogue_id' => '2',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://www.whiteboardjournal.com/wp-content/uploads/2019/04/Screen-Shot-2019-04-05-at-2.56.56-PM-1.png',
            'ticket_image_landscape' => 'https://www.whiteboardjournal.com/wp-content/uploads/2019/04/Screen-Shot-2019-04-05-at-2.56.56-PM-1.png',
            'ticket_name' => 'Synchronize Fest 2022',
            'ticket_desc' => 'Synchronize Festival merupakan festival musik multi-genre tahunan berskala nasional yang mengundang puluhan ribu audience untuk merayakan keberagaman jenis musik hidup di enam panggung selama tiga hari, tiga malam, menikmati suguhan 100-an pertunjukan terkurasi dari artis-artis terfavorit dan terbaik tanah air yang datang dari dekade ‘60-an, ‘70-an, ‘80-an, ‘90-an, hingga 2000-an',
            'ticket_startfrom' => '200000',
            'ticket_schedule' => '2022/11/11',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '3',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/09/19/3911792731.jpg',
            'ticket_image_landscape' => 'https://image-cdn.hypb.st/https%3A%2F%2Fid.hypebeast.com%2Ffiles%2F2022%2F11%2F88rising-umumkan-lineup-terbaru-untuk-hitc-jakarta-2022-2.jpg?w=960&cbr=1&q=90&fit=max',
            'ticket_name' => 'Head In The Clouds Festival',
            'ticket_desc' => 'Head In The Clouds Festival bisa dibilang sebagai konser mancanegara terbesar tahun ini. Musisi yang dihadirkan tak main-main, seperti NIKI, Rich Brian, Joji, Stephanie Poetri, EAJ, hingga Yoasobi. HITC akan diselenggarakan pada 3-4 Desember 2022, di Community Park PIK 2.',
            'ticket_startfrom' => '400000',
            'ticket_schedule' => '2022/11/22',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'hypebeast',
            'catalogue_id' => '2',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://koranmakassar.com/wp-content/uploads/2022/06/30-Tahun-Dewa-19-1.jpg',
            'ticket_image_landscape' => 'https://i0.wp.com/www.biem.co/wp-content/uploads/2022/07/30-Tahun-DEWA-19-biem.jpg',
            'ticket_name' => 'DEWA 19 “30 Tahun Berkarya”',
            'ticket_desc' => 'Tour DEWA 19, 30 TAHUN BERKARYA "A Day Full Special Intimate Show" dengan desain panggung yang megah, tata cahaya dan multimedia yang impresif, serta kualitas sound system yang spektakuler akan membawamu ke perjalanan 30 Tahun yang akan dirangkai dengan membawakan 30 lagu hits dari album-album Dewa 19.',
            'ticket_startfrom' => '500000',
            'ticket_schedule' => '2022/09/02',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '1',
            'ticket_status' => 'Sold Out',
        ]);

        Tickets::create([
            'ticket_image' => 'https://awsimages.detik.net.id/community/media/visual/2022/08/18/dwp-2022.jpeg?w=1200',
            'ticket_image_landscape' => 'https://asset-a.grid.id/crop/52x60:1032x704/x/photo/2022/07/26/harga-tiket-konser-dwp-2022-pen-20220726093031.jpg',
            'ticket_name' => 'DWP 2022',
            'ticket_desc' => 'One of the biggest dance music festivals in Asia is back! Djakarta Warehouse Project will return on 9, 10, 11 Dec 2022 at JIEXPO Kemayoran.',
            'ticket_startfrom' => '3000000',
            'ticket_schedule' => '2022/12/09',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '1',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://cdn0-production-images-kly.akamaized.net/PCw8oS80vz3vYG9Kofr-7LdZtVw=/640x853/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4206680/original/005389400_1666940787-FgIgDw6VIAMuk-m__1_.jpg',
            'ticket_image_landscape' => 'https://mmc.tirto.id/image/otf/500x0/2022/11/14/blackpink-born-pink_ratio-16x9.jpg',
            'ticket_name' => 'Born Pink BLACKPINK',
            'ticket_desc' => 'Born Pink World Tour is the ongoing second worldwide concert tour headlined by South Korean girl group Blackpink in support of their second Korean studio album Born Pink',
            'ticket_startfrom' => '400000',
            'ticket_schedule' => '2022/10/19',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '2',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/05/16/1903110487.jpg',
            'ticket_image_landscape' => 'https://i.ibb.co/WxTnPc4/BANNER-BARU-BGT.png',
            'ticket_name' => 'Allo Bank Festival 2022',
            'ticket_desc' => 'All in One Festival pertama di Indonesia sekaligus festival musik internasional pertama di tahun ini, Allo Bank Festival 2022, digelar pada 20, 21, dan 22 Mei 2022 di Istora Senayan, Jakarta.',
            'ticket_startfrom' => '200000',
            'ticket_schedule' => '2022/10/20',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '1',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://www.coldplay.com/wp/wp-content/uploads/2022/03/Web-banner-600x405.jpg',
            'ticket_image_landscape' => 'https://www.coldplay.com/wp/wp-content/uploads/2022/03/Web-banner-600x405.jpg',
            'ticket_name' => 'Coldplay World Tour 2022',
            'ticket_desc' => 'We want our concerts to be accessible to everyone, and for everyone to have the best possible experience. Here are a few things we are doing for the rest of the tour. At every show we offer local sign language interpreters as well as Subpacs for our D/deaf and hard of hearing guests so that they can feel a stronger connection to the music.',
            'ticket_startfrom' => '2000000',
            'ticket_schedule' => '2023/01/10',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '3',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://pbs.twimg.com/media/FMNaIVQXse8K7qZ?format=jpg&name=900x900',
            'ticket_image_landscape' => 'https://i0.wp.com/liveforlivemusic.com/wp-content/uploads/2022/02/h.e.r.-2022-tour.jpeg?fit=1333%2C666&ssl=1',
            'ticket_name' => 'H.E.R',
            'ticket_desc' => 'Especially in the summer, free outdoor concerts are nice recreation to enjoy the season with friends and family. Laidback concerts by local garage bands while grabbing a beer. Mini-performance by popular musicians…Either way, a positive benefit to enjoy the music and the season.',
            'ticket_startfrom' => '3000000',
            'ticket_schedule' => '2022/12/15',
            'ticket_location' => 'Bandung',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '3',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/09/17/3467958323.jpg',
            'ticket_image_landscape' => 'https://newestindonesia.com/wp-content/uploads/2022/08/20220627225249_62b9d2519505d.jpg',
            'ticket_name' => 'Beyond The Future Festival 2022',
            'ticket_desc' => 'Beyond The Future 2022 (BTF 2022) adalah konser musik dengan pengalaman festival oleh Hypenamic Event yang akan di adakan di JX International Convention Exhibition Surabaya pada 01 Oktober 2022.',
            'ticket_startfrom' => '280000',
            'ticket_schedule' => '2022/10/24',
            'ticket_location' => 'Surabaya',
            'ticket_organizer' => 'HYPENAMIC',
            'catalogue_id' => '2',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'http://assets.kompasiana.com/items/album/2022/04/24/aespa-62650296ef62f61593230512.jpg',
            'ticket_image_landscape' => 'https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2020/06/10/140317711.jpg',
            'ticket_name' => 'Coachella 2022',
            'ticket_desc' => ' A+’s mission is to amplify the intersectionality of BIPOC people with disabilities by providing an opportunity to participate in the Coachella experience. Apply to this hands-on program being a part of a new festival future',
            'ticket_startfrom' => '8000000',
            'ticket_schedule' => '2022/11/25',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '3',
            'ticket_status' => 'sold out',
        ]);

        Tickets::create([
            'ticket_image' => 'https://gigibandofficial.com/wp-content/uploads/2017/02/potrait4-1.jpg',
            'ticket_image_landscape' => 'https://img.inews.co.id/media/822/files/inews_new/2019/10/17/gigi__1_.jpg',
            'ticket_name' => 'GIGI 25th Anniversary',
            'ticket_desc' => 'Gigi kembali merayakan ulang tahun ke-25 nya di Istora Senayan. Segera beli tiket karena tiketnya terbatas.',
            'ticket_startfrom' => '500000',
            'ticket_schedule' => '2022/11/05',
            'ticket_location' => 'Yogyakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '1',
            'ticket_status' => 'available',
        ]);

        Tickets::create([
            'ticket_image' => 'https://www.edsheeran.com//sites/g/files/g2000014211/files/2022-10/sheeran_na_bg.PNG',
            'ticket_image_landscape' => 'https://www.edsheeran.com//sites/g/files/g2000014211/files/2022-10/sheeran_na_bg.PNG',
            'ticket_name' => 'Ed Sheeran World Tour 2022',
            'ticket_desc' => 'This is Ed Sheeran World Tour. Go buy tickets!',
            'ticket_startfrom' => '7500000',
            'ticket_schedule' => '2022/12/25',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '2',
            'ticket_status' => 'sold out',
        ]);

        Tickets::create([
            'ticket_image' => 'https://upload.wikimedia.org/wikipedia/en/8/8f/Future_Nostalgia_Tour_poster.png',
            'ticket_image_landscape' => 'https://www.theo2.co.uk/assets/img/dua-lipa-O2-950x440-da65d3eeee.jpg',
            'ticket_name' => 'Dua Lipa: Future Nostalgia',
            'ticket_desc' => 'Let’s go to the horizon of Future. Ticket is ready now!',
            'ticket_startfrom' => '1000000',
            'ticket_schedule' => '2022/12/20',
            'ticket_location' => 'Bali',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '2',
            'ticket_status' => 'sold out',
        ]);

        Tickets::create([
            'ticket_image' => 'https://paragram.id/upload/media/entries/2021-05/11/23053-1-3e16f7032abe3c7c6f0e190b9452d18c.jpg',
            'ticket_image_landscape' => 'https://cache.umusic.com/_sites/_halo/justinbieber/images/v3/jb-tour-header.jpg',
            'ticket_name' => 'Justin Bieber World Tour 2022',
            'ticket_desc' => 'The Justice World Tour was the fourth concert tour by Canadian singer Justin Bieber. The tour was in support of his fifth and sixth studio albums, Changes (2020) and Justice (2021).',
            'ticket_startfrom' => '1500000',
            'ticket_schedule' => '2022/12/12',
            'ticket_location' => 'DKI Jakarta',
            'ticket_organizer' => 'unknown',
            'catalogue_id' => '2',
            'ticket_status' => 'available',
        ]);
    }
}
//