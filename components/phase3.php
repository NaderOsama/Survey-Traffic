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
                  border: 1px solid #16bc0d;
                  background-color: #f4f6f4;


            }

            .checkbox-container,
            .radio-container {
            margin-top: 10px;
            }

            .radio-container {
            display: none;
            }
            .arrowww::after {
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
            input[type="radio"], {
                  font-size:25px;
            }
            @media screen and (max-width: 450px) {
      
            /* Further adjustments for even smaller screens */
                  .questionForm select,
                  .questionForm input[type="radio"],
                  .questionLabel,
                  h2 {
                  font-size: 10px;
                  }
            
                  /* Adjust margins or padding as needed */
                  .checkbox-container,
                  .radio-container {
                  margin-top: 2px;
                  }
            
                  label {
                  font-size: 14px;
                  }
                  .arrowww::after {
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
      <h2 class="arrow" id="section3" style="cursor: pointer; direction: ltr;">القسم الثالث: أسباب الازدحام ودرجات تأثيرها</h2>

      <div class="form-control questionForm">
            <label class="questionLabel">الأسباب العامة ودرجات تأثيرها</label>
            <div class="">
                  <div class="checkbox-container">
                  <label for="behavioral_and_cultural_reasons">
                        <input type="checkbox" id="behavioral_and_cultural_reasons" name="General_interface_and_its_impact_scores[]" value="أسباب تتعلق بالسلوك والثقافة"> أسباب تتعلق بالسلوك والثقافة
                  </label><br>
                  </div>
                  <div class="radio-container showRadio1" style="display:none;" >
                  <input type="radio" name="behavioral_and_cultural_reasons" value="ضعيف"> <label >ضعيف</label>
                  <input type="radio" name="behavioral_and_cultural_reasons" value="متوسط"> <label >متوسط</label>  
                  <input type="radio" name="behavioral_and_cultural_reasons" value="قوي"> <label >قوي</label>
                  <input type="radio" name="behavioral_and_cultural_reasons" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                  <label for="road_engineering_and_planning">
                        <input type="checkbox" id="road_engineering_and_planning" name="General_interface_and_its_impact_scores[]" value="أسباب تتعلق بهندسة وتخطيط الطرق">
                        أسباب تتعلق بهندسة وتخطيط الطرق
                  </label><br>
                  </div>
                  <div class="radio-container showRadio2" style="display:none;" >
                   <input type="radio" name="road_engineering_and_planning" value="ضعيف"> <label >ضعيف</label>
                    <input type="radio" name="road_engineering_and_planning" value="متوسط"> <label >متوسط</label>  
                  <input type="radio" name="road_engineering_and_planning" value="قوي"> <label >قوي</label>
                  <input type="radio" name="road_engineering_and_planning" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                  <label for="traffic_management_reasons">
                        <input type="checkbox" id="traffic_management_reasons" name="General_interface_and_its_impact_scores[]" value="أسباب تتعلق بإدارة المرور">
                        أسباب تتعلق بإدارة المرور
                  </label><br>
                  </div>
                  <div class="radio-container showRadio3" style="display:none;" >
                   <input type="radio" name="traffic_management_reasons" value="ضعيف"> <label >ضعيف</label>
                    <input type="radio" name="traffic_management_reasons" value="متوسط"> <label >متوسط</label>  
                  <input type="radio" name="traffic_management_reasons" value="قوي"> <label >قوي</label>
                  <input type="radio" name="traffic_management_reasons" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                  <label for="reasons_of_mass_transit">
                        <input type="checkbox" id="reasons_of_mass_transit" name="General_interface_and_its_impact_scores[]" value="أسباب تتعلق بالنقل الجماعي">
                        أسباب تتعلق بالنقل الجماعي
                  </label><br>
                  </div>
                  <div class="radio-container showRadio4" style="display:none;" >
                   <input type="radio" name="reasons_of_mass_transit" value="ضعيف"> <label >ضعيف</label>
                    <input type="radio" name="reasons_of_mass_transit" value="متوسط"> <label >متوسط</label>  
                  <input type="radio" name="reasons_of_mass_transit" value="قوي"> <label >قوي</label>
                  <input type="radio" name="reasons_of_mass_transit" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                  <label for="reasons_of_pedestrian_and_bicycle">
                        <input type="checkbox" id="reasons_of_pedestrian_and_bicycle" name="General_interface_and_its_impact_scores[]" value="أسباب تتعلق بمسارات المشاة والدراجات">
                        أسباب تتعلق بمسارات المشاة والدراجات
                  </label><br>
                  </div>
                  <div class="radio-container showRadio5" style="display:none;" >
                   <input type="radio" name="reasons_of_pedestrian_and_bicycle" value="ضعيف"> <label >ضعيف</label>
                    <input type="radio" name="reasons_of_pedestrian_and_bicycle" value="متوسط"> <label >متوسط</label>  
                  <input type="radio" name="reasons_of_pedestrian_and_bicycle" value="قوي"> <label >قوي</label>
                  <input type="radio" name="reasons_of_pedestrian_and_bicycle" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                  <label for="reasons_of_legislation_and_laws">
                        <input type="checkbox" id="reasons_of_legislation_and_laws" name="General_interface_and_its_impact_scores[]" value="أسباب تتعلق بالتشريع والقوانين">
                        أسباب تتعلق بالتشريع والقوانين
                  </label><br>
                  </div>
                  <div class="radio-container showRadio6" style="display:none;" >
                   <input type="radio" name="reasons_of_legislation_and_laws" value="ضعيف"> <label >ضعيف</label>
                    <input type="radio" name="reasons_of_legislation_and_laws" value="متوسط"> <label >متوسط</label>  
                  <input type="radio" name="reasons_of_legislation_and_laws" value="قوي"> <label >قوي</label>
                  <input type="radio" name="reasons_of_legislation_and_laws" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
      </div>


      <div class="form-control questionForm">
            <label class="questionLabel">أسباب الزحام المتعلقة بالسلوك والثقافة</label>
            <div class="">
                  <div class="checkbox-container">
                        <label for="wrong_Mlaki_parking">
                              <input type="checkbox" id="wrong_Mlaki_parking" name="culture-behavior-reasons[]" value="الانتظار الخاطئ للسيارات الملاكي">
                              الانتظار الخاطئ للسيارات الملاكي
                        </label><br>
                  </div>
                  <div class="radio-container showRadio7" style="display:none;" >
                         <input type="radio" name="wrong_Mlaki_parking" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="wrong_Mlaki_parking" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="wrong_Mlaki_parking" value="قوي"> <label >قوي</label>
                        <input type="radio" name="wrong_Mlaki_parking" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="random_bus_stop">
                              <input type="checkbox" id="random_bus_stop" name="culture-behavior-reasons[]" value="التوقف العشوائي للأتوبيس"> التوقف العشوائي للأتوبيس والميكروباص والتاكسي 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio9" style="display:none;" >
                         <input type="radio" name="random_bus_stop" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="random_bus_stop" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="random_bus_stop" value="قوي"> <label >قوي</label>
                        <input type="radio" name="random_bus_stop" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
            
            <div class="">
                  <div class="checkbox-container">
                        <label for="random_crossing_of_road">
                              <input type="checkbox" id="random_crossing_of_road" name="culture-behavior-reasons[]" value="العبور العشوائي للمشاة">
                              العبور العشوائي للمشاة
                        </label><br>
                  </div>
                  <div class="radio-container showRadio8" style="display:none;" >
                         <input type="radio" name="random_crossing_of_road" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="random_crossing_of_road" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="random_crossing_of_road" value="قوي"> <label >قوي</label>
                        <input type="radio" name="random_crossing_of_road" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="excessive_passenger_car_exit">
                              <input type="checkbox" id="excessive_passenger_car_exit" name="culture-behavior-reasons[]" value="الافراط في استخدام السيارات الخاصة (الملاكي)">
                        الافراط في استخدام السيارات الخاصة (الملاكي)
                        </label><br>
                  </div>
                  <div class="radio-container showRadio14" style="display:none;" >
                         <input type="radio" name="excessive_passenger_car_exit" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="excessive_passenger_car_exit" value="متوسط"> <label >متوسط</label>  
                          <input type="radio" name="excessive_passenger_car_exit" value="قوي"> <label >قوي</label>
                        <input type="radio" name="excessive_passenger_car_exit" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
            
            <div class="">
                  <div class="checkbox-container">
                        <label for="low_bicycle_usage_lack_of_pedestrian">
                              <input type="checkbox" id="low_bicycle_usage_lack_of_pedestrian" name="culture-behavior-reasons[]" value="انخفاض ثقافة المشي واستخدام الدراجات الهوائية">
                              انخفاض ثقافة المشي واستخدام الدراجات الهوائية
                        </label><br> 
                  </div>
                  <div class="radio-container showRadio16" style="display:none;" >
                         <input type="radio" name="low_bicycle_usage_lack_of_pedestrian" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="low_bicycle_usage_lack_of_pedestrian" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="low_bicycle_usage_lack_of_pedestrian" value="قوي"> <label >قوي</label>
                        <input type="radio" name="low_bicycle_usage_lack_of_pedestrian" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
                        
      </div>


      <div class="form-control questionForm">
            <label class="questionLabel"> أسباب الزحام المتعلقة بهندسة وتخطيط الطرق :</label>
            <div class="">
                  <div class="checkbox-container">
                        <label for="insufficient_road_or_tunnel_width">
                              <input type="checkbox" id="insufficient_road_or_tunnel_width" name="engineering-planning-reasons[]"
                                    value="عدم كفاية عرض الطريق في بعض الأماكن">
                              عدم كفاية عرض الطريق في بعض الأماكن
                        </label><br>
                  </div>
                  <div class="radio-container showRadio20" style="display:none;" >
                         <input type="radio" name="insufficient_road_or_tunnel_width" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="insufficient_road_or_tunnel_width" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="insufficient_road_or_tunnel_width" value="قوي"> <label >قوي</label>
                        <input type="radio" name="insufficient_road_or_tunnel_width" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="poor_bridge_interchanges_design">
                              <input type="checkbox" id="poor_bridge_interchanges_design" name="engineering-planning-reasons[]"
                                    value="عدم كفاية عروض مداخل ومخارج الكباري والأنفاق">
                        عدم كفاية عروض مداخل ومخارج الكباري والأنفاق
                        </label><br>
                  </div>
                  <div class="radio-container showRadio19" style="display:none;" >
                         <input type="radio" name="poor_bridge_interchanges_design" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="poor_bridge_interchanges_design" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="poor_bridge_interchanges_design" value="قوي"> <label >قوي</label>
                        <input type="radio" name="poor_bridge_interchanges_design" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="excessive_roundabouts">
                              <input type="checkbox" id="excessive_roundabouts" name="engineering-planning-reasons[]" value="تباعد أماكن الدورانات للخلف ">
                              تباعد أماكن الدورانات للخلف 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio18" style="display:none;" >
                         <input type="radio" name="excessive_roundabouts" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="excessive_roundabouts" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="excessive_roundabouts" value="قوي"> <label >قوي</label>
                        <input type="radio" name="excessive_roundabouts" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
      
            <div class="">
                  <div class="checkbox-container">
                        <label for="poor_bridge_design_for_pedestrians">
                              <input type="checkbox" id="poor_bridge_design_for_pedestrians" name="engineering-planning-reasons[]"
                                    value="كثرة المطبات الصناعية وعيوب الرصف ">
                              كثرة المطبات الصناعية وعيوب الرصف 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio31" style="display:none;" >
                         <input type="radio" name="poor_bridge_design_for_pedestrians" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="poor_bridge_design_for_pedestrians" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="poor_bridge_design_for_pedestrians" value="قوي"> <label >قوي</label>
                        <input type="radio" name="poor_bridge_design_for_pedestrians" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="insufficient_parking_around_commercial_areas">
                              <input type="checkbox" id="insufficient_parking_around_commercial_areas" name="engineering-planning-reasons[]"
                                    value="عدم وجود ساحات كافية للانتظار حول الأنشطة التجارية والخدمية">
                              عدم وجود ساحات كافية للانتظار حول الأنشطة التجارية والخدمية 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio23" style="display:none;" >
                         <input type="radio" name="insufficient_parking_around_commercial_areas" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="insufficient_parking_around_commercial_areas" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="insufficient_parking_around_commercial_areas" value="قوي"> <label >قوي</label>
                        <input type="radio" name="insufficient_parking_around_commercial_areas" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
      </div>

      <div class="form-control questionForm">
            <label class="questionLabel"> أسباب الزحام المتعلقة بإدارة المرور :</label>

            <div class="">
                  <div class="checkbox-container">
                        <label for="insufficient_traffic_lights">
                              <input type="checkbox" id="insufficient_traffic_lights" name="engineering-planning-reasons[]" value="نقص إشارات المرور الضوئية في الميادين"> 
                              نقص إشارات المرور الضوئية في الميادين
                        </label><br>
                  </div>
                  <div class="radio-container showRadio17" style="display:none;" >
                         <input type="radio" name="insufficient_traffic_lights" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="insufficient_traffic_lights" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="insufficient_traffic_lights" value="قوي"> <label >قوي</label>
                        <input type="radio" name="insufficient_traffic_lights" value="قوي جدا"> <label >قوي جدا</label>
                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="bus_and_microbus_stops_in_riverway">
                              <input type="checkbox" id="bus_and_microbus_stops_in_riverway" name="engineering-planning-reasons[]"
                                    value="نقص إشارات المرور الضوئية عند مداخل الكباري والمحاور الهامة">
                              نقص إشارات المرور الضوئية عند مداخل الكباري والمحاور الهامة
                        </label><br>
                  </div>
                  <div class="radio-container showRadio21" style="display:none;" >
                         <input type="radio" name="bus_and_microbus_stops_in_riverway" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="bus_and_microbus_stops_in_riverway" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="bus_and_microbus_stops_in_riverway" value="قوي"> <label >قوي</label>
                        <input type="radio" name="bus_and_microbus_stops_in_riverway" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="lack_of_bicycle_lanes">
                              <input type="checkbox" id="lack_of_bicycle_lanes" name="engineering-planning-reasons[]"
                                    value="عدم التوجيه للمسارات البديلة للطرق التي بها أعمال صيانة أو تطوير ">
                              عدم التوجيه للمسارات البديلة للطرق التي بها أعمال صيانة أو تطوير 
                  </label><br>
                  </div>
                  <div class="radio-container showRadio29" style="display:none;" >
                         <input type="radio" name="lack_of_bicycle_lanes" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="lack_of_bicycle_lanes" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="lack_of_bicycle_lanes" value="قوي"> <label >قوي</label>
                        <input type="radio" name="lack_of_bicycle_lanes" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="non_compliance_with_traffic_signs_specifications">
                              <input type="checkbox" id="non_compliance_with_traffic_signs_specifications" name="engineering-planning-reasons[]"
                                    value="عدم الإخطار الفوري لمخالفات الانتظار الخاطئ والوقوف العشوائي للسيارات ">
                              عدم الإخطار الفوري لمخالفات الانتظار الخاطئ والوقوف العشوائي للسيارات 
                        </label><br> 

                  </div>
                  <div class="radio-container showRadio33" style="display:none;" >
                         <input type="radio" name="non_compliance_with_traffic_signs_specifications" value="ضعيف"> <label >ضعيف</label>
                         <input type="radio" name="non_compliance_with_traffic_signs_specifications" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="non_compliance_with_traffic_signs_specifications" value="قوي"> <label >قوي</label>
                        <input type="radio" name="non_compliance_with_traffic_signs_specifications" value="قوي جدا"> <label >قوي جدا</label>

                        
                  </div>
            </div> 

            <div class="">
                  <div class="checkbox-container">
                        <label for="poor_official_public_transport_service_level">
                              <input type="checkbox" id="poor_official_public_transport_service_level" name="engineering-planning-reasons[]"
                                    value="ضعف مقاومة تواجد الباعة الجائلين على جانبي بعض الطرق">
                        ضعف مقاومة تواجد الباعة الجائلين على جانبي بعض الطرق
                        </label><br>
                  </div>
                  <div class="radio-container showRadio26" style="display:none;" >
                         <input type="radio" name="poor_official_public_transport_service_level" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="poor_official_public_transport_service_level" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="poor_official_public_transport_service_level" value="قوي"> <label >قوي</label>
                        <input type="radio" name="poor_official_public_transport_service_level" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>


            <div class="">
                  <div class="checkbox-container">
                        <label for="commercial_entities_using_sidewalks">
                              <input type="checkbox" id="commercial_entities_using_sidewalks" name="engineering-planning-reasons[]"
                                    value="التأخر في رفع أثار الحوادث ">
                        التأخر في رفع أثار الحوادث 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio30" style="display:none;" >
                         <input type="radio" name="commercial_entities_using_sidewalks" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="commercial_entities_using_sidewalks" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="commercial_entities_using_sidewalks" value="قوي"> <label >قوي</label>
                        <input type="radio" name="commercial_entities_using_sidewalks" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
      </div>


      <div class="form-control questionForm" >
                  <label class="questionLabel">أسباب الزحام المتعلقة بالنقل الجماعي :</label>

                  <div class="">
                        <div class="checkbox-container">
                              <label for="insufficient_taxi_pickup_and_drop_off_areas">
                                    <input type="checkbox" id="insufficient_taxi_pickup_and_drop_off_areas" name="engineering-planning-reasons[]"
                                          value="عدم وجود أماكن لتنزيل وتحميل ركاب التاكسي حول الأنشطة التجارية والخدمية">
                                    عدم وجود مواعيد منتظمة ومعلنة للأتوبيس
                              </label><br>
                        </div>
                        <div class="radio-container showRadio22" style="display:none;" >
                               <input type="radio" name="insufficient_taxi_pickup_and_drop_off_areas" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="insufficient_taxi_pickup_and_drop_off_areas" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="insufficient_taxi_pickup_and_drop_off_areas" value="قوي"> <label >قوي</label>
                              <input type="radio" name="insufficient_taxi_pickup_and_drop_off_areas" value="قوي جدا"> <label >قوي جدا</label>

                        </div>
                  </div>
            
                  <div class="">
                        <div class="checkbox-container">
                              <label for="concentration_of_government_and_private_entities_work">
                                    <input type="checkbox" id="concentration_of_government_and_private_entities_work"
                                          name="engineering-planning-reasons[]" value="تركز عمل الجهات الحكومية والخاصة في نفس التوقيتات">
                              سوء الخدمة والتزاحم عند المحطات والوقوف أثناء الرحلة
                              </label><br>
                        </div>
                        <div class="radio-container showRadio24" style="display:none;" >
                               <input type="radio" name="concentration_of_government_and_private_entities_work" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="concentration_of_government_and_private_entities_work" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="concentration_of_government_and_private_entities_work" value="قوي"> <label >قوي</label>
                              <input type="radio" name="concentration_of_government_and_private_entities_work" value="قوي جدا"> <label >قوي جدا</label>

                        </div>
                  </div>

                  <div class="">
                        <div class="checkbox-container">
                              <label for="insufficient_alternatives_for_urban_transportation">
                                    <input type="checkbox" id="insufficient_alternatives_for_urban_transportation" name="engineering-planning-reasons[]"
                                          value="عدم وجود بدائل كافية للتنقل داخل المدينة">
                                    ارتفاع تكلفتها نتيجة كثرة التبديل بين الخطوط
                              </label><br>
                        </div>
                        <div class="radio-container showRadio25" style="display:none;" >
                               <input type="radio" name="insufficient_alternatives_for_urban_transportation" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="insufficient_alternatives_for_urban_transportation" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="insufficient_alternatives_for_urban_transportation" value="قوي"> <label >قوي</label>
                              <input type="radio" name="insufficient_alternatives_for_urban_transportation" value="قوي جدا"> <label >قوي جدا</label>

                        </div>
                  </div>

                  <div class="">
                        <div class="checkbox-container">
                              <label for="lack_of_appropriate_pedestrian_crossings">
                                    <input type="checkbox" id="lack_of_appropriate_pedestrian_crossings" name="engineering-planning-reasons[]"
                                          value="عدم وجود مناطق او كباري  او انفاق مناسبة لعبور المشاة">
                              عدم كفايتها وتغطيتها لجميع الأماكن مما يتطلب المشي لمسافة كبيرة من وإلى المحطة 
                              </label><br>
                        </div>
                        <div class="radio-container showRadio27" style="display:none;" >
                               <input type="radio" name="lack_of_appropriate_pedestrian_crossings" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="lack_of_appropriate_pedestrian_crossings" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="lack_of_appropriate_pedestrian_crossings" value="قوي"> <label >قوي</label>
                              <input type="radio" name="lack_of_appropriate_pedestrian_crossings" value="قوي جدا"> <label >قوي جدا</label>

                        </div>
                  </div>

                  <div class="">
                        <div class="checkbox-container">
                              <label for="difficulty_using_pedestrian_crossings">
                                    <input type="checkbox" id="difficulty_using_pedestrian_crossings" name="engineering-planning-reasons[]"
                                          value="صعوبة استخدام معابر المشاه مثل الكباري  والانفاق او طول المسافه لاستخدام المعبر">
                                          استشعار الخوف وعدم الأمان من ركوب النقل الجماعي                             
                                    </label><br>
                        </div>
                        <div class="radio-container showRadio28" style="display:none;" >
                               <input type="radio" name="difficulty_using_pedestrian_crossings" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="difficulty_using_pedestrian_crossings" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="difficulty_using_pedestrian_crossings" value="قوي"> <label >قوي</label>
                              <input type="radio" name="difficulty_using_pedestrian_crossings" value="قوي جدا"> <label >قوي جدا</label>

                        </div>
                  </div>

      </div>

      <div class="form-control questionForm">
            <label class="questionLabel">أسباب الزحام المتعلقة بمسارات المشاة والدراجات :</label>

            <div class="">
                  <div class="checkbox-container">
                        <label for="lack_of_separation_between_traffic_and_pedestrian_paths">
                              <input type="checkbox" id="lack_of_separation_between_traffic_and_pedestrian_paths"
                                          name="engineering-planning-reasons[]" value="استغلال الأرصفة من قبل بعض الكيانات التجارية والباعة الجائلين">
                                    استغلال الأرصفة من قبل بعض الكيانات التجارية والباعة الجائلين
                        </label><br>

                  </div>
                  <div class="radio-container showRadio32" style="display:none;" >
                         <input type="radio" name="lack_of_separation_between_traffic_and_pedestrian_paths" value="ضعيف"> <label >ضعيف</label>
                          <input type="radio" name="lack_of_separation_between_traffic_and_pedestrian_paths" value="متوسط"> <label >متوسط</label>  
                        <input type="radio" name="lack_of_separation_between_traffic_and_pedestrian_paths" value="قوي"> <label >قوي</label>
                        <input type="radio" name="lack_of_separation_between_traffic_and_pedestrian_paths" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="inappropriateness_of_public_transportation">
                              <input type="checkbox" id="inappropriateness_of_public_transportation" name="low-public-transport-usage-reasons[]" value="قلة وجود كباري أو أنفاق أو مناطق سهلة ومناسبة لعبور المشاة والدراجات">
                        قلة وجود كباري أو أنفاق أو مناطق سهلة ومناسبة لعبور المشاة والدراجات
                        </label><br>
                  </div>

                  <div class="radio-container showRadio34" style="display:none;" >
                              <input type="radio" name="inappropriateness_of_public_transportation" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="inappropriateness_of_public_transportation" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="inappropriateness_of_public_transportation" value="قوي"> <label >قوي</label>
                              <input type="radio" name="inappropriateness_of_public_transportation" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="unavailability_of_public_transportation">
                              <input type="checkbox" id="unavailability_of_public_transportation" name="low-public-transport-usage-reasons[]" value="عدم تخصيص مسارات للمشاة والدراجات مفصولة عن حركة السيارات ">
                              عدم تخصيص مسارات للمشاة والدراجات مفصولة عن حركة السيارات 
                        </label><br>

                  </div>

                  <div class="radio-container showRadio35" style="display:none;" >
                              <input type="radio" name="unavailability_of_public_transportation" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="unavailability_of_public_transportation" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="unavailability_of_public_transportation" value="قوي"> <label >قوي</label>
                              <input type="radio" name="unavailability_of_public_transportation" value="قوي جدا"> <label >قوي جدا</label>

                  </div>

            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="lack_of_integration_of_public_transportation">
                              <input type="checkbox" id="lack_of_integration_of_public_transportation" name="low-public-transport-usage-reasons[]" value="عدم تخصيص اماكن جلوس/استراحة كافية على الأرصفة لاستراحة المشاة"> 
                              عدم تخصيص اماكن جلوس/استراحة كافية على الأرصفة لاستراحة المشاة   
                        </label><br>
                  </div> 
                  <div class="radio-container showRadio36" style="display:none;" >
                              <input type="radio" name="lack_of_integration_of_public_transportation" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="lack_of_integration_of_public_transportation" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="lack_of_integration_of_public_transportation" value="قوي"> <label >قوي</label>
                              <input type="radio" name="lack_of_integration_of_public_transportation" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="high_cost_of_public_transportation">
                              <input type="checkbox" id="high_cost_of_public_transportation" name="low-public-transport-usage-reasons[]" value="عدم تخصيص أماكن لانتظار وصيانة وإيجار الدراجات الهوائية والكهربائية"> 
                              عدم تخصيص أماكن لانتظار وصيانة وإيجار الدراجات الهوائية والكهربائية
                        </label><br>
                  </div>
                  <div class="radio-container showRadio37" style="display:none;" >
                              <input type="radio" name="high_cost_of_public_transportation" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="high_cost_of_public_transportation" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="high_cost_of_public_transportation" value="قوي"> <label >قوي</label>
                              <input type="radio" name="high_cost_of_public_transportation" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="lack_of_scheduled_timings">
                              <input type="checkbox" id="lack_of_scheduled_timings" name="low-public-transport-usage-reasons[]"
                                    value="عدم وجود مواعيد منتظمة او محدده">
                        استشعار الخوف وعدم الامان من المشي واستخدام الدراجات   
                        </label><br>
                  </div>
                  <div class="radio-container showRadio38" style="display:none;" >
                              <input type="radio" name="lack_of_scheduled_timings" value="ضعيف"> <label >ضعيف</label>
                              <input type="radio" name="lack_of_scheduled_timings" value="متوسط"> <label >متوسط</label>    
                              <input type="radio" name="lack_of_scheduled_timings" value="قوي"> <label >قوي</label>
                              <input type="radio" name="lack_of_scheduled_timings" value="قوي جدا"> <label >قوي جدا</label>
                  </div>
            </div>

      </div>

      <div class="form-control questionForm">
            <label class="questionLabel">أسباب الزحام المتعلقة بالتشريع والقوانين:</label>

            <div class="">
                  <div class="checkbox-container">
                        <label for="driver_ill_treatment">
                              <input type="checkbox" id="driver_ill_treatment" name="low-public-transport-usage-reasons[]"
                                    value="عدم وجود كيان رسمي له سلطة ومسئولية واختصاص لمتابعة الزحام بالقاهرة الكبري ">
                        عدم وجود كيان رسمي له سلطة ومسئولية واختصاص لمتابعة الزحام بالقاهرة الكبري  
                        </label><br>
                  </div> 
                  <div class="radio-container showRadio39" style="display:none;" >
                              <input type="radio" name="driver_ill_treatment" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="driver_ill_treatment" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="driver_ill_treatment" value="قوي"> <label >قوي</label>
                              <input type="radio" name="driver_ill_treatment" value="قوي جدا"> <label >قوي جدا</label>


                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="lack_of_air_conditioning">
                              <input type="checkbox" id="lack_of_air_conditioning" name="low-public-transport-usage-reasons[]"
                                    value="قلة القوانين الصارمة للحد من السلوكيات العشوائية من السيارات والمشاة والباعة الجائلين">
                        قلة القوانين الصارمة للحد من السلوكيات العشوائية من السيارات والمشاة والباعة الجائلين
                        </label><br>
                  </div> 
                  <div class="radio-container showRadio40" style="display:none;" >
                              <input type="radio" name="lack_of_air_conditioning" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="lack_of_air_conditioning" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="lack_of_air_conditioning" value="قوي"> <label >قوي</label>
                              <input type="radio" name="lack_of_air_conditioning" value="قوي جدا"> <label >قوي جدا</label>

                  </div>
            </div>
            
            <div class="">
                  <div class="checkbox-container">
                        <label for="unwillingness_to_walk_long_distances">
                              <input type="checkbox" id="unwillingness_to_walk_long_distances" name="low-public-transport-usage-reasons[]"
                                    value="ضعف الضوابط الحاكمة في منح التراخيص للمنشآت التجارية والخدمية على الطرق الهامة">
                        ضعف الضوابط الحاكمة في منح التراخيص للمنشآت التجارية والخدمية على الطرق الهامة
                        </label><br>
                  </div> 
                  <div class="radio-container showRadio41" style="display:none;" >
                              <input type="radio" name="unwillingness_to_walk_long_distances" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="unwillingness_to_walk_long_distances" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="unwillingness_to_walk_long_distances" value="قوي"> <label >قوي</label>
                              <input type="radio" name="unwillingness_to_walk_long_distances" value="قوي جدا"> <label >قوي جدا</label>

                  </div>

            </div>


            <div class="">
                  <div class="checkbox-container">
                        <label for="fear_and_lack_of_safety">
                              <input type="checkbox" id="fear_and_lack_of_safety" name="low-public-transport-usage-reasons[]"
                                    value="محدودية إنهاء الإجراءات والمعاملات الحكومية بشكل إليكتروني ">
                              محدودية إنهاء الإجراءات والمعاملات الحكومية بشكل إليكتروني  
                        </label><br>
                  </div>
                  <div class="radio-container showRadio42" style="display:none;" >
                               <input type="radio" name="fear_and_lack_of_safety" value="ضعيف"> <label >ضعيف</label>
                               <input type="radio" name="fear_and_lack_of_safety" value="متوسط"> <label >متوسط</label>  
                               <input type="radio" name="fear_and_lack_of_safety" value="قوي"> <label >قوي</label>
                              <input type="radio" name="fear_and_lack_of_safety" value="قوي جدا"> <label >قوي جدا</label>

                              
                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="Government_and_private_offices_and_services">
                              <input type="checkbox" id="Government_and_private_offices_and_services" name="low-public-transport-usage-reasons[]"
                                    value="تركز أماكن المصالح الحكومية والخاصة في أماكن محددة وعدم توزيعها على جميع المناطق ">
                              تركز أماكن المصالح الحكومية والخاصة في أماكن محددة وعدم توزيعها على جميع المناطق 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio43" style="display:none;" >
                              <input type="radio" name="Government_and_private_offices_and_services" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="Government_and_private_offices_and_services" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="Government_and_private_offices_and_services" value="قوي"> <label >قوي</label>
                              <input type="radio" name="Government_and_private_offices_and_services" value="قوي جدا"> <label >قوي جدا</label>

                              
                  </div>
            </div>

            <div class="">
                  <div class="checkbox-container">
                        <label for="Working_hours_for_both_government_and_private">
                              <input type="checkbox" id="Working_hours_for_both_government_and_private" name="low-public-transport-usage-reasons[]"
                                    value="تركز توقيت عمل الجهات الحكومية والخاصة في أيام وتوقيتات متقاربه ">
                        تركز توقيت عمل الجهات الحكومية والخاصة في أيام وتوقيتات متقاربه 
                        </label><br>
                  </div>
                  <div class="radio-container showRadio44" style="display:none;" >
                              <input type="radio" name="Working_hours_for_both_government_and_private" value="ضعيف"> <label >ضعيف</label>
                                <input type="radio" name="Working_hours_for_both_government_and_private" value="متوسط"> <label >متوسط</label>  
                              <input type="radio" name="Working_hours_for_both_government_and_private" value="قوي"> <label >قوي</label>
                              <input type="radio" name="Working_hours_for_both_government_and_private" value="قوي جدا"> <label >قوي جدا</label>     
                  </div>
            </div>

            <div class="text-center">
                  <a class="d-block" >في حالة وجود اسباب أخري يرجى اضافتها في القسم الخامس</a>
                  <a class="arrowww" href="#phase5"></a>
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

        // Get references to the link element and the target section
        var link = document.querySelector(".arrowww");
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

        setupCheckboxToggle('behavioral_and_cultural_reasons', 'showRadio1');
        setupCheckboxToggle('road_engineering_and_planning', 'showRadio2');
        setupCheckboxToggle('traffic_management_reasons', 'showRadio3');
        setupCheckboxToggle('reasons_of_mass_transit', 'showRadio4');
        setupCheckboxToggle('reasons_of_pedestrian_and_bicycle', 'showRadio5');
        setupCheckboxToggle('reasons_of_legislation_and_laws', 'showRadio6');

        setupCheckboxToggle('wrong_Mlaki_parking', 'showRadio7');
        setupCheckboxToggle('random_crossing_of_road', 'showRadio8');
        setupCheckboxToggle('random_bus_stop', 'showRadio9');
        setupCheckboxToggle('excessive_passenger_car_exit', 'showRadio14');
        setupCheckboxToggle('low_bicycle_usage_lack_of_pedestrian', 'showRadio16');

        setupCheckboxToggle('insufficient_traffic_lights', 'showRadio17');
        setupCheckboxToggle('excessive_roundabouts', 'showRadio18');
        setupCheckboxToggle('poor_bridge_interchanges_design', 'showRadio19');
        setupCheckboxToggle('insufficient_road_or_tunnel_width', 'showRadio20');
        setupCheckboxToggle('bus_and_microbus_stops_in_riverway', 'showRadio21');
        setupCheckboxToggle('insufficient_taxi_pickup_and_drop_off_areas', 'showRadio22');
        setupCheckboxToggle('insufficient_parking_around_commercial_areas', 'showRadio23');
        setupCheckboxToggle('concentration_of_government_and_private_entities_work', 'showRadio24');
        setupCheckboxToggle('insufficient_alternatives_for_urban_transportation', 'showRadio25');
            setupCheckboxToggle('poor_official_public_transport_service_level', 'showRadio26');
            setupCheckboxToggle('lack_of_appropriate_pedestrian_crossings', 'showRadio27');
            setupCheckboxToggle('difficulty_using_pedestrian_crossings', 'showRadio28');
            setupCheckboxToggle('lack_of_bicycle_lanes', 'showRadio29');
            setupCheckboxToggle('commercial_entities_using_sidewalks', 'showRadio30');
            setupCheckboxToggle('poor_bridge_design_for_pedestrians', 'showRadio31');
            setupCheckboxToggle('lack_of_separation_between_traffic_and_pedestrian_paths', 'showRadio32');
            setupCheckboxToggle('non_compliance_with_traffic_signs_specifications', 'showRadio33');
            setupCheckboxToggle('inappropriateness_of_public_transportation', 'showRadio34');
            setupCheckboxToggle('unavailability_of_public_transportation', 'showRadio35');
            setupCheckboxToggle('lack_of_integration_of_public_transportation', 'showRadio36');
            setupCheckboxToggle('high_cost_of_public_transportation', 'showRadio37');
            setupCheckboxToggle('lack_of_scheduled_timings', 'showRadio38');
            setupCheckboxToggle('driver_ill_treatment', 'showRadio39');
            setupCheckboxToggle('lack_of_air_conditioning', 'showRadio40');
            setupCheckboxToggle('unwillingness_to_walk_long_distances', 'showRadio41');
            setupCheckboxToggle('fear_and_lack_of_safety', 'showRadio42');
            setupCheckboxToggle('Government_and_private_offices_and_services', 'showRadio43');
            setupCheckboxToggle('Working_hours_for_both_government_and_private', 'showRadio44');


    });
</script>

</body>
</html>




