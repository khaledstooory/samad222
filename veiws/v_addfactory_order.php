<?php
$tablename="factories";
$DiespalySection=new Display($tablename);
$factories=$DiespalySection->getAllData();
$tablename="samad";
$DiespalySection=new Display($tablename);
$samad=$DiespalySection->getAllData();
?>
<form class="MainSettingForm add" action="" method="post">
    <h1>اضافة مصنع جديد</h1>
    <label> المصنع :</label>
    <select name="FID">
    <?php
    foreach($factories as $row)
    {
        echo '<option value="'.$row['FID'].'">'.$row['FName'].'</option>';
    }
    ?>
    <select>
    <label> السماد :</label>
    <select name="SID">
    <?php
    foreach($samad as $row)
    {
        echo '<option value="'.$row['SID'].'">'.$row['SName'].'</option>';
    }
    ?>
    <select>


    <div class="input-daterange">
        <label> تاريخ الطلب :</label>
		<input style="margin-left: auto;margin-right: auto;" type="text" name="Oder_date" id="start_date" required="required"  />
        <label> تاريخ الانتاج :</label>
        <input style="margin-left: auto;margin-right: auto;" type="text" name="production_date" id="end_date"  required="required" />    
    </div>
    <input class="btn-primary btn-lg" type="submit" name="submit" value="Add">
</form>