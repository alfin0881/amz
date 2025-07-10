// // // let usia = prompt("Berapa usia anda ?");
// // // alert("Usia anda adalah " + usia);

// // let nama = "Alpine"; //string
// // let usia = 20; //integer number
// // let tinggiBadan = 160.5; //double float
// // let beratBadan;
// // let pacar = 1;
// // beratBadan = "50";

// // // if (pacar == null) {
// // //   pacar = "pacar belum ada";
// // // } else {
// // //   pacar = "pacar sudah punya";
// // // }

// // switch (pacar) {
// //   case 1:
// //     pacar = "pacar punya 1 aja";
// //     break;
// //   case 2:
// //     pacar = "pacar punya 2 aja";
// //     break;
// //   case 3:
// //     pacar = "pacar punya 3 aja";
// //     break;
// //   default:
// //     pacar = "pacar belum ada";
// //     break;
// // }

// // let saldoAwal = 50000;
// // let saldoTambahan = 70000;
// // const hutang = 10000;
// // const saldoAkhir = saldoAwal + saldoTambahan - hutang;

// // alert(`Nama saya ${nama}, Usia saya ${usia} tahun, Tinggi badan saya ${tinggiBadan}cm, Berat badan saya ${beratBadan}kg, Pacar saya ${pacar}.`);
// // alert(`Saldo awal saya adalah Rp.${saldoAwal}, Saldo tambahan saya adalah Rp.${saldoTambahan} dan saldo akhir saya adalah Rp.${saldoAkhir}.`);

// let namaHewan = []; //array
// namaHewan[0] = "Kucing";
// namaHewan[1] = "Ayam";
// namaHewan[2] = "kambing";
// namaHewan[3] = "Kuda";
// namaHewan.shift(); //mengilangkan array yang pertama
// namaHewan.pop(); //mengilangkan array yang terakhir
// alert(namaHewan);

const hewan = ["kucing", "ayam", "kambing", "kuda"];
for (let i = 0; i <= hewan.length; i = i + 1) {
  console.log(hewan[i]);
}
