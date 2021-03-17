<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The KD</title>

    <style>
        body {
            background-color: aquamarine;
        }

        #main {
            border: 2px solid black;
            height: 100%;
            width: 100%;
            background-color: #6babc5;
        }

        #name {
            text-align: center;
            color: red;
            font-family: Arial, Helvetica, sans-serif;
            border: 2px solid black;
            display: block;
        }

        #content {
            border: 2px solid rgb(111, 117, 111);
            display: flex;
            height: 88%;

        }

        #right {
            border: 2px solid black;
            /* height: 100%; */
            width: 10%;

        }

        #left {
            border: 2px solid black;
            /* height: 100%; */
            width: 10%;
        }

        #middle {
            /* border: 2px solid red; */
            height: 100%;
            width: 80%;
        }

        #message {
            text-align: center;
            font-size: 35px;
            font-family: monospace;

        }

        .photo {
            height: 271px;
            width: 270px;
        }

        table {
            border-spacing: 15px 9px;
        }

        .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: black;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #4ef88f;
            color: black;
        }

        .button:active {
            background-color: #8e863e;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .result {
            text-align: center;
            border: 2px solid black;
            display: block;
            margin: 0px 0px 0px 0px;
            background-color: chartreuse;
        }

        .r_photo {
            height: 115px;
            margin: 10px 0px 10px 0px;
            width: 141px;

        }
    </style>


</head>

<body>
    <div id="main">
        <div id="name">
            <b>
                <h1>THE KD</h1>
            </b>
        </div>


        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "image";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo "<br>" . "Connected successfully <br>";
        }

        $sql = "SELECT * from img ";
        $result = mysqli_query($conn, $sql);
        
        // $num = mysqli_num_rows($result);
        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo "<br>" . $row["Name"] . $row["Rating"];
        // }
        // $arr = array("this ", "that ", "some");
        // echo $arr[0], $arr[1], $arr[2];


        ?>


        <form action="#">
            <div id="content">
                <div id="right">
                    <h2 class="result">High</h2>
                    <div class="r_img">
                        <center> <img class="r_photo" src="img/10.jpg" alt=""></center>
                        <center> <img class="r_photo" src="img/12.jpg" alt=""></center>
                        <center> <img class="r_photo" src="img/14.jpg" alt=""></center>
                        <center> <img class="r_photo" src="img/22.jpg" alt=""></center>



                    </div>
                </div>
                <div id="middle">
                    <h1 id="message">Write Something Here!!</h1>
                    <center>
                        <table border="20px solid black" class="photo">
                            <tr>
                                <td>
                                    <img class="photo" src="img/1.jpeg" alt="">
                                </td>
                                <td>
                                    <img class="photo" src="img/10.jpg" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center><input type="submit" value="Left" class="button"></center>
                                </td>
                                <td>
                                    <center><input type="submit" value="Right" class="button"></center>
                                </td>
                            </tr>
                        </table>
                    </center>
                    <h1 id="message">Write Something Here!!</h1>


                </div>
        </form>
        <div id="left">
            <h2 class="result">Less</h2>
            <div class="r_img">
                <center> <img class="r_photo" src="img/10.jpg" alt=""></center>
                <center> <img class="r_photo" src="img/11.jpeg" alt=""></center>
                <center> <img class="r_photo" src="img/21.jpg" alt=""></center>
                <center> <img class="r_photo" src="img/17.jpg" alt=""></center>


            </div>
        </div>
    </div>

    </div>



</body>

</html>