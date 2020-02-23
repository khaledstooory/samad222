<h3>المصانع</h3>
<!-- add new Hall -->
<h2><a href="?page=factory_orders&action=add">اضافة طلب جديد</a></h2>

<?php
if($_POST or @$_GET['action'])
{
    if(isset($_GET['action']) and $_GET['action']=="add")
    {
        include 'veiws/v_addfactory_order.php';
    }
    if(isset($_POST['submit']) && $_POST['submit']=="Add")
    {
        $newSEcData['FID'] = $_POST['FID'];
        $newSEcData['SID'] = $_POST['SID'];
        $newSEcData['Oder_date'] = $_POST['Oder_date'];
        $newSEcData['production_date'] = $_POST['production_date'];
        $tablename="factory_orders";
        try 
        {
            $addNewSEc=new add($newSEcData,$tablename);
            if($addNewSEc)
            {
                echo '<script type="text/javascript">
                 alert("تم الحفظ");history.go(-2)</script>';
            }
            
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }
    //delete
    if(isset($_GET['action']) and $_GET['action']=="delete")
    {
        try 
        {
            $id=$_GET['id'];
            $tablename="factory_orders";
            $DeleteSection=new delete($tablename);
            $DataDelete=$DeleteSection->deleteRecordById($id,'FOID');
            if($DataDelete)
            {
                echo '<script type="text/javascript">
                 alert("تم الحذف");history.go(-1)</script>';
            }
        } catch (Exception $ex) 
        {
            $ex->getMessage();
        }
    }
    //Edit view
    if(isset($_GET['action']) and $_GET['action']=="edit")
    {
        $id=$_GET['id'];
        $tablename="factory_orders";
        $editSection=new Display($tablename);
        $recordData=$editSection->getRecordById($id,'FOID');
        $editSection->close();
        include 'veiws/v_editfactory_order.php';
    }
    //Edit
    if(isset($_POST['submit']) && $_POST['submit']=="Edit")
    {
        $SecDataEdit['FID'] = $_POST['FID'];
        $SecDataEdit['SID'] = $_POST['SID'];
        $SecDataEdit['Oder_date'] = $_POST['Oder_date'];
        $SecDataEdit['production_date'] = $_POST['production_date'];
        $SecDataEdit['assent'] = $_POST['assent'];
         $SecDataEdit['note'] = $_POST['note'];
        try 
        {
           $tablename="factory_orders";    
            $id=$_GET['id'];

            $SecUpdate=new update($SecDataEdit,$tablename);
            $SecDataDiespaly=$SecUpdate->editdata($id,'FOID');
            $SecUpdate->close(); 
            if($SecDataDiespaly)
            {
                echo '<script type="text/javascript">
                 alert("تم التعديل");history.go(-1)</script>';
            }
        } catch (Exception $ex) 
        {
            $ex->getMessage();
        }
    }
	  // view
     if(isset($_GET['action']) and $_GET['action']=="view")
     {
         $id=$_GET['id'];
         $tablename="factory_orders";
         $editSection=new Display($tablename);
         $recordData=$editSection->getRecordById($id,'FOID');
         $editSection->close();
         include 'veiws/v_order.php';
     }
     //Edit
     if(isset($_POST['submit']) && $_POST['submit']=="حفظ")
     {
         $SecDataEdit['assent'] = $_POST['assent'];
         $SecDataEdit['note'] = $_POST['note'];
         try 
         {
            $tablename="factory_orders";    
             $id=$_GET['id'];
             $SecUpdate=new update($SecDataEdit,$tablename);
             $SecDataDiespaly=$SecUpdate->editdata($id,'FOID');
             $SecUpdate->close(); 
             if($SecDataDiespaly)
             {
                 echo '<script type="text/javascript">
                  alert("تمت العملية بنجاح");history.go(-1)</script>';
             }
         } catch (Exception $ex) 
         {
             $ex->getMessage();
         }
     }
}
 else 
{
    $tablename="factory_orders";
    $DiespalySection=new Display($tablename);
    $SecDataDiespaly=$DiespalySection->getAllData();
    include 'veiws/v_factory_orders.php';
}
?>