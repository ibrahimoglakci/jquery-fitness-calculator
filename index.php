<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="İbrahim Oğlakcı / IG: @oglakci.dev / TW: @oglakci_dev / Github: @ibrahimoglakci">
    <meta name="publisher" content="İbrahim Oğlakcı / IG: @oglakci.dev / TW: @oglakci_dev / Github: @ibrahimoglakci">
    <meta name="description" content="Vücudunuzla ilgili öğrenmek istediğiniz çeşitli bilgileri hesaplayan araçlar">

    <title>Fitness Hesaplama Araçları</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section class="calculate-area">
        <div class="container-fluid h-100">
            <h2 class="p-3 text-center fw-bold" style="color: #191919; border-bottom: 1px solid #ddd;">Hesaplama Araçları</h2>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6" id="list-area">
                    <div class="boxes">

                        <div class="col-lg-4">
                            <a href="javascript:;" id="box-kitle">
                                <div class="box">
                                    <div class="box-img">
                                        <img src="assets/imgs/speedometer.png" alt="">
                                    </div>
                                    <div class="box-content">
                                        <div class="box-title">
                                            Vücut Kitle Endeksi
                                        </div>
                                        <div class="box-desc">
                                            Vücut kitle indeksi (BMI) hesaplamak için tıkla.
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <img src="assets/imgs/right-circle-fill.svg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:;" id="box-bazal">
                                <div class="box">
                                    <div class="box-img">
                                        <img src="assets/imgs/speedometer.png" alt="">
                                    </div>
                                    <div class="box-content">
                                        <div class="box-title">
                                            Bazal Metobolizma Hızı
                                        </div>
                                        <div class="box-desc">
                                            VBazal Metobolizma Hızı (BMR) hesaplamak için tıkla.
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <img src="assets/imgs/right-circle-fill.svg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <a href="javascript:;" id="box-yag">
                                <div class="box">
                                    <div class="box-img">
                                        <img src="assets/imgs/speedometer.png" alt="">
                                    </div>
                                    <div class="box-content">
                                        <div class="box-title">
                                            Vücut Yağ Oranı
                                        </div>
                                        <div class="box-desc">
                                            Vücut Yağ Oranı hesaplamak için tıkla.
                                        </div>
                                    </div>
                                    <div class="box-icon">
                                        <img src="assets/imgs/right-circle-fill.svg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6" id="kitle-area" style="display:none;">
                    <div class="container-fluid">
                        <div class="calc-area">
                            <div class="close-btn" id="close-btn">
                                <img src="assets/imgs/close.svg" alt="">
                            </div>
                            <div class="calc-container">
                                <div class="title">
                                    Vücut Kitle İndeksi (BMI)
                                </div>
                                <div class="calc-response" id="response-kitle" style="display:none;">
                                    <div class="box-title">
                                        <h2 class="p-2" id="response-kitle-status"></h2>
                                    </div>
                                    <div class="calc-response-img">
                                        <img src="assets/imgs/speedometer.png" alt="">
                                    </div>
                                    <div class="calc-response-box">

                                        <h5 class="response-title">VÜCUT KİTLE İNDEKSİNİZ</h5>
                                        <span class="response-text" id="response-kitle-value"></span>

                                    </div>

                                </div>
                                <div class="calc-form">
                                    <form id="kitle-form">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label for="index-boy">Boyunuz (cm)</label>
                                                        <input type="text" maxlength="3" placeholder="___(cm)" id="index-boy" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">

                                                        <label for="kilo">Kilonuz (kg)</label>
                                                        <input type="text" maxlength="3" placeholder="___(kg)" id="index-kilo" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <button type="submit" id="index-calc">Hesapla</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6" id="bazal-area" style="display:none;">
                    <div class="container-fluid">
                        <div class="calc-area">
                            <div class="close-btn" id="close-btn">
                                <img src="assets/imgs/close.svg" alt="">
                            </div>
                            <div class="calc-container">
                                <div class="title">
                                    BAZAL METABOLİZMA HIZI (BMR)
                                </div>
                                <div class="calc-response" id="response-bazal" style="display:none;">
                                    <div class="box-title">
                                        <h2 class="p-2" id="response-bazal-status"></h2>
                                    </div>
                                    <div class="calc-response-img">
                                        <img src="assets/imgs/speedometer.png" alt="">
                                    </div>
                                    <div class="calc-response-box">

                                        <h5 class="response-title">BAZAL METOBOLİZMA HIZINIZ</h5>
                                        <span class="response-text" id="response-bazal-value"></span>

                                    </div>

                                </div>
                                <div class="calc-form">
                                    <form id="bazal-form">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label for="bazal-boy">Boyunuz (cm)</label>
                                                        <input type="text" maxlength="3" placeholder="___(cm)" id="bazal-boy" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">

                                                        <label for="bazal-kilo">Kilonuz (kg)</label>
                                                        <input type="text" maxlength="3" placeholder="___(kg)" id="bazal-kilo" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">

                                                        <label for="bazal-yas">Yaş</label>
                                                        <input type="text" maxlength="2" placeholder="__" id="bazal-yas" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label>Cinsiyet</label>
                                                        <div class="gender-group" id="bazal-gender-group">

                                                            <div class="radio-group">
                                                                <input type="radio" id="bazal-men" value="male" name="gender" />
                                                                <label for="bazal-men" class="men-img">
                                                                    <img src="assets/imgs/men.svg" alt="">
                                                                </label>
                                                            </div>
                                                            <div class="radio-group">
                                                                <input type="radio" id="bazal-women" value="female" name="gender" />
                                                                <label for="bazal-women">
                                                                    <img src="assets/imgs/women.svg" alt="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <button type="submit" id="bazal-calc">Hesapla</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6" id="yag-area" style="display:none;">
                    <div class="container-fluid">
                        <div class="calc-area">
                            <div class="close-btn" id="close-btn">
                                <img src="assets/imgs/close.svg" alt="">
                            </div>
                            <div class="calc-container">
                                <div class="title" id="yag-title">
                                    VÜCUT YAĞ ORANI

                                </div>
                                <div class="calc-response" id="response-yag" style="display:none;">
                                    <div class="box-title">
                                        <h2 class="p-2" id="response-yag-status"></h2>
                                    </div>
                                    <div class="calc-response-img">
                                        <img src="assets/imgs/speedometer.png" alt="">
                                    </div>
                                    <div class="calc-response-box">

                                        <h5 class="response-title">VÜCUT YAĞ ORANINIZ</h5>
                                        <span class="response-text" id="response-yag-value"></span>

                                    </div>

                                </div>
                                <div class="calc-form">
                                    <form id="yag-form">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label for="yag-boy">Boyunuz (cm)</label>
                                                        <input type="text" maxlength="3" placeholder="___(cm)" id="yag-boy" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label for="yag-yas">Yaşınız</label>
                                                        <input type="text" maxlength="2" placeholder="__" id="yag-yas" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">

                                                        <label for="yag-boyun">Boyun Çevresi (cm)</label>
                                                        <input type="text" maxlength="3" placeholder="___(cm)" id="yag-boyun" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">

                                                        <label for="yag-bel">Bel Çevresi (cm)</label>
                                                        <input type="text" maxlength="3" placeholder="___(cm)" id="yag-bel" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">

                                                        <label for="yag-kalca">Kalça Çevresi (cm)</label>
                                                        <input type="text" maxlength="3" placeholder="___(cm)" id="yag-kalca" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <label>Cinsiyet</label>
                                                        <div class="gender-group" id="yag-gender-group">

                                                            <div class="radio-group">
                                                                <input type="radio" id="yag-men" value="male" name="gender" />
                                                                <label for="yag-men" class="men-img">
                                                                    <img src="assets/imgs/men.svg" alt="">
                                                                </label>
                                                            </div>
                                                            <div class="radio-group">
                                                                <input type="radio" id="yag-women" value="female" name="gender" />
                                                                <label for="yag-women">
                                                                    <img src="assets/imgs/women.svg" alt="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-item">
                                                        <button type="submit" id="yag-calc">Hesapla</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>