@extends('layout.main')

@section('title', 'Halaman Selengkapnya')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">More About Tour</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
          
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#halamanutama">Kembali</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Jepang</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Profile</a>
                            </li>
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>Nikmati pengalaman tak terlupakan menjelajahi Jepang, mulai dari keindahan alam Gunung Fuji hingga keramaian kota Tokyo dan keanggunan budaya tradisional Kyoto. Dalam perjalanan ini, Anda akan mengunjungi destinasi ikonik, seperti kuil-kuil bersejarah, taman bunga sakura, dan pemandian air panas (onsen) yang menenangkan. Tour ini juga mencakup pengalaman kuliner Jepang yang autentik, termasuk sushi, ramen, dan teh hijau tradisional. Saksikan harmoni modernitas dan tradisi di negeri matahari terbit yang penuh pesona!</p>

                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <img src="https://alindrahaqeem.com/wp-content/uploads/2020/10/tour-jepang.jpg" class = "img-fluid" alt="">

                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <p>Tour Guide</p>
                                <ul>
                                    <li>Jl.Mayor Laut Wiratno No.14 Palembang</li>
                                    <li>(p) 0812-744-90172</li>
                                    <li>(e) Jodiptra@mdp.ac.id</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Labuan Bajo</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">Profile</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">Contact</a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <p>Jelajahi surga tropis Labuan Bajo, pintu gerbang menuju Taman Nasional Komodo yang terkenal. Dalam perjalanan ini, Anda akan menikmati keindahan pantai berpasir putih, air laut yang jernih, serta kehidupan bawah laut yang menakjubkan. Kunjungi pulau-pulau eksotis seperti Pulau Padar dan Pulau Komodo untuk melihat langsung komodo, hewan purba yang hanya ada di sini. Nikmati juga snorkeling di Pink Beach, pantai berpasir merah muda yang unik, dan saksikan matahari terbenam yang memukau di bukit-bukit sekitar Labuan Bajo. Perjalanan yang menawarkan petualangan alam dan keindahan tiada duanya!</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <img src="https://swamediainc.storage.googleapis.com/swa.co.id/wp-content/uploads/2022/01/26110538/Labuan-Bajoshutterstock.jpg" class = "img-fluid" alt="">

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <p>Tour Guide</p>
                                        <ul>
                                            <li>Jl.Kandang Kawat Palembang</li>
                                            <li>(p) 0853-266-7150</li>
                                            <li>(e) FredySuwanto@mdp.ac.id</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Palembang</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab-nobd" data-bs-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab-nobd" data-bs-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false" tabindex="-1">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab-nobd" data-bs-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false" tabindex="-1">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
                            <div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">
                                <p>Rasakan kekayaan budaya dan sejarah di kota Palembang, kota tertua di Indonesia yang terkenal dengan Sungai Musi. Dalam tour ini, Anda akan menjelajahi ikon kota seperti Jembatan Ampera, Benteng Kuto Besak, dan Pulau Kemaro yang legendaris. Nikmati juga kuliner khas Palembang seperti pempek, model, dan tekwan. Selain itu, Anda akan berkunjung ke Masjid Agung Sultan Mahmud Badaruddin II dan Museum Sultan Mahmud Badaruddin untuk mengenal lebih dalam sejarah Kesultanan Palembang. Tour ini menawarkan perpaduan antara keindahan alam dan warisan budaya yang kaya!</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
                                <img src="https://liburasik.com/wp-content/uploads/2024/06/IMG_6941.jpeg" class = "img-fluid" alt="">
                                
                            </div>
                            <div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
                                <p>Tour Guide</p>
                                <ul>
                                    <li>Jl.Tabung Plaju</li>
                                    <li>(p) 0853-266-7891</li>
                                    <li>(e) MuhammadZacky@mdp.ac.id</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Bali</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab-nobd" data-bs-toggle="pill" href="#v-pills-home-nobd" role="tab" aria-controls="v-pills-home-nobd" aria-selected="true">Home</a>
                                    <a class="nav-link" id="v-pills-profile-tab-nobd" data-bs-toggle="pill" href="#v-pills-profile-nobd" role="tab" aria-controls="v-pills-profile-nobd" aria-selected="false" tabindex="-1">Profile</a>
                                    <a class="nav-link" id="v-pills-messages-tab-nobd" data-bs-toggle="pill" href="#v-pills-messages-nobd" role="tab" aria-controls="v-pills-messages-nobd" aria-selected="false" tabindex="-1">Contact</a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="tab-content" id="v-pills-without-border-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home-nobd" role="tabpanel" aria-labelledby="v-pills-home-tab-nobd">
                                        <p>Nikmati pesona Pulau Dewata, Bali, dengan pantainya yang indah, budaya yang kaya, dan pemandangan alam yang menakjubkan. Dalam perjalanan ini, Anda akan mengunjungi pantai-pantai terkenal seperti Kuta, Nusa Dua, dan Uluwatu, serta menikmati keindahan sawah terasering di Tegalalang dan pemandangan Gunung Batur yang memukau. Jangan lewatkan kunjungan ke Pura Tanah Lot dan Pura Uluwatu yang ikonik, serta merasakan pengalaman budaya di Ubud yang dipenuhi galeri seni dan pertunjukan tari tradisional. Tour ini juga memberikan kesempatan untuk mencicipi kuliner Bali yang lezat, seperti babi guling dan sate lilit. Bali menawarkan keindahan alam, spiritualitas, dan relaksasi dalam satu paket!</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile-nobd" role="tabpanel" aria-labelledby="v-pills-profile-tab-nobd">
                                        <img src="https://blog.darmawisataindonesia.co.id/wp-content/uploads/2017/08/paket-tour-bali-1.jpg" class = "img-fluid" alt="">

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages-nobd" role="tabpanel" aria-labelledby="v-pills-messages-tab-nobd">
                                        <p>Tour Guide</p>
                                <ul>
                                    <li>Jl.Rajawali</li>
                                    <li>(p) 0853-233-74214</li>
                                    <li>(e) KomariahWullandari@mdp.ac.id</li>
                                </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Madura</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab-icon" data-bs-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                    <i class="icon-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab-icon" data-bs-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false" tabindex="-1">
                                    <i class="far fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab-icon" data-bs-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false" tabindex="-1">
                                    <i class="far fa-envelope"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
                            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                                <p>Temukan keindahan dan kekayaan budaya di Pulau Madura. Dalam tour ini, Anda akan mengunjungi berbagai destinasi menarik seperti Bukit Jaddih, tambang kapur yang menawarkan pemandangan eksotis, serta Pantai Siring Kemuning yang indah dengan pasir putihnya. Tak lupa, saksikan langsung tradisi unik Karapan Sapi, balapan sapi yang menjadi ikon budaya Madura. Anda juga bisa mencicipi kuliner khas seperti sate madura dan bebek sinjay yang terkenal. Jelajahi pasar lokal dan sentra batik Madura yang menawarkan corak khas dan kaya warna. Tour ini memberikan pengalaman autentik pulau yang penuh pesona dan tradisi!</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                                <img src="https://www.darmawisataindonesia.co.id/Content/images/tour/586/58624ee664d-bc34-44b5-a3ec-8239181bb67c.jpg" class = "img-fluid" alt="">

                            </div>
                            <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                                <p>Tour Guide</p>
                                <ul>
                                    <li>Jl.Mayor Laut Wiratno No.14 Palembang</li>
                                    <li>(p) 0812-744-90172</li>
                                    <li>(e) Jodiptra@mdp.ac.id</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Maluku</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab-icons" data-bs-toggle="pill" href="#v-pills-home-icons" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
                                        <i class="icon-home"></i>
                                        Home
                                    </a>
                                    <a class="nav-link" id="v-pills-profile-tab-icons" data-bs-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false" tabindex="-1">
                                        <i class="far fa-user"></i>
                                        Profile
                                    </a>
                                    <a class="nav-link" id="v-pills-profile-tab-icons" data-bs-toggle="pill" href="#v-pills-profile-icons" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false" tabindex="-1">
                                        <i class="far fa-user"></i>
                                        Contact
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="tab-content" id="v-pills-with-icon-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                        <p>Nikmati keindahan alam yang memukau di Kepulauan Maluku, yang dikenal sebagai "Spice Islands." Dalam tour ini, Anda akan menjelajahi pantai-pantai eksotis seperti Pantai Ora di Pulau Seram yang memiliki air sebening kristal dan terumbu karang yang luar biasa. Kunjungi Benteng Amsterdam dan Benteng Belgica di Ambon untuk menelusuri jejak sejarah kolonial. Anda juga akan merasakan keindahan Pulau Banda, surga tersembunyi dengan kehidupan laut yang kaya, ideal untuk snorkeling dan diving. Jangan lewatkan kesempatan untuk menikmati kuliner khas Maluku seperti ikan bakar colo-colo dan papeda. Maluku menawarkan perpaduan antara sejarah, budaya, dan alam yang luar biasa!</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile-icons" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
                                                                       <img src="https://www.darmawisataindonesia.co.id/Content/images/tour/191/1918ebd3efe-6a16-412f-8cc3-a6e96009fa44.jpg" class = "img-fluid" alt="">

                                    </div>
                                    <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                                        <p>Tour Guide</p>
                                        <ul>
                                            <li>Jl.Mayor Laut Wiratno No.14 Palembang</li>
                                            <li>(p) 0812-744-90172</li>
                                            <li>(e) Jodiptra@mdp.ac.id</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Medan</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-line nav-color-secondary" id="line-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="line-home-tab" data-bs-toggle="pill" href="#line-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="line-profile-tab" data-bs-toggle="pill" href="#line-profile" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="line-contact-tab" data-bs-toggle="pill" href="#line-contact" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3 mb-3" id="line-tabContent">
                            <div class="tab-pane fade show active" id="line-home" role="tabpanel" aria-labelledby="line-home-tab">
                                <p>Tour Medan menawarkan pengalaman yang kaya akan budaya, kuliner, dan keindahan alam. Kunjungi Istana Maimun, simbol kejayaan Kesultanan Deli, dan Masjid Raya Al Mashun yang megah. Nikmati cita rasa kuliner Medan yang terkenal, seperti Bika Ambon, Soto Medan, dan Durian Ucok. Jangan lewatkan wisata alam di Danau Toba, yang terletak tidak jauh dari Medan, serta keindahan alam Bukit Lawang yang terkenal dengan orangutan. Tour ini akan membawa Anda merasakan keramahan penduduk lokal dan keunikan budaya Sumatera Utara.</p>
                            </div>
                            <div class="tab-pane fade" id="line-profile" role="tabpanel" aria-labelledby="line-profile-tab">
                                <img src="https://www.darmawisataindonesia.co.id/Content/images/tour/414/41435a52030-b9be-46dd-b6b2-6ec49aac0de6.jpg" class = "img-fluid" alt="">

                            </div>
                            <div class="tab-pane fade" id="line-contact" role="tabpanel" aria-labelledby="line-contact-tab">
                                <p>Tour Guide</p>
                                <ul>
                                    <li>Jl.Kandang Kawat Palembang</li>
                                    <li>(p) 0853-266-7150</li>
                                    <li>(e) FredySuwanto@mdp.ac.id</li>
                                </ul>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tour Bandung</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="nav flex-column nav-pills nav-secondary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab-maluku" data-bs-toggle="pill" href="#v-pills-home-maluku" role="tab" aria-controls="v-pills-home-maluku" aria-selected="true">
                                        <i class="icon-home"></i>
                                        Home
                                    </a>
                                    <a class="nav-link" id="v-pills-profile-tab-maluku" data-bs-toggle="pill" href="#v-pills-profile-maluku" role="tab" aria-controls="v-pills-profile-maluku" aria-selected="false" tabindex="-1">
                                        <i class="far fa-user"></i>
                                        Profile
                                    </a>
                                    <a class="nav-link" id="v-pills-contact-tab-maluku" data-bs-toggle="pill" href="#v-pills-contact-maluku" role="tab" aria-controls="v-pills-contact-maluku" aria-selected="false" tabindex="-1">
                                        <i class="far fa-envelope"></i>
                                        Contact
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="tab-content" id="v-pills-maluku-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home-maluku" role="tabpanel" aria-labelledby="v-pills-home-tab-maluku">
                                            <p>Tur Bandung mengajak Anda menjelajahi keindahan alam dan kuliner khas kota ini. Kunjungi Tangkuban Perahu untuk melihat kawahnya yang menakjubkan, lalu nikmati suasana sejuk di Kebun Teh Ciwidey. Jangan lewatkan pengalaman kuliner di Cihampelas dan Braga, di mana Anda bisa mencicipi batagor, surabi, dan berbagai hidangan lezat lainnya. Bandung menawarkan kombinasi sempurna antara keindahan alam dan cita rasa yang menggugah selera!</p>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile-maluku" role="tabpanel" aria-labelledby="v-pills-profile-tab-maluku">
                                        <img src="https://cdn1-production-images-kly.akamaized.net/g2NmhB29rCjuBx6ERb8jv2ci6tE=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3556188/original/040670500_1630383811-white-crater-2337128_1280_1_.jpg" class = "img-fluid" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-contact-maluku" role="tabpanel" aria-labelledby="v-pills-contact-tab-maluku">
                                        <p>Tour Guide</p>
                                        <ul>
                                            <li>Jl.Tabung Plaju</li>
                                            <li>(p) 0853-266-7891</li>
                                            <li>(e) MuhammadZacky@mdp.ac.id</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection