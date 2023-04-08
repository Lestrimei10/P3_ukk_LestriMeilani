{{-- Banner --}}

    <!-- begin container -->
    {{-- <div class="container">
        <a href="{{route('login')}}">Masuk</a>
        <h3>Lacak Status Laundry</h3>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div> --}}
{{-- End Header --}}

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="/csslaundry/homepage.css">

        <title></title>
    </head>

<body>
        <div class="logo">
                <a href="#"><img src="/img/LOGO.png"></a>
        </div>
           <nav>
               <ul>
                  <li><a href="{{ route('login') }}">Login</a></li>

               </ul>
           </nav>
            <form>
                <div class="input-group m-b-20">
                    <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : 392928765" />
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>

            <img src="/img/mesincuci.png" class="mesincuci" alt="">

            <p class="about">Kami menawarkan berbagai paket laundry yang dapat disesuaikan dengan kebutuhan Anda. Kami juga memberikan layanan antar jemput gratis untuk daerah sekitar toko kami dengan minimal order tertentu.
                Tim kami terdiri dari tenaga ahli yang berpengalaman dan terlatih dalam mengelola laundry. Kami juga menjamin keamanan dan kerahasiaan pakaian Anda dengan menjaga kebersihan dan keamanan lingkungan toko kami.
            </p>

            <p class="welcome">Pinky Laundry adalah toko laundry yang bertempat di lokasi yang strategis dan mudah diakses. Kami menyediakan jasa laundry untuk berbagai jenis pakaian, seperti pakaian sehari-hari, pakaian kerja, pakaian formal, pakaian olahraga, dan lain-lain.
                Kami menggunakan teknologi canggih dan bahan deterjen yang ramah lingkungan untuk memberikan hasil pencucian yang optimal dan terjaga kebersihannya. Selain itu, kami juga menggunakan mesin pengering modern untuk memastikan pakaian Anda kering dan siap dipakai kembali.
            </p>

            <div class="satu">
               <img src="/img/laund11.png">
            </div>
    @include('frontend.modal')
</body>
</html>

