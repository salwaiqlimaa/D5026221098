<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="operasi.js"></script>
    <script>
        function validateForm() {
            console.log("Ini baris ke 12");
            return false;//dimanapun ketemu return akan exit function
            //perintah di bawahnya tdk akan dijalankan
            console.log("Ini baris ke 14");
            return true;//dlm satu function bisa ada lebih dari 1 return
            console.log("Ini baris ke 16");
        }
        function validate() {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var nrp = document.getElementById("nrp");
            //ini  bisa juga biar cara lebih pendek
            //if ((bil1.value && bil2.value)== "")
            // if (bil1.value=="" && bil2.value== "") { //isiannya lupa ngga diisi
            //     alert("Bilangan 1 dan 2 harus diisi");
            //     return false;
            // } else if (bil1.value == "") { //isiannya lupa ngga diisi{
            //     alert("Bilangan 1 harus diisi");
            //     return false;
            // } else if (bil2.value == "") { //isiannya lupa ngga diisi
            //     alert("Bilangan 2 harus diisi");
            //     return false;
            // } else {
            //     return true;
            // }
            if (bil1.value == "") { //isiannya lupa ngga diisi{
                alert("Bilangan 1 harus diisi");
                bil1.focus();
                return false;
            }
            else if (bil2.value == "") { //isiannya lupa ngga diisi
                //variasi ga pake alert
                // alert("Bilangan 2 harus diisi");
                bil2.focus();
                return false;
            }
            else if (nrp.value == "") { //isiannya lupa ngga diisi
                //variasi ga pake alert
                // bil2.placeholder = "Mohon diisi nrp";
                alert("NRP harus diisi");
                return false;
            }
            else if (isNaN(nrp.value)) {
                alert("Harus diisi oleh angka");
                return false;
            }
            else if (nrp.value.length !== 10) {
                alert("NRP harus 10 angka");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
</head>

<body>
    <p></p>
    <div class="container">
        <!-- method post googlenya bakal error kalau get ke halaman google -->
        <form action="https://www.google.com" method="post" onsubmit="return validate();">
            <div class="form-group">
                <label for="bil1">Bilangan 1</label>
                <input type="number" id="bil1" class="form-control" placeholder="Harus diisi" name="bil1">
            </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="bil2">Bilangan 2</label>
            <input type="number" id="bil2" class="form-control" placeholder="Harus diisi" name="bil1">
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" id="nrp" class="form-control" placeholder="Harus diisi 10 angka" name="nrp">
        </div>
    </div>
        <!-- <input type="number" value="bill" class="form-control" placeholder="Harus diisi" name="bil1">
        <p></p>
        <input type="number" value="bill" class="form-control" placeholder="Harus diisi" name="bil2">
        <p></p> -->
        <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>