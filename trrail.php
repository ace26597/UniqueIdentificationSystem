<?php
/*
    $output = 0;
    $result = 0;
    $dbdatabase = 'ace';
    $dbcon = mysql_connect("localhost","root","");  
    mysql_select_db($dbdatabase);  
   
function social1_NGO()
{
    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases='NGO'");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $avg_num_rows = ($num_rows1/$num_rows2)*100;
    echo "$avg_num_rows\n";
    return $avg_num_rows;
}
function social1_blood donation()
{
    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases='ASTHMA'");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $avg_num_rows = ($num_rows1/$num_rows2)*100;
    echo "<br>$avg_num_rows\n";
    return $avg_num_rows;
}
function social1_NSS()
{
    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases='BP'");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $avg_num_rows = ($num_rows1/$num_rows2)*100;
    echo "<br>$avg_num_rows<br>";
    return $avg_num_rows;
}
/*
function social1_NSS()
{
    $result = mysql_query("SELECT Diseases FROM medical_info where Diseases=$string");
    $num_rows1 = mysql_num_rows($result);
    $output = mysql_query("SELECT Diseases FROM medical_info");
    $num_rows2 = mysql_num_rows($output);

    $avg_num_rows = ($num_rows1/$num_rows2)*100;
    echo "$avg_num_rows\n";
}
*/
//social1_NGO();
//social1_blood donation();
//social1_NSS();

//$others = 100 blood donation (social1_NGO('BP')+social1_blood donation('ASTHMA')+social1_NSS('NGO'));
//echo  "<br> Other diseases: $others";


/*
function finance(){
    $result = mysql_query("SELECT bank_balance FROM financial_info");
    $num_rows = mysql_num_rows($result);
    $uid = 31001;
    $u=0;
    $v=0;
    $w=0;
    $x=0;
    $y=0;
    $z=0;
    $s=0;
    for($i=1;$i<=$num_rows;$i++){
        $a = mysql_query("SELECT bank_balance FROM financial_info where UID=$uid");
        $row = mysql_fetch_assoc($a);
        if($row['bank_balance'] < 40000){
            $u++;
        }else if($row['bank_balance'] < 80000){
            $v++;
        }else if($row['bank_balance'] < 120000){
            $w++;
        }else if($row['bank_balance'] < 160000){
            $x++;
        }else if($row['bank_balance'] < 200000){
            $y++;
        }else if($row['bank_balance'] < 300000){
            $z++;
        }else{
            $s++;
        }
        $uid++;
    }
    $avgu = ($u/$num_rows)*100;
    $avgv = ($v/$num_rows)*100;
    $avgw = ($w/$num_rows)*100;
    $avgx = ($x/$num_rows)*100;
    $avgy = ($y/$num_rows)*100;
    $avgz = ($z/$num_rows)*100;
    $avgs = ($s/$num_rows)*100;
    echo "$avgu <br> $avgv <br> $avgw <br> $avgx <br> $avgy <br> $avgz <br> $avgs <br> ";
    $total=($avgu+$avgv+$avgw+$avgx+$avgy+$avgz+$avgs);       
    
}
finance();
*/

include("dbconnectin.inc.php");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31001','RUTUJA BARDAPURKAR','rutujabardapurkar07@gmail.com','23','F','NRI','M','8793089180','5678')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31002','PRANAV BATWAL','prabatwaljb@gmail.com','30','M','NRI','M','9028607145','1234')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31003','ISHWARI BHADE','ishwarimbhade@gmail.com','26','F','NRI','M','8805464686','1525')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31004','PRACHI BHAGURKAR','psbhagurkar96@gmail.com','28','F','NRI','M','7028258313','1888')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31005','SHALAKA BODKE','bodkeshalaka@gmail.com','22','F','NRI','M','8888155123','1905')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31006','MITALI BUTALA','butalamitali@gmail.com','24','F','NRI','M','9595304433','1285')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31007','OMKAR	CHOUGALE','omkar2chougale@gmail.com','28','M','NRI','M','9766995602','1795')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31008','VIKRAM DAMASE','damasevikram@gmail.com','30','M','NRI','M','9527915668','1444')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31009','SHUBHAM DESHPANDE','deshpandeshubham97@gmail.com','30','M','NRI','M','9552927184','1323')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31010','ADITYA DESAI','desaiaditya9665@gmail.com','30','M','NRI','M','966585608','1585')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31011','SHREYAS DESHMUKH','deshmukh.shreyas049@gmail.com','30','M','NRI','M','7744006413','1425')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31012','SUSHANT DESHMUKH','sushant.dekh@gmail.com','30','M','NRI','M','8956463976','1985')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31013','ASMITA DHIWAR','asmitadhiwar22@gmail.com','26','F','NRI','M','9604571410','1747')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31014','SHARVARI GOKHALE','sherugokhale@gmail.com','25','F','NRI','M','7588751347','1045')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31015','DAMODAR HEGDE','dhegde50@gmail.com','30','M','NRI','M','9028069547','1333')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31016','ADIL HUSSAIN','adil7896@gmail.com','30','M','NRI','M','7030530207','1401')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31017','DHAIRYASHEEL	JADHAV','dhairya191096@gmail.com','30','M','NRI','M','9158089244','1969')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31018','ROHIT	JADHAV','jadhav.rohit@gmail.com','30','M','NRI','M','7798627735','1363')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31019','ARCHANA JETHALE','ajethale@gmail.com','25','F','NRI','M','9422631009','1852')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31020','NIKHIL JOSHI','nikjos987@gmail.com','30','M','NRI','M','8796009553','1369')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31021','ADITYA JOSHI','adiboy96@gmail.com','20','M','Indian','U','8149243963','1021')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31022','SAURABH
KALELKAR','kalelkarsaurabh@gmail.com','25','M','Indian','U','8149163533','1022')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31023','SHUBHAM KAMBLE','kambleshubham99@gmail.com','24','M','Indian','U','9921698519','1023')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31024','AKASH KAMERKAR','akash.kamerkar@gmail.com','30','M','Indian','M','9370463174','1024')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31025','ABHISHEK KAPOOR','abhishek251096@gmail.com','32','M','Indian','U','7030400069','1025')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31026','RUCHA KELKAR','ruchikelkar@gmail.com','20','F','Indian','U','8805443080','1026')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31027','VISHWANATH KODGIRE','vkodgire@gmail.com','40','M','NRI','U','7276810534','1027')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31028','ABHINAV KUMAR','abhinav181096@gmail.com','37','M','NRI','M','9139526046','1028')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31029','SWATI MAURYA','swatimaurya704@gmail.com','22','F','Indian','U','9823397725','1029')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31030','ATHARVA NAIK','atharva291196@gmail.com','30','M','Indian','M','8237371940','1030')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31031','ROHAN NALAWADE','nalawaderohan94@gmail.com','32','M','NRI','U','9405745945','1031')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31032','AKSHAY NEEL','aksnil312@gmail.com','29','M','Indian','U','8793590236','1032')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31033','MAYUR NEWASE','mayurnewase111@gmail.com','36','M','Indian','M','9423514849','1033')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31034','VIJAY PARDESHI','vijupardeshi951@gmail.com','32','M','NRI','M','9404040904','1034')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31035','HRISHIKESH PATE','hrishipate1996@gmail.com','37','M','Indian','U','8421948086','1035')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31036','JAYDEEP PATIL','patiljaydeep131@gmail.com','45','M','Indian','M','9403848605','1036')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31037','RUTUJA SATKAR','rutusatkar96@gmail.com','28','F','Indian','M','8605567881','1037')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31038','ATHARVA SHASTRI','atharvashastri439@gmail.com','29','M','Indian','M','9767010485','1038')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31039','ASMITA WAINGANKAR','asmita.waingankar@gmail.com','20','F','Indian','U','9503330946','1039')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31040','ANKUR CHAUDHARI','chankur26@gmail.com','20','M','Indian','U','8600468488','1040')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31041','PRADIP GHUGE','ghugepradip@gmail.com','26','M','Indian','M','8796511266','1041')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31042','MAYUR JAIN','mayurjain708@gmail.com','42','M','Indian','U','7276159145','1042')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31043','MANISH MAURYA','mauryamanish430@gmail.com','34','M','Indian','M','7507750682','1043')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31044','VISHESH NEVE','vishneve15@gmail.com','30','M','Indian','U','7709539466','1044')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31045','HIMANSHU NIRMAL','himanshunirmal99@gmail.com','32','M','Indian','U','8482828477','1045')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31046','SAYALI TALKUTE','sayalitalkute75@gmail.com','20','F','Indian','U','7721086269','1046')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31047','POOJA JAMDADE','poojajamdade04@gmail.com','40','F','Indian','U','8408052979','1047')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31048','KAUSTUBH KHOT','kkaustubhkhot@gmail.com','37','M','NRI','M','8793164869','1048')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31049','SEEMA KULUCH','kuluchseema878@gmail.com','22','F','Indian','U','9503583084','1049')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31050','SNEHAL RASAL','snehalrasal222@gmail.com','30','F','Indian','M','8796125969','1050')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31051','VAIBHAVI SHETIYA','vshetiya21@gmail.com','40','F','NRI','M','8087937207','1051')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31052','OMKAR LACHKE','omkarlachke@gmail.com','29','M','Indian','U','8087579305','1052')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31053','TANVI ARAWKAR','tarawkar86@gmail.com','36','F','Indian','M','9673279135','1053')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31054','ANAJA BAJPEYI','aajabajpeyi@gmail.com','38','F','NRI','M','9373051096','1054')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31055','NIKHIL BHOLE','nikhilbhole5627@gmail.com','37','M','Indian','U','7387234433','1055')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31056','CHINMAY CHAVAN','kccchinmays@gmail.com','21','M','Indian','M','8605635959','1056')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31057','ROSHAN CHOUDHARI','choudhari.roshan@gmail.com','28','M','Indian','M','7276611424','1057')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31058','ANIRUDDHA DORLE','aniruddhadorle@gmail.com','29','M','Indian','M','7350002074','1058')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31059','GAURAV GAVHANE','gavhanegaurav@gmail.com','27','M','Indian','U','9096900996','1059')");

mysql_query("INSERT INTO personal_info(UID,name,email_id,age,gender,nationality,marital_status,phn_no,lic_no) VALUES ('31060','NEETHU NATH','neethu1027@gmail.com','20','F','Indian','U','7507910778','1060')");


   
  
?>