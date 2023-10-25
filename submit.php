<?php
$servername = 'localhost';
    $username = 'naderossama';
    $password = '';
    $dbname = 'survey';
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //section 1
    $gender = $_POST['gender'] ?? '';
    $age = $_POST['age'] ?? '';
    $education = $_POST['education'] ?? '';
    $experience_street = $_POST['experience_street'] ?? '';
    $driving_license = $_POST['driving_license'] ?? '';
    $private_car_radio = $_POST['private_car_radio'] ?? 0;
    $private_bus_radio = $_POST['private_bus_radio'] ?? 0;
    $private_microbus_radio = $_POST['private_microbus_radio'] ?? 0;
    $private_taxi_radio = $_POST['private_taxi_radio'] ?? 0;
    $private_motorcycle_radio = $_POST['private_motorcycle_radio'] ?? 0;
    $private_train_radio = $_POST['private_train_radio'] ?? 0;
    $private_bike_radio = $_POST['private_bike_radio'] ?? 0;

    $road_usage6amTo9am = $_POST['road_usage6amTo9am'] ?? 0;
    $road_usage9amTo12am = $_POST['road_usage9amTo12am'] ?? 0;
    $road_usage12amTo3pm = $_POST['road_usage12amTo3pm'] ?? 0;
    $road_usage3pmTo5pm = $_POST['road_usage3pmTo5pm'] ?? 0;
    $road_usage5pmTo8pm = $_POST['road_usage5pmTo8pm'] ?? 0;
    $road_usage8pmTo11pm = $_POST['road_usage8pmTo11pm'] ?? 0;

    //section 2 
    $road_usage6amTo9amCairo = $_POST['road_usage6amTo9amCairo'] ?? 0;
    $road_usage9amTo12amCairo = $_POST['road_usage9amTo12amCairo'] ?? 0;
    $road_usage12amTo3pmCairo = $_POST['road_usage12amTo3pmCairo'] ?? 0;
    $road_usage3pmTo5pmCairo = $_POST['road_usage3pmTo5pmCairo'] ?? 0;
    $road_usage5pmTo8pmCairo = $_POST['road_usage5pmTo8pmCairo'] ?? 0;
    $road_usage8pmTo11pmCairo = $_POST['road_usage8pmTo11pmCairo'] ?? 0;

    $traffic_median_signals = $_POST['traffic_median_signals'] ?? 0;
    $traffic_median_no_signals = $_POST['traffic_median_no_signals'] ?? 0;
    $roundabouts = $_POST['roundabouts'] ?? 0;
    $around_commercial_areas = $_POST['around_commercial_areas'] ?? 0;
    $bridge_interchanges = $_POST['bridge_interchanges'] ?? 0;
    $areas_with_street_vendors = $_POST['areas_with_street_vendors'] ?? 0;

    $example_type_location = $_POST['example_type_location'] ?? '';
    $addressLocation = $_POST['address'];
    $latitude = $_POST['latitude'] ?? '';
    $longitude = $_POST['longitude'] ?? '';
    $example_type_timing = $_POST['example_type_timing'] ?? '';

    

    $selected_days = $_POST['example_type_day'] ?? [];
    $imploded_days = !empty($selected_days) ? implode(",", $selected_days) : '';





    /* section 3 */
    $behavioral_and_cultural_reasons = $_POST['behavioral_and_cultural_reasons'] ?? 0;
    $road_engineering_and_planning = $_POST['road_engineering_and_planning'] ?? 0;
    $traffic_management_reasons = $_POST['traffic_management_reasons'] ?? 0;
    $reasons_of_mass_transit = $_POST['reasons_of_mass_transit'] ?? 0;
    $reasons_of_pedestrian_and_bicycle = $_POST['reasons_of_pedestrian_and_bicycle'] ?? 0;
    $reasons_of_legislation_and_laws = $_POST['reasons_of_legislation_and_laws'] ?? 0;

    $wrong_Mlaki_parking = $_POST['wrong_Mlaki_parking'] ?? 0;
    $random_bus_stop = $_POST['random_bus_stop'] ?? 0;
    $random_crossing_of_road = $_POST['random_crossing_of_road'] ?? 0;
    $excessive_passenger_car_exit = $_POST['excessive_passenger_car_exit'] ?? 0;
    $low_bicycle_usage_lack_of_pedestrian = $_POST['low_bicycle_usage_lack_of_pedestrian'] ?? 0;

    $insufficient_road_or_tunnel_width = $_POST['insufficient_road_or_tunnel_width'] ?? 0;
    $poor_bridge_interchanges_design = $_POST['poor_bridge_interchanges_design'] ?? 0;
    $excessive_roundabouts = $_POST['excessive_roundabouts'] ?? 0;
    $poor_bridge_design_for_pedestrians = $_POST['poor_bridge_design_for_pedestrians'] ?? 0;
    $insufficient_parking_around_commercial_areas = $_POST['insufficient_parking_around_commercial_areas'] ?? 0;

    $insufficient_traffic_lights = $_POST['insufficient_traffic_lights'] ?? 0;
    $bus_and_microbus_stops_in_riverway = $_POST['bus_and_microbus_stops_in_riverway'] ?? 0;
    $lack_of_bicycle_lanes = $_POST['lack_of_bicycle_lanes'] ?? 0;
    $non_compliance_with_traffic_signs_specifications = $_POST['non_compliance_with_traffic_signs_specifications'] ?? 0;
    $poor_official_public_transport_service_level = $_POST['poor_official_public_transport_service_level'] ?? 0;
    $commercial_entities_using_sidewalks = $_POST['commercial_entities_using_sidewalks'] ?? 0;

    $insufficient_taxi_pickup_and_drop_off_areas = $_POST['insufficient_taxi_pickup_and_drop_off_areas'] ?? 0;
    $concentration_of_government_and_private_entities_work = $_POST['concentration_of_government_and_private_entities_work'] ?? 0;
    $insufficient_alternatives_for_urban_transportation = $_POST['insufficient_alternatives_for_urban_transportation'] ?? 0;
    $lack_of_appropriate_pedestrian_crossings = $_POST['lack_of_appropriate_pedestrian_crossings'] ?? 0;
    $difficulty_using_pedestrian_crossings = $_POST['difficulty_using_pedestrian_crossings'] ?? 0;

    $lack_of_separation_between_traffic_and_pedestrian_paths = $_POST['lack_of_separation_between_traffic_and_pedestrian_paths'] ?? 0;
    $inappropriateness_of_public_transportation = $_POST['inappropriateness_of_public_transportation'] ?? 0;
    $unavailability_of_public_transportation = $_POST['unavailability_of_public_transportation'] ?? 0;
    $lack_of_integration_of_public_transportation = $_POST['lack_of_integration_of_public_transportation'] ?? 0;
    $high_cost_of_public_transportation = $_POST['high_cost_of_public_transportation'] ?? 0;
    $lack_of_scheduled_timings = $_POST['lack_of_scheduled_timings'] ?? 0;

    $driver_ill_treatment = $_POST['driver_ill_treatment'] ?? 0;
    $lack_of_air_conditioning = $_POST['lack_of_air_conditioning'] ?? 0;
    $unwillingness_to_walk_long_distances = $_POST['unwillingness_to_walk_long_distances'] ?? 0;
    $fear_and_lack_of_safety = $_POST['fear_and_lack_of_safety'] ?? 0;
    $Government_and_private_offices_and_services = $_POST['Government_and_private_offices_and_services'] ?? 0;
    $Working_hours_for_both_government_and_private = $_POST['Working_hours_for_both_government_and_private'] ?? 0;
    

    // section 4
    $Places_designated_for_pedestrian_crossing = $_POST['Places_designated_for_pedestrian_crossing'] ?? 0;
    $Traffic_lanes_bridges_and_turns = $_POST['Traffic_lanes_bridges_and_turns'] ?? 0;
    $Reducing_private_car_peak_times = $_POST['Reducing_private_car_peak_times'] ?? 0;
    $Anticipation_walking_using_bicycles_and_electric = $_POST['Anticipation_walking_using_bicycles_and_electric'] ?? 0;
    $Use_mass_transport_and_shared_transport = $_POST['Use_mass_transport_and_shared_transport'] ?? 0;
    $Mobile_applications_report_places_of_crowding = $_POST['Mobile_applications_report_places_of_crowding'] ?? 0;

    $placesCrossingCheckbox = $_POST["placesCrossingCheckbox"] ?? 0;
    $roadExpansionCheckbox = $_POST["roadExpansionCheckbox"] ?? 0;
    $parkingAvailabilityCheckbox = $_POST["parkingAvailabilityCheckbox"] ?? 0;
    $roadMaintenanceCheckbox = $_POST["roadMaintenanceCheckbox"] ?? 0;
    $passengerLoadingAreasCheckbox = $_POST["passengerLoadingAreasCheckbox"] ?? 0;

    $checkBoxIntersections1 = $_POST["checkBoxIntersections1"] ?? 0;
    $checkBoxIntersections2 = $_POST["checkBoxIntersections2"] ?? 0;
    $checkBoxIntersections3 = $_POST["checkBoxIntersections3"] ?? 0;
    $checkBoxIntersections4 = $_POST["checkBoxIntersections4"] ?? 0;
    $checkBoxIntersections5 = $_POST["checkBoxIntersections5"] ?? 0;

    $checkBoxIntersectionPlaces1 = $_POST["checkBoxIntersectionPlaces1"] ?? 0;
    $checkBoxIntersectionPlaces2 = $_POST["checkBoxIntersectionPlaces2"] ?? 0;
    $checkBoxIntersectionPlaces3 = $_POST["checkBoxIntersectionPlaces3"] ?? 0;
    $checkBoxIntersectionPlaces4 = $_POST["checkBoxIntersectionPlaces4"] ?? 0;
    $checkBoxIntersectionPlaces5 = $_POST["checkBoxIntersectionPlaces5"] ?? 0;

    $checkBoxIntersectionBikers1 = $_POST["checkBoxIntersectionBikers1"] ?? 0;
    $checkBoxIntersectionBikers2 = $_POST["checkBoxIntersectionBikers2"] ?? 0;
    $checkBoxIntersectionBikers3 = $_POST["checkBoxIntersectionBikers3"] ?? 0;
    $checkBoxIntersectionBikers4 = $_POST["checkBoxIntersectionBikers4"] ?? 0;

    $checkBoxIntersectionLegislation1 = $_POST["checkBoxIntersectionLegislation1"] ?? 0;
    $checkBoxIntersectionLegislation2 = $_POST["checkBoxIntersectionLegislation2"] ?? 0;
    $checkBoxIntersectionLegislation3 = $_POST["checkBoxIntersectionLegislation3"] ?? 0;
    $checkBoxIntersectionLegislation4 = $_POST["checkBoxIntersectionLegislation4"] ?? 0;
    $checkBoxIntersectionLegislation5 = $_POST["checkBoxIntersectionLegislation5"] ?? 0;
    $checkBoxIntersectionLegislation6 = $_POST["checkBoxIntersectionLegislation6"] ?? 0;

    //section 5
    $proposal_1 = $_POST["proposal_1"] ?? 'Null';
    $proposal_2 = $_POST["proposal_2"] ?? 'Null';
    $proposal_3 = $_POST["proposal_3"] ?? 'Null';

    
    $sql = "INSERT INTO traffic_survey (
        gender, age, education, experience_street, driving_license,
        private_car_radio, private_bus_radio, private_microbus_radio,
        private_taxi_radio, private_motorcycle_radio, private_train_radio, private_bike_radio,
        road_usage6amTo9am, road_usage9amTo12am, road_usage12amTo3pm,
        road_usage3pmTo5pm, road_usage5pmTo8pm, road_usage8pmTo11pm,
        road_usage6amTo9amCairo, road_usage9amTo12amCairo, road_usage12amTo3pmCairo,
        road_usage3pmTo5pmCairo, road_usage5pmTo8pmCairo, road_usage8pmTo11pmCairo,
        traffic_median_signals, traffic_median_no_signals, roundabouts,
        around_commercial_areas, bridge_interchanges, areas_with_street_vendors,
        example_type_location, address, latitude, longitude, example_type_timing, example_type_day,
        behavioral_and_cultural_reasons, road_engineering_and_planning, traffic_management_reasons,
        reasons_of_mass_transit, reasons_of_pedestrian_and_bicycle, reasons_of_legislation_and_laws,
        wrong_Mlaki_parking, random_bus_stop, random_crossing_of_road, excessive_passenger_car_exit,
        low_bicycle_usage_lack_of_pedestrian, insufficient_road_or_tunnel_width, poor_bridge_interchanges_design,
        excessive_roundabouts, poor_bridge_design_for_pedestrians, insufficient_parking_around_commercial_areas,
        insufficient_traffic_lights, bus_and_microbus_stops_in_riverway, lack_of_bicycle_lanes,
        non_compliance_with_traffic_signs_specifications, poor_official_public_transport_service_level,
        commercial_entities_using_sidewalks, insufficient_taxi_pickup_and_drop_off_areas,
        concentration_of_government_and_private_entities_work, insufficient_alternatives_for_urban_transportation,
        lack_of_appropriate_pedestrian_crossings, difficulty_using_pedestrian_crossings,
        lack_of_separation_between_traffic_and_pedestrian_paths, inappropriateness_of_public_transportation,
        unavailability_of_public_transportation, lack_of_integration_of_public_transportation,
        high_cost_of_public_transportation, lack_of_scheduled_timings, driver_ill_treatment,
        lack_of_air_conditioning, unwillingness_to_walk_long_distances, fear_and_lack_of_safety,
        Government_and_private_offices_and_services, Working_hours_for_both_government_and_private,
        Places_designated_for_pedestrian_crossing,
        Traffic_lanes_bridges_and_turns,
        Reducing_private_car_peak_times,
        Anticipation_walking_using_bicycles_and_electric,
        Use_mass_transport_and_shared_transport,
        Mobile_applications_report_places_of_crowding,
        placesCrossingCheckbox, roadExpansionCheckbox, parkingAvailabilityCheckbox, roadMaintenanceCheckbox, passengerLoadingAreasCheckbox,
        checkBoxIntersections1, checkBoxIntersections2, checkBoxIntersections3, checkBoxIntersections4, checkBoxIntersections5,
        checkBoxIntersectionPlaces1, checkBoxIntersectionPlaces2, checkBoxIntersectionPlaces3, checkBoxIntersectionPlaces4, checkBoxIntersectionPlaces5,
        checkBoxIntersectionBikers1, checkBoxIntersectionBikers2, checkBoxIntersectionBikers3, checkBoxIntersectionBikers4,
        checkBoxIntersectionLegislation1,
        checkBoxIntersectionLegislation2,
        checkBoxIntersectionLegislation3,
        checkBoxIntersectionLegislation4,
        checkBoxIntersectionLegislation5,
        checkBoxIntersectionLegislation6,
        otherCrowdedPlaces, otherCausesCrowding, otherCongestionSolutions
    ) VALUES (
        '$gender', '$age', '$education', '$experience_street', '$driving_license',
        '$private_car_radio', '$private_bus_radio', '$private_microbus_radio',
        '$private_taxi_radio', '$private_motorcycle_radio', '$private_train_radio', '$private_bike_radio',
        '$road_usage6amTo9am', '$road_usage9amTo12am', '$road_usage12amTo3pm',
        '$road_usage3pmTo5pm', '$road_usage5pmTo8pm', '$road_usage8pmTo11pm',
        '$road_usage6amTo9amCairo', '$road_usage9amTo12amCairo', '$road_usage12amTo3pmCairo',
        '$road_usage3pmTo5pmCairo', '$road_usage5pmTo8pmCairo', '$road_usage8pmTo11pmCairo',
        '$traffic_median_signals', '$traffic_median_no_signals', '$roundabouts',
        '$around_commercial_areas', '$bridge_interchanges', '$areas_with_street_vendors',
        '$example_type_location', '$addressLocation', '$latitude', '$longitude', '$example_type_timing', '$imploded_days',
        '$behavioral_and_cultural_reasons', '$road_engineering_and_planning', '$traffic_management_reasons',
        '$reasons_of_mass_transit', '$reasons_of_pedestrian_and_bicycle', '$reasons_of_legislation_and_laws',
        '$wrong_Mlaki_parking', '$random_bus_stop', '$random_crossing_of_road', '$excessive_passenger_car_exit',
        '$low_bicycle_usage_lack_of_pedestrian', '$insufficient_road_or_tunnel_width', '$poor_bridge_interchanges_design',
        '$excessive_roundabouts', '$poor_bridge_design_for_pedestrians', '$insufficient_parking_around_commercial_areas',
        '$insufficient_traffic_lights', '$bus_and_microbus_stops_in_riverway', '$lack_of_bicycle_lanes',
        '$non_compliance_with_traffic_signs_specifications', '$poor_official_public_transport_service_level',
        '$commercial_entities_using_sidewalks', '$insufficient_taxi_pickup_and_drop_off_areas',
        '$concentration_of_government_and_private_entities_work', '$insufficient_alternatives_for_urban_transportation',
        '$lack_of_appropriate_pedestrian_crossings', '$difficulty_using_pedestrian_crossings',
        '$lack_of_separation_between_traffic_and_pedestrian_paths', '$inappropriateness_of_public_transportation',
        '$unavailability_of_public_transportation', '$lack_of_integration_of_public_transportation',
        '$high_cost_of_public_transportation', '$lack_of_scheduled_timings', '$driver_ill_treatment',
        '$lack_of_air_conditioning', '$unwillingness_to_walk_long_distances', '$fear_and_lack_of_safety',
        '$Government_and_private_offices_and_services', '$Working_hours_for_both_government_and_private',
        '$Places_designated_for_pedestrian_crossing',
        '$Traffic_lanes_bridges_and_turns',
        '$Reducing_private_car_peak_times',
        '$Anticipation_walking_using_bicycles_and_electric',
        '$Use_mass_transport_and_shared_transport',
        '$Mobile_applications_report_places_of_crowding',
        '$placesCrossingCheckbox', '$roadExpansionCheckbox', '$parkingAvailabilityCheckbox', '$roadMaintenanceCheckbox', '$passengerLoadingAreasCheckbox',
        '$checkBoxIntersections1', '$checkBoxIntersections2', '$checkBoxIntersections3', '$checkBoxIntersections4', '$checkBoxIntersections5',
        '$checkBoxIntersectionPlaces1', '$checkBoxIntersectionPlaces2', '$checkBoxIntersectionPlaces3', '$checkBoxIntersectionPlaces4', '$checkBoxIntersectionPlaces5',
        '$checkBoxIntersectionBikers1', '$checkBoxIntersectionBikers2', '$checkBoxIntersectionBikers3', '$checkBoxIntersectionBikers4',
        '$checkBoxIntersectionLegislation1',
        '$checkBoxIntersectionLegislation2', 
        '$checkBoxIntersectionLegislation3', 
        '$checkBoxIntersectionLegislation4',
        '$checkBoxIntersectionLegislation5', 
        '$checkBoxIntersectionLegislation6',
        '$proposal_1', '$proposal_2', '$proposal_3'
)";


    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}







