let tombolTidak = document.getElementById("tombolTidak");
let listKalimat = ["Coba Lagi", 
"Semoga harimu error terus", 
"You made a joke and everyone burst into laughter", 
"What is surprise!!",
"KLIK YA!!!🗣️",
"i was laughing so hard",
"Mungkin kamu lebih jago ",
"404 not found",
];
let kalimat = document.getElementById("kalimat");

function yaDitekan() {
    kalimat.innerHTML = "❤️Makasih Ya \^o^/❤️, https://github.com/alfin0881/amz";
}
function tidakDitekan() {
    kalimatRandom = Math.floor(Math.random() * listKalimat.length);
    kalimat.innerHTML = listKalimat[Math.floor(Math.random() * listKalimat.length)];
    tombolTidak.style.position = "absolute";
    let angkaRandom = Math.floor(Math.random() * 500);
    document.documentElement.clientWidth;
    let angkaRandom2 = Math.floor(Math.random() * 500);
    document.documentElement.clientHeight;
    tombolTidak.style.top = angkaRandom + "px";
    tombolTidak.style.right = angkaRandom2 + "px";
}