<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>Robot Base Control</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="stylesheet" href="style.css">
    </head>
    <body>
       <form action="work.php" method="POST" class="container" >
           <h1 class="title">التحكم بقاعدة الروبوت</h1>
           <input type="submit" value="أمام" name="forward" id="forward">
           <input type="submit" value="يمين" name="right" id="right">
           <input type="submit" value="توقف" name="stop" id="stop">
           <input type="submit" value="يسار" name="left" id="left">
           <br>
           <input type="submit" value="خلف" name="backward" id="backward">
       </form>
        <img class="robot" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6IzEzNTY5MzsiIGQ9Ik0yNTYsNTEuNTc5Yy0yLjYxLDAtNS4xMjktMC4zOTgtNy41LTEuMTM2djM1Ljc1aDE1di0zNS43NUMyNjEuMTI5LDUxLjE4MiwyNTguNjEsNTEuNTc5LDI1Niw1MS41NzkNCgl6Ii8+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiM2QkMxREQ7IiBjeD0iMjU2IiBjeT0iMjYuMjkiIHI9IjI2LjI5Ii8+DQo8ZyBzdHlsZT0ib3BhY2l0eTowLjE1OyI+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzQ0MDA3NTsiIGQ9Ik0yNTEuODM5LDI2LjI5YzAtMTAuNTY1LDYuMjM1LTE5LjY3LDE1LjIyNi0yMy44NDlDMjYzLjcsMC44NzgsMjU5Ljk1NCwwLDI1NiwwDQoJCWMtMTQuNTIsMC0yNi4yOSwxMS43NzEtMjYuMjksMjYuMjlTMjQxLjQ4LDUyLjU3OSwyNTYsNTIuNTc5YzMuOTU0LDAsNy43LTAuODc4LDExLjA2NS0yLjQ0MQ0KCQlDMjU4LjA3NCw0NS45NiwyNTEuODM5LDM2Ljg1NSwyNTEuODM5LDI2LjI5eiIvPg0KPC9nPg0KPGc+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzlFQTdBRjsiIGQ9Ik00MjMuNTc0LDEyNy4yMjhoLTE1LjUwM3YxNDMuMDE4aDE1LjUwM2M4LjQ5OSwwLDE1LjQ1My02Ljk1MywxNS40NTMtMTUuNDUyVjE0Mi42OA0KCQlDNDM5LjAyNywxMzQuMTgyLDQzMi4wNzMsMTI3LjIyOCw0MjMuNTc0LDEyNy4yMjh6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzlFQTdBRjsiIGQ9Ik0xMDMuOTI5LDEyNy4yMjhIODcuNDAzYy04LjQ5OSwwLTE1LjQ1Miw2Ljk1NC0xNS40NTIsMTUuNDUydjExMi4xMTMNCgkJYzAsOC40OTksNi45NTMsMTUuNDUyLDE1LjQ1MiwxNS40NTJoMTYuNTI1TDEwMy45MjksMTI3LjIyOEwxMDMuOTI5LDEyNy4yMjh6Ii8+DQo8L2c+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojQzVDQ0QzOyIgZD0iTTExNC40NjcsNDU3LjM1M0g5My4yMzFjLTcuMjUsMC0xMy45ODUtMi4yMDMtMTkuNTczLTUuOTc2djUwLjMyDQoJCWMwLDUuNjY2LDQuNjM2LDEwLjMwMiwxMC4zMDIsMTAuMzAyaDMwLjUwN0MxMTQuNDY3LDUxMS45OTksMTE0LjQ2Nyw0NTcuMzUzLDExNC40NjcsNDU3LjM1M3oiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojQzVDQ0QzOyIgZD0iTTQxOC43NjksNDU3LjM1M2gtMjEuMjM1VjUxMmgzMC41MDdjNS42NjYsMCwxMC4zMDItNC42MzYsMTAuMzAyLTEwLjMwMnYtNTAuMzE5DQoJCUM0MzIuNzU0LDQ1NS4xNSw0MjYuMDE5LDQ1Ny4zNTMsNDE4Ljc2OSw0NTcuMzUzeiIvPg0KPC9nPg0KPHBhdGggc3R5bGU9Im9wYWNpdHk6MC4xNTtmaWxsOiM0NDAwNzU7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiIGQ9Ik05NS4yOTIsNTAxLjY5OHYtNDQuMzQ1aC0yLjA2MQ0KCWMtNy4yNSwwLTEzLjk4NS0yLjIwMy0xOS41NzMtNS45NzZ2NTAuMzJjMCw1LjY2Niw0LjYzNiwxMC4zMDIsMTAuMzAyLDEwLjMwMmgyMS42MzRDOTkuOTI4LDUxMiw5NS4yOTIsNTA3LjM2NCw5NS4yOTIsNTAxLjY5OHoiLz4NCjxnPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNFNkU5RUQ7IiBkPSJNMTE0LjQ2NywzNzguNTkySDkzLjIzMWMtMTkuMzQ0LDAtMzUuMDI2LDE1LjY4Mi0zNS4wMjYsMzUuMDI2djEwLjMwMg0KCQljMCwxOS4zNDQsMTUuNjgzLDM1LjAyNSwzNS4wMjYsMzUuMDI1aDIxLjIzNUwxMTQuNDY3LDM3OC41OTJMMTE0LjQ2NywzNzguNTkyeiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNFNkU5RUQ7IiBkPSJNNDE4Ljc2OSwzNzguNTkyaC0yMS4yMzV2ODAuMzU0aDIxLjIzNWMxOS4zNDUsMCwzNS4wMjYtMTUuNjgyLDM1LjAyNi0zNS4wMjV2LTEwLjMwMg0KCQlDNDUzLjc5NSwzOTQuMjczLDQzOC4xMTMsMzc4LjU5Miw0MTguNzY5LDM3OC41OTJ6Ii8+DQo8L2c+DQo8ZyBzdHlsZT0ib3BhY2l0eTowLjE1OyI+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzQ0MDA3NTsiIGQ9Ik04Mi45Myw0MjMuOTJ2LTEwLjMwMmMwLTE5LjM0NSwxNS42ODItMzUuMDI2LDM1LjAyNi0zNS4wMjZIOTMuMjMxDQoJCWMtMTkuMzQ0LDAtMzUuMDI2LDE1LjY4Mi0zNS4wMjYsMzUuMDI2djEwLjMwMmMwLDE5LjM0NCwxNS42ODMsMzUuMDI1LDM1LjAyNiwzNS4wMjVoMjQuNzI1DQoJCUM5OC42MTEsNDU4Ljk0NSw4Mi45Myw0NDMuMjY0LDgyLjkzLDQyMy45MnoiLz4NCjwvZz4NCjxyZWN0IHg9IjIyMS44MSIgeT0iMzEwLjA1IiBzdHlsZT0iZmlsbDojOUVBN0FGOyIgd2lkdGg9IjY4LjM5IiBoZWlnaHQ9IjI1LjU1NiIvPg0KPHJlY3QgeD0iMjIxLjgxIiB5PSIzMTAuMDUiIHN0eWxlPSJvcGFjaXR5OjAuMTU7ZmlsbDojNDQwMDc1O2VuYWJsZS1iYWNrZ3JvdW5kOm5ldyAgICA7IiB3aWR0aD0iMjQuOTIxIiBoZWlnaHQ9IjI1LjU1NiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0M1Q0NEMzsiIGQ9Ik0zMzYuNDQ5LDM2MHYtMTYuNjI1YzAtNC44ODYtMy45OTgtOC44ODQtOC44ODQtOC44ODRIMTgxLjQ0Yy00Ljg4NywwLTguODg1LDMuOTk4LTguODg1LDguODg0VjM2MA0KCUgzMzYuNDQ5eiIvPg0KPHBhdGggc3R5bGU9Im9wYWNpdHk6MC4xNTtmaWxsOiM0NDAwNzU7ZW5hYmxlLWJhY2tncm91bmQ6bmV3ICAgIDsiIGQ9Ik0yMDMuMzY2LDM2MHYtMTYuNjI1YzAtNC44ODYsMy45OTgtOC44ODQsOC44ODYtOC44ODQNCglIMTgxLjQ0Yy00Ljg4NywwLTguODg1LDMuOTk4LTguODg1LDguODg0VjM2MEgyMDMuMzY2eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzlFQTdBRjsiIGQ9Ik0zODMuMDgsMzU4LjI0NUgxMjguOTJjLTguNDk5LDAtMTUuNDUzLDYuOTU0LTE1LjQ1MywxNS40NTNWNTEyaDI4NS4wNjZWMzczLjY5OA0KCUMzOTguNTMzLDM2NS4xOTksMzkxLjU4LDM1OC4yNDUsMzgzLjA4LDM1OC4yNDV6Ii8+DQo8ZyBzdHlsZT0ib3BhY2l0eTowLjE1OyI+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzQ0MDA3NTsiIGQ9Ik0xNTguNDI3LDM1OC4yNDVIMTI4LjkyYy04LjQ5OSwwLTE1LjQ1Myw2Ljk1NC0xNS40NTMsMTUuNDUzVjUxMmgyOS41MDdWMzczLjY5OA0KCQlDMTQyLjk3NCwzNjUuMTk5LDE0OS45MjgsMzU4LjI0NSwxNTguNDI3LDM1OC4yNDV6Ii8+DQo8L2c+DQo8cGF0aCBzdHlsZT0iZmlsbDojQzVDQ0QzOyIgZD0iTTQwOS4wNzEsMjk1Ljc4N2MwLDguNDk5LTYuOTU0LDE1LjQ1Mi0xNS40NTIsMTUuNDUySDExOC4zODFjLTguNDk4LDAtMTUuNDUyLTYuOTUzLTE1LjQ1Mi0xNS40NTINCglWMTAwLjY0NmMwLTguNDk5LDYuOTU0LTE1LjQ1MiwxNS40NTItMTUuNDUyaDI3NS4yMzhjOC40OTgsMCwxNS40NTIsNi45NTMsMTUuNDUyLDE1LjQ1MlYyOTUuNzg3eiIvPg0KPGcgc3R5bGU9Im9wYWNpdHk6MC4xNTsiPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiM0NDAwNzU7IiBkPSJNMTMyLjM3OCwyOTUuNzg3VjEwMC42NDZjMC04LjQ5OSw2Ljk1NC0xNS40NTIsMTUuNDUzLTE1LjQ1MmgtMjkuNDUNCgkJYy04LjQ5OCwwLTE1LjQ1Miw2Ljk1My0xNS40NTIsMTUuNDUydjE5NS4xNDJjMCw4LjQ5OSw2Ljk1NCwxNS40NTIsMTUuNDUyLDE1LjQ1MmgyOS40NQ0KCQlDMTM5LjMzMiwzMTEuMjM5LDEzMi4zNzgsMzA0LjI4NiwxMzIuMzc4LDI5NS43ODd6Ii8+DQo8L2c+DQo8cGF0aCBzdHlsZT0iZmlsbDojMTM1NjkzOyIgZD0iTTM3Mi41MDQsMTk4LjUwN2MwLDI5LjQ3OS0yMy44OTcsNTMuMzcyLTUzLjM3NCw1My4zNzJIMTkyLjg3MQ0KCWMtMjkuNDc5LDAtNTMuMzc1LTIzLjg5NC01My4zNzUtNTMuMzcybDAsMGMwLTI5LjQ3OCwyMy44OTYtNTMuMzcyLDUzLjM3NS01My4zNzJIMzE5LjEzDQoJQzM0OC42MDcsMTQ1LjEzNSwzNzIuNTA0LDE2OS4wMjksMzcyLjUwNCwxOTguNTA3TDM3Mi41MDQsMTk4LjUwN3oiLz4NCjxnIHN0eWxlPSJvcGFjaXR5OjAuMTU7Ij4NCgk8cGF0aCBzdHlsZT0iZmlsbDojNDQwMDc1OyIgZD0iTTE2OS40NjUsMTk4LjUwN2MwLTI5LjQ3OCwyMy44OTYtNTMuMzcyLDUzLjM3NS01My4zNzJoLTI5Ljk2OQ0KCQljLTI5LjQ3OSwwLTUzLjM3NSwyMy44OTUtNTMuMzc1LDUzLjM3MmMwLDI5LjQ3OSwyMy44OTYsNTMuMzcyLDUzLjM3NSw1My4zNzJoMjkuOTY5DQoJCUMxOTMuMzYxLDI1MS44NzksMTY5LjQ2NSwyMjcuOTg1LDE2OS40NjUsMTk4LjUwN3oiLz4NCjwvZz4NCjxnPg0KCTxlbGxpcHNlIHN0eWxlPSJmaWxsOiM2QkMxREQ7IiBjeD0iMTg3LjU0IiBjeT0iMTk4LjUxIiByeD0iMjAuNzU0IiByeT0iMjAuODM2Ii8+DQoJPGVsbGlwc2Ugc3R5bGU9ImZpbGw6IzZCQzFERDsiIGN4PSIzMjQuODYiIGN5PSIxOTguNTEiIHJ4PSIyMC43NTQiIHJ5PSIyMC44MzYiLz4NCjwvZz4NCjxwYXRoIHN0eWxlPSJmaWxsOiMxMzU2OTM7IiBkPSJNMzQ4LjA3Miw1MTJ2LTg5LjgxYzAtNS42NjYtNC42MzYtMTAuMzAyLTEwLjMwMi0xMC4zMDJIMTc0LjIzYy01LjY2NiwwLTEwLjMwMiw0LjYzNi0xMC4zMDIsMTAuMzAyDQoJVjUxMkgzNDguMDcyeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQzUwMjsiIGQ9Ik0yNzQuNTQzLDUxMnYtMjguOTY2YzAtMS43LTEuMzkxLTMuMDkxLTMuMDktMy4wOTFoLTMwLjkwNmMtMS42OTksMC0zLjA5LDEuMzkxLTMuMDksMy4wOTFWNTEyDQoJSDI3NC41NDN6Ii8+DQo8Zz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojQzVDQ0QzOyIgZD0iTTIxMi43MzIsNDQ0LjEzM2gtMjMuNjk0Yy00LjE0MywwLTcuNS0zLjM1Ny03LjUtNy41czMuMzU3LTcuNSw3LjUtNy41aDIzLjY5NA0KCQljNC4xNDMsMCw3LjUsMy4zNTcsNy41LDcuNUMyMjAuMjMyLDQ0MC43NzUsMjE2Ljg3NSw0NDQuMTMzLDIxMi43MzIsNDQ0LjEzM3oiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojQzVDQ0QzOyIgZD0iTTIwMi40MzEsNDYyLjQ0MWgtMTMuMzkzYy00LjE0MywwLTcuNS0zLjM1Ny03LjUtNy41czMuMzU3LTcuNSw3LjUtNy41aDEzLjM5Mw0KCQljNC4xNDMsMCw3LjUsMy4zNTcsNy41LDcuNVMyMDYuNTczLDQ2Mi40NDEsMjAyLjQzMSw0NjIuNDQxeiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNDNUNDRDM7IiBkPSJNMjEyLjczMiw0ODAuNzUyaC0yMy42OTRjLTQuMTQzLDAtNy41LTMuMzU4LTcuNS03LjVjMC00LjE0MywzLjM1Ny03LjUsNy41LTcuNWgyMy42OTQNCgkJYzQuMTQzLDAsNy41LDMuMzU3LDcuNSw3LjVDMjIwLjIzMiw0NzcuMzk1LDIxNi44NzUsNDgwLjc1MiwyMTIuNzMyLDQ4MC43NTJ6Ii8+DQoJPHBhdGggc3R5bGU9ImZpbGw6I0M1Q0NEMzsiIGQ9Ik0xOTkuMzQsNDk5LjA2aC0xMC4zMDJjLTQuMTQzLDAtNy41LTMuMzU3LTcuNS03LjVjMC00LjE0MiwzLjM1Ny03LjUsNy41LTcuNWgxMC4zMDINCgkJYzQuMTQzLDAsNy41LDMuMzU4LDcuNSw3LjVDMjA2Ljg0LDQ5NS43MDMsMjAzLjQ4Miw0OTkuMDYsMTk5LjM0LDQ5OS4wNnoiLz4NCjwvZz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNFNkU5RUQ7IiBkPSJNMzE5LjU2MSw0OTEuNTI2aC0xOC4yODhjLTQuMzM5LDAtNy44NTUtMy41MTctNy44NTUtNy44NTdzMy41MTctNy44NTYsNy44NTUtNy44NTZoMTguMjg4DQoJYzQuMzM5LDAsNy44NTcsMy41MTcsNy44NTcsNy44NTZDMzI3LjQxOCw0ODguMDEsMzIzLjksNDkxLjUyNiwzMTkuNTYxLDQ5MS41MjZ6Ii8+DQo8Y2lyY2xlIHN0eWxlPSJmaWxsOiM1REM2NDc7IiBjeD0iMzEwLjQyIiBjeT0iNDQ3LjgiIHI9IjE2LjUiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM2QkMxREQ7IiBkPSJNMjc1LDQ1Ni40MjhjMCwxLjc0Mi0xLjQyNSwzLjE2Ni0zLjE2NiwzLjE2NmgtMzEuNjY4Yy0xLjc0MSwwLTMuMTY2LTEuNDI0LTMuMTY2LTMuMTY2di0xNy4yNjQNCgljMC0xLjc0MiwxLjQyNS0zLjE2NywzLjE2Ni0zLjE2N2gzMS42NjhjMS43NDEsMCwzLjE2NiwxLjQyNSwzLjE2NiwzLjE2N1Y0NTYuNDI4eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo="  height="600rem" width="50%"/>
    </body>
</html>

