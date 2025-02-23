def pilih_kendaraan_transportasi(jarak,waktu,anggaran):
    if jarak < 100:
        return "Mobil"
    elif jarak >= 300 and jarak < 1000:
        if waktu == "Cukup" and anggaran <= 500000:
            return "Mobil"
        else:
            return "Kereta Api"
    else:
        return "Pesawat Terbang"

jarak = 800
waktu = "Cukup"
anggaran= 500000
kendaraan = pilih_kendaraan_transportasi(jarak,waktu,anggaran)
print("Pilih kendaraan transportasi:", kendaraan)
    