<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>




        .checkbox-container,
        .radio-container {
            margin-top: 10px;
        }

        input[type="radio"], {
            font-size:25px;
        }
        .selectLabel {
            margin: 20px 0;
            }
        .arroww::after {
            content: "\25BC";
            display: inline-block;
            margin-left: 10px;
            color: darkred;
            cursor: pointer;
            transition: transform 0.2s;
            font-size: 20px;
            border: 1px solid;
            padding: 10px;
            border-radius: 50px;
        }
        .text-center {
            text-align:center;
            margin-top: 15px;
            
        }
        .d-block {
            display: block;
                }
        .mt-10 {
            margin-top:10px;
                }
        @media screen and (max-width: 450px) {
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
            .arroww::after {
                content: "\25BC";
                display: inline-block;
                margin-left: 10px;
                color: darkred;
                cursor: pointer;
                transition: transform 0.2s;
                font-size: 14px;
                padding: 5px;
                border: 1px solid;
                border-radius: 50px;
            }
            a.d-block {
                    font-size: 12px;
            }
    }
    </style>
</head>
<body>

<div class="content">
    <h2 class="arrow" id="section2" style="cursor: pointer; direction: ltr;"> القسم الثاني: توصيف أماكن الازدحام وتوقيتاتها</h2>

    <div class="form-control questionForm">
        <label for="cairo-road-usage[]" class="questionLabel"> توقيت الازدحام داخل القاهرة الكبري بصفة عامة   :</label>
        <div class="">
            <div class="checkbox-container">
                <label for="road_usage6amTo9amCairo" class="checkbox-item">
                    <input type="checkbox" id="road_usage6amTo9amCairo" name="road-usage[]" value="6ص-9ص"> 6 صباحا - 9 صباحا
                </label><br>
            </div>
            <div class="radio-container showRadioTime11">
                <input type="radio" name="road_usage6amTo9amCairo" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="road_usage6amTo9amCairo" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="road_usage6amTo9amCairo" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="road_usage6amTo9amCairo" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="road_usage9amTo12amCairo" class="checkbox-item">
                    <input type="checkbox" id="road_usage9amTo12amCairo" name="road-usage[]" value="9ص – 12ظ">9 صباحا - 12 ظهرا              
                </label><br>
            </div>
            <div class="radio-container showRadioTime21">
                <input type="radio" name="road_usage9amTo12amCairo" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="road_usage9amTo12amCairo" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="road_usage9amTo12amCairo" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="road_usage9amTo12amCairo" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="road_usage12amTo3pmCairo" class="checkbox-item">
                    <input type="checkbox" id="road_usage12amTo3pmCairo" name="road-usage[]" value="12ظ -  3م "> 12 ظهرا - 3 مساء             
                </label><br>
            </div>
            <div class="radio-container showRadioTime31">
                <input type="radio" name="road_usage12amTo3pmCairo" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="road_usage12amTo3pmCairo" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="road_usage12amTo3pmCairo" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="road_usage12amTo3pmCairo" value="دائما"><label >دائما</label> 
            </div>
        </div>
                    
        <div class="">
            <div class="checkbox-container">
                <label for="road_usage3pmTo5pmCairo" class="checkbox-item">
                    <input type="checkbox" id="road_usage3pmTo5pmCairo" name="road-usage[]" value="3 - 5م">3 مساء - 5 مساء    
                </label><br>
            </div>
            <div class="radio-container showRadioTime41">
                <input type="radio" name="road_usage3pmTo5pmCairo" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="road_usage3pmTo5pmCairo" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="road_usage3pmTo5pmCairo" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="road_usage3pmTo5pmCairo" value="دائما"> <label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="road_usage5pmTo8pmCairo" class="checkbox-item">
                    <input type="checkbox" id="road_usage5pmTo8pmCairo" name="road-usage[]" value="5 - 8م ">  5 مساء - 8 مساء             
                </label><br>
            </div>
            <div class="radio-container showRadioTime51">
                <input type="radio" name="road_usage5pmTo8pmCairo" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="road_usage5pmTo8pmCairo" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="road_usage5pmTo8pmCairo" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="road_usage5pmTo8pmCairo" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="road_usage8pmTo11pmCairo" class="checkbox-item">
                    <input type="checkbox" id="road_usage8pmTo11pmCairo" name="road-usage[]" value="8 - 11م "> 8 مساء - 11 مساء       
                </label><br>
            </div>
            <div class="radio-container showRadioTime61">
                <input type="radio" name="road_usage8pmTo11pmCairo" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="road_usage8pmTo11pmCairo" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="road_usage8pmTo11pmCairo" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="road_usage8pmTo11pmCairo" value="دائما"><label >دائما</label> 
            </div>
        </div>
    </div>

    <div class="form-control questionForm">
        <label class="questionLabel">توصيف أماكن الزحام داخل القاهرة الكبري ونسبتها:</label>
        <div class="">
            <div class="checkbox-container">
                <label for="traffic_median_signals" class="checkbox-item">
                    <input type="checkbox" id="traffic_median_signals" name="traffic-congestion[]"
                        value="ميادين (تقاطعات سطحية) بإشارات مرور ضوئية أو رجل  مرور" class="traffic-congestion-checkbox"> ميادين (تقاطعات سطحية) بإشارات مرور ضوئية أو رجل  مرور
                </label><br>
            </div>
            <div class="radio-container showRadioTrafic1">
                <input type="radio" name="traffic_median_signals" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="traffic_median_signals" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="traffic_median_signals" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="traffic_median_signals" value="دائما"><label >دائما</label> 
            </div>
        </div>
            
        <div class="">
            <div class="checkbox-container">
                <label for="traffic_median_no_signals" class="checkbox-item">
                        <input type="checkbox" id="traffic_median_no_signals" name="traffic-congestion[]"
                    value="ميادين (تقاطعات سطحية) بدون إشارات مرور أو رجل مرور" class="traffic-congestion-checkbox">ميادين (تقاطعات سطحية) بدون إشارات مرور أو رجل مرور
                </label><br>
            </div>
            <div class="radio-container showRadioTrafic2">
                <input type="radio" name="traffic_median_no_signals" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="traffic_median_no_signals" value="احيانا"><label >احيانا</label>
                <input type="radio" name="traffic_median_no_signals" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="traffic_median_no_signals" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="roundabouts" class="checkbox-item">
                        <input type="checkbox" id="roundabouts" name="traffic-congestion[]" value="الدورانات للخلف" class="traffic-congestion-checkbox">الدورانات للخلف نتيجة غلق التقاطعات السطحية
                </label><br>
            </div>
            <div class="radio-container showRadioTrafic3">
                <input type="radio" name="roundabouts" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="roundabouts" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="roundabouts" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="roundabouts" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="around_commercial_areas" class="checkbox-item">
                        <input type="checkbox" id="around_commercial_areas" name="traffic-congestion[]"
                    value="حول المنشآت التجارية والترفيهية" class="traffic-congestion-checkbox"> حول بعض المنشآت والمباني الإدارية والتجارية والتعليمية والترفيهية  
                </label><br>
            </div>
            <div class="radio-container showRadioTrafic4">
                <input type="radio" name="around_commercial_areas" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="around_commercial_areas" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="around_commercial_areas" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="around_commercial_areas" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="bridge_interchanges" class="checkbox-item">
                        <input type="checkbox" id="bridge_interchanges" name="traffic-congestion[]" value="مطالع الكباري" class="traffic-congestion-checkbox"> مداخل ومخارج الكباري والأنفاق   
                </label><br>
            </div>
            <div class="radio-container showRadioTrafic5">
                <input type="radio" name="bridge_interchanges" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="bridge_interchanges" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="bridge_interchanges" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="bridge_interchanges" value="دائما"><label >دائما</label> 
            </div>
        </div>

        <div class="">
            <div class="checkbox-container">
                <label for="areas_with_street_vendors" class="checkbox-item">
                        <input type="checkbox" id="areas_with_street_vendors" name="traffic-congestion[]" value="بالقرب من مواقف النقل الجماعي ومحطات القطار والمترو" class="areas_with_street_vendors"> بالقرب من مواقف النقل الجماعي ومحطات القطار والمترو
                </label><br>
            </div>
            <div class="radio-container showRadioTrafic6">
                <input type="radio" name="areas_with_street_vendors" value="نادرا"><label >نادرا</label> 
                <input type="radio" name="areas_with_street_vendors" value="احيانا"><label >احيانا</label> 
                <input type="radio" name="areas_with_street_vendors" value="كثيرا"><label >كثيرا</label> 
                <input type="radio" name="areas_with_street_vendors" value="دائما"><label >دائما</label> 
            </div>
        </div>
    </div>


    <div class="form-control questionForm">
        <label class="questionLabel selectLabel">	توصيف أدق لأكثر الأماكن ازدحاما في طريقك المعتاد: </label><br>

        <label for="example_type_location" class="questionLabel" >عنوان مكان الازدحام</label>
        <input type="text" id="example_type_location" name="example_type_location" ><br>

        <label for="example-type-1-map" class="questionLabel">موقع مكان الازدحام على الخريطة (إن أمكن)</label>

        <div class="form-control" style="display: none;">
            <label for="address">العنوان</label>
            <input type="text" id="address" name="address" placeholder="ادخل عنوانك" required autocomplete="off">
        </div>

        <div style="display: none;">
            <label for="longitude">Longitude (X):</label>
            <input type="text" id="longitude"  name="longitude" readonly>
        </div>

        <div style="display: none;">
            <label for="latitude">Latitude (Y):</label>
            <input type="text" id="latitude" name="latitude">
        </div>

        <div id="map"></div>
        
        <div>
            <label for="example_type_timing" class="questionLabel">توقيت الزحام:</label>
            <input type="time" id="example_type_timing" name="example_type_timing" ><br>
        </div>


        <div>
            <label class="questionLabel">ايام الزحام:</label>
            <div class="mt-10">
                <label><input type="checkbox" name="example_type_day[]" id="sunday_trafic" value="الأحد">الأحد</label><br>
                <label><input type="checkbox" name="example_type_day[]" id="monday_trafic" value="الإثنين">الإثنين</label><br>
                <label><input type="checkbox" name="example_type_day[]" id="thursday_trafic" value="الثلاثاء">الثلاثاء</label><br>
                <label><input type="checkbox" name="example_type_day[]" id="wednsday_trafic" value="الأربعاء">الأربعاء</label><br>
                <label><input type="checkbox" name="example_type_day[]" id="thusday_trafic" value="الخميس">الخميس</label><br>
                <label><input type="checkbox" name="example_type_day[]" id="friday_trafic" value="الجمعة">الجمعة</label><br>
                <label><input type="checkbox" name="example_type_day[]" id="saturday_trafic" value="السبت">السبت</label><br>
            </div>
            
        </div>


        <div class="text-center">
            <a class="d-block" >في حالة وجود اماكن أخري يرجى اضافتها في القسم الخامس</a>
            <a class="arroww" href="#phase5"></a>
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
        var link = document.querySelector(".arroww");
        var targetSection = document.querySelector("#phase5");

        // Add a click event listener to the link
        link.addEventListener("click", function(event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Add the "open" class to the target section
            targetSection.classList.add("open");

            // Scroll to the target section smoothly
            targetSection.scrollIntoView({ behavior: "smooth" });
        });

        setupCheckboxToggle('road_usage6amTo9amCairo', 'showRadioTime11');
        setupCheckboxToggle('road_usage9amTo12amCairo', 'showRadioTime21');
        setupCheckboxToggle('road_usage12amTo3pmCairo', 'showRadioTime31');
        setupCheckboxToggle('road_usage3pmTo5pmCairo', 'showRadioTime41');
        setupCheckboxToggle('road_usage5pmTo8pmCairo', 'showRadioTime51');
        setupCheckboxToggle('road_usage8pmTo11pmCairo', 'showRadioTime61');

        setupCheckboxToggle('traffic_median_signals', 'showRadioTrafic1');
        setupCheckboxToggle('traffic_median_no_signals', 'showRadioTrafic2');
        setupCheckboxToggle('roundabouts', 'showRadioTrafic3');
        setupCheckboxToggle('around_commercial_areas', 'showRadioTrafic4');
        setupCheckboxToggle('bridge_interchanges', 'showRadioTrafic5');
        setupCheckboxToggle('areas_with_street_vendors', 'showRadioTrafic6');

    });
</script>  




</body>
</html>

