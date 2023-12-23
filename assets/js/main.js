$(document).ready(() => {
    var boxKitle = $("#box-kitle");
    var boxBazal = $("#box-bazal");
    var boxYag = $("#box-yag");
    var kitleArea = $("#kitle-area");
    var bazalArea = $("#bazal-area");
    var yagArea = $("#yag-area");
    var closeBtn = $(".close-btn");

    boxKitle.on("click", () => {
        kitleArea.fadeOut();
        yagArea.fadeOut();
        bazalArea.fadeOut();

        kitleArea.fadeIn(500);
        setTimeout(() => {
            document.getElementById("kitle-area").scrollIntoView({ behavior: 'smooth' });

        }, 200);


    })

    boxBazal.on("click", () => {
        kitleArea.fadeOut();
        yagArea.fadeOut();
        bazalArea.fadeOut();

        bazalArea.fadeIn(500);
        setTimeout(() => {
            document.getElementById("bazal-area").scrollIntoView({ behavior: 'smooth' });

        }, 200);
    })

    boxYag.on("click", () => {
        kitleArea.fadeOut();
        yagArea.fadeOut();
        bazalArea.fadeOut();

        yagArea.fadeIn(500);
        setTimeout(() => {
            document.getElementById("yag-area").scrollIntoView({ behavior: 'smooth' });
        }, 200);
    })

    closeBtn.on("click", () => {
        kitleArea.fadeOut(500);
        yagArea.fadeOut(500);
        bazalArea.fadeOut(500);


    })


});

$("#kitle-form").on("submit", function (e) {
    e.preventDefault();
    var height = $("#index-boy").val();
    var weight = $("#index-kilo").val();
    var responseArea = $("#response-kitle");
    var responseStatus = $("#response-kitle-status");
    var responseValue = $("#response-kitle-value");

    if (!isNaN(height) && !isNaN(weight) && height > 0) {
        var bmi = calculateBMI(weight, height);
        responseArea.fadeIn(300);
        document.getElementById("kitle-area").scrollIntoView({ behavior: 'smooth' });
        if (bmi < 18.5) {
            responseStatus.text("Kilon İdeal Kilonun Altında");
            responseStatus.css({ "color": "#65B741" });
        } else if (bmi >= 18.5 && bmi < 24.9) {
            responseStatus.text("Kilon İdeal");
            responseStatus.css({ "color": "#0766AD" });
        } else if (bmi >= 25 && bmi < 29.9) {
            responseStatus.text("Kilon İdeal Kilonun Üzerinde");
            responseStatus.css({ "color": "#D71313" });
        } else {
            responseStatus.text("Kilon İdeal Kilonun Kilon İdeal Kilonun Çok Üzerinde");
            responseStatus.css({ "color": "#C70039" });
        }

        responseValue.text(bmi);
    }

});

$("#bazal-form").on("submit", function (e) {
    e.preventDefault();
    var height = $("#bazal-boy").val();
    var weight = $("#bazal-kilo").val();
    var yas = $("#bazal-yas").val();
    var cinsiyet = $("#bazal-gender-group input[type='radio']:checked").val();
    var responseArea = $("#response-bazal");
/*     var responseStatus = $("#response-bazal-status");
 */    var responseValue = $("#response-bazal-value");

    if (!isNaN(height) && !isNaN(weight) && height > 0) {
        var bmr = calculateBMR(cinsiyet, yas, height, weight);
        responseArea.fadeIn(300);
        document.getElementById("bazal-area").scrollIntoView({ behavior: 'smooth' });
        responseValue.text(bmr.toFixed(2) + " Kalori / Gün");
        /* if (bmr < 1200) {
            responseStatus.text("Çok Düşük BMR");
        } else if (bmr >= 1200 && bmr < 1500) {
           responseStatus.text("Düşük BMR");
        } else if (bmr >= 1500 && bmr < 1800) {
            responseStatus.text("Ortalama BMR");
        } else if (bmr >= 1800 && bmr < 2200) {
            responseStatus.text("Yüksek BMR");
        } else {
            responseStatus.text("Çok Yüksek BMR");
        } */

    }

});

$("#yag-form").on("submit", function (e) {
    e.preventDefault();
    var height = $("#yag-boy").val();
    var age = $("#yag-yas").val();
    var neckCircumference = $("#yag-boyun").val();
    var waistCircumference = $("#yag-bel").val();
    var hipCircumference = $("#yag-kalca").val();
    var gender = $("#yag-gender-group input[type='radio']:checked").val();
    var responseArea = $("#response-yag");
    var responseValue = $("#response-yag-value");

    if (!isNaN(height) && height > 0) {
        var bodyFatPercentage = calculateBodyFat(height, neckCircumference, waistCircumference, hipCircumference, gender, age);
        responseArea.fadeIn(300);
        document.getElementById("yag-title").scrollIntoView({ behavior: 'smooth' });
        responseValue.text(bodyFatPercentage.toFixed(2) + "%");
        console.log(bodyFatPercentage);

    }

});

function calculateBMI(weight, height) {
    var heightMeter = height / 100;
    var bmi = weight / (heightMeter * heightMeter)
    return bmi.toFixed(2);
}

function calculateBMR(gender, age, height, weight) {
    if (gender === "male") {
        return (10 * weight) + (6.25 * height) - (5 * age) + 5;
    } else if (gender === "female") {
        return (10 * weight) + (6.25 * height) - (5 * age) - 161;
    } else {
        return NaN;
    }
}

function calculateBodyFat(height, neckCircumference, waistCircumference, hipCircumference, gender, age) {
    if (gender === "male") {
        return 0.29288 * waistCircumference + 0.0005 * Math.pow(waistCircumference, 2) - 0.000128 * height * waistCircumference - 0.00000128 * Math.pow(height, 2) * waistCircumference - 0.00000348 * age + 0.000029 * Math.pow(age, 2) + 0.00004 * neckCircumference - 0.0005 * hipCircumference;
    } else if (gender === "female") {
        return 0.29669 * waistCircumference + 0.00043 * Math.pow(waistCircumference, 2) - 0.000128 * height * waistCircumference - 0.00000128 * Math.pow(height, 2) * waistCircumference - 0.00000348 * age + 0.000029 * Math.pow(age, 2) + 0.00004 * neckCircumference - 0.0005 * hipCircumference;
    } else {
        return NaN;
    }
}

$(document).ready(function () {
    $('.calc-form input[type="text"]').on('input', function () {
        $(this).val($(this).val().replace(/\D/g, ''));

        if ($(this).val().length > 3) {
            $(this).val($(this).val().slice(0, 3));
        }
    });
});