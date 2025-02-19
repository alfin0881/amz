let tombolTidak = document.getElementById("tombolTidak");
let tombolYa = document.getElementById("tombolYa");
let listKalimat = ["Coba Lagi", 
"Semoga harimu error terus", 
"You made a joke and everyone burst into laughter", 
"What is surprise!!",
"KLIK YA!!!🗣️",
"i was laughing so hard",
"Ga capek?",
"404 not found",
];

let kalimat = document.getElementById("kalimat");
let gambar = document.getElementById("gambar");
function tidakDitekan() {
    kalimatRandom = Math.floor(Math.random() * listKalimat.length);
    kalimat.innerHTML = listKalimat[Math.floor(Math.random() * listKalimat.length)];
    tombolTidak.style.position = "absolute";

    let angkaRandom = Math.floor(
        Math.random() * document.documentElement.clientWidth
    );
    
    let angkaRandom2 = Math.floor(
        Math.random() * document.documentElement.clientHeight
    );

    tombolTidak.style.left = angkaRandom + "px";
    tombolTidak.style.top = angkaRandom2 + "px";

}
function yaDitekan() {
    kalimat.innerHTML = "❤️Makasih Ya \^o^/❤️, https://github.com/alfin0881/amz";
    gambar.src = "asdf/happy.gif";
    tombolYa.style.visibility = "hidden";
    tombolTidak.style.visibility = "hidden";
}