angka1 = float(input("Masukkan angka pertama: "))
angka2 = float(input("Masukkan angka kedua: "))
operasi = input("Pilih operasi (+, -, *, /): ")

if operasi == "+":
    hasil = angka1 + angka2
elif operasi == "-":
    hasil = angka1 - angka2
elif operasi == "*":
    hasil = angka1 * angka2
elif operasi == "/":
    hasil = angka1 / angka2
else:
    hasil =" Tidak valid"

print(f"Hasil: {hasil}"  )