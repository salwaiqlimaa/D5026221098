function tambah(){
    var bill = document.getElementById("bil1");
    var bill2 = document.getElementById("bil2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value);
}
function kali(){
    var bill = document.getElementById("bil1");
    var bill2 = document.getElementById("bil2");
    var hasil = document.getElementById("hasil");

    hasil.innerHTML = bil1.value * bil2.value;
}