
/*  ==========================================
    TEST IMAGE
* ========================================== */
function testFunctiontype14(imgsrc){
    console.log(imgsrc.src);
    $('#image-area-result').empty();
    $('#img--container').empty();
    $('#img--containerx').empty();

    $($.parseHTML('<img>')).attr('src', imgsrc.src).appendTo('#img--containerx');
    $($.parseHTML('<img>')).attr({'src' : imgsrc.src, 'id' : 'hasFilename'}).appendTo('#img--container');
   
    loadURLToInputFiledtype14(imgsrc.src);
  
  }
  
  /*  ==========================================
      LOADED URL TO INPUT FILe
  * ========================================== */
  
  function loadURLToInputFiledtype14(url){
    getImgURLtype14(url, (imgBlob)=>{
      
      let fileName = 'hasFilename.jpg'
      let file = new File([imgBlob], fileName,{type:"image/jpeg", lastModified:new Date().getTime()}, 'utf-8');
      let container = new DataTransfer(); 
      container.items.add(file);
      document.querySelector('#img').files = container.files;
      
    })
  }
  // xmlHTTP return blob respond
  function getImgURLtype14(url, callback){
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        callback(xhr.response);
    };
    xhr.open('GET', url);
    xhr.responseType = 'blob';
    xhr.send();
  }
/*  ==========================================
      LOADED END URL TO INPUT FILe
  * ========================================== */


const couleur = ["Blue", "Red", "Purple", "Sienna", "Navy", "Maroon"];

// Hàm thiết lập cấu hình khung Canvas, chữ và độ dày đường kẻ
function setupCanvas(canvas, canvasBorder, context, contextFont, contextLineWidth) {
    canvas.style.border = canvasBorder; // '0px'
    context.font = contextFont; // "10px Arial"
    context.lineWidth = contextLineWidth; // 2
}

// Hàm thiết lập màu sắc
function color(color_value, context) {
    context.strokeStyle = color_value;
    context.fillStyle = color_value;
}

// Hàm vẽ khung
function draw_frame(text, context, x1, x2, width, height, colour, textSize) {
    context.beginPath();
    color(colour, context);
    context.fillRect(x1 - context.lineWidth/2, x2 - textSize - context.lineWidth/2, context.measureText(text).width + context.lineWidth, textSize + context.lineWidth/2);
    context.strokeRect(x1, x2, width, height);
    context.fillStyle = "white";
    context.fillText(text, x1, x2 - context.lineWidth/2);
    context.closePath();
}

//Loading wait to predict
$(document).on({
    ajaxStart: function() { 
        var spinner = "<img id='z' src='https://media.giphy.com/media/W8AYJPPzRiP6w/giphy.gif' alt='loading...' />";
        $("#loadd").html(spinner)
        },
     ajaxStop: function() { 
        $("#loadd").empty();
      }    
});

// Hàm xử lý chính cho việc truy xuất data từ response
function predsubmit() {
    console.log('ggg');
    var form = new FormData();
    var images = $('#img')[0].files;

    // Truy xuất query: input[type='file']
    $.each(images, function(i, file) {
        form.append('img', file);
    });

    $.ajax({
        url: 'https://typefour.greenfield-8e81c33b.southeastasia.azurecontainerapps.io',
        data: form,
        datatype: 'json',
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data){

            var newCanv = document.createElement('canvas');
            var newCtx = newCanv.getContext("2d");
            

		// Chỉnh kích thước chữ
            var textSize = 30;
            
            for (var i = 0; i < images.length; i++) {
                
                
                    
                    var img = document.getElementById(images[i].name.split('.')[0]);
                    
                    newCanv.setAttribute("width", img.clientWidth);
                    newCanv.setAttribute("height", img.clientHeight);
                    newCtx.drawImage(img, 0, 0);
                    setupCanvas(newCanv, '0px', newCtx, textSize + "px Arial", 5);
                    
                    var lenList = data[images[i].name.split('.')[0]].length;
                    
                    for(var j = 0; j < lenList; j++) {

                        var para = data[images[i].name.split('.')[0]][j];
                        draw_frame(
                            para["predict"],
                            newCtx,
                            para["coordinates"][0],
                            para["coordinates"][1],
                            para["coordinates"][2]-150,
                            para["coordinates"][3]-150,
                            couleur[j],
                            textSize
                        );

                    }

                    var dataURL = newCanv.toDataURL("image/jpeg", 1.0);
                    console.log(dataURL);
                    $($.parseHTML('<img>')).attr({'src' : dataURL}).appendTo('#image-area-result');

                    $.post("/saveCanvas", { imgBase64: dataURL, imgName: images[i].name }, function(data, success) {
                        console.log(success);
                    });
                    
                }                      
            
        },
        error: function(err){
            console.log(err);
        }
    });
    
    
    
};


    // Multiple images preview in browser
    function imagesPreview(input) {

        console.log("im in");

        if (input.files) {
            console.log("wow");
            $('#image-area-result').empty();
            $('#img--container').empty();
            $('#img--containerx').empty();

            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                
                var count = 0;
                var reader = new FileReader();

                reader.onload = function(event) {
                    
                    // //for aws feedback
                    $('#boundingzone')
                    .attr('src', event.target.result);
                    $('#filex')
                    .attr('value', event.target.result);
                    // //end aws feedback
                    
                    $($.parseHTML('<img>')).attr({'src' : event.target.result, 'id' : input.files[count].name.split(".")[0]}).appendTo('#img--container');
                    //cái img--containerx này để kiểng ko có tác dụng
                    $($.parseHTML('<img>')).attr({'src' : event.target.result, 'id' : "wrong"+input.files[count].name.split(".")[0]}).appendTo('#img--containerx');
                  

                    if(count < filesAmount - 1) { count += 1; }
                    else { count = 0; }

                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };































// /*=============================14 LOẠI BỆNH PHỔI===============================*/

// const couleur = ["Blue", "Red", "Purple", "Sienna", "Navy", "Maroon"];

// // Hàm thiết lập cấu hình khung Canvas, chữ và độ dày đường kẻ
// function setupCanvas(canvas, canvasBorder, context, contextFont, contextLineWidth) {
//     canvas.style.border = canvasBorder; // '0px'
//     context.font = contextFont; // "10px Arial"
//     context.lineWidth = contextLineWidth; // 2
// }

// // Hàm thiết lập màu sắc
// function color(color_value, context) {
//     context.strokeStyle = color_value;
//     context.fillStyle = color_value;
// }

// // Hàm vẽ khung
// function draw_frame(text, context, x1, x2, width, height, colour, textSize) {
//     context.beginPath();
//     color(colour, context);
//     context.fillRect(x1 - context.lineWidth/2, x2 - textSize - context.lineWidth/2, context.measureText(text).width + context.lineWidth, textSize + context.lineWidth/2);
//     context.strokeRect(x1, x2, width, height);
//     context.fillStyle = "white";
//     context.fillText(text, x1, x2 - context.lineWidth/2);
//     context.closePath();
// }

// // Hàm xử lý chính cho việc truy xuất data từ response
// $('#pred--submit').click(function (e) {
//     var form = new FormData();
//     var images = $('#img')[0].files;

//     // Truy xuất query: input[type='file']
//     $.each(images, function(i, file) {
//         form.append('img', file);
//     });

//     $.ajax({
//         url: 'http://127.0.0.1:8080',
//         data: form,
//         datatype: 'json',
//         processData: false,
//         contentType: false,
//         type: 'POST',
//         success: function(data){

//             var newCanv = document.createElement('canvas');
//             var newCtx = newCanv.getContext("2d");
            

// 		// Chỉnh kích thước chữ
//             var textSize = 30;

//             var warning = "";
            
//             for (var i = 0; i < images.length; i++) {
                
//                 // if (data[images[i].name.split('.')[0]][0]["message"] == "the file format is invalid") {
//                 //     //
//                 //     warning = images[i].name + ", ";
//                 // }
//                 // else {
                    
//                     var img = document.getElementById(images[i].name.split('.')[0]);
                    
//                     newCanv.setAttribute("width", img.clientWidth);
//                     newCanv.setAttribute("height", img.clientHeight);
//                     newCtx.drawImage(img, 0, 0);
//                     setupCanvas(newCanv, '0px', newCtx, textSize + "px Arial", 5);
                    
//                     var lenList = data[images[i].name.split('.')[0]].length;
                    
//                     for(var j = 0; j < lenList; j++) {

//                         var para = data[images[i].name.split('.')[0]][j];
//                         draw_frame(
//                             para["name"],
//                             newCtx,
//                             para["coordinates"][0],
//                             para["coordinates"][1],
//                             para["coordinates"][2]-150,
//                             para["coordinates"][3]-150,
//                             couleur[j],
//                             textSize
//                         );

//                     }

//                     var dataURL = newCanv.toDataURL("image/jpeg", 1.0);
//                     $.post("/saveCanvas", { imgBase64: dataURL, imgName: images[i].name }, function(data, success) {
//                         console.log(success);
//                     });
                    
//                  }
                
//             // }
            
//             if(warning != "") {
//                 document.getElementById('warning--notice').innerText = warning + "... are not allowed!" 
//             }
            
//         },
//         error: function(err){
//             console.log(err);
//         }
//     });
    
//     e.preventDefault();
    
// });

// /*  ==========================================
//  SHOW UPLOADED IMAGE
// * ========================================== */
    
//     // Multiple images preview in browser
// function readURL2(input, placeToInsertImagePreview) {

//         if (input.files) {

//             $(placeToInsertImagePreview).empty();

//             var filesAmount = input.files.length;

//             for (i = 0; i < filesAmount; i++) {
                
//                 var count = 0;
//                 var reader = new FileReader();

//                 reader.onload = function(event) {
                    
//                     $($.parseHTML('<img>')).attr({'src' : event.target.result, 'id' : input.files[count].name.split(".")[0]}).appendTo(placeToInsertImagePreview);
//                     if(count < filesAmount - 1) { count += 1; }
//                     else { count = 0; }

//                 }

//                 reader.readAsDataURL(input.files[i]);
//             }
//         }

// };
//     // Để ý class img--container
