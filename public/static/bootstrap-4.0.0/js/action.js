$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row" style="margin: 0 0 0 0"><div class="col-md-10 "><input name="condition[' + (x-1) + ']" id="condition' +(x-1) + '" type="text" class="form-control condition " onkeyup="showMenhDe(this)" required></div><a href="#" class="remove_field btn btn-link col-md-2"><i class="material-icons">remove</i></a></div>'); //add input box <a href="#" class="remove_field ">X</a>
            $("#count-location").val(x);

        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
        var z               = $(".condition");
        for (var i = 0; i<=z.length;i++) {
            $(z[i]).attr("name", "condition["+(i+1) +"]");
            $(z[i]).attr("id", "condition"+(i+1));
        }

    })
});

$(document).ready(function() {
    var change_button = $("#changelocation");

    $(change_button).click(function(e){
        if ($("#count-location").val()==0) {
            var z               = $(".location");
            $("#count-location").val(z.length);
        } else {
            $("#count-location").val(0);
        }
    })
});

var selectedInput = "";

function showMenhDe(inputElement) {
    if (inputElement.value.length===0) {
        document.getElementById("list-menhde").lastElementChild.innerHTML = "";
        return
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            var node = document.createElement("DIV");

            document.getElementById("list-menhde").innerHTML = this.responseText;
            selectedInput = inputElement.id;

        }
    }
    xmlhttp.open("GET","them_luat.php?q="+inputElement.value,true);
    xmlhttp.send();
}

function chooseMenhde(element) {
    document.getElementById(selectedInput).value = element.innerHTML;
    document.getElementById("list-menhde").innerHTML = "";
}