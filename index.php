<!DOCTYPE html>

<html lang="he">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=yes">  
        <title>valley pizza</title>
        <link type="text/css" href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript" src="scripts.js">
        </script>
        
        
    </head>
    
    
    <body>
        
        
        
        <!-- start page content -->
        <div class="wrapper">
            <div class="wrapper-text">
                <h1 tabindex="2" id="baner">PIZZA<br>Valley</h1>
                <h3 tabindex="3">2 מגשים במבצע</h3>
                <h2 tabindex="4"><span id="span1">₪</span>69.90</h2>
                <h4 tabindex="5">במקום <span id="span2">₪</span>97.90</h4>
            </div>
            <div class="wrapper-form">
                <a id="logo" href="https://www.spring-valley.co.il/">
                <img id="logoimg"tabindex="1" src="images/logo.jpg" alt="PIZZA Valley" title="spring-valley.co.il" >
                </a>
                <a id="call" href="tel:04-6064848"><i class="fa fa-phone"></i> להזמנות חייגו עכשיו
                </a>
                
                <form name="Form" method="post" action="#">
                    <label tabindex="6" id="details" for="fname">למידע נוסף מלאו פרטים:</label><br>
                    <input tabindex="7" title="name" class="input-text" type="text" id="fname" name="fname" placeholder="שם" pattern="[a-z]{1,15}|[א-ת]{1,15}|[A-Z]{1,15}" required="" oninvalid="this.setCustomValidity('')"
                           oninput="this.setCustomValidity('')"><br>
                    <input tabindex="8" title="Cellphone" class="input-text" type="tel" id="phone" name="phone" placeholder="טלפון" pattern="[0][5]\d{1}[-]{0,1}[0-9]{7}" required ><br>
                    <input tabindex="9" title="Email address" class="input-text" type="email" id="mailadd" name="mailadd" value="" placeholder="מייל"><br>
                    <input tabindex="14" type="submit" title="send" id="send" name="send" value="שלח" onclick="validateName()"><br>
                    <label tabindex="10" id="checklabel1" title="אישור ניוזלטר" for="check1">שלחו לי עדכונים, הטבות ודברים שיעניינו אותי</label>
                    <input tabindex="11" title="אישור ניוזלטר" type="checkbox" id="check1" name="check1" value="Newsletter" required><br>
                    <label tabindex="12" id="checklabel2" title="אישור מדיניות פרטיות ותקנון" for="check2">קראתי הבנתי ואישרתי את התקנון ואת מדיניות הפרטיות</label>
                    <input tabindex="13" title="אישור מדיניות פרטיות ותקנון" type="checkbox" id="check2" name="check2" value="Privacy" required><br>
                </form>
                <text title="nameReq" name="nameRew" id="nameReq">שדה חובה</text>
                <text title="telReq" name="telReq" id="telReq">שדה חובה</text>
            </div>
        </div>
        <!-- end of page content -->
        
        <fotter>
            <div class="footer">
                <p id="disclaimer" tabindex="15">*התמונה להמחשה בלבד *בכפוף לתקנון <br id="breakline"> *המבצע בתוקף עד 1.7.2017 *המחיר בעסקת מזומן בלבד</p>
                <a tabindex="16" id="foot_logo" href="https://www.spring-valley.co.il/">
                    <img src="images/web_03_blk_logo.jpg" alt="logo" title="spring-valley.co.il">
                </a>
            </div>
            
        </fotter>
        
    </body>
    
</html>


