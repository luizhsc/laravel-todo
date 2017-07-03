function showResult(str) {
    if (str.length == 0) {
        document.getElementById("livesearch").innerHTML = "";
        document.getElementById("livesearch").style.border = "0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("livesearch").innerHTML = this.responseText;
            document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET", "livesearch.php?q=" + str, true);
    xmlhttp.send();
}

function search() {
    var query_value = $('input#search').val();
    $('b#search-string').html(query_value);
    if (query_value !== '') {
        $.ajax({
            type: "POST",
            url: "search.php",
            data: {query: query_value},
            cache: false,
            success: function (html) {
                //alert(html);
                $("ul#results").html(html);
            }
        });
    }
    return false;
}

$("input#search").live("keyup", function (e) {
    clearTimeout($.data(this, 'timer'));

    var search_string = $(this).val();

    if (search_string == '') {
        $("ul#results").fadeOut();
        $('h4#results-text').fadeOut();
    } else {
        $("ul#results").fadeIn();
        $('h4#results-text').fadeIn();
        $(this).data('timer', setTimeout(search, 100));
    }
    ;
});