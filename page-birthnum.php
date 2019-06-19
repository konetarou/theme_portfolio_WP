<!-- birthnum.php -->
<?php get_header(); ?>

<script>
function calBirthNum(){
    var year = document.fm.input_year.value;
    var month = document.fm.input_month.value;
    var day = document.fm.input_day.value;

    var arr_year = year.split("").map( str => parseInt(str, 10) );
    var arr_month = month.split("").map( str => parseInt(str, 10) );
    var arr_day = day.split("").map( str => parseInt(str, 10) );

    var year_birthnum = arr_year.reduce((a,x) => a+=x,0);
    for(;year_birthnum>10 && year_birthnum%11!=0;){
        year_birthnum = Math.floor(year_birthnum/10) + year_birthnum%10;
    }

    var month_birthnum = arr_month.reduce((a,x) => a+=x,0);
    for(;month_birthnum>10 && month_birthnum%11!=0;){
        month_birthnum = Math.floor(month_birthnum/10) + month_birthnum%10;
    }

    var day_birthnum = arr_day.reduce((a,x) => a+=x,0);
    for(;day_birthnum>10 && day_birthnum%11!=0;){
        day_birthnum = Math.floor(day_birthnum/10) + day_birthnum%10;
    }

    var birthnum = year_birthnum + month_birthnum + day_birthnum;
    for(;birthnum>10 && birthnum%11!=0;){
        birthnum = Math.floor(birthnum/10) + birthnum%10;
    }

    alert(year + " / " + month + " / " + day + "\n誕生数は「" + birthnum + "」です。");
}
</script>

<!-- 誕生数 -->

<div class="card">
<h5 class="card-header">生年月日を入力</h5>
<div class="card-body">
    <form name="fm">
        <div class="form-inline center-block">

            <select type="form-control" id="year" name="input_year">
                <option>
                    <?php
                        for($i=1900;$i<=2013;$i++){
                            if($i==1900){echo "<option selected>" .$i ."</option>";}
                            else{echo "<option>" .$i ."</option>";}
                        }
                    ?>
                </option>
            </select>
            年　

            <select type="form-control" id="month" name="input_month">
                <option>
                    <?php
                        for($i=1;$i<=12;$i++){
                            if($i==1){echo "<option selected>" .$i ."</option>";}
                            else{echo "<option>" .$i ."</option>";}
                        }
                    ?>
                </option>
            </select>
            月　

            <select type="form-control" id="day" name="input_day">
                <option>
                    <?php
                        for($i=1;$i<=31;$i++){
                            if($i==1){echo "<option selected>" .$i ."</option>";}
                            else{echo "<option>" .$i ."</option>";}
                        }
                    ?>
                </option>
            </select>
            日　
            <button type="button" class="btn-primary" onclick="calBirthNum()">診断する</button>

        </div>
    </form>
<div></div></div>

<?php get_footer(); ?>