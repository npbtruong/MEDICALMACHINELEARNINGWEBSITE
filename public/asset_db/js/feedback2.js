var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d", { willReadFrequently: true });
canvas.style.border = '0px';

var width = canvas.width;
var height = canvas.height;

var curX, curY, prevX, prevY;
var hold = false;

let restore_array = [];
let indexTimeImage = -1;

let framewords_array;
var text = 15;
var textColor = "brown";
let oldTxt = "";
let w;
let img;
var CurImg;

//---------- Functions ---------- Functions ---------- Functions ---------- Functions ----------

$('#inputfeedback').on('change', function() {

    document.getElementsByClassName("img--container")[0].replaceChildren();

    var singleImage = $('#inputfeedback')[0].files;

    console.log(singleImage);
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    canvas.removeAttribute('width');
    canvas.removeAttribute('height');

    var reader = new FileReader();
    reader.onload = function(event) {
        $($.parseHTML('<img>')).attr({'src' : event.target.result, 'id' : singleImage[0].name.split(".")[0], 'class' : 'img-responsive'}).appendTo('div.img--container');
    }
    reader.readAsDataURL(singleImage[0]);

});

document.getElementById('img--feedback').addEventListener("click", function(e) {

    var singleImage = $('#inputfeedback')[0].files;
    
    if(singleImage.length != 0) {
        //
        CurImg = document.getElementById(singleImage[0].name.split(".")[0]);
    
        if(CurImg) {

            reset();
            
            canvas.setAttribute('width', CurImg.clientWidth);
            canvas.setAttribute('height', CurImg.clientHeight);

            ctx.drawImage(CurImg, 0, 0);
            setupCanvas(canvas, "0px solid black", ctx, "Arial", 5);
            color(textColor, ctx);

            width = canvas.width;
            height = canvas.height;
        }
        else {
            console.log('Có cái nịt!');
        }
    }
    else {
        console.log('Còn đúng cái nịt!');
    }

    document.getElementsByClassName("img--container")[0].replaceChildren();

});

window.addEventListener('load', (e)=>{

    framewords_array = [{ "prevX" : 0, "prevY" : 0, "text" : "", "restore_text": [] }];
    drawText();
    document.getElementById('msg').addEventListener('input', drawText);
    framewords_array.pop();

});

const drawText = function() {

    ctx.font = `${text}px Arial`
    
    ctx.textAlign = 'start'; //textAlign: center, left, right, end, start
    ctx.textBaseline = 'alphabetic'; //textBaseline: top, hanging, middle, bottom,ideographic, alphabetic
    ctx.direction = 'ltr'; //direction: ltr, rtl, inherit
    
    framewords_array[framewords_array.length - 1].text = document.getElementById('msg').value;

    if(oldTxt.length > framewords_array[framewords_array.length - 1].text.length) {
        if(framewords_array[framewords_array.length - 1]["restore_text"].length > 1) {
            //
            framewords_array[framewords_array.length - 1]["restore_text"].pop();
            ctx.putImageData(framewords_array[framewords_array.length - 1]["restore_text"][framewords_array[framewords_array.length - 1]["restore_text"].length - 1], 0, 0);

        }
        else {
            //
            framewords_array[framewords_array.length - 1]["restore_text"].pop();
            ctx.putImageData(restore_array[indexTimeImage], 0, 0);
        }
    }
    else {
        
        w = ctx.measureText(framewords_array[framewords_array.length - 1].text).width;
        //
        ctx.fillRect(prevX - ctx.lineWidth/2, prevY - ctx.lineWidth/2, w + ctx.lineWidth, 0 - text - ctx.lineWidth);
        color("white", ctx);
        ctx.fillText(framewords_array[framewords_array.length - 1].text, prevX, prevY - ctx.lineWidth - text/5);
        color(textColor, ctx);
        //
        framewords_array[framewords_array.length - 1]["restore_text"].push(ctx.getImageData(0, 0, width, height));
    }
    //
    oldTxt = framewords_array[framewords_array.length - 1].text;

};

//---------- Functions ---------- Functions ---------- Functions ---------- Functions ----------
function undo() {

    if (indexTimeImage <= 0) {
        reset();
    } else {

        restore_array.pop();
        indexTimeImage -= 1;
        ctx.putImageData(restore_array[indexTimeImage], 0, 0);

        framewords_array.pop();
        prevX = framewords_array[framewords_array.length - 1]["prevX"];
        prevY = framewords_array[framewords_array.length - 1]["prevY"];
        oldTxt = framewords_array[framewords_array.length - 1].text;
        //
        ctx.fillRect(prevX - ctx.lineWidth/2, prevY - ctx.lineWidth/2, ctx.measureText(oldTxt).width + ctx.lineWidth, 0 - text - ctx.lineWidth);
        color("white", ctx);
        ctx.fillText(framewords_array[framewords_array.length - 1].text, prevX, prevY - ctx.lineWidth - text/5);
        color(textColor, ctx);
        //
        document.getElementById('msg').value = framewords_array[framewords_array.length - 1].text;
    }

}

function reset() {

    ctx.clearRect(0, 0, canvas.width, canvas.height);
    indexTimeImage = -1;
    restore_array = [];
    framewords_array = [];
    document.getElementById('msg').value = "";

    ctx.drawImage(CurImg, 0, 0);

}

function rectangle() {
            
    canvas.onmousedown = function (e){
        img = ctx.getImageData(0, 0, width, height);
        prevX = e.pageX - canvas.offsetLeft;
        prevY = e.pageY - canvas.offsetTop;
        hold = true;
    };

    canvas.onmousemove = function (e){
        if (hold){
            ctx.putImageData(img, 0, 0);
            curX = e.pageX - canvas.offsetLeft - prevX;
            curY = e.pageY - canvas.offsetTop - prevY;
            ctx.strokeRect(prevX, prevY, curX, curY);         
        }
        console.log(curX);
        console.log(curY);
    };

    canvas.onmouseup = function(e){

        oldTxt = "";
        framewords_array.push({ "prevX" : prevX, "prevY" : prevY, "text" : "", "restore_text": [] });
        
        restore_array.push(ctx.getImageData(0, 0, width, height));
        indexTimeImage += 1;
        hold = false;
        
        document.getElementById('msg').value = framewords_array[framewords_array.length - 1].text;
    };

    canvas.onmouseout = function(e){
        if(hold) {

            oldTxt = "";
            framewords_array.push({ "prevX" : prevX, "prevY" : prevY, "text" : "", "restore_text": [] });
            
            restore_array.push(ctx.getImageData(0, 0, width, height));
            indexTimeImage += 1;
            hold = false;
            
            document.getElementById('msg').value = framewords_array[framewords_array.length - 1].text;
        }
    };
}


document.getElementById('img--download').addEventListener("click", function(e) {

    var my_img = document.querySelector('#myCanvas');
    var dataURL = my_img.toDataURL("image/png", 1.0);
    
    downloadImage(dataURL,'png');

});

// Download image
function downloadImage(data, filename = 'untitled.jpeg') {
    var a = document.createElement('a');
    a.href = data;
    a.download = filename;
    a.click();
}

function setupCanvas(canvas, canvasBorder = '0px', context, contextFont, contextLineWidth = 2) {
    canvas.style.border = canvasBorder;
    context.font = contextFont;
    context.lineWidth = contextLineWidth;
}

function color(color_value, context) {
    context.strokeStyle = color_value;
    context.fillStyle = color_value;
}