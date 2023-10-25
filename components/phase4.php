<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
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

      input[type="radio"], {
      font-size:25px;
      }
      .selectLabel {
      margin: 20px 0;
      }
      .arrowwwww::after {
            content: "\25BC";
            display: inline-block;
            margin-left: 10px;
            color: darkred;
            cursor: pointer;
            transition: transform 0.2s;
            font-size: 14px;
            padding: 10px;
            border: 1px solid;
            border-radius: 50px;
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
            .arrowwwww::after {
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
      <h2 class="arrow" id="section4" style="cursor: pointer; direction: ltr;">القسم الرابع: حلول الزحام ودرجة تأثيرها</h2>
      
      <div class="form-control questionForm">
            <label class="questionLabel"> التوعية المرورية في التعليم والاعلام ودور العبادة وتشمل:</label><br>

            <div class="">
                  <div class="checkbox-container">
                        <label for="Places_designated_for_pedestrian_crossing">
                              <input type="checkbox" id="Places_designated_for_pedestrian_crossing" name="cultural-solutions-details[]"
                                    value="الالتزام بالأماكن المخصصة لعبور المشاة وتلك المخصصة لانتظار السيارات">
                                    الالتزام بالأماكن المخصصة لعبور المشاة وتلك المخصصة لانتظار السيارات                        
                        </label><br>
                  </div>
                  <div class="radio-container showRadioAwareness1" style="display:none;" >
                        <input type="radio" name="Places_designated_for_pedestrian_crossing" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="Places_designated_for_pedestrian_crossing" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="Places_designated_for_pedestrian_crossing" value="قوي"> <label >قوي</label>
                        <input type="radio" name="Places_designated_for_pedestrian_crossing" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="Traffic_lanes_bridges_and_turns">
                              <input type="checkbox" id="Traffic_lanes_bridges_and_turns" name="cultural-solutions[]"
                                          value="الالتزام بحارات السير خصوصا عند مطالع الكباري والدورانات للخلف">
                                                                  الالتزام بحارات السير خصوصا عند مطالع الكباري والدورانات للخلف
                        </label><br>
                  </div>
                  <div class="radio-container showRadioAwareness2" style="display:none;" >
                        <input type="radio" name="Traffic_lanes_bridges_and_turns" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="Traffic_lanes_bridges_and_turns" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="Traffic_lanes_bridges_and_turns" value="قوي"> <label >قوي</label>
                        <input type="radio" name="Traffic_lanes_bridges_and_turns" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>
            <div class="">
                  <div class="checkbox-container">
                        <label for="Reducing_private_car_peak_times">
                              <input type="checkbox" id="Reducing_private_car_peak_times" name="cultural-solutions[]"
                                          value="التقليل من استخدام السيارة الخاصة خصوصا في أوقات الذروة">
                                                                        التقليل من استخدام السيارة الخاصة خصوصا في أوقات الذروة
                        </label><br>
                  </div>
                  <div class="radio-container showRadioAwareness3" style="display:none;" >
                        <input type="radio" name="Reducing_private_car_peak_times" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="Reducing_private_car_peak_times" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="Reducing_private_car_peak_times" value="قوي"> <label >قوي</label>
                        <input type="radio" name="Reducing_private_car_peak_times" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>
            <div class="">
                  <div class="checkbox-container">
                        <label for="Anticipation_walking_using_bicycles_and_electric">
                              <input type="checkbox" id="Anticipation_walking_using_bicycles_and_electric" name="cultural-solutions[]"
                                          value="التحفيز على المشي واستخدام الدراجات الهوائية والكهربائية ">
                                                                        التحفيز على المشي واستخدام الدراجات الهوائية والكهربائية 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioAwareness4" style="display:none;" >
                        <input type="radio" name="Anticipation_walking_using_bicycles_and_electric" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="Anticipation_walking_using_bicycles_and_electric" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="Anticipation_walking_using_bicycles_and_electric" value="قوي"> <label >قوي</label>
                        <input type="radio" name="Anticipation_walking_using_bicycles_and_electric" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>
            <div class="">
                  <div class="checkbox-container">
                        <label for="Use_mass_transport_and_shared_transport">
                              <input type="checkbox" id="Use_mass_transport_and_shared_transport" name="cultural-solutions[]"
                                          value="التحفيز على استخدام النقل الجماعي والنقل التشاركي">
                                                                        التحفيز على استخدام النقل الجماعي والنقل التشاركي 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioAwareness5" style="display:none;" >
                        <input type="radio" name="Use_mass_transport_and_shared_transport" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="Use_mass_transport_and_shared_transport" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="Use_mass_transport_and_shared_transport" value="قوي"> <label >قوي</label>
                        <input type="radio" name="Use_mass_transport_and_shared_transport" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>
            <div class="">
                  <div class="checkbox-container">
                        <label for="Mobile_applications_report_places_of_crowding">
                              <input type="checkbox" id="Mobile_applications_report_places_of_crowding" name="cultural-solutions[]"
                                          value="عمل تطبيقات على المحمول للإبلاغ الفوري عن أماكن وأسباب الازدحام">
                                                                        عمل تطبيقات على المحمول للإبلاغ الفوري عن أماكن وأسباب الازدحام 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioAwareness6" style="display:none;" >
                        <input type="radio" name="Mobile_applications_report_places_of_crowding" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="Mobile_applications_report_places_of_crowding" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="Mobile_applications_report_places_of_crowding" value="قوي"> <label >قوي</label>
                        <input type="radio" name="Mobile_applications_report_places_of_crowding" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>
      </div>

      <div class="form-control questionForm">
            <label class="questionLabel"> حلول هندسية وتخطيطية -:</label><br>

            <div class="">
                  <div class="checkbox-container">
                        <label for="placesCrossingCheckbox">
                              <input type="checkbox" id="placesCrossingCheckbox" name="cultural-solutions-details[]"
                                    value="عمل أنفاق أو كباري عند التقاطعات السطحية المزدحمة">
                              عمل أنفاق أو كباري عند التقاطعات السطحية المزدحمة
                        </label><br>
                  </div>
                  <div class="radio-container showRadioPlanningSolutions1" style="display:none;">
                        <input type="radio" name="placesCrossingCheckbox" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="placesCrossingCheckbox" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="placesCrossingCheckbox" value="قوي"> <label >قوي</label>
                        <input type="radio" name="placesCrossingCheckbox" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="roadExpansionCheckbox">
                              <input type="checkbox" id="roadExpansionCheckbox" name="cultural-solutions[]"
                                    value="توسعة الطرق المزدحمة أو انشاء محاور بديله">
                              توسعة الطرق المزدحمة أو انشاء محاور بديله
                        </label><br>
                  </div>
                  <div class="radio-container showRadioPlanningSolutions2" style="display:none;">
                        <input type="radio" name="roadExpansionCheckbox" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="roadExpansionCheckbox" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="roadExpansionCheckbox" value="قوي"> <label >قوي</label>
                        <input type="radio" name="roadExpansionCheckbox" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
            <div class="checkbox-container">
                  <label for="parkingAvailabilityCheckbox">
                        <input type="checkbox" id="parkingAvailabilityCheckbox" name="cultural-solutions[]"
                              value="توفير أماكن كافية للانتظار خصوصا حول الأنشطة التجارية والخدمية">
                        توفير أماكن كافية للانتظار خصوصا حول الأنشطة التجارية والخدمية
                  </label><br>
            </div>
            <div class="radio-container showRadioPlanningSolutions3" style="display:none;">
                  <input type="radio" name="parkingAvailabilityCheckbox" value="ضعيف"><label >ضعيف</label>
                  <input type="radio" name="parkingAvailabilityCheckbox" value="متوسط"> <label>متوسط</label>
                  <input type="radio" name="parkingAvailabilityCheckbox" value="قوي"> <label >قوي</label>
                  <input type="radio" name="parkingAvailabilityCheckbox" value="قوي جدا"> <label >قوي جدا</label>   

            </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="roadMaintenanceCheckbox">
                              <input type="checkbox" id="roadMaintenanceCheckbox" name="cultural-solutions[]"
                                    value="الصيانة الدورية للطرق ومعالجة عيوب الرصف">
                              الصيانة الدورية للطرق ومعالجة عيوب الرصف
                        </label><br>
                  </div>
                  <div class="radio-container showRadioPlanningSolutions4" style="display:none;">
                        <input type="radio" name="roadMaintenanceCheckbox" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="roadMaintenanceCheckbox" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="roadMaintenanceCheckbox" value="قوي"> <label >قوي</label>
                        <input type="radio" name="roadMaintenanceCheckbox" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="passengerLoadingAreasCheckbox">
                              <input type="checkbox" id="passengerLoadingAreasCheckbox" name="cultural-solutions[]"
                                    value="تخصيص أماكن تنزيل وتحميل ركاب الملاكي والتاكسي خارج نهر الطريق">
                              تخصيص أماكن تنزيل وتحميل ركاب الملاكي والتاكسي خارج نهر الطريق
                        </label><br>
                  </div>
                  <div class="radio-container showRadioPlanningSolutions5" style="display:none;">
                        <input type="radio" name="passengerLoadingAreasCheckbox" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="passengerLoadingAreasCheckbox" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="passengerLoadingAreasCheckbox" value="قوي"> <label >قوي</label>
                        <input type="radio" name="passengerLoadingAreasCheckbox" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

      </div>

      <div class="form-control questionForm">
            <label class="questionLabel">حلول متعلقة بإدارة المرور -:</label><br>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersections1">
                              <input type="checkbox" id="checkBoxIntersections1" name="cultural-solutions-details[]"
                              value="تركيب وتشغيل إشارات ضوئية عند التقاطعات السطحية المزدحمة">
                              تركيب وتشغيل إشارات ضوئية عند التقاطعات السطحية المزدحمة
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersections1" style="display:none;">
                        <input type="radio" name="checkBoxIntersections1" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersections1" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersections1" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersections1" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersections2">
                              <input type="checkbox" id="checkBoxIntersections2" name="cultural-solutions[]"
                              value="فتح الدورانات للخلف أسفل الكباري مع تركيب وتشغيل إشارة ضوئية">
                              فتح الدورانات للخلف أسفل الكباري مع تركيب وتشغيل إشارة ضوئية
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersections2" style="display:none;">
                        <input type="radio" name="checkBoxIntersections2" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersections2" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersections2" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersections2" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersections3">
                              <input type="checkbox" id="checkBoxIntersections3" name="cultural-solutions[]"
                              value="حظر سير السيارات التي تحمل أقل من 3 أفراد بالغين على الطرق المزدحمة">
                              حظر سير السيارات التي تحمل أقل من 3 أفراد بالغين على الطرق المزدحمة
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersections3" style="display:none;">
                        <input type="radio" name="checkBoxIntersections3" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersections3" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersections3" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersections3" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersections4">
                              <input type="checkbox" id="checkBoxIntersections4" name="cultural-solutions[]"
                              value="استخدام سيارات المراقبة المتحركة لتصوير وتحرير المخالفات علي نهر الطرق">
                              استخدام سيارات المراقبة المتحركة لتصوير وتحرير المخالفات علي نهر الطرق
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersections4" style="display:none;">
                        <input type="radio" name="checkBoxIntersections4" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersections4" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersections4" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersections4" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersections5">
                              <input type="checkbox" id="checkBoxIntersections5" name="cultural-solutions[]"
                              value="تركيب كاميرات مراقبة عند مطالع الكباري والدورانات للخلف">
                              تركيب كاميرات مراقبة عند مطالع الكباري والدورانات للخلف
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersections5" style="display:none;">
                        <input type="radio" name="checkBoxIntersections5" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersections5" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersections5" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersections5" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>



      </div>

      <div class="form-control questionForm">
            <label class="questionLabel">حلول متعلقة بالنقل الجماعي -:</label><br>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionPlaces1">
                              <input type="checkbox" id="checkBoxIntersectionPlaces1" name="cultural-solutions-details[]"
                              value="تخصيص أماكن لمحطات الأتوبيس والميكروباص ">
                              تخصيص أماكن لمحطات الأتوبيس والميكروباص 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsPlace1" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionPlaces1" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionPlaces1" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionPlaces1" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionPlaces1" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionPlaces2">
                              <input type="checkbox" id="checkBoxIntersectionPlaces2" name="cultural-solutions[]"
                              value="ضبط المواعيد واعلانها على المحطات وعلى تطبيقات المحمول">
                              ضبط المواعيد واعلانها على المحطات وعلى تطبيقات المحمول
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsPlace2" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionPlaces2" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionPlaces2" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionPlaces2" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionPlaces2" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionPlaces3">
                              <input type="checkbox" id="checkBoxIntersectionPlaces3" name="cultural-solutions[]"
                              value="تطبيق نظام التذكرة الموحدة لجميع وسائل النقل الجماعي ">
                              تطبيق نظام التذكرة الموحدة لجميع وسائل النقل الجماعي 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsPlace3" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionPlaces3" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionPlaces3" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionPlaces3" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionPlaces3" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionPlaces4">
                              <input type="checkbox" id="checkBoxIntersectionPlaces4" name="cultural-solutions[]"
                              value="الرقابة على خدمة النقل الجماعي ومواعيدها وخط السير والالتزام بالمحطات">
                              الرقابة على خدمة النقل الجماعي ومواعيدها وخط السير والالتزام بالمحطات
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsPlace4" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionPlaces4" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionPlaces4" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionPlaces4" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionPlaces4" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionPlaces5">
                              <input type="checkbox" id="checkBoxIntersectionPlaces5" name="cultural-solutions[]"
                              value="حصر خدمة الميكروباص على الشوارع الفرعية لنقل الركاب إلى محطات الأتوبيس">
                              حصر خدمة الميكروباص على الشوارع الفرعية لنقل الركاب إلى محطات الأتوبيس
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsPlace5" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionPlaces5" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionPlaces5" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionPlaces5" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionPlaces5" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>



      </div>

      <div class="form-control questionForm">
            <label class="questionLabel"> حلول متعلقة بمسارات المشاة والدراجات -:</label><br>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionBikers1">
                              <input type="checkbox" id="checkBoxIntersectionBikers1" name="cultural-solutions-details[]"
                              value="توفير مسارات آمنة للمشاة والدراجات الهوائية والكهربائية">
                              توفير مسارات آمنة للمشاة والدراجات الهوائية والكهربائية
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsBikers1" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionBikers1" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionBikers1" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionBikers1" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionBikers1" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionBikers2">
                              <input type="checkbox" id="checkBoxIntersectionBikers2" name="cultural-solutions[]"
                              value="توفير أماكن لركن وصيانة الدراجات بجميع أنواعها عند محطات النقل الجماعي">
                        توفير أماكن لركن وصيانة الدراجات بجميع أنواعها عند محطات النقل الجماعي
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsBikers2" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionBikers2" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionBikers2" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionBikers2" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionBikers2" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionBikers3">
                              <input type="checkbox" id="checkBoxIntersectionBikers3" name="cultural-solutions[]"
                              value="إعادة تصميم المطبات الصناعية لتكون معابر آمنة للمشاة والدراجات">
                              إعادة تصميم المطبات الصناعية لتكون معابر آمنة للمشاة والدراجات
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsBikers3" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionBikers3" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionBikers3" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionBikers3" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionBikers3" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionBikers4">
                              <input type="checkbox" id="checkBoxIntersectionBikers4" name="cultural-solutions[]"
                              value="إعادة تخطيط التقاطعات السطحية لتوفير معابر المشاة والدراجات ">
                              إعادة تخطيط التقاطعات السطحية لتوفير معابر المشاة والدراجات 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioIntersectionsBikers4" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionBikers4" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionBikers4" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionBikers4" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionBikers4" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>



      </div>

      <div class="form-control questionForm">
            <label class="questionLabel">حلول متعلقة بالتشريع والقوانين -:</label><br>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionLegislation1">
                              <input type="checkbox" id="checkBoxIntersectionLegislation1" name="cultural-solutions-details[]"
                              value="الالزام بالتوعية المرورية في المدارس والجامعات والاعلام">
                              الالزام بالتوعية المرورية في المدارس والجامعات والاعلام
                        </label><br>
                  </div>
                  <div class="radio-container showRadioLegislation1" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionLegislation1" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionLegislation1" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionLegislation1" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionLegislation1" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionLegislation2">
                              <input type="checkbox" id="checkBoxIntersectionLegislation2" name="cultural-solutions[]"
                              value="مراجعة وتشديد التشريعات الخاصة بالالتزام بقواعد الطرق والنقل والمرور ">
                        مراجعة وتشديد التشريعات الخاصة بالالتزام بقواعد الطرق والنقل والمرور 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioLegislation2" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionLegislation2" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionLegislation2" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionLegislation2" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionLegislation2" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionLegislation3">
                              <input type="checkbox" id="checkBoxIntersectionLegislation3" name="cultural-solutions[]"
                              value="مراجعة قواعد الترخيص لشركات النقل البري والموازنة بين المحفزات والعقوبات">
                              مراجعة قواعد الترخيص لشركات النقل البري والموازنة بين المحفزات والعقوبات
                        </label><br>
                  </div>
                  <div class="radio-container showRadioLegislation3" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionLegislation3" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionLegislation3" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionLegislation3" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionLegislation3" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionLegislation4">
                              <input type="checkbox" id="checkBoxIntersectionLegislation4" name="cultural-solutions[]"
                              value="الالزام بدراسات الأثر المروري للمنشآت خصوصا بالقرب من الطرق الرئيسية ">
                              الالزام بدراسات الأثر المروري للمنشآت خصوصا بالقرب من الطرق الرئيسية 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioLegislation4" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionLegislation4" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionLegislation4" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionLegislation4" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionLegislation4" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionLegislation5">
                              <input type="checkbox" id="checkBoxIntersectionLegislation5" name="cultural-solutions-details[]"
                              value="تأسيس كيان رسمي موحد مسؤول عن متابعة وحل مشاكل الزحام المروري ">
                              تأسيس كيان رسمي موحد مسؤول عن متابعة وحل مشاكل الزحام المروري 
                        </label><br>
                  </div>
                  <div class="radio-container showRadioLegislation5" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionLegislation5" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionLegislation5" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionLegislation5" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionLegislation5" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="checkBoxIntersectionLegislation6">
                              <input type="checkbox" id="checkBoxIntersectionLegislation6" name="cultural-solutions-details[]"
                              value="الالزام بإنهاء نسبة معتبرة من المعاملات والخدمات باستخدام التكنولوجيا الرقمية عن بعد">
                              الالزام بإنهاء نسبة معتبرة من المعاملات والخدمات باستخدام التكنولوجيا الرقمية عن بعد
                        </label><br>
                  </div>
                  <div class="radio-container showRadioLegislation6" style="display:none;">
                        <input type="radio" name="checkBoxIntersectionLegislation6" value="ضعيف"><label >ضعيف</label>
                        <input type="radio" name="checkBoxIntersectionLegislation6" value="متوسط"> <label>متوسط</label>
                        <input type="radio" name="checkBoxIntersectionLegislation6" value="قوي"> <label >قوي</label>
                        <input type="radio" name="checkBoxIntersectionLegislation6" value="قوي جدا"> <label >قوي جدا</label>   

                  </div>
            </div>

            <div class="text-center">
                  <a class="d-block" >في حالة وجود حلول أخري يرجى اضافتها في القسم الخامس</a>
                  <a class="arrowwwww" href="#phase5"></a>
            </div>


      </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
        function setupCheckboxToggle(checkboxId, radioContainerClass) {
            var checkbox = document.getElementById(checkboxId);
            var radioContainer = document.querySelector('.' + radioContainerClass);
            var radioInput = radioContainer.querySelector('input[value="ضعيف"]');
            
            checkbox.addEventListener('change', function() {
                radioContainer.style.display = checkbox.checked ? 'block' : 'none';
                if (checkbox.checked) {
                    radioInput.checked = true;
                }
            });
        }

      var link = document.querySelector(".arrowwwww");
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

      setupCheckboxToggle('Places_designated_for_pedestrian_crossing', 'showRadioAwareness1');
      setupCheckboxToggle('Traffic_lanes_bridges_and_turns', 'showRadioAwareness2');
      setupCheckboxToggle('Reducing_private_car_peak_times', 'showRadioAwareness3');
      setupCheckboxToggle('Anticipation_walking_using_bicycles_and_electric', 'showRadioAwareness4');
      setupCheckboxToggle('Use_mass_transport_and_shared_transport', 'showRadioAwareness5');
      setupCheckboxToggle('Mobile_applications_report_places_of_crowding', 'showRadioAwareness6');

      setupCheckboxToggle('placesCrossingCheckbox', 'showRadioPlanningSolutions1');
      setupCheckboxToggle('roadExpansionCheckbox', 'showRadioPlanningSolutions2');
      setupCheckboxToggle('parkingAvailabilityCheckbox', 'showRadioPlanningSolutions3');
      setupCheckboxToggle('roadMaintenanceCheckbox', 'showRadioPlanningSolutions4');
      setupCheckboxToggle('passengerLoadingAreasCheckbox', 'showRadioPlanningSolutions5');

      setupCheckboxToggle('checkBoxIntersections1', 'showRadioIntersections1');
      setupCheckboxToggle('checkBoxIntersections2', 'showRadioIntersections2');
      setupCheckboxToggle('checkBoxIntersections3', 'showRadioIntersections3');
      setupCheckboxToggle('checkBoxIntersections4', 'showRadioIntersections4');
      setupCheckboxToggle('checkBoxIntersections5', 'showRadioIntersections5');

      setupCheckboxToggle('checkBoxIntersectionPlaces1', 'showRadioIntersectionsPlace1');
      setupCheckboxToggle('checkBoxIntersectionPlaces2', 'showRadioIntersectionsPlace2');
      setupCheckboxToggle('checkBoxIntersectionPlaces3', 'showRadioIntersectionsPlace3');
      setupCheckboxToggle('checkBoxIntersectionPlaces4', 'showRadioIntersectionsPlace4');
      setupCheckboxToggle('checkBoxIntersectionPlaces5', 'showRadioIntersectionsPlace5');

      setupCheckboxToggle('checkBoxIntersectionBikers1', 'showRadioIntersectionsBikers1');
      setupCheckboxToggle('checkBoxIntersectionBikers2', 'showRadioIntersectionsBikers2');
      setupCheckboxToggle('checkBoxIntersectionBikers3', 'showRadioIntersectionsBikers3');
      setupCheckboxToggle('checkBoxIntersectionBikers4', 'showRadioIntersectionsBikers4');

      setupCheckboxToggle('checkBoxIntersectionLegislation1', 'showRadioLegislation1');
      setupCheckboxToggle('checkBoxIntersectionLegislation2', 'showRadioLegislation2');
      setupCheckboxToggle('checkBoxIntersectionLegislation3', 'showRadioLegislation3');
      setupCheckboxToggle('checkBoxIntersectionLegislation4', 'showRadioLegislation4');
      setupCheckboxToggle('checkBoxIntersectionLegislation5', 'showRadioLegislation5');
      setupCheckboxToggle('checkBoxIntersectionLegislation6', 'showRadioLegislation6');












});
</script>  
</body>
</html>