
<form class="MainSettingForm add" action="" method="post">
    <h1>تعديل بيانات سماد</h1>
    <label> اسم السماد :</label>
    <input type="text" name="SName" value="<?php echo $recordData['SName']; ?>" >
    <label> نوع السماد :</label>
    <input type="text" name="Stype" value="<?php echo $recordData['Stype']; ?>" >
    <label> حالة السماد :</label>
    <input type="text" name="SStatus" value="<?php echo $recordData['SStatus']; ?>" >
    <label> الاستخدام :</label>
    <input type="text" name="howuse" value="<?php echo $recordData['howuse']; ?>" >
      <input type="hidden" name="id" value="<?php echo $recordData['FID']; ?>">
    <input class="btn-primary btn-lg" type="submit" name="submit" value="Edit">
</form>