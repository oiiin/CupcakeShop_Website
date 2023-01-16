
var pname = document.getElementById("productName").innerHTML;
var pname2 = document.getElementById("productName2").innerHTML;
var pname3 = document.getElementById("productName3").innerHTML;
var pname4 = document.getElementById("productName4").innerHTML;
var pname5 = document.getElementById("productName5").innerHTML;
var pname6 = document.getElementById("productName6").innerHTML;
var pname7 = document.getElementById("productName7").innerHTML;
var pname8 = document.getElementById("productName8").innerHTML;
var pname9 = document.getElementById("productName9").innerHTML;
var pname10 = document.getElementById("productName10").innerHTML;
var pname11 = document.getElementById("productName11").innerHTML;
var pname12 = document.getElementById("productName12").innerHTML;
var pname13 = document.getElementById("productName13").innerHTML;
var pname14 = document.getElementById("productName14").innerHTML;
var pname15 = document.getElementById("productName15").innerHTML;
var pname16 = document.getElementById("productName16").innerHTML;

var msg = document.querySelector("#message");
var msg2 = document.querySelector("#message2");
var msg3 = document.querySelector("#message3");
var msg4 = document.querySelector("#message4");
var msg5 = document.querySelector("#message5");
var msg6 = document.querySelector("#message6");
var msg7 = document.querySelector("#message7");
var msg8 = document.querySelector("#message8");
var msg9 = document.querySelector("#message9");
var msg10 = document.querySelector("#message10");
var msg11 = document.querySelector("#message11");
var msg12 = document.querySelector("#message12");
var msg13 = document.querySelector("#message13");
var msg14 = document.querySelector("#message14");
var msg15 = document.querySelector("#message15");
var msg16 = document.querySelector("#message16");

var searchInput = document.querySelector("#search")


searchInput.addEventListener("input", (e) => {
    const value = e.target.value.toLowerCase()

    const isVisible = pname.toLowerCase().includes(value)
    const isVisible2 = pname2.toLowerCase().includes(value)
    const isVisible3 = pname3.toLowerCase().includes(value)
    const isVisible4 = pname4.toLowerCase().includes(value)
    const isVisible5 = pname5.toLowerCase().includes(value)
    const isVisible6 = pname6.toLowerCase().includes(value)
    const isVisible7 = pname7.toLowerCase().includes(value)
    const isVisible8 = pname8.toLowerCase().includes(value)
    const isVisible9 = pname9.toLowerCase().includes(value)
    const isVisible10 = pname10.toLowerCase().includes(value)
    const isVisible11 = pname11.toLowerCase().includes(value)
    const isVisible12 = pname12.toLowerCase().includes(value)
    const isVisible13 = pname13.toLowerCase().includes(value)
    const isVisible14 = pname14.toLowerCase().includes(value)
    const isVisible15 = pname15.toLowerCase().includes(value)
    const isVisible16 = pname16.toLowerCase().includes(value)

    msg.classList.toggle("hide", !isVisible)
    msg2.classList.toggle("hide", !isVisible2)
    msg3.classList.toggle("hide", !isVisible3)
    msg4.classList.toggle("hide", !isVisible4)  //removes hide if visible and adds hide if not visible
    msg5.classList.toggle("hide", !isVisible5)
    msg6.classList.toggle("hide", !isVisible6)
    msg7.classList.toggle("hide", !isVisible7)
    msg8.classList.toggle("hide", !isVisible8)
    msg9.classList.toggle("hide", !isVisible9)
    msg10.classList.toggle("hide", !isVisible10)
    msg11.classList.toggle("hide", !isVisible11)
    msg12.classList.toggle("hide", !isVisible12)
    msg13.classList.toggle("hide", !isVisible13)
    msg14.classList.toggle("hide", !isVisible14)
    msg15.classList.toggle("hide", !isVisible15)
    msg16.classList.toggle("hide", !isVisible16)
})



var change = document.querySelector("#allcupcakes");
var change2 = document.querySelector("#alltoppings");

var selectInput = document.querySelector("#select")

selectInput.addEventListener('change', (e) => {
    const value = e.target.value

    if (value == "CUPCAKES"){
        change2.classList.toggle("hide")
        change.classList.remove("hide")
    }
    else if (value == "TOPPINGS"){
        change.classList.toggle("hide")
        change2.classList.remove("hide")
    }
    else {
        change.classList.remove("hide")
        change2.classList.remove("hide")
    }
    
})
