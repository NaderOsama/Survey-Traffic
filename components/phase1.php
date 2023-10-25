<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .questionLabel {
            border-bottom: 1px solid grey !important;
            color: darkslategray;
            font-family: 'Cairo';
            
        }

        .questionForm {
            border-radius: 20px;
            padding: 10px;
            border: 1px solid #0b201c;
            background-color: #f4f6f4;


        }

        .checkbox-container,
        .radio-container {
            margin-top: 10px;
        }

        .radio-container {
            display: none;
        }
        input[type="radio"], {
            font-size:25px;
        }
        .selectLabel {
            margin: 20px 0;
        }

        .d-flex {
            display:flex;
        }

        .content {
            padding: 15px;
            background-color: rgb(58 173 73 / 40%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            margin: 10px 0;
        }
        @media screen and (max-width: 768px) {
            /* Adjust font sizes or layout for smaller screens */
            .questionForm select,
            .questionForm input[type="radio"],
            .questionLabel,h2 {
            font-size: 14px;
            }

            /* Adjust margins or padding as needed */
            .checkbox-container,
            .radio-container {
                margin-top: 5px;
            }

            /* Adjust other layout properties as needed */
            .content {
                padding: 10px;
            }
        }

        @media screen and (max-width: 400px) {
            /* Further adjustments for even smaller screens */
            .questionForm select,
            .questionForm input[type="radio"],
            .questionLabel,h2 {
                font-size: 10px;
            }

            /* Adjust margins or padding as needed */
            .checkbox-container,
            .radio-container {
                margin-top: 3px;
            }
            label {
                font-size: 14px;
            }
            .form-control input[type="radio"], .form-control label {
            
                font-size: 10px !important;
            }

        }
    </style>
</head>
<body>
    <div class="content">
        <h2 class="arrow" id="section1" style="cursor: pointer; direction: ltr;">القسم الأول: خصائص مستخدم الطريق</h2>
        <div class="form-control questionForm">
            <label for="gender" class="questionLabel">النوع:</label>
            <select id="gender" name="gender" class="selectLabel">
                <option value="" selected disabled>اختر النوع</option>
                <option value="ذكر">ذكر</option>
                <option value="أنثى">أنثى</option>
            </select>

            <label for="age" class="questionLabel">السن:</label>
            <select id="age" name="age" class="selectLabel">
                <option value="" selected>اختر السن</option>
                <option value="أقل من 18 سنة">أقل من 18 سنة</option>
                <option value="18-24">18-24</option>
                <option value="24-30">24-30</option>
                <option value="30-40">30-40</option>
                <option value="40-60">40-60</option>
                <option value="أكبر من 60">أكبر من 60</option>
            </select>

            <label for="education" class="questionLabel">المؤهل الدراسي:</label>
            <select id="education" name="education" class="selectLabel">
                <option value="" selected disabled>اختر المؤهل الدراسي</option>
                <option value="ماجستير/دكتوراه">ماجستير/دكتوراه</option>
                <option value="جامعي">جامعي</option>
                <option value="معهد">معهد</option>
                <option value="دبلوم">دبلوم</option>
                <option value="أقل من دبلوم">أقل من دبلوم</option>
            </select>

            <label for="experience_street" class="questionLabel">الخبرة في مجال الطرق والنقل والمرور</label>
            <select id="experience_street" name="experience_street" class="selectLabel">
                <option value="" selected disabled>اختر الخبرة</option>
                <option value="ضعيفة">ضعيفة</option>
                <option value="متوسطة">متوسطة</option>
                <option value="جيدة">جيدة</option>
                <option value="ممتازة">ممتازة</option>
            </select>

            <label for="driving_license" class="questionLabel">هل لديك رخصة قيادة؟</label>
            <select id="driving_license" name="driving_license" class="selectLabel">
                <option value="" selected disabled>اختر إجابتك</option>
                <option value="نعم">نعم</option>
                <option value="لا">لا</option>
            </select>

            <div class="">
                <div class="checkbox-container">
                    <label class="questionLabel">وسائل الموصلات المستخدمة داخل القاهرة الكبرى ومعدلاتها:</label>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_car_radio">
                                <input type="checkbox" id="private_car_radio" name="transportation[]" value="سيارة خاصة"> سيارة خاصة
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar1" style="display:none;" >
                            
                            <input type="radio" name="private_car_radio" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="private_car_radio" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="private_car_radio" value="كثيرا"><label >كثيرا</label>  
                            <input type="radio" name="private_car_radio" value="دائما"><label >دائما</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_bus_radio">
                                <input type="checkbox" id="private_bus_radio" name="transportation[]" value="أتوبيس"> أتوبيس
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar2" style="display:none;" >
                            <input type="radio" name="private_bus_radio" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="private_bus_radio" value="احيانا"><label >احيانا</label>
                            <input type="radio" name="private_bus_radio" value="كثيرا"><label >كثيرا</label>
                            <input type="radio" name="private_bus_radio" value="دائما"> <label >دائما</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_microbus_radio">
                                <input type="checkbox" id="private_microbus_radio" name="transportation[]" value="ميكروباص"> ميكروباص
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar3" style="display:none;" >
                            <input type="radio" name="private_microbus_radio" value="نادرا"><label >نادرا</label>
                            <input type="radio" name="private_microbus_radio" value="احيانا"><label >احيانا</label>
                            <input type="radio" name="private_microbus_radio" value="كثيرا"><label >كثيرا</label>
                            <input type="radio" name="private_microbus_radio" value="دائما"><label >دائما</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_taxi_radio">
                                <input type="checkbox" id="private_taxi_radio" name="transportation[]" value="تاكسي"> تاكسي
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar4" style="display:none;" >
                            <input type="radio" name="private_taxi_radio" value="نادرا"><label >نادرا</label>
                            <input type="radio" name="private_taxi_radio" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="private_taxi_radio" value="كثيرا"><label >كثيرا</label>  
                            <input type="radio" name="private_taxi_radio" value="دائما"><label >دائما</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_motorcycle_radio">
                                <input type="checkbox" id="private_motorcycle_radio" name="transportation[]" value="موتوسيكل"> موتوسيكل
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar5" style="display:none;" >
                            <input type="radio" name="private_motorcycle_radio" value="نادرا"><label >نادرا</label>
                            <input type="radio" name="private_motorcycle_radio" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="private_motorcycle_radio" value="كثيرا"> <label >كثيرا</label>  
                            <input type="radio" name="private_motorcycle_radio" value="دائما"><label >دائما</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_train_radio">
                                <input type="checkbox" id="private_train_radio" name="transportation[]" value="مترو/قطار"> مترو/قطار
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar6" style="display:none;" >
                            <input type="radio" name="private_train_radio" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="private_train_radio" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="private_train_radio" value="كثيرا"><label >كثيرا</label>  
                            <input type="radio" name="private_train_radio" value="دائما"><label >دائما</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="checkbox-container">
                            <label for="private_bike_radio">
                                <input type="checkbox" id="private_bike_radio" name="transportation[]" value="مشي/دراجة"> مشي/دراجة
                            </label><br>
                        </div>
                        <div class="radio-container showRadioCar7" style="display:none;" >
                            <input type="radio" name="private_bike_radio" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="private_bike_radio" value="احيانا"><label >احيانا</label>  
                            <input type="radio" name="private_bike_radio" value="كثيرا"><label >كثيرا</label>   
                            <input type="radio" name="private_bike_radio" value="دائما"><label >دائما</label>   
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="">
                <div class="checkbox-container">
                    <label class="questionLabel">توقيتات استخدام الطرق ونسبتها:</label>

                    <div class="">
                        <div class="checkbox-container">
                            <label for="road_usage6amTo9am" class="checkbox-item">
                                <input type="checkbox" id="road_usage6amTo9am" name="road-usage[]" value="6ص-9ص"> 6 صباحا - 9 صباحا
                            </label><br>
                        </div>
                        <div class="radio-container showRadioTime1 ">
                            <input type="radio" name="road_usage6amTo9am" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="road_usage6amTo9am" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="road_usage6amTo9am" value="كثيرا"><label >كثيرا</label> 
                            <input type="radio" name="road_usage6amTo9am" value="دائما"><label >دائما</label> 
                        </div>
                    </div>

                    <div class="">
                        <div class="checkbox-container">
                            <label for="road_usage9amTo12am" class="checkbox-item">
                                <input type="checkbox" id="road_usage9amTo12am" name="road-usage[]" value="9ص – 12ظ">9 صباحا - 12 ظهرا              
                            </label><br>
                        </div>
                        <div class="radio-container showRadioTime2">
                            <input type="radio" name="road_usage9amTo12am" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="road_usage9amTo12am" value="احيانا"><label >احيانا</label>
                            <input type="radio" name="road_usage9amTo12am" value="كثيرا"><label >كثيرا</label> 
                            <input type="radio" name="road_usage9amTo12am" value="دائما"><label >دائما</label> 
                        </div>
                    </div>

                    <div class="">
                        <div class="checkbox-container">
                            <label for="road_usage12amTo3pm" class="checkbox-item">
                                <input type="checkbox" id="road_usage12amTo3pm" name="road-usage[]" value="12ظ -  3م "> 12 ظهرا - 3 مساء             
                            </label><br>
                        </div>
                        <div class="radio-container showRadioTime3">
                            <input type="radio" name="road_usage12amTo3pm" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="road_usage12amTo3pm" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="road_usage12amTo3pm" value="كثيرا"><label >كثيرا</label> 
                            <input type="radio" name="road_usage12amTo3pm" value="دائما"><label >دائما</label> 
                        </div>
                    </div>
                    
                    <div class="">
                        <div class="checkbox-container ">
                            <label for="road_usage3pmTo5pm" class="checkbox-item">
                                <input type="checkbox" id="road_usage3pmTo5pm" name="road-usage[]" value="3 - 5م">3 مساء - 5 مساء     
                            </label><br>
                        </div>
                        <div class="radio-container showRadioTime4">
                            <input type="radio" name="road_usage3pmTo5pm" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="road_usage3pmTo5pm" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="road_usage3pmTo5pm" value="كثيرا"><label >كثيرا</label> 
                            <input type="radio" name="road_usage3pmTo5pm" value="دائما"><label >دائما</label> 
                        </div>
                    </div>

                    <div class="">
                        <div class="checkbox-container">
                            <label for="road_usage5pmTo8pm" class="checkbox-item">
                                <input type="checkbox" id="road_usage5pmTo8pm" name="road-usage[]" value="5 - 8م "> 5 مساء - 8 مساء           
                            </label><br>
                        </div>
                        <div class="radio-container showRadioTime5">
                            <input type="radio" name="road_usage5pmTo8pm" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="road_usage5pmTo8pm" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="road_usage5pmTo8pm" value="كثيرا"><label >كثيرا</label> 
                            <input type="radio" name="road_usage5pmTo8pm" value="دائما"><label >دائما</label> 
                        </div>
                    </div>

                    <div class="">
                        <div class="checkbox-container">
                            <label for="road_usage8pmTo11pm" class="checkbox-item">
                                <input type="checkbox" id="road_usage8pmTo11pm" name="road-usage[]" value="8 - 11م "> 8 مساء - 11 مساء         
                            </label><br>
                        </div>
                        <div class="radio-container showRadioTime6">
                            <input type="radio" name="road_usage8pmTo11pm" value="نادرا"><label >نادرا</label> 
                            <input type="radio" name="road_usage8pmTo11pm" value="احيانا"><label >احيانا</label> 
                            <input type="radio" name="road_usage8pmTo11pm" value="كثيرا"><label >كثيرا</label> 
                            <input type="radio" name="road_usage8pmTo11pm" value="دائما"><label >دائما</label> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        function setupCheckboxToggle(checkboxId, radioContainerClass) {
            var checkbox = document.getElementById(checkboxId);
            var radioContainer = document.querySelector('.' + radioContainerClass);
            var radioInput = radioContainer.querySelector('input[value="نادرا"]');
            
            checkbox.addEventListener('change', function() {
                radioContainer.style.display = checkbox.checked ? 'block' : 'none';
                if (checkbox.checked) {
                    radioInput.checked = true;
                }
            });
        }

        setupCheckboxToggle('private_car_radio', 'showRadioCar1');
        setupCheckboxToggle('private_bus_radio', 'showRadioCar2');
        setupCheckboxToggle('private_microbus_radio', 'showRadioCar3');
        setupCheckboxToggle('private_taxi_radio', 'showRadioCar4');
        setupCheckboxToggle('private_motorcycle_radio', 'showRadioCar5');
        setupCheckboxToggle('private_train_radio', 'showRadioCar6');
        setupCheckboxToggle('private_bike_radio', 'showRadioCar7');

        setupCheckboxToggle('road_usage6amTo9am', 'showRadioTime1');
        setupCheckboxToggle('road_usage9amTo12am', 'showRadioTime2');
        setupCheckboxToggle('road_usage12amTo3pm', 'showRadioTime3');
        setupCheckboxToggle('road_usage3pmTo5pm', 'showRadioTime4');
        setupCheckboxToggle('road_usage5pmTo8pm', 'showRadioTime5');
        setupCheckboxToggle('road_usage8pmTo11pm', 'showRadioTime6');
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the checkbox and radio group elements
        var privateCarCheckbox = document.getElementById("private_car_checkbox");
        var privateCarRadios = document.querySelectorAll(".showRadioCar1 input[type='radio']");

        // Add an event listener to the checkbox
        privateCarCheckbox.addEventListener("click", function () {
            if (privateCarCheckbox.checked) {
                // If checkbox is checked, set the first radio option as checked
                privateCarRadios[0].checked = true;
            }
        });
    });
</script>    



</body>
</html>
