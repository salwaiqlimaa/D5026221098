<html>
    <head>
        <style>
            h2{
                color:rgb(255, 0, 0);
                text-align:center;
                text-decoration: underline;
            }
            .ratakanan{
                color:blueviolet;
            }
        </style>
    </head>

    <body>
        <!-- CSS dengan cara inline [biasanya khusus yang beda cuma ini aja]-->
        <h1 style="
            color:blue;
            text-align:center;
            text-decoration: line-through;
            ">Hallo apa kabar?</h1>
            <!-- CSS dengan cara inpage [khusus hanya halaman ini aja yang beda]-->
        <h2>Hallo apa kabar?</h2>
        <!-- CSS dengan cara external file [biasanya supaya 1 web seragam]-->
        <link rel="stylesheet" href="mystyle.css">
        <h3>Hallo apa kabar?</h3>
        <!-- syntax tdk bermanfaat [<div>a</div> dan <span></span> div bisa buat apply html] -->
        <div class="ratakanan kotakku1">Harga: Rp50.000,-</div>
        <div class="ratakanan" style="color: paleturquoise">Diskon besar</div>
    </body>
</html>