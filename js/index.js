const button1 = document.querySelector('#number_1');
const button2 = document.querySelector('#number_2');
const button3 = document.querySelector('#number_3');
const button4 = document.querySelector('#number_4');
const button5 = document.querySelector('#number_5');
const button6 = document.querySelector('#number_6');
const button7 = document.querySelector('#number_7');
const button8 = document.querySelector('#number_8');
const button9 = document.querySelector('#number_9');

let contents =['#number_description_1','#number_description_2','#number_description_3','#number_description_4','#number_description_5','#number_description_6','#number_description_7','#number_description_8','#number_description_9']
// console.log(contents.length);
button1.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_1'
    $(div_alert).show();
});
button2.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_2'
    $(div_alert).show();
});
button3.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_3'
    $(div_alert).show();
});
button4.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_4'
    $(div_alert).show();
});
button5.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_5'
    $(div_alert).show();
});
button6.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_6'
    $(div_alert).show();
});
button7.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_7'
    $(div_alert).show();
});
button8.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_8'
    $(div_alert).show();
});
button9.addEventListener("click", () => {
    for (var i = 0; i < contents.length; i++) {
        hide = contents[i];
        console.log(hide);
        $(hide).hide()
    }
    div_alert = '#number_description_9'
    $(div_alert).show();
});