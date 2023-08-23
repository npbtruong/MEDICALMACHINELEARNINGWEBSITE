
/*=============================VIÊM PHỔI===============================*/
/*  ==========================================
    TEST IMAGE
* ========================================== */
function testFunction(imgsrc){
  console.log(imgsrc.src);
  $('#imageResult').attr('src', imgsrc.src);
 
  loadURLToInputFiled(imgsrc.src);

  
 
}
/*  ==========================================
    LOADED URL TO INPUT FILe
* ========================================== */

function loadURLToInputFiled(url){
  getImgURL(url, (imgBlob)=>{
    
    let fileName = 'hasFilename.jpg'
    let file = new File([imgBlob], fileName,{type:"image/jpeg", lastModified:new Date().getTime()}, 'utf-8');
    let container = new DataTransfer(); 
    container.items.add(file);
    document.querySelector('#upload').files = container.files;
    
  })
}
// xmlHTTP return blob respond
function getImgURL(url, callback){
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
      callback(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}


/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#imageResult')
              .attr('src', e.target.result);
          $('#fb_img').val(e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$(function () {
  $('#upload').on('change', function () {
      readURL(input);
  });
});



/*  ==========================================
  PREDICT CALL API
* ========================================== */

$("#uploadbtn").click(function () {

  var spinner = "<img id='z' src='https://media.giphy.com/media/W8AYJPPzRiP6w/giphy.gif' alt='loading...' />";
  document.getElementById('loaddpneu').innerHTML = spinner;

  submit()

  
  
});

async function submit() {
  const userfile = document.getElementById('formID')[0].files[0];
  var formdata = new FormData();
  formdata.append("img", userfile);

  var requestOptions = {
  method: 'POST',
  Headers:{
      'content-Type': 'application/x-www-form-urlencoded',
  },
  body: formdata,
  redirect: 'follow'
  };

  fetch("https://typex.greenfield-8e81c33b.southeastasia.azurecontainerapps.io/pneu", requestOptions)
  .then(function(response) {
    nigga = response.json();
    nigga.then(function(results) {
      console.log("Log");
      normal = results.NORMAL 
      cal_normal = Math.round(normal * 100)
      $("#normal").text(Math.round(cal_normal) + "%");
      move1()

      pneumonia = results.PNEUMONIA 
      cal_pneumonia = Math.round(pneumonia * 100)
      $("#pneumonia").text(Math.round(cal_pneumonia) + "%");
      move2()

      $('#loaddpneu').empty();
  });
    
  })
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

  
}


/*  ==========================================
  PROGRESS BAR
* ========================================== */
function move1() {
  let elem = document.getElementById("myBar1");   
  let width = 1;
  let id = setInterval(frame, 10);
  function frame() {
    if (width >= cal_normal) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
function move2() {
  let elem = document.getElementById("myBar2");   
  let width = 1;
  let id = setInterval(frame, 10);
  function frame() {
    if (width >= cal_pneumonia) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}



// /*=============================BỆNH PHỔI===============================*/

// function popup(){
//   console.log("Popup");
//   $('#coverr').addClass('activate-bg');
// }
// function popout(){
//   console.log("Popout");
//   $('#coverr').removeClass('activate-bg');
// }
// /*  ==========================================
//     SHOW UPLOADED IMAGE
// * ========================================== */
// function readURL2(input) {
//   if (input.files && input.files[0]) {
//       var reader2 = new FileReader();

//       reader2.onload = function (e) {
//           $('#imageResult2')
//               .attr('src', e.target.result);
//       };
//       reader2.readAsDataURL(input.files[0]);
//   }
// }





// /*  ==========================================
//   PREDICT CALL API
// * ========================================== */
// $("#predict-btn-ctscan").click(function () {
//   submit2()
// });


// async function submit2() {
  

//   const userfile = document.getElementById('formID2')[0].files[0];
//   var formdata = new FormData();
//   formdata.append("file", userfile);

//   var requestOptions = {
//   method: 'POST',
//   Headers:{
//       'content-Type': 'application/x-www-form-urlencoded',
//       'Accept': 'application/json'
//   },
//   body: formdata,
//   redirect: 'follow'
//   };

//   fetch("http://127.0.0.1:6868/", requestOptions)
//   .then(function(response) {
//     nigga = response.text();
//     console.log(nigga);
    
//     nigga.then(function(results) {
      
//       console.log('http://127.0.0.1:6868/'+ results);
//       document.getElementById("imageResult3").src = 'http://127.0.0.1:6868/'+ results;
//       document.getElementById("imageResult4").src = 'http://127.0.0.1:6868/'+ results;
      
//     });
    
//   })
//   .then(result => console.log(result))
//   .catch(error => console.log('error', error));
  
// }


// /*=============================BỆNH PHỔI===============================*/





/*=============================CTSCAN===============================*/

/*  ==========================================
    TEST IMAGE
* ========================================== */
function testFunctionct(imgsrc){
  console.log(imgsrc.src);
  $('#imageResultct').attr('src', imgsrc.src);
 
  loadURLToInputFiledct(imgsrc.src);

}

/*  ==========================================
    LOADED URL TO INPUT FILe
* ========================================== */

function loadURLToInputFiledct(url){
  getImgURLct(url, (imgBlob)=>{
    
    let fileName = 'hasFilename.jpg'
    let file = new File([imgBlob], fileName,{type:"image/jpeg", lastModified:new Date().getTime()}, 'utf-8');
    let container = new DataTransfer(); 
    container.items.add(file);
    document.querySelector('#uploadct').files = container.files;
    
  })
}
// xmlHTTP return blob respond
function getImgURLct(url, callback){
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
      callback(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}


/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURLct(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#imageResultct')
              .attr('src', e.target.result);
              $('#fb_imgct').val(e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$(function () {
  $('#uploadct').on('change', function () {
      readURLct(input);
  });
});



/*  ==========================================
  PREDICT CALL API
* ========================================== */

$("#predict-btn-ctscan").click(function () {

  var spinner = "<img id='z' src='https://media.giphy.com/media/W8AYJPPzRiP6w/giphy.gif' alt='loading...' />";
  document.getElementById('loaddct').innerHTML = spinner;

  submitct()

 
});

async function submitct() {
  const userfile = document.getElementById('formIDct')[0].files[0];
  var formdata = new FormData();
  formdata.append("img", userfile);

  var requestOptions = {
  method: 'POST',
  Headers:{
      'content-Type': 'application/x-www-form-urlencoded',
  },
  body: formdata,
  redirect: 'follow'
  };

  fetch("https://typex.greenfield-8e81c33b.southeastasia.azurecontainerapps.io/ctscan", requestOptions)
  .then(function(response) {
    nigga = response.json();
    nigga.then(function(results) {
      console.log("Log");

      begin = results["Bengin case"] 
      console.log(begin);
      cal_begin = Math.round(begin * 100)
      console.log(cal_begin);
      $("#beginct").text(Math.round(cal_begin) + "%");
      move1ct()

      pneumonia = results["Malignant case"]
      cal_pneumonia = Math.round(pneumonia * 100)
      $("#pneumoniact").text(Math.round(cal_pneumonia) + "%");
      move2ct()

      normal = results["Normal case"] 
      cal_normal = Math.round(normal * 100)
      $("#normalct").text(Math.round(cal_normal) + "%");
      move3ct()

       $('#loaddct').empty();
  });
    
  })
  .then(result => console.log(result))
  .catch(error => console.log('error', error));


}


/*  ==========================================
  PROGRESS BAR
* ========================================== */
function move1ct() {
  let elem = document.getElementById("myBar1ct");   
  let width = 1;
  let id = setInterval(frame, 10);
  function frame() {
    if (width >= cal_begin) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
function move2ct() {
  let elem = document.getElementById("myBar2ct");   
  let width = 1;
  let id = setInterval(frame, 10);
  function frame() {
    if (width >= cal_pneumonia) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
function move3ct() {
  let elem = document.getElementById("myBar3ct");   
  let width = 1;
  let id = setInterval(frame, 10);
  function frame() {
    if (width >= cal_normal) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}

























/*  ==========================================
  SHOW UPLOADED IMAGE NAME

  var input = document.getElementById( 'upload' );
  var infoArea = document.getElementById( 'upload-label' );
  
  input.addEventListener( 'change', showFileName );
  function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  
  }
* ========================================== */