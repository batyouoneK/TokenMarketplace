<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Litecoin Paper Wallet Generator</title>
<meta name="description" content="A lightweight, client-side, reliable, fast, open-source universal paper wallet generator supporting almost every major cryptocurrency">
<meta name="keywords" content="minimal, reliable, fast, universal, paper, wallet, generator, offline, litecoin, ltc, cryptocurrency">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<center><body onload="generate()">
<div id="container"><br>
<div class="noprint"><button onclick="generate()">Generate</button>
    <div class="noprint"><button onclick="generate1()">Generate</button>
        <div class="noprint"><button onclick="generate2()">Generate</button>
            <div class="noprint"><button onclick="generate3()">Generate</button>
                <div class="noprint"><button onclick="generate4()">Generate</button>
                    <div class="noprint"><button onclick="generate5()">Generate</button>
                        <div class="noprint"><button onclick="generate6()">Generate</button>
                            <div class="noprint"><button onclick="generate7()">Generate</button>
                                <div class="noprint"><button onclick="generate8()">Generate</button>
                                    <div class="noprint"><button onclick="generate9()">Generate</button>
                                        <div class="noprint"><button onclick="generate10()">Generate</button>
                                            <div class="noprint"><button onclick="generate11()">Generate</button>
                                                <div class="noprint"><button onclick="generate12()">Generate</button>
                                                    <div class="noprint"><button onclick="generate13()">Generate</button>
                                                        <div class="noprint"><button onclick="generate14()">Generate</button>
                                                            <div class="noprint"><button onclick="generate15()">Generate</button>
                                                                <div class="noprint"><button onclick="generate16()">Generate</button>
                                                                    <div class="noprint"><button onclick="generate17()">Generate</button>
                                                                        <div class="noprint"><button onclick="generate18()">Generate</button>
                                                                            <div class="noprint"><button onclick="generate19()">Generate</button>
                                                                                <div class="noprint"><button onclick="generate20()">Generate</button>
                                                                                    <div class="noprint"><button onclick="generate21()">Generate</button>
                                                                                        <div class="noprint"><button onclick="generate22()">Generate</button>
                                                                                            <div class="noprint"><button onclick="generate23()">Generate</button>
                                                                                                <div class="noprint"><button onclick="generate24()">Generate</button>
                                                                                                    <div class="noprint"><button onclick="generate25()">Generate</button>
                                                                                                        <div class="noprint"><button onclick="generate26()">Generate</button>
                                                                                                            <div class="noprint"><button onclick="generate27()">Generate</button>
                                                                                                                 <div class="noprint"><button onclick="generate28()">Generate</button>
                                                                                                                     <div class="noprint"><button onclick="generate29()">Generate</button>
                                                                                                                         <div class="noprint"><button onclick="generate30()">Generate</button>
<br>
<br>


<table>
<tr><td><div id="public" style="float:left">Generating...</div><div id="secret" style="float:left">Generating...</div></td></tr>
<?php for($i = 1; $i <= 30; $i++){ ?>
<tr><td><div id="<?php echo "public" . $i;?>" style="float:left">Generating...</div><div id="<?php echo "secret" . $i;?>" style="float:left">Generating...</div></td></tr> <?php } ?>






<tr><td></td></tr>
<tr><td><div id="secret_qr"></div></td></tr>
</table>
</div>
<script src="js/bitcoinjs-lib.js"></script>
<script src="js/qrcode.js"></script>
<script>
    
function generate() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public").textContent = pubKey + ",";
document.getElementById("secret").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate1() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public1").textContent = pubKey + ",";
document.getElementById("secret1").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate2() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public2").textContent = pubKey + ",";
document.getElementById("secret2").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate3() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public3").textContent = pubKey + ",";
document.getElementById("secret3").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate4() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public4").textContent = pubKey + ",";
document.getElementById("secret4").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;


function generate5() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public5").textContent = pubKey + ",";
document.getElementById("secret5").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;


function generate6() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public6").textContent = pubKey + ",";
document.getElementById("secret6").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate7() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public7").textContent = pubKey + ",";
document.getElementById("secret7").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate8() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public8").textContent = pubKey + ",";
document.getElementById("secret8").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate9() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public9").textContent = pubKey + ",";
document.getElementById("secret9").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate10() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public10").textContent = pubKey + ",";
document.getElementById("secret10").textContent = privKey + ","; 
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate11() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public11").textContent = pubKey + ",";
document.getElementById("secret11").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate12() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public12").textContent = pubKey + ",";
document.getElementById("secret12").textContent = privKey + "," ;
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate13() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public13").textContent = pubKey + ",";
document.getElementById("secret13").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate14() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public14").textContent = pubKey + ",";
document.getElementById("secret14").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate14() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public14").textContent = pubKey + ",";
document.getElementById("secret14").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate15() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public15").textContent = pubKey + ",";
document.getElementById("secret15").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate16() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public16").textContent = pubKey + ",";
document.getElementById("secret16").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate17() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public17").textContent = pubKey + ",";
document.getElementById("secret17").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate18() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public18").textContent = pubKey + ",";
document.getElementById("secret18").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate19() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public19").textContent = pubKey + ",";
document.getElementById("secret19").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate20() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public20").textContent = pubKey + ",";
document.getElementById("secret20").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate21() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public21").textContent = pubKey + ",";
document.getElementById("secret21").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate22() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public22").textContent = pubKey + ",";
document.getElementById("secret22").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate23() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public23").textContent = pubKey + ",";
document.getElementById("secret23").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate24() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public24").textContent = pubKey + ",";
document.getElementById("secret24").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate25() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public25").textContent = pubKey + ",";
document.getElementById("secret25").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate26() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public26").textContent = pubKey + ",";
document.getElementById("secret26").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate27() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public27").textContent = pubKey + ",";
document.getElementById("secret27").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate28() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public28").textContent = pubKey + ",";
document.getElementById("secret28").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate29() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public29").textContent = pubKey + ",";
document.getElementById("secret29").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;

function generate30() {
const litecoin = bitcoin.networks.litecoin;
const keyPair = bitcoin.ECPair.makeRandom({network:litecoin});
const pubKey = keyPair.getAddress();
const privKey = keyPair.toWIF();
document.getElementById("public30").textContent = pubKey + ",";
document.getElementById("secret30").textContent = privKey + ",";
document.getElementById("public_qr").textContent = "";
document.getElementById("secret_qr").textContent = "";
new QRCode(document.getElementById("public_qr"), {text: pubKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});
new QRCode(document.getElementById("secret_qr"), {text: privKey, width: 128, height: 128, correctLevel : QRCode.CorrectLevel.H});}
document.getElementById("update").textContent = "Latest update: " + document.lastModified;
</script>
</body>  </center>
</html>
