
def kategorikan_produk(jenis, harga, penjualan):#-
    # kategori produk#-
    kategori = ""#-
    if jenis == "Elektronik":#-
        kategori += "Elektronik, "#-
    elif jenis == "Makanan":#-
        kategori += "Makanan, "#-
    elif jenis == "Pakaian":#-
        kategori += "Pakaian, "#-
    elif jenis == "Kosmetik":#-
        kategori += "Kosmetik, "#-
    elif jenis == "Minuman":#-
        kategori += "Minuman, "#-
# harga#-
    if harga > 100000:#-
        kategori += "Mahal, "#-
    elif harga >= 50000 and harga <= 100000:#-
        kategori += "Sedang, "#-
    elif harga <= 50000:#-
        kategori += "Murah, "#-
#-
# penjualan#-
    if penjualan >= 100:#-
        kategori += "Banyak Terjual, "#-
    elif penjualan >= 50 and penjualan <= 99:#-
        kategori += "Populer, "#-
    elif penjualan <= 50:#-
        kategori += "Normal, "#-
#-
    return kategori#-
# Contoh penggunaan
jenis = "Elektronik"
harga = 200000
penjualan = 55

kategori_produk= kategorikan_produk(jenis, harga, penjualan)

print("Kategori Produk:", kategori_produk)