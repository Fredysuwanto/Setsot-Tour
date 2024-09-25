@extends('layout.main')

@section('title', 'Halaman Selengkapnya')

@section('content')


<div class="container">
    <h1 class="my-4 text-center">Rating & Review</h1>
    <a href="{{ route('halamanreview.create') }}" class="btn btn-primary col-lg-12"> >>Comment Here<< </a>
    <hr>
</div>


<div class="row">
    <div class="col-md-12">
      <ul class="timeline">
        <li>
          <div class="timeline-badge">
            <i class="far fa-paper-plane"></i>
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Khalid</h4>
              
            </div>
            <div class="timeline-body">
              <p>
                "Pengalaman tur ke Bandung sangat luar biasa! Pemandangan di Tangkuban Perahu benar-benar memukau dan makanan lokalnya, terutama batagor, lezat sekali! Panduan kami sangat ramah dan membantu. Pasti akan kembali untuk tur lainnya!"
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning">
            <i class="far fa-bell"></i>
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Faldi</h4>
            </div>
            <div class="timeline-body">
              <p>
                "Saya baru saja menyelesaikan tur 3 hari ke Bandung dan saya sangat terkesan. Setiap destinasi dipilih dengan baik, mulai dari kebun teh yang menenangkan hingga pusat perbelanjaan yang ramai. Hotelnya juga nyaman dan makanan yang disajikan selalu menggugah selera. Sangat direkomendasikan!"
              </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger">
            <i class="icon-close"></i>
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Danang</h4>
            </div>
            <div class="timeline-body">
              <p>
                "Tur ke Bandung adalah pengalaman yang tak terlupakan bagi saya dan keluarga. Kami tidak hanya menikmati pemandangan yang indah, tetapi juga berbagi momen berharga saat menjelajahi kebudayaan lokal. Terima kasih telah membuat perjalanan kami sangat spesial!"
              </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Abiyu</h4>
            </div>
            <div class="timeline-body">
              <p>
                "Satu kata: WOW! Tur ini melebihi ekspektasi saya. Dari keindahan alam hingga kulinernya yang menggugah selera, setiap detik sangat berharga. Ayo, pesan sekarang!"
              </p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info">
            <i class="icon-tag"></i>
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Gilang</h4>
            </div>
            <div class="timeline-body">
              <p>
                "Panduan tur kami sangat profesional dan penuh pengetahuan! Mereka tidak hanya membawa kami ke tempat-tempat terbaik, tetapi juga berbagi cerita menarik tentang sejarah dan budaya Bandung. Ini menambah nilai lebih pada pengalaman kami!"
              </p>
              <hr>
              <div class="btn-group dropdown">
              
                 
                </ul>
              </div>
            </div>
          </div>
        </li>

      
      </ul>
      <h3 class="fw-bold mb-3">Dengan Foto</h3>
      <div class="row">
        <div class="col-md-4">
            <div class="card card-post card-round">
                <img src="https://tourbandung.com/wp-content/uploads/2014/03/Dusun-Bambu-bdg.jpg" class = "img-fluid" alt="">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info-post ms-2">
                            <p class="username">Thoriq Akbar</p>
                            <p class="date text-muted">20 Jan 18</p>
                        </div>
                    </div>
                    <div class="separator-solid"></div>
                    <p class="card-category text-info mb-1">
                        <a href="#">Comment</a>
                    </p>
                    <h3 class="card-title">
                        <a href="#">Best Comment Saat Ini</a>
                    </h3>
                    <p class="card-text">
                        "Jika Anda mencari petualangan yang memadukan alam dan budaya, tur Bandung adalah pilihan yang tepat! Jangan lupa untuk membawa kamera Anda, karena setiap sudut menawarkan pemandangan yang menakjubkan!"
                    </p>
                    <a href="#" class="btn btn-primary btn-rounded btn-sm">Read More</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card card-post card-round">
                <img class="card-img-top" src="https://cdn-images.hipwee.com/wp-content/uploads/2019/04/hipwee-WhatsApp-Image-2019-04-11-at-20.28.36.jpeg" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info-post ms-2">
                            <p class="username">David Saputra</p>
                            <p class="date text-muted">28 feb 16</p>
                        </div>
                    </div>
                    <div class="separator-solid"></div>
                    <p class="card-category text-info mb-1">
                        <a href="#">Comment</a>
                    </p>
                    <h3 class="card-title">
                        <a href="#">Best Comment Saat ini</a>
                    </h3>
                    <p class="card-text">
                        "Tour Jepang ini sungguh mengesankan! Mengunjungi Gunung Fuji dan menikmati onsen (pemandian air panas) adalah pengalaman yang luar biasa. Saya tidak pernah merasakan keramahan seperti di Jepang. Sangat direkomendasikan untuk semua orang!"
                    </p>
                    <a href="#" class="btn btn-primary btn-rounded btn-sm">Read More</a>
                </div>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="card card-post card-round">
                <img class="card-img-top" src="https://www.ilmitour.com/images/tour-package-maluku/2lj3/nusa-ela/img-pulau-3-ambon-nusa-ela-resort-17-ambon-maluku-by-ilmi-tour-ambon-maluku-indonesia.jpg" alt="Card image cap">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info-post ms-2">
                            <p class="username">Rismanto</p>
                            <p class="date text-muted">Today</p>
                        </div>
                    </div>
                    <div class="separator-solid"></div>
                    <p class="card-category text-info mb-1">
                        <a href="#">Comment</a>
                    </p>
                    <h3 class="card-title">
                        <a href="#">Best Comment Saat Ini</a>
                    </h3>
                    <p class="card-text">
                        "Tur ke Maluku adalah petualangan yang menakjubkan! Keindahan alamnya, dari pantai pasir putih hingga pegunungan hijau, sangat memesona. Kami juga belajar banyak tentang budaya lokal dan sejarah perang dunia. Ini adalah pengalaman yang sangat berharga!"


                    </p>
                    <a href="#" class="btn btn-primary btn-rounded btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
    

@endsection