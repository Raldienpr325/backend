<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <title>Aldien</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    </div>
    <script src="js/app.js"></script>
    <button onclick="myFunction(true)">Dark mode</button>
    <button onclick="myFunction(false)">light mode</button></br>

    <div id="menu">
        <ul>
            <li>
            </li>
            <li><a href="/">Beranda</a></li>
            <li><a href="/profile">Tentang Saya</a></li>
        </ul>
    </div>
    <div id="header2">
        <img class="header2" src="img/Batik.jpg">
        <div id="wrapper">
            <h2><span class="bracket"> </span>To Do List <span class="bracket"> </span></h2>
            <form>
                <input type="text" name="itemName" />
            </form>

            <div id="button">Add</div>
            <br />
            <ol></ol>
        </div>
    </div>
    <header>
        <h2 class="judul">Batik Indonesia</h2>
    </header>

    <section>
        <div class="kiri">
            <div class="kategori">
                <h2>
                    <p>Batik Indonesia </p>
                </h2>
                </p>
                <table border="1" bgcolor="#bc9d64">

                    <tr>
                        <th>No</th>
                        <th>Asal Daerah</th>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Batik Sumatera</td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Batik Sulawesi</td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Batik Maluku</td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Batik Papua</td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Batik Kalimantan</td>

                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Batik Jawa</td>

                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Batik Lombok</td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Batik Nusa Tenggara Timur</td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Batik Nusa Tenggara Barat</td>

                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Batik Alor</td>

                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Batik Timur</td>

                    </tr>

                </table>
            </div>
        </div>

        @yield('sidebar-tengah')

        <div class="kanan">
            <p>
            <div id="isi">
                <div class="isiposting">
                    <form>
                        <input class="searchq" type="text" placeholder="Cari..." required>
                    </form>
                    <!--menampilkan gambar-->
                    <h1>
                        <p>Batik Populer
                    </h1>
                    </p><br>
                    <img src="img/batikjawa.jpg" class="gambardepan">
                    <h2>Batik Jawa</h2>

                    Batik merupakan salah satu warisan budaya asli Indonesia yang memiliki berbagai macam varian. Untuk
                    membedakannya asalnya, apakah batik Jawa Barat atau jenis lain, kamu bisa melihatnya dari
                    motif-motifnya yang cerah. Ada beberapa motif batik Jawa Barat
                    yang bisa kamu koleksi, ini diantaranya... Bahkan kalau Anda membaca sen<a
                        href="https://review.bukalapak.com/fashion/mengenal-5-jenis-batik-asal-jawa-barat-yang-kaya-warna-cerah-1854"
                        target="_blank">
                        Baca selengkapnya >> <br>
                    </a>
                </div>
                <br><br>
                <div class="isiposting">
                    <!--menampilkan gambar-->
                    <img src="img/batikkalimantan.jpg" class="gambardepan">
                    <h2>Batik Kalimantan</h2>

                    Batik Kalimantan adalah pakaian Batik khas yang berasal dari pulau kalimantan juga mempunyai batik
                    yang di-hasilkan dari teknik rintang lilin (wax resist). Namun menyebut batik Kalimantan maka sering
                    dikacaukan dengan kain tritik jum putan ataupun sasirangan,
                    padahal secara teknis maupun tapak motif yang dihasilkan pun berbeda...
                    <a href="https://id.wikipedia.org/wiki/Batik_Kalimantan#:~:text=Secara%20umum%20batik%20Kalimantan%20memiliki,beragam%20dan%20motif%20lebih%20halus."
                        target="_blank">
                        Baca selengkapnya
                    </a>
                </div>
                </br>
                </br>
                <br><br>
                <div class="isiposting">
                    <!--menampilkan gambar-->
                    <img src="img/batikbali.jpg" class="gambardepan">
                    <h2>Batik Bali</h2>
                    <br> Batik Bali merupakan hasil penyebaran Batik dari Pulau Jawa. Bali mempunyai potensi yang besar
                    sebagai tempat bertumbuh dan berkembangnya batik, karena masyarakat Bali diketahui secara luas
                    mempunyai kepandaian yang tinggi
                    dalam olah seni. Batik di Bali dibuat untuk berbagai keperluan sandang termasuk dalam upacara adat
                    ritual keagamaan, maupun untuk Kehidupan umum sehari-hari, serta juga memenuhi kebutuhan wisatawan
                    sebagai cinderamata.
                    <a href="https://id.wikipedia.org/wiki/Batik_Bali" target="_blank">
                        Baca selengkapnya
                    </a>
                </div>
                </br>
                </br>
            </div>
            </p>
        </div>




    </section>
    <footer>
        <div id="runningtext">
            <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();"
                direction="left">
                <img src="img/bendera.gif" class="gambargif">
                <h2>Praktikum Modul 2 Pemrograman Website , R.Aldien Prayoga/201910370311413
                    <h2>
            </marquee>
        </div>
    </footer>

</body>

</html>
