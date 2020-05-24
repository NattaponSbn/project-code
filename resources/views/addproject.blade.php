<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>  
    <title>addproject</title>
    <style>
        .body1 {
            padding-top: 30px;
            background-color: #982ACF;
        }
        .textadd {
            padding-left: 20px;
            padding-right: 20px;
            font-size: 18px;
            color: white;
        }
        .border1 {
            padding-top: 8px;
            border: 1px solid #D9A327;
            margin-left: 30px;
            margin-right: 1285px;
        }

        .border2 {
            padding-top: 30px;
            margin-left: 150px;
            margin-right: 150px;
        }

        .tile {
            background-color: #7CE1B5;
            margin-left: 200px;
            margin-right: 200px;
            
        }

        .step {
            height: 50px;
            width: 50px;
            margin: 0 10px;
            margin-right: 10px;
            background-color: #b150c7;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
            float: center;
            
        }

        .font {
            text-align: center;
            font-size: 18px;
            padding-top: 10px;
            color: #fff;
        }

        .btnp {
            background-color: #FFCC66;
        }

        .btnn {
            background-color: #00CCFF;
        }

        input {
            padding: 5px;
            width: 30%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
            border: 1px solid red;
        }

        select {
            padding: 5px;
            width: 30%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        select.invalid {
            background-color: #ffdddd;
            border: 1px solid red;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            margin-top: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 8px 15px;
            border-radius: 20%;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #37b848;
        }

        /* set label */
        label {
            font-size: 20px;
            margin-top: 20px;
        }

        .imgup {
            background-color: #4CAF50;
            width: 100px;
            height: 100px;
        }

    </style>
</head>
<body class="body1">
        <div class="border1">
            <h2><div class="containeradd textadd" >กรอกรายละเอียดผลงาน</div></h2>
        </div>

        <div class="border2">
            <div class="tile">
                <div class="tile-body">
                    <div class="containeradd ">
                        <form id="addprojectfrom" action="submit" method="GET">
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step font">1</span>
                                <span class="step font">2</span>
                                <span class="step font">3</span>
                               
                            </div>
            
                            <div class="tab">
                                <center><label for="text" class="">ขั้นตอนที่ 1</label><br>
                                ชื่อเรื่อง: <input type="text" name="nproject" oninput="this.className = ''"><br>
                                คำอธิบายย่อ: <input type="text" name="dproject" oninput="this.className = ''"><br>
                                    <label for="text" class="">ข้อมูลติดต่อ</label><br>
                                    Facebook: <input type="text" name="facebook" oninput="this.className = ''"><br>
                                    Email: <input type="email" name="email" oninput="this.className = ''"><br>
                                    เบอร์โทร: <input type="number" name="phone" oninput="this.className = ''"><br>
                                </center>
                            </div>

                            <div class="tab">
                                <center><label for="text" class="">ขั้นตอนที่ 2</label><br>
                                    <label for="text" class="">เกี่ยวกับผลงาน</label><br>
                                    <label for="text">ชนิดเอกสาร: </label>
                                        <select name="typeproject" id="" oninput="this.className = ''">
                                            <option value="">เลือกชนิดเอกสาร</option>
                                            <option value="วิจัย">วิจัย</option>
                                        </select><br>
                                    <label for="text">ประเภท: </label>
                                        <select name="catproject" id="" oninput="this.className = ''">
                                            <option value="">เลือกประเภท</option>
                                            <option value="หนังสือ">หนังสือ</option>
                                        </select><br>
                                    <label for="text">หมวดหมู่: </label>
                                        <select name="catri" id="" oninput="this.className = ''">
                                            <option value="">เลือกหมวดหมู่</option>
                                            <option value="การศึกษา">การศึกษา</option>
                                        </select><br>
                                    <label for="text">สาขา: </label>
                                        <select name="saka" id="" oninput="this.className = ''">
                                            <option value="">เลือกสาขา</option>
                                            <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                                        </select><br>
                                        </center>
                                </div>

                                <center>
                                    <div class="tab">
                                        <label for="text" class="">ขั้นตอนที่ 3</label><br>
                                            <label for="text" class="">ภาพ (ถ้ามี)</label><br>
                                                <input type="file" name="fileimgToUpload" id="fileToUpload" class="imgup"><br>
    
                                        <label for="text" class="">อัพโหลดไฟล์เอกสารตัวเต็ม</label><br>
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </center>
                           

                            <div style="overflow:auto;">
                                <div style="float:center;">
                                    <center><button type="button" id="prevBtn" class="btnp" onclick="nextPrev(-1)">ย้อนกลับ</button>
                                    <button type="button" id="nextBtn" class="btnn" onclick="nextPrev(1)">ถัดไป</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "ยืนยัน";
                } else {
                    document.getElementById("nextBtn").innerHTML = "ถัดไป";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                // นำค่าที่ได้จาก class tab มาเก็บไว้ที่ตัวเเปร x
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                //เช็คข้อมูลว่ามีใน textbox หรือไม่ ไปเช็คที่ฟังก์ชัน validateForm เเละ retrun false ไป 
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("addprojectfrom").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, z, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                z = x[currentTab].getElementsByTagName("select");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                    }
                }

                for (i = 0; i < z.length; i++) {
                    // If a field is empty...
                    if (z[i].value == "") {
                    // add an "invalid" class to the field:
                    z[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                    }
                }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }

        </script>
        
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="js/plugins/chart.js"></script>
</body>
</html>