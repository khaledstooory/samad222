
<form class="MainSettingForm add" action="" method="post">
    <h1>اختر المصنع الطلوب</h1>
    <label> المصنع :</label>
    <select name="FID">
    <?php
    foreach($factories as $row)
    {
        echo '<option value="'.$row['FID'].'">'.$row['FName'].'</option>';
    }
    ?>
    
    <input class="btn-primary btn-lg" type="submit" name="submit" value="بحث">
</form>