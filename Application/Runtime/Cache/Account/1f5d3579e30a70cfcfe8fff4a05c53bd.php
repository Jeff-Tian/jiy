<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8" />
         <title>注册叽歪账号</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="shortcut icon" href="http://zizhujy.com/Content/Images/zizhujy.ico" type="image/x-icon" />
     </head>
     <body>
        <form action="" method="POST">
            <div>
                <label for="txt-email">邮箱</label>
                <input type="text" name="email" id="txt-email" />
            </div>
            <div>
                <label for="pwd-password">密码</label>
                <input type="password" name="password" id="txt-password" />
            </div>
            <div>
                <label for="pwd-password-confirm">确认密码</label>
                <input type="password" name="confirmedPassword" id="pwd-password-confirm" />
            </div>
            <div>
                <input type="submit" value="注册" />
            </div>
        </form>         
     </body>
 </html>