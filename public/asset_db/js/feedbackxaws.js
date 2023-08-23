function readURLX(input) {
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#boundingzone')
                .attr('src', e.target.result);
            $('#filex')
            .attr('value', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

    document.querySelector('crowd-form').onsubmit = function(e) {
        const boundingBoxes = document.querySelector('crowd-bounding-box').value.boundingBoxes || document.querySelector('crowd-bounding-box')._submittableValue.boundingBoxes;
        const inputImageProperties = document.querySelector('crowd-bounding-box').value.inputImageProperties || document.querySelector('crowd-bounding-box')._submittableValue.inputImageProperties;
        
        const myJSONbox = JSON.stringify(boundingBoxes);
        const myJSONsize = JSON.stringify(inputImageProperties);

        $('#boundingx')
        .attr('value', myJSONbox);
        $('#sizex')
        .attr('value', myJSONsize);

        // var person = JSON.parse(myJSON);
        // console.log(person);
        // $($.parseHTML('<p>')).text(inputImageProperties.width).appendTo('#buitruonglinh');
        // $($.parseHTML('<p>')).text(inputImageProperties.height).appendTo('#buitruonglinh');
        // for (var i = 0; i < boundingBoxes.length; i++) {
        //     $($.parseHTML('<p>')).text(boundingBoxes[i].label).appendTo('#buitruonglinh');
        //     $($.parseHTML('<p>')).text(boundingBoxes[i].left).appendTo('#buitruonglinh');
        //     $($.parseHTML('<p>')).text(boundingBoxes[i].top).appendTo('#buitruonglinh');
        //     $($.parseHTML('<p>')).text(boundingBoxes[i].width).appendTo('#buitruonglinh');
        //     $($.parseHTML('<p>')).text(boundingBoxes[i].height).appendTo('#buitruonglinh');        
        // }

        saveallfeedback()
    }
  
    

    function saveallfeedback() {
        // event.preventDefault();
        var formData = $("#createFrom").serialize();
        console.log('save data');
        $.ajax({
            url: '/validate_feedback', // Replace with your Laravel route URL
            type: 'POST',
            data: formData,
            success: function(response) {
                // Handle the successful response
                console.log("success!");
                // You can update the UI or perform any other actions here
            },
            error: function(xhr) {
                // Handle the error
                console.log(xhr.responseText);
            }
        });
    }
    
        
