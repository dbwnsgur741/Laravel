

function cdate(obj) {
    console.log(obj.value);
    getagreement();
}

function cdate2(obj) {
    console.log(obj.value);
    getagreement();
}

function cdate3(obj) {
    console.log(obj.value);
    getagreement();
}

function getagreement() {
    var cdate1 = document.getElementById('c_date').value; // 계약일자
    var cdate2 = document.getElementById('c_date2').value; // 입금일자
    var cdate3 = document.getElementById('c_date3').value; // 약정기일
    var agreement = document.getElementById('agreement'); //약정기간

    if (cdate2 != '') {
        if (cdate3 == '') {
            return;
        }
        var firstDate = cdate3.split('-');
        var secondDate = cdate2.split('-');
        var firstObj = new Date(firstDate[0], Number(firstDate[1] - 1), firstDate[2]);
        var secondObj = new Date(secondDate[0], Number(secondDate[1] - 1), secondDate[2]);
        var day = (firstObj.getTime() - secondObj.getTime()) / 1000 / 60 / 60 / 24;
        agreement.value = day;
        $('.agreement').focus();
        getGoal(day);
    } else {
        if (cdate3 == '') {
            return;
        }
        var firstDate = cdate3.split('-');
        var secondDate = cdate1.split('-');
        var firstObj = new Date(firstDate[0], Number(firstDate[1] - 1), firstDate[2]);
        var secondObj = new Date(secondDate[0], Number(secondDate[1] - 1), secondDate[2]);
        var day = (firstObj.getTime() - secondObj.getTime()) / 1000 / 60 / 60 / 24;
        agreement.value = day;
        $('.agreement').focus();
        getGoal(day);
    }
}

function getGoal(day) {
    var price = $('#price').val(); // 투자금
    var p_goal = $('#p_goal').val(); // 목표수익률

    console.log(price);
    console.log(p_goal);

    if (price == '' || p_goal == '') {
        return;
    } else {

        const years = parseFloat(365);
        var goal_in = parseFloat(price) * parseFloat(p_goal) / 100 * parseFloat(day) / years; //목표 배당액
        var goal_out = parseFloat(price) + goal_in; // 목표상환액

        goal_in = String(goal_in);
        var _temp = goal_in.split('.');
        goal_in = _temp[0];

        goal_out = String(goal_out);
        var _temp = goal_out.split('.');
        goal_out = _temp[0];

        document.getElementById('goal_in').value = goal_in.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        document.getElementById('goal_out').value = goal_out.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        getInvenstDate();
    }
}

function getInvenstDate() {

    var cdate1 = document.getElementById('c_date').value; // 계약일자
    var cdate2 = document.getElementById('c_date2').value; // 입금일자
    var cdate4 = document.getElementById('c_date4').value; // 기준일(지급일자)
    var invest_date = document.getElementById('invest_date');

    if (cdate2 == "") {
        if (cdate1 == "") {
            return;
        }
        var firstDate = cdate4.split('-');
        var secondDate = cdate1.split('-');
        var firstObj = new Date(firstDate[0], Number(firstDate[1] - 1), firstDate[2]);
        var secondObj = new Date(secondDate[0], Number(secondDate[1] - 1), secondDate[2]);
        var day = (firstObj.getTime() - secondObj.getTime()) / 1000 / 60 / 60 / 24;
        invest_date.value = day;
        $('.invest_date').focus();
        get_price(day);
    } else {
        if (cdate4 == "") {
            return;
        }
        var firstDate = cdate4.split('-');
        var secondDate = cdate2.split('-');
        var firstObj = new Date(firstDate[0], Number(firstDate[1] - 1), firstDate[2]);
        var secondObj = new Date(secondDate[0], Number(secondDate[1] - 1), secondDate[2]);
        var day = (firstObj.getTime() - secondObj.getTime()) / 1000 / 60 / 60 / 24;
        invest_date.value = day;
        $('.invest_date').focus();
        get_price(day);
    }
}

function get_price(day) {

    // day는 투자기간

    var price = $('#price').val(); // 투자금
    var p_goal = $('#p_goal').val(); // 목표수익률


    if (price == '' || p_goal == '') {
        return;
    } else {

        const years = parseFloat(365);
        var _price = parseFloat(price) * parseFloat(p_goal) / 100 * parseFloat(day) / years; //지급배당액

        _price = String(_price);
        var _temp = _price.split('.');
        _price = _temp[0];

        console.log(_price);
        document.getElementById('m_price').value = _price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        get_price2(_price);
    }
}

function get_price2(_price) {
    var _price2 = document.getElementById('m_price2'); // 원천징수액
    var p_price = document.getElementById('p_price').value; // 원천징수율

    p_price = parseFloat(p_price) / 100; // 원천징수율
    temp = p_price * _price;
    temp = String(temp);
    var _temp = temp.split('.'); // 소수점 기준 앞 부분 가져오기
    temp = _temp[0];
    console.log(temp);
    _price2.value = temp.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    get_t_price(_price, temp);
}

function get_t_price(_price, temp) {
    var price = $('#price').val();
    var t_price = document.getElementById('t_price');

    console.log(_price);
    console.log(price);
    console.log(temp);

    var array = [price, _price, temp];
    var p_array = [];

    for (i = 0; i < array.length; i++) {
        console.log(array[i]);
        p_array.push(parseFloat(array[i]));
    }

    temp = p_array[0] + p_array[1] - p_array[2];
    t_price.value = temp.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function decodeUnicode(unicodeString) {
    var r = /\\u([\d\w]{4})/gi;
    unicodeString = unicodeString.replace(r, function(match, grp) {
        return String.fromCharCode(parseInt(grp, 16));
    });
    return unescape(unicodeString);
}

function invest_submit() {

    var param = $("form[name=user_input_form]").serialize();
    $.ajax({
        type: "POST",
        url: "php/liams_input.php",
        data: param

        ,
        success: function(data) {
            if (data.indexOf('Error:') == -1) {
                console.log(data);
                parent.$('#inv_iframe').css('display', 'none');
                //parent.window.location.href('http://forestlab.kr/veritas/liams.html');
                parent.document.location.reload();
            }
        },
        error: function(data) {
            alert("error");
        }
    });
}

function select_change(value, _id) {
    console.log(value);
    if (value == "직접입력") {
        console.log(_id);
        document.getElementById(_id).style.display = "block";
    } else {
        document.getElementById(_id).style.display = "none";

    }
}

function setModify()
{
    var check = $('.del_check');
    if (check.css('display') == "none"){
        check.show();
    }
    else{
        check.hide();
    }
}


