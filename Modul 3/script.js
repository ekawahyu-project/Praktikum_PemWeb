function ambilDataForm() {
    var form = document.getElementById("formEkskul");
    var nama = form.nama.value;
    var nis = form.nis.value;
    var kelas = form.kelas.value;
    var tanggalLahir = form.tanggal_lahir.value;
    var jenisKelaminChecked = document.querySelector('input[name="jenis_kelamin"]:checked');
    var jenisKelamin = jenisKelaminChecked ? jenisKelaminChecked.value : "-";
    var ekskulChecked = document.querySelectorAll('input[name="ekskul"]:checked');
    var ekskul = [];
    for (var i = 0; i < ekskulChecked.length; i++) {
        ekskul.push(ekskulChecked[i].value);
    }

    var email = form.email.value;
    var telepon = form.telepon.value;

    return {
        nama: nama,
        nis: nis,
        kelas: kelas,
        tanggalLahir: tanggalLahir,
        jenisKelamin: jenisKelamin,
        ekskul: ekskul,
        email: email,
        telepon: telepon
    };
}

function buatKartuAnggota(data) {
    var baris = [
        ["Nama", data.nama],
        ["NIS", data.nis],
        ["Kelas", data.kelas],
        ["Tanggal Lahir", data.tanggalLahir],
        ["Jenis Kelamin", data.jenisKelamin],
        ["Ekstrakurikuler", data.ekskul.length ? data.ekskul.join(", ") : "-"],
        ["Email", data.email],
        ["Telepon", data.telepon]
    ];

    var rows = baris.map(function (b) {
        return '<tr><td class="w-40 font-semibold text-slate-600 py-1 align-top">' + b[0] +
               '</td><td class="py-1 text-slate-800">' + b[1] + '</td></tr>';
    }).join("");

    document.getElementById("kartuAnggota").innerHTML =
        '<div class="bg-white p-6 rounded-xl shadow-md">' +
        '<h2 class="text-lg font-bold text-slate-800 border-b border-slate-300 pb-2 mb-3">Kartu Anggota Ekstrakurikuler</h2>' +
        '<table class="w-full text-sm">' + rows + '</table></div>';
}

document.getElementById("formEkskul").addEventListener("submit", function (e) {
    e.preventDefault();

    var data = ambilDataForm();

    if (data.nama.trim() === "") {
        alert("Nama lengkap wajib diisi!");
        return;
    }

    buatKartuAnggota(data);
});