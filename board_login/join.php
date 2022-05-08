<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel = "stylesheet" type = "text/css" href = "css/signup.css" />

</head>
<body>
    <div class = "wrapper">
        <div class = "title"><h1 style="font-size:21px;">회원가입</h1></div>
            <form action = "join_proc.php" method = "post">
                <div class = "email">
                    <div><input type = "email" name = "email" placeholder="이메일을 입력해 주세요." required></div>
                </div>
                <div class = "id">
                    <div><input type = "text" name = "uid" placeholder="아이디를 입력해 주세요." required></div>
                </div>
                <div class = "pw">
                    <div><input type = "password" name = "upw" placeholder="비밀번호를 입력해 주세요." required></div>
                </div>
                <div class = "pw_check">
                    <div><input type = "password" name = "confirm_upw" placeholder="비밀번호를 다시 입력해 주세요." required></div>
                </div>
                <div class = "name">
                    <div><input type = "text" name = "nm" placeholder="닉네임을 입력해 주세요." required></div>
                </div>
                <div class = "gender">
                    <div>성별 : <label>여자<input id = "female" type = "radio" name = "gender" value="0" checked></label>
                            <label>남자<input id = "male" type = "radio" name = "gender" value="1"></label>
                    </div>
                </div>
                <div class = "line">
                <hr>
                </div>
                <div class = "signUp">
                    <button type = "submit">회원가입</button>
                    <button type = "reset">초기화</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>